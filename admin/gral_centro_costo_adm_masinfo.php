<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_centro_costo_id = Gral::getVars(2, 'id');
$gral_centro_costo = GralCentroCosto::getOxId($gral_centro_costo_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo Postal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_centro_costo->getCodigoPostal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_centro_costo->getGeoLocalidad()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_centro_costo->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_centro_costo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_CENTRO_COSTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_centro_costo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_CENTRO_COSTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_centro_costo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_GRAL_CENTRO_COSTO_GRAL_SUCURSAL')){ ?>
            <li><a href="#tab_gral_centro_costo_gral_sucursal"><?php Lang::_lang('GralCentroCostoGralSucursals') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_GRAL_CENTRO_COSTO_VTA_VENDEDOR')){ ?>
            <li><a href="#tab_gral_centro_costo_vta_vendedor"><?php Lang::_lang('GralCentroCostoVtaVendedors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_GRAL_CENTRO_COSTO_US_USUARIO')){ ?>
            <li><a href="#tab_gral_centro_costo_us_usuario"><?php Lang::_lang('GralCentroCostoUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_GRAL_CENTRO_COSTO_PRV_PROVEEDOR')){ ?>
            <li><a href="#tab_gral_centro_costo_prv_proveedor"><?php Lang::_lang('GralCentroCostoPrvProveedors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_PDE_FACTURA_GRAL_CENTRO_COSTO')){ ?>
            <li><a href="#tab_pde_factura_gral_centro_costo"><?php Lang::_lang('PdeFacturaGralCentroCostos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_GRAL_CENTRO_COSTO_GRAL_SUCURSAL')){ ?>
	<div id="tab_gral_centro_costo_gral_sucursal" class="bloque-relacion gral_centro_costo_gral_sucursal">
		
            <h4><?php Lang::_lang('GralCentroCostoGralSucursal') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCentroCosto') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_centro_costo->getGralCentroCostoGralSucursalsParaBloqueMasInfo() as $gral_centro_costo_gral_sucursal){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_centro_costo_gral_sucursal->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_centro_costo_gral_sucursal->getDescripcionVinculante('GralCentroCosto')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_centro_costo_gral_sucursal->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo_gral_sucursal->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_centro_costo_gral_sucursal->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo_gral_sucursal->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_centro_costo_gral_sucursal->getId() ?>" archivo="ajax/modulos/gral_centro_costo_gral_sucursal/gral_centro_costo_gral_sucursal_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCentroCostoGralSucursal') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_GRAL_SUCURSAL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCentroCostoGralSucursal') ?>">
                                <a href="gral_centro_costo_gral_sucursal_alta.php?id=<?php echo $gral_centro_costo_gral_sucursal->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_GRAL_CENTRO_COSTO_GRAL_SUCURSAL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_centro_costo_gral_sucursal){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCentroCostoGralSucursal::getFiltrosArrGral() ?>&arr=<?php echo $gral_centro_costo_gral_sucursal->getFiltrosArrXCampo('GralCentroCosto', 'gral_centro_costo_id') ?>" >
                                <?php Lang::_lang('Ver GralCentroCostoGralSucursals de ') ?> <strong><?php echo($gral_centro_costo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_centro_costo_gral_sucursal_alta.php" >
                            <?php Lang::_lang('Agregar GralCentroCostoGralSucursal') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_GRAL_CENTRO_COSTO_VTA_VENDEDOR')){ ?>
	<div id="tab_gral_centro_costo_vta_vendedor" class="bloque-relacion gral_centro_costo_vta_vendedor">
		
            <h4><?php Lang::_lang('GralCentroCostoVtaVendedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCentroCosto') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_centro_costo->getGralCentroCostoVtaVendedorsParaBloqueMasInfo() as $gral_centro_costo_vta_vendedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_centro_costo_vta_vendedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_centro_costo_vta_vendedor->getDescripcionVinculante('GralCentroCosto')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_GRAL_CENTRO_COSTO_VTA_VENDEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_centro_costo_vta_vendedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCentroCostoVtaVendedor::getFiltrosArrGral() ?>&arr=<?php echo $gral_centro_costo_vta_vendedor->getFiltrosArrXCampo('GralCentroCosto', 'gral_centro_costo_id') ?>" >
                                <?php Lang::_lang('Ver GralCentroCostoVtaVendedors de ') ?> <strong><?php echo($gral_centro_costo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_GRAL_CENTRO_COSTO_US_USUARIO')){ ?>
	<div id="tab_gral_centro_costo_us_usuario" class="bloque-relacion gral_centro_costo_us_usuario">
		
            <h4><?php Lang::_lang('GralCentroCostoUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCentroCosto') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_centro_costo->getGralCentroCostoUsUsuariosParaBloqueMasInfo() as $gral_centro_costo_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_centro_costo_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_centro_costo_us_usuario->getDescripcionVinculante('GralCentroCosto')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_centro_costo_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_centro_costo_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_centro_costo_us_usuario->getId() ?>" archivo="ajax/modulos/gral_centro_costo_us_usuario/gral_centro_costo_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCentroCostoUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCentroCostoUsUsuario') ?>">
                                <a href="gral_centro_costo_us_usuario_alta.php?id=<?php echo $gral_centro_costo_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_GRAL_CENTRO_COSTO_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_centro_costo_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCentroCostoUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $gral_centro_costo_us_usuario->getFiltrosArrXCampo('GralCentroCosto', 'gral_centro_costo_id') ?>" >
                                <?php Lang::_lang('Ver GralCentroCostoUsUsuarios de ') ?> <strong><?php echo($gral_centro_costo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_centro_costo_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar GralCentroCostoUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_GRAL_CENTRO_COSTO_PRV_PROVEEDOR')){ ?>
	<div id="tab_gral_centro_costo_prv_proveedor" class="bloque-relacion gral_centro_costo_prv_proveedor">
		
            <h4><?php Lang::_lang('GralCentroCostoPrvProveedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCentroCosto') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_centro_costo->getGralCentroCostoPrvProveedorsParaBloqueMasInfo() as $gral_centro_costo_prv_proveedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_centro_costo_prv_proveedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_centro_costo_prv_proveedor->getDescripcionVinculante('GralCentroCosto')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_centro_costo_prv_proveedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo_prv_proveedor->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_centro_costo_prv_proveedor->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_centro_costo_prv_proveedor->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_centro_costo_prv_proveedor->getId() ?>" archivo="ajax/modulos/gral_centro_costo_prv_proveedor/gral_centro_costo_prv_proveedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCentroCostoPrvProveedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_PRV_PROVEEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCentroCostoPrvProveedor') ?>">
                                <a href="gral_centro_costo_prv_proveedor_alta.php?id=<?php echo $gral_centro_costo_prv_proveedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_GRAL_CENTRO_COSTO_PRV_PROVEEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_centro_costo_prv_proveedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCentroCostoPrvProveedor::getFiltrosArrGral() ?>&arr=<?php echo $gral_centro_costo_prv_proveedor->getFiltrosArrXCampo('GralCentroCosto', 'gral_centro_costo_id') ?>" >
                                <?php Lang::_lang('Ver GralCentroCostoPrvProveedors de ') ?> <strong><?php echo($gral_centro_costo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_centro_costo_prv_proveedor_alta.php" >
                            <?php Lang::_lang('Agregar GralCentroCostoPrvProveedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_PDE_FACTURA_GRAL_CENTRO_COSTO')){ ?>
	<div id="tab_pde_factura_gral_centro_costo" class="bloque-relacion pde_factura_gral_centro_costo">
		
            <h4><?php Lang::_lang('PdeFacturaGralCentroCosto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCentroCosto') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_centro_costo->getPdeFacturaGralCentroCostosParaBloqueMasInfo() as $pde_factura_gral_centro_costo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_gral_centro_costo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_gral_centro_costo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_gral_centro_costo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_gral_centro_costo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_gral_centro_costo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_gral_centro_costo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_gral_centro_costo->getId() ?>" archivo="ajax/modulos/pde_factura_gral_centro_costo/pde_factura_gral_centro_costo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaGralCentroCosto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_GRAL_CENTRO_COSTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaGralCentroCosto') ?>">
                                <a href="pde_factura_gral_centro_costo_alta.php?id=<?php echo $pde_factura_gral_centro_costo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_MASINFO_PDE_FACTURA_GRAL_CENTRO_COSTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_gral_centro_costo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaGralCentroCosto::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_gral_centro_costo->getFiltrosArrXCampo('GralCentroCosto', 'gral_centro_costo_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaGralCentroCostos de ') ?> <strong><?php echo($gral_centro_costo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_gral_centro_costo_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaGralCentroCosto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

