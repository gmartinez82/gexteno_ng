<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_tipo_cliente_id = Gral::getVars(2, 'id');
$cli_tipo_cliente = CliTipoCliente::getOxId($cli_tipo_cliente_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_tipo_cliente->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_TIPO_CLIENTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_tipo_cliente->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_tipo_cliente->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_TIPO_CLIENTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_tipo_cliente->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_tipo_cliente->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CLI_TIPO_CLIENTE_MASINFO_CLI_CLIENTE')){ ?>
            <li><a href="#tab_cli_cliente"><?php Lang::_lang('CliCliente') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_TIPO_CLIENTE_MASINFO_EKU_PARAM_TIPO_OPERACION_CLI_TIPO_CLIENTE')){ ?>
            <li><a href="#tab_eku_param_tipo_operacion_cli_tipo_cliente"><?php Lang::_lang('EkuParamTipoOperacionCliTipoClientes') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_TIPO_CLIENTE_MASINFO_CLI_CLIENTE')){ ?>
	<div id="tab_cli_cliente" class="bloque-relacion cli_cliente">
		
            <h4><?php Lang::_lang('CliCliente') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliTipoCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_tipo_cliente->getCliClientesParaBloqueMasInfo() as $cli_cliente){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente->getId() ?>" archivo="ajax/modulos/cli_cliente/cli_cliente_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliCliente') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliCliente') ?>">
                                <a href="cli_cliente_alta.php?id=<?php echo $cli_cliente->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_TIPO_CLIENTE_MASINFO_CLI_CLIENTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliCliente::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente->getFiltrosArrXCampo('CliTipoCliente', 'cli_tipo_cliente_id') ?>" >
                                <?php Lang::_lang('Ver CliClientes de ') ?> <strong><?php echo($cli_tipo_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_alta.php" >
                            <?php Lang::_lang('Agregar CliCliente') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_TIPO_CLIENTE_MASINFO_EKU_PARAM_TIPO_OPERACION_CLI_TIPO_CLIENTE')){ ?>
	<div id="tab_eku_param_tipo_operacion_cli_tipo_cliente" class="bloque-relacion eku_param_tipo_operacion_cli_tipo_cliente">
		
            <h4><?php Lang::_lang('EkuParamTipoOperacionCliTipoCliente') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliTipoCliente') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_tipo_cliente->getEkuParamTipoOperacionCliTipoClientesParaBloqueMasInfo() as $eku_param_tipo_operacion_cli_tipo_cliente){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_tipo_operacion_cli_tipo_cliente->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_tipo_operacion_cli_tipo_cliente->getDescripcionVinculante('CliTipoCliente')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_tipo_operacion_cli_tipo_cliente->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_operacion_cli_tipo_cliente->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_tipo_operacion_cli_tipo_cliente->getId() ?>" archivo="ajax/modulos/eku_param_tipo_operacion_cli_tipo_cliente/eku_param_tipo_operacion_cli_tipo_cliente_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamTipoOperacionCliTipoCliente') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_OPERACION_CLI_TIPO_CLIENTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoOperacionCliTipoCliente') ?>">
                                <a href="eku_param_tipo_operacion_cli_tipo_cliente_alta.php?id=<?php echo $eku_param_tipo_operacion_cli_tipo_cliente->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_TIPO_CLIENTE_MASINFO_EKU_PARAM_TIPO_OPERACION_CLI_TIPO_CLIENTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_tipo_operacion_cli_tipo_cliente){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamTipoOperacionCliTipoCliente::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_operacion_cli_tipo_cliente->getFiltrosArrXCampo('CliTipoCliente', 'cli_tipo_cliente_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamTipoOperacionCliTipoClientes de ') ?> <strong><?php echo($cli_tipo_cliente->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_tipo_operacion_cli_tipo_cliente_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamTipoOperacionCliTipoCliente') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

