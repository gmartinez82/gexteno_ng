<?php
//$fecha_desde = $criterio_factura->getValorDeCampoXPos('fecha_desde');
//$fecha_hasta = $criterio_factura->getValorDeCampoXPos('fecha_hasta');
//
//if ($cli_cliente_seleccionado) {
//    $fecha_hasta_saldo = Date::sumarDias($fecha_desde, -1);
//    $importe_total_saldo_inicial_en_fecha = $cli_cliente_seleccionado->getSaldoDeCuentaEnFechaImporte($gral_empresa_id, $fecha_hasta_saldo);
//}
?>
<?php if ($cli_cliente_seleccionado) { ?>
    <div class="cli-cliente-info">

        <div class="par">
            <div class="label">Cliente</div>
            <div class="dato"><?php Gral::_echo($cli_cliente_seleccionado->getDescripcion()) ?></div>
        </div>
        <div class="cli-botonera">
            <label class="boton">
                <a href="ajax/modulos/vta_comprobante_gestion/pdf_resumen_cuenta.php?cli_cliente_id=<?php echo $cli_cliente_seleccionado->getId() ?>&fecha_desde=<?php echo $fecha_desde ?>&fecha_hasta=<?php echo $fecha_hasta ?>&otros=<?php echo $filtro_incluir_ajustes ?>" target="_blank" title="Ver Resumen de Cuenta de Cliente en PDF">
                    <img src="imgs/btn_pdf.png" width="25" />
                </a>
            </label>
            <label class="boton">
                <a href="ajax/modulos/vta_comprobante_gestion/xls_resumen_cuenta.php?cli_cliente_id=<?php echo $cli_cliente_seleccionado->getId() ?>&fecha_desde=<?php echo $fecha_desde ?>&fecha_hasta=<?php echo $fecha_hasta ?>&otros=<?php echo $filtro_incluir_ajustes ?>" target="_blank" title="Ver Resumen de Cuenta de Cliente en Excel">
                    <img src="imgs/xls.png" width="25" />
                </a>
            </label>            
        </div>

    </div>
<?php } ?>

<div class="col col1">

    <?php if ($cli_cliente_seleccionado) { ?>
        <div class="par total imputable debe">
            <div class="label">Saldo al <?php echo Gral::getFechaToWEB($fecha_hasta_saldo) ?></div>
            <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['SALDO_EN_FECHA_DEBE']) ?></div>
        </div>
    <?php } ?>

    <div class="par total debe">
        <div class="label">Total Debe</div>
        <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['IMPORTE_TOTAL_DEBE']) ?></div>
    </div>

    <?php if ($cli_cliente_seleccionado) { ?>
        <div class="par total imputable debe">
            <div class="label">Saldable</div>
            <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['IMPORTE_IMPUTABLE_DEBE']) ?></div>
        </div>
    <?php } ?>

    <?php if ($filtro_imputable == '' && $arr_comprobante_totales['RESUMEN']['IMPORTE_SALDO_DEBE'] > 0) { ?>
        <div class="par saldo debe">
            <div class="label">Saldo Deudor al <?php echo Gral::getFechaToWEB($fecha_hasta) ?></div>
            <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['IMPORTE_SALDO_DEBE']) ?></div>
        </div>
    <?php } ?>

    <?php if ($cli_cliente_seleccionado) { ?>
        <?php if ($arr_comprobante_totales['RESUMEN']['ORDEN_VENTA']['CANTIDAD'] > 0) { ?>
            <div class="par orden-venta-sin-facturar">
                <div class="label">El cliente tiene <strong><?php Gral::_echoInt($arr_comprobante_totales['RESUMEN']['ORDEN_VENTA']['CANTIDAD']) ?> OVs activas</strong> sin facturar por un total de <strong><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['ORDEN_VENTA']['IMPORTE']) ?></strong></div>
            </div>
        <?php } ?>
    <?php } ?>

</div>

<div class="col col2">

    <?php if ($cli_cliente_seleccionado) { ?>
        <div class="par total imputable debe">
            <div class="label">Saldo al <?php echo Gral::getFechaToWEB($fecha_hasta_saldo) ?></div>
            <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['SALDO_EN_FECHA_HABER']) ?></div>
        </div>
    <?php } ?>

    <div class="par total haber">
        <div class="label">Total Haber</div>
        <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['IMPORTE_TOTAL_HABER']) ?></div>
    </div>

    <?php if ($cli_cliente_seleccionado) { ?>
        <div class="par total imputable haber">
            <div class="label">Imputable</div>
            <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['IMPORTE_IMPUTABLE_HABER']) ?></div>
        </div>
    <?php } ?>

    <?php if ($filtro_imputable == '' && $arr_comprobante_totales['RESUMEN']['IMPORTE_SALDO_HABER'] > 0) { ?>
        <div class="par saldo haber">
            <div class="label">Saldo Acreedor al <?php echo Gral::getFechaToWEB($fecha_hasta) ?></div>
            <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['IMPORTE_SALDO_HABER']) ?></div>
        </div>
    <?php } ?>

</div>