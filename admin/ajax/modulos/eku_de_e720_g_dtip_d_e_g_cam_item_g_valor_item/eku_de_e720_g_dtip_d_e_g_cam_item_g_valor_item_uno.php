
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId() ?>" modulo="eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" eku_de_e700_g_dtip_d_e_g_cam_item_id <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDeE700GDtipDEGCamItem()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDeE700GDtipDEGCamItem()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e721_dpuniproser">
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE721Dpuniproser()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e725_dticamit">
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE725Dticamit()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e727_dtotbruopeitem">
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE727Dtotbruopeitem()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea002_ddescitem">
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa002Ddescitem()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea003_dporcdesit">
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa003Dporcdesit()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea004_ddescgloitem">
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa004Ddescgloitem()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea006_dantpreuniit">
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa006Dantpreuniit()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea007_dantglopreuniit">
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa007Dantglopreuniit()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea008_dtotopeitem">
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa008Dtotopeitem()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea009_dtotopegs">
        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa009Dtotopegs()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta.php?id=<?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId()) ?>&hash=<?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_db_context_acciones.php?id=<?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId()) ?>' modulo_metodo_init="setInitEkuDeE720GDtipDEGCamItemGValorItem()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


