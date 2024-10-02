
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $ws_fe_ope_solicitud_comprobante_asociado->getId() ?>" modulo="ws_fe_ope_solicitud_comprobante_asociado">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getDescripcion()) ?>
    </div>
    <?php if (count($ws_fe_ope_solicitud_comprobante_asociado->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($ws_fe_ope_solicitud_comprobante_asociado->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="ws_fe_ope_solicitud_id <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getWsFeOpeSolicitud()->getCodigo()) ?> ">	

        <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getWsFeOpeSolicitud()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_tipo_comprobante">
            <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipTipoComprobante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_punto_venta">
            <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipPuntoVenta()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_numero">
            <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipNumero()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_cuit">
            <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipCuit()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_COMPROBANTE_ASOCIADO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='ws_fe_ope_solicitud_comprobante_asociado_alta.php?id=<?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_COMPROBANTE_ASOCIADO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_COMPROBANTE_ASOCIADO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_COMPROBANTE_ASOCIADO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/ws_fe_ope_solicitud_comprobante_asociado/ws_fe_ope_solicitud_comprobante_asociado_db_context_acciones.php?id=<?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getId()) ?>' modulo_metodo_init="setInitWsFeOpeSolicitudComprobanteAsociado()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


