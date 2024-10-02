<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ml_attribute_id = Gral::getVars(2, 'id');
$ml_attribute = MlAttribute::getOxId($ml_attribute_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Tooltip') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ml_attribute->getTooltip())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ml_attribute->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_ATTRIBUTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_attribute->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_ATTRIBUTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_attribute->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_MASINFO_INS_VENTA_ML_INFO_ML_ATTRIBUTE')){ ?>
            <li><a href="#tab_ins_venta_ml_info_ml_attribute"><?php Lang::_lang('InsVentaMlInfoMlAttributes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_MASINFO_ML_CATEGORY_ML_ATTRIBUTE')){ ?>
            <li><a href="#tab_ml_category_ml_attribute"><?php Lang::_lang('MlCategoryMlAttributes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_MASINFO_ML_ATTRIBUTE_INS_ATRIBUTO')){ ?>
            <li><a href="#tab_ml_attribute_ins_atributo"><?php Lang::_lang('MlAttributeInsAtributos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_MASINFO_ML_ATTRIBUTE_ML_VALUE')){ ?>
            <li><a href="#tab_ml_attribute_ml_value"><?php Lang::_lang('MlAttributeMlValues') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_MASINFO_INS_VENTA_ML_INFO_ML_ATTRIBUTE')){ ?>
	<div id="tab_ins_venta_ml_info_ml_attribute" class="bloque-relacion ins_venta_ml_info_ml_attribute">
		
            <h4><?php Lang::_lang('InsVentaMlInfoMlAttribute') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('MlAttribute') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ml_attribute->getInsVentaMlInfoMlAttributesParaBloqueMasInfo() as $ins_venta_ml_info_ml_attribute){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_venta_ml_info_ml_attribute->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_venta_ml_info_ml_attribute->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_venta_ml_info_ml_attribute->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info_ml_attribute->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_venta_ml_info_ml_attribute->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info_ml_attribute->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_venta_ml_info_ml_attribute->getId() ?>" archivo="ajax/modulos/ins_venta_ml_info_ml_attribute/ins_venta_ml_info_ml_attribute_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsVentaMlInfoMlAttribute') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_ML_ATTRIBUTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsVentaMlInfoMlAttribute') ?>">
                                <a href="ins_venta_ml_info_ml_attribute_alta.php?id=<?php echo $ins_venta_ml_info_ml_attribute->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_MASINFO_INS_VENTA_ML_INFO_ML_ATTRIBUTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_venta_ml_info_ml_attribute){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsVentaMlInfoMlAttribute::getFiltrosArrGral() ?>&arr=<?php echo $ins_venta_ml_info_ml_attribute->getFiltrosArrXCampo('MlAttribute', 'ml_attribute_id') ?>" >
                                <?php Lang::_lang('Ver InsVentaMlInfoMlAttributes de ') ?> <strong><?php echo($ml_attribute->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_venta_ml_info_ml_attribute_alta.php" >
                            <?php Lang::_lang('Agregar InsVentaMlInfoMlAttribute') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_MASINFO_ML_CATEGORY_ML_ATTRIBUTE')){ ?>
	<div id="tab_ml_category_ml_attribute" class="bloque-relacion ml_category_ml_attribute">
		
            <h4><?php Lang::_lang('MlCategoryMlAttribute') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('MlAttribute') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ml_attribute->getMlCategoryMlAttributesParaBloqueMasInfo() as $ml_category_ml_attribute){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ml_category_ml_attribute->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ml_category_ml_attribute->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ml_category_ml_attribute->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_category_ml_attribute->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ml_category_ml_attribute->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_category_ml_attribute->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ml_category_ml_attribute->getId() ?>" archivo="ajax/modulos/ml_category_ml_attribute/ml_category_ml_attribute_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('MlCategoryMlAttribute') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ML_CATEGORY_ML_ATTRIBUTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('MlCategoryMlAttribute') ?>">
                                <a href="ml_category_ml_attribute_alta.php?id=<?php echo $ml_category_ml_attribute->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_MASINFO_ML_CATEGORY_ML_ATTRIBUTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ml_category_ml_attribute){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo MlCategoryMlAttribute::getFiltrosArrGral() ?>&arr=<?php echo $ml_category_ml_attribute->getFiltrosArrXCampo('MlAttribute', 'ml_attribute_id') ?>" >
                                <?php Lang::_lang('Ver MlCategoryMlAttributes de ') ?> <strong><?php echo($ml_attribute->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ml_category_ml_attribute_alta.php" >
                            <?php Lang::_lang('Agregar MlCategoryMlAttribute') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_MASINFO_ML_ATTRIBUTE_INS_ATRIBUTO')){ ?>
	<div id="tab_ml_attribute_ins_atributo" class="bloque-relacion ml_attribute_ins_atributo">
		
            <h4><?php Lang::_lang('MlAttributeInsAtributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('MlAttribute') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ml_attribute->getMlAttributeInsAtributosParaBloqueMasInfo() as $ml_attribute_ins_atributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ml_attribute_ins_atributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ml_attribute_ins_atributo->getDescripcionVinculante('MlAttribute')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ml_attribute_ins_atributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute_ins_atributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ml_attribute_ins_atributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute_ins_atributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ml_attribute_ins_atributo->getId() ?>" archivo="ajax/modulos/ml_attribute_ins_atributo/ml_attribute_ins_atributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('MlAttributeInsAtributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_INS_ATRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('MlAttributeInsAtributo') ?>">
                                <a href="ml_attribute_ins_atributo_alta.php?id=<?php echo $ml_attribute_ins_atributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_MASINFO_ML_ATTRIBUTE_INS_ATRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ml_attribute_ins_atributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo MlAttributeInsAtributo::getFiltrosArrGral() ?>&arr=<?php echo $ml_attribute_ins_atributo->getFiltrosArrXCampo('MlAttribute', 'ml_attribute_id') ?>" >
                                <?php Lang::_lang('Ver MlAttributeInsAtributos de ') ?> <strong><?php echo($ml_attribute->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ml_attribute_ins_atributo_alta.php" >
                            <?php Lang::_lang('Agregar MlAttributeInsAtributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_MASINFO_ML_ATTRIBUTE_ML_VALUE')){ ?>
	<div id="tab_ml_attribute_ml_value" class="bloque-relacion ml_attribute_ml_value">
		
            <h4><?php Lang::_lang('MlAttributeMlValue') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('MlAttribute') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ml_attribute->getMlAttributeMlValuesParaBloqueMasInfo() as $ml_attribute_ml_value){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ml_attribute_ml_value->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ml_attribute_ml_value->getDescripcionVinculante('MlAttribute')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ml_attribute_ml_value->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute_ml_value->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ml_attribute_ml_value->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute_ml_value->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ml_attribute_ml_value->getId() ?>" archivo="ajax/modulos/ml_attribute_ml_value/ml_attribute_ml_value_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('MlAttributeMlValue') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ML_VALUE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('MlAttributeMlValue') ?>">
                                <a href="ml_attribute_ml_value_alta.php?id=<?php echo $ml_attribute_ml_value->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_MASINFO_ML_ATTRIBUTE_ML_VALUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ml_attribute_ml_value){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo MlAttributeMlValue::getFiltrosArrGral() ?>&arr=<?php echo $ml_attribute_ml_value->getFiltrosArrXCampo('MlAttribute', 'ml_attribute_id') ?>" >
                                <?php Lang::_lang('Ver MlAttributeMlValues de ') ?> <strong><?php echo($ml_attribute->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ml_attribute_ml_value_alta.php" >
                            <?php Lang::_lang('Agregar MlAttributeMlValue') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

