<?php
include "_autoload.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, "vta_presupuesto_id", 0);
$chk_vta_presupuesto_ins_insumo = Gral::getVars(Gral::VARS_POST, 'chk_vta_presupuesto_ins_insumo');

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$arr_vta_presupuesto_ins_insumos_seleccionados = $vta_presupuesto->getEsVentaParcial($chk_vta_presupuesto_ins_insumo);

$cli_cliente = $vta_presupuesto->getCliCliente();

$vta_presupuesto_importe_total_con_iva = $vta_presupuesto->getImporteTotalPresupuestoConIva();

// se inicializa variable de configuracion 
$cv_importe_minimo_exigencia_info_comprador_consumidor_final = ConfVariable::getVtaComprobanteMinimoExigenciaInfoCompradorConsumidorFinal();
?>

<div class="datos confirmacion">

    <?php if ($arr_vta_presupuesto_ins_insumos_seleccionados['CANTIDAD'] == 0) { ?>
        <div class="mensaje cantidad">Debe elegir al menos uno de los items para generar las Ordenes de Venta</div>
    <?php } else { ?>

        <?php if ($arr_vta_presupuesto_ins_insumos_seleccionados['TOTAL'] == 0) { ?>
            <div class="mensaje parcial">Esta a punto de generar una APROBACION PARCIAL de presupuesto incluyendo <?php echo count($arr_vta_presupuesto_ins_insumos_seleccionados['SELECCIONADOS']) ?> item/s.</div>
        <?php } else { ?>
            <div class="mensaje total">Esta a punto de generar una APROBACION TOTAL de presupuesto</div>
        <?php } ?>

        <?php if ($cli_cliente->getId() == 'null') { ?>
            <?php if ($vta_presupuesto_importe_total_con_iva >= $cv_importe_minimo_exigencia_info_comprador_consumidor_final) { ?>                    
                <div class="consumidor-final-solicitud-datos-alerta">
                    El importe a facturar supera los <?php Gral::_echoImp($cv_importe_minimo_exigencia_info_comprador_consumidor_final) ?> por lo que se debera solicitar informacion del comprador.
                </div>
            <?php } ?>
        <?php } ?>

        <div class="botonera confirmacion">
            <button type="button" class="boton" id="btn_presupuesto_generar_venta_diferida_confirmar" name="btn_presupuesto_generar_venta_diferida_confirmar">
                <div class="titulo">Venta Diferida</div>
                <div class="comentario">Genera OV para gestionar en diferido</div>
            </button>
        </div>

    <?php } ?>

</div>