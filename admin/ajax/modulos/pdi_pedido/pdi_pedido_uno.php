
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $pdi_pedido->getId() ?>" modulo="pdi_pedido">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($pdi_pedido->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($pdi_pedido->getDescripcion()) ?>
    </div>
    <?php if (count($pdi_pedido->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($pdi_pedido->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="ins_insumo_id <?php Gral::_echo($pdi_pedido->getInsInsumo()->getCodigo()) ?> ">	

        <?php Gral::_echo($pdi_pedido->getInsInsumo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pdi_tipo_origen_id <?php Gral::_echo($pdi_pedido->getPdiTipoOrigen()->getCodigo()) ?> ">	

        <?php Gral::_echo($pdi_pedido->getPdiTipoOrigen()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pdi_urgencia_id <?php Gral::_echo($pdi_pedido->getPdiUrgencia()->getCodigo()) ?> ">	

        <?php Gral::_echo($pdi_pedido->getPdiUrgencia()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="pan_panol_origen">
            <?php Gral::_echo(($pdi_pedido->getPanPanolOrigen() != 'null') ? PanPanol::getOxId($pdi_pedido->getPanPanolOrigen())->getDescripcion() : '-') ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="pan_panol_destino">
            <?php Gral::_echo(($pdi_pedido->getPanPanolDestino() != 'null') ? PanPanol::getOxId($pdi_pedido->getPanPanolDestino())->getDescripcion() : '-') ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($pdi_pedido->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pdi_tipo_estado_id <?php Gral::_echo($pdi_pedido->getPdiTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($pdi_pedido->getPdiTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="pdi_pedido_agrupacion_id">
            <?php Gral::_echo($pdi_pedido->getPdiPedidoAgrupacion()->getDescripcion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="pdi_pedido_agrupacion_item_id">
            <?php Gral::_echo($pdi_pedido->getPdiPedidoAgrupacionItem()->getDescripcion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="venta_perdida <?php Gral::_echo(GralSiNo::getOxId($pdi_pedido->getVentaPerdida())->getCodigo()) ?> ">	

        <?php if($pdi_pedido->getVentaPerdida()){ ?>
        <img src='imgs/tilde_<?php echo $pdi_pedido->getVentaPerdida() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pdi_pedido->getVentaPerdida()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pdi_pedido->getVentaPerdida())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='pdi_pedido_alta.php?id=<?php Gral::_echo($pdi_pedido->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($pdi_pedido->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($pdi_pedido->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pdi_pedido/pdi_pedido_db_context_acciones.php?id=<?php Gral::_echo($pdi_pedido->getId()) ?>' modulo_metodo_init="setInitPdiPedido()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


