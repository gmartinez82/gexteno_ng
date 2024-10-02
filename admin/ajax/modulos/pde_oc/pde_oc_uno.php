
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $pde_oc->getId() ?>" modulo="pde_oc">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($pde_oc->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($pde_oc->getDescripcion()) ?>
    </div>
    <?php if (count($pde_oc->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($pde_oc->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
            <?php Gral::_echo($pde_oc->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_pedido_id <?php Gral::_echo($pde_oc->getPdePedido()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc->getPdePedido()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_cotizacion_id <?php Gral::_echo($pde_oc->getPdeCotizacion()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc->getPdeCotizacion()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="prv_proveedor_id <?php Gral::_echo($pde_oc->getPrvProveedor()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc->getPrvProveedor()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_insumo_id <?php Gral::_echo($pde_oc->getInsInsumo()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc->getInsInsumo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_oc_agrupacion_id <?php Gral::_echo($pde_oc->getPdeOcAgrupacion()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc->getPdeOcAgrupacion()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_centro_pedido_id <?php Gral::_echo($pde_oc->getPdeCentroPedido()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc->getPdeCentroPedido()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_centro_recepcion_id <?php Gral::_echo($pde_oc->getPdeCentroRecepcion()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc->getPdeCentroRecepcion()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_oc_tipo_estado_id <?php Gral::_echo($pde_oc->getPdeOcTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc->getPdeOcTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_oc_tipo_estado_recepcion_id <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoRecepcion()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoRecepcion()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_oc_tipo_estado_facturacion_id <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoFacturacion()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoFacturacion()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_oc_tipo_origen_id <?php Gral::_echo($pde_oc->getPdeOcTipoOrigen()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc->getPdeOcTipoOrigen()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cantidad">
            <?php Gral::_echo($pde_oc->getCantidad()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fecha_entrega">
            <?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getFechaEntrega())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_unidad">
            <?php Gral::_echoImp($pde_oc->getImporteUnidad()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_total">
            <?php Gral::_echoImp($pde_oc->getImporteTotal()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vencimiento">
            <?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getVencimiento())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="prv_insumo_id">
            <?php Gral::_echo($pde_oc->getPrvInsumo()->getDescripcion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="prv_insumo_costo_id">
            <?php Gral::_echo($pde_oc->getPrvInsumoCosto()->getDescripcion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_esperado">
            <?php Gral::_echo($pde_oc->getImporteEsperado()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="afecta_costo <?php Gral::_echo(GralSiNo::getOxId($pde_oc->getAfectaCosto())->getCodigo()) ?> ">	

        <?php if($pde_oc->getAfectaCosto()){ ?>
        <img src='imgs/tilde_<?php echo $pde_oc->getAfectaCosto() ?>.png' width='16' border='0' alt="<?php Gral::_echo($pde_oc->getAfectaCosto()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($pde_oc->getAfectaCosto())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="prv_descuento_financiero_id <?php Gral::_echo($pde_oc->getPrvDescuentoFinanciero()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc->getPrvDescuentoFinanciero()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="prv_descuento_comercial_id <?php Gral::_echo($pde_oc->getPrvDescuentoComercial()->getCodigo()) ?> ">	

        <?php Gral::_echo($pde_oc->getPrvDescuentoComercial()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='pde_oc_alta.php?id=<?php Gral::_echo($pde_oc->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($pde_oc->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PDE_OC_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($pde_oc->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_OC_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pde_oc/pde_oc_db_context_acciones.php?id=<?php Gral::_echo($pde_oc->getId()) ?>' modulo_metodo_init="setInitPdeOc()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


