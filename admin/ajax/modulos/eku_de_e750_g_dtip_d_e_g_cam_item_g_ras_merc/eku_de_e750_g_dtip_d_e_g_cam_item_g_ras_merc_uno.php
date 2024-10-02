
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId() ?>" modulo="eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" eku_de_e700_g_dtip_d_e_g_cam_item_id <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDeE700GDtipDEGCamItem()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDeE700GDtipDEGCamItem()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e751_dnumlote">
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE751Dnumlote()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e752_dvencmerc">
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE752Dvencmerc()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e753_dnserie">
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE753Dnserie()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e754_dnumpedi">
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE754Dnumpedi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e755_dnumsegui">
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE755Dnumsegui()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e756_dnomimp">
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE756Dnomimp()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e757_ddirimp">
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE757Ddirimp()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e758_dnumfir">
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE758Dnumfir()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e759_dnumreg">
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE759Dnumreg()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e760_dnumregentcom">
        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE760Dnumregentcom()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta.php?id=<?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId()) ?>&hash=<?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_db_context_acciones.php?id=<?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId()) ?>' modulo_metodo_init="setInitEkuDeE750GDtipDEGCamItemGRasMerc()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


