<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_telefono_tipo_id = Gral::getVars(2, 'id');
$cli_telefono_tipo = CliTelefonoTipo::getOxId($cli_telefono_tipo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_telefono_tipo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_TELEFONO_TIPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_telefono_tipo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_telefono_tipo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_TELEFONO_TIPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_telefono_tipo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_telefono_tipo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CLI_TELEFONO_TIPO_MASINFO_CLI_TELEFONO')){ ?>
            <li><a href="#tab_cli_telefono"><?php Lang::_lang('CliTelefono') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_TELEFONO_TIPO_MASINFO_CLI_TELEFONO')){ ?>
	<div id="tab_cli_telefono" class="bloque-relacion cli_telefono">
		
            <h4><?php Lang::_lang('CliTelefono') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliTelefonoTipo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_telefono_tipo->getCliTelefonosParaBloqueMasInfo() as $cli_telefono){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_telefono->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_telefono->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_telefono->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_telefono->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_telefono->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_telefono->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_telefono->getId() ?>" archivo="ajax/modulos/cli_telefono/cli_telefono_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliTelefono') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_TELEFONO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliTelefono') ?>">
                                <a href="cli_telefono_alta.php?id=<?php echo $cli_telefono->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_TELEFONO_TIPO_MASINFO_CLI_TELEFONO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_telefono){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliTelefono::getFiltrosArrGral() ?>&arr=<?php echo $cli_telefono->getFiltrosArrXCampo('CliTelefonoTipo', 'cli_telefono_tipo_id') ?>" >
                                <?php Lang::_lang('Ver CliTelefonos de ') ?> <strong><?php echo($cli_telefono_tipo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_telefono_alta.php" >
                            <?php Lang::_lang('Agregar CliTelefono') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

