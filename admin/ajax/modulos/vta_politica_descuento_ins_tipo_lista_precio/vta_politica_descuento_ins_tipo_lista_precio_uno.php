
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_politica_descuento_ins_tipo_lista_precio->getId() ?>" modulo="vta_politica_descuento_ins_tipo_lista_precio">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_politica_descuento_id <?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getVtaPoliticaDescuento()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getVtaPoliticaDescuento()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_tipo_lista_precio_id <?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getInsTipoListaPrecio()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getInsTipoListaPrecio()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_TIPO_LISTA_PRECIO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='vta_politica_descuento_ins_tipo_lista_precio_alta.php?id=<?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_TIPO_LISTA_PRECIO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_TIPO_LISTA_PRECIO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_politica_descuento_ins_tipo_lista_precio/vta_politica_descuento_ins_tipo_lista_precio_db_context_acciones.php?id=<?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getId()) ?>' modulo_metodo_init="setInitVtaPoliticaDescuentoInsTipoListaPrecio()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


