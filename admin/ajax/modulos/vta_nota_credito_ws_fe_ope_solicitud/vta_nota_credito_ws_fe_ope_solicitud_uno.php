
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_nota_credito_ws_fe_ope_solicitud->getId() ?>" modulo="vta_nota_credito_ws_fe_ope_solicitud">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getDescripcion()) ?>
    </div>
    <?php if (count($vta_nota_credito_ws_fe_ope_solicitud->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($vta_nota_credito_ws_fe_ope_solicitud->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class="vta_nota_credito_id <?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getVtaNotaCredito()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getVtaNotaCredito()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="ws_fe_ope_solicitud_id <?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getWsFeOpeSolicitud()->getCodigo()) ?> ">	

        <?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getWsFeOpeSolicitud()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="codigo">
            <?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='vta_nota_credito_ws_fe_ope_solicitud_alta.php?id=<?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_WS_FE_OPE_SOLICITUD_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_nota_credito_ws_fe_ope_solicitud/vta_nota_credito_ws_fe_ope_solicitud_db_context_acciones.php?id=<?php Gral::_echo($vta_nota_credito_ws_fe_ope_solicitud->getId()) ?>' modulo_metodo_init="setInitVtaNotaCreditoWsFeOpeSolicitud()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


