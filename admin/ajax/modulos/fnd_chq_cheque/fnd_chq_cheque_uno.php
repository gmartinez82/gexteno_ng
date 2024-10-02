
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $fnd_chq_cheque->getId() ?>" modulo="fnd_chq_cheque">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($fnd_chq_cheque->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($fnd_chq_cheque->getDescripcion()) ?>
    </div>
    <?php if (count($fnd_chq_cheque->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($fnd_chq_cheque->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
                <?php if (trim($arr_descripcion_extendida['dato']) != '') { ?>
                    <div class="descripcion-extendida-uno <?php echo $i ?> ">
                        <div class="par">
                            <div class="label">
                                <?php Gral::_echo($arr_descripcion_extendida['label']) ?>            
                            </div>
                            <div class="dato">
                                <?php Gral::_echo($arr_descripcion_extendida['dato']) ?>            
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    <?php } ?>                

</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_chq_chequera_id <?php Gral::_echo($fnd_chq_cheque->getFndChqChequera()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getFndChqChequera()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_banco_id <?php Gral::_echo($fnd_chq_cheque->getGralBanco()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getGralBanco()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo_sucursal">
            <?php Gral::_echo($fnd_chq_cheque->getCodigoSucursal()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="numero">
            <?php Gral::_echo($fnd_chq_cheque->getNumero()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="firmante">
            <?php Gral::_echo($fnd_chq_cheque->getFirmante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="entregador">
            <?php Gral::_echo($fnd_chq_cheque->getEntregador()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_chq_tipo_emisor_id <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEmisor()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEmisor()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_chq_tipo_emision_id <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEmision()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEmision()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_chq_tipo_pago_id <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoPago()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoPago()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_chq_tipo_estado_id <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe">
            <?php Gral::_echoImp($fnd_chq_cheque->getImporte()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cruzado <?php Gral::_echo(GralSiNo::getOxId($fnd_chq_cheque->getCruzado())->getCodigo()) ?> ">	

        <?php if($fnd_chq_cheque->getCruzado()){ ?>
        <img src='imgs/tilde_<?php echo $fnd_chq_cheque->getCruzado() ?>.png' width='16' border='0' alt="<?php Gral::_echo($fnd_chq_cheque->getCruzado()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($fnd_chq_cheque->getCruzado())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_recibo_id <?php Gral::_echo($fnd_chq_cheque->getVtaRecibo()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getVtaRecibo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_recibo_item_id <?php Gral::_echo($fnd_chq_cheque->getVtaReciboItem()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getVtaReciboItem()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_comision_id <?php Gral::_echo($fnd_chq_cheque->getVtaComision()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getVtaComision()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_comision_gral_fp_forma_pago_id <?php Gral::_echo($fnd_chq_cheque->getVtaComisionGralFpFormaPago()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getVtaComisionGralFpFormaPago()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_orden_pago_id <?php Gral::_echo($fnd_chq_cheque->getPdeOrdenPago()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getPdeOrdenPago()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_orden_pago_gral_fp_forma_pago_id <?php Gral::_echo($fnd_chq_cheque->getPdeOrdenPagoGralFpFormaPago()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getPdeOrdenPagoGralFpFormaPago()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_recibo_id <?php Gral::_echo($fnd_chq_cheque->getPdeRecibo()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getPdeRecibo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_recibo_item_id <?php Gral::_echo($fnd_chq_cheque->getPdeReciboItem()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getPdeReciboItem()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_caja_movimiento_id <?php Gral::_echo($fnd_chq_cheque->getFndCajaMovimiento()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getFndCajaMovimiento()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_caja_movimiento_item_id <?php Gral::_echo($fnd_chq_cheque->getFndCajaMovimientoItem()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getFndCajaMovimientoItem()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_caja_id <?php Gral::_echo($fnd_chq_cheque->getFndCaja()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getFndCaja()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_caja_id <?php Gral::_echo($fnd_chq_cheque->getGralCaja()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getGralCaja()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_caja_ingreso_id <?php Gral::_echo($fnd_chq_cheque->getFndCajaIngreso()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getFndCajaIngreso()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="fnd_caja_egreso_id <?php Gral::_echo($fnd_chq_cheque->getFndCajaEgreso()->getCodigo()) ?> ">	

        <?php Gral::_echo($fnd_chq_cheque->getFndCajaEgreso()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($fnd_chq_cheque->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='fnd_chq_cheque_alta.php?id=<?php Gral::_echo($fnd_chq_cheque->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($fnd_chq_cheque->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($fnd_chq_cheque->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/fnd_chq_cheque/fnd_chq_cheque_db_context_acciones.php?id=<?php Gral::_echo($fnd_chq_cheque->getId()) ?>' modulo_metodo_init="setInitFndChqCheque()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


