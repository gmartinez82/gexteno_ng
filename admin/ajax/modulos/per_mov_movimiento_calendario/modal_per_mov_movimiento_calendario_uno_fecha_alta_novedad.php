<?php
include "_autoload.php";

$fecha_ficha    = Gral::getVars(2, "fecha", "");
$per_persona_id = Gral::getVars(2, "persona_id", 0);
$tipo_accion    = Gral::getVars(2, "tipo_accion", 0);
$arr_chk_per_id = Gral::getVars(2, "chk_persona_id", 0);
$gral_dias      = GralDia::getGralDias(null, null, true);

$txt_desde_sugerido = Date::sumarDias(PerPersona::getSesFiltroFechaDesde(), 0);
$txt_hasta_sugerido = Date::sumarDias(PerPersona::getSesFiltroFechaDesde(), PerPersona::getSesDiasPantallaCantidad()-1);

if($fecha_ficha == ""){
    $fecha_ficha = $txt_desde_sugerido;
}

// -----------------------------------------------------------------------------
// se determina el array de personas
// -----------------------------------------------------------------------------
if (is_array($arr_chk_per_id))
{
    $arr_explode_persona_id = $arr_chk_per_id;
}
elseif ($per_persona_id != 0)
{
    $arr_explode_persona_id[] = $per_persona_id;
}
//Gral::prr($arr_explode_persona_id);
//exit;
if(!is_array($arr_explode_persona_id)){
    echo "Debe elegir al menos una persona";
    exit;
}
// -----------------------------------------------------------------------------

if ($tipo_accion == "alta_novedad_total")
{
    $label_tipo_accion = "Alta Novedad";
}
elseif ($tipo_accion == "alta_novedad_parcial")
{
    $label_tipo_accion = "Alta Novedad Parcial";
}
elseif ($tipo_accion == "editar_novedad")
{
    $arr = array();
    $label_tipo_accion = "Editar Novedad";
    
    $per_mov_planificacion_id = Gral::getVars(2, "per_mov_planificacion_id", 0);
    $per_mov_planificacion = PerMovPlanificacion::getOxId($per_mov_planificacion_id);
    
    if ($per_mov_planificacion)
    {
        $gral_novedad_id                      = $per_mov_planificacion->getGralNovedadId();
        $cmb_pln_jornada_id                   = $per_mov_planificacion->getPlnJornadaId();
        $cmb_gral_novedad_motivo_id           = $per_mov_planificacion->getGralNovedadMotivoId(); //el motivo que tiene la planificacion
        $cmb_gral_novedad_motivo_extendido_id = $per_mov_planificacion->getGralNovedadMotivoExtendidoId(); //el motivo ext de la planificacion
        $txa_observacion                      = $per_mov_planificacion->getObservacion();
        $gral_novedad_horas                   = $per_mov_planificacion->getHoras();
        
        $gral_novedad = GralNovedad::getOxId($gral_novedad_id);
        if ($gral_novedad)
        {
            //todos los motivos de la novedad
            $gral_novedad_motivos = $gral_novedad->getGralNovedadMotivos();
            if ($gral_novedad_motivos){
                foreach ($gral_novedad_motivos as $o){
                    $cont++;
                    $arr_motivo[$cont]["cod"] = $o->getId();
                    $arr_motivo[$cont]["descripcion"] = $o->getDescripcion();
                }
            }
            
            $gral_novedad_motivo = GralNovedadMotivo::getOxId($cmb_gral_novedad_motivo_id);
            if ($gral_novedad_motivo){
                $gral_novedad_motivo_extendidos = $gral_novedad_motivo->getGralNovedadMotivoExtendidos();
                if ($gral_novedad_motivo_extendidos){
                    foreach ($gral_novedad_motivo_extendidos as $o){
                        $cont++;
                        $arr_motivo_extendido[$cont]["cod"] = $o->getId();
                        $arr_motivo_extendido[$cont]["descripcion"] = $o->getDescripcion();
                    }
                }
            }
            
            $gral_novedad_codigo = $gral_novedad->getCodigo();
            
            $pln_jornadas = $gral_novedad->getPlnJornadas(); //todas las jornadas que tenga la novedad
            if ($pln_jornadas)
            {
                foreach ($pln_jornadas as $o)
                {
                    $cont++;
                    $arr[$cont]["cod"] = $o->getId();
                    $arr[$cont]["descripcion"] = $o->getDescripcion();
                    
                    if ($o->getId() == $cmb_pln_jornada_id)
                    {
                        $pln_jornada_planificacion = PlnJornada::getOxId($cmb_pln_jornada_id);
                        //$pln_jornada_tramos = $pln_jornada_planificacion->getPlnJornadaTramos();
                        $pln_jornada_tramos = $pln_jornada_planificacion->getPlnJornadaTramos(null, null, true, array(array("campo" => "orden", "orden" => "asc")));
                    }
                }
            }
        }
        
        $per_mov_planificacion_tramos = $per_mov_planificacion->getPerMovPlanificacionTramos(null, null, true, array(array("campo" => "orden", "orden" => "asc")));
        //Gral::prr($per_mov_planificacion_tramos);
    }
}
elseif ($tipo_accion == "alta_novedad_total_masiva")
{
    $label_tipo_accion = "Alta Novedad Masiva";
    
    if ($arr_chk_per_id)
    {
        $string_persona_id = implode(",", $arr_chk_per_id);
        $per_persona_id = $string_persona_id;
    }
}


