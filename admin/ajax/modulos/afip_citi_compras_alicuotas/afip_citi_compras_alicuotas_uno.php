
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $afip_citi_compras_alicuotas->getId() ?>" modulo="afip_citi_compras_alicuotas">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($afip_citi_compras_alicuotas->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($afip_citi_compras_alicuotas->getDescripcion()) ?>
    </div>
    <?php if (count($afip_citi_compras_alicuotas->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($afip_citi_compras_alicuotas->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
            <?php Gral::_echo($afip_citi_compras_alicuotas->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="afip_citi_prc_id <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiPrc()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiPrc()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="afip_citi_cabecera_id <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiCabecera()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiCabecera()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_tipo_comprobante">
            <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiTipoComprobante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_punto_venta">
            <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiPuntoVenta()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_numero_comprobante">
            <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiNumeroComprobante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_codigo_documento_vendedor">
            <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiCodigoDocumentoVendedor()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_numero_identificacion_vendedor">
            <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiNumeroIdentificacionVendedor()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_neto_gravado">
            <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiImporteNetoGravado()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_alicuota_iva">
            <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiAlicuotaIva()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_impuesto_liquidado">
            <?php Gral::_echo($afip_citi_compras_alicuotas->getAfipCitiImporteImpuestoLiquidado()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_factura_id <?php Gral::_echo($afip_citi_compras_alicuotas->getPdeFactura()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_compras_alicuotas->getPdeFactura()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_nota_credito_id <?php Gral::_echo($afip_citi_compras_alicuotas->getPdeNotaCredito()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_compras_alicuotas->getPdeNotaCredito()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="pde_nota_debito_id <?php Gral::_echo($afip_citi_compras_alicuotas->getPdeNotaDebito()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_compras_alicuotas->getPdeNotaDebito()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_ALICUOTAS_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='afip_citi_compras_alicuotas_alta.php?id=<?php Gral::_echo($afip_citi_compras_alicuotas->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_ALICUOTAS_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($afip_citi_compras_alicuotas->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_ALICUOTAS_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($afip_citi_compras_alicuotas->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_ALICUOTAS_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/afip_citi_compras_alicuotas/afip_citi_compras_alicuotas_db_context_acciones.php?id=<?php Gral::_echo($afip_citi_compras_alicuotas->getId()) ?>' modulo_metodo_init="setInitAfipCitiComprasAlicuotas()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


