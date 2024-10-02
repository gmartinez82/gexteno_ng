
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId() ?>" modulo="eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e941_ddirlocent">
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE941Ddirlocent()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e942_dnumcasent">
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE942Dnumcasent()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e943_dcomp1ent">
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE943Dcomp1ent()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e944_dcomp2ent">
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE944Dcomp2ent()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e945_cdepent">
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE945Cdepent()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e946_ddesdepent">
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE946Ddesdepent()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e947_cdisent">
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE947Cdisent()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e948_ddesdisent">
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE948Ddesdisent()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e949_cciuent">
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE949Cciuent()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e950_ddesciuent">
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE950Ddesciuent()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e951_dtelent">
        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE951Dtelent()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta.php?id=<?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId()) ?>&hash=<?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_db_context_acciones.php?id=<?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId()) ?>' modulo_metodo_init="setInitEkuDeE940GDtipDEGTranspGCamEnt()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


