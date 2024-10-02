<?php

include_once '_autoload.php';

$fnd_caja_id                = Gral::getVars(Gral::VARS_GET, 'fnd_caja_id', 0);
$fnd_caja_movimiento_id     = Gral::getVars(Gral::VARS_GET, 'fnd_caja_movimiento_id', 0);
$fnd_caja_movimiento_accion = Gral::getVars(Gral::VARS_GET, 'fnd_caja_movimiento_accion', '');

$fnd_caja_movimiento = FndCajaMovimiento::getOxId($fnd_caja_movimiento_id);


$fnd_caja_movimiento_accion_descripcion = '';

if($fnd_caja_movimiento)
{
    $fnd_caja_origen  = FndCaja::getOxId($fnd_caja_movimiento->getFndCajaOrigen());
    if($fnd_caja_origen){
        $fnd_caja_origen_descripcion = $fnd_caja_origen->getDescripcion();
    }

    $fnd_caja_destino = FndCaja::getOxId($fnd_caja_movimiento->getFndCajaDestino());
    if($fnd_caja_destino){
        $fnd_caja_destino_descripcion = $fnd_caja_destino->getDescripcion();         
    }


    if($fnd_caja_movimiento_accion != '')
    {

        if($fnd_caja_movimiento_accion == FndCajaMovimientoTipoEstado::TIPO_APROBADO)
        {
           $fnd_caja_movimiento_accion_descripcion = 'Aprobar Movimiento de Caja';
        }

        if($fnd_caja_movimiento_accion == FndCajaMovimientoTipoEstado::TIPO_RECHAZADO)
        {
            $fnd_caja_movimiento_accion_descripcion = 'Rechazar Movimiento de Caja';
        }

        if($fnd_caja_movimiento_accion == FndCajaMovimientoTipoEstado::TIPO_ANULADO)
        {
            $fnd_caja_movimiento_accion_descripcion = 'Anular Movimiento de Caja';
        }
    }
}


?>
<form id='form_fnd_caja_movimiento_accion' name='form_fnd_caja_movimiento_accion' method='post' action='' fnd_caja_movimiento_id='<?php echo $fnd_caja_movimiento_id; ?>' fnd_caja_id='<?php echo $fnd_caja_id; ?>' fnd_caja_movimiento_accion='<?php echo $fnd_caja_movimiento_accion; ?>'>
    <div class='label-error' id='error_general_error'></div>
    
    <div class='titulo'>
        <?php Lang::_lang($fnd_caja_movimiento_accion_descripcion) ?>
    </div>
    <div class='datos'>
        <div class='par'>
            <div class='label'>
                 <?php Lang::_lang('Origen') ?>
            </div>
            <div class='dato'>
                <?php Gral::_echo($fnd_caja_origen_descripcion); ?>
            </div>
        </div>
        <div class='par'>
            <div class='label'>
                 <?php Lang::_lang('Destino') ?>
            </div>
            <div class='dato'>
                <?php Gral::_echo($fnd_caja_destino_descripcion); ?>
            </div>
        </div>
        <div class='par'>
            <div class='label'><?php Lang::_lang('Observacion'); ?></div>
            <div class='dato'>
                <textarea name='txa_observacion' rows='2' cols='30' id='txa_observacion' class='textbox' ><?php Gral::_echoTxt($fnd_chq_observacion); ?></textarea>
                <div id='txa_observacion_error' class='error label-error' ><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>

        <div class='botonera'>
            <button class='boton btn_guardar_movimiento_accion' id='btn_guardar_movimiento_accion' name='btn_guardar' type='button'><?php Lang::_lang($fnd_caja_movimiento_accion_descripcion); ?></button>
        </div>
    </div>
</form>

<script>
    setInit();
    setInitFndCaja();
</script>