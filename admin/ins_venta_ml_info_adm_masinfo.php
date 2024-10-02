<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_venta_ml_info_id = Gral::getVars(2, 'id');
$ins_venta_ml_info = InsVentaMlInfo::getOxId($ins_venta_ml_info_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_venta_ml_info->getInsInsumo()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Desc Breve') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_venta_ml_info->getDescripcionBreve())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Desc Empresa') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_venta_ml_info->getDescripcionEmpresa())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('MlItemStatus') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_venta_ml_info->getMlItemStatus()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('ML Ult Act') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaHoraToWeb($ins_venta_ml_info->getMlUltimaActualizacion()))) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_venta_ml_info->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_VENTA_ML_INFO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_venta_ml_info->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_VENTA_ML_INFO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_ml_info->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_venta_ml_info->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_MASINFO_INS_VENTA_ML_INFO_ML_ATTRIBUTE')){ ?>
            <li><a href="#tab_ins_venta_ml_info_ml_attribute"><?php Lang::_lang('InsVentaMlInfoMlAttributes') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_MASINFO_INS_VENTA_ML_INFO_ML_ATTRIBUTE')){ ?>
	<div id="tab_ins_venta_ml_info_ml_attribute" class="bloque-relacion ins_venta_ml_info_ml_attribute">
		
            <h4><?php Lang::_lang('InsVentaMlInfoMlAttribute') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsVentaMlInfo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_venta_ml_info->getInsVentaMlInfoMlAttributesParaBloqueMasInfo() as $ins_venta_ml_info_ml_attribute){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_VENTA_ML_INFO_MASINFO_INS_VENTA_ML_INFO_ML_ATTRIBUTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_venta_ml_info_ml_attribute){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsVentaMlInfoMlAttribute::getFiltrosArrGral() ?>&arr=<?php echo $ins_venta_ml_info_ml_attribute->getFiltrosArrXCampo('InsVentaMlInfo', 'ins_venta_ml_info_id') ?>" >
                                <?php Lang::_lang('Ver InsVentaMlInfoMlAttributes de ') ?> <strong><?php echo($ins_venta_ml_info->getDescripcion()) ?></strong>
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
	
</div>

