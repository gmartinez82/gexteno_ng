<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gen_widget_modulo_id = Gral::getVars(2, 'id');
$gen_widget_modulo = GenWidgetModulo::getOxId($gen_widget_modulo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gen_widget_modulo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_WIDGET_MODULO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_widget_modulo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_widget_modulo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_WIDGET_MODULO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_widget_modulo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_widget_modulo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_MODULO_MASINFO_GEN_WIDGET')){ ?>
            <li><a href="#tab_gen_widget"><?php Lang::_lang('GenWidget') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_MODULO_MASINFO_GEN_WIDGET_GEN_WIDGET_MODULO')){ ?>
            <li><a href="#tab_gen_widget_gen_widget_modulo"><?php Lang::_lang('GenWidgetGenWidgetModulo') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_MODULO_MASINFO_GEN_WIDGET')){ ?>
	<div id="tab_gen_widget" class="bloque-relacion gen_widget">
		
            <h4><?php Lang::_lang('GenWidget') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GenWidgetModulo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gen_widget_modulo->getGenWidgetsParaBloqueMasInfo() as $gen_widget){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gen_widget->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gen_widget->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gen_widget->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_widget->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gen_widget->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_widget->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gen_widget->getId() ?>" archivo="ajax/modulos/gen_widget/gen_widget_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GenWidget') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenWidget') ?>">
                                <a href="gen_widget_alta.php?id=<?php echo $gen_widget->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_MODULO_MASINFO_GEN_WIDGET_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gen_widget){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GenWidget::getFiltrosArrGral() ?>&arr=<?php echo $gen_widget->getFiltrosArrXCampo('GenWidgetModulo', 'gen_widget_modulo_id') ?>" >
                                <?php Lang::_lang('Ver GenWidgets de ') ?> <strong><?php echo($gen_widget_modulo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gen_widget_alta.php" >
                            <?php Lang::_lang('Agregar GenWidget') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_MODULO_MASINFO_GEN_WIDGET_GEN_WIDGET_MODULO')){ ?>
	<div id="tab_gen_widget_gen_widget_modulo" class="bloque-relacion gen_widget_gen_widget_modulo">
		
            <h4><?php Lang::_lang('GenWidgetGenWidgetModulo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GenWidgetModulo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gen_widget_modulo->getGenWidgetGenWidgetModulosParaBloqueMasInfo() as $gen_widget_gen_widget_modulo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gen_widget_gen_widget_modulo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gen_widget_gen_widget_modulo->getDescripcionVinculante('GenWidgetModulo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gen_widget_gen_widget_modulo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_widget_gen_widget_modulo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gen_widget_gen_widget_modulo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_widget_gen_widget_modulo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gen_widget_gen_widget_modulo->getId() ?>" archivo="ajax/modulos/gen_widget_gen_widget_modulo/gen_widget_gen_widget_modulo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GenWidgetGenWidgetModulo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_GEN_WIDGET_MODULO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenWidgetGenWidgetModulo') ?>">
                                <a href="gen_widget_gen_widget_modulo_alta.php?id=<?php echo $gen_widget_gen_widget_modulo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_MODULO_MASINFO_GEN_WIDGET_GEN_WIDGET_MODULO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gen_widget_gen_widget_modulo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GenWidgetGenWidgetModulo::getFiltrosArrGral() ?>&arr=<?php echo $gen_widget_gen_widget_modulo->getFiltrosArrXCampo('GenWidgetModulo', 'gen_widget_modulo_id') ?>" >
                                <?php Lang::_lang('Ver GenWidgetGenWidgetModulos de ') ?> <strong><?php echo($gen_widget_modulo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gen_widget_gen_widget_modulo_alta.php" >
                            <?php Lang::_lang('Agregar GenWidgetGenWidgetModulo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

