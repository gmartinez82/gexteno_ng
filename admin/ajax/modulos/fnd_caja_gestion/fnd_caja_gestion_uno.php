<?php
$arr_resumen_caja = $fnd_caja->getArrResumenCaja($incluir_movimiento_activos = true);
//Gral::prr($arr_resumen_caja);

$fnd_caja_estado_apertura = $fnd_caja->getEstadoApertura();
$fnd_caja_estado_cierre = $fnd_caja->getEstadoCierre();
$fnd_caja_estado_rendicion = $fnd_caja->getEstadoRendicion();

$importe_saldo_inicial_real = $fnd_caja->getImporteSaldoInicialReal();
$importe_saldo_inicial_esperado = $fnd_caja->getImporteSaldoInicialEsperado();
$importe_saldo_inicial_diferencia = $fnd_caja->getImporteSaldoInicialDiferencia();

$vta_recibos_inactivos = $fnd_caja->getVtaRecibosInactivos();
$vta_ajuste_haber_inactivos = $fnd_caja->getVtaAjusteHabersInactivos();
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class='vermasinfo' identificador='<?php echo $fnd_caja->getId() ?>' modulo='fnd_caja'>+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class='id'>
        <?php Gral::_echo($fnd_caja->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class='fnd_cajero_id'>	
        <?php Gral::_echo($fnd_caja->getFndCajero()->getDescripcion()) ?>
    </div>
    <div class='gral_caja_id'> 
        <?php Gral::_echo($fnd_caja->getGralCaja()->getDescripcion()) ?>
    </div>
    <div class='fnd_caja_tipo_estado_id'>	
        <img class='icono' src='imgs/fnd_caja_tipo_estado/<?php Gral::_echo($fnd_caja->getFndCajaTipoEstado()->getCodigo()) ?>.png' width='14' align='absmiddle' title='Estado de la Caja' />
        <?php Gral::_echo($fnd_caja->getFndCajaTipoEstado()->getDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <?php if ($fnd_caja_estado_apertura) { ?>
        <div class='fecha fecha_apertura' title='Apertura <?php Gral::_echo($fnd_caja_estado_apertura->getCreadoPorDescripcion()) ?>'>
            <?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_estado_apertura->getCreado())); ?>
        </div>
    <?php } else { ?>
        -
    <?php } ?>

    <?php if ($fnd_caja_estado_cierre) { ?>
        <div class='fecha fecha_cierre' title='Cierre <?php Gral::_echo($fnd_caja_estado_cierre->getCreadoPorDescripcion()) ?>'>
            <?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_estado_cierre->getCreado())); ?>
        </div>
    <?php } else { ?>
        -
    <?php } ?>

    <?php if ($fnd_caja_estado_rendicion) { ?>
        <div class='fecha fecha_rendicion' title='Rendicion <?php Gral::_echo($fnd_caja_estado_rendicion->getCreadoPorDescripcion()) ?>'>
            <?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_estado_rendicion->getCreado())); ?>
        </div>
    <?php } else { ?>
        -
    <?php } ?>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class='saldo-inicial ingreso' title="SAldo Inicial de Caja">   
        <?php Gral::_echoImp($fnd_caja->getImporteSaldoInicialReal()); ?>
    </div>

    <?php if ($importe_saldo_inicial_diferencia > 0) { ?>
        <div class='saldo-inicial ingreso diferencia'>   
            Esperado <?php Gral::_echoImp($importe_saldo_inicial_esperado); ?><br />
            Diferencia <?php Gral::_echoImp($importe_saldo_inicial_diferencia); ?>
        </div>
    <?php } ?>

    <?php if ($fnd_caja_estado_cierre) { ?>
        <div class='saldo-final egreso' title="Saldo Final de Caja">   
            <?php Gral::_echoImp($fnd_caja->getImporteSaldoFinal()); ?>
        </div>
    <?php } ?>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($arr_resumen_caja['general']['cobro']['cantidad'] > 0) { ?>
        <div class='cobro-cantidad ingreso'>
            <?php Gral::_echo($arr_resumen_caja['general']['cobro']['cantidad']) ?>
            
                <?php if(count($vta_recibos_inactivos) > 0){ ?>
                    <img src="imgs/icn_alerta.png" width="12" title="<?php echo count($vta_recibos_inactivos) ?> cobros anulados">
                <?php } ?>                
            </div>
            
        </div>
        <div class='cobro-importe ingreso'>
            <?php Gral::_echoImp($arr_resumen_caja['general']['cobro']['importe']) ?>
        </div>
    <?php } else { ?>
        -
    <?php } ?>

    <?php if ($arr_resumen_caja['general']['ajuste_haber']['cantidad'] > 0) { ?>
        <div class='cobro-cantidad ingreso'>
            <?php Gral::_echo($arr_resumen_caja['general']['ajuste_haber']['cantidad']) ?>
            
                <?php if(count($vta_ajuste_haber_inactivos) > 0){ ?>
                    <img src="imgs/icn_alerta.png" width="12" title="<?php echo count($vta_ajuste_haber_inactivos) ?> ajustes anulados">
                <?php } ?>                
        </div>
        <div class='cobro-importe ingreso'>
            <?php Gral::_echoImp($arr_resumen_caja['general']['ajuste_haber']['importe']) ?>
        </div>
    <?php } else { ?>
        -
    <?php } ?>
</td>	

