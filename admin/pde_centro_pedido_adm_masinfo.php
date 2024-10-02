<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_centro_pedido_id = Gral::getVars(2, 'id');
$pde_centro_pedido = PdeCentroPedido::getOxId($pde_centro_pedido_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_centro_pedido->getDomicilio())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Empresa') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_centro_pedido->getEmpresa())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('URL Dominio') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_centro_pedido->getUrlDominio())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Email Prefijo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_centro_pedido->getEmailPrefijo())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_centro_pedido->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_centro_pedido->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_CENTRO_PEDIDO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_centro_pedido->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_CENTRO_PEDIDO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_centro_pedido->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PAN_PANOL')){ ?>
            <li><a href="#tab_pan_panol"><?php Lang::_lang('PanPanol') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_PEDIDO')){ ?>
            <li><a href="#tab_pde_pedido"><?php Lang::_lang('PdePedidos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_OC_AGRUPACION')){ ?>
            <li><a href="#tab_pde_oc_agrupacion"><?php Lang::_lang('PdeOcAgrupacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_OC')){ ?>
            <li><a href="#tab_pde_oc"><?php Lang::_lang('PdeOcs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_CENTRO_PEDIDO_US_USUARIO')){ ?>
            <li><a href="#tab_pde_centro_pedido_us_usuario"><?php Lang::_lang('PdeCentroPedidoUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_CENTRO_PEDIDO_EMAIL')){ ?>
            <li><a href="#tab_pde_centro_pedido_email"><?php Lang::_lang('PdeCentroPedidoEmail') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_CENTRO_PEDIDO_PRV_PROVEEDOR')){ ?>
            <li><a href="#tab_pde_centro_pedido_prv_proveedor"><?php Lang::_lang('PdeCentroPedidoPrvProveedors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION')){ ?>
            <li><a href="#tab_pde_centro_pedido_pde_centro_recepcion"><?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_FACTURA')){ ?>
            <li><a href="#tab_pde_factura"><?php Lang::_lang('PdeFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_NOTA_CREDITO')){ ?>
            <li><a href="#tab_pde_nota_credito"><?php Lang::_lang('PdeNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_NOTA_DEBITO')){ ?>
            <li><a href="#tab_pde_nota_debito"><?php Lang::_lang('PdeNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_RECIBO')){ ?>
            <li><a href="#tab_pde_recibo"><?php Lang::_lang('PdeRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_ORDEN_PAGO')){ ?>
            <li><a href="#tab_pde_orden_pago"><?php Lang::_lang('PdeOrdenPagos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PAN_PANOL')){ ?>
	<div id="tab_pan_panol" class="bloque-relacion pan_panol">
		
            <h4><?php Lang::_lang('PanPanol') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_pedido->getPanPanolsParaBloqueMasInfo() as $pan_panol){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PAN_PANOL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pan_panol){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PanPanol::getFiltrosArrGral() ?>&arr=<?php echo $pan_panol->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PanPanols de ') ?> <strong><?php echo($pde_centro_pedido->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_PEDIDO')){ ?>
	<div id="tab_pde_pedido" class="bloque-relacion pde_pedido">
		
            <h4><?php Lang::_lang('PdePedido') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_pedido->getPdePedidosParaBloqueMasInfo() as $pde_pedido){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_pedido->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_pedido->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_pedido->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_pedido->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_pedido->getId() ?>" archivo="ajax/modulos/pde_pedido/pde_pedido_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdePedido') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedido') ?>">
                                <a href="pde_pedido_alta.php?id=<?php echo $pde_pedido->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_PEDIDO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_pedido){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdePedido::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdePedidos de ') ?> <strong><?php echo($pde_centro_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_pedido_alta.php" >
                            <?php Lang::_lang('Agregar PdePedido') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_OC_AGRUPACION')){ ?>
	<div id="tab_pde_oc_agrupacion" class="bloque-relacion pde_oc_agrupacion">
		
            <h4><?php Lang::_lang('PdeOcAgrupacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_pedido->getPdeOcAgrupacionsParaBloqueMasInfo() as $pde_oc_agrupacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_agrupacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_agrupacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_agrupacion->getId() ?>" archivo="ajax/modulos/pde_oc_agrupacion/pde_oc_agrupacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>">
                                <a href="pde_oc_agrupacion_alta.php?id=<?php echo $pde_oc_agrupacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_OC_AGRUPACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_agrupacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_agrupacion->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcAgrupacions de ') ?> <strong><?php echo($pde_centro_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_agrupacion_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcAgrupacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_OC')){ ?>
	<div id="tab_pde_oc" class="bloque-relacion pde_oc">
		
            <h4><?php Lang::_lang('PdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_pedido->getPdeOcsParaBloqueMasInfo() as $pde_oc){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc->getId() ?>" archivo="ajax/modulos/pde_oc/pde_oc_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOc') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOc') ?>">
                                <a href="pde_oc_alta.php?id=<?php echo $pde_oc->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcs de ') ?> <strong><?php echo($pde_centro_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_alta.php" >
                            <?php Lang::_lang('Agregar PdeOc') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_CENTRO_PEDIDO_US_USUARIO')){ ?>
	<div id="tab_pde_centro_pedido_us_usuario" class="bloque-relacion pde_centro_pedido_us_usuario">
		
            <h4><?php Lang::_lang('PdeCentroPedidoUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_pedido->getPdeCentroPedidoUsUsuariosParaBloqueMasInfo() as $pde_centro_pedido_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_centro_pedido_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_centro_pedido_us_usuario->getDescripcionVinculante('PdeCentroPedido')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_centro_pedido_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_centro_pedido_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_centro_pedido_us_usuario->getId() ?>" archivo="ajax/modulos/pde_centro_pedido_us_usuario/pde_centro_pedido_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCentroPedidoUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroPedidoUsUsuario') ?>">
                                <a href="pde_centro_pedido_us_usuario_alta.php?id=<?php echo $pde_centro_pedido_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_CENTRO_PEDIDO_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_centro_pedido_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCentroPedidoUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_pedido_us_usuario->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeCentroPedidoUsUsuarios de ') ?> <strong><?php echo($pde_centro_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_centro_pedido_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar PdeCentroPedidoUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_CENTRO_PEDIDO_EMAIL')){ ?>
	<div id="tab_pde_centro_pedido_email" class="bloque-relacion pde_centro_pedido_email">
		
            <h4><?php Lang::_lang('PdeCentroPedidoEmail') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_pedido->getPdeCentroPedidoEmailsParaBloqueMasInfo() as $pde_centro_pedido_email){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_centro_pedido_email->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_centro_pedido_email->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_centro_pedido_email->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido_email->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_centro_pedido_email->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido_email->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_centro_pedido_email->getId() ?>" archivo="ajax/modulos/pde_centro_pedido_email/pde_centro_pedido_email_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCentroPedidoEmail') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_EMAIL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroPedidoEmail') ?>">
                                <a href="pde_centro_pedido_email_alta.php?id=<?php echo $pde_centro_pedido_email->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_CENTRO_PEDIDO_EMAIL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_centro_pedido_email){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCentroPedidoEmail::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_pedido_email->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeCentroPedidoEmails de ') ?> <strong><?php echo($pde_centro_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_centro_pedido_email_alta.php" >
                            <?php Lang::_lang('Agregar PdeCentroPedidoEmail') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_CENTRO_PEDIDO_PRV_PROVEEDOR')){ ?>
	<div id="tab_pde_centro_pedido_prv_proveedor" class="bloque-relacion pde_centro_pedido_prv_proveedor">
		
            <h4><?php Lang::_lang('PdeCentroPedidoPrvProveedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_pedido->getPdeCentroPedidoPrvProveedorsParaBloqueMasInfo() as $pde_centro_pedido_prv_proveedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_centro_pedido_prv_proveedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_centro_pedido_prv_proveedor->getDescripcionVinculante('PdeCentroPedido')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_centro_pedido_prv_proveedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido_prv_proveedor->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_centro_pedido_prv_proveedor->getId() ?>" archivo="ajax/modulos/pde_centro_pedido_prv_proveedor/pde_centro_pedido_prv_proveedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCentroPedidoPrvProveedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_PRV_PROVEEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroPedidoPrvProveedor') ?>">
                                <a href="pde_centro_pedido_prv_proveedor_alta.php?id=<?php echo $pde_centro_pedido_prv_proveedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_CENTRO_PEDIDO_PRV_PROVEEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_centro_pedido_prv_proveedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCentroPedidoPrvProveedor::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_pedido_prv_proveedor->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeCentroPedidoPrvProveedors de ') ?> <strong><?php echo($pde_centro_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_centro_pedido_prv_proveedor_alta.php" >
                            <?php Lang::_lang('Agregar PdeCentroPedidoPrvProveedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION')){ ?>
	<div id="tab_pde_centro_pedido_pde_centro_recepcion" class="bloque-relacion pde_centro_pedido_pde_centro_recepcion">
		
            <h4><?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_pedido->getPdeCentroPedidoPdeCentroRecepcionsParaBloqueMasInfo() as $pde_centro_pedido_pde_centro_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_centro_pedido_pde_centro_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_centro_pedido_pde_centro_recepcion->getDescripcionVinculante('PdeCentroPedido')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_centro_pedido_pde_centro_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido_pde_centro_recepcion->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_centro_pedido_pde_centro_recepcion->getId() ?>" archivo="ajax/modulos/pde_centro_pedido_pde_centro_recepcion/pde_centro_pedido_pde_centro_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcion') ?>">
                                <a href="pde_centro_pedido_pde_centro_recepcion_alta.php?id=<?php echo $pde_centro_pedido_pde_centro_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_centro_pedido_pde_centro_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCentroPedidoPdeCentroRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_pedido_pde_centro_recepcion->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeCentroPedidoPdeCentroRecepcions de ') ?> <strong><?php echo($pde_centro_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_centro_pedido_pde_centro_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar PdeCentroPedidoPdeCentroRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_FACTURA')){ ?>
	<div id="tab_pde_factura" class="bloque-relacion pde_factura">
		
            <h4><?php Lang::_lang('PdeFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_pedido->getPdeFacturasParaBloqueMasInfo() as $pde_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura->getId() ?>" archivo="ajax/modulos/pde_factura/pde_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFactura') ?>">
                                <a href="pde_factura_alta.php?id=<?php echo $pde_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFactura::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturas de ') ?> <strong><?php echo($pde_centro_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_alta.php" >
                            <?php Lang::_lang('Agregar PdeFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_NOTA_CREDITO')){ ?>
	<div id="tab_pde_nota_credito" class="bloque-relacion pde_nota_credito">
		
            <h4><?php Lang::_lang('PdeNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_pedido->getPdeNotaCreditosParaBloqueMasInfo() as $pde_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito->getId() ?>" archivo="ajax/modulos/pde_nota_credito/pde_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCredito') ?>">
                                <a href="pde_nota_credito_alta.php?id=<?php echo $pde_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditos de ') ?> <strong><?php echo($pde_centro_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_NOTA_DEBITO')){ ?>
	<div id="tab_pde_nota_debito" class="bloque-relacion pde_nota_debito">
		
            <h4><?php Lang::_lang('PdeNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_pedido->getPdeNotaDebitosParaBloqueMasInfo() as $pde_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_debito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_debito->getId() ?>" archivo="ajax/modulos/pde_nota_debito/pde_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebito') ?>">
                                <a href="pde_nota_debito_alta.php?id=<?php echo $pde_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitos de ') ?> <strong><?php echo($pde_centro_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_RECIBO')){ ?>
	<div id="tab_pde_recibo" class="bloque-relacion pde_recibo">
		
            <h4><?php Lang::_lang('PdeRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_pedido->getPdeRecibosParaBloqueMasInfo() as $pde_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo->getId() ?>" archivo="ajax/modulos/pde_recibo/pde_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecibo') ?>">
                                <a href="pde_recibo_alta.php?id=<?php echo $pde_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecibos de ') ?> <strong><?php echo($pde_centro_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_ORDEN_PAGO')){ ?>
	<div id="tab_pde_orden_pago" class="bloque-relacion pde_orden_pago">
		
            <h4><?php Lang::_lang('PdeOrdenPago') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_pedido->getPdeOrdenPagosParaBloqueMasInfo() as $pde_orden_pago){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_orden_pago->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_orden_pago->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_orden_pago->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_orden_pago->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_orden_pago->getId() ?>" archivo="ajax/modulos/pde_orden_pago/pde_orden_pago_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOrdenPago') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOrdenPago') ?>">
                                <a href="pde_orden_pago_alta.php?id=<?php echo $pde_orden_pago->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_MASINFO_PDE_ORDEN_PAGO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPago::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago->getFiltrosArrXCampo('PdeCentroPedido', 'pde_centro_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagos de ') ?> <strong><?php echo($pde_centro_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_orden_pago_alta.php" >
                            <?php Lang::_lang('Agregar PdeOrdenPago') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

