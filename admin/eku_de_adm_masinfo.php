<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_id = Gral::getVars(2, 'id');
$eku_de = EkuDe::getOxId($eku_de_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_B001_G_OPE_D_E')){ ?>
            <li><a href="#tab_eku_de_b001_g_ope_d_e"><?php Lang::_lang('EkuDeB001GOpeDEs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_C001_G_TIMB')){ ?>
            <li><a href="#tab_eku_de_c001_g_timb"><?php Lang::_lang('EkuDeC001GTimbs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D001_G_DAT_GRAL_OPE')){ ?>
            <li><a href="#tab_eku_de_d001_g_dat_gral_ope"><?php Lang::_lang('EkuDeD001GDatGralOpes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D010_G_DAT_GRAL_OPE_G_OPE_COM')){ ?>
            <li><a href="#tab_eku_de_d010_g_dat_gral_ope_g_ope_com"><?php Lang::_lang('EkuDeD010GDatGralOpeGOpeComs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS')){ ?>
            <li><a href="#tab_eku_de_d100_g_dat_gral_ope_g_emis"><?php Lang::_lang('EkuDeD100GDatGralOpeGEmiss') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D130_G_DAT_GRAL_OPE_G_EMIS_G_ACT_ECO')){ ?>
            <li><a href="#tab_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco"><?php Lang::_lang('EkuDeD130GDatGralOpeGEmisGActEcos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D140_G_DAT_GRAL_OPE_G_RESP_D_E')){ ?>
            <li><a href="#tab_eku_de_d140_g_dat_gral_ope_g_resp_d_e"><?php Lang::_lang('EkuDeD140GDatGralOpeGRespDEs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC')){ ?>
            <li><a href="#tab_eku_de_d200_g_dat_gral_ope_g_dat_rec"><?php Lang::_lang('EkuDeD200GDatGralOpeGDatRecs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E010_G_DTIP_D_E_G_CAM_F_E')){ ?>
            <li><a href="#tab_eku_de_e010_g_dtip_d_e_g_cam_f_e"><?php Lang::_lang('EkuDeE010GDtipDEGCamFEs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E020_G_DTIP_D_E_G_COMP_PUB')){ ?>
            <li><a href="#tab_eku_de_e020_g_dtip_d_e_g_comp_pub"><?php Lang::_lang('EkuDeE020GDtipDEGCompPubs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E')){ ?>
            <li><a href="#tab_eku_de_e300_g_dtip_d_e_g_cam_a_e"><?php Lang::_lang('EkuDeE300GDtipDEGCamAEs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E400_G_DTIP_D_E_G_CAM_N_C_D_E')){ ?>
            <li><a href="#tab_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e"><?php Lang::_lang('EkuDeE400GDtipDEGCamNCDEs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E500_G_DTIP_D_E_G_CAM_N_R_E')){ ?>
            <li><a href="#tab_eku_de_e500_g_dtip_d_e_g_cam_n_r_e"><?php Lang::_lang('EkuDeE500GDtipDEGCamNREs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E600_G_DTIP_D_E_G_CAM_COND')){ ?>
            <li><a href="#tab_eku_de_e600_g_dtip_d_e_g_cam_cond"><?php Lang::_lang('EkuDeE600GDtipDEGCamConds') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E605_G_DTIP_D_E_G_CAM_COND_G_PA_CON_E_INI')){ ?>
            <li><a href="#tab_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini"><?php Lang::_lang('EkuDeE605GDtipDEGCamCondGPaConEInis') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D')){ ?>
            <li><a href="#tab_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d"><?php Lang::_lang('EkuDeE620GDtipDEGCamCondGPagTarCDs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E630_G_DTIP_D_E_G_CAM_COND_G_PAG_CHEQ')){ ?>
            <li><a href="#tab_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq"><?php Lang::_lang('EkuDeE630GDtipDEGCamCondGPagCheqs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E640_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED')){ ?>
            <li><a href="#tab_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred"><?php Lang::_lang('EkuDeE640GDtipDEGCamCondGPagCreds') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS')){ ?>
            <li><a href="#tab_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas"><?php Lang::_lang('EkuDeE650GDtipDEGCamCondGPagCredGCuotass') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM')){ ?>
            <li><a href="#tab_eku_de_e700_g_dtip_d_e_g_cam_item"><?php Lang::_lang('EkuDeE700GDtipDEGCamItems') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM')){ ?>
            <li><a href="#tab_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item"><?php Lang::_lang('EkuDeE720GDtipDEGCamItemGValorItems') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A')){ ?>
            <li><a href="#tab_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a"><?php Lang::_lang('EkuDeE730GDtipDEGCamItemGCamIVAs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC')){ ?>
            <li><a href="#tab_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc"><?php Lang::_lang('EkuDeE750GDtipDEGCamItemGRasMercs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO')){ ?>
            <li><a href="#tab_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo"><?php Lang::_lang('EkuDeE770GDtipDEGCamItemGVehNuevos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E791_G_CAM_ESP_G_GRUP_ENER')){ ?>
            <li><a href="#tab_eku_de_e791_g_cam_esp_g_grup_ener"><?php Lang::_lang('EkuDeE791GCamEspGGrupEners') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E800_G_CAM_ESP_G_GRUP_SEG')){ ?>
            <li><a href="#tab_eku_de_e800_g_cam_esp_g_grup_seg"><?php Lang::_lang('EkuDeE800GCamEspGGrupSegs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_EA790_G_CAM_ESP_G_GRUP_SEG_G_GRUP_POL_SEG')){ ?>
            <li><a href="#tab_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg"><?php Lang::_lang('EkuDeEa790GCamEspGGrupSegGGrupPolSegs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E810_G_CAM_ESP_G_GRUP_SUP')){ ?>
            <li><a href="#tab_eku_de_e810_g_cam_esp_g_grup_sup"><?php Lang::_lang('EkuDeE810GCamEspGGrupSups') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E820_G_CAM_ESP_G_GRUP_ADI')){ ?>
            <li><a href="#tab_eku_de_e820_g_cam_esp_g_grup_adi"><?php Lang::_lang('EkuDeE820GCamEspGGrupAdis') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E900_G_DTIP_D_E_G_TRANSP')){ ?>
            <li><a href="#tab_eku_de_e900_g_dtip_d_e_g_transp"><?php Lang::_lang('EkuDeE900GDtipDEGTransps') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL')){ ?>
            <li><a href="#tab_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal"><?php Lang::_lang('EkuDeE920GDtipDEGTranspGCamSals') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT')){ ?>
            <li><a href="#tab_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent"><?php Lang::_lang('EkuDeE940GDtipDEGTranspGCamEnts') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS')){ ?>
            <li><a href="#tab_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras"><?php Lang::_lang('EkuDeE960GDtipDEGTranspGVehTrass') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS')){ ?>
            <li><a href="#tab_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans"><?php Lang::_lang('EkuDeE980GDtipDEGTranspGCamTranss') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_F001_G_TOT_SUB')){ ?>
            <li><a href="#tab_eku_de_f001_g_tot_sub"><?php Lang::_lang('EkuDeF001GTotSubs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_G001_G_CAM_GEN')){ ?>
            <li><a href="#tab_eku_de_g001_g_cam_gen"><?php Lang::_lang('EkuDeG001GCamGens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_G050_G_CAM_GEN_G_CAM_CARG')){ ?>
            <li><a href="#tab_eku_de_g050_g_cam_gen_g_cam_carg"><?php Lang::_lang('EkuDeG050GCamGenGCamCargs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_H001_G_CAM_D_E_ASOC')){ ?>
            <li><a href="#tab_eku_de_h001_g_cam_d_e_asoc"><?php Lang::_lang('EkuDeH001GCamDEAsocs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_I001_SIGNATURE')){ ?>
            <li><a href="#tab_eku_de_i001_signature"><?php Lang::_lang('EkuDeI001Signatures') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_J001_G_CAM_FU_F_D')){ ?>
            <li><a href="#tab_eku_de_j001_g_cam_fu_f_d"><?php Lang::_lang('EkuDeJ001GCamFuFDs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_ASCH01_REQ')){ ?>
            <li><a href="#tab_eku_de_asch01_req"><?php Lang::_lang('EkuDeAsch01Reqs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_ARSCH01_RESP')){ ?>
            <li><a href="#tab_eku_de_arsch01_resp"><?php Lang::_lang('EkuDeArsch01Resps') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_ARSCH01_RESP_MENSAJE')){ ?>
            <li><a href="#tab_eku_de_arsch01_resp_mensaje"><?php Lang::_lang('EkuDeArsch01RespMensajes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_OPE_ESTADO')){ ?>
            <li><a href="#tab_eku_de_ope_estado"><?php Lang::_lang('EkuDeOpeEstados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_VTA_FACTURA')){ ?>
            <li><a href="#tab_eku_de_vta_factura"><?php Lang::_lang('EkuDeVtaFacturas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_VTA_NOTA_CREDITO')){ ?>
            <li><a href="#tab_eku_de_vta_nota_credito"><?php Lang::_lang('EkuDeVtaNotaCreditos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_VTA_NOTA_DEBITO')){ ?>
            <li><a href="#tab_eku_de_vta_nota_debito"><?php Lang::_lang('EkuDeVtaNotaDebitos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_VTA_REMITO')){ ?>
            <li><a href="#tab_eku_de_vta_remito"><?php Lang::_lang('EkuDeVtaRemitos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_B001_G_OPE_D_E')){ ?>
	<div id="tab_eku_de_b001_g_ope_d_e" class="bloque-relacion eku_de_b001_g_ope_d_e">
		
            <h4><?php Lang::_lang('EkuDeB001GOpeDE') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeB001GOpeDEsParaBloqueMasInfo() as $eku_de_b001_g_ope_d_e){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_b001_g_ope_d_e->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_b001_g_ope_d_e->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_b001_g_ope_d_e->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_b001_g_ope_d_e->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_b001_g_ope_d_e->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_b001_g_ope_d_e->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_b001_g_ope_d_e->getId() ?>" archivo="ajax/modulos/eku_de_b001_g_ope_d_e/eku_de_b001_g_ope_d_e_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeB001GOpeDE') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_B001_G_OPE_D_E_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeB001GOpeDE') ?>">
                                <a href="eku_de_b001_g_ope_d_e_alta.php?id=<?php echo $eku_de_b001_g_ope_d_e->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_B001_G_OPE_D_E_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_b001_g_ope_d_e){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeB001GOpeDE::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_b001_g_ope_d_e->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeB001GOpeDEs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_b001_g_ope_d_e_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeB001GOpeDE') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_C001_G_TIMB')){ ?>
	<div id="tab_eku_de_c001_g_timb" class="bloque-relacion eku_de_c001_g_timb">
		
            <h4><?php Lang::_lang('EkuDeC001GTimb') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeC001GTimbsParaBloqueMasInfo() as $eku_de_c001_g_timb){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_c001_g_timb->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_c001_g_timb->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_c001_g_timb->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_c001_g_timb->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_c001_g_timb->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_c001_g_timb->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_c001_g_timb->getId() ?>" archivo="ajax/modulos/eku_de_c001_g_timb/eku_de_c001_g_timb_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeC001GTimb') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_C001_G_TIMB_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeC001GTimb') ?>">
                                <a href="eku_de_c001_g_timb_alta.php?id=<?php echo $eku_de_c001_g_timb->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_C001_G_TIMB_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_c001_g_timb){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeC001GTimb::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_c001_g_timb->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeC001GTimbs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_c001_g_timb_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeC001GTimb') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D001_G_DAT_GRAL_OPE')){ ?>
	<div id="tab_eku_de_d001_g_dat_gral_ope" class="bloque-relacion eku_de_d001_g_dat_gral_ope">
		
            <h4><?php Lang::_lang('EkuDeD001GDatGralOpe') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeD001GDatGralOpesParaBloqueMasInfo() as $eku_de_d001_g_dat_gral_ope){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_d001_g_dat_gral_ope->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_d001_g_dat_gral_ope->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_d001_g_dat_gral_ope->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d001_g_dat_gral_ope->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_d001_g_dat_gral_ope->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d001_g_dat_gral_ope->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_d001_g_dat_gral_ope->getId() ?>" archivo="ajax/modulos/eku_de_d001_g_dat_gral_ope/eku_de_d001_g_dat_gral_ope_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeD001GDatGralOpe') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_D001_G_DAT_GRAL_OPE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeD001GDatGralOpe') ?>">
                                <a href="eku_de_d001_g_dat_gral_ope_alta.php?id=<?php echo $eku_de_d001_g_dat_gral_ope->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D001_G_DAT_GRAL_OPE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_d001_g_dat_gral_ope){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeD001GDatGralOpe::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_d001_g_dat_gral_ope->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeD001GDatGralOpes de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_d001_g_dat_gral_ope_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeD001GDatGralOpe') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D010_G_DAT_GRAL_OPE_G_OPE_COM')){ ?>
	<div id="tab_eku_de_d010_g_dat_gral_ope_g_ope_com" class="bloque-relacion eku_de_d010_g_dat_gral_ope_g_ope_com">
		
            <h4><?php Lang::_lang('EkuDeD010GDatGralOpeGOpeCom') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeD010GDatGralOpeGOpeComsParaBloqueMasInfo() as $eku_de_d010_g_dat_gral_ope_g_ope_com){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d010_g_dat_gral_ope_g_ope_com->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d010_g_dat_gral_ope_g_ope_com->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_d010_g_dat_gral_ope_g_ope_com->getId() ?>" archivo="ajax/modulos/eku_de_d010_g_dat_gral_ope_g_ope_com/eku_de_d010_g_dat_gral_ope_g_ope_com_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeD010GDatGralOpeGOpeCom') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_D010_G_DAT_GRAL_OPE_G_OPE_COM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeD010GDatGralOpeGOpeCom') ?>">
                                <a href="eku_de_d010_g_dat_gral_ope_g_ope_com_alta.php?id=<?php echo $eku_de_d010_g_dat_gral_ope_g_ope_com->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D010_G_DAT_GRAL_OPE_G_OPE_COM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_d010_g_dat_gral_ope_g_ope_com){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeD010GDatGralOpeGOpeCom::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_d010_g_dat_gral_ope_g_ope_com->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeD010GDatGralOpeGOpeComs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_d010_g_dat_gral_ope_g_ope_com_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeD010GDatGralOpeGOpeCom') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS')){ ?>
	<div id="tab_eku_de_d100_g_dat_gral_ope_g_emis" class="bloque-relacion eku_de_d100_g_dat_gral_ope_g_emis">
		
            <h4><?php Lang::_lang('EkuDeD100GDatGralOpeGEmis') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeD100GDatGralOpeGEmissParaBloqueMasInfo() as $eku_de_d100_g_dat_gral_ope_g_emis){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d100_g_dat_gral_ope_g_emis->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d100_g_dat_gral_ope_g_emis->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_d100_g_dat_gral_ope_g_emis->getId() ?>" archivo="ajax/modulos/eku_de_d100_g_dat_gral_ope_g_emis/eku_de_d100_g_dat_gral_ope_g_emis_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeD100GDatGralOpeGEmis') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeD100GDatGralOpeGEmis') ?>">
                                <a href="eku_de_d100_g_dat_gral_ope_g_emis_alta.php?id=<?php echo $eku_de_d100_g_dat_gral_ope_g_emis->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D100_G_DAT_GRAL_OPE_G_EMIS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_d100_g_dat_gral_ope_g_emis){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeD100GDatGralOpeGEmis::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_d100_g_dat_gral_ope_g_emis->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeD100GDatGralOpeGEmiss de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_d100_g_dat_gral_ope_g_emis_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeD100GDatGralOpeGEmis') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D130_G_DAT_GRAL_OPE_G_EMIS_G_ACT_ECO')){ ?>
	<div id="tab_eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco" class="bloque-relacion eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco">
		
            <h4><?php Lang::_lang('EkuDeD130GDatGralOpeGEmisGActEco') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeD130GDatGralOpeGEmisGActEcosParaBloqueMasInfo() as $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getId() ?>" archivo="ajax/modulos/eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco/eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeD130GDatGralOpeGEmisGActEco') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_D130_G_DAT_GRAL_OPE_G_EMIS_G_ACT_ECO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeD130GDatGralOpeGEmisGActEco') ?>">
                                <a href="eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_alta.php?id=<?php echo $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D130_G_DAT_GRAL_OPE_G_EMIS_G_ACT_ECO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeD130GDatGralOpeGEmisGActEco::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeD130GDatGralOpeGEmisGActEcos de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeD130GDatGralOpeGEmisGActEco') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D140_G_DAT_GRAL_OPE_G_RESP_D_E')){ ?>
	<div id="tab_eku_de_d140_g_dat_gral_ope_g_resp_d_e" class="bloque-relacion eku_de_d140_g_dat_gral_ope_g_resp_d_e">
		
            <h4><?php Lang::_lang('EkuDeD140GDatGralOpeGRespDE') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeD140GDatGralOpeGRespDEsParaBloqueMasInfo() as $eku_de_d140_g_dat_gral_ope_g_resp_d_e){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_d140_g_dat_gral_ope_g_resp_d_e->getId() ?>" archivo="ajax/modulos/eku_de_d140_g_dat_gral_ope_g_resp_d_e/eku_de_d140_g_dat_gral_ope_g_resp_d_e_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeD140GDatGralOpeGRespDE') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_D140_G_DAT_GRAL_OPE_G_RESP_D_E_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeD140GDatGralOpeGRespDE') ?>">
                                <a href="eku_de_d140_g_dat_gral_ope_g_resp_d_e_alta.php?id=<?php echo $eku_de_d140_g_dat_gral_ope_g_resp_d_e->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D140_G_DAT_GRAL_OPE_G_RESP_D_E_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_d140_g_dat_gral_ope_g_resp_d_e){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeD140GDatGralOpeGRespDE::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_d140_g_dat_gral_ope_g_resp_d_e->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeD140GDatGralOpeGRespDEs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_d140_g_dat_gral_ope_g_resp_d_e_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeD140GDatGralOpeGRespDE') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC')){ ?>
	<div id="tab_eku_de_d200_g_dat_gral_ope_g_dat_rec" class="bloque-relacion eku_de_d200_g_dat_gral_ope_g_dat_rec">
		
            <h4><?php Lang::_lang('EkuDeD200GDatGralOpeGDatRec') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeD200GDatGralOpeGDatRecsParaBloqueMasInfo() as $eku_de_d200_g_dat_gral_ope_g_dat_rec){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d200_g_dat_gral_ope_g_dat_rec->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_d200_g_dat_gral_ope_g_dat_rec->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_d200_g_dat_gral_ope_g_dat_rec->getId() ?>" archivo="ajax/modulos/eku_de_d200_g_dat_gral_ope_g_dat_rec/eku_de_d200_g_dat_gral_ope_g_dat_rec_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeD200GDatGralOpeGDatRec') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeD200GDatGralOpeGDatRec') ?>">
                                <a href="eku_de_d200_g_dat_gral_ope_g_dat_rec_alta.php?id=<?php echo $eku_de_d200_g_dat_gral_ope_g_dat_rec->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_D200_G_DAT_GRAL_OPE_G_DAT_REC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_d200_g_dat_gral_ope_g_dat_rec){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeD200GDatGralOpeGDatRec::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_d200_g_dat_gral_ope_g_dat_rec->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeD200GDatGralOpeGDatRecs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_d200_g_dat_gral_ope_g_dat_rec_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeD200GDatGralOpeGDatRec') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E010_G_DTIP_D_E_G_CAM_F_E')){ ?>
	<div id="tab_eku_de_e010_g_dtip_d_e_g_cam_f_e" class="bloque-relacion eku_de_e010_g_dtip_d_e_g_cam_f_e">
		
            <h4><?php Lang::_lang('EkuDeE010GDtipDEGCamFE') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE010GDtipDEGCamFEsParaBloqueMasInfo() as $eku_de_e010_g_dtip_d_e_g_cam_f_e){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e010_g_dtip_d_e_g_cam_f_e->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e010_g_dtip_d_e_g_cam_f_e->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e010_g_dtip_d_e_g_cam_f_e->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e010_g_dtip_d_e_g_cam_f_e->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e010_g_dtip_d_e_g_cam_f_e->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e010_g_dtip_d_e_g_cam_f_e->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e010_g_dtip_d_e_g_cam_f_e->getId() ?>" archivo="ajax/modulos/eku_de_e010_g_dtip_d_e_g_cam_f_e/eku_de_e010_g_dtip_d_e_g_cam_f_e_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE010GDtipDEGCamFE') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E010_G_DTIP_D_E_G_CAM_F_E_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE010GDtipDEGCamFE') ?>">
                                <a href="eku_de_e010_g_dtip_d_e_g_cam_f_e_alta.php?id=<?php echo $eku_de_e010_g_dtip_d_e_g_cam_f_e->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E010_G_DTIP_D_E_G_CAM_F_E_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e010_g_dtip_d_e_g_cam_f_e){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE010GDtipDEGCamFE::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e010_g_dtip_d_e_g_cam_f_e->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE010GDtipDEGCamFEs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e010_g_dtip_d_e_g_cam_f_e_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE010GDtipDEGCamFE') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E020_G_DTIP_D_E_G_COMP_PUB')){ ?>
	<div id="tab_eku_de_e020_g_dtip_d_e_g_comp_pub" class="bloque-relacion eku_de_e020_g_dtip_d_e_g_comp_pub">
		
            <h4><?php Lang::_lang('EkuDeE020GDtipDEGCompPub') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE020GDtipDEGCompPubsParaBloqueMasInfo() as $eku_de_e020_g_dtip_d_e_g_comp_pub){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e020_g_dtip_d_e_g_comp_pub->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e020_g_dtip_d_e_g_comp_pub->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e020_g_dtip_d_e_g_comp_pub->getId() ?>" archivo="ajax/modulos/eku_de_e020_g_dtip_d_e_g_comp_pub/eku_de_e020_g_dtip_d_e_g_comp_pub_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE020GDtipDEGCompPub') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E020_G_DTIP_D_E_G_COMP_PUB_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE020GDtipDEGCompPub') ?>">
                                <a href="eku_de_e020_g_dtip_d_e_g_comp_pub_alta.php?id=<?php echo $eku_de_e020_g_dtip_d_e_g_comp_pub->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E020_G_DTIP_D_E_G_COMP_PUB_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e020_g_dtip_d_e_g_comp_pub){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE020GDtipDEGCompPub::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e020_g_dtip_d_e_g_comp_pub->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE020GDtipDEGCompPubs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e020_g_dtip_d_e_g_comp_pub_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE020GDtipDEGCompPub') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E')){ ?>
	<div id="tab_eku_de_e300_g_dtip_d_e_g_cam_a_e" class="bloque-relacion eku_de_e300_g_dtip_d_e_g_cam_a_e">
		
            <h4><?php Lang::_lang('EkuDeE300GDtipDEGCamAE') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE300GDtipDEGCamAEsParaBloqueMasInfo() as $eku_de_e300_g_dtip_d_e_g_cam_a_e){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e300_g_dtip_d_e_g_cam_a_e->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e300_g_dtip_d_e_g_cam_a_e->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e300_g_dtip_d_e_g_cam_a_e->getId() ?>" archivo="ajax/modulos/eku_de_e300_g_dtip_d_e_g_cam_a_e/eku_de_e300_g_dtip_d_e_g_cam_a_e_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE300GDtipDEGCamAE') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE300GDtipDEGCamAE') ?>">
                                <a href="eku_de_e300_g_dtip_d_e_g_cam_a_e_alta.php?id=<?php echo $eku_de_e300_g_dtip_d_e_g_cam_a_e->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e300_g_dtip_d_e_g_cam_a_e){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE300GDtipDEGCamAE::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e300_g_dtip_d_e_g_cam_a_e->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE300GDtipDEGCamAEs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e300_g_dtip_d_e_g_cam_a_e_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE300GDtipDEGCamAE') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E400_G_DTIP_D_E_G_CAM_N_C_D_E')){ ?>
	<div id="tab_eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e" class="bloque-relacion eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e">
		
            <h4><?php Lang::_lang('EkuDeE400GDtipDEGCamNCDE') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE400GDtipDEGCamNCDEsParaBloqueMasInfo() as $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getId() ?>" archivo="ajax/modulos/eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e/eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE400GDtipDEGCamNCDE') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E400_G_DTIP_D_E_G_CAM_N_C_D_E_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE400GDtipDEGCamNCDE') ?>">
                                <a href="eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta.php?id=<?php echo $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E400_G_DTIP_D_E_G_CAM_N_C_D_E_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE400GDtipDEGCamNCDE::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE400GDtipDEGCamNCDEs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e400_g_dtip_d_e_g_cam_n_c_d_e_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE400GDtipDEGCamNCDE') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E500_G_DTIP_D_E_G_CAM_N_R_E')){ ?>
	<div id="tab_eku_de_e500_g_dtip_d_e_g_cam_n_r_e" class="bloque-relacion eku_de_e500_g_dtip_d_e_g_cam_n_r_e">
		
            <h4><?php Lang::_lang('EkuDeE500GDtipDEGCamNRE') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE500GDtipDEGCamNREsParaBloqueMasInfo() as $eku_de_e500_g_dtip_d_e_g_cam_n_r_e){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getId() ?>" archivo="ajax/modulos/eku_de_e500_g_dtip_d_e_g_cam_n_r_e/eku_de_e500_g_dtip_d_e_g_cam_n_r_e_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE500GDtipDEGCamNRE') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E500_G_DTIP_D_E_G_CAM_N_R_E_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE500GDtipDEGCamNRE') ?>">
                                <a href="eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta.php?id=<?php echo $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E500_G_DTIP_D_E_G_CAM_N_R_E_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e500_g_dtip_d_e_g_cam_n_r_e){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE500GDtipDEGCamNRE::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE500GDtipDEGCamNREs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e500_g_dtip_d_e_g_cam_n_r_e_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE500GDtipDEGCamNRE') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E600_G_DTIP_D_E_G_CAM_COND')){ ?>
	<div id="tab_eku_de_e600_g_dtip_d_e_g_cam_cond" class="bloque-relacion eku_de_e600_g_dtip_d_e_g_cam_cond">
		
            <h4><?php Lang::_lang('EkuDeE600GDtipDEGCamCond') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE600GDtipDEGCamCondsParaBloqueMasInfo() as $eku_de_e600_g_dtip_d_e_g_cam_cond){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e600_g_dtip_d_e_g_cam_cond->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e600_g_dtip_d_e_g_cam_cond->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e600_g_dtip_d_e_g_cam_cond->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e600_g_dtip_d_e_g_cam_cond->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e600_g_dtip_d_e_g_cam_cond->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e600_g_dtip_d_e_g_cam_cond->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e600_g_dtip_d_e_g_cam_cond->getId() ?>" archivo="ajax/modulos/eku_de_e600_g_dtip_d_e_g_cam_cond/eku_de_e600_g_dtip_d_e_g_cam_cond_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE600GDtipDEGCamCond') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E600_G_DTIP_D_E_G_CAM_COND_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE600GDtipDEGCamCond') ?>">
                                <a href="eku_de_e600_g_dtip_d_e_g_cam_cond_alta.php?id=<?php echo $eku_de_e600_g_dtip_d_e_g_cam_cond->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E600_G_DTIP_D_E_G_CAM_COND_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e600_g_dtip_d_e_g_cam_cond){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE600GDtipDEGCamCond::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e600_g_dtip_d_e_g_cam_cond->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE600GDtipDEGCamConds de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e600_g_dtip_d_e_g_cam_cond_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE600GDtipDEGCamCond') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E605_G_DTIP_D_E_G_CAM_COND_G_PA_CON_E_INI')){ ?>
	<div id="tab_eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini" class="bloque-relacion eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini">
		
            <h4><?php Lang::_lang('EkuDeE605GDtipDEGCamCondGPaConEIni') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE605GDtipDEGCamCondGPaConEInisParaBloqueMasInfo() as $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getId() ?>" archivo="ajax/modulos/eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini/eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE605GDtipDEGCamCondGPaConEIni') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E605_G_DTIP_D_E_G_CAM_COND_G_PA_CON_E_INI_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE605GDtipDEGCamCondGPaConEIni') ?>">
                                <a href="eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_alta.php?id=<?php echo $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E605_G_DTIP_D_E_G_CAM_COND_G_PA_CON_E_INI_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE605GDtipDEGCamCondGPaConEIni::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE605GDtipDEGCamCondGPaConEInis de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE605GDtipDEGCamCondGPaConEIni') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D')){ ?>
	<div id="tab_eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d" class="bloque-relacion eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d">
		
            <h4><?php Lang::_lang('EkuDeE620GDtipDEGCamCondGPagTarCD') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE620GDtipDEGCamCondGPagTarCDsParaBloqueMasInfo() as $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId() ?>" archivo="ajax/modulos/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d/eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE620GDtipDEGCamCondGPagTarCD') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE620GDtipDEGCamCondGPagTarCD') ?>">
                                <a href="eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta.php?id=<?php echo $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE620GDtipDEGCamCondGPagTarCD::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE620GDtipDEGCamCondGPagTarCDs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE620GDtipDEGCamCondGPagTarCD') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E630_G_DTIP_D_E_G_CAM_COND_G_PAG_CHEQ')){ ?>
	<div id="tab_eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq" class="bloque-relacion eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq">
		
            <h4><?php Lang::_lang('EkuDeE630GDtipDEGCamCondGPagCheq') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE630GDtipDEGCamCondGPagCheqsParaBloqueMasInfo() as $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getId() ?>" archivo="ajax/modulos/eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq/eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE630GDtipDEGCamCondGPagCheq') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E630_G_DTIP_D_E_G_CAM_COND_G_PAG_CHEQ_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE630GDtipDEGCamCondGPagCheq') ?>">
                                <a href="eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_alta.php?id=<?php echo $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E630_G_DTIP_D_E_G_CAM_COND_G_PAG_CHEQ_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE630GDtipDEGCamCondGPagCheq::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE630GDtipDEGCamCondGPagCheqs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE630GDtipDEGCamCondGPagCheq') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E640_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED')){ ?>
	<div id="tab_eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred" class="bloque-relacion eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred">
		
            <h4><?php Lang::_lang('EkuDeE640GDtipDEGCamCondGPagCred') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE640GDtipDEGCamCondGPagCredsParaBloqueMasInfo() as $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getId() ?>" archivo="ajax/modulos/eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred/eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE640GDtipDEGCamCondGPagCred') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E640_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE640GDtipDEGCamCondGPagCred') ?>">
                                <a href="eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta.php?id=<?php echo $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E640_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE640GDtipDEGCamCondGPagCred::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE640GDtipDEGCamCondGPagCreds de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE640GDtipDEGCamCondGPagCred') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS')){ ?>
	<div id="tab_eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas" class="bloque-relacion eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas">
		
            <h4><?php Lang::_lang('EkuDeE650GDtipDEGCamCondGPagCredGCuotas') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE650GDtipDEGCamCondGPagCredGCuotassParaBloqueMasInfo() as $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId() ?>" archivo="ajax/modulos/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas/eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE650GDtipDEGCamCondGPagCredGCuotas') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE650GDtipDEGCamCondGPagCredGCuotas') ?>">
                                <a href="eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta.php?id=<?php echo $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE650GDtipDEGCamCondGPagCredGCuotass de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE650GDtipDEGCamCondGPagCredGCuotas') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM')){ ?>
	<div id="tab_eku_de_e700_g_dtip_d_e_g_cam_item" class="bloque-relacion eku_de_e700_g_dtip_d_e_g_cam_item">
		
            <h4><?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE700GDtipDEGCamItemsParaBloqueMasInfo() as $eku_de_e700_g_dtip_d_e_g_cam_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e700_g_dtip_d_e_g_cam_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e700_g_dtip_d_e_g_cam_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e700_g_dtip_d_e_g_cam_item->getId() ?>" archivo="ajax/modulos/eku_de_e700_g_dtip_d_e_g_cam_item/eku_de_e700_g_dtip_d_e_g_cam_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?>">
                                <a href="eku_de_e700_g_dtip_d_e_g_cam_item_alta.php?id=<?php echo $eku_de_e700_g_dtip_d_e_g_cam_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e700_g_dtip_d_e_g_cam_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE700GDtipDEGCamItem::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e700_g_dtip_d_e_g_cam_item->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE700GDtipDEGCamItems de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e700_g_dtip_d_e_g_cam_item_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE700GDtipDEGCamItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM')){ ?>
	<div id="tab_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item" class="bloque-relacion eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item">
		
            <h4><?php Lang::_lang('EkuDeE720GDtipDEGCamItemGValorItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE720GDtipDEGCamItemGValorItemsParaBloqueMasInfo() as $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId() ?>" archivo="ajax/modulos/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item/eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE720GDtipDEGCamItemGValorItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE720GDtipDEGCamItemGValorItem') ?>">
                                <a href="eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta.php?id=<?php echo $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE720GDtipDEGCamItemGValorItem::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE720GDtipDEGCamItemGValorItems de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE720GDtipDEGCamItemGValorItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A')){ ?>
	<div id="tab_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a" class="bloque-relacion eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a">
		
            <h4><?php Lang::_lang('EkuDeE730GDtipDEGCamItemGCamIVA') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE730GDtipDEGCamItemGCamIVAsParaBloqueMasInfo() as $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId() ?>" archivo="ajax/modulos/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a/eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE730GDtipDEGCamItemGCamIVA') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE730GDtipDEGCamItemGCamIVA') ?>">
                                <a href="eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta.php?id=<?php echo $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE730GDtipDEGCamItemGCamIVA::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE730GDtipDEGCamItemGCamIVAs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE730GDtipDEGCamItemGCamIVA') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC')){ ?>
	<div id="tab_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc" class="bloque-relacion eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc">
		
            <h4><?php Lang::_lang('EkuDeE750GDtipDEGCamItemGRasMerc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE750GDtipDEGCamItemGRasMercsParaBloqueMasInfo() as $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId() ?>" archivo="ajax/modulos/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc/eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE750GDtipDEGCamItemGRasMerc') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE750GDtipDEGCamItemGRasMerc') ?>">
                                <a href="eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta.php?id=<?php echo $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE750GDtipDEGCamItemGRasMerc::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE750GDtipDEGCamItemGRasMercs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE750GDtipDEGCamItemGRasMerc') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO')){ ?>
	<div id="tab_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo" class="bloque-relacion eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo">
		
            <h4><?php Lang::_lang('EkuDeE770GDtipDEGCamItemGVehNuevo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE770GDtipDEGCamItemGVehNuevosParaBloqueMasInfo() as $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId() ?>" archivo="ajax/modulos/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo/eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE770GDtipDEGCamItemGVehNuevo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE770GDtipDEGCamItemGVehNuevo') ?>">
                                <a href="eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta.php?id=<?php echo $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE770GDtipDEGCamItemGVehNuevo::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE770GDtipDEGCamItemGVehNuevos de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE770GDtipDEGCamItemGVehNuevo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E791_G_CAM_ESP_G_GRUP_ENER')){ ?>
	<div id="tab_eku_de_e791_g_cam_esp_g_grup_ener" class="bloque-relacion eku_de_e791_g_cam_esp_g_grup_ener">
		
            <h4><?php Lang::_lang('EkuDeE791GCamEspGGrupEner') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE791GCamEspGGrupEnersParaBloqueMasInfo() as $eku_de_e791_g_cam_esp_g_grup_ener){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e791_g_cam_esp_g_grup_ener->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e791_g_cam_esp_g_grup_ener->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e791_g_cam_esp_g_grup_ener->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e791_g_cam_esp_g_grup_ener->getId() ?>" archivo="ajax/modulos/eku_de_e791_g_cam_esp_g_grup_ener/eku_de_e791_g_cam_esp_g_grup_ener_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE791GCamEspGGrupEner') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E791_G_CAM_ESP_G_GRUP_ENER_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE791GCamEspGGrupEner') ?>">
                                <a href="eku_de_e791_g_cam_esp_g_grup_ener_alta.php?id=<?php echo $eku_de_e791_g_cam_esp_g_grup_ener->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E791_G_CAM_ESP_G_GRUP_ENER_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e791_g_cam_esp_g_grup_ener){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE791GCamEspGGrupEner::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e791_g_cam_esp_g_grup_ener->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE791GCamEspGGrupEners de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e791_g_cam_esp_g_grup_ener_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE791GCamEspGGrupEner') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E800_G_CAM_ESP_G_GRUP_SEG')){ ?>
	<div id="tab_eku_de_e800_g_cam_esp_g_grup_seg" class="bloque-relacion eku_de_e800_g_cam_esp_g_grup_seg">
		
            <h4><?php Lang::_lang('EkuDeE800GCamEspGGrupSeg') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE800GCamEspGGrupSegsParaBloqueMasInfo() as $eku_de_e800_g_cam_esp_g_grup_seg){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e800_g_cam_esp_g_grup_seg->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e800_g_cam_esp_g_grup_seg->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e800_g_cam_esp_g_grup_seg->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e800_g_cam_esp_g_grup_seg->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e800_g_cam_esp_g_grup_seg->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e800_g_cam_esp_g_grup_seg->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e800_g_cam_esp_g_grup_seg->getId() ?>" archivo="ajax/modulos/eku_de_e800_g_cam_esp_g_grup_seg/eku_de_e800_g_cam_esp_g_grup_seg_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE800GCamEspGGrupSeg') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E800_G_CAM_ESP_G_GRUP_SEG_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE800GCamEspGGrupSeg') ?>">
                                <a href="eku_de_e800_g_cam_esp_g_grup_seg_alta.php?id=<?php echo $eku_de_e800_g_cam_esp_g_grup_seg->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E800_G_CAM_ESP_G_GRUP_SEG_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e800_g_cam_esp_g_grup_seg){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE800GCamEspGGrupSeg::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e800_g_cam_esp_g_grup_seg->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE800GCamEspGGrupSegs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e800_g_cam_esp_g_grup_seg_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE800GCamEspGGrupSeg') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_EA790_G_CAM_ESP_G_GRUP_SEG_G_GRUP_POL_SEG')){ ?>
	<div id="tab_eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg" class="bloque-relacion eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg">
		
            <h4><?php Lang::_lang('EkuDeEa790GCamEspGGrupSegGGrupPolSeg') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeEa790GCamEspGGrupSegGGrupPolSegsParaBloqueMasInfo() as $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getId() ?>" archivo="ajax/modulos/eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg/eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeEa790GCamEspGGrupSegGGrupPolSeg') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_EA790_G_CAM_ESP_G_GRUP_SEG_G_GRUP_POL_SEG_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeEa790GCamEspGGrupSegGGrupPolSeg') ?>">
                                <a href="eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_alta.php?id=<?php echo $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_EA790_G_CAM_ESP_G_GRUP_SEG_G_GRUP_POL_SEG_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeEa790GCamEspGGrupSegGGrupPolSeg::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeEa790GCamEspGGrupSegGGrupPolSegs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeEa790GCamEspGGrupSegGGrupPolSeg') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E810_G_CAM_ESP_G_GRUP_SUP')){ ?>
	<div id="tab_eku_de_e810_g_cam_esp_g_grup_sup" class="bloque-relacion eku_de_e810_g_cam_esp_g_grup_sup">
		
            <h4><?php Lang::_lang('EkuDeE810GCamEspGGrupSup') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE810GCamEspGGrupSupsParaBloqueMasInfo() as $eku_de_e810_g_cam_esp_g_grup_sup){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e810_g_cam_esp_g_grup_sup->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e810_g_cam_esp_g_grup_sup->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e810_g_cam_esp_g_grup_sup->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e810_g_cam_esp_g_grup_sup->getId() ?>" archivo="ajax/modulos/eku_de_e810_g_cam_esp_g_grup_sup/eku_de_e810_g_cam_esp_g_grup_sup_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE810GCamEspGGrupSup') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E810_G_CAM_ESP_G_GRUP_SUP_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE810GCamEspGGrupSup') ?>">
                                <a href="eku_de_e810_g_cam_esp_g_grup_sup_alta.php?id=<?php echo $eku_de_e810_g_cam_esp_g_grup_sup->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E810_G_CAM_ESP_G_GRUP_SUP_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e810_g_cam_esp_g_grup_sup){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE810GCamEspGGrupSup::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e810_g_cam_esp_g_grup_sup->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE810GCamEspGGrupSups de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e810_g_cam_esp_g_grup_sup_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE810GCamEspGGrupSup') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E820_G_CAM_ESP_G_GRUP_ADI')){ ?>
	<div id="tab_eku_de_e820_g_cam_esp_g_grup_adi" class="bloque-relacion eku_de_e820_g_cam_esp_g_grup_adi">
		
            <h4><?php Lang::_lang('EkuDeE820GCamEspGGrupAdi') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE820GCamEspGGrupAdisParaBloqueMasInfo() as $eku_de_e820_g_cam_esp_g_grup_adi){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e820_g_cam_esp_g_grup_adi->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e820_g_cam_esp_g_grup_adi->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e820_g_cam_esp_g_grup_adi->getId() ?>" archivo="ajax/modulos/eku_de_e820_g_cam_esp_g_grup_adi/eku_de_e820_g_cam_esp_g_grup_adi_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE820GCamEspGGrupAdi') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E820_G_CAM_ESP_G_GRUP_ADI_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE820GCamEspGGrupAdi') ?>">
                                <a href="eku_de_e820_g_cam_esp_g_grup_adi_alta.php?id=<?php echo $eku_de_e820_g_cam_esp_g_grup_adi->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E820_G_CAM_ESP_G_GRUP_ADI_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e820_g_cam_esp_g_grup_adi){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE820GCamEspGGrupAdi::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e820_g_cam_esp_g_grup_adi->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE820GCamEspGGrupAdis de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e820_g_cam_esp_g_grup_adi_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE820GCamEspGGrupAdi') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E900_G_DTIP_D_E_G_TRANSP')){ ?>
	<div id="tab_eku_de_e900_g_dtip_d_e_g_transp" class="bloque-relacion eku_de_e900_g_dtip_d_e_g_transp">
		
            <h4><?php Lang::_lang('EkuDeE900GDtipDEGTransp') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE900GDtipDEGTranspsParaBloqueMasInfo() as $eku_de_e900_g_dtip_d_e_g_transp){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e900_g_dtip_d_e_g_transp->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e900_g_dtip_d_e_g_transp->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e900_g_dtip_d_e_g_transp->getId() ?>" archivo="ajax/modulos/eku_de_e900_g_dtip_d_e_g_transp/eku_de_e900_g_dtip_d_e_g_transp_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE900GDtipDEGTransp') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E900_G_DTIP_D_E_G_TRANSP_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE900GDtipDEGTransp') ?>">
                                <a href="eku_de_e900_g_dtip_d_e_g_transp_alta.php?id=<?php echo $eku_de_e900_g_dtip_d_e_g_transp->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E900_G_DTIP_D_E_G_TRANSP_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e900_g_dtip_d_e_g_transp){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE900GDtipDEGTransp::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e900_g_dtip_d_e_g_transp->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE900GDtipDEGTransps de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e900_g_dtip_d_e_g_transp_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE900GDtipDEGTransp') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL')){ ?>
	<div id="tab_eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal" class="bloque-relacion eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal">
		
            <h4><?php Lang::_lang('EkuDeE920GDtipDEGTranspGCamSal') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE920GDtipDEGTranspGCamSalsParaBloqueMasInfo() as $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId() ?>" archivo="ajax/modulos/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal/eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE920GDtipDEGTranspGCamSal') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE920GDtipDEGTranspGCamSal') ?>">
                                <a href="eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta.php?id=<?php echo $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E920_G_DTIP_D_E_G_TRANSP_G_CAM_SAL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE920GDtipDEGTranspGCamSal::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE920GDtipDEGTranspGCamSals de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE920GDtipDEGTranspGCamSal') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT')){ ?>
	<div id="tab_eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent" class="bloque-relacion eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent">
		
            <h4><?php Lang::_lang('EkuDeE940GDtipDEGTranspGCamEnt') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE940GDtipDEGTranspGCamEntsParaBloqueMasInfo() as $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId() ?>" archivo="ajax/modulos/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent/eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE940GDtipDEGTranspGCamEnt') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE940GDtipDEGTranspGCamEnt') ?>">
                                <a href="eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta.php?id=<?php echo $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE940GDtipDEGTranspGCamEnt::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE940GDtipDEGTranspGCamEnts de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE940GDtipDEGTranspGCamEnt') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS')){ ?>
	<div id="tab_eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras" class="bloque-relacion eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras">
		
            <h4><?php Lang::_lang('EkuDeE960GDtipDEGTranspGVehTras') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE960GDtipDEGTranspGVehTrassParaBloqueMasInfo() as $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId() ?>" archivo="ajax/modulos/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras/eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE960GDtipDEGTranspGVehTras') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE960GDtipDEGTranspGVehTras') ?>">
                                <a href="eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta.php?id=<?php echo $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E960_G_DTIP_D_E_G_TRANSP_G_VEH_TRAS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE960GDtipDEGTranspGVehTras::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE960GDtipDEGTranspGVehTrass de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE960GDtipDEGTranspGVehTras') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS')){ ?>
	<div id="tab_eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans" class="bloque-relacion eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans">
		
            <h4><?php Lang::_lang('EkuDeE980GDtipDEGTranspGCamTrans') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeE980GDtipDEGTranspGCamTranssParaBloqueMasInfo() as $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId() ?>" archivo="ajax/modulos/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans/eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeE980GDtipDEGTranspGCamTrans') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE980GDtipDEGTranspGCamTrans') ?>">
                                <a href="eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta.php?id=<?php echo $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_E980_G_DTIP_D_E_G_TRANSP_G_CAM_TRANS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE980GDtipDEGTranspGCamTrans::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE980GDtipDEGTranspGCamTranss de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeE980GDtipDEGTranspGCamTrans') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_F001_G_TOT_SUB')){ ?>
	<div id="tab_eku_de_f001_g_tot_sub" class="bloque-relacion eku_de_f001_g_tot_sub">
		
            <h4><?php Lang::_lang('EkuDeF001GTotSub') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeF001GTotSubsParaBloqueMasInfo() as $eku_de_f001_g_tot_sub){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_f001_g_tot_sub->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_f001_g_tot_sub->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_f001_g_tot_sub->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_f001_g_tot_sub->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_f001_g_tot_sub->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_f001_g_tot_sub->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_f001_g_tot_sub->getId() ?>" archivo="ajax/modulos/eku_de_f001_g_tot_sub/eku_de_f001_g_tot_sub_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeF001GTotSub') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_F001_G_TOT_SUB_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeF001GTotSub') ?>">
                                <a href="eku_de_f001_g_tot_sub_alta.php?id=<?php echo $eku_de_f001_g_tot_sub->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_F001_G_TOT_SUB_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_f001_g_tot_sub){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeF001GTotSub::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_f001_g_tot_sub->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeF001GTotSubs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_f001_g_tot_sub_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeF001GTotSub') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_G001_G_CAM_GEN')){ ?>
	<div id="tab_eku_de_g001_g_cam_gen" class="bloque-relacion eku_de_g001_g_cam_gen">
		
            <h4><?php Lang::_lang('EkuDeG001GCamGen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeG001GCamGensParaBloqueMasInfo() as $eku_de_g001_g_cam_gen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_g001_g_cam_gen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_g001_g_cam_gen->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_g001_g_cam_gen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_g001_g_cam_gen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_g001_g_cam_gen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_g001_g_cam_gen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_g001_g_cam_gen->getId() ?>" archivo="ajax/modulos/eku_de_g001_g_cam_gen/eku_de_g001_g_cam_gen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeG001GCamGen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_G001_G_CAM_GEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeG001GCamGen') ?>">
                                <a href="eku_de_g001_g_cam_gen_alta.php?id=<?php echo $eku_de_g001_g_cam_gen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_G001_G_CAM_GEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_g001_g_cam_gen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeG001GCamGen::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_g001_g_cam_gen->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeG001GCamGens de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_g001_g_cam_gen_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeG001GCamGen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_G050_G_CAM_GEN_G_CAM_CARG')){ ?>
	<div id="tab_eku_de_g050_g_cam_gen_g_cam_carg" class="bloque-relacion eku_de_g050_g_cam_gen_g_cam_carg">
		
            <h4><?php Lang::_lang('EkuDeG050GCamGenGCamCarg') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeG050GCamGenGCamCargsParaBloqueMasInfo() as $eku_de_g050_g_cam_gen_g_cam_carg){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_g050_g_cam_gen_g_cam_carg->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_g050_g_cam_gen_g_cam_carg->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_g050_g_cam_gen_g_cam_carg->getId() ?>" archivo="ajax/modulos/eku_de_g050_g_cam_gen_g_cam_carg/eku_de_g050_g_cam_gen_g_cam_carg_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeG050GCamGenGCamCarg') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeG050GCamGenGCamCarg') ?>">
                                <a href="eku_de_g050_g_cam_gen_g_cam_carg_alta.php?id=<?php echo $eku_de_g050_g_cam_gen_g_cam_carg->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_g050_g_cam_gen_g_cam_carg){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeG050GCamGenGCamCarg::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_g050_g_cam_gen_g_cam_carg->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeG050GCamGenGCamCargs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_g050_g_cam_gen_g_cam_carg_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeG050GCamGenGCamCarg') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_H001_G_CAM_D_E_ASOC')){ ?>
	<div id="tab_eku_de_h001_g_cam_d_e_asoc" class="bloque-relacion eku_de_h001_g_cam_d_e_asoc">
		
            <h4><?php Lang::_lang('EkuDeH001GCamDEAsoc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeH001GCamDEAsocsParaBloqueMasInfo() as $eku_de_h001_g_cam_d_e_asoc){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_h001_g_cam_d_e_asoc->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_h001_g_cam_d_e_asoc->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_h001_g_cam_d_e_asoc->getId() ?>" archivo="ajax/modulos/eku_de_h001_g_cam_d_e_asoc/eku_de_h001_g_cam_d_e_asoc_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeH001GCamDEAsoc') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeH001GCamDEAsoc') ?>">
                                <a href="eku_de_h001_g_cam_d_e_asoc_alta.php?id=<?php echo $eku_de_h001_g_cam_d_e_asoc->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_H001_G_CAM_D_E_ASOC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_h001_g_cam_d_e_asoc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeH001GCamDEAsoc::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_h001_g_cam_d_e_asoc->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeH001GCamDEAsocs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_h001_g_cam_d_e_asoc_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeH001GCamDEAsoc') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_I001_SIGNATURE')){ ?>
	<div id="tab_eku_de_i001_signature" class="bloque-relacion eku_de_i001_signature">
		
            <h4><?php Lang::_lang('EkuDeI001Signature') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeI001SignaturesParaBloqueMasInfo() as $eku_de_i001_signature){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_i001_signature->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_i001_signature->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_i001_signature->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_i001_signature->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_i001_signature->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_i001_signature->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_i001_signature->getId() ?>" archivo="ajax/modulos/eku_de_i001_signature/eku_de_i001_signature_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeI001Signature') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_I001_SIGNATURE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeI001Signature') ?>">
                                <a href="eku_de_i001_signature_alta.php?id=<?php echo $eku_de_i001_signature->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_I001_SIGNATURE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_i001_signature){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeI001Signature::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_i001_signature->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeI001Signatures de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_i001_signature_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeI001Signature') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_J001_G_CAM_FU_F_D')){ ?>
	<div id="tab_eku_de_j001_g_cam_fu_f_d" class="bloque-relacion eku_de_j001_g_cam_fu_f_d">
		
            <h4><?php Lang::_lang('EkuDeJ001GCamFuFD') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeJ001GCamFuFDsParaBloqueMasInfo() as $eku_de_j001_g_cam_fu_f_d){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_j001_g_cam_fu_f_d->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_j001_g_cam_fu_f_d->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_j001_g_cam_fu_f_d->getId() ?>" archivo="ajax/modulos/eku_de_j001_g_cam_fu_f_d/eku_de_j001_g_cam_fu_f_d_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeJ001GCamFuFD') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_J001_G_CAM_FU_F_D_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeJ001GCamFuFD') ?>">
                                <a href="eku_de_j001_g_cam_fu_f_d_alta.php?id=<?php echo $eku_de_j001_g_cam_fu_f_d->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_J001_G_CAM_FU_F_D_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_j001_g_cam_fu_f_d){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeJ001GCamFuFD::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_j001_g_cam_fu_f_d->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeJ001GCamFuFDs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_j001_g_cam_fu_f_d_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeJ001GCamFuFD') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_ASCH01_REQ')){ ?>
	<div id="tab_eku_de_asch01_req" class="bloque-relacion eku_de_asch01_req">
		
            <h4><?php Lang::_lang('EkuDeAsch01Req') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeAsch01ReqsParaBloqueMasInfo() as $eku_de_asch01_req){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_asch01_req->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_asch01_req->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_asch01_req->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_asch01_req->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_asch01_req->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_asch01_req->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_asch01_req->getId() ?>" archivo="ajax/modulos/eku_de_asch01_req/eku_de_asch01_req_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeAsch01Req') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_ASCH01_REQ_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeAsch01Req') ?>">
                                <a href="eku_de_asch01_req_alta.php?id=<?php echo $eku_de_asch01_req->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_ASCH01_REQ_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_asch01_req){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeAsch01Req::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_asch01_req->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeAsch01Reqs de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_asch01_req_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeAsch01Req') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_ARSCH01_RESP')){ ?>
	<div id="tab_eku_de_arsch01_resp" class="bloque-relacion eku_de_arsch01_resp">
		
            <h4><?php Lang::_lang('EkuDeArsch01Resp') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeArsch01RespsParaBloqueMasInfo() as $eku_de_arsch01_resp){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_arsch01_resp->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_arsch01_resp->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_arsch01_resp->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_arsch01_resp->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_arsch01_resp->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_arsch01_resp->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_arsch01_resp->getId() ?>" archivo="ajax/modulos/eku_de_arsch01_resp/eku_de_arsch01_resp_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeArsch01Resp') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeArsch01Resp') ?>">
                                <a href="eku_de_arsch01_resp_alta.php?id=<?php echo $eku_de_arsch01_resp->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_ARSCH01_RESP_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_arsch01_resp){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeArsch01Resp::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_arsch01_resp->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeArsch01Resps de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_arsch01_resp_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeArsch01Resp') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_ARSCH01_RESP_MENSAJE')){ ?>
	<div id="tab_eku_de_arsch01_resp_mensaje" class="bloque-relacion eku_de_arsch01_resp_mensaje">
		
            <h4><?php Lang::_lang('EkuDeArsch01RespMensaje') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeArsch01RespMensajesParaBloqueMasInfo() as $eku_de_arsch01_resp_mensaje){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_arsch01_resp_mensaje->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_arsch01_resp_mensaje->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_arsch01_resp_mensaje->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_arsch01_resp_mensaje->getId() ?>" archivo="ajax/modulos/eku_de_arsch01_resp_mensaje/eku_de_arsch01_resp_mensaje_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeArsch01RespMensaje') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_MENSAJE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeArsch01RespMensaje') ?>">
                                <a href="eku_de_arsch01_resp_mensaje_alta.php?id=<?php echo $eku_de_arsch01_resp_mensaje->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_ARSCH01_RESP_MENSAJE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_arsch01_resp_mensaje){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeArsch01RespMensaje::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_arsch01_resp_mensaje->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeArsch01RespMensajes de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_arsch01_resp_mensaje_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeArsch01RespMensaje') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_OPE_ESTADO')){ ?>
	<div id="tab_eku_de_ope_estado" class="bloque-relacion eku_de_ope_estado">
		
            <h4><?php Lang::_lang('EkuDeOpeEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeOpeEstadosParaBloqueMasInfo() as $eku_de_ope_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_ope_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_ope_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_ope_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_ope_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_ope_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_ope_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_ope_estado->getId() ?>" archivo="ajax/modulos/eku_de_ope_estado/eku_de_ope_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeOpeEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_OPE_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeOpeEstado') ?>">
                                <a href="eku_de_ope_estado_alta.php?id=<?php echo $eku_de_ope_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_OPE_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_ope_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeOpeEstado::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_ope_estado->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeOpeEstados de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_ope_estado_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeOpeEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_VTA_FACTURA')){ ?>
	<div id="tab_eku_de_vta_factura" class="bloque-relacion eku_de_vta_factura">
		
            <h4><?php Lang::_lang('EkuDeVtaFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeVtaFacturasParaBloqueMasInfo() as $eku_de_vta_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_vta_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_vta_factura->getDescripcionVinculante('EkuDe')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_vta_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_vta_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_vta_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_vta_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_vta_factura->getId() ?>" archivo="ajax/modulos/eku_de_vta_factura/eku_de_vta_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeVtaFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_VTA_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeVtaFactura') ?>">
                                <a href="eku_de_vta_factura_alta.php?id=<?php echo $eku_de_vta_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_VTA_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_vta_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeVtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_vta_factura->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeVtaFacturas de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_vta_factura_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeVtaFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_VTA_NOTA_CREDITO')){ ?>
	<div id="tab_eku_de_vta_nota_credito" class="bloque-relacion eku_de_vta_nota_credito">
		
            <h4><?php Lang::_lang('EkuDeVtaNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeVtaNotaCreditosParaBloqueMasInfo() as $eku_de_vta_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_vta_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_vta_nota_credito->getDescripcionVinculante('EkuDe')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_vta_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_vta_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_vta_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_vta_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_vta_nota_credito->getId() ?>" archivo="ajax/modulos/eku_de_vta_nota_credito/eku_de_vta_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeVtaNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_VTA_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeVtaNotaCredito') ?>">
                                <a href="eku_de_vta_nota_credito_alta.php?id=<?php echo $eku_de_vta_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_VTA_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_vta_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeVtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_vta_nota_credito->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeVtaNotaCreditos de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_vta_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeVtaNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_VTA_NOTA_DEBITO')){ ?>
	<div id="tab_eku_de_vta_nota_debito" class="bloque-relacion eku_de_vta_nota_debito">
		
            <h4><?php Lang::_lang('EkuDeVtaNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeVtaNotaDebitosParaBloqueMasInfo() as $eku_de_vta_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_vta_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_vta_nota_debito->getDescripcionVinculante('EkuDe')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_vta_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_vta_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_vta_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_vta_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_vta_nota_debito->getId() ?>" archivo="ajax/modulos/eku_de_vta_nota_debito/eku_de_vta_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeVtaNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_VTA_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeVtaNotaDebito') ?>">
                                <a href="eku_de_vta_nota_debito_alta.php?id=<?php echo $eku_de_vta_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_VTA_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_vta_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeVtaNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_vta_nota_debito->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeVtaNotaDebitos de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_vta_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeVtaNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_VTA_REMITO')){ ?>
	<div id="tab_eku_de_vta_remito" class="bloque-relacion eku_de_vta_remito">
		
            <h4><?php Lang::_lang('EkuDeVtaRemito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDe') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de->getEkuDeVtaRemitosParaBloqueMasInfo() as $eku_de_vta_remito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_de_vta_remito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_de_vta_remito->getDescripcionVinculante('EkuDe')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_de_vta_remito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_vta_remito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($eku_de_vta_remito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_vta_remito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_de_vta_remito->getId() ?>" archivo="ajax/modulos/eku_de_vta_remito/eku_de_vta_remito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuDeVtaRemito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_DE_VTA_REMITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeVtaRemito') ?>">
                                <a href="eku_de_vta_remito_alta.php?id=<?php echo $eku_de_vta_remito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_MASINFO_EKU_DE_VTA_REMITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_vta_remito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeVtaRemito::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_vta_remito->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeVtaRemitos de ') ?> <strong><?php echo($eku_de->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_de_vta_remito_alta.php" >
                            <?php Lang::_lang('Agregar EkuDeVtaRemito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

