<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ml_shipping_mode_id = Gral::getVars(2, 'id');
$ml_shipping_mode = MlShippingMode::getOxId($ml_shipping_mode_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ml_shipping_mode->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ml_shipping_mode->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_SHIPPING_MODE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_shipping_mode->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_shipping_mode->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_SHIPPING_MODE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_shipping_mode->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_shipping_mode->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('ML_SHIPPING_MODE_MASINFO_INS_VENTA_ML_INFO')){ ?>
            <li><a href="#tab_ins_venta_ml_info"><?php Lang::_lang('InsVentaMlInfos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('ML_SHIPPING_MODE_MASINFO_ML_CATEGORY_ML_SHIPPING_MODE')){ ?>
            <li><a href="#tab_ml_category_ml_shipping_mode"><?php Lang::_lang('MlCategoryMlShippingModes') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('ML_SHIPPING_MODE_MASINFO_INS_VENTA_ML_INFO')){ ?>
	<div id="tab_ins_venta_ml_info" class="bloque-relacion ins_venta_ml_info">
		
            <h4><?php Lang::_lang('InsVentaMlInfo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('MlShippingMode') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ml_shipping_mode->getInsVentaMlInfosParaBloqueMasInfo() as $ins_venta_ml_info){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_venta_ml_info->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_venta_ml_info->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_venta_ml_info->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_venta_ml_info->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_venta_ml_info->getId() ?>" archivo="ajax/modulos/ins_venta_ml_info/ins_venta_ml_info_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsVentaMlInfo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsVentaMlInfo') ?>">
                                <a href="ins_venta_ml_info_alta.php?id=<?php echo $ins_venta_ml_info->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ML_SHIPPING_MODE_MASINFO_INS_VENTA_ML_INFO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_venta_ml_info){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsVentaMlInfo::getFiltrosArrGral() ?>&arr=<?php echo $ins_venta_ml_info->getFiltrosArrXCampo('MlShippingMode', 'ml_shipping_mode_id') ?>" >
                                <?php Lang::_lang('Ver InsVentaMlInfos de ') ?> <strong><?php echo($ml_shipping_mode->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_venta_ml_info_alta.php" >
                            <?php Lang::_lang('Agregar InsVentaMlInfo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('ML_SHIPPING_MODE_MASINFO_ML_CATEGORY_ML_SHIPPING_MODE')){ ?>
	<div id="tab_ml_category_ml_shipping_mode" class="bloque-relacion ml_category_ml_shipping_mode">
		
            <h4><?php Lang::_lang('MlCategoryMlShippingMode') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('MlShippingMode') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ml_shipping_mode->getMlCategoryMlShippingModesParaBloqueMasInfo() as $ml_category_ml_shipping_mode){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ml_category_ml_shipping_mode->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ml_category_ml_shipping_mode->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ml_category_ml_shipping_mode->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_category_ml_shipping_mode->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ml_category_ml_shipping_mode->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_category_ml_shipping_mode->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ml_category_ml_shipping_mode->getId() ?>" archivo="ajax/modulos/ml_category_ml_shipping_mode/ml_category_ml_shipping_mode_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('MlCategoryMlShippingMode') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ML_CATEGORY_ML_SHIPPING_MODE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('MlCategoryMlShippingMode') ?>">
                                <a href="ml_category_ml_shipping_mode_alta.php?id=<?php echo $ml_category_ml_shipping_mode->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ML_SHIPPING_MODE_MASINFO_ML_CATEGORY_ML_SHIPPING_MODE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ml_category_ml_shipping_mode){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo MlCategoryMlShippingMode::getFiltrosArrGral() ?>&arr=<?php echo $ml_category_ml_shipping_mode->getFiltrosArrXCampo('MlShippingMode', 'ml_shipping_mode_id') ?>" >
                                <?php Lang::_lang('Ver MlCategoryMlShippingModes de ') ?> <strong><?php echo($ml_shipping_mode->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ml_category_ml_shipping_mode_alta.php" >
                            <?php Lang::_lang('Agregar MlCategoryMlShippingMode') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

