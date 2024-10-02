<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$geo_localidad_id = Gral::getVars(2, 'id');
$geo_localidad = GeoLocalidad::getOxId($geo_localidad_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($geo_localidad->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEO_LOCALIDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($geo_localidad->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($geo_localidad->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEO_LOCALIDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($geo_localidad->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($geo_localidad->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_EMPRESA')){ ?>
            <li><a href="#tab_gral_empresa"><?php Lang::_lang('GralEmpresas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_SUCURSAL')){ ?>
            <li><a href="#tab_gral_sucursal"><?php Lang::_lang('GralSucursal') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_RUTA_GEO_LOCALIDAD')){ ?>
            <li><a href="#tab_gral_ruta_geo_localidad"><?php Lang::_lang('GralRutaGeoLocalidads') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION')){ ?>
            <li><a href="#tab_gral_ruta_geo_localidad_cli_centro_recepcion"><?php Lang::_lang('GralRutaGeoLocalidads') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_CENTRO_COSTO')){ ?>
            <li><a href="#tab_gral_centro_costo"><?php Lang::_lang('GralCentroCostos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_PRV_PROVEEDOR')){ ?>
            <li><a href="#tab_prv_proveedor"><?php Lang::_lang('PrvProveedor') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_PAN_PANOL')){ ?>
            <li><a href="#tab_pan_panol"><?php Lang::_lang('PanPanol') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_CLI_CLIENTE')){ ?>
            <li><a href="#tab_cli_cliente"><?php Lang::_lang('CliCliente') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_CLI_CENTRO_RECEPCION')){ ?>
            <li><a href="#tab_cli_centro_recepcion"><?php Lang::_lang('CliCentroRecepcion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_CLI_CENTRO_PEDIDO')){ ?>
            <li><a href="#tab_cli_centro_pedido"><?php Lang::_lang('CliCentroPedido') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_VTA_COMPRADOR')){ ?>
            <li><a href="#tab_vta_comprador"><?php Lang::_lang('VtaComprador') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_VTA_PUNTO_VENTA')){ ?>
            <li><a href="#tab_vta_punto_venta"><?php Lang::_lang('VtaPuntoVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_PDE_CENTRO_RECEPCION')){ ?>
            <li><a href="#tab_pde_centro_recepcion"><?php Lang::_lang('PdeCentroRecepcions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_PDE_CENTRO_PEDIDO')){ ?>
            <li><a href="#tab_pde_centro_pedido"><?php Lang::_lang('PdeCentroPedidos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_CLI_CLIENTE_TIENDA')){ ?>
            <li><a href="#tab_cli_cliente_tienda"><?php Lang::_lang('CliClienteTienda') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_EKU_PARAM_GEO_CIUDAD_GEO_LOCALIDAD')){ ?>
            <li><a href="#tab_eku_param_geo_ciudad_geo_localidad"><?php Lang::_lang('EkuParamGeoCiudadGeoLocalidads') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_EMPRESA')){ ?>
	<div id="tab_gral_empresa" class="bloque-relacion gral_empresa">
		
            <h4><?php Lang::_lang('GralEmpresa') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getGralEmpresasParaBloqueMasInfo() as $gral_empresa){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_empresa->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_empresa->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_empresa->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_empresa->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_empresa->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_empresa->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_empresa->getId() ?>" archivo="ajax/modulos/gral_empresa/gral_empresa_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralEmpresa') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_EMPRESA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralEmpresa') ?>">
                                <a href="gral_empresa_alta.php?id=<?php echo $gral_empresa->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_EMPRESA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_empresa){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralEmpresa::getFiltrosArrGral() ?>&arr=<?php echo $gral_empresa->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver GralEmpresas de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_empresa_alta.php" >
                            <?php Lang::_lang('Agregar GralEmpresa') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_SUCURSAL')){ ?>
	<div id="tab_gral_sucursal" class="bloque-relacion gral_sucursal">
		
            <h4><?php Lang::_lang('GralSucursal') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getGralSucursalsParaBloqueMasInfo() as $gral_sucursal){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_sucursal->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_sucursal->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_sucursal->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_sucursal->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_sucursal->getId() ?>" archivo="ajax/modulos/gral_sucursal/gral_sucursal_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralSucursal') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursal') ?>">
                                <a href="gral_sucursal_alta.php?id=<?php echo $gral_sucursal->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_SUCURSAL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_sucursal){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralSucursal::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver GralSucursals de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_sucursal_alta.php" >
                            <?php Lang::_lang('Agregar GralSucursal') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_RUTA_GEO_LOCALIDAD')){ ?>
	<div id="tab_gral_ruta_geo_localidad" class="bloque-relacion gral_ruta_geo_localidad">
		
            <h4><?php Lang::_lang('GralRutaGeoLocalidad') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getGralRutaGeoLocalidadsParaBloqueMasInfo() as $gral_ruta_geo_localidad){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_ruta_geo_localidad->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_ruta_geo_localidad->getDescripcionVinculante('GeoLocalidad')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_ruta_geo_localidad->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_geo_localidad->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_ruta_geo_localidad->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_geo_localidad->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_ruta_geo_localidad->getId() ?>" archivo="ajax/modulos/gral_ruta_geo_localidad/gral_ruta_geo_localidad_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralRutaGeoLocalidad') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_GEO_LOCALIDAD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralRutaGeoLocalidad') ?>">
                                <a href="gral_ruta_geo_localidad_alta.php?id=<?php echo $gral_ruta_geo_localidad->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_RUTA_GEO_LOCALIDAD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_ruta_geo_localidad){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralRutaGeoLocalidad::getFiltrosArrGral() ?>&arr=<?php echo $gral_ruta_geo_localidad->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver GralRutaGeoLocalidads de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_ruta_geo_localidad_alta.php" >
                            <?php Lang::_lang('Agregar GralRutaGeoLocalidad') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION')){ ?>
	<div id="tab_gral_ruta_geo_localidad_cli_centro_recepcion" class="bloque-relacion gral_ruta_geo_localidad_cli_centro_recepcion">
		
            <h4><?php Lang::_lang('GralRutaGeoLocalidadCliCentroRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getGralRutaGeoLocalidadCliCentroRecepcionsParaBloqueMasInfo() as $gral_ruta_geo_localidad_cli_centro_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_geo_localidad_cli_centro_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_geo_localidad_cli_centro_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_ruta_geo_localidad_cli_centro_recepcion->getId() ?>" archivo="ajax/modulos/gral_ruta_geo_localidad_cli_centro_recepcion/gral_ruta_geo_localidad_cli_centro_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralRutaGeoLocalidadCliCentroRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralRutaGeoLocalidadCliCentroRecepcion') ?>">
                                <a href="gral_ruta_geo_localidad_cli_centro_recepcion_alta.php?id=<?php echo $gral_ruta_geo_localidad_cli_centro_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_ruta_geo_localidad_cli_centro_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralRutaGeoLocalidadCliCentroRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $gral_ruta_geo_localidad_cli_centro_recepcion->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver GralRutaGeoLocalidadCliCentroRecepcions de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_ruta_geo_localidad_cli_centro_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar GralRutaGeoLocalidadCliCentroRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_CENTRO_COSTO')){ ?>
	<div id="tab_gral_centro_costo" class="bloque-relacion gral_centro_costo">
		
            <h4><?php Lang::_lang('GralCentroCosto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getGralCentroCostosParaBloqueMasInfo() as $gral_centro_costo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_centro_costo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_centro_costo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_centro_costo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_centro_costo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_centro_costo->getId() ?>" archivo="ajax/modulos/gral_centro_costo/gral_centro_costo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCentroCosto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCentroCosto') ?>">
                                <a href="gral_centro_costo_alta.php?id=<?php echo $gral_centro_costo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_GRAL_CENTRO_COSTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_centro_costo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCentroCosto::getFiltrosArrGral() ?>&arr=<?php echo $gral_centro_costo->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver GralCentroCostos de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_centro_costo_alta.php" >
                            <?php Lang::_lang('Agregar GralCentroCosto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_PRV_PROVEEDOR')){ ?>
	<div id="tab_prv_proveedor" class="bloque-relacion prv_proveedor">
		
            <h4><?php Lang::_lang('PrvProveedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getPrvProveedorsParaBloqueMasInfo() as $prv_proveedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_proveedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_proveedor->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_proveedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_proveedor->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_proveedor->getId() ?>" archivo="ajax/modulos/prv_proveedor/prv_proveedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvProveedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvProveedor') ?>">
                                <a href="prv_proveedor_alta.php?id=<?php echo $prv_proveedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_PRV_PROVEEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_proveedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvProveedor::getFiltrosArrGral() ?>&arr=<?php echo $prv_proveedor->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver PrvProveedors de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_proveedor_alta.php" >
                            <?php Lang::_lang('Agregar PrvProveedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_PAN_PANOL')){ ?>
	<div id="tab_pan_panol" class="bloque-relacion pan_panol">
		
            <h4><?php Lang::_lang('PanPanol') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getPanPanolsParaBloqueMasInfo() as $pan_panol){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pan_panol->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pan_panol->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pan_panol->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_panol->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pan_panol->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_panol->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pan_panol->getId() ?>" archivo="ajax/modulos/pan_panol/pan_panol_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PanPanol') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PanPanol') ?>">
                                <a href="pan_panol_alta.php?id=<?php echo $pan_panol->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_PAN_PANOL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pan_panol){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PanPanol::getFiltrosArrGral() ?>&arr=<?php echo $pan_panol->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver PanPanols de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pan_panol_alta.php" >
                            <?php Lang::_lang('Agregar PanPanol') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_CLI_CLIENTE')){ ?>
	<div id="tab_cli_cliente" class="bloque-relacion cli_cliente">
		
            <h4><?php Lang::_lang('CliCliente') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getCliClientesParaBloqueMasInfo() as $cli_cliente){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_CLI_CLIENTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliCliente::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver CliClientes de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_CLI_CENTRO_RECEPCION')){ ?>
	<div id="tab_cli_centro_recepcion" class="bloque-relacion cli_centro_recepcion">
		
            <h4><?php Lang::_lang('CliCentroRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getCliCentroRecepcionsParaBloqueMasInfo() as $cli_centro_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_centro_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_centro_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_centro_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_centro_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_centro_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_centro_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_centro_recepcion->getId() ?>" archivo="ajax/modulos/cli_centro_recepcion/cli_centro_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliCentroRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CENTRO_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliCentroRecepcion') ?>">
                                <a href="cli_centro_recepcion_alta.php?id=<?php echo $cli_centro_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_CLI_CENTRO_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_centro_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliCentroRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $cli_centro_recepcion->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver CliCentroRecepcions de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_centro_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar CliCentroRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_CLI_CENTRO_PEDIDO')){ ?>
	<div id="tab_cli_centro_pedido" class="bloque-relacion cli_centro_pedido">
		
            <h4><?php Lang::_lang('CliCentroPedido') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getCliCentroPedidosParaBloqueMasInfo() as $cli_centro_pedido){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_centro_pedido->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_centro_pedido->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_centro_pedido->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_centro_pedido->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_centro_pedido->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_centro_pedido->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_centro_pedido->getId() ?>" archivo="ajax/modulos/cli_centro_pedido/cli_centro_pedido_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliCentroPedido') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CENTRO_PEDIDO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliCentroPedido') ?>">
                                <a href="cli_centro_pedido_alta.php?id=<?php echo $cli_centro_pedido->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_CLI_CENTRO_PEDIDO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_centro_pedido){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliCentroPedido::getFiltrosArrGral() ?>&arr=<?php echo $cli_centro_pedido->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver CliCentroPedidos de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_centro_pedido_alta.php" >
                            <?php Lang::_lang('Agregar CliCentroPedido') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_VTA_COMPRADOR')){ ?>
	<div id="tab_vta_comprador" class="bloque-relacion vta_comprador">
		
            <h4><?php Lang::_lang('VtaComprador') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getVtaCompradorsParaBloqueMasInfo() as $vta_comprador){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_comprador->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_comprador->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_comprador->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comprador->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_comprador->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comprador->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_comprador->getId() ?>" archivo="ajax/modulos/vta_comprador/vta_comprador_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaComprador') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_COMPRADOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComprador') ?>">
                                <a href="vta_comprador_alta.php?id=<?php echo $vta_comprador->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_VTA_COMPRADOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comprador){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComprador::getFiltrosArrGral() ?>&arr=<?php echo $vta_comprador->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver VtaCompradors de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_comprador_alta.php" >
                            <?php Lang::_lang('Agregar VtaComprador') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_VTA_PUNTO_VENTA')){ ?>
	<div id="tab_vta_punto_venta" class="bloque-relacion vta_punto_venta">
		
            <h4><?php Lang::_lang('VtaPuntoVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getVtaPuntoVentasParaBloqueMasInfo() as $vta_punto_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_punto_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_punto_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_punto_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_punto_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_punto_venta->getId() ?>" archivo="ajax/modulos/vta_punto_venta/vta_punto_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPuntoVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPuntoVenta') ?>">
                                <a href="vta_punto_venta_alta.php?id=<?php echo $vta_punto_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_VTA_PUNTO_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_punto_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPuntoVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_punto_venta->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver VtaPuntoVentas de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_punto_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaPuntoVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_PDE_CENTRO_RECEPCION')){ ?>
	<div id="tab_pde_centro_recepcion" class="bloque-relacion pde_centro_recepcion">
		
            <h4><?php Lang::_lang('PdeCentroRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getPdeCentroRecepcionsParaBloqueMasInfo() as $pde_centro_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_centro_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_centro_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_centro_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_centro_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_centro_recepcion->getId() ?>" archivo="ajax/modulos/pde_centro_recepcion/pde_centro_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCentroRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroRecepcion') ?>">
                                <a href="pde_centro_recepcion_alta.php?id=<?php echo $pde_centro_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_PDE_CENTRO_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_centro_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCentroRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_recepcion->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver PdeCentroRecepcions de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_centro_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar PdeCentroRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_PDE_CENTRO_PEDIDO')){ ?>
	<div id="tab_pde_centro_pedido" class="bloque-relacion pde_centro_pedido">
		
            <h4><?php Lang::_lang('PdeCentroPedido') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getPdeCentroPedidosParaBloqueMasInfo() as $pde_centro_pedido){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_centro_pedido->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_centro_pedido->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_centro_pedido->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_centro_pedido->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_centro_pedido->getId() ?>" archivo="ajax/modulos/pde_centro_pedido/pde_centro_pedido_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCentroPedido') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroPedido') ?>">
                                <a href="pde_centro_pedido_alta.php?id=<?php echo $pde_centro_pedido->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_PDE_CENTRO_PEDIDO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_centro_pedido){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCentroPedido::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_pedido->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver PdeCentroPedidos de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_centro_pedido_alta.php" >
                            <?php Lang::_lang('Agregar PdeCentroPedido') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_CLI_CLIENTE_TIENDA')){ ?>
	<div id="tab_cli_cliente_tienda" class="bloque-relacion cli_cliente_tienda">
		
            <h4><?php Lang::_lang('CliClienteTienda') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getCliClienteTiendasParaBloqueMasInfo() as $cli_cliente_tienda){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_cliente_tienda->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_cliente_tienda->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_cliente_tienda->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_cliente_tienda->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_tienda->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_cliente_tienda->getId() ?>" archivo="ajax/modulos/cli_cliente_tienda/cli_cliente_tienda_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliClienteTienda') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliClienteTienda') ?>">
                                <a href="cli_cliente_tienda_alta.php?id=<?php echo $cli_cliente_tienda->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_CLI_CLIENTE_TIENDA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_cliente_tienda){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliClienteTienda::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_tienda->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver CliClienteTiendas de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_cliente_tienda_alta.php" >
                            <?php Lang::_lang('Agregar CliClienteTienda') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_EKU_PARAM_GEO_CIUDAD_GEO_LOCALIDAD')){ ?>
	<div id="tab_eku_param_geo_ciudad_geo_localidad" class="bloque-relacion eku_param_geo_ciudad_geo_localidad">
		
            <h4><?php Lang::_lang('EkuParamGeoCiudadGeoLocalidad') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoLocalidad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_localidad->getEkuParamGeoCiudadGeoLocalidadsParaBloqueMasInfo() as $eku_param_geo_ciudad_geo_localidad){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_geo_ciudad_geo_localidad->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_geo_ciudad_geo_localidad->getDescripcionVinculante('GeoLocalidad')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_geo_ciudad_geo_localidad->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_geo_ciudad_geo_localidad->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_geo_ciudad_geo_localidad->getId() ?>" archivo="ajax/modulos/eku_param_geo_ciudad_geo_localidad/eku_param_geo_ciudad_geo_localidad_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamGeoCiudadGeoLocalidad') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_CIUDAD_GEO_LOCALIDAD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamGeoCiudadGeoLocalidad') ?>">
                                <a href="eku_param_geo_ciudad_geo_localidad_alta.php?id=<?php echo $eku_param_geo_ciudad_geo_localidad->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_MASINFO_EKU_PARAM_GEO_CIUDAD_GEO_LOCALIDAD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_geo_ciudad_geo_localidad){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamGeoCiudadGeoLocalidad::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_geo_ciudad_geo_localidad->getFiltrosArrXCampo('GeoLocalidad', 'geo_localidad_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamGeoCiudadGeoLocalidads de ') ?> <strong><?php echo($geo_localidad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_geo_ciudad_geo_localidad_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamGeoCiudadGeoLocalidad') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

