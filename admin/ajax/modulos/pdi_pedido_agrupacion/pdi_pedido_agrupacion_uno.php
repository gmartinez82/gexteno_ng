
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $pdi_pedido_agrupacion->getId() ?>" modulo="pdi_pedido_agrupacion">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($pdi_pedido_agrupacion->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($pdi_pedido_agrupacion->getDescripcion()) ?>
    </div>
    <?php if (count($pdi_pedido_agrupacion->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($pdi_pedido_agrupacion->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
            <?php Gral::_echo($pdi_pedido_agrupacion->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="pan_panol_origen">
            <?php Gral::_echo(($pdi_pedido_agrupacion->getPanPanolOrigen() != 'null') ? PanPanol::getOxId($pdi_pedido_agrupacion->getPanPanolOrigen())->getDescripcion() : '-') ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="pan_panol_destino">
            <?php Gral::_echo(($pdi_pedido_agrupacion->getPanPanolDestino() != 'null') ? PanPanol::getOxId($pdi_pedido_agrupacion->getPanPanolDestino())->getDescripcion() : '-') ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pdi_pedido_agrupacion_tipo_estado_id <?php Gral::_echo($pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pdi_tipo_origen_id <?php Gral::_echo($pdi_pedido_agrupacion->getPdiTipoOrigen()->getCodigo()) ?> ">	

        <?php Gral::_echo($pdi_pedido_agrupacion->getPdiTipoOrigen()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pdi_urgencia_id <?php Gral::_echo($pdi_pedido_agrupacion->getPdiUrgencia()->getCodigo()) ?> ">	

        <?php Gral::_echo($pdi_pedido_agrupacion->getPdiUrgencia()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='pdi_pedido_agrupacion_alta.php?id=<?php Gral::_echo($pdi_pedido_agrupacion->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($pdi_pedido_agrupacion->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($pdi_pedido_agrupacion->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/pdi_pedido_agrupacion/pdi_pedido_agrupacion_db_context_acciones.php?id=<?php Gral::_echo($pdi_pedido_agrupacion->getId()) ?>' modulo_metodo_init="setInitPdiPedidoAgrupacion()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


