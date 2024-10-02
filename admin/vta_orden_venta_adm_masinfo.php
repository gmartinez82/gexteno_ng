<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_orden_venta_id = Gral::getVars(2, 'id');
$vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_orden_venta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_ORDEN_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_orden_venta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_ORDEN_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_orden_venta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_ESTADO')){ ?>
            <li><a href="#tab_vta_orden_venta_estado"><?php Lang::_lang('VtaOrdenVentaEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_ESTADO_FACTURACION')){ ?>
            <li><a href="#tab_vta_orden_venta_estado_facturacion"><?php Lang::_lang('VtaOrdenVentaEstadoFacturacion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_ESTADO_REMISION')){ ?>
            <li><a href="#tab_vta_orden_venta_estado_remision"><?php Lang::_lang('VtaOrdenVentaEstadoRemision') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_ESTADO_COBRO')){ ?>
            <li><a href="#tab_vta_orden_venta_estado_cobro"><?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_VTA_RECIBO')){ ?>
            <li><a href="#tab_vta_orden_venta_vta_recibo"><?php Lang::_lang('VtaOrdenVentaVtaRecibos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_REMITO_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_remito_vta_orden_venta"><?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_factura_vta_orden_venta"><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_ESTADO')){ ?>
	<div id="tab_vta_orden_venta_estado" class="bloque-relacion vta_orden_venta_estado">
		
            <h4><?php Lang::_lang('VtaOrdenVentaEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaOrdenVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_orden_venta->getVtaOrdenVentaEstadosParaBloqueMasInfo() as $vta_orden_venta_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_orden_venta_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_orden_venta_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_orden_venta_estado->getId() ?>" archivo="ajax/modulos/vta_orden_venta_estado/vta_orden_venta_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaOrdenVentaEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVentaEstado') ?>">
                                <a href="vta_orden_venta_estado_alta.php?id=<?php echo $vta_orden_venta_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVentaEstado::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta_estado->getFiltrosArrXCampo('VtaOrdenVenta', 'vta_orden_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentaEstados de ') ?> <strong><?php echo($vta_orden_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_orden_venta_estado_alta.php" >
                            <?php Lang::_lang('Agregar VtaOrdenVentaEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_ESTADO_FACTURACION')){ ?>
	<div id="tab_vta_orden_venta_estado_facturacion" class="bloque-relacion vta_orden_venta_estado_facturacion">
		
            <h4><?php Lang::_lang('VtaOrdenVentaEstadoFacturacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaOrdenVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_orden_venta->getVtaOrdenVentaEstadoFacturacionsParaBloqueMasInfo() as $vta_orden_venta_estado_facturacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_orden_venta_estado_facturacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_orden_venta_estado_facturacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado_facturacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_facturacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado_facturacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_facturacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_orden_venta_estado_facturacion->getId() ?>" archivo="ajax/modulos/vta_orden_venta_estado_facturacion/vta_orden_venta_estado_facturacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaOrdenVentaEstadoFacturacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ESTADO_FACTURACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVentaEstadoFacturacion') ?>">
                                <a href="vta_orden_venta_estado_facturacion_alta.php?id=<?php echo $vta_orden_venta_estado_facturacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_ESTADO_FACTURACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta_estado_facturacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVentaEstadoFacturacion::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta_estado_facturacion->getFiltrosArrXCampo('VtaOrdenVenta', 'vta_orden_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentaEstadoFacturacions de ') ?> <strong><?php echo($vta_orden_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_orden_venta_estado_facturacion_alta.php" >
                            <?php Lang::_lang('Agregar VtaOrdenVentaEstadoFacturacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_ESTADO_REMISION')){ ?>
	<div id="tab_vta_orden_venta_estado_remision" class="bloque-relacion vta_orden_venta_estado_remision">
		
            <h4><?php Lang::_lang('VtaOrdenVentaEstadoRemision') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaOrdenVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_orden_venta->getVtaOrdenVentaEstadoRemisionsParaBloqueMasInfo() as $vta_orden_venta_estado_remision){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_orden_venta_estado_remision->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_orden_venta_estado_remision->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado_remision->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_remision->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado_remision->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_remision->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_orden_venta_estado_remision->getId() ?>" archivo="ajax/modulos/vta_orden_venta_estado_remision/vta_orden_venta_estado_remision_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaOrdenVentaEstadoRemision') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ESTADO_REMISION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVentaEstadoRemision') ?>">
                                <a href="vta_orden_venta_estado_remision_alta.php?id=<?php echo $vta_orden_venta_estado_remision->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_ESTADO_REMISION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta_estado_remision){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVentaEstadoRemision::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta_estado_remision->getFiltrosArrXCampo('VtaOrdenVenta', 'vta_orden_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentaEstadoRemisions de ') ?> <strong><?php echo($vta_orden_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_orden_venta_estado_remision_alta.php" >
                            <?php Lang::_lang('Agregar VtaOrdenVentaEstadoRemision') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_ESTADO_COBRO')){ ?>
	<div id="tab_vta_orden_venta_estado_cobro" class="bloque-relacion vta_orden_venta_estado_cobro">
		
            <h4><?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaOrdenVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_orden_venta->getVtaOrdenVentaEstadoCobrosParaBloqueMasInfo() as $vta_orden_venta_estado_cobro){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_orden_venta_estado_cobro->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_orden_venta_estado_cobro->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado_cobro->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_cobro->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado_cobro->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_cobro->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_orden_venta_estado_cobro->getId() ?>" archivo="ajax/modulos/vta_orden_venta_estado_cobro/vta_orden_venta_estado_cobro_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ESTADO_COBRO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?>">
                                <a href="vta_orden_venta_estado_cobro_alta.php?id=<?php echo $vta_orden_venta_estado_cobro->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_ESTADO_COBRO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta_estado_cobro){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVentaEstadoCobro::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta_estado_cobro->getFiltrosArrXCampo('VtaOrdenVenta', 'vta_orden_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentaEstadoCobros de ') ?> <strong><?php echo($vta_orden_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_orden_venta_estado_cobro_alta.php" >
                            <?php Lang::_lang('Agregar VtaOrdenVentaEstadoCobro') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_VTA_RECIBO')){ ?>
	<div id="tab_vta_orden_venta_vta_recibo" class="bloque-relacion vta_orden_venta_vta_recibo">
		
            <h4><?php Lang::_lang('VtaOrdenVentaVtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaOrdenVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_orden_venta->getVtaOrdenVentaVtaRecibosParaBloqueMasInfo() as $vta_orden_venta_vta_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_orden_venta_vta_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_orden_venta_vta_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_orden_venta_vta_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_vta_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_orden_venta_vta_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_vta_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_orden_venta_vta_recibo->getId() ?>" archivo="ajax/modulos/vta_orden_venta_vta_recibo/vta_orden_venta_vta_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaOrdenVentaVtaRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_VTA_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVentaVtaRecibo') ?>">
                                <a href="vta_orden_venta_vta_recibo_alta.php?id=<?php echo $vta_orden_venta_vta_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_ORDEN_VENTA_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta_vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVentaVtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta_vta_recibo->getFiltrosArrXCampo('VtaOrdenVenta', 'vta_orden_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentaVtaRecibos de ') ?> <strong><?php echo($vta_orden_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_orden_venta_vta_recibo_alta.php" >
                            <?php Lang::_lang('Agregar VtaOrdenVentaVtaRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_REMITO_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_remito_vta_orden_venta" class="bloque-relacion vta_remito_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaOrdenVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_orden_venta->getVtaRemitoVtaOrdenVentasParaBloqueMasInfo() as $vta_remito_vta_orden_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito_vta_orden_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito_vta_orden_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito_vta_orden_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_vta_orden_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito_vta_orden_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_vta_orden_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito_vta_orden_venta->getId() ?>" archivo="ajax/modulos/vta_remito_vta_orden_venta/vta_remito_vta_orden_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_VTA_ORDEN_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?>">
                                <a href="vta_remito_vta_orden_venta_alta.php?id=<?php echo $vta_remito_vta_orden_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_REMITO_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemitoVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_vta_orden_venta->getFiltrosArrXCampo('VtaOrdenVenta', 'vta_orden_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitoVtaOrdenVentas de ') ?> <strong><?php echo($vta_orden_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_vta_orden_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemitoVtaOrdenVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_factura_vta_orden_venta" class="bloque-relacion vta_factura_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaOrdenVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_orden_venta->getVtaFacturaVtaOrdenVentasParaBloqueMasInfo() as $vta_factura_vta_orden_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura_vta_orden_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura_vta_orden_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura_vta_orden_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_orden_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura_vta_orden_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_orden_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura_vta_orden_venta->getId() ?>" archivo="ajax/modulos/vta_factura_vta_orden_venta/vta_factura_vta_orden_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_ORDEN_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?>">
                                <a href="vta_factura_vta_orden_venta_alta.php?id=<?php echo $vta_factura_vta_orden_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_MASINFO_VTA_FACTURA_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_vta_orden_venta->getFiltrosArrXCampo('VtaOrdenVenta', 'vta_orden_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaVtaOrdenVentas de ') ?> <strong><?php echo($vta_orden_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_vta_orden_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaFacturaVtaOrdenVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

