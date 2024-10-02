
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_orden_venta_tipo_estado_facturacion->getId() ?>" modulo="vta_orden_venta_tipo_estado_facturacion">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getDescripcion()) ?>
    </div>
    <?php if (count($vta_orden_venta_tipo_estado_facturacion->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($vta_orden_venta_tipo_estado_facturacion->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
            <?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="activo <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_tipo_estado_facturacion->getActivo())->getCodigo()) ?> ">	

        <?php if($vta_orden_venta_tipo_estado_facturacion->getActivo()){ ?>
        <img src='imgs/tilde_<?php echo $vta_orden_venta_tipo_estado_facturacion->getActivo() ?>.png' width='16' border='0' alt="<?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getActivo()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_tipo_estado_facturacion->getActivo())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="terminal <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_tipo_estado_facturacion->getTerminal())->getCodigo()) ?> ">	

        <?php if($vta_orden_venta_tipo_estado_facturacion->getTerminal()){ ?>
        <img src='imgs/tilde_<?php echo $vta_orden_venta_tipo_estado_facturacion->getTerminal() ?>.png' width='16' border='0' alt="<?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getTerminal()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_tipo_estado_facturacion->getTerminal())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='vta_orden_venta_tipo_estado_facturacion_alta.php?id=<?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_orden_venta_tipo_estado_facturacion/vta_orden_venta_tipo_estado_facturacion_db_context_acciones.php?id=<?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getId()) ?>' modulo_metodo_init="setInitVtaOrdenVentaTipoEstadoFacturacion()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


