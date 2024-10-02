<?php
/**
 * @creado_por Esteban Martinez
 * @creado 07/11/2016
 * @modificado_por Esteban Martinez
 * @modificado 08/11/2016
 * @modificado 09/11/2016
 * @modificado 10/11/2016
 * @modificado 12/11/2016
 * @modificado 15/11/2016
 */
include_once "_autoload.php";

$db_nombre_objeto = "os_orden_servicio_gestion";

$hdn_error = 1;
$estado = true;


$os_orden_servicio = new OsOrdenServicio();

$os_resolucion     = new OsResolucion();


if(Gral::esPost())
{
    
    $os_id = Gral::getVars(1, "hdn_os_id", 0);
    $os_resolucion_id = Gral::getVars(1, "hdn_os_resolucion_id", 0);
    
    $os_resolucion = OsResolucion::getOxId($os_resolucion_id);
    if($os_resolucion){
        $os_resolucion_suspension = $os_resolucion->getOsResolucionSuspension();
    }
    
    if($os_id != 0)
    {
        $os_orden_servicio = OsOrdenServicio::getOxId($os_id);
    }
    
    
    $txt_fecha_resolucion    = Gral::getVars(1, "txt_fecha_resolucion", "");
    $cmb_tipo_resolucion_id  = Gral::getVars(1, "cmb_tipo_resolucion_id", "");
    $txt_dias                = Gral::getVars(1, "txt_dias", "");
    $txt_fecha_inicio        = Gral::getVars(1, "txt_fecha_inicio", "");
    $cmb_afecta_haberes      = Gral::getVars(1, "cmb_afecta_haberes", 0);
    $txa_nota_publica        = Gral::getVars(1, "txa_nota_publica", "");
    $txa_observacion         = Gral::getVars(1, "txa_observacion", "");
    
    $txt_fecha_resolucion = Gral::getFechaToDb($txt_fecha_resolucion);
    
    // -------------------------------------------------------------------------
    // controles
    // -------------------------------------------------------------------------
    
    // fecha resolucion
    if(!Ctrl::esFechaValida($txt_fecha_resolucion)){
        $txt_fecha_resolucion_error = "Debe indicar una fecha valida.";
        $estado = false;
    }
    
    
    // tipo resolucion
    if(Ctrl::esVacio($cmb_tipo_resolucion_id)){
        $cmb_tipo_resolucion_id_error = "Debe indicar un tipo de resolucion.";
        $estado = false;
    }

    // nota publica
    if(Ctrl::esVacio($txa_nota_publica)){
        //$txa_nota_publica_error = "Debe cargar una nota publica.";
        //$estado = false;
    }    
    
    // observacion
    if(Ctrl::esVacio($txa_observacion)){
        //$txa_observacion_error = "Debe cargar una observacion.";
        //$estado = false;
    }
    
    
    //tipo resolucion
    $os_tipo_resolucion = OsTipoResolucion::getOxId($cmb_tipo_resolucion_id);
    $os_tipo_resolucion_codigo = $os_tipo_resolucion->getCodigo();
    
    
    if($os_tipo_resolucion_codigo === OsTipoResolucion::TIPO_SUSPENSION)
    {
        
        $txt_fecha_inicio = Gral::getFechaToDb($txt_fecha_inicio);
        
        //dias suspension
        if(Ctrl::esVacio($txt_dias)){
            $txt_dias_error = "Debe indicar los dias de suspension.";
            $estado = false;
        }
        
        //fecha resolucion
        if(!Ctrl::esFechaValida($txt_fecha_inicio)){
            $txt_fecha_inicio_error = "Debe indicar una fecha valida.";
            $estado = false;
        }
    }
    
    
    //Hacer el save
    if($estado)
    {
        
        $os_orden_servicio = $os_orden_servicio->setInicializarOsResolucion($os_resolucion_id, $txt_fecha_resolucion, $cmb_tipo_resolucion_id, $txa_nota_publica, $txa_observacion, $txt_dias, $txt_fecha_inicio, $cmb_afecta_haberes);
        
        $hdn_error = 0;
    }
    
}
else
{
    
    $os_id = Gral::getVars(2, "os_id", 0);
    
    if($os_id != 0)
    {
        $os_orden_servicio = OsOrdenServicio::getOxId($os_id);
        $os_resolucion = $os_orden_servicio->getOsResolucion();        
        //Gral::prr($os_resolucion);
        
        if($os_resolucion){
            $os_resolucion_suspension = $os_resolucion->getOsResolucionSuspension();
            //Gral::prr($os_resolucion_suspension);
            
            $txt_fecha_resolucion = $os_resolucion->getFecha();  
            $cmb_tipo_resolucion_id = $os_resolucion->getOsTipoResolucionId();
            $txa_nota_publica = $os_resolucion->getNotaPublica();
            $txa_observacion = $os_resolucion->getObservacion();
        }else{
            $txt_fecha_resolucion = date("Y-m-d");        
        }
    }
    else
    {
       
    }
}

