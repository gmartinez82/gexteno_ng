
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId() ?>" modulo="eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e921_ddirlocsal">
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE921Ddirlocsal()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e922_dnumcassal">
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE922Dnumcassal()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e923_dcomp1sal">
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE923Dcomp1sal()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e924_dcomp2sal">
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE924Dcomp2sal()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e925_cdepsal">
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE925Cdepsal()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e926_ddesdepsal">
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE926Ddesdepsal()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e927_cdissal">
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE927Cdissal()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e928_ddesdissal">
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE928Ddesdissal()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e929_cciusal">
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE929Cciusal()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e930_ddesciusal">
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE930Ddesciusal()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e931_dtelsal">
        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE931Dtelsal()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta.php?id=<?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId()) ?>&hash=<?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_db_context_acciones.php?id=<?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId()) ?>' modulo_metodo_init="setInitEkuDeE920GDtipDEGTranspGCamSal()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


