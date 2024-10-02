
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_pedido_prv_proveedor_avisado->getId() ?>" modulo="pde_pedido_prv_proveedor_avisado">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_pedido_id <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getPdePedido()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getPdePedido()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="prv_proveedor_id <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getPrvProveedor()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getPrvProveedor()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="enviado_a">
            <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getEnviadoA()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="leido <?php Gral::_echo(GralSiNo::getOxId($pde_pedido_prv_proveedor_avisado->getLeido())->getCodigo()) ?> ">	

        <?php if($pde_pedido_prv_proveedor_avisado->getLeido()){ ?>
        <img src='imgs/tilde_<?php echo $pde_pedido_prv_proveedor_avisado->getLeido() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getLeido()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pde_pedido_prv_proveedor_avisado->getLeido())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="leido_el">
            <?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_prv_proveedor_avisado->getLeidoEl())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_PRV_PROVEEDOR_AVISADO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='pde_pedido_prv_proveedor_avisado_alta.php?id=<?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_PRV_PROVEEDOR_AVISADO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_PEDIDO_PRV_PROVEEDOR_AVISADO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_pedido_prv_proveedor_avisado/pde_pedido_prv_proveedor_avisado_db_context_acciones.php?id=<?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getId()) ?>' modulo_metodo_init="setInitPdePedidoPrvProveedorAvisado()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


