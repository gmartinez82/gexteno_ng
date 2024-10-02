<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_e700_g_dtip_d_e_g_cam_item_id = Gral::getVars(2, 'id');
$eku_de_e700_g_dtip_d_e_g_cam_item = EkuDeE700GDtipDEGCamItem::getOxId($eku_de_e700_g_dtip_d_e_g_cam_item_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e700_g_dtip_d_e_g_cam_item->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e700_g_dtip_d_e_g_cam_item->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e700_g_dtip_d_e_g_cam_item->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e700_g_dtip_d_e_g_cam_item->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_MASINFO_EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM')){ ?>
            <li><a href="#tab_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item"><?php Lang::_lang('EkuDeE720GDtipDEGCamItemGValorItems') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_MASINFO_EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A')){ ?>
            <li><a href="#tab_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a"><?php Lang::_lang('EkuDeE730GDtipDEGCamItemGCamIVAs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_MASINFO_EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC')){ ?>
            <li><a href="#tab_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc"><?php Lang::_lang('EkuDeE750GDtipDEGCamItemGRasMercs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_MASINFO_EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO')){ ?>
            <li><a href="#tab_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo"><?php Lang::_lang('EkuDeE770GDtipDEGCamItemGVehNuevos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_MASINFO_EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM')){ ?>
	<div id="tab_eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item" class="bloque-relacion eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item">
		
            <h4><?php Lang::_lang('EkuDeE720GDtipDEGCamItemGValorItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE720GDtipDEGCamItemGValorItemsParaBloqueMasInfo() as $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_MASINFO_EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE720GDtipDEGCamItemGValorItem::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getFiltrosArrXCampo('EkuDeE700GDtipDEGCamItem', 'eku_de_e700_g_dtip_d_e_g_cam_item_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE720GDtipDEGCamItemGValorItems de ') ?> <strong><?php echo($eku_de_e700_g_dtip_d_e_g_cam_item->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_MASINFO_EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A')){ ?>
	<div id="tab_eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a" class="bloque-relacion eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a">
		
            <h4><?php Lang::_lang('EkuDeE730GDtipDEGCamItemGCamIVA') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE730GDtipDEGCamItemGCamIVAsParaBloqueMasInfo() as $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_MASINFO_EKU_DE_E730_G_DTIP_D_E_G_CAM_ITEM_G_CAM_I_V_A_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE730GDtipDEGCamItemGCamIVA::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a->getFiltrosArrXCampo('EkuDeE700GDtipDEGCamItem', 'eku_de_e700_g_dtip_d_e_g_cam_item_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE730GDtipDEGCamItemGCamIVAs de ') ?> <strong><?php echo($eku_de_e700_g_dtip_d_e_g_cam_item->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_MASINFO_EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC')){ ?>
	<div id="tab_eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc" class="bloque-relacion eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc">
		
            <h4><?php Lang::_lang('EkuDeE750GDtipDEGCamItemGRasMerc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE750GDtipDEGCamItemGRasMercsParaBloqueMasInfo() as $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_MASINFO_EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE750GDtipDEGCamItemGRasMerc::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getFiltrosArrXCampo('EkuDeE700GDtipDEGCamItem', 'eku_de_e700_g_dtip_d_e_g_cam_item_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE750GDtipDEGCamItemGRasMercs de ') ?> <strong><?php echo($eku_de_e700_g_dtip_d_e_g_cam_item->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_MASINFO_EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO')){ ?>
	<div id="tab_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo" class="bloque-relacion eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo">
		
            <h4><?php Lang::_lang('EkuDeE770GDtipDEGCamItemGVehNuevo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDeE770GDtipDEGCamItemGVehNuevosParaBloqueMasInfo() as $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_E700_G_DTIP_D_E_G_CAM_ITEM_MASINFO_EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuDeE770GDtipDEGCamItemGVehNuevo::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getFiltrosArrXCampo('EkuDeE700GDtipDEGCamItem', 'eku_de_e700_g_dtip_d_e_g_cam_item_id') ?>" >
                                <?php Lang::_lang('Ver EkuDeE770GDtipDEGCamItemGVehNuevos de ') ?> <strong><?php echo($eku_de_e700_g_dtip_d_e_g_cam_item->getDescripcion()) ?></strong>
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
	
</div>

