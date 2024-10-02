<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_factura_id = Gral::getVars(2, 'id');
$pde_factura = PdeFactura::getOxId($pde_factura_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_factura->getNumeroPuntoVenta())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Factura') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_factura->getNumeroFactura())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Factura Completo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_factura->getNumeroFacturaCompleto())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Despacho') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_factura->getNumeroDespacho())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_factura->getDomicilioLegal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_factura->getCuit())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_factura->getNotaInterna())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_factura->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_factura->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_FACTURA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_factura->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_IMAGEN')){ ?>
            <li><a href="#tab_pde_factura_imagen"><?php Lang::_lang('PdeFacturaImagens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_ARCHIVO')){ ?>
            <li><a href="#tab_pde_factura_archivo"><?php Lang::_lang('PdeFacturaArchivos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_ESTADO')){ ?>
            <li><a href="#tab_pde_factura_estado"><?php Lang::_lang('PdeFacturaEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_ITEM')){ ?>
            <li><a href="#tab_pde_factura_item"><?php Lang::_lang('PdeFacturaItems') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_TRIBUTO')){ ?>
            <li><a href="#tab_pde_factura_pde_tributo"><?php Lang::_lang('PdeFacturaPdeTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_OC')){ ?>
            <li><a href="#tab_pde_factura_pde_oc"><?php Lang::_lang('PdeFacturaPdeOcs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_factura_pde_recepcion"><?php Lang::_lang('PdeFacturaPdeRecepcions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_RECIBO')){ ?>
            <li><a href="#tab_pde_factura_pde_recibo"><?php Lang::_lang('PdeFacturaPdeRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_NOTA_CREDITO')){ ?>
            <li><a href="#tab_pde_factura_pde_nota_credito"><?php Lang::_lang('PdeFacturaPdeNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_ORDEN_PAGO_PDE_FACTURA')){ ?>
            <li><a href="#tab_pde_orden_pago_pde_factura"><?php Lang::_lang('PdeOrdenPagoPdeFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_CNTB_DIARIO_ASIENTO_PDE_FACTURA')){ ?>
            <li><a href="#tab_cntb_diario_asiento_pde_factura"><?php Lang::_lang('CntbDiarioAsientoPdeFacturas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_AFIP_CITI_COMPRAS_CBTE')){ ?>
            <li><a href="#tab_afip_citi_compras_cbte"><?php Lang::_lang('AfipCitiComprasCbtes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_AFIP_CITI_COMPRAS_ALICUOTAS')){ ?>
            <li><a href="#tab_afip_citi_compras_alicuotas"><?php Lang::_lang('AfipCitiComprasAlicuotass') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_AFIP_CITI_COMPRAS_IMPORTACIONES')){ ?>
            <li><a href="#tab_afip_citi_compras_importaciones"><?php Lang::_lang('AfipCitiComprasImportacioness') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_IMAGEN')){ ?>
	<div id="tab_pde_factura_imagen" class="bloque-relacion pde_factura_imagen">
		
            <h4><?php Lang::_lang('PdeFacturaImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getPdeFacturaImagensParaBloqueMasInfo() as $pde_factura_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($pde_factura_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($pde_factura_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_imagen->getId() ?>" archivo="ajax/modulos/pde_factura_imagen/pde_factura_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaImagen') ?>">
                                <a href="pde_factura_imagen_alta.php?id=<?php echo $pde_factura_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaImagen::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_imagen->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaImagens de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_imagen_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_ARCHIVO')){ ?>
	<div id="tab_pde_factura_archivo" class="bloque-relacion pde_factura_archivo">
		
            <h4><?php Lang::_lang('PdeFacturaArchivo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getPdeFacturaArchivosParaBloqueMasInfo() as $pde_factura_archivo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_archivo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_archivo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_archivo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_archivo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_archivo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_archivo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_archivo->getId() ?>" archivo="ajax/modulos/pde_factura_archivo/pde_factura_archivo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaArchivo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_ARCHIVO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaArchivo') ?>">
                                <a href="pde_factura_archivo_alta.php?id=<?php echo $pde_factura_archivo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_ARCHIVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_archivo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaArchivo::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_archivo->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaArchivos de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_archivo_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaArchivo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_ESTADO')){ ?>
	<div id="tab_pde_factura_estado" class="bloque-relacion pde_factura_estado">
		
            <h4><?php Lang::_lang('PdeFacturaEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getPdeFacturaEstadosParaBloqueMasInfo() as $pde_factura_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_estado->getId() ?>" archivo="ajax/modulos/pde_factura_estado/pde_factura_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaEstado') ?>">
                                <a href="pde_factura_estado_alta.php?id=<?php echo $pde_factura_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_estado->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaEstados de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_ITEM')){ ?>
	<div id="tab_pde_factura_item" class="bloque-relacion pde_factura_item">
		
            <h4><?php Lang::_lang('PdeFacturaItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getPdeFacturaItemsParaBloqueMasInfo() as $pde_factura_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_item->getId() ?>" archivo="ajax/modulos/pde_factura_item/pde_factura_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaItem') ?>">
                                <a href="pde_factura_item_alta.php?id=<?php echo $pde_factura_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_item->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaItems de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_item_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_TRIBUTO')){ ?>
	<div id="tab_pde_factura_pde_tributo" class="bloque-relacion pde_factura_pde_tributo">
		
            <h4><?php Lang::_lang('PdeFacturaPdeTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getPdeFacturaPdeTributosParaBloqueMasInfo() as $pde_factura_pde_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_pde_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_pde_tributo->getDescripcionVinculante('PdeFactura')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_pde_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_pde_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_pde_tributo->getId() ?>" archivo="ajax/modulos/pde_factura_pde_tributo/pde_factura_pde_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaPdeTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaPdeTributo') ?>">
                                <a href="pde_factura_pde_tributo_alta.php?id=<?php echo $pde_factura_pde_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeTributo::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_tributo->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeTributos de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_pde_tributo_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaPdeTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_OC')){ ?>
	<div id="tab_pde_factura_pde_oc" class="bloque-relacion pde_factura_pde_oc">
		
            <h4><?php Lang::_lang('PdeFacturaPdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getPdeFacturaPdeOcsParaBloqueMasInfo() as $pde_factura_pde_oc){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_pde_oc->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_pde_oc->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_pde_oc->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_oc->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_pde_oc->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_oc->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_pde_oc->getId() ?>" archivo="ajax/modulos/pde_factura_pde_oc/pde_factura_pde_oc_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaPdeOc') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_OC_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaPdeOc') ?>">
                                <a href="pde_factura_pde_oc_alta.php?id=<?php echo $pde_factura_pde_oc->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_oc->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeOcs de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_pde_oc_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaPdeOc') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_RECEPCION')){ ?>
	<div id="tab_pde_factura_pde_recepcion" class="bloque-relacion pde_factura_pde_recepcion">
		
            <h4><?php Lang::_lang('PdeFacturaPdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getPdeFacturaPdeRecepcionsParaBloqueMasInfo() as $pde_factura_pde_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_pde_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_pde_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_pde_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_pde_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_pde_recepcion->getId() ?>" archivo="ajax/modulos/pde_factura_pde_recepcion/pde_factura_pde_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaPdeRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaPdeRecepcion') ?>">
                                <a href="pde_factura_pde_recepcion_alta.php?id=<?php echo $pde_factura_pde_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_recepcion->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeRecepcions de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_pde_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaPdeRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_RECIBO')){ ?>
	<div id="tab_pde_factura_pde_recibo" class="bloque-relacion pde_factura_pde_recibo">
		
            <h4><?php Lang::_lang('PdeFacturaPdeRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getPdeFacturaPdeRecibosParaBloqueMasInfo() as $pde_factura_pde_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_pde_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_pde_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_pde_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_pde_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_pde_recibo->getId() ?>" archivo="ajax/modulos/pde_factura_pde_recibo/pde_factura_pde_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaPdeRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaPdeRecibo') ?>">
                                <a href="pde_factura_pde_recibo_alta.php?id=<?php echo $pde_factura_pde_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_recibo->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeRecibos de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_pde_recibo_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaPdeRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_NOTA_CREDITO')){ ?>
	<div id="tab_pde_factura_pde_nota_credito" class="bloque-relacion pde_factura_pde_nota_credito">
		
            <h4><?php Lang::_lang('PdeFacturaPdeNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getPdeFacturaPdeNotaCreditosParaBloqueMasInfo() as $pde_factura_pde_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_pde_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_pde_nota_credito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_pde_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_pde_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_pde_nota_credito->getId() ?>" archivo="ajax/modulos/pde_factura_pde_nota_credito/pde_factura_pde_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaPdeNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaPdeNotaCredito') ?>">
                                <a href="pde_factura_pde_nota_credito_alta.php?id=<?php echo $pde_factura_pde_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_FACTURA_PDE_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_nota_credito->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeNotaCreditos de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_pde_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaPdeNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_ORDEN_PAGO_PDE_FACTURA')){ ?>
	<div id="tab_pde_orden_pago_pde_factura" class="bloque-relacion pde_orden_pago_pde_factura">
		
            <h4><?php Lang::_lang('PdeOrdenPagoPdeFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getPdeOrdenPagoPdeFacturasParaBloqueMasInfo() as $pde_orden_pago_pde_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_orden_pago_pde_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_orden_pago_pde_factura->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_orden_pago_pde_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_pde_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_orden_pago_pde_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_pde_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_orden_pago_pde_factura->getId() ?>" archivo="ajax/modulos/pde_orden_pago_pde_factura/pde_orden_pago_pde_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOrdenPagoPdeFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_PDE_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOrdenPagoPdeFactura') ?>">
                                <a href="pde_orden_pago_pde_factura_alta.php?id=<?php echo $pde_orden_pago_pde_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_PDE_ORDEN_PAGO_PDE_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago_pde_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPagoPdeFactura::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago_pde_factura->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagoPdeFacturas de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_orden_pago_pde_factura_alta.php" >
                            <?php Lang::_lang('Agregar PdeOrdenPagoPdeFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_CNTB_DIARIO_ASIENTO_PDE_FACTURA')){ ?>
	<div id="tab_cntb_diario_asiento_pde_factura" class="bloque-relacion cntb_diario_asiento_pde_factura">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoPdeFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getCntbDiarioAsientoPdeFacturasParaBloqueMasInfo() as $cntb_diario_asiento_pde_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_pde_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_pde_factura->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_pde_factura->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_pde_factura/cntb_diario_asiento_pde_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoPdeFactura') ?>">
                                <a href="cntb_diario_asiento_pde_factura_alta.php?id=<?php echo $cntb_diario_asiento_pde_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_CNTB_DIARIO_ASIENTO_PDE_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_pde_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoPdeFactura::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_pde_factura->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoPdeFacturas de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_pde_factura_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoPdeFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_AFIP_CITI_COMPRAS_CBTE')){ ?>
	<div id="tab_afip_citi_compras_cbte" class="bloque-relacion afip_citi_compras_cbte">
		
            <h4><?php Lang::_lang('AfipCitiComprasCbte') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getAfipCitiComprasCbtesParaBloqueMasInfo() as $afip_citi_compras_cbte){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($afip_citi_compras_cbte->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($afip_citi_compras_cbte->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($afip_citi_compras_cbte->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_cbte->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($afip_citi_compras_cbte->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_cbte->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $afip_citi_compras_cbte->getId() ?>" archivo="ajax/modulos/afip_citi_compras_cbte/afip_citi_compras_cbte_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AfipCitiComprasCbte') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_CBTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AfipCitiComprasCbte') ?>">
                                <a href="afip_citi_compras_cbte_alta.php?id=<?php echo $afip_citi_compras_cbte->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_AFIP_CITI_COMPRAS_CBTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_compras_cbte){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiComprasCbte::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_cbte->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiComprasCbtes de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="afip_citi_compras_cbte_alta.php" >
                            <?php Lang::_lang('Agregar AfipCitiComprasCbte') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_AFIP_CITI_COMPRAS_ALICUOTAS')){ ?>
	<div id="tab_afip_citi_compras_alicuotas" class="bloque-relacion afip_citi_compras_alicuotas">
		
            <h4><?php Lang::_lang('AfipCitiComprasAlicuotas') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getAfipCitiComprasAlicuotassParaBloqueMasInfo() as $afip_citi_compras_alicuotas){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($afip_citi_compras_alicuotas->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($afip_citi_compras_alicuotas->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($afip_citi_compras_alicuotas->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_alicuotas->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($afip_citi_compras_alicuotas->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_alicuotas->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $afip_citi_compras_alicuotas->getId() ?>" archivo="ajax/modulos/afip_citi_compras_alicuotas/afip_citi_compras_alicuotas_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AfipCitiComprasAlicuotas') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_ALICUOTAS_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AfipCitiComprasAlicuotas') ?>">
                                <a href="afip_citi_compras_alicuotas_alta.php?id=<?php echo $afip_citi_compras_alicuotas->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_AFIP_CITI_COMPRAS_ALICUOTAS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_compras_alicuotas){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiComprasAlicuotas::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_alicuotas->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiComprasAlicuotass de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="afip_citi_compras_alicuotas_alta.php" >
                            <?php Lang::_lang('Agregar AfipCitiComprasAlicuotas') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_AFIP_CITI_COMPRAS_IMPORTACIONES')){ ?>
	<div id="tab_afip_citi_compras_importaciones" class="bloque-relacion afip_citi_compras_importaciones">
		
            <h4><?php Lang::_lang('AfipCitiComprasImportaciones') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFactura') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura->getAfipCitiComprasImportacionessParaBloqueMasInfo() as $afip_citi_compras_importaciones){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($afip_citi_compras_importaciones->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($afip_citi_compras_importaciones->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($afip_citi_compras_importaciones->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_importaciones->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($afip_citi_compras_importaciones->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_importaciones->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $afip_citi_compras_importaciones->getId() ?>" archivo="ajax/modulos/afip_citi_compras_importaciones/afip_citi_compras_importaciones_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AfipCitiComprasImportaciones') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_IMPORTACIONES_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AfipCitiComprasImportaciones') ?>">
                                <a href="afip_citi_compras_importaciones_alta.php?id=<?php echo $afip_citi_compras_importaciones->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_MASINFO_AFIP_CITI_COMPRAS_IMPORTACIONES_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_compras_importaciones){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiComprasImportaciones::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_importaciones->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiComprasImportacioness de ') ?> <strong><?php echo($pde_factura->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="afip_citi_compras_importaciones_alta.php" >
                            <?php Lang::_lang('Agregar AfipCitiComprasImportaciones') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