?>

<form id="form_div_modal" name="form_div_modal" method="post" action='<?php echo Gral::getPath("path_http")."admin/ajax/modulos/os_orden_servicio_gestion/modal_os_orden_servicio_registrar_resolucion.php" ?>' >
    
    <div class="datos orden_servicio resolucion" >
        
        <div class="col general">
            
            <div class="par">
                <div class="label">
                    <?php Lang::_lang('Codigo OS'); ?>
                </div>
                <div class="dato">
                    <?php Gral::_echo($os_orden_servicio->getCodigo()); ?>
                </div>
            </div>
            
            <div class="par">
                <div class="label">
                    <?php Lang::_lang("Fecha") ?>
                </div>
                <div class="dato">
                    <input id="txt_fecha_resolucion" name="txt_fecha_resolucion" type="text" class="textbox" value="<?php echo Gral::getFechaToWEB($txt_fecha_resolucion); ?>" size="12" readonly />
                    <input id="cal_txt_fecha_resolucion" type="button"  value="..." />
                    
                    <script type="text/javascript">
                        Calendar.setup({
                            inputField: "txt_fecha_resolucion", ifFormat: "%d/%m/%Y", button: "cal_txt_fecha_resolucion"
                        });
                    </script>
                    <div id="txt_fecha_resolucion_error" class="error label-error"><?php Gral::_echo($txt_fecha_resolucion_error); ?></div>
                </div>
            </div>
            
            <div class="par">
                <div class="label">
                    <?php Lang::_lang("Tipo Resolucion"); ?>
                </div>
                <div class="dato">
                    <?php Html::html_dib_select(1, "cmb_tipo_resolucion_id", Gral::getCmbFiltro(OsTipoResolucion::getOsTipoResolucionsCmb(), "..."), $cmb_tipo_resolucion_id, "textbox") ?>
                    <div id="cmb_tipo_resolucion_id_error" class="error label-error" ><?php Gral::_echo($cmb_tipo_resolucion_id_error) ?></div>
                </div>
            </div>
            
            <div class="div_bloque_datos_tipo_resolucion">
                <?php include "bloque_datos_tipo_resolucion.php" ?>
            </div>
            
            <div class="par">
                <div class="label">
                    <?php Lang::_lang("Nota Publica") ?>
                </div>
                <div class="dato">
                    <textarea id="txa_nota_publica" name="txa_nota_publica" rows="4" cols="50" class="textbox "><?php Gral::_echoTxt($txa_nota_publica); ?></textarea>
                    <div class="comentario">El texto aqui escrito se visualizara en el PDF de Resolucion</div>
                    <div class="error label-error" id="txa_nota_publica_error"><?php Gral::_echo($txa_nota_publica_error); ?></div>
                </div>
            </div>

            <div class="par">
                <div class="label">
                    <?php Lang::_lang("Nota Interna") ?>
                </div>
                <div class="dato">
                    <textarea id="txa_observacion" name="txa_observacion" rows="4" cols="50" class="textbox "><?php Gral::_echoTxt($txa_observacion); ?></textarea>
                    <div class="error label-error" id="txa_observacion_error"><?php Gral::_echo($txa_observacion_error); ?></div>
                </div>
            </div>
            
            <div class="botonera">
                <input id="hdn_os_id"              name="hdn_os_id"   type='hidden' size='1' value='<?php Gral::_echoTxt($os_orden_servicio->getId()); ?>'/>
                <input id="hdn_os_resolucion_id"              name="hdn_os_resolucion_id"   type='hidden' size='1' value='<?php Gral::_echoTxt(($os_resolucion) ? $os_resolucion->getId() : 0); ?>'/>
                <input id="hdn_error"              name="hdn_error"   type='hidden' class="hdn_error" size='1' value='<?php Gral::_echoTxt($hdn_error); ?>'/>   
                <input id="btn_guardar_resolucion" name="btn_guardar" type='button' class="btn_guardar boton"  value='<?php Lang::_lang('Guardar'); ?>' />     
            </div>
        
        </div>
    
    </div>
    
    <div class="div_modal_modal"></div>

</form>

<script>
    setInit();
    setInitOsOrdenServicio();
</script>