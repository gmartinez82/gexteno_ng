<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ml_attribute_type_id = Gral::getVars(2, 'id');
$ml_attribute_type = MlAttributeType::getOxId($ml_attribute_type_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ml_attribute_type->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_ATTRIBUTE_TYPE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute_type->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_attribute_type->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ML_ATTRIBUTE_TYPE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute_type->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ml_attribute_type->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_TYPE_MASINFO_ML_ATTRIBUTE')){ ?>
            <li><a href="#tab_ml_attribute"><?php Lang::_lang('MlAttributes') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_TYPE_MASINFO_ML_ATTRIBUTE')){ ?>
	<div id="tab_ml_attribute" class="bloque-relacion ml_attribute">
		
            <h4><?php Lang::_lang('MlAttribute') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('MlAttributeType') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ml_attribute_type->getMlAttributesParaBloqueMasInfo() as $ml_attribute){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ml_attribute->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ml_attribute->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ml_attribute->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ml_attribute->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_attribute->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ml_attribute->getId() ?>" archivo="ajax/modulos/ml_attribute/ml_attribute_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('MlAttribute') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('MlAttribute') ?>">
                                <a href="ml_attribute_alta.php?id=<?php echo $ml_attribute->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_TYPE_MASINFO_ML_ATTRIBUTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ml_attribute){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo MlAttribute::getFiltrosArrGral() ?>&arr=<?php echo $ml_attribute->getFiltrosArrXCampo('MlAttributeType', 'ml_attribute_type_id') ?>" >
                                <?php Lang::_lang('Ver MlAttributes de ') ?> <strong><?php echo($ml_attribute_type->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ml_attribute_alta.php" >
                            <?php Lang::_lang('Agregar MlAttribute') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

