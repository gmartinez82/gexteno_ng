
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId() ?>" modulo="eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e653_cmonecuo">
        <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE653Cmonecuo()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e654_ddmonecuo">
        <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE654Ddmonecuo()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e651_dmoncuota">
        <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE651Dmoncuota()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e652_dvenccuo">
        <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEkuE652Dvenccuo()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta.php?id=<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?>&hash=<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_db_context_acciones.php?id=<?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?>' modulo_metodo_init="setInitEkuDeE650GDtipDEGCamCondGPagCredGCuotas()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


