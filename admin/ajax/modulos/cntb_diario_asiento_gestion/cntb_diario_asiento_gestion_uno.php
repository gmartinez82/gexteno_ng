<?php
$cntb_diario_asiento_cuentas = $cntb_diario_asiento->getCntbDiarioAsientoCuentas();
$cntb_ejercicio = $cntb_diario_asiento->getCntbEjercicio();
?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $cntb_diario_asiento->getId() ?>" modulo="cntb_diario_asiento">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="numero">
        <?php Gral::_echo($cntb_diario_asiento->getNumero()) ?>
    </div>
    <div class="fecha" title="<?php Gral::_echo(Gral::getFechaHoraToWEB($cntb_diario_asiento->getCreado())) ?>">
        <?php Gral::_echo(Gral::getFechaToWEB($cntb_diario_asiento->getFecha())) ?>
    </div>
    <div class="cntb_tipo_origen_id">	
        <?php Gral::_echo($cntb_diario_asiento->getCntbTipoOrigen()->getDescripcion()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>' colspan="3">

    <div class="descripcion-asiento" title="Presionar para ver mas detalles">
        <?php Gral::_echo($cntb_diario_asiento->getGralActividad()->getDescripcion()) ?> - 
        <?php Gral::_echo($cntb_diario_asiento->getCntbTipoMovimiento()->getDescripcion()) ?> - 
        <?php Gral::_echo($cntb_diario_asiento->getDescripcion()) ?>
    </div>

    <div class="observacion-asiento">
        <?php Gral::_echo($cntb_diario_asiento->getObservacion()) ?>
    </div>

    <div class="cntb_ejercicio_id">	
        <?php //Gral::_echo($cntb_diario_asiento->getCntbEjercicio()->getDescripcion()) ?>
    </div>
    <div class="cntb_tipo_asiento_id">	
        <?php //Gral::_echo($cntb_diario_asiento->getCntbTipoAsiento()->getDescripcion()) ?>
    </div>
    <div class="cntb_tipo_movimiento_id">	
        <?php //Gral::_echo($cntb_diario_asiento->getCntbTipoMovimiento()->getDescripcion()) ?>
    </div>

    <?php if (count($cntb_diario_asiento_cuentas) > 0) { ?>
        <div class="diario-asiento-cuentas">
            
            <?php
            foreach ($cntb_diario_asiento_cuentas as $cntb_diario_asiento_cuenta) {
                $cntb_cuenta = $cntb_diario_asiento_cuenta->getCntbCuenta();
                $cntb_tipo_saldo = $cntb_diario_asiento_cuenta->getCntbTipoSaldo();
                ?>
                <div class="diario-asiento-cuenta">

                    <div class="descripcion">
                        <?php echo ($cntb_tipo_saldo->getCodigo() == CntbTipoSaldo::TIPO_ACREEDOR) ? '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a ' : '' ?>

                        <?php Gral::_echo($cntb_cuenta->getDescripcion()) ?> (<?php echo $cntb_diario_asiento_cuenta->getTipoAfectacionDeCuenta() ?>)

                        <a href="<?php echo Gral::getPath('path_http') ?>admin/ajax/modulos/cntb_diario_asiento_gestion/pdf_mayor_comprobante.php?cntb_ejercicio_id=<?php echo $cntb_ejercicio->getId() ?>&cntb_cuenta_id=<?php echo $cntb_cuenta->getId() ?>" title="<?php Lang::_lang('Ver Libro Mayor de Cuenta') ?> <?php Gral::_echo($cntb_cuenta->getDescripcion()) ?>" target="_blank">
                            <img src='imgs/btn_pdf.png' width='12' border='0' />
                        </a>
                    </div>

                    <div class="importe-debe">
                        <?php if ($cntb_diario_asiento_cuenta->getImporteDebe() != 0) { ?>
                            <?php Gral::_echoImp($cntb_diario_asiento_cuenta->getImporteDebe()) ?>
                        <?php } else { ?>
                            -
                        <?php } ?>
                    </div>

                    <div class="importe-haber">
                        <?php if ($cntb_diario_asiento_cuenta->getImporteHaber() != 0) { ?>
                            <?php Gral::_echoImp($cntb_diario_asiento_cuenta->getImporteHaber()) ?>
                        <?php } else { ?>
                            -
                        <?php } ?>
                    </div>

                </div>
            <?php } ?>

        </div>
    <?php } ?>

</td>


<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">

        <?php if ($cntb_diario_asiento->getCntbTipoOrigen()->getCodigo() == CntbTipoOrigen::TIPO_MANUAL) { ?>
        <?php if (UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_GESTION_ACCION_MODIFICAR')) { ?>
            <li class='adm_botones_accion modificar-asiento'>
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </li>
        <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_GESTION_ACCION_ELIMINAR') && false) { ?>
            <li class='adm_botones_accion'>
                <a href='Javascript:eliminar(<?php Gral::_echo($cntb_diario_asiento->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_GESTION_ACCION_ESTADO') && false) { ?>
            <li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($cntb_diario_asiento->getEstado()) ?>.gif' width='20' border='0' />
            </li>
        <?php } ?>

            
        <?php if ($cntb_diario_asiento->getVtaFactura()) { ?>
            <a href="ajax/modulos/vta_factura_gestion/pdf_factura.php?vta_factura_id=<?php echo $cntb_diario_asiento->getVtaFactura()->getId() ?>" target="_blank">
                <img src='imgs/btn_pdf.png' width='20' border='0' title="Ver Factura <?php echo $cntb_diario_asiento->getVtaFactura()->getNumeroComprobanteCompleto() ?>" />
            </a>
        <?php } ?>

        <?php if ($cntb_diario_asiento->getVtaNotaCredito()) { ?>
            <a href="ajax/modulos/vta_nota_credito_gestion/pdf_nota_credito.php?vta_nota_credito_id=<?php echo $cntb_diario_asiento->getVtaNotaCredito()->getId() ?>" target="_blank">
                <img src='imgs/btn_pdf.png' width='20' border='0' title="Ver Factura <?php echo $cntb_diario_asiento->getVtaNotaCredito()->getNumeroComprobanteCompleto() ?>" />
            </a>
        <?php } ?>
            
    </ul>
</td>


