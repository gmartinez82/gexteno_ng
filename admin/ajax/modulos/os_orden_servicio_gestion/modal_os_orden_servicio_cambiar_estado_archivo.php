<?php
/**
 * @creado_por Esteban Martinez
 * @creado 14/11/2016
 */
include_once '_autoload.php';

$db_nombre_objeto = "os_orden_servicio_gestion";
$hdn_error = 1;

$os_orden_servicio = new OsOrdenServicio();
$os_tipo_estado    = new OsTipoEstado;


if(Gral::esPost())
{
    
    $id                      = Gral::getVars(1, "hdn_os_id", 0);
    $txt_fecha_cambio_estado = Gral::getVars(1, "txt_fecha_cambio_estado", "");
    $txa_observacion         = Gral::getVars(1, "txa_observacion", '');
    
    $os_orden_servicio = OsOrdenServicio::getOxId($id);	
    
    $txt_fecha_cambio_estado = Gral::getFechaToDb($txt_fecha_cambio_estado);
    
    
    // controles
    $estado = true;
    
    //fecha hecho
    if(!Ctrl::esFechaValida($txt_fecha_cambio_estado)){
        $txt_fecha_cambio_estado_error = "Debe indicar una fecha valida.";
        $estado = false;
    }
    
    
    //notificacion
    if(Ctrl::esVacio($txa_observacion)){
        $txa_notificacion_error = "Debe cargar una observacion.";
        $estado = false;
    }
    
    
    if($estado)
    {
        $tipo_estado_codigo = OsTipoEstado::TIPO_ARCHIVADO;
        
        $os_orden_servicio->setOsEstado($tipo_estado_codigo, $txa_observacion, $txt_fecha_cambio_estado);
        
        // se registra la resolucion
        //$os_orden_servicio->save();
        
        $hdn_error = 0;
    }
    
}
else
{
    $os_id = Gral::getVars(2, "os_id", 0);
    
    if($os_id != 0)
    {
        $os_orden_servicio = OsOrdenServicio::getOxId($os_id);
        $os_tipo_estado    = $os_orden_servicio->getOsTipoEstado();
        
        $txt_fecha_cambio_estado = date("Y-m-d");
    }
    else
    {
       
    }
}
?>


<form id="form_div_modal" name="form_div_modal" method="post" action='<?php echo Gral::getPath("path_http")."admin/ajax/modulos/os_orden_servicio_gestion/modal_os_orden_servicio_cambiar_estado_archivo.php" ?>' >
    
    <div class="datos orden_servicio archivo" >
        
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
                    <?php Lang::_lang("Fecha"); ?>
                </div>
                <div class="dato">
                    <input id="txt_fecha_cambio_estado" name="txt_fecha_cambio_estado" type="text" class="textbox" value="<?php echo Gral::getFechaToWEB($txt_fecha_cambio_estado); ?>" size="12" readonly />
                    <input id="cal_txt_fecha_cambio_estado" type="button"  value="..." />
                    
                    <script type="text/javascript">
                        Calendar.setup({
                            inputField: "txt_fecha_cambio_estado", ifFormat: "%d/%m/%Y", button: "cal_txt_fecha_cambio_estado"
                        });
                    </script>
                    
                    <div class="error label-error" id="txt_fecha_cambio_estado_error"><?php Gral::_echo($txt_fecha_cambio_estado_error); ?></div>
                    
                </div>
            </div>
            
            <div class="par">
                <div class="label">
                    <?php Lang::_lang('Observaciones') ?>
                </div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='4' cols='50' id='txa_observacion' class='textbox '></textarea>
                    
                    <div class="error label-error" id="txa_observacion_error"><?php Gral::_echo($txa_notificacion_error); ?></div>
                </div>
            </div>
            
            <div class="botonera">
                <input id="hdn_os_id"              name="hdn_os_id"   type='hidden' size='1' value='<?php Gral::_echoTxt($os_orden_servicio->getId()); ?>'/>
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