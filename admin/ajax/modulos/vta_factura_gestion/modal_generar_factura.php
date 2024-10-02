<?php
include "_autoload.php";

$tipo = Gral::getVars(Gral::VARS_GET, 'tipo', '');

// -----------------------------------------------------------------------------
// cliente preseteado
// -----------------------------------------------------------------------------
$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0);
$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0);

$cli_cliente = CliCliente::getOxId($cli_cliente_id);
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

if($vta_presupuesto){
    $cli_cliente = $vta_presupuesto->getCliCliente();
}

if($cli_cliente){
    $vta_orden_ventas = $cli_cliente->getVtaOrdenVentasActivaFacturas($vta_presupuesto);
}

// controla que no se seleccionen OV de distintos presupuestos
$control_presupuesto = 1;
?>
<div class="datos generar-factura" tipo="<?php echo $tipo ?>" vta_presupuesto_id="<?php echo ($vta_presupuesto) ? $vta_presupuesto->getId() : 0 ?>" >
    <div class="label-error" id="error_general"></div>

    <div class="buscador">
        <div class="col c1">
            <div class="label">
                <?php Lang::_lang('Cliente'); ?>
            </div>
            <div class="dato">
                <?php 
                if($cli_cliente){ 
                    echo Html::html_get_dbsuggest(1, 'dbsug_cli_cliente', 'ajax/modulos/cli_cliente/cli_cliente_dbsuggest_custom.php', false, true, true, 'Ingrese ...', $cli_cliente->getId(), $cli_cliente->getDescripcion()); 
                }else{ 
                    echo Html::html_get_dbsuggest(1, 'dbsug_cli_cliente', 'ajax/modulos/cli_cliente/cli_cliente_dbsuggest_custom.php', false, true, true, 'Ingrese ...', null, '');
                } 
                ?>
                <div id="dbsug_cli_cliente_id_error" class="error label-error" ><?php Gral::_echo($dbsug_cli_cliente_id_error) ?></div>   
            </div>
        </div>

        <?php if ($tipo == 'orden-venta') { ?>        
            <div class="col c2">
                <div class="label"><?php Lang::_lang('Cod Presupuesto (2 letras min)') ?></div>
                <input id="txt_buscador_codigo_presupuesto" name="txt_buscador_codigo_presupuesto" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese codigo de presupuesto') ?>" title="<?php Lang::_lang('Ingrese codigo de presupuesto a buscar') ?>" />
                <img class="txt_buscador_codigo_presupuesto_boton" src="imgs/lupa.png" width="20">
            </div>

            <div class="col c3">
                <div class="label"><?php Lang::_lang('Persona Descripcion (2 letras min)') ?></div>
                <input id="txt_buscador_persona_descripcion" name="txt_buscador_persona_descripcion" type="text" class="textbox" size="30" placeholder="<?php Lang::_lang('Ingrese el nombre a buscar') ?>" title="<?php Lang::_lang('Ingrese el nombre a buscar') ?>" />
                <img class="txt_buscador_persona_descripcion_boton" src="imgs/lupa.png" width="20">
            </div>
        <?php } ?>

    </div>

    <div class="div_datos_generar_facturas">
        <?php include "bloque_vta_orden_venta_listado_datos.php" ?>
    </div>
</div>
