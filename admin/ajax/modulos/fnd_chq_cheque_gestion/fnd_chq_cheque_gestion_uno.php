<?php
$array_info_dias = $fnd_chq_cheque->getArrChequeInfoDias();

$pde_recibo = $fnd_chq_cheque->getPdeRecibo();
$pde_orden_pago = $fnd_chq_cheque->getPdeOrdenPago();
$vta_recibo = $fnd_chq_cheque->getVtaRecibo();
$vta_ajuste_haber = $fnd_chq_cheque->getVtaAjusteHaber();
$vta_comision = $fnd_chq_cheque->getVtaComision();

$fnd_chq_tipo_emisor = $fnd_chq_cheque->getFndChqTipoEmisor();
$fnd_chq_tipo_estado = $fnd_chq_cheque->getFndChqTipoEstado();

$gral_si_no             = GralSiNo::getOxId($fnd_chq_tipo_estado->getEnCartera());
$gral_si_no_descripcion = $gral_si_no->getDescripcion();
$gral_si_no_id          = $gral_si_no->getId();

?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class='vermasinfo' identificador='<?php echo $fnd_chq_cheque->getId() ?>' modulo='fnd_chq_cheque'>+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class='id'>
        #<?php Gral::_echo($fnd_chq_cheque->getId()); ?>
    </div>
    <div class='chq-fecha-emision' title='Fecha Emision'>
        <?php Gral::_echo(Gral::getFechaToWeb($fnd_chq_cheque->getFechaEmision())); ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class='chq-numero' title='Numero Cheque'>
        Nro: <?php Gral::_echo($fnd_chq_cheque->getNumero()); ?>
    </div>
    <label class='chq-tipo-emisor <?php Gral::_echo($fnd_chq_tipo_emisor->getCodigo()); ?>'>
        <?php Gral::_echo($fnd_chq_tipo_emisor->getDescripcion()); ?>
    </label>
    <label class='chq-firmante' title='Firmante'>
        <?php Gral::_echo($fnd_chq_cheque->getFirmante()); ?>
    </label>    
    <div class='gral-banco' title='Banco'>
        Banco: <?php Gral::_echo($fnd_chq_cheque->getGralBanco()->getDescripcionCorta()); ?>
        <?php echo ($fnd_chq_cheque->getCodigoSucursal() != '') ? '(Suc ' . $fnd_chq_cheque->getCodigoSucursal() . ')' : '' ?>
    </div>

    <?php if ($fnd_chq_cheque->getFndChqChequera()) { ?>
        <div class='chq-chequera' title='Chequera'>
            <?php Gral::_echo($fnd_chq_cheque->getFndChqChequera()->getDescripcion()); ?>
        </div>
    <?php } ?>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="comprobantes-vinculados">
        <?php if ($pde_recibo->getId() != 'null') { ?>        
            <div class="comprobante-vinculado pde-recibo">
                - Recibo de Compra <?php echo $pde_recibo->getCodigo() ?>
            </div>
        <?php } ?>
        <?php if ($pde_orden_pago->getId() != 'null') { ?>        
            <div class="comprobante-vinculado pde-orden-pago">
                - Orden de Pago <?php echo $pde_orden_pago->getCodigo() ?>
            </div>
        <?php } ?>
        <?php if ($vta_recibo->getId() != 'null') { ?>        
            <div class="comprobante-vinculado vta-recibo">
                - Recibo de Venta <?php echo $vta_recibo->getCodigo() ?>
            </div>
        <?php } ?>
        <?php if ($vta_ajuste_haber->getId() != 'null') { ?>        
            <div class="comprobante-vinculado vta-recibo">
                - Ajuste Haber <?php echo $vta_ajuste_haber->getCodigo() ?>
            </div>
        <?php } ?>
        <?php if ($vta_comision->getId() != 'null') { ?>        
            <div class="comprobante-vinculado vta-comision">
                - Comision de Venta <?php echo $vta_comision->getCodigo() ?>
            </div>
        <?php } ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class='chq-entregador' title='Entregador'>
        <?php Gral::_echo($fnd_chq_cheque->getEntregador()); ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class='chq-emision' title='Tipo Emision'>
        <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEmision()->getDescripcion()); ?>
    </div>
    <div class='chq-tipo-pago' title='Tipo Pago'>
        <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoPago()->getDescripcion()); ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class='chq-tipo-estado' title='Tipo Estado'>
        <img src='imgs/fnd_chq_tipo_estado/<?php Gral::_echo($fnd_chq_tipo_estado->getCodigo()) ?>.png' alt='tipo-estado' width='15' />
        <?php Gral::_echo($fnd_chq_tipo_estado->getDescripcion()); ?>
    </div>
</td>   

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class='chq-importe' title='Importe'>
        <?php Gral::_echoImp($fnd_chq_cheque->getImporte()); ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class='chq-fecha-cobro' title='Fecha de Cobro'>
        <?php Gral::_echo(Gral::getFechaToWeb($fnd_chq_cheque->getFechaCobro())); ?>
    </div>

    <?php if ($fnd_chq_tipo_emisor->getCodigo() == FndChqTipoEmisor::TIPO_TERCERO) { ?>
        <?php if ($fnd_chq_tipo_estado->getEnCartera()) { ?>
            <div class='chq-dias-faltantes <?php echo $array_info_dias['info_css']; ?>'>
                <?php Gral::_echo($array_info_dias['info_texto']); ?>
            </div>
        <?php } ?>
    <?php } else { ?>
        <div class='chq-dias-faltantes <?php echo $array_info_dias['info_css']; ?>'>
            <?php Gral::_echo($array_info_dias['info_texto']); ?>
        </div>
    <?php } ?>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class='chq-en-cartera' title='En cartera'>
        <img src='imgs/btn_estado_<?php Gral::_echo($fnd_chq_tipo_estado->getEnCartera()); ?>.gif' width='16' border='0' title='<?php Gral::_echo($gral_si_no_descripcion); ?> en cartera'/>
    </div>
    <div class='fnd-caja-descripcion' title='Caja ubicacion del cheque nro <?php Gral::_echo($fnd_chq_cheque->getNumero()); ?>'>
        <?php Gral::_echo($fnd_chq_cheque->getGralCaja()->getDescripcion()); ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class='adm_botones_acciones' fnd_chq_cheque_id='<?php echo $fnd_chq_cheque->getId(); ?>'>
        <?php if (UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_GESTION_ACCION_EDITAR')): ?>
            <li class='adm_botones_accion fnd_chq_cheque_gestion_editar'>
                <img src='imgs/btn_modi.gif' width='20' title='Modificar Cheque'/>       
            </li>
        <?php endif; ?>

        <?php if (UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_GESTION_ACCION_FICHA')): ?>
            <li class='adm_botones_accion fnd_chq_cheque_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' title='Ver Ficha del Cheque'/>
            </li>
        <?php endif; ?>

        <?php if (UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_GESTION_ACCION_CONFIG')): ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/fnd_chq_cheque_gestion/db_context_acciones.php?id=<?php Gral::_echo($fnd_chq_cheque->getId()) ?>' modulo_metodo_init='setInitFndChqChequeGestion()'>
                <img src='imgs/btn_ajustar.png' width='20' title='Acciones'/>       
            </li>
        <?php endif; ?>
    </ul>

</td>