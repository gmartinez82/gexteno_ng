
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_d100_g_dat_gral_ope_g_emis->getId() ?>" modulo="eku_de_d100_g_dat_gral_ope_g_emis">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_d100_g_dat_gral_ope_g_emis->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_d100_g_dat_gral_ope_g_emis->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d101_drucem">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD101Drucem()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d102_ddvemi">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD102Ddvemi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d103_itipcont">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD103Itipcont()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d104_ctipreg">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD104Ctipreg()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d105_dnomemi">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD105Dnomemi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d106_dnomfanemi">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD106Dnomfanemi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d107_ddiremi">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD107Ddiremi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d108_dnumcas">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD108Dnumcas()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d109_dcompdir1">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD109Dcompdir1()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d110_dcompdir2">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD110Dcompdir2()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d111_cdepemi">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD111Cdepemi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d112_ddesdepemi">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD112Ddesdepemi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d113_cdisemi">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD113Cdisemi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d114_ddesdisemi">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD114Ddesdisemi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d115_cciuemi">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD115Cciuemi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d116_ddesciuemi">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD116Ddesciuemi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d117_dtelemi">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD117Dtelemi()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d118_demaile">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD118Demaile()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d119_ddensuc">
        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD119Ddensuc()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d100_g_dat_gral_ope_g_emis->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_d100_g_dat_gral_ope_g_emis_alta.php?id=<?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getId()) ?>&hash=<?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_db_context_acciones.php?id=<?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getId()) ?>' modulo_metodo_init="setInitEkuDeD100GDatGralOpeGEmis()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


