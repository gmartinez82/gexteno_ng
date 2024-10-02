
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_h001_g_cam_d_e_asoc->getId() ?>" modulo="eku_de_h001_g_cam_d_e_asoc">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_h001_g_cam_d_e_asoc->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_h001_g_cam_d_e_asoc->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h002_itipdocaso">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH002Itipdocaso()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h003_ddestipdocaso">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH003Ddestipdocaso()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h004_dcdcderef">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH004Dcdcderef()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h005_dntimdi">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH005Dntimdi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h006_destdocaso">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH006Destdocaso()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h007_dpexpdocaso">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH007Dpexpdocaso()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h008_dnumdocaso">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH008Dnumdocaso()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h009_itipodocaso">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH009Itipodocaso()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h010_ddtipodocaso">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH010Ddtipodocaso()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h011_dfecemidi">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH011Dfecemidi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h012_dnumcomret">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH012Dnumcomret()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h013_dnumrescf">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH013Dnumrescf()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h014_itipcons">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH014Itipcons()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h015_ddestipcons">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH015Ddestipcons()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h016_dnumcons">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH016Dnumcons()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_h017_dnumcontrol">
        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH017Dnumcontrol()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_h001_g_cam_d_e_asoc->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_h001_g_cam_d_e_asoc_alta.php?id=<?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getId()) ?>&hash=<?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_db_context_acciones.php?id=<?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getId()) ?>' modulo_metodo_init="setInitEkuDeH001GCamDEAsoc()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


