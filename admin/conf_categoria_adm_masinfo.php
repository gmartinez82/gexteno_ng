<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$conf_categoria_id = Gral::getVars(2, 'id');
$conf_categoria = ConfCategoria::getOxId($conf_categoria_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($conf_categoria->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CONF_CATEGORIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($conf_categoria->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($conf_categoria->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CONF_CATEGORIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($conf_categoria->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($conf_categoria->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CONF_CATEGORIA_MASINFO_CONF_VARIABLE')){ ?>
            <li><a href="#tab_conf_variable"><?php Lang::_lang('ConVariable') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CONF_CATEGORIA_MASINFO_CONF_VARIABLE')){ ?>
	<div id="tab_conf_variable" class="bloque-relacion conf_variable">
		
            <h4><?php Lang::_lang('ConfVariable') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('ConfCategoria') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($conf_categoria->getConfVariablesParaBloqueMasInfo() as $conf_variable){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($conf_variable->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($conf_variable->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($conf_variable->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($conf_variable->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($conf_variable->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($conf_variable->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $conf_variable->getId() ?>" archivo="ajax/modulos/conf_variable/conf_variable_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('ConfVariable') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CONF_VARIABLE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('ConfVariable') ?>">
                                <a href="conf_variable_alta.php?id=<?php echo $conf_variable->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CONF_CATEGORIA_MASINFO_CONF_VARIABLE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($conf_variable){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo ConfVariable::getFiltrosArrGral() ?>&arr=<?php echo $conf_variable->getFiltrosArrXCampo('ConfCategoria', 'conf_categoria_id') ?>" >
                                <?php Lang::_lang('Ver ConfVariables de ') ?> <strong><?php echo($conf_categoria->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="conf_variable_alta.php" >
                            <?php Lang::_lang('Agregar ConfVariable') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

