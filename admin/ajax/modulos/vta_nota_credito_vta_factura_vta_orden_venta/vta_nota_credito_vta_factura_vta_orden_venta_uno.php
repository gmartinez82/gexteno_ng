
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_nota_credito_vta_factura_vta_orden_venta->getId() ?>" modulo="vta_nota_credito_vta_factura_vta_orden_venta">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getDescripcion()) ?>
    </div>
    <?php if (count($vta_nota_credito_vta_factura_vta_orden_venta->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($vta_nota_credito_vta_factura_vta_orden_venta->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="vta_nota_credito_id <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getVtaNotaCredito()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getVtaNotaCredito()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_factura_vta_orden_venta_id <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getVtaFacturaVtaOrdenVenta()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getVtaFacturaVtaOrdenVenta()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_insumo_id <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getInsInsumo()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getInsInsumo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_unidad_medida_id <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getInsUnidadMedida()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getInsUnidadMedida()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_tipo_iva_id <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getGralTipoIva()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getGralTipoIva()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_unitario">
            <?php Gral::_echoImp($vta_nota_credito_vta_factura_vta_orden_venta->getImporteUnitario()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='vta_nota_credito_vta_factura_vta_orden_venta_alta.php?id=<?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_nota_credito_vta_factura_vta_orden_venta/vta_nota_credito_vta_factura_vta_orden_venta_db_context_acciones.php?id=<?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getId()) ?>' modulo_metodo_init="setInitVtaNotaCreditoVtaFacturaVtaOrdenVenta()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


