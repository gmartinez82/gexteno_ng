
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId() ?>" modulo="eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" eku_de_e700_g_dtip_d_e_g_cam_item_id <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDeE700GDtipDEGCamItem()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuDeE700GDtipDEGCamItem()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e731_iafeciva">
        <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE731Iafeciva()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e732_ddesafeciva">
        <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE732Ddesafeciva()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e733_dpropiva">
        <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE733Dpropiva()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e734_dtasaiva">
        <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE734Dtasaiva()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e735_dbasgraviva">
        <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE735Dbasgraviva()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e736_dliqivaitem">
        <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEkuE736Dliqivaitem()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta.php?id=<?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId()) ?>&hash=<?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_db_context_acciones.php?id=<?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId()) ?>' modulo_metodo_init="setInitEkuDeE730GDtipDEGCamItemGCamIVA()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


