
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $pdi_estado->getId() ?>" modulo="pdi_estado">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($pdi_estado->getId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pdi_pedido_id <?php Gral::_echo($pdi_estado->getPdiPedido()->getCodigo()) ?> ">	

        <?php Gral::_echo($pdi_estado->getPdiPedido()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pdi_tipo_estado_id <?php Gral::_echo($pdi_estado->getPdiTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($pdi_estado->getPdiTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="inicial <?php Gral::_echo(GralSiNo::getOxId($pdi_estado->getInicial())->getCodigo()) ?> ">	

        <?php if($pdi_estado->getInicial()){ ?>
        <img src='imgs/tilde_<?php echo $pdi_estado->getInicial() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pdi_estado->getInicial()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pdi_estado->getInicial())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="actual <?php Gral::_echo(GralSiNo::getOxId($pdi_estado->getActual())->getCodigo()) ?> ">	

        <?php if($pdi_estado->getActual()){ ?>
        <img src='imgs/tilde_<?php echo $pdi_estado->getActual() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pdi_estado->getActual()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pdi_estado->getActual())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cantidad">
            <?php Gral::_echo($pdi_estado->getCantidad()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cantidad_stock_real">
            <?php Gral::_echo($pdi_estado->getCantidadStockReal()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cantidad_stock_comprometida">
            <?php Gral::_echo($pdi_estado->getCantidadStockComprometida()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fechahora">
            <?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_estado->getFechahora())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="venta_perdida <?php Gral::_echo(GralSiNo::getOxId($pdi_estado->getVentaPerdida())->getCodigo()) ?> ">	

        <?php if($pdi_estado->getVentaPerdida()){ ?>
        <img src='imgs/tilde_<?php echo $pdi_estado->getVentaPerdida() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pdi_estado->getVentaPerdida()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pdi_estado->getVentaPerdida())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PDI_ESTADO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='pdi_estado_alta.php?id=<?php Gral::_echo($pdi_estado->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_ESTADO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($pdi_estado->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDI_ESTADO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pdi_estado/pdi_estado_db_context_acciones.php?id=<?php Gral::_echo($pdi_estado->getId()) ?>' modulo_metodo_init="setInitPdiEstado()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


