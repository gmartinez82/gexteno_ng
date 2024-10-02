
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_e700_g_dtip_d_e_g_cam_item->getId() ?>" modulo="eku_de_e700_g_dtip_d_e_g_cam_item">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_e700_g_dtip_d_e_g_cam_item->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_e700_g_dtip_d_e_g_cam_item->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e701_dcodint">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE701Dcodint()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e702_dpararanc">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE702Dpararanc()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e703_dncm">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE703Dncm()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e704_ddncpg">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE704Ddncpg()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e705_ddncpe">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE705Ddncpe()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e706_dgtin">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE706Dgtin()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e707_dgtinpq">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE707Dgtinpq()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e708_ddesproser">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE708Ddesproser()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e709_cunimed">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE709Cunimed()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e710_ddesunimed">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE710Ddesunimed()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e711_dcantproser">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE711Dcantproser()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e712_cpaisorig">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE712Cpaisorig()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e713_ddespaisorig">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE713Ddespaisorig()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e714_dinfitem">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE714Dinfitem()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e715_crelmerc">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE715Crelmerc()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e716_ddesrelmerc">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE716Ddesrelmerc()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e717_dcanquimer">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE717Dcanquimer()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e718_dporquimer">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE718Dporquimer()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e719_dcdcanticipo">
        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE719Dcdcanticipo()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e700_g_dtip_d_e_g_cam_item->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_e700_g_dtip_d_e_g_cam_item_alta.php?id=<?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getId()) ?>&hash=<?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_db_context_acciones.php?id=<?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getId()) ?>' modulo_metodo_init="setInitEkuDeE700GDtipDEGCamItem()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


