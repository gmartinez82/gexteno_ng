
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $gral_tipo_iva_ws_fe_param_tipo_iva->getId() ?>" modulo="gral_tipo_iva_ws_fe_param_tipo_iva">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getDescripcion()) ?>
    </div>
    <?php if (count($gral_tipo_iva_ws_fe_param_tipo_iva->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($gral_tipo_iva_ws_fe_param_tipo_iva->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="gral_tipo_iva_id <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getGralTipoIva()->getCodigo()) ?> ">	

        <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getGralTipoIva()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ws_fe_param_tipo_iva_id <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getWsFeParamTipoIva()->getCodigo()) ?> ">	

        <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getWsFeParamTipoIva()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='gral_tipo_iva_ws_fe_param_tipo_iva_alta.php?id=<?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_WS_FE_PARAM_TIPO_IVA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/gral_tipo_iva_ws_fe_param_tipo_iva/gral_tipo_iva_ws_fe_param_tipo_iva_db_context_acciones.php?id=<?php Gral::_echo($gral_tipo_iva_ws_fe_param_tipo_iva->getId()) ?>' modulo_metodo_init="setInitGralTipoIvaWsFeParamTipoIva()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


