
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_factura->getId() ?>" modulo="vta_factura">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($vta_factura->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($vta_factura->getDescripcion()) ?>
    </div>
    <?php if (count($vta_factura->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($vta_factura->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="cli_cliente_id <?php Gral::_echo($vta_factura->getCliCliente()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getCliCliente()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_factura_tipo_estado_id <?php Gral::_echo($vta_factura->getVtaFacturaTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getVtaFacturaTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_tipo_factura_id <?php Gral::_echo($vta_factura->getVtaTipoFactura()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getVtaTipoFactura()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_tipo_origen_factura_id <?php Gral::_echo($vta_factura->getVtaTipoOrigenFactura()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getVtaTipoOrigenFactura()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_condicion_iva_id <?php Gral::_echo($vta_factura->getGralCondicionIva()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getGralCondicionIva()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_tipo_personeria_id <?php Gral::_echo($vta_factura->getGralTipoPersoneria()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getGralTipoPersoneria()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_empresa_id <?php Gral::_echo($vta_factura->getGralEmpresa()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getGralEmpresa()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_punto_venta_id <?php Gral::_echo($vta_factura->getVtaPuntoVenta()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getVtaPuntoVenta()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_fp_forma_pago_id <?php Gral::_echo($vta_factura->getGralFpFormaPago()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getGralFpFormaPago()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_fp_cuota_id <?php Gral::_echo($vta_factura->getGralFpCuota()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getGralFpCuota()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_preventista_id <?php Gral::_echo($vta_factura->getVtaPreventista()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getVtaPreventista()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_comprador_id <?php Gral::_echo($vta_factura->getVtaComprador()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getVtaComprador()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_vendedor_id <?php Gral::_echo($vta_factura->getVtaVendedor()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getVtaVendedor()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_actividad_id <?php Gral::_echo($vta_factura->getGralActividad()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getGralActividad()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_escenario_id <?php Gral::_echo($vta_factura->getGralEscenario()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getGralEscenario()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cae">
            <?php Gral::_echo($vta_factura->getCae()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fecha_emision">
            <?php Gral::_echo(Gral::getFechaToWeb($vta_factura->getFechaEmision())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fecha_vencimiento">
            <?php Gral::_echo(Gral::getFechaToWeb($vta_factura->getFechaVencimiento())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_tipo_documento_id <?php Gral::_echo($vta_factura->getGralTipoDocumento()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getGralTipoDocumento()->getDescripcion()) ?>
    </div>

</td>
<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="persona_descripcion">
            <?php Gral::_echo($vta_factura->getPersonaDescripcion()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="persona_documento">
            <?php Gral::_echo($vta_factura->getPersonaDocumento()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="persona_email">
            <?php Gral::_echo($vta_factura->getPersonaEmail()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="razon_social">
            <?php Gral::_echo($vta_factura->getRazonSocial()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($vta_factura->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_presupuesto_id <?php Gral::_echo($vta_factura->getVtaPresupuesto()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getVtaPresupuesto()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="anio">
            <?php Gral::_echo($vta_factura->getAnio()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_mes_id <?php Gral::_echo($vta_factura->getGralMes()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getGralMes()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cntb_diario_asiento_id <?php Gral::_echo($vta_factura->getCntbDiarioAsiento()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getCntbDiarioAsiento()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_sucursal_id <?php Gral::_echo($vta_factura->getGralSucursal()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_factura->getGralSucursal()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='vta_factura_alta.php?id=<?php Gral::_echo($vta_factura->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($vta_factura->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($vta_factura->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_factura/vta_factura_db_context_acciones.php?id=<?php Gral::_echo($vta_factura->getId()) ?>' modulo_metodo_init="setInitVtaFactura()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


