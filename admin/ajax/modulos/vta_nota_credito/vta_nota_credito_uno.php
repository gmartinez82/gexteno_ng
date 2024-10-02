
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_nota_credito->getId() ?>" modulo="vta_nota_credito">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($vta_nota_credito->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($vta_nota_credito->getDescripcion()) ?>
    </div>
    <?php if (count($vta_nota_credito->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($vta_nota_credito->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="cli_cliente_id <?php Gral::_echo($vta_nota_credito->getCliCliente()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getCliCliente()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_tipo_nota_credito_id <?php Gral::_echo($vta_nota_credito->getVtaTipoNotaCredito()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getVtaTipoNotaCredito()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_tipo_origen_nota_credito_id <?php Gral::_echo($vta_nota_credito->getVtaTipoOrigenNotaCredito()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getVtaTipoOrigenNotaCredito()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_condicion_iva_id <?php Gral::_echo($vta_nota_credito->getGralCondicionIva()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getGralCondicionIva()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_tipo_personeria_id <?php Gral::_echo($vta_nota_credito->getGralTipoPersoneria()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getGralTipoPersoneria()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_empresa_id <?php Gral::_echo($vta_nota_credito->getGralEmpresa()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getGralEmpresa()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_nota_credito_tipo_estado_id <?php Gral::_echo($vta_nota_credito->getVtaNotaCreditoTipoEstado()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getVtaNotaCreditoTipoEstado()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_punto_venta_id <?php Gral::_echo($vta_nota_credito->getVtaPuntoVenta()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getVtaPuntoVenta()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_fp_forma_pago_id <?php Gral::_echo($vta_nota_credito->getGralFpFormaPago()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getGralFpFormaPago()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="vta_preventista_id <?php Gral::_echo($vta_nota_credito->getVtaPreventista()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getVtaPreventista()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_actividad_id <?php Gral::_echo($vta_nota_credito->getGralActividad()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getGralActividad()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_escenario_id <?php Gral::_echo($vta_nota_credito->getGralEscenario()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getGralEscenario()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="cae">
            <?php Gral::_echo($vta_nota_credito->getCae()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fecha_emision">
            <?php Gral::_echo(Gral::getFechaToWeb($vta_nota_credito->getFechaEmision())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="fecha_vencimiento">
            <?php Gral::_echo(Gral::getFechaToWeb($vta_nota_credito->getFechaVencimiento())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_tipo_documento_id <?php Gral::_echo($vta_nota_credito->getGralTipoDocumento()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getGralTipoDocumento()->getDescripcion()) ?>
    </div>

</td>
<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="persona_descripcion">
            <?php Gral::_echo($vta_nota_credito->getPersonaDescripcion()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="persona_documento">
            <?php Gral::_echo($vta_nota_credito->getPersonaDocumento()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="persona_email">
            <?php Gral::_echo($vta_nota_credito->getPersonaEmail()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="razon_social">
            <?php Gral::_echo($vta_nota_credito->getRazonSocial()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($vta_nota_credito->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="anio">
            <?php Gral::_echo($vta_nota_credito->getAnio()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="gral_mes_id <?php Gral::_echo($vta_nota_credito->getGralMes()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getGralMes()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="cntb_diario_asiento_id <?php Gral::_echo($vta_nota_credito->getCntbDiarioAsiento()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito->getCntbDiarioAsiento()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='vta_nota_credito_alta.php?id=<?php Gral::_echo($vta_nota_credito->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($vta_nota_credito->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($vta_nota_credito->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_nota_credito/vta_nota_credito_db_context_acciones.php?id=<?php Gral::_echo($vta_nota_credito->getId()) ?>' modulo_metodo_init="setInitVtaNotaCredito()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


