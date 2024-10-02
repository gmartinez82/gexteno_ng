
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId() ?>" modulo="eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e981_inattrans">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE981Inattrans()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e982_dnomtrans">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE982Dnomtrans()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e983_dructrans">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE983Dructrans()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e984_ddvtrans">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE984Ddvtrans()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e985_itipidtrans">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE985Itipidtrans()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e986_ddtipidtrans">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE986Ddtipidtrans()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e987_dnumidtrans">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE987Dnumidtrans()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e988_cnactrans">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE988Cnactrans()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e989_ddesnactrans">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE989Ddesnactrans()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e990_dnumidchof">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE990Dnumidchof()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e991_dnomchof">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE991Dnomchof()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e992_ddomfisc">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE992Ddomfisc()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e993_ddirchof">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE993Ddirchof()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e994_dnombag">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE994Dnombag()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e995_drucag">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE995Drucag()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e996_ddvag">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE996Ddvag()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e997_ddirage">
        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEkuE997Ddirage()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta.php?id=<?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId()) ?>&hash=<?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_db_context_acciones.php?id=<?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId()) ?>' modulo_metodo_init="setInitEkuDeE980GDtipDEGTranspGCamTrans()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


