<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_nota_credito_id = Gral::getVars(2, 'id');
$pde_nota_credito = PdeNotaCredito::getOxId($pde_nota_credito_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_credito->getNumeroPuntoVenta())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Nota de Credito') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_credito->getNumeroNotaCredito())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Nota de Credito Completo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_credito->getNumeroNotaCreditoCompleto())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Despacho') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_credito->getNumeroDespacho())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_credito->getDomicilioLegal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_credito->getCuit())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_credito->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_credito->getNotaInterna())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_NOTA_CREDITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_nota_credito->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_NOTA_CREDITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_nota_credito->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_FACTURA_PDE_NOTA_CREDITO')){ ?>
            <li><a href="#tab_pde_factura_pde_nota_credito"><?php Lang::_lang('PdeFacturaPdeNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_IMAGEN')){ ?>
            <li><a href="#tab_pde_nota_credito_imagen"><?php Lang::_lang('PdeNotaCreditoImagens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_ARCHIVO')){ ?>
            <li><a href="#tab_pde_nota_credito_archivo"><?php Lang::_lang('PdeNotaCreditoArchivos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_ESTADO')){ ?>
            <li><a href="#tab_pde_nota_credito_estado"><?php Lang::_lang('PdeNotaCreditoEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_nota_credito_pde_factura_pde_recepcion"><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC')){ ?>
            <li><a href="#tab_pde_nota_credito_pde_factura_pde_oc"><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_TRIBUTO')){ ?>
            <li><a href="#tab_pde_nota_credito_pde_factura_pde_tributo"><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_ITEM')){ ?>
            <li><a href="#tab_pde_nota_credito_item"><?php Lang::_lang('PdeNotaCreditoItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_PDE_TRIBUTO')){ ?>
            <li><a href="#tab_pde_nota_credito_pde_tributo"><?php Lang::_lang('PdeNotaCreditoPdeTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_DEBITO_PDE_NOTA_CREDITO')){ ?>
            <li><a href="#tab_pde_nota_debito_pde_nota_credito"><?php Lang::_lang('PdeNotaDebitoPdeNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_NOTA_CREDITO')){ ?>
            <li><a href="#tab_cntb_diario_asiento_pde_nota_credito"><?php Lang::_lang('CntbDiarioAsientoPdeNotaCreditos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_AFIP_CITI_COMPRAS_CBTE')){ ?>
            <li><a href="#tab_afip_citi_compras_cbte"><?php Lang::_lang('AfipCitiComprasCbtes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_AFIP_CITI_COMPRAS_ALICUOTAS')){ ?>
            <li><a href="#tab_afip_citi_compras_alicuotas"><?php Lang::_lang('AfipCitiComprasAlicuotass') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_AFIP_CITI_COMPRAS_IMPORTACIONES')){ ?>
            <li><a href="#tab_afip_citi_compras_importaciones"><?php Lang::_lang('AfipCitiComprasImportacioness') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_FACTURA_PDE_NOTA_CREDITO')){ ?>
	<div id="tab_pde_factura_pde_nota_credito" class="bloque-relacion pde_factura_pde_nota_credito">
		
            <h4><?php Lang::_lang('PdeFacturaPdeNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getPdeFacturaPdeNotaCreditosParaBloqueMasInfo() as $pde_factura_pde_nota_credito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_FACTURA_PDE_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_nota_credito->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeNotaCreditos de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_IMAGEN')){ ?>
	<div id="tab_pde_nota_credito_imagen" class="bloque-relacion pde_nota_credito_imagen">
		
            <h4><?php Lang::_lang('PdeNotaCreditoImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getPdeNotaCreditoImagensParaBloqueMasInfo() as $pde_nota_credito_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($pde_nota_credito_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($pde_nota_credito_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_imagen->getId() ?>" archivo="ajax/modulos/pde_nota_credito_imagen/pde_nota_credito_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoImagen') ?>">
                                <a href="pde_nota_credito_imagen_alta.php?id=<?php echo $pde_nota_credito_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoImagen::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_imagen->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoImagens de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_imagen_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_ARCHIVO')){ ?>
	<div id="tab_pde_nota_credito_archivo" class="bloque-relacion pde_nota_credito_archivo">
		
            <h4><?php Lang::_lang('PdeNotaCreditoArchivo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getPdeNotaCreditoArchivosParaBloqueMasInfo() as $pde_nota_credito_archivo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_archivo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_archivo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_archivo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_archivo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_archivo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_archivo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_archivo->getId() ?>" archivo="ajax/modulos/pde_nota_credito_archivo/pde_nota_credito_archivo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoArchivo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ARCHIVO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoArchivo') ?>">
                                <a href="pde_nota_credito_archivo_alta.php?id=<?php echo $pde_nota_credito_archivo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_ARCHIVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_archivo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoArchivo::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_archivo->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoArchivos de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_archivo_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoArchivo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_ESTADO')){ ?>
	<div id="tab_pde_nota_credito_estado" class="bloque-relacion pde_nota_credito_estado">
		
            <h4><?php Lang::_lang('PdeNotaCreditoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getPdeNotaCreditoEstadosParaBloqueMasInfo() as $pde_nota_credito_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_estado->getId() ?>" archivo="ajax/modulos/pde_nota_credito_estado/pde_nota_credito_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoEstado') ?>">
                                <a href="pde_nota_credito_estado_alta.php?id=<?php echo $pde_nota_credito_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_estado->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoEstados de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION')){ ?>
	<div id="tab_pde_nota_credito_pde_factura_pde_recepcion" class="bloque-relacion pde_nota_credito_pde_factura_pde_recepcion">
		
            <h4><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getPdeNotaCreditoPdeFacturaPdeRecepcionsParaBloqueMasInfo() as $pde_nota_credito_pde_factura_pde_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_pde_factura_pde_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_pde_factura_pde_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_factura_pde_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_factura_pde_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_pde_factura_pde_recepcion->getId() ?>" archivo="ajax/modulos/pde_nota_credito_pde_factura_pde_recepcion/pde_nota_credito_pde_factura_pde_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeRecepcion') ?>">
                                <a href="pde_nota_credito_pde_factura_pde_recepcion_alta.php?id=<?php echo $pde_nota_credito_pde_factura_pde_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_pde_factura_pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeFacturaPdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_factura_pde_recepcion->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoPdeFacturaPdeRecepcions de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_pde_factura_pde_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoPdeFacturaPdeRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC')){ ?>
	<div id="tab_pde_nota_credito_pde_factura_pde_oc" class="bloque-relacion pde_nota_credito_pde_factura_pde_oc">
		
            <h4><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getPdeNotaCreditoPdeFacturaPdeOcsParaBloqueMasInfo() as $pde_nota_credito_pde_factura_pde_oc){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_pde_factura_pde_oc->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_pde_factura_pde_oc->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_factura_pde_oc->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_oc->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_factura_pde_oc->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_oc->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_pde_factura_pde_oc->getId() ?>" archivo="ajax/modulos/pde_nota_credito_pde_factura_pde_oc/pde_nota_credito_pde_factura_pde_oc_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeOc') ?>">
                                <a href="pde_nota_credito_pde_factura_pde_oc_alta.php?id=<?php echo $pde_nota_credito_pde_factura_pde_oc->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_pde_factura_pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeFacturaPdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_factura_pde_oc->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoPdeFacturaPdeOcs de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_pde_factura_pde_oc_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoPdeFacturaPdeOc') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_TRIBUTO')){ ?>
	<div id="tab_pde_nota_credito_pde_factura_pde_tributo" class="bloque-relacion pde_nota_credito_pde_factura_pde_tributo">
		
            <h4><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getPdeNotaCreditoPdeFacturaPdeTributosParaBloqueMasInfo() as $pde_nota_credito_pde_factura_pde_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getDescripcionVinculante('PdeNotaCredito')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_pde_factura_pde_tributo->getId() ?>" archivo="ajax/modulos/pde_nota_credito_pde_factura_pde_tributo/pde_nota_credito_pde_factura_pde_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_FACTURA_PDE_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeTributo') ?>">
                                <a href="pde_nota_credito_pde_factura_pde_tributo_alta.php?id=<?php echo $pde_nota_credito_pde_factura_pde_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_pde_factura_pde_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeFacturaPdeTributo::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_factura_pde_tributo->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoPdeFacturaPdeTributos de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_pde_factura_pde_tributo_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoPdeFacturaPdeTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_ITEM')){ ?>
	<div id="tab_pde_nota_credito_item" class="bloque-relacion pde_nota_credito_item">
		
            <h4><?php Lang::_lang('PdeNotaCreditoItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getPdeNotaCreditoItemsParaBloqueMasInfo() as $pde_nota_credito_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_item->getId() ?>" archivo="ajax/modulos/pde_nota_credito_item/pde_nota_credito_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoItem') ?>">
                                <a href="pde_nota_credito_item_alta.php?id=<?php echo $pde_nota_credito_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_item->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoItems de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_item_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_PDE_TRIBUTO')){ ?>
	<div id="tab_pde_nota_credito_pde_tributo" class="bloque-relacion pde_nota_credito_pde_tributo">
		
            <h4><?php Lang::_lang('PdeNotaCreditoPdeTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getPdeNotaCreditoPdeTributosParaBloqueMasInfo() as $pde_nota_credito_pde_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_pde_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_pde_tributo->getDescripcionVinculante('PdeNotaCredito')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_pde_tributo->getId() ?>" archivo="ajax/modulos/pde_nota_credito_pde_tributo/pde_nota_credito_pde_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoPdeTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoPdeTributo') ?>">
                                <a href="pde_nota_credito_pde_tributo_alta.php?id=<?php echo $pde_nota_credito_pde_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_CREDITO_PDE_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_pde_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeTributo::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_tributo->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoPdeTributos de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_pde_tributo_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoPdeTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_DEBITO_PDE_NOTA_CREDITO')){ ?>
	<div id="tab_pde_nota_debito_pde_nota_credito" class="bloque-relacion pde_nota_debito_pde_nota_credito">
		
            <h4><?php Lang::_lang('PdeNotaDebitoPdeNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getPdeNotaDebitoPdeNotaCreditosParaBloqueMasInfo() as $pde_nota_debito_pde_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_debito_pde_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_pde_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_debito_pde_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_pde_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_debito_pde_nota_credito->getId() ?>" archivo="ajax/modulos/pde_nota_debito_pde_nota_credito/pde_nota_debito_pde_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaDebitoPdeNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_PDE_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebitoPdeNotaCredito') ?>">
                                <a href="pde_nota_debito_pde_nota_credito_alta.php?id=<?php echo $pde_nota_debito_pde_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_PDE_NOTA_DEBITO_PDE_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito_pde_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoPdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_pde_nota_credito->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitoPdeNotaCreditos de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_debito_pde_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaDebitoPdeNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_NOTA_CREDITO')){ ?>
	<div id="tab_cntb_diario_asiento_pde_nota_credito" class="bloque-relacion cntb_diario_asiento_pde_nota_credito">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoPdeNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getCntbDiarioAsientoPdeNotaCreditosParaBloqueMasInfo() as $cntb_diario_asiento_pde_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_pde_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_pde_nota_credito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_pde_nota_credito->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_pde_nota_credito/cntb_diario_asiento_pde_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaCredito') ?>">
                                <a href="cntb_diario_asiento_pde_nota_credito_alta.php?id=<?php echo $cntb_diario_asiento_pde_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_pde_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoPdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_pde_nota_credito->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoPdeNotaCreditos de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_pde_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoPdeNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_AFIP_CITI_COMPRAS_CBTE')){ ?>
	<div id="tab_afip_citi_compras_cbte" class="bloque-relacion afip_citi_compras_cbte">
		
            <h4><?php Lang::_lang('AfipCitiComprasCbte') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getAfipCitiComprasCbtesParaBloqueMasInfo() as $afip_citi_compras_cbte){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_AFIP_CITI_COMPRAS_CBTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_compras_cbte){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiComprasCbte::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_cbte->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiComprasCbtes de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_AFIP_CITI_COMPRAS_ALICUOTAS')){ ?>
	<div id="tab_afip_citi_compras_alicuotas" class="bloque-relacion afip_citi_compras_alicuotas">
		
            <h4><?php Lang::_lang('AfipCitiComprasAlicuotas') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getAfipCitiComprasAlicuotassParaBloqueMasInfo() as $afip_citi_compras_alicuotas){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_AFIP_CITI_COMPRAS_ALICUOTAS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_compras_alicuotas){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiComprasAlicuotas::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_alicuotas->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiComprasAlicuotass de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_AFIP_CITI_COMPRAS_IMPORTACIONES')){ ?>
	<div id="tab_afip_citi_compras_importaciones" class="bloque-relacion afip_citi_compras_importaciones">
		
            <h4><?php Lang::_lang('AfipCitiComprasImportaciones') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaCredito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_credito->getAfipCitiComprasImportacionessParaBloqueMasInfo() as $afip_citi_compras_importaciones){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_MASINFO_AFIP_CITI_COMPRAS_IMPORTACIONES_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_compras_importaciones){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiComprasImportaciones::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_importaciones->getFiltrosArrXCampo('PdeNotaCredito', 'pde_nota_credito_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiComprasImportacioness de ') ?> <strong><?php echo($pde_nota_credito->getDescripcion()) ?></strong>
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

