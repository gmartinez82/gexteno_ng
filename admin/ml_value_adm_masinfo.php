<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ml_value_id = Gral::getVars(2, 'id');
$ml_value = MlValue::getOxId($ml_value_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ml_value->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_VALUE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_value->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_value->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_VALUE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_value->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_value->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('ML_VALUE_MASINFO_INS_VENTA_ML_INFO_ML_ATTRIBUTE')){ ?>
            <li><a href="#tab_ins_venta_ml_info_ml_attribute"><?php Lang::_lang('InsVentaMlInfoMlAttributes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('ML_VALUE_MASINFO_ML_ATTRIBUTE_ML_VALUE')){ ?>
            <li><a href="#tab_ml_attribute_ml_value"><?php Lang::_lang('MlAttributeMlValues') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('ML_VALUE_MASINFO_ML_VALUE_INS_MARCA')){ ?>
            <li><a href="#tab_ml_value_ins_marca"><?php Lang::_lang('MlValueInsMarcas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('ML_VALUE_MASINFO_INS_VENTA_ML_INFO_ML_ATTRIBUTE')){ ?>
	<div id="tab_ins_venta_ml_info_ml_attribute" class="bloque-relacion ins_venta_ml_info_ml_attribute">
		
            <h4><?php Lang::_lang('InsVentaMlInfoMlAttribute') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('MlValue') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ml_value->getInsVentaMlInfoMlAttributesParaBloqueMasInfo() as $ins_venta_ml_info_ml_attribute){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('ML_VALUE_MASINFO_INS_VENTA_ML_INFO_ML_ATTRIBUTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_venta_ml_info_ml_attribute){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsVentaMlInfoMlAttribute::getFiltrosArrGral() ?>&arr=<?php echo $ins_venta_ml_info_ml_attribute->getFiltrosArrXCampo('MlValue', 'ml_value_id') ?>" >
                                <?php Lang::_lang('Ver InsVentaMlInfoMlAttributes de ') ?> <strong><?php echo($ml_value->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('ML_VALUE_MASINFO_ML_ATTRIBUTE_ML_VALUE')){ ?>
	<div id="tab_ml_attribute_ml_value" class="bloque-relacion ml_attribute_ml_value">
		
            <h4><?php Lang::_lang('MlAttributeMlValue') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('MlValue') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ml_value->getMlAttributeMlValuesParaBloqueMasInfo() as $ml_attribute_ml_value){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ml_attribute_ml_value->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ml_attribute_ml_value->getDescripcionVinculante('MlValue')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('ML_VALUE_MASINFO_ML_ATTRIBUTE_ML_VALUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ml_attribute_ml_value){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo MlAttributeMlValue::getFiltrosArrGral() ?>&arr=<?php echo $ml_attribute_ml_value->getFiltrosArrXCampo('MlValue', 'ml_value_id') ?>" >
                                <?php Lang::_lang('Ver MlAttributeMlValues de ') ?> <strong><?php echo($ml_value->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('ML_VALUE_MASINFO_ML_VALUE_INS_MARCA')){ ?>
	<div id="tab_ml_value_ins_marca" class="bloque-relacion ml_value_ins_marca">
		
            <h4><?php Lang::_lang('MlValueInsMarca') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('MlValue') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ml_value->getMlValueInsMarcasParaBloqueMasInfo() as $ml_value_ins_marca){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ml_value_ins_marca->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ml_value_ins_marca->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ml_value_ins_marca->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_value_ins_marca->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ml_value_ins_marca->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_value_ins_marca->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ml_value_ins_marca->getId() ?>" archivo="ajax/modulos/ml_value_ins_marca/ml_value_ins_marca_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('MlValueInsMarca') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ML_VALUE_INS_MARCA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('MlValueInsMarca') ?>">
                                <a href="ml_value_ins_marca_alta.php?id=<?php echo $ml_value_ins_marca->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ML_VALUE_MASINFO_ML_VALUE_INS_MARCA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ml_value_ins_marca){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo MlValueInsMarca::getFiltrosArrGral() ?>&arr=<?php echo $ml_value_ins_marca->getFiltrosArrXCampo('MlValue', 'ml_value_id') ?>" >
                                <?php Lang::_lang('Ver MlValueInsMarcas de ') ?> <strong><?php echo($ml_value->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ml_value_ins_marca_alta.php" >
                            <?php Lang::_lang('Agregar MlValueInsMarca') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

