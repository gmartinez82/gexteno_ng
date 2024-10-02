<?php
/**
 * @author Esteban Martinez
 * @creado 07/08/2016
 * @modificado_por Esteban Martinez, Pablo Rosenberger
 * @modificado 19/10/2016
 * @modificado 13/01/2017
 */
include_once "_autoload.php";

$db_nombre_objeto = "os_orden_servicio_gestion";
$hdn_error = 1;

$os_orden_servicio = new OsOrdenServicio();
$inicializar = true;


if(Gral::esPost())
{
    
    $id = Gral::getVars(1, "hdn_id", 0);
    
    if($id != 0)
    {
        $os_orden_servicio = OsOrdenServicio::getOxId($id);
        $inicializar = false;
    }
    
    $txt_fecha              = Gral::getVars(1, "txt_fecha", "");
    $cmb_per_persona_id     = Gral::getVars(1, "cmb_per_persona_id"    , null);
    $cmb_os_tipo_id         = Gral::getVars(1, "cmb_os_tipo_id"        , null);
    $txa_notificacion       = Gral::getVars(1, "txa_notificacion"      , "");
    $txt_fecha_hecho        = Gral::getVars(1, "txt_fecha_hecho", "");
    $cmb_os_prioridad_id    = Gral::getVars(1, "cmb_os_prioridad_id"    , null);
    $txt_dias_para_descargo = Gral::getVars(1, "txt_dias_para_descargo", "");
    $txa_observacion        = Gral::getVars(1, "txa_observacion"       , "");
    
    
    $txt_fecha       = Gral::getFechaToDb($txt_fecha);
    $txt_fecha_hecho = Gral::getFechaToDb($txt_fecha_hecho);
    
    //Gral::prr($_POST);
    
    $os_orden_servicio->setFecha($txt_fecha);
    $os_orden_servicio->setPerPersonaId($cmb_per_persona_id);
    $os_orden_servicio->setOsTipoId($cmb_os_tipo_id);
    $os_orden_servicio->setNotificacion($txa_notificacion);
    $os_orden_servicio->setFechaHecho($txt_fecha_hecho);
    $os_orden_servicio->setOsPrioridadId($cmb_os_prioridad_id);
    $os_orden_servicio->setDiasParaDescargo($txt_dias_para_descargo);
    $os_orden_servicio->setObservacion($txa_observacion);
    
    // control de errores
    $estado = true;
    
    // fecha
    if(!Ctrl::esFechaValida($txt_fecha)){
        $txt_fecha_error = "Debe indicar una fecha valida.";
        $estado = false;
    }
    else
    {
        if(!Date::esRangoValido($txt_fecha, date("Y-m-d")))
        {
            $txt_fecha_error = "La fecha no puede mayor a la fecha actual.";
            $estado = false;
        }
    }
    
    // tipo persona
    if(Ctrl::esVacio($cmb_per_persona_id)){
        $cmb_per_persona_id_error = "Debe indicar la persona.";
        $estado = false;
    }
    
    // tipo orden servicio
    if(Ctrl::esVacio($cmb_os_tipo_id)){
        $cmb_os_tipo_id_error = "Debe indicar el tipo de orden de servicio.";
        $estado = false;
    }
    
    //notificacion
    if(Ctrl::esVacio($txa_notificacion)){
        $txa_notificacion_error = "Debe cargar una notificacion.";
        $estado = false;
    }
    
    //fecha hecho
    if(!Ctrl::esFechaValida($txt_fecha_hecho)){
        $txt_fecha_hecho_error = "Debe indicar una fecha de hecho valida.";
        $estado = false;
    }
    else
    {
        if(!Date::esRangoValido($txt_fecha_hecho, $txt_fecha))
        {
            $txt_fecha_hecho_error = "La fecha del hecho no puede mayor a la fecha de la Orden.";
            $estado = false;
        }
    }
    
    //prioridad
    if(Ctrl::esVacio($cmb_os_prioridad_id)){
        $cmb_os_prioridad_id_error = "Debe indicar una Prioridad.";
        $estado = false;
    }
    
    //dias para descargo
    if(Ctrl::esVacio($txt_dias_para_descargo) ||  $txt_dias_para_descargo == 0){
       
        $txt_dias_para_descargo_error = "Debe cargar un dia para descargo.";
        $estado = false;
        
    }
    
    //Save o Edit
    if($estado)
    {
        //Gral::prr($object);
        if($inicializar)
        {
            //El save esta aqui dentro
            $os_orden_servicio = $os_orden_servicio->setInicializarOsOrdenServicio();//OsReclamo::inicializarReclamo($object);
        }
        else
        {
            $os_orden_servicio = $os_orden_servicio->setModificarOsOrdenServicio();
        }
        
        $hdn_error = 0;
    }
    
}
else
{
    
    $id = Gral::getVars(2, "os_id", 0);
    if($id != 0)
    {
        $os_orden_servicio = OsOrdenServicio::getOxId($id);
    }
    else
    {
        $txt_fecha = date("Y-m-d");
        
        $os_orden_servicio->setFecha($txt_fecha);
        
        $os_orden_servicio->setDiasParaDescargo(OsOrdenServicio::DIAS_PARA_DESCARGO);
    }
    
}


