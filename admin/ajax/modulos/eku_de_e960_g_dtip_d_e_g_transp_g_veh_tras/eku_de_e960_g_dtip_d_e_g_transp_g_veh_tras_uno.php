
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId() ?>" modulo="eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e961_dtivehtras">
        <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE961Dtivehtras()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e962_dmarveh">
        <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE962Dmarveh()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e967_dtipidenveh">
        <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE967Dtipidenveh()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e963_dnroidveh">
        <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE963Dnroidveh()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e964_dadicveh">
        <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE964Dadicveh()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e965_dnromatveh">
        <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE965Dnromatveh()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_e966_dnrovuelo">
        <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE966Dnrovuelo()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta.php?id=<?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId()) ?>&hash=<?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_db_context_acciones.php?id=<?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId()) ?>' modulo_metodo_init="setInitEkuDeE960GDtipDEGTranspGVehTras()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


