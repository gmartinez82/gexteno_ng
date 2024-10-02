<?php
//$fecha_desde = $criterio_factura->getValorDeCampoXPos('fecha_desde');
//$fecha_hasta = $criterio_factura->getValorDeCampoXPos('fecha_hasta');
?>
<?php if ($prv_proveedor_seleccionado) { ?>
    <div class="cli-cliente-info">

        <div class="par">
            <div class="label">Proveedor</div>
            <div class="dato"><?php Gral::_echo($prv_proveedor_seleccionado->getDescripcion()) ?></div>
        </div>
        <div class="cli-botonera">
            <label class="boton">
                <a href="ajax/modulos/pde_comprobante_gestion/pdf_resumen_cuenta.php?prv_proveedor_id=<?php echo $prv_proveedor_seleccionado->getId() ?>&fecha_desde=<?php echo $fecha_desde ?>&fecha_hasta=<?php echo $fecha_hasta ?>" target="_blank" title="Ver Resumen de Cuenta de Proveedor en PDF">
                    <img src="imgs/btn_pdf.png" width="25" />
                </a>
            </label>
            <label class="boton">
                <a href="ajax/modulos/pde_comprobante_gestion/xls_resumen_cuenta.php?prv_proveedor_id=<?php echo $prv_proveedor_seleccionado->getId() ?>&fecha_desde=<?php echo $fecha_desde ?>&fecha_hasta=<?php echo $fecha_hasta ?>" target="_blank" title="Ver Resumen de Cuenta de Proveedor en Excel">
                    <img src="imgs/xls.png" width="25" />
                </a>
            </label>            
        </div>

    </div>
<?php } ?>

<div class="col col1">
    
    <?php if ($prv_proveedor_seleccionado) { ?>
        <div class="par total imputable debe">
            <div class="label">Saldo al <?php echo Gral::getFechaToWEB($fecha_hasta_saldo) ?></div>
            <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['SALDO_EN_FECHA_DEBE']) ?></div>
        </div>
    <?php } ?>

    <div class="par total debe">
        <div class="label">Total Debe</div>
        <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['IMPORTE_TOTAL_DEBE']) ?></div>
    </div>

    <?php if ($prv_proveedor_seleccionado) { ?>
        <div class="par total imputable debe">
            <div class="label">Saldable</div>
            <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['IMPORTE_IMPUTABLE_DEBE']) ?></div>
        </div>
    <?php } ?>

    <?php if ($arr_comprobante_totales['RESUMEN']['IMPORTE_SALDO_DEBE'] > 0) { ?>
        <div class="par saldo debe">
            <div class="label">Saldo Deudor</div>
            <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['IMPORTE_SALDO_DEBE']) ?></div>
        </div>
    <?php } ?>

    <?php if ($prv_proveedor_seleccionado) { ?>
        <?php if ($arr_comprobante_totales['RESUMEN']['IMPORTE_TOTAL_ORDEN_PAGO'] > 0) { ?>
            <div class="par total orden-pago debe">
                <div class="label">Pago en Curso (OP)</div>
                <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['IMPORTE_TOTAL_ORDEN_PAGO']) ?></div>
            </div>
        <?php } ?>
    <?php } ?>

</div>

<div class="col col2">

    <?php if ($prv_proveedor_seleccionado) { ?>
        <div class="par total imputable debe">
            <div class="label">Saldo al <?php echo Gral::getFechaToWEB($fecha_hasta_saldo) ?></div>
            <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['SALDO_EN_FECHA_HABER']) ?></div>
        </div>
    <?php } ?>
        
    <div class="par total haber">
        <div class="label">Total Haber</div>
        <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['IMPORTE_TOTAL_HABER']) ?></div>
    </div>

    <?php if ($prv_proveedor_seleccionado) { ?>
        <div class="par total imputable haber">
            <div class="label">Imputable</div>
            <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['IMPORTE_IMPUTABLE_HABER']) ?></div>
        </div>
    <?php } ?>

    <?php if ($arr_comprobante_totales['RESUMEN']['IMPORTE_SALDO_HABER'] > 0) { ?>
        <div class="par saldo haber">
            <div class="label">Saldo Acreedor</div>
            <div class="dato"><?php Gral::_echoImp($arr_comprobante_totales['RESUMEN']['IMPORTE_SALDO_HABER']) ?></div>
        </div>
    <?php } ?>

</div>