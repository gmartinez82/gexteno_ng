
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_oc_agrupacion_item->getId() ?>" modulo="pde_oc_agrupacion_item">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($pde_oc_agrupacion_item->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($pde_oc_agrupacion_item->getDescripcion()) ?>
    </div>
    <?php if (count($pde_oc_agrupacion_item->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($pde_oc_agrupacion_item->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
    <div class="codigo">
            <?php Gral::_echo($pde_oc_agrupacion_item->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_oc_agrupacion_id <?php Gral::_echo($pde_oc_agrupacion_item->getPdeOcAgrupacion()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc_agrupacion_item->getPdeOcAgrupacion()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_insumo_id <?php Gral::_echo($pde_oc_agrupacion_item->getInsInsumo()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc_agrupacion_item->getInsInsumo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cantidad">
            <?php Gral::_echo($pde_oc_agrupacion_item->getCantidad()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_unidad">
            <?php Gral::_echoImp($pde_oc_agrupacion_item->getImporteUnidad()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="prv_insumo_id">
            <?php Gral::_echo($pde_oc_agrupacion_item->getPrvInsumo()->getDescripcion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="prv_insumo_costo_id">
            <?php Gral::_echo($pde_oc_agrupacion_item->getPrvInsumoCosto()->getDescripcion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_esperado">
            <?php Gral::_echo($pde_oc_agrupacion_item->getImporteEsperado()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="afecta_costo <?php Gral::_echo(GralSiNo::getOxId($pde_oc_agrupacion_item->getAfectaCosto())->getCodigo()) ?> ">	

        <?php if($pde_oc_agrupacion_item->getAfectaCosto()){ ?>
        <img src='imgs/tilde_<?php echo $pde_oc_agrupacion_item->getAfectaCosto() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pde_oc_agrupacion_item->getAfectaCosto()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pde_oc_agrupacion_item->getAfectaCosto())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="prv_descuento_financiero_id <?php Gral::_echo($pde_oc_agrupacion_item->getPrvDescuentoFinanciero()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc_agrupacion_item->getPrvDescuentoFinanciero()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="prv_descuento_comercial_id <?php Gral::_echo($pde_oc_agrupacion_item->getPrvDescuentoComercial()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc_agrupacion_item->getPrvDescuentoComercial()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ITEM_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='pde_oc_agrupacion_item_alta.php?id=<?php Gral::_echo($pde_oc_agrupacion_item->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ITEM_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($pde_oc_agrupacion_item->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ITEM_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($pde_oc_agrupacion_item->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ITEM_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_oc_agrupacion_item/pde_oc_agrupacion_item_db_context_acciones.php?id=<?php Gral::_echo($pde_oc_agrupacion_item->getId()) ?>' modulo_metodo_init="setInitPdeOcAgrupacionItem()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


