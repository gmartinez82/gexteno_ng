
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getId() ?>" modulo="eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e631_dnumcheq">
        <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEkuE631Dnumcheq()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e632_dbcoemi">
        <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEkuE632Dbcoemi()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E630_G_DTIP_D_E_G_CAM_COND_G_PAG_CHEQ_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_alta.php?id=<?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getId()) ?>&hash=<?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E630_G_DTIP_D_E_G_CAM_COND_G_PAG_CHEQ_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E630_G_DTIP_D_E_G_CAM_COND_G_PAG_CHEQ_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_E630_G_DTIP_D_E_G_CAM_COND_G_PAG_CHEQ_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq/eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_db_context_acciones.php?id=<?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getId()) ?>' modulo_metodo_init="setInitEkuDeE630GDtipDEGCamCondGPagCheq()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


