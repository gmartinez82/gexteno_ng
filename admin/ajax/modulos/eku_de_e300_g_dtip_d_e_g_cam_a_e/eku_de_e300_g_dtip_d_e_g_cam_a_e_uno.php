
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_e300_g_dtip_d_e_g_cam_a_e->getId() ?>" modulo="eku_de_e300_g_dtip_d_e_g_cam_a_e">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_e300_g_dtip_d_e_g_cam_a_e->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_e300_g_dtip_d_e_g_cam_a_e->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e301_inatven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE301Inatven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e302_ddesnatven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE302Ddesnatven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e304_itipidven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE304Itipidven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e305_ddtipidven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE305Ddtipidven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e306_dnumidven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE306Dnumidven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e307_dnomven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE307Dnomven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e308_ddirven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE308Ddirven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e309_dnumcasven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE309Dnumcasven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e310_cdepven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE310Cdepven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e311_ddesdepven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE311Ddesdepven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e312_cdisven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE312Cdisven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e313_ddesdisven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE313Ddesdisven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e314_cciuven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE314Cciuven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e315_ddesciuven">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE315Ddesciuven()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e316_ddirprov">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE316Ddirprov()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e317_cdepprov">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE317Cdepprov()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e318_ddesdepprov">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE318Ddesdepprov()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e319_cdisprov">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE319Cdisprov()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e320_ddesdisprov">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE320Ddesdisprov()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e321_cciuprov">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE321Cciuprov()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e322_ddesciuprov">
        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEkuE322Ddesciuprov()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e300_g_dtip_d_e_g_cam_a_e->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_e300_g_dtip_d_e_g_cam_a_e_alta.php?id=<?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getId()) ?>&hash=<?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_db_context_acciones.php?id=<?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getId()) ?>' modulo_metodo_init="setInitEkuDeE300GDtipDEGCamAE()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


