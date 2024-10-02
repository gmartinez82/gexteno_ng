
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_politica_descuento_ins_categoria->getId() ?>" modulo="vta_politica_descuento_ins_categoria">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($vta_politica_descuento_ins_categoria->getId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_politica_descuento_id <?php Gral::_echo($vta_politica_descuento_ins_categoria->getVtaPoliticaDescuento()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_politica_descuento_ins_categoria->getVtaPoliticaDescuento()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_categoria_id <?php Gral::_echo($vta_politica_descuento_ins_categoria->getInsCategoria()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_politica_descuento_ins_categoria->getInsCategoria()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_CATEGORIA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='vta_politica_descuento_ins_categoria_alta.php?id=<?php Gral::_echo($vta_politica_descuento_ins_categoria->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_CATEGORIA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($vta_politica_descuento_ins_categoria->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_CATEGORIA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_politica_descuento_ins_categoria/vta_politica_descuento_ins_categoria_db_context_acciones.php?id=<?php Gral::_echo($vta_politica_descuento_ins_categoria->getId()) ?>' modulo_metodo_init="setInitVtaPoliticaDescuentoInsCategoria()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


