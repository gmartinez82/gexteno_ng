<?php
include_once '_autoload.php';

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0);
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

$cli_cliente = $vta_presupuesto->getCliCliente();

$vta_orden_ventas = $vta_presupuesto->getVtaOrdenVentas();
foreach($vta_orden_ventas as $vta_orden_venta){
    $cantidad = $vta_orden_venta->getCantidad();
    
    $cantidad_para_remitir = $vta_orden_venta->getCantidadDisponibleEnRemito();
    $cantidad_para_facturar = $vta_orden_venta->getCantidadDisponibleEnFactura();
    
    if($cantidad > $cantidad_para_remitir){
        echo "El presupuesto genero la ".$vta_orden_venta->getCodigo()." que ya tiene remitos realizados, no puede anularse el presupuesto";
        return;
    }
    if($cantidad > $cantidad_para_facturar){
        echo "El presupuesto genero la ".$vta_orden_venta->getCodigo()." que ya tiene facturas realizadas, no puede anularse el presupuesto";
        return;
    }
}
?>
<form id='form_datos_anular_presupuesto' name='form_datos_anular_presupuesto' method='post' >
    <div class='datos anular-presupuesto' vta_presupuesto_id="<?php echo $vta_presupuesto_id ?>">

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getDescripcion()) ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Motivo de la anulacion') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='7' cols='50' id='txa_observacion' class='textbox'></textarea>
                <div class="error label-error" id="txa_observacion_error"><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <input id="btn_registrar" name='btn_registrar' type='button' class='boton' value='<?php Lang::_lang('Anular Comprobante') ?>' />
        </div>

    </div>
</form>
