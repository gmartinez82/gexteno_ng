<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_vendedor_id = Gral::getVars(2, 'id');
$vta_vendedor = VtaVendedor::getOxId($vta_vendedor_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor->getApellido())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor->getNombre())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor->getEmail())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor->getTelefono())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Celular') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor->getCelular())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_VENDEDOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_vendedor->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_VENDEDOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_vendedor->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_GRAL_SUCURSAL_VTA_VENDEDOR')){ ?>
            <li><a href="#tab_gral_sucursal_vta_vendedor"><?php Lang::_lang('GralSucursalVtaVendedors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_GRAL_RUTA_VTA_VENDEDOR')){ ?>
            <li><a href="#tab_gral_ruta_vta_vendedor"><?php Lang::_lang('GralRutaVtaVendedors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_GRAL_CENTRO_COSTO_VTA_VENDEDOR')){ ?>
            <li><a href="#tab_gral_centro_costo_vta_vendedor"><?php Lang::_lang('GralCentroCostoVtaVendedors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_CLI_CLIENTE_VTA_VENDEDOR')){ ?>
            <li><a href="#tab_cli_cliente_vta_vendedor"><?php Lang::_lang('CliClienteVtaVendedor') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_PRESUPUESTO')){ ?>
            <li><a href="#tab_vta_presupuesto"><?php Lang::_lang('VtaPresupuesto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_VENDEDOR_US_USUARIO')){ ?>
            <li><a href="#tab_vta_vendedor_us_usuario"><?php Lang::_lang('VtaVendedorUsUsuario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO')){ ?>
            <li><a href="#tab_vta_vendedor_ins_tipo_lista_precio"><?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_VENDEDOR_GRAL_ESCENARIO')){ ?>
            <li><a href="#tab_vta_vendedor_gral_escenario"><?php Lang::_lang('VtaVendedorGralEscenario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_VENDEDOR_DESCUENTO')){ ?>
            <li><a href="#tab_vta_vendedor_descuento"><?php Lang::_lang('VtaVendedorDescuento') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_FACTURA')){ ?>
            <li><a href="#tab_vta_factura"><?php Lang::_lang('VtaFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_COMISION')){ ?>
            <li><a href="#tab_vta_comision"><?php Lang::_lang('VtaComisions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_COMISION_VTA_FACTURA_CONFIGURACION')){ ?>
            <li><a href="#tab_vta_comision_vta_factura_configuracion"><?php Lang::_lang('VtaComisionVtaFacturaConfiguracions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_COMISION_VTA_AJUSTE_DEBE_CONFIGURACION')){ ?>
            <li><a href="#tab_vta_comision_vta_ajuste_debe_configuracion"><?php Lang::_lang('VtaComisionVtaAjusteDebeConfiguracions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_AJUSTE_DEBE')){ ?>
            <li><a href="#tab_vta_ajuste_debe"><?php Lang::_lang('VtaAjusteDebes') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_GRAL_SUCURSAL_VTA_VENDEDOR')){ ?>
	<div id="tab_gral_sucursal_vta_vendedor" class="bloque-relacion gral_sucursal_vta_vendedor">
		
            <h4><?php Lang::_lang('GralSucursalVtaVendedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getGralSucursalVtaVendedorsParaBloqueMasInfo() as $gral_sucursal_vta_vendedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_sucursal_vta_vendedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_sucursal_vta_vendedor->getDescripcionVinculante('VtaVendedor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_sucursal_vta_vendedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_vta_vendedor->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_sucursal_vta_vendedor->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_vta_vendedor->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_sucursal_vta_vendedor->getId() ?>" archivo="ajax/modulos/gral_sucursal_vta_vendedor/gral_sucursal_vta_vendedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralSucursalVtaVendedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_VTA_VENDEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursalVtaVendedor') ?>">
                                <a href="gral_sucursal_vta_vendedor_alta.php?id=<?php echo $gral_sucursal_vta_vendedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_GRAL_SUCURSAL_VTA_VENDEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_sucursal_vta_vendedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralSucursalVtaVendedor::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_vta_vendedor->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver GralSucursalVtaVendedors de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_sucursal_vta_vendedor_alta.php" >
                            <?php Lang::_lang('Agregar GralSucursalVtaVendedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_GRAL_RUTA_VTA_VENDEDOR')){ ?>
	<div id="tab_gral_ruta_vta_vendedor" class="bloque-relacion gral_ruta_vta_vendedor">
		
            <h4><?php Lang::_lang('GralRutaVtaVendedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getGralRutaVtaVendedorsParaBloqueMasInfo() as $gral_ruta_vta_vendedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_ruta_vta_vendedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_ruta_vta_vendedor->getDescripcionVinculante('VtaVendedor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_ruta_vta_vendedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_vta_vendedor->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_ruta_vta_vendedor->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_vta_vendedor->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_ruta_vta_vendedor->getId() ?>" archivo="ajax/modulos/gral_ruta_vta_vendedor/gral_ruta_vta_vendedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralRutaVtaVendedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_VTA_VENDEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralRutaVtaVendedor') ?>">
                                <a href="gral_ruta_vta_vendedor_alta.php?id=<?php echo $gral_ruta_vta_vendedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_GRAL_RUTA_VTA_VENDEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_ruta_vta_vendedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralRutaVtaVendedor::getFiltrosArrGral() ?>&arr=<?php echo $gral_ruta_vta_vendedor->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver GralRutaVtaVendedors de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_ruta_vta_vendedor_alta.php" >
                            <?php Lang::_lang('Agregar GralRutaVtaVendedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_GRAL_CENTRO_COSTO_VTA_VENDEDOR')){ ?>
	<div id="tab_gral_centro_costo_vta_vendedor" class="bloque-relacion gral_centro_costo_vta_vendedor">
		
            <h4><?php Lang::_lang('GralCentroCostoVtaVendedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getGralCentroCostoVtaVendedorsParaBloqueMasInfo() as $gral_centro_costo_vta_vendedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_centro_costo_vta_vendedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_centro_costo_vta_vendedor->getDescripcionVinculante('VtaVendedor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_centro_costo_vta_vendedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo_vta_vendedor->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_centro_costo_vta_vendedor->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo_vta_vendedor->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_centro_costo_vta_vendedor->getId() ?>" archivo="ajax/modulos/gral_centro_costo_vta_vendedor/gral_centro_costo_vta_vendedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCentroCostoVtaVendedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_VTA_VENDEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCentroCostoVtaVendedor') ?>">
                                <a href="gral_centro_costo_vta_vendedor_alta.php?id=<?php echo $gral_centro_costo_vta_vendedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_GRAL_CENTRO_COSTO_VTA_VENDEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_centro_costo_vta_vendedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCentroCostoVtaVendedor::getFiltrosArrGral() ?>&arr=<?php echo $gral_centro_costo_vta_vendedor->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver GralCentroCostoVtaVendedors de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_centro_costo_vta_vendedor_alta.php" >
                            <?php Lang::_lang('Agregar GralCentroCostoVtaVendedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_CLI_CLIENTE_VTA_VENDEDOR')){ ?>
	<div id="tab_cli_cliente_vta_vendedor" class="bloque-relacion cli_cliente_vta_vendedor">
		
            <h4><?php Lang::_lang('CliClienteVtaVendedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getCliClienteVtaVendedorsParaBloqueMasInfo() as $cli_cliente_vta_vendedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_vta_vendedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_vta_vendedor->getDescripcionVinculante('VtaVendedor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_vta_vendedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_vendedor->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_vta_vendedor->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_vta_vendedor->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_vta_vendedor->getId() ?>" archivo="ajax/modulos/cli_cliente_vta_vendedor/cli_cliente_vta_vendedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteVtaVendedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_VTA_VENDEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteVtaVendedor') ?>">
                                <a href="cli_cliente_vta_vendedor_alta.php?id=<?php echo $cli_cliente_vta_vendedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_CLI_CLIENTE_VTA_VENDEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_vta_vendedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteVtaVendedor::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_vta_vendedor->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteVtaVendedors de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_vta_vendedor_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteVtaVendedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_PRESUPUESTO')){ ?>
	<div id="tab_vta_presupuesto" class="bloque-relacion vta_presupuesto">
		
            <h4><?php Lang::_lang('VtaPresupuesto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getVtaPresupuestosParaBloqueMasInfo() as $vta_presupuesto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_presupuesto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_presupuesto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_presupuesto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_presupuesto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_presupuesto->getId() ?>" archivo="ajax/modulos/vta_presupuesto/vta_presupuesto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPresupuesto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuesto') ?>">
                                <a href="vta_presupuesto_alta.php?id=<?php echo $vta_presupuesto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_PRESUPUESTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuesto::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestos de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_presupuesto_alta.php" >
                            <?php Lang::_lang('Agregar VtaPresupuesto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_VENDEDOR_US_USUARIO')){ ?>
	<div id="tab_vta_vendedor_us_usuario" class="bloque-relacion vta_vendedor_us_usuario">
		
            <h4><?php Lang::_lang('VtaVendedorUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getVtaVendedorUsUsuariosParaBloqueMasInfo() as $vta_vendedor_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_vendedor_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_vendedor_us_usuario->getDescripcionVinculante('VtaVendedor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_vendedor_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_vendedor_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_vendedor_us_usuario->getId() ?>" archivo="ajax/modulos/vta_vendedor_us_usuario/vta_vendedor_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaVendedorUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedorUsUsuario') ?>">
                                <a href="vta_vendedor_us_usuario_alta.php?id=<?php echo $vta_vendedor_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_VENDEDOR_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_vendedor_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaVendedorUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_us_usuario->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver VtaVendedorUsUsuarios de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_vendedor_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar VtaVendedorUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO')){ ?>
	<div id="tab_vta_vendedor_ins_tipo_lista_precio" class="bloque-relacion vta_vendedor_ins_tipo_lista_precio">
		
            <h4><?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getVtaVendedorInsTipoListaPreciosParaBloqueMasInfo() as $vta_vendedor_ins_tipo_lista_precio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getDescripcionVinculante('VtaVendedor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_ins_tipo_lista_precio->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_ins_tipo_lista_precio->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_vendedor_ins_tipo_lista_precio->getId() ?>" archivo="ajax/modulos/vta_vendedor_ins_tipo_lista_precio/vta_vendedor_ins_tipo_lista_precio_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?>">
                                <a href="vta_vendedor_ins_tipo_lista_precio_alta.php?id=<?php echo $vta_vendedor_ins_tipo_lista_precio->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_vendedor_ins_tipo_lista_precio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaVendedorInsTipoListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_ins_tipo_lista_precio->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver VtaVendedorInsTipoListaPrecios de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_vendedor_ins_tipo_lista_precio_alta.php" >
                            <?php Lang::_lang('Agregar VtaVendedorInsTipoListaPrecio') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_VENDEDOR_GRAL_ESCENARIO')){ ?>
	<div id="tab_vta_vendedor_gral_escenario" class="bloque-relacion vta_vendedor_gral_escenario">
		
            <h4><?php Lang::_lang('VtaVendedorGralEscenario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getVtaVendedorGralEscenariosParaBloqueMasInfo() as $vta_vendedor_gral_escenario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_vendedor_gral_escenario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_vendedor_gral_escenario->getDescripcionVinculante('VtaVendedor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_vendedor_gral_escenario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_gral_escenario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_vendedor_gral_escenario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_gral_escenario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_vendedor_gral_escenario->getId() ?>" archivo="ajax/modulos/vta_vendedor_gral_escenario/vta_vendedor_gral_escenario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaVendedorGralEscenario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_GRAL_ESCENARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedorGralEscenario') ?>">
                                <a href="vta_vendedor_gral_escenario_alta.php?id=<?php echo $vta_vendedor_gral_escenario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_VENDEDOR_GRAL_ESCENARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_vendedor_gral_escenario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaVendedorGralEscenario::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_gral_escenario->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver VtaVendedorGralEscenarios de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_vendedor_gral_escenario_alta.php" >
                            <?php Lang::_lang('Agregar VtaVendedorGralEscenario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_VENDEDOR_DESCUENTO')){ ?>
	<div id="tab_vta_vendedor_descuento" class="bloque-relacion vta_vendedor_descuento">
		
            <h4><?php Lang::_lang('VtaVendedorDescuento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getVtaVendedorDescuentosParaBloqueMasInfo() as $vta_vendedor_descuento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_vendedor_descuento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_vendedor_descuento->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_vendedor_descuento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_descuento->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_vendedor_descuento->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_descuento->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_vendedor_descuento->getId() ?>" archivo="ajax/modulos/vta_vendedor_descuento/vta_vendedor_descuento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaVendedorDescuento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_DESCUENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedorDescuento') ?>">
                                <a href="vta_vendedor_descuento_alta.php?id=<?php echo $vta_vendedor_descuento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_VENDEDOR_DESCUENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_vendedor_descuento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaVendedorDescuento::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_descuento->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver VtaVendedorDescuentos de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_vendedor_descuento_alta.php" >
                            <?php Lang::_lang('Agregar VtaVendedorDescuento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_FACTURA')){ ?>
	<div id="tab_vta_factura" class="bloque-relacion vta_factura">
		
            <h4><?php Lang::_lang('VtaFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getVtaFacturasParaBloqueMasInfo() as $vta_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura->getId() ?>" archivo="ajax/modulos/vta_factura/vta_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFactura') ?>">
                                <a href="vta_factura_alta.php?id=<?php echo $vta_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturas de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_alta.php" >
                            <?php Lang::_lang('Agregar VtaFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_COMISION')){ ?>
	<div id="tab_vta_comision" class="bloque-relacion vta_comision">
		
            <h4><?php Lang::_lang('VtaComision') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getVtaComisionsParaBloqueMasInfo() as $vta_comision){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_comision->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_comision->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_comision->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_comision->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_comision->getId() ?>" archivo="ajax/modulos/vta_comision/vta_comision_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaComision') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComision') ?>">
                                <a href="vta_comision_alta.php?id=<?php echo $vta_comision->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_COMISION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comision){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComision::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver VtaComisions de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_comision_alta.php" >
                            <?php Lang::_lang('Agregar VtaComision') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_COMISION_VTA_FACTURA_CONFIGURACION')){ ?>
	<div id="tab_vta_comision_vta_factura_configuracion" class="bloque-relacion vta_comision_vta_factura_configuracion">
		
            <h4><?php Lang::_lang('VtaComisionVtaFacturaConfiguracion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getVtaComisionVtaFacturaConfiguracionsParaBloqueMasInfo() as $vta_comision_vta_factura_configuracion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_comision_vta_factura_configuracion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_comision_vta_factura_configuracion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_comision_vta_factura_configuracion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_vta_factura_configuracion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_comision_vta_factura_configuracion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_vta_factura_configuracion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_comision_vta_factura_configuracion->getId() ?>" archivo="ajax/modulos/vta_comision_vta_factura_configuracion/vta_comision_vta_factura_configuracion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaComisionVtaFacturaConfiguracion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_VTA_FACTURA_CONFIGURACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComisionVtaFacturaConfiguracion') ?>">
                                <a href="vta_comision_vta_factura_configuracion_alta.php?id=<?php echo $vta_comision_vta_factura_configuracion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_COMISION_VTA_FACTURA_CONFIGURACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comision_vta_factura_configuracion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComisionVtaFacturaConfiguracion::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision_vta_factura_configuracion->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver VtaComisionVtaFacturaConfiguracions de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_comision_vta_factura_configuracion_alta.php" >
                            <?php Lang::_lang('Agregar VtaComisionVtaFacturaConfiguracion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_COMISION_VTA_AJUSTE_DEBE_CONFIGURACION')){ ?>
	<div id="tab_vta_comision_vta_ajuste_debe_configuracion" class="bloque-relacion vta_comision_vta_ajuste_debe_configuracion">
		
            <h4><?php Lang::_lang('VtaComisionVtaAjusteDebeConfiguracion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getVtaComisionVtaAjusteDebeConfiguracionsParaBloqueMasInfo() as $vta_comision_vta_ajuste_debe_configuracion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_comision_vta_ajuste_debe_configuracion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_comision_vta_ajuste_debe_configuracion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_comision_vta_ajuste_debe_configuracion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_vta_ajuste_debe_configuracion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_comision_vta_ajuste_debe_configuracion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_vta_ajuste_debe_configuracion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_comision_vta_ajuste_debe_configuracion->getId() ?>" archivo="ajax/modulos/vta_comision_vta_ajuste_debe_configuracion/vta_comision_vta_ajuste_debe_configuracion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaComisionVtaAjusteDebeConfiguracion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_VTA_AJUSTE_DEBE_CONFIGURACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComisionVtaAjusteDebeConfiguracion') ?>">
                                <a href="vta_comision_vta_ajuste_debe_configuracion_alta.php?id=<?php echo $vta_comision_vta_ajuste_debe_configuracion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_COMISION_VTA_AJUSTE_DEBE_CONFIGURACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comision_vta_ajuste_debe_configuracion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComisionVtaAjusteDebeConfiguracion::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision_vta_ajuste_debe_configuracion->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver VtaComisionVtaAjusteDebeConfiguracions de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_comision_vta_ajuste_debe_configuracion_alta.php" >
                            <?php Lang::_lang('Agregar VtaComisionVtaAjusteDebeConfiguracion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_AJUSTE_DEBE')){ ?>
	<div id="tab_vta_ajuste_debe" class="bloque-relacion vta_ajuste_debe">
		
            <h4><?php Lang::_lang('VtaAjusteDebe') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaVendedor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_vendedor->getVtaAjusteDebesParaBloqueMasInfo() as $vta_ajuste_debe){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_ajuste_debe->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_ajuste_debe->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_ajuste_debe->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_ajuste_debe->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_ajuste_debe->getId() ?>" archivo="ajax/modulos/vta_ajuste_debe/vta_ajuste_debe_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaAjusteDebe') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaAjusteDebe') ?>">
                                <a href="vta_ajuste_debe_alta.php?id=<?php echo $vta_ajuste_debe->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_MASINFO_VTA_AJUSTE_DEBE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_ajuste_debe){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaAjusteDebe::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_debe->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>" >
                                <?php Lang::_lang('Ver VtaAjusteDebes de ') ?> <strong><?php echo($vta_vendedor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_ajuste_debe_alta.php" >
                            <?php Lang::_lang('Agregar VtaAjusteDebe') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

