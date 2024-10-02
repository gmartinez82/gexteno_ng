
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $ws_fe_ope_solicitud_respuesta->getId() ?>" modulo="ws_fe_ope_solicitud_respuesta">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getDescripcion()) ?>
    </div>
    <?php if (count($ws_fe_ope_solicitud_respuesta->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($ws_fe_ope_solicitud_respuesta->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="ws_fe_ope_solicitud_id <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeOpeSolicitud()->getCodigo()) ?> ">	

        <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeOpeSolicitud()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_cuit">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipCuit()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_punto_venta">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipPuntoVenta()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_tipo_comprobante">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoComprobante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_fecha_proceso">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipFechaProceso()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_cantidad_registro">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipCantidadRegistro()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_resultado_cabecera">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipResultadoCabecera()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_reproceso">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipReproceso()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_tipo_concepto">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoConcepto()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_tipo_documento">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipTipoDocumento()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_numero_documento">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipNumeroDocumento()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_comprobante_desde">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteDesde()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_comprobante_hasta">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteHasta()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_comprobante_fecha">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipComprobanteFecha()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_resultado_detalle">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipResultadoDetalle()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_cae">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipCae()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_cae_fecha_vencimiento">
            <?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getWsFeAfipCaeFechaVencimiento()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='ws_fe_ope_solicitud_respuesta_alta.php?id=<?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_RESPUESTA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/ws_fe_ope_solicitud_respuesta/ws_fe_ope_solicitud_respuesta_db_context_acciones.php?id=<?php Gral::_echo($ws_fe_ope_solicitud_respuesta->getId()) ?>' modulo_metodo_init="setInitWsFeOpeSolicitudRespuesta()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


