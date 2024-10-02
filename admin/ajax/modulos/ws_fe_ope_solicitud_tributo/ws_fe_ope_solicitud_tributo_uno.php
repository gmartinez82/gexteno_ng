
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $ws_fe_ope_solicitud_tributo->getId() ?>" modulo="ws_fe_ope_solicitud_tributo">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getDescripcion()) ?>
    </div>
    <?php if (count($ws_fe_ope_solicitud_tributo->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($ws_fe_ope_solicitud_tributo->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="ws_fe_ope_solicitud_id <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeOpeSolicitud()->getCodigo()) ?> ">	

        <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeOpeSolicitud()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ws_fe_param_tipo_tributo_id <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeParamTipoTributo()->getCodigo()) ?> ">	

        <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeParamTipoTributo()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_codigo">
            <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeAfipCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_descripcion">
            <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeAfipDescripcion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_base_imponible">
            <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeAfipBaseImponible()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_alicuota">
            <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeAfipAlicuota()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="ws_fe_afip_importe">
            <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getWsFeAfipImporte()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($ws_fe_ope_solicitud_tributo->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_TRIBUTO_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='ws_fe_ope_solicitud_tributo_alta.php?id=<?php Gral::_echo($ws_fe_ope_solicitud_tributo->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_TRIBUTO_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($ws_fe_ope_solicitud_tributo->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_TRIBUTO_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($ws_fe_ope_solicitud_tributo->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_TRIBUTO_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/ws_fe_ope_solicitud_tributo/ws_fe_ope_solicitud_tributo_db_context_acciones.php?id=<?php Gral::_echo($ws_fe_ope_solicitud_tributo->getId()) ?>' modulo_metodo_init="setInitWsFeOpeSolicitudTributo()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


