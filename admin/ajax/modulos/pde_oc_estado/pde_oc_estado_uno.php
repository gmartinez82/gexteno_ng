
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_oc_estado->getId() ?>" modulo="pde_oc_estado">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($pde_oc_estado->getId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_oc_id <?php Gral::_echo($pde_oc_estado->getPdeOc()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc_estado->getPdeOc()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_oc_tipo_estado_id <?php Gral::_echo($pde_oc_estado->getPdeOcTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc_estado->getPdeOcTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="inicial <?php Gral::_echo(GralSiNo::getOxId($pde_oc_estado->getInicial())->getCodigo()) ?> ">	

        <?php if($pde_oc_estado->getInicial()){ ?>
        <img src='imgs/tilde_<?php echo $pde_oc_estado->getInicial() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pde_oc_estado->getInicial()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pde_oc_estado->getInicial())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="actual <?php Gral::_echo(GralSiNo::getOxId($pde_oc_estado->getActual())->getCodigo()) ?> ">	

        <?php if($pde_oc_estado->getActual()){ ?>
        <img src='imgs/tilde_<?php echo $pde_oc_estado->getActual() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pde_oc_estado->getActual()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pde_oc_estado->getActual())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_ESTADO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='pde_oc_estado_alta.php?id=<?php Gral::_echo($pde_oc_estado->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_ESTADO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($pde_oc_estado->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_ESTADO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_oc_estado/pde_oc_estado_db_context_acciones.php?id=<?php Gral::_echo($pde_oc_estado->getId()) ?>' modulo_metodo_init="setInitPdeOcEstado()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