<?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ALCANCE_PAGO_PROVEEDORES')) { ?>
    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
        <?php if ($arr_resumen_caja['general']['pago']['cantidad'] > 0) { ?>
            <div class='pago-cantidad egreso'>
                <?php Gral::_echo($arr_resumen_caja['general']['pago']['cantidad']) ?>
            </div>
            <div class='pago-importe egreso'>
                <?php Gral::_echoImp($arr_resumen_caja['general']['pago']['importe']) ?>
            </div>
        <?php } else { ?>
            -
        <?php } ?>
    </td>	

    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
        <?php if ($arr_resumen_caja['general']['orden_pago']['cantidad'] > 0) { ?>
            <div class='orden-pago-cantidad egreso'>
                <?php Gral::_echo($arr_resumen_caja['general']['orden_pago']['cantidad']) ?>
            </div>
            <div class='orden-pago-importe egreso'>
                <?php Gral::_echoImp($arr_resumen_caja['general']['orden_pago']['importe']) ?>
            </div>
        <?php } else { ?>
            -
        <?php } ?>
    </td>	
<?php } ?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($arr_resumen_caja['general']['ingreso']['cantidad'] > 0) { ?>
        <div class='ingreso-cantidad ingreso'>
            <?php Gral::_echo($arr_resumen_caja['general']['ingreso']['cantidad']) ?>
        </div>
        <div class='ingreso-importe ingreso'>
            <?php Gral::_echoImp($arr_resumen_caja['general']['ingreso']['importe']) ?>
        </div>
    <?php } else { ?>
        -
    <?php } ?>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($arr_resumen_caja['general']['egreso']['cantidad'] > 0) { ?>
        <div class='egreso-cantidad egreso'>
            <?php Gral::_echo($arr_resumen_caja['general']['egreso']['cantidad']) ?>
        </div>
        <div class='egreso-importe egreso'>
            <?php Gral::_echoImp($arr_resumen_caja['general']['egreso']['importe']) ?>
        </div>
    <?php } else { ?>
        -
    <?php } ?>
</td>

<?php if (false) { ?>
    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
        <div class='mov-ingresos ingreso'>   
            <?php if ($arr_resumen_caja['general']['movimiento_ingreso_aprobado']['cantidad'] > 0) { ?>
                <div class='mov-ingresos-aprobados'>
                    <div class='ingreso-cantidad ingreso' title='Ingresos aprobados cantidad'>
                        <?php Gral::_echo($arr_resumen_caja['general']['movimiento_ingreso_aprobado']['cantidad']) ?>
                    </div>
                    <div class='ingreso-importe ingreso' title='Ingresos aprobados importe'>
                        <?php Gral::_echoImp($arr_resumen_caja['general']['movimiento_ingreso_aprobado']['importe']) ?>
                    </div>
                </div>
            <?php } else { ?>
                -
            <?php } ?>

            <?php if ($arr_resumen_caja['general']['movimiento_ingreso_activo']['cantidad'] > 0): ?>
                <div class='mov-ingresos-activos'>
                    <div class='ingreso-cantidad ingreso' title='Ingresos activos cantidad'>
                        <?php Gral::_echo($arr_resumen_caja['general']['movimiento_ingreso_activo']['cantidad']) ?>
                    </div>
                    <div class='ingreso-importe ingreso'title='Ingresos activos importe' >
                        <?php Gral::_echoImp($arr_resumen_caja['general']['movimiento_ingreso_activo']['importe']) ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </td>

    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
        <div class='mov-egresos egreso'>   
            <?php if ($arr_resumen_caja['general']['movimiento_egreso_aprobado']['cantidad'] > 0) { ?>
                <div class='mov-egresos-aprobados'>
                    <div class='egreso-cantidad egreso' title='Egresos aprobados cantidad'>
                        <?php Gral::_echo($arr_resumen_caja['general']['movimiento_egreso_aprobado']['cantidad']) ?>
                    </div>
                    <div class='egreso-importe egreso' title='Egresos aprobados importe'>
                        <?php Gral::_echoImp($arr_resumen_caja['general']['movimiento_egreso_aprobado']['importe']) ?>
                    </div>
                </div>
            <?php } else { ?>
                -
            <?php } ?>

            <?php if ($arr_resumen_caja['general']['movimiento_egreso_activo']['cantidad'] > 0): ?>
                <div class='mov-egresos-activos'>
                    <div class='egreso-cantidad egreso' title='Egresos activos cantidad'>
                        <?php Gral::_echo($arr_resumen_caja['general']['movimiento_egreso_activo']['cantidad']) ?>
                    </div>
                    <div class='egreso-importe egreso' title='Egresos activos importe' >
                        <?php Gral::_echoImp($arr_resumen_caja['general']['movimiento_egreso_activo']['importe']) ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </td>
<?php } ?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class='adm_botones_acciones'>

        <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_COMPROBANTE')) { ?>
            <li class='adm_botones_accion pde-orden_pago-comprobante'>
                <a href='ajax/modulos/fnd_caja_gestion/pdf_caja.php?fnd_caja_id=<?php echo $fnd_caja->getId() ?>' target='_blank'>
                    <img src='imgs/btn_pdf.png' width='20' border='0' title='Ver Comprobante' />
                </a>
            </li>
        <?php } ?>


        <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/fnd_caja_gestion/fnd_caja_gestion_acciones_db_context.php?id=<?php Gral::_echo($fnd_caja->getId()) ?>' modulo_metodo_init='setInitFndCaja()' title='<?php Lang::_lang('Ver Acciones') ?>'>
                <img src='imgs/btn_config.png' width='20' border='0' />
            </li>
        <?php } ?>
    </ul>
</td>