//Gral::prr($_GET);
?>

<div class="div-modal-alta-novedad">
    <form id="form_alta_novedad"                 name="form_alta_novedad">
        <input id="hdn_fecha"                    name="hdn_fecha"                    type="hidden" value="<?php Gral::_echo($fecha_ficha); ?>"/>
        <input id="hdn_per_persona_id"           name="hdn_per_persona_id"           type="hidden" value="<?php Gral::_echo($per_persona_id); ?>"/>
        <input id="hdn_tipo_accion"              name="hdn_tipo_accion"              type="hidden" value="<?php Gral::_echo($tipo_accion); ?>"/>
        <input id="hdn_gral_novedad_id"          name="hdn_gral_novedad_id"          type="hidden" value="<?php Gral::_echo($gral_novedad_id); ?>"/>
        <input id="hdn_per_mov_planificacion_id" name="hdn_per_mov_planificacion_id" type="hidden" value="<?php Gral::_echo($per_mov_planificacion_id); ?>"/>
        <div class="datos alta-novedad">
            
            <div class="per-personas">
                <?php 
                foreach ($arr_explode_persona_id as $persona_id)
                {
                    $per_persona_seleccionada = PerPersona::getOxId($persona_id);
                    ?>
                    <div class="uno per-persona">
                        <div class="foto avatar" title="<?php Gral::_echo($per_persona_seleccionada->getDescripcion()) ?>">
                            <a href="<?php echo $per_persona_seleccionada->getPathImagenPrincipal() ?>">
                                <img src="<?php echo $per_persona_seleccionada->getPathImagenPrincipal(true) ?>" alt="foto">
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            
            <div class="par">
                <div class="dato">
                    <?php // Lang::_lang(strtoupper($label_tipo_accion)); ?>
                </div>
            </div>
             
            <?php if ($tipo_accion != "alta_novedad_total_masiva"): ?>
                <div class="par">
                    <div class="label">
                        <?php Lang::_lang("Fecha"); ?>
                    </div>
                    <div class="dato">
                        <?php Gral::_echo(Gral::getFechaToWEB($fecha_ficha)); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="par">
                <div class="col gral-novedad">
                    <div class="label">
                        <?php Lang::_lang("Novedad"); ?>
                    </div>
                    <div class="dato">
                        <?php Html::html_dib_select(1, "cmb_gral_novedad_id", Gral::getCmbFiltro(GralNovedad::getGralNovedadsCmb(true, true), "..."), $gral_novedad_id, "textbox") ?>
                        <div id="cmb_gral_novedad_id_error" class="label-error" ></div>
                    </div>
                </div>
            </div>
            
            <div id="div_par_gral_novedad_motivo">
                <?php include "div_par_gral_novedad_motivo.php"; ?>
            </div>
            
            <!--<div id="div_par_gral_novedad_motivo_extendido">
            <?php //include "div_par_gral_novedad_motivo_extendido.php";   ?>
            </div>-->
            
            <div id="div_par_pln_jornada">
                <?php include "div_par_pln_jornada_alta_novedad.php"; ?>
            </div>
            
            <?php if ($tipo_accion == "alta_novedad_total" || ($tipo_accion == "alta_novedad_total_masiva")): ?>
                
                <div class="par">
                    <div class="label">
                        <?php Lang::_lang("Fecha Desde"); ?>
                    </div>
                    <div class="dato">
                        <?php if ($tipo_accion == "alta_novedad_total_masiva"): ?>
                            <input id="txt_fecha_desde" name="txt_fecha_desde" type="text" class="textbox" value="<?php Gral::_echo(Gral::getFechaToWEB($fecha_ficha)); ?>" size="12" />
                            <input id="cal_txt_fecha_desde" type="button"  value="..." />
                            <script type="text/javascript">
                                Calendar.setup({
                                    inputField: "txt_fecha_desde", ifFormat: "%d/%m/%Y", button: "cal_txt_fecha_desde", onUpdate: function()
                                    {
                                        setVarHiddenFecha();
                                        refreshDiasSemana();
                                    }
                                });
                            </script>
                            <div class="error label-error" id="txt_fecha_desde_error"><?php Gral::_echo($txt_fecha_desde_error) ?></div>
                        <?php else: ?> 
                            <?php Gral::_echo(Gral::getFechaToWEB($fecha_ficha)); ?>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="par">
                    <div class="label">
                        <?php Lang::_lang("Fecha Hasta") ?>
                    </div>
                    <div class="dato">
                        <input id="txt_fecha_hasta" name="txt_fecha_hasta" type="text" class="textbox" value="<?php Gral::_echo(Gral::getFechaToWEB($txt_hasta_sugerido)) ?>" size="12" />
                        <input id="cal_txt_fecha_hasta" type="button"  value="..." />
                        <script type="text/javascript">
                            Calendar.setup({
                                inputField: "txt_fecha_hasta", ifFormat: "%d/%m/%Y", button: "cal_txt_fecha_hasta", onUpdate: function()
                                {
                                    refreshDiasSemana();
                                    //setAdmBuscadorTop("os_orden_servicio_gestion");
                                }
                            });
                        </script>
                        <div class="error label-error" id="txt_fecha_hasta_error"><?php Gral::_echo($txt_fecha_hasta_error) ?></div>
                    </div>
                </div>
                
                <div class="par">
                    <div class="label">
                        <?php Lang::_lang("Elija dia de la semana") ?>
                    </div>
                    <div class="dato">
                        <div class="dias-semana">
                            <?php foreach ($gral_dias as $gral_dia): ?>
                                <div class="dia-semana">
                                    <input id="chk_gral_dia_<?php Gral::_echo($gral_dia->getCodigoNumero()); ?>" name="chk_gral_dia[<?php Gral::_echo($gral_dia->getCodigoNumero()); ?>]" class="chk_gral_dia" type="checkbox" value="<?php Gral::_echo($gral_dia->getCodigoNumero()); ?>"> 
                                    <label for="chk_gral_dia_<?php Gral::_echo($gral_dia->getCodigoNumero()); ?>"><?php Gral::_echo($gral_dia->getDescripcionCorta()); ?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="error label-error" id="chk_gral_dia_error"><?php Gral::_echo($chk_gral_dia_error) ?></div>
                    </div>
                </div>
            
            <?php endif; ?>
            
            <div class="par">
                <div class="label">
                    <?php Lang::_lang('Observaciones') ?>
                </div>
                <div class="dato">
                    <textarea id="txa_observacion" name="txa_observacion" rows="3" cols="60" class="textbox"><?php Gral::_echo($txa_observacion); ?></textarea>
                    <div id="txa_observacion_error" class="error label-error"><?php Gral::_echo($txa_observacion_error); ?></div>
                </div>
            </div>
            
            <div class="botonera">
                
                <div class="loading">
                    <img src="imgs/loading.gif" alt="loading" />
                    Procesando, aguarde un momento ...
                </div>
                
                <input class="boton" id='btn_novedad_guardar' name='btn_novedad_guardar' type='button' value='<?php Lang::_lang('Agregar Novedad') ?>' />
            </div>
            
        </div>
    </form>
</div>