<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_rubro_id = Gral::getVars(2, 'id');
$cli_rubro = CliRubro::getOxId($cli_rubro_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_rubro->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_RUBRO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_rubro->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_rubro->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_RUBRO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_rubro->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_rubro->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CLI_RUBRO_MASINFO_CLI_CLIENTE_CLI_RUBRO')){ ?>
            <li><a href="#tab_cli_cliente_cli_rubro"><?php Lang::_lang('CliClienteCliRubro') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_RUBRO_MASINFO_CLI_CLIENTE_CLI_RUBRO')){ ?>
	<div id="tab_cli_cliente_cli_rubro" class="bloque-relacion cli_cliente_cli_rubro">
		
            <h4><?php Lang::_lang('CliClienteCliRubro') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliRubro') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_rubro->getCliClienteCliRubrosParaBloqueMasInfo() as $cli_cliente_cli_rubro){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_cli_rubro->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_cli_rubro->getDescripcionVinculante('CliRubro')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_cli_rubro->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_cli_rubro->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_cli_rubro->getId() ?>" archivo="ajax/modulos/cli_cliente_cli_rubro/cli_cliente_cli_rubro_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteCliRubro') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_CLI_RUBRO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteCliRubro') ?>">
                                <a href="cli_cliente_cli_rubro_alta.php?id=<?php echo $cli_cliente_cli_rubro->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_RUBRO_MASINFO_CLI_CLIENTE_CLI_RUBRO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_cli_rubro){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteCliRubro::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_cli_rubro->getFiltrosArrXCampo('CliRubro', 'cli_rubro_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteCliRubros de ') ?> <strong><?php echo($cli_rubro->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_cli_rubro_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteCliRubro') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

