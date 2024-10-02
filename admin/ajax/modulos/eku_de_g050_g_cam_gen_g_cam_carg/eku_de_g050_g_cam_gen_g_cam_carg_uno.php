
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_g050_g_cam_gen_g_cam_carg->getId() ?>" modulo="eku_de_g050_g_cam_gen_g_cam_carg">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_g050_g_cam_gen_g_cam_carg->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_g050_g_cam_gen_g_cam_carg->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_g051_cunimedtotvol">
        <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG051Cunimedtotvol()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_g052_ddesunimedtotvol">
        <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG052Ddesunimedtotvol()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_g053_dtotvolmerc">
        <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG053Dtotvolmerc()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_g054_cunimedtotpes">
        <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG054Cunimedtotpes()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_g055_ddesunimedtotpes">
        <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG055Ddesunimedtotpes()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_g056_dtotpesmerc">
        <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG056Dtotpesmerc()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_g057_icarcarga">
        <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG057Icarcarga()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_g058_ddescarcarga">
        <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG058Ddescarcarga()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_g050_g_cam_gen_g_cam_carg->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_g050_g_cam_gen_g_cam_carg_alta.php?id=<?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getId()) ?>&hash=<?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_db_context_acciones.php?id=<?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getId()) ?>' modulo_metodo_init="setInitEkuDeG050GCamGenGCamCarg()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


