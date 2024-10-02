
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_presupuesto->getId() ?>" modulo="vta_presupuesto">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($vta_presupuesto->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($vta_presupuesto->getDescripcion()) ?>
    </div>
    <?php if (count($vta_presupuesto->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($vta_presupuesto->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="cli_cliente_id <?php Gral::_echo($vta_presupuesto->getCliCliente()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getCliCliente()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_vendedor_id <?php Gral::_echo($vta_presupuesto->getVtaVendedor()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getVtaVendedor()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_comprador_id <?php Gral::_echo($vta_presupuesto->getVtaComprador()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getVtaComprador()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_preventista_id <?php Gral::_echo($vta_presupuesto->getVtaPreventista()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getVtaPreventista()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_actividad_id <?php Gral::_echo($vta_presupuesto->getGralActividad()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getGralActividad()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_escenario_id <?php Gral::_echo($vta_presupuesto->getGralEscenario()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getGralEscenario()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_fp_forma_pago_id <?php Gral::_echo($vta_presupuesto->getGralFpFormaPago()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getGralFpFormaPago()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_fp_cuota_id <?php Gral::_echo($vta_presupuesto->getGralFpCuota()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getGralFpCuota()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ins_tipo_lista_precio_id <?php Gral::_echo($vta_presupuesto->getInsTipoListaPrecio()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getInsTipoListaPrecio()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_presupuesto_tipo_estado_id <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_condicion_iva_id <?php Gral::_echo($vta_presupuesto->getGralCondicionIva()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getGralCondicionIva()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_presupuesto_tipo_emision_id <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEmision()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEmision()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_tipo_documento_id <?php Gral::_echo($vta_presupuesto->getGralTipoDocumento()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getGralTipoDocumento()->getDescripcion()) ?>
    </div>

</td>
<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="persona_descripcion">
            <?php Gral::_echo($vta_presupuesto->getPersonaDescripcion()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="persona_documento">
            <?php Gral::_echo($vta_presupuesto->getPersonaDocumento()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="persona_email">
            <?php Gral::_echo($vta_presupuesto->getPersonaEmail()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fecha">
            <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFecha())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fecha_vencimiento">
            <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFechaVencimiento())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fecha_entrega">
            <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFechaEntrega())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fecha_recordatorio">
            <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFechaRecordatorio())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_subtotal">
            <?php Gral::_echoImp($vta_presupuesto->getImporteSubtotal()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_descuento">
            <?php Gral::_echoImp($vta_presupuesto->getImporteDescuento()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_politica_descuento">
            <?php Gral::_echoImp($vta_presupuesto->getImportePoliticaDescuento()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_recargo">
            <?php Gral::_echoImp($vta_presupuesto->getImporteRecargo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_total">
            <?php Gral::_echoImp($vta_presupuesto->getImporteTotal()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cantidad_items">
            <?php Gral::_echo($vta_presupuesto->getCantidadItems()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="recargo">
            <?php Gral::_echo($vta_presupuesto->getRecargo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_sucursal_id <?php Gral::_echo($vta_presupuesto->getGralSucursal()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_presupuesto->getGralSucursal()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="incluye_logistica <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto->getIncluyeLogistica())->getCodigo()) ?> ">	

        <?php if($vta_presupuesto->getIncluyeLogistica()){ ?>
        <img src='imgs/tilde_<?php echo $vta_presupuesto->getIncluyeLogistica() ?>.png' width='16' border='0' alt="<?php Gral::_echo($vta_presupuesto->getIncluyeLogistica()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto->getIncluyeLogistica())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="porcentaje_logistica">
            <?php Gral::_echo($vta_presupuesto->getPorcentajeLogistica()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="importe_logistica">
            <?php Gral::_echoImp($vta_presupuesto->getImporteLogistica()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="destacado <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto->getDestacado())->getCodigo()) ?> ">	

        <?php if($vta_presupuesto->getDestacado()){ ?>
        <img src='imgs/tilde_<?php echo $vta_presupuesto->getDestacado() ?>.png' width='16' border='0' alt="<?php Gral::_echo($vta_presupuesto->getDestacado()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto->getDestacado())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='vta_presupuesto_alta.php?id=<?php Gral::_echo($vta_presupuesto->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($vta_presupuesto->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($vta_presupuesto->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ADM_ACCION_DESTACADO')){ ?>
	<li class='adm_botones_accion destacado' title='<?php Lang::_lang('Destacar/No Destacar') ?>'>
            <img src='imgs/btn_destacado_<?php Gral::_echo($vta_presupuesto->getDestacado())  ?>.png' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_presupuesto/vta_presupuesto_db_context_acciones.php?id=<?php Gral::_echo($vta_presupuesto->getId()) ?>' modulo_metodo_init="setInitVtaPresupuesto()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


