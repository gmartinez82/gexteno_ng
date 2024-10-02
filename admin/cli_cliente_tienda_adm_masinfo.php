<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_cliente_tienda_id = Gral::getVars(2, 'id');
$cli_cliente_tienda = CliClienteTienda::getOxId($cli_cliente_tienda_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_tienda->getGralTipoPersoneria()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_tienda->getGralCondicionIva()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_tienda->getNombre())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_tienda->getApellido())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_tienda->getRazonSocial())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_tienda->getDomicilioLegal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo Postal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_tienda->getCodigoPostal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_tienda->getGeoLocalidad()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_tienda->getCodigo())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_tienda->getUsuario())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_tienda->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_CLIENTE_TIENDA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_cliente_tienda->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_CLIENTE_TIENDA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_cliente_tienda->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_CLI_CLIENTE_TIENDA_CLAVE')){ ?>
            <li><a href="#tab_cli_cliente_tienda_clave"><?php Lang::_lang('CliClienteTiendaClave') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_CLI_CLIENTE_TIENDA_LOGIN')){ ?>
            <li><a href="#tab_cli_cliente_tienda_login"><?php Lang::_lang('CliClienteTiendaLogins') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_CLI_CLIENTE_TIENDA_NAVEGACION')){ ?>
            <li><a href="#tab_cli_cliente_tienda_navegacion"><?php Lang::_lang('CliClienteTiendaNavegacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_VTA_PRESUPUESTO_CLI_CLIENTE_TIENDA')){ ?>
            <li><a href="#tab_vta_presupuesto_cli_cliente_tienda"><?php Lang::_lang('VtaPresupuestoCliClienteTienda') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_VTA_PRESUPUESTO_MENSAJE')){ ?>
            <li><a href="#tab_vta_presupuesto_mensaje"><?php Lang::_lang('VtaPresupuestoMensajes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_VTA_PRESUPUESTO_VALORACION')){ ?>
            <li><a href="#tab_vta_presupuesto_valoracion"><?php Lang::_lang('VtaPresupuestoValoracions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_TND_TIENDA_BUSQUEDA')){ ?>
            <li><a href="#tab_tnd_tienda_busqueda"><?php Lang::_lang('TndTiendaBusquedas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_CLI_CLIENTE_TIENDA_CLAVE')){ ?>
	<div id="tab_cli_cliente_tienda_clave" class="bloque-relacion cli_cliente_tienda_clave">
		
            <h4><?php Lang::_lang('CliClienteTiendaClave') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliClienteTienda') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente_tienda->getCliClienteTiendaClavesParaBloqueMasInfo() as $cli_cliente_tienda_clave){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_tienda_clave->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_tienda_clave->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_tienda_clave->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda_clave->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_tienda_clave->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda_clave->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_tienda_clave->getId() ?>" archivo="ajax/modulos/cli_cliente_tienda_clave/cli_cliente_tienda_clave_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteTiendaClave') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_CLAVE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteTiendaClave') ?>">
                                <a href="cli_cliente_tienda_clave_alta.php?id=<?php echo $cli_cliente_tienda_clave->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_CLI_CLIENTE_TIENDA_CLAVE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_tienda_clave){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteTiendaClave::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_tienda_clave->getFiltrosArrXCampo('CliClienteTienda', 'cli_cliente_tienda_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteTiendaClaves de ') ?> <strong><?php echo($cli_cliente_tienda->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_tienda_clave_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteTiendaClave') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_CLI_CLIENTE_TIENDA_LOGIN')){ ?>
	<div id="tab_cli_cliente_tienda_login" class="bloque-relacion cli_cliente_tienda_login">
		
            <h4><?php Lang::_lang('CliClienteTiendaLogin') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliClienteTienda') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente_tienda->getCliClienteTiendaLoginsParaBloqueMasInfo() as $cli_cliente_tienda_login){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_tienda_login->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_tienda_login->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_tienda_login->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda_login->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_tienda_login->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda_login->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_tienda_login->getId() ?>" archivo="ajax/modulos/cli_cliente_tienda_login/cli_cliente_tienda_login_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteTiendaLogin') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_LOGIN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteTiendaLogin') ?>">
                                <a href="cli_cliente_tienda_login_alta.php?id=<?php echo $cli_cliente_tienda_login->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_CLI_CLIENTE_TIENDA_LOGIN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_tienda_login){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteTiendaLogin::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_tienda_login->getFiltrosArrXCampo('CliClienteTienda', 'cli_cliente_tienda_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteTiendaLogins de ') ?> <strong><?php echo($cli_cliente_tienda->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_tienda_login_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteTiendaLogin') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_CLI_CLIENTE_TIENDA_NAVEGACION')){ ?>
	<div id="tab_cli_cliente_tienda_navegacion" class="bloque-relacion cli_cliente_tienda_navegacion">
		
            <h4><?php Lang::_lang('CliClienteTiendaNavegacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliClienteTienda') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente_tienda->getCliClienteTiendaNavegacionsParaBloqueMasInfo() as $cli_cliente_tienda_navegacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_tienda_navegacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_tienda_navegacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_tienda_navegacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda_navegacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_tienda_navegacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda_navegacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_tienda_navegacion->getId() ?>" archivo="ajax/modulos/cli_cliente_tienda_navegacion/cli_cliente_tienda_navegacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteTiendaNavegacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_NAVEGACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteTiendaNavegacion') ?>">
                                <a href="cli_cliente_tienda_navegacion_alta.php?id=<?php echo $cli_cliente_tienda_navegacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_CLI_CLIENTE_TIENDA_NAVEGACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_tienda_navegacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteTiendaNavegacion::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_tienda_navegacion->getFiltrosArrXCampo('CliClienteTienda', 'cli_cliente_tienda_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteTiendaNavegacions de ') ?> <strong><?php echo($cli_cliente_tienda->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_tienda_navegacion_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteTiendaNavegacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_VTA_PRESUPUESTO_CLI_CLIENTE_TIENDA')){ ?>
	<div id="tab_vta_presupuesto_cli_cliente_tienda" class="bloque-relacion vta_presupuesto_cli_cliente_tienda">
		
            <h4><?php Lang::_lang('VtaPresupuestoCliClienteTienda') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliClienteTienda') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente_tienda->getVtaPresupuestoCliClienteTiendasParaBloqueMasInfo() as $vta_presupuesto_cli_cliente_tienda){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_presupuesto_cli_cliente_tienda->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_presupuesto_cli_cliente_tienda->getDescripcionVinculante('CliClienteTienda')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_presupuesto_cli_cliente_tienda->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_cli_cliente_tienda->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_presupuesto_cli_cliente_tienda->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_cli_cliente_tienda->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_presupuesto_cli_cliente_tienda->getId() ?>" archivo="ajax/modulos/vta_presupuesto_cli_cliente_tienda/vta_presupuesto_cli_cliente_tienda_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPresupuestoCliClienteTienda') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_CLI_CLIENTE_TIENDA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuestoCliClienteTienda') ?>">
                                <a href="vta_presupuesto_cli_cliente_tienda_alta.php?id=<?php echo $vta_presupuesto_cli_cliente_tienda->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_VTA_PRESUPUESTO_CLI_CLIENTE_TIENDA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto_cli_cliente_tienda){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuestoCliClienteTienda::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_cli_cliente_tienda->getFiltrosArrXCampo('CliClienteTienda', 'cli_cliente_tienda_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestoCliClienteTiendas de ') ?> <strong><?php echo($cli_cliente_tienda->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_presupuesto_cli_cliente_tienda_alta.php" >
                            <?php Lang::_lang('Agregar VtaPresupuestoCliClienteTienda') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_VTA_PRESUPUESTO_MENSAJE')){ ?>
	<div id="tab_vta_presupuesto_mensaje" class="bloque-relacion vta_presupuesto_mensaje">
		
            <h4><?php Lang::_lang('VtaPresupuestoMensaje') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliClienteTienda') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente_tienda->getVtaPresupuestoMensajesParaBloqueMasInfo() as $vta_presupuesto_mensaje){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_presupuesto_mensaje->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_presupuesto_mensaje->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_presupuesto_mensaje->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_mensaje->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_presupuesto_mensaje->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_mensaje->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_presupuesto_mensaje->getId() ?>" archivo="ajax/modulos/vta_presupuesto_mensaje/vta_presupuesto_mensaje_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPresupuestoMensaje') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_MENSAJE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuestoMensaje') ?>">
                                <a href="vta_presupuesto_mensaje_alta.php?id=<?php echo $vta_presupuesto_mensaje->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_VTA_PRESUPUESTO_MENSAJE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto_mensaje){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuestoMensaje::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_mensaje->getFiltrosArrXCampo('CliClienteTienda', 'cli_cliente_tienda_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestoMensajes de ') ?> <strong><?php echo($cli_cliente_tienda->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_presupuesto_mensaje_alta.php" >
                            <?php Lang::_lang('Agregar VtaPresupuestoMensaje') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_VTA_PRESUPUESTO_VALORACION')){ ?>
	<div id="tab_vta_presupuesto_valoracion" class="bloque-relacion vta_presupuesto_valoracion">
		
            <h4><?php Lang::_lang('VtaPresupuestoValoracion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliClienteTienda') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente_tienda->getVtaPresupuestoValoracionsParaBloqueMasInfo() as $vta_presupuesto_valoracion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_presupuesto_valoracion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_presupuesto_valoracion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_presupuesto_valoracion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_valoracion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_presupuesto_valoracion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_valoracion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_presupuesto_valoracion->getId() ?>" archivo="ajax/modulos/vta_presupuesto_valoracion/vta_presupuesto_valoracion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPresupuestoValoracion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_VALORACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuestoValoracion') ?>">
                                <a href="vta_presupuesto_valoracion_alta.php?id=<?php echo $vta_presupuesto_valoracion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_VTA_PRESUPUESTO_VALORACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto_valoracion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuestoValoracion::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_valoracion->getFiltrosArrXCampo('CliClienteTienda', 'cli_cliente_tienda_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestoValoracions de ') ?> <strong><?php echo($cli_cliente_tienda->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_presupuesto_valoracion_alta.php" >
                            <?php Lang::_lang('Agregar VtaPresupuestoValoracion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_TND_TIENDA_BUSQUEDA')){ ?>
	<div id="tab_tnd_tienda_busqueda" class="bloque-relacion tnd_tienda_busqueda">
		
            <h4><?php Lang::_lang('TndTiendaBusqueda') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CliClienteTienda') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cli_cliente_tienda->getTndTiendaBusquedasParaBloqueMasInfo() as $tnd_tienda_busqueda){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($tnd_tienda_busqueda->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($tnd_tienda_busqueda->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($tnd_tienda_busqueda->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($tnd_tienda_busqueda->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($tnd_tienda_busqueda->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($tnd_tienda_busqueda->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $tnd_tienda_busqueda->getId() ?>" archivo="ajax/modulos/tnd_tienda_busqueda/tnd_tienda_busqueda_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('TndTiendaBusqueda') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('TND_TIENDA_BUSQUEDA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('TndTiendaBusqueda') ?>">
                                <a href="tnd_tienda_busqueda_alta.php?id=<?php echo $tnd_tienda_busqueda->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_MASINFO_TND_TIENDA_BUSQUEDA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($tnd_tienda_busqueda){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo TndTiendaBusqueda::getFiltrosArrGral() ?>&arr=<?php echo $tnd_tienda_busqueda->getFiltrosArrXCampo('CliClienteTienda', 'cli_cliente_tienda_id') ?>" >
                                <?php Lang::_lang('Ver TndTiendaBusquedas de ') ?> <strong><?php echo($cli_cliente_tienda->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="tnd_tienda_busqueda_alta.php" >
                            <?php Lang::_lang('Agregar TndTiendaBusqueda') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

