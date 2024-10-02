
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getId() ?>" modulo="eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e401_imotemi">
        <?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getEkuE401Imotemi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e402_ddesmotemi">
        <?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getEkuE402Ddesmotemi()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E400_G_DTIP_D_E_G_CAM_N_C_D_E_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta.php?id=<?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getId()) ?>&hash=<?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E400_G_DTIP_D_E_G_CAM_N_C_D_E_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E400_G_DTIP_D_E_G_CAM_N_C_D_E_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_E400_G_DTIP_D_E_G_CAM_N_C_D_E_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e/eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_db_context_acciones.php?id=<?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getId()) ?>' modulo_metodo_init="setInitEkuDeE400GDtipDEGCamNCDE()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


