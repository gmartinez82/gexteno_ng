
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $eku_de_d200_g_dat_gral_ope_g_dat_rec->getId() ?>" modulo="eku_de_d200_g_dat_gral_ope_g_dat_rec">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getId()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" descripcion">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getDescripcion()) ?>
    </div>
    <?php if (count($eku_de_d200_g_dat_gral_ope_g_dat_rec->getArrDescripcionExtendidaParaBackend()) > 0) { ?>
        <div class="descripcion-extendida">
            <?php foreach ($eku_de_d200_g_dat_gral_ope_g_dat_rec->getArrDescripcionExtendidaParaBackend() as $i => $arr_descripcion_extendida) { ?>
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
	
    <div class=" eku_de_id <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuDe()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuDe()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d201_inatrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD201Inatrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d202_itiope">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD202Itiope()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d203_cpaisrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD203Cpaisrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d204_ddespaisre">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD204Ddespaisre()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d205_iticontrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD205Iticontrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d206_drucrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD206Drucrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d207_ddvrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD207Ddvrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d208_itipidrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD208Itipidrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d209_ddtipidrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD209Ddtipidrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d210_dnumidrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD210Dnumidrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d211_dnomrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD211Dnomrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d212_dnomfanrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD212Dnomfanrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d213_ddirrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD213Ddirrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d218_dnumcasrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD218Dnumcasrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d219_cdeprec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD219Cdeprec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d220_ddesdeprec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD220Ddesdeprec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d221_cdisrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD221Cdisrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d222_ddesdisrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD222Ddesdisrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d223_cciurec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD223Cciurec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d224_ddesciurec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD224Ddesciurec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d214_dtelrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD214Dtelrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d215_dcelrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD215Dcelrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d216_demailrec">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD216Demailrec()) ?>
    </div>
        </td>	
        
        <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" eku_d217_dcodcliente">
        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD217Dcodcliente()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" creado">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d200_g_dat_gral_ope_g_dat_rec->getCreado())) ?>
    </div>
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='eku_de_d200_g_dat_gral_ope_g_dat_rec_alta.php?id=<?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getId()) ?>&hash=<?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
            <img src='imgs/btn_estado_<?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_db_context_acciones.php?id=<?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getId()) ?>' modulo_metodo_init="setInitEkuDeD200GDatGralOpeGDatRec()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


