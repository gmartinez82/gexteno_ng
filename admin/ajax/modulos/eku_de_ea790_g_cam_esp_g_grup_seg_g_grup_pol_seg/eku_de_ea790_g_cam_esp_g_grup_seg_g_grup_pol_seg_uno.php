
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getId() ?>" modulo="eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea791_dpoliza">
        <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa791Dpoliza()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea792_dunidvig">
        <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa792Dunidvig()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea793_dvigencia">
        <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa793Dvigencia()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea794_dnumpoliza">
        <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa794Dnumpoliza()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea795_dfecinivig">
        <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa795Dfecinivig()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea796_dfecfinvig">
        <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa796Dfecfinvig()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_ea797_dcodint">
        <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEkuEa797Dcodint()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_EA790_G_CAM_ESP_G_GRUP_SEG_G_GRUP_POL_SEG_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_alta.php?id=<?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getId()) ?>&hash=<?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_EA790_G_CAM_ESP_G_GRUP_SEG_G_GRUP_POL_SEG_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_EA790_G_CAM_ESP_G_GRUP_SEG_G_GRUP_POL_SEG_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_EA790_G_CAM_ESP_G_GRUP_SEG_G_GRUP_POL_SEG_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg/eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_db_context_acciones.php?id=<?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getId()) ?>' modulo_metodo_init="setInitEkuDeEa790GCamEspGGrupSegGGrupPolSeg()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


