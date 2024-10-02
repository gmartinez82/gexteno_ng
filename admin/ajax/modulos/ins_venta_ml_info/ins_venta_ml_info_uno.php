
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $ins_venta_ml_info->getId() ?>" modulo="ins_venta_ml_info">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($ins_venta_ml_info->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($ins_venta_ml_info->getDescripcion()) ?>
    </div>
    <?php if (count($ins_venta_ml_info->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($ins_venta_ml_info->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
    <div class="cantidad">
            <?php Gral::_echo($ins_venta_ml_info->getCantidad()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe">
            <?php Gral::_echoImp($ins_venta_ml_info->getImporte()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($ins_venta_ml_info->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_identificador">
            <?php Gral::_echo($ins_venta_ml_info->getMlIdentificador()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_category_id">
            <?php Gral::_echo($ins_venta_ml_info->getMlCategoryId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_category_desc">
            <?php Gral::_echo($ins_venta_ml_info->getMlCategoryDesc()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_category_cod">
            <?php Gral::_echo($ins_venta_ml_info->getMlCategoryCod()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_listing_type_id">
            <?php Gral::_echo($ins_venta_ml_info->getMlListingTypeId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_listing_type_desc">
            <?php Gral::_echo($ins_venta_ml_info->getMlListingTypeDesc()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_condition_id">
            <?php Gral::_echo($ins_venta_ml_info->getMlConditionId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_condition_desc">
            <?php Gral::_echo($ins_venta_ml_info->getMlConditionDesc()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_shipping_mode_id">
            <?php Gral::_echo($ins_venta_ml_info->getMlShippingModeId()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_shipping_mode_desc">
            <?php Gral::_echo($ins_venta_ml_info->getMlShippingModeDesc()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_permalink">
            <?php Gral::_echo($ins_venta_ml_info->getMlPermalink()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_start_time">
            <?php Gral::_echo($ins_venta_ml_info->getMlStartTime()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_expiration_time">
            <?php Gral::_echo($ins_venta_ml_info->getMlExpirationTime()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_seller">
            <?php Gral::_echo($ins_venta_ml_info->getMlSeller()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_status">
            <?php Gral::_echo($ins_venta_ml_info->getMlStatus()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_initial_quantity">
            <?php Gral::_echo($ins_venta_ml_info->getMlInitialQuantity()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_available_quantity">
            <?php Gral::_echo($ins_venta_ml_info->getMlAvailableQuantity()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_sold_quantity">
            <?php Gral::_echo($ins_venta_ml_info->getMlSoldQuantity()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ml_price">
            <?php Gral::_echoImp($ins_venta_ml_info->getMlPrice()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ml_free_shipping <?php Gral::_echo(GralSiNo::getOxId($ins_venta_ml_info->getMlFreeShipping())->getCodigo()) ?> ">	

        <?php if($ins_venta_ml_info->getMlFreeShipping()){ ?>
        <img src='imgs/tilde_<?php echo $ins_venta_ml_info->getMlFreeShipping() ?>.png' width='16' border='0' alt="<?php Gral::_echo($ins_venta_ml_info->getMlFreeShipping()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($ins_venta_ml_info->getMlFreeShipping())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ml_local_pickup <?php Gral::_echo(GralSiNo::getOxId($ins_venta_ml_info->getMlLocalPickup())->getCodigo()) ?> ">	

        <?php if($ins_venta_ml_info->getMlLocalPickup()){ ?>
        <img src='imgs/tilde_<?php echo $ins_venta_ml_info->getMlLocalPickup() ?>.png' width='16' border='0' alt="<?php Gral::_echo($ins_venta_ml_info->getMlLocalPickup()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($ins_venta_ml_info->getMlLocalPickup())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='ins_venta_ml_info_alta.php?id=<?php Gral::_echo($ins_venta_ml_info->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($ins_venta_ml_info->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ADM_ACCION_PUBLICADO')){ ?>
	<li class='adm_botones_accion publicado' title='<?php Lang::_lang('Publicar/Despublicar') ?>'>
            <img src='imgs/btn_publicado_<?php Gral::_echo($ins_venta_ml_info->getPublicado())  ?>.png' width='20' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($ins_venta_ml_info->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/ins_venta_ml_info/ins_venta_ml_info_db_context_acciones.php?id=<?php Gral::_echo($ins_venta_ml_info->getId()) ?>' modulo_metodo_init="setInitInsVentaMlInfo()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


