<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_unidad_medida_atributo_id = Gral::getVars(2, 'id');
$ins_unidad_medida_atributo = InsUnidadMedidaAtributo::getOxId($ins_unidad_medida_atributo_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_unidad_medida_atributo->getDescripcionCorta())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_unidad_medida_atributo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_UNIDAD_MEDIDA_ATRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_unidad_medida_atributo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_unidad_medida_atributo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_UNIDAD_MEDIDA_ATRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_unidad_medida_atributo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_unidad_medida_atributo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_ATRIBUTO_MASINFO_INS_INSUMO_INS_ATRIBUTO')){ ?>
            <li><a href="#tab_ins_insumo_ins_atributo"><?php Lang::_lang('InsInsumoInsAtributos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_ATRIBUTO_MASINFO_INS_INSUMO_INS_ATRIBUTO')){ ?>
	<div id="tab_ins_insumo_ins_atributo" class="bloque-relacion ins_insumo_ins_atributo">
		
            <h4><?php Lang::_lang('InsInsumoInsAtributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsUnidadMedidaAtributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_unidad_medida_atributo->getInsInsumoInsAtributosParaBloqueMasInfo() as $ins_insumo_ins_atributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_ins_atributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_ins_atributo->getDescripcionVinculante('InsUnidadMedidaAtributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_ins_atributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_ins_atributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_ins_atributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_ins_atributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_ins_atributo->getId() ?>" archivo="ajax/modulos/ins_insumo_ins_atributo/ins_insumo_ins_atributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoInsAtributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_INS_ATRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoInsAtributo') ?>">
                                <a href="ins_insumo_ins_atributo_alta.php?id=<?php echo $ins_insumo_ins_atributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_ATRIBUTO_MASINFO_INS_INSUMO_INS_ATRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_ins_atributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoInsAtributo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_ins_atributo->getFiltrosArrXCampo('InsUnidadMedidaAtributo', 'ins_unidad_medida_atributo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoInsAtributos de ') ?> <strong><?php echo($ins_unidad_medida_atributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_ins_atributo_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoInsAtributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

