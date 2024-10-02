
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId() ?>" modulo="eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e621_identarj">
        <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE621Identarj()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e622_ddesdentarj">
        <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE622Ddesdentarj()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e623_drsprotar">
        <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE623Drsprotar()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e624_drucprotar">
        <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE624Drucprotar()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e625_ddvprotar">
        <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE625Ddvprotar()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e626_iforpropa">
        <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE626Iforpropa()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e627_dcodauope">
        <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE627Dcodauope()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e628_dnomtit">
        <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE628Dnomtit()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e629_dnumtarj">
        <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEkuE629Dnumtarj()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta.php?id=<?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId()) ?>&hash=<?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_db_context_acciones.php?id=<?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId()) ?>' modulo_metodo_init="setInitEkuDeE620GDtipDEGCamCondGPagTarCD()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


