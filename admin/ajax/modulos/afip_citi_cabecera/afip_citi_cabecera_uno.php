
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $afip_citi_cabecera->getId() ?>" modulo="afip_citi_cabecera">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="id">
            <?php Gral::_echo($afip_citi_cabecera->getId()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="descripcion">
            <?php Gral::_echo($afip_citi_cabecera->getDescripcion()) ?>
    </div>
    <?php if (count($afip_citi_cabecera->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($afip_citi_cabecera->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
            <?php Gral::_echo($afip_citi_cabecera->getCodigo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="afip_citi_prc_id <?php Gral::_echo($afip_citi_cabecera->getAfipCitiPrc()->getCodigo()) ?> ">	

        <?php Gral::_echo($afip_citi_cabecera->getAfipCitiPrc()->getDescripcion()) ?>
    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class="actual <?php Gral::_echo(GralSiNo::getOxId($afip_citi_cabecera->getActual())->getCodigo()) ?> ">	

        <?php if($afip_citi_cabecera->getActual()){ ?>
        <img src='imgs/tilde_<?php echo $afip_citi_cabecera->getActual() ?>.png' width='16' border='0' alt="<?php Gral::_echo($afip_citi_cabecera->getActual()) ?>" title="<?php Gral::_echo(GralSiNo::getOxId($afip_citi_cabecera->getActual())->getDescripcion()) ?>" />
        <?php }else{ ?>
        -
        <?php } ?>        

    </div>

</td>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_cuit_informante">
            <?php Gral::_echo($afip_citi_cabecera->getAfipCitiCuitInformante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_periodo">
            <?php Gral::_echo($afip_citi_cabecera->getAfipCitiPeriodo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_secuencia">
            <?php Gral::_echo($afip_citi_cabecera->getAfipCitiSecuencia()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_sin_movimiento">
            <?php Gral::_echo($afip_citi_cabecera->getAfipCitiSinMovimiento()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_prorratear_cf_computable">
            <?php Gral::_echo($afip_citi_cabecera->getAfipCitiProrratearCfComputable()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_cf_computable_o_comprobante">
            <?php Gral::_echo($afip_citi_cabecera->getAfipCitiCfComputableOComprobante()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_cf_computable_global">
            <?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfComputableGlobal()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_cf_computable_asignacion_directa">
            <?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfComputableAsignacionDirecta()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_cf_computable_prorrateo">
            <?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfComputableProrrateo()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_cf_no_computable_global">
            <?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfNoComputableGlobal()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_cf_contribuyente_ss_y_oc">
            <?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfContribuyenteSsYOc()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="afip_citi_importe_cf_computable_ss_y_oc">
            <?php Gral::_echo($afip_citi_cabecera->getAfipCitiImporteCfComputableSsYOc()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_CABECERA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='afip_citi_cabecera_alta.php?id=<?php Gral::_echo($afip_citi_cabecera->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_CABECERA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($afip_citi_cabecera->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_CABECERA_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($afip_citi_cabecera->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('AFIP_CITI_CABECERA_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/afip_citi_cabecera/afip_citi_cabecera_db_context_acciones.php?id=<?php Gral::_echo($afip_citi_cabecera->getId()) ?>' modulo_metodo_init="setInitAfipCitiCabecera()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