?>

<form id="form_div_modal" name="form_div_modal" method="post" action="<?php echo Gral::getPath("path_http")."admin/ajax/modulos/os_orden_servicio_gestion/modal_os_agregar.php" ?>" >
    
    <div class="datos os agregar" >
        
        <div class="col general">
            <div class="col c1">
                
                <div class="par">
                    <div class="label">
                        <?php Lang::_lang("Fecha") ?>
                    </div>
                    <div class="dato">
                        <input id="txt_fecha" name="txt_fecha" type="text" class="textbox" value="<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFecha())); ?>" size="12" readonly />
                        <input id="cal_txt_fecha" type="button"  value="..." />
                        
                        <script type="text/javascript">
                            Calendar.setup({
                                inputField: "txt_fecha", ifFormat: "%d/%m/%Y", button: "cal_txt_fecha"
                            });
                        </script>
                        
                        <div class="error label-error" id="txt_fecha_error"><?php Gral::_echo($txt_fecha_error) ?></div>
                    </div>
                </div>
                
                <div class="par">
                    <div class="label">
                        <?php Lang::_lang("Persona") ?>
                    </div>
                    <div class="dato">
                        <?php //Html::html_dib_select(1, "cmb_per_persona_id", Gral::getCmbFiltro(PerPersona::getPerPersonasCmbF(),"..."), $os_orden_servicio->getPerPersonaId(), "textbox") ?>
		        <?php echo Html::html_get_dbsuggest(1, 'cmb_per_persona', 'ajax/modulos/per_persona_gestion/per_persona_gestion_dbsuggest_custom.php', false, true, true, '...', ($os_orden_servicio->getPerPersonaId() != 'null') ? $os_orden_servicio->getPerPersonaId() : null, $os_orden_servicio->getPerPersona()->getDescripcion()) ?>
                        <div id="cmb_per_persona_id_error" class="error label-error" >
                            <?php Gral::_echo($cmb_per_persona_id_error) ?>
                        </div>
                    </div>
                </div>
                
                <div class="par">
                   <div class="label">
                       <?php Lang::_lang("Tipo OS") ?>
                   </div>
                   <div class="dato">
                       <?php //Html::html_dib_select(1, "cmb_os_tipo_id", Gral::getCmbFiltro(OsTipo::getOsTiposCmbF(),"..."), $os_orden_servicio->getOsTipoId(), "textbox") ?>
                       <?php echo Html::html_get_dbsuggest(1, 'cmb_os_tipo', 'ajax/modulos/os_tipo/os_tipo_dbsuggest.php', false, true, true, '...', ($os_orden_servicio->getOsTipoId() != 'null') ? $os_orden_servicio->getOsTipoId() : null, $os_orden_servicio->getOsTipo()->getDescripcion()) ?>
                       <div id="cmb_os_tipo_id_error" class="error label-error" ><?php Gral::_echo($cmb_os_tipo_id_error) ?></div>
                   </div>
                </div>
                
                <div class="par">
                    <div class="label"><?php Lang::_lang("Notificacion") ?></div>
                    <div class="dato">
                        <textarea id="txa_notificacion" name="txa_notificacion" rows="6" cols="70" class="textbox "><?php Gral::_echoTxt($os_orden_servicio->getNotificacion()) ?></textarea>
                        <div class="error label-error" id="txa_notificacion_error"><?php Gral::_echo($txa_notificacion_error) ?></div>
                    </div>
                </div>
                
                <div class="par">
                    <div class="label">
                        <?php Lang::_lang("Fecha del Hecho") ?>
                    </div>
                    <div class="dato">
                        <input id="txt_fecha_hecho" name="txt_fecha_hecho" type="text" class="textbox" value="<?php Gral::_echoTxt(Gral::getFechaToWeb($os_orden_servicio->getFechaHecho())); ?>" size="12" readonly />
                        <input type="button" id="cal_txt_fecha_hecho" value="..." />
                        
                        <script type="text/javascript">
                            Calendar.setup({
                                inputField: "txt_fecha_hecho", ifFormat: "%d/%m/%Y", button: "cal_txt_fecha_hecho"
                            });
                        </script>
                        
                        <div class="error label-error" id="txt_fecha_error"><?php Gral::_echo($txt_fecha_hecho_error) ?></div>
                        
                    </div>
                </div>
                
                <div class="par">
                   <div class="label">
                       <?php Lang::_lang("Prioridad") ?>
                   </div>
                   <div class="dato">
                       <?php Html::html_dib_select(1, "cmb_os_prioridad_id", Gral::getCmbFiltro(OsPrioridad::getOsPrioridadsCmbF(),"..."), $os_orden_servicio->getOsPrioridadId(), "textbox") ?>
                       <div id="cmb_os_prioridad_id_error" class="error label-error" ><?php Gral::_echo($cmb_os_prioridad_id_error) ?></div>
                   </div>
                </div>
                
                <div class="par">
                    <div class="label"><?php Lang::_lang("Dias para descargo") ?></div>
                    <div class="dato">
                        <input id="txt_dias_para_descargo" name="txt_dias_para_descargo" type="text" class="textbox" value="<?php Gral::_echo($os_orden_servicio->getDiasParaDescargo()); ?>" size="5" />
                        <div class="error label-error" id="txt_dias_para_descargo_error"><?php Gral::_echo($txt_dias_para_descargo_error) ?></div>
                    </div>
                </div>
                
                <div class="par">
                    <div class="label"><?php Lang::_lang("Observaciones"); ?></div>
                    <div class="dato">
                        <textarea id="txa_observacion" name="txa_observacion" rows="2" cols="70" class="textbox "><?php Gral::_echoTxt($os_orden_servicio->getObservacion()); ?></textarea>
                        <div class="error label-error" id="txa_observacion_error"><?php Gral::_echo($txa_observacion_error) ?></div>
                    </div>
                </div>
                
                <!-- oculto por ahora hasta resolver -->
                <div class="par" style="display:none;">
                    <div class="label"><?php Lang::_lang("Notificacion Mecano"); ?>?</div>
                    <div class="dato">
                        <input id="chk_notificacion_mecano" type="checkbox" name="chk_notificacion_mecano" value="1" checked="checked" />
                    </div>
                </div>
            </div>    
        </div>
        
        <div class="botonera">
            <input name='hdn_id' type='hidden' id='hdn_id' size='1' value='<?php Gral::_echoTxt($os_orden_servicio->getId()) ?>'/>
            <input name='hdn_error' type='hidden' class="hdn_error" id='hdn_error' size='1' value='<?php Gral::_echoTxt($hdn_error) ?>'/>
            <input name='btn_guardar' class="btn_guardar boton" type='button' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
        </div>
    </div>
    
    <div class="div_modal_modal"></div>

</form>

<script>
    setInit();
    setInitOsOrdenServicio();
</script>
