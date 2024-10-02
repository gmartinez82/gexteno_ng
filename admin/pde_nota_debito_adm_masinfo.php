<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_nota_debito_id = Gral::getVars(2, 'id');
$pde_nota_debito = PdeNotaDebito::getOxId($pde_nota_debito_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_debito->getNumeroPuntoVenta())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Nota de Debito') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_debito->getNumeroNotaDebito())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Nota de Debito Completo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_debito->getNumeroNotaDebitoCompleto())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Despacho') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_debito->getNumeroDespacho())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_debito->getDomicilioLegal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_debito->getCuit())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_debito->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_nota_debito->getNotaInterna())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_NOTA_DEBITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_nota_debito->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_NOTA_DEBITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_nota_debito->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_IMAGEN')){ ?>
            <li><a href="#tab_pde_nota_debito_imagen"><?php Lang::_lang('PdeNotaDebitoImagens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_ARCHIVO')){ ?>
            <li><a href="#tab_pde_nota_debito_archivo"><?php Lang::_lang('PdeNotaDebitoArchivos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_ESTADO')){ ?>
            <li><a href="#tab_pde_nota_debito_estado"><?php Lang::_lang('PdeNotaDebitoEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_ITEM')){ ?>
            <li><a href="#tab_pde_nota_debito_item"><?php Lang::_lang('PdeNotaDebitoItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_PDE_TRIBUTO')){ ?>
            <li><a href="#tab_pde_nota_debito_pde_tributo"><?php Lang::_lang('PdeNotaDebitoPdeTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_PDE_NOTA_CREDITO')){ ?>
            <li><a href="#tab_pde_nota_debito_pde_nota_credito"><?php Lang::_lang('PdeNotaDebitoPdeNotaCredito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_PDE_RECIBO')){ ?>
            <li><a href="#tab_pde_nota_debito_pde_recibo"><?php Lang::_lang('PdeNotaDebitoPdeRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_ORDEN_PAGO_PDE_NOTA_DEBITO')){ ?>
            <li><a href="#tab_pde_orden_pago_pde_nota_debito"><?php Lang::_lang('PdeOrdenPagoPdeNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_NOTA_DEBITO')){ ?>
            <li><a href="#tab_cntb_diario_asiento_pde_nota_debito"><?php Lang::_lang('CntbDiarioAsientoPdeNotaDebitos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_AFIP_CITI_COMPRAS_CBTE')){ ?>
            <li><a href="#tab_afip_citi_compras_cbte"><?php Lang::_lang('AfipCitiComprasCbtes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_AFIP_CITI_COMPRAS_ALICUOTAS')){ ?>
            <li><a href="#tab_afip_citi_compras_alicuotas"><?php Lang::_lang('AfipCitiComprasAlicuotass') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_AFIP_CITI_COMPRAS_IMPORTACIONES')){ ?>
            <li><a href="#tab_afip_citi_compras_importaciones"><?php Lang::_lang('AfipCitiComprasImportacioness') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_IMAGEN')){ ?>
	<div id="tab_pde_nota_debito_imagen" class="bloque-relacion pde_nota_debito_imagen">
		
            <h4><?php Lang::_lang('PdeNotaDebitoImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_debito->getPdeNotaDebitoImagensParaBloqueMasInfo() as $pde_nota_debito_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_debito_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($pde_nota_debito_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($pde_nota_debito_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_debito_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_debito_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_debito_imagen->getId() ?>" archivo="ajax/modulos/pde_nota_debito_imagen/pde_nota_debito_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaDebitoImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebitoImagen') ?>">
                                <a href="pde_nota_debito_imagen_alta.php?id=<?php echo $pde_nota_debito_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoImagen::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_imagen->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitoImagens de ') ?> <strong><?php echo($pde_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_debito_imagen_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaDebitoImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_ARCHIVO')){ ?>
	<div id="tab_pde_nota_debito_archivo" class="bloque-relacion pde_nota_debito_archivo">
		
            <h4><?php Lang::_lang('PdeNotaDebitoArchivo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_debito->getPdeNotaDebitoArchivosParaBloqueMasInfo() as $pde_nota_debito_archivo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_debito_archivo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_debito_archivo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_debito_archivo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_archivo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_debito_archivo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_archivo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_debito_archivo->getId() ?>" archivo="ajax/modulos/pde_nota_debito_archivo/pde_nota_debito_archivo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaDebitoArchivo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ARCHIVO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebitoArchivo') ?>">
                                <a href="pde_nota_debito_archivo_alta.php?id=<?php echo $pde_nota_debito_archivo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_ARCHIVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito_archivo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoArchivo::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_archivo->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitoArchivos de ') ?> <strong><?php echo($pde_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_debito_archivo_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaDebitoArchivo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_ESTADO')){ ?>
	<div id="tab_pde_nota_debito_estado" class="bloque-relacion pde_nota_debito_estado">
		
            <h4><?php Lang::_lang('PdeNotaDebitoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_debito->getPdeNotaDebitoEstadosParaBloqueMasInfo() as $pde_nota_debito_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_debito_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_debito_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_debito_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_debito_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_debito_estado->getId() ?>" archivo="ajax/modulos/pde_nota_debito_estado/pde_nota_debito_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaDebitoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebitoEstado') ?>">
                                <a href="pde_nota_debito_estado_alta.php?id=<?php echo $pde_nota_debito_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_estado->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitoEstados de ') ?> <strong><?php echo($pde_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_debito_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaDebitoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_ITEM')){ ?>
	<div id="tab_pde_nota_debito_item" class="bloque-relacion pde_nota_debito_item">
		
            <h4><?php Lang::_lang('PdeNotaDebitoItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_debito->getPdeNotaDebitoItemsParaBloqueMasInfo() as $pde_nota_debito_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_debito_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_debito_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_debito_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_debito_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_debito_item->getId() ?>" archivo="ajax/modulos/pde_nota_debito_item/pde_nota_debito_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaDebitoItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebitoItem') ?>">
                                <a href="pde_nota_debito_item_alta.php?id=<?php echo $pde_nota_debito_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_item->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitoItems de ') ?> <strong><?php echo($pde_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_debito_item_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaDebitoItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_PDE_TRIBUTO')){ ?>
	<div id="tab_pde_nota_debito_pde_tributo" class="bloque-relacion pde_nota_debito_pde_tributo">
		
            <h4><?php Lang::_lang('PdeNotaDebitoPdeTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_debito->getPdeNotaDebitoPdeTributosParaBloqueMasInfo() as $pde_nota_debito_pde_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_debito_pde_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_debito_pde_tributo->getDescripcionVinculante('PdeNotaDebito')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_debito_pde_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_pde_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_debito_pde_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_pde_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_debito_pde_tributo->getId() ?>" archivo="ajax/modulos/pde_nota_debito_pde_tributo/pde_nota_debito_pde_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaDebitoPdeTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_PDE_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebitoPdeTributo') ?>">
                                <a href="pde_nota_debito_pde_tributo_alta.php?id=<?php echo $pde_nota_debito_pde_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_PDE_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito_pde_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoPdeTributo::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_pde_tributo->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitoPdeTributos de ') ?> <strong><?php echo($pde_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_debito_pde_tributo_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaDebitoPdeTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_PDE_NOTA_CREDITO')){ ?>
	<div id="tab_pde_nota_debito_pde_nota_credito" class="bloque-relacion pde_nota_debito_pde_nota_credito">
		
            <h4><?php Lang::_lang('PdeNotaDebitoPdeNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_debito->getPdeNotaDebitoPdeNotaCreditosParaBloqueMasInfo() as $pde_nota_debito_pde_nota_credito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_PDE_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito_pde_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoPdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_pde_nota_credito->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitoPdeNotaCreditos de ') ?> <strong><?php echo($pde_nota_debito->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_PDE_RECIBO')){ ?>
	<div id="tab_pde_nota_debito_pde_recibo" class="bloque-relacion pde_nota_debito_pde_recibo">
		
            <h4><?php Lang::_lang('PdeNotaDebitoPdeRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_debito->getPdeNotaDebitoPdeRecibosParaBloqueMasInfo() as $pde_nota_debito_pde_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_debito_pde_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_debito_pde_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_debito_pde_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_pde_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_debito_pde_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_pde_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_debito_pde_recibo->getId() ?>" archivo="ajax/modulos/pde_nota_debito_pde_recibo/pde_nota_debito_pde_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaDebitoPdeRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_PDE_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebitoPdeRecibo') ?>">
                                <a href="pde_nota_debito_pde_recibo_alta.php?id=<?php echo $pde_nota_debito_pde_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_NOTA_DEBITO_PDE_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito_pde_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoPdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_pde_recibo->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitoPdeRecibos de ') ?> <strong><?php echo($pde_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_debito_pde_recibo_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaDebitoPdeRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_ORDEN_PAGO_PDE_NOTA_DEBITO')){ ?>
	<div id="tab_pde_orden_pago_pde_nota_debito" class="bloque-relacion pde_orden_pago_pde_nota_debito">
		
            <h4><?php Lang::_lang('PdeOrdenPagoPdeNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_debito->getPdeOrdenPagoPdeNotaDebitosParaBloqueMasInfo() as $pde_orden_pago_pde_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_orden_pago_pde_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_orden_pago_pde_nota_debito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_orden_pago_pde_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_pde_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_orden_pago_pde_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_pde_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_orden_pago_pde_nota_debito->getId() ?>" archivo="ajax/modulos/pde_orden_pago_pde_nota_debito/pde_orden_pago_pde_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOrdenPagoPdeNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_PDE_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOrdenPagoPdeNotaDebito') ?>">
                                <a href="pde_orden_pago_pde_nota_debito_alta.php?id=<?php echo $pde_orden_pago_pde_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_PDE_ORDEN_PAGO_PDE_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago_pde_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPagoPdeNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago_pde_nota_debito->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagoPdeNotaDebitos de ') ?> <strong><?php echo($pde_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_orden_pago_pde_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar PdeOrdenPagoPdeNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_NOTA_DEBITO')){ ?>
	<div id="tab_cntb_diario_asiento_pde_nota_debito" class="bloque-relacion cntb_diario_asiento_pde_nota_debito">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoPdeNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_debito->getCntbDiarioAsientoPdeNotaDebitosParaBloqueMasInfo() as $cntb_diario_asiento_pde_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_pde_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_pde_nota_debito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_pde_nota_debito->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_pde_nota_debito/cntb_diario_asiento_pde_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaDebito') ?>">
                                <a href="cntb_diario_asiento_pde_nota_debito_alta.php?id=<?php echo $cntb_diario_asiento_pde_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_pde_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoPdeNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_pde_nota_debito->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoPdeNotaDebitos de ') ?> <strong><?php echo($pde_nota_debito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_pde_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoPdeNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_AFIP_CITI_COMPRAS_CBTE')){ ?>
	<div id="tab_afip_citi_compras_cbte" class="bloque-relacion afip_citi_compras_cbte">
		
            <h4><?php Lang::_lang('AfipCitiComprasCbte') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_debito->getAfipCitiComprasCbtesParaBloqueMasInfo() as $afip_citi_compras_cbte){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_AFIP_CITI_COMPRAS_CBTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_compras_cbte){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiComprasCbte::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_cbte->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiComprasCbtes de ') ?> <strong><?php echo($pde_nota_debito->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_AFIP_CITI_COMPRAS_ALICUOTAS')){ ?>
	<div id="tab_afip_citi_compras_alicuotas" class="bloque-relacion afip_citi_compras_alicuotas">
		
            <h4><?php Lang::_lang('AfipCitiComprasAlicuotas') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_debito->getAfipCitiComprasAlicuotassParaBloqueMasInfo() as $afip_citi_compras_alicuotas){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_AFIP_CITI_COMPRAS_ALICUOTAS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_compras_alicuotas){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiComprasAlicuotas::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_alicuotas->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiComprasAlicuotass de ') ?> <strong><?php echo($pde_nota_debito->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_AFIP_CITI_COMPRAS_IMPORTACIONES')){ ?>
	<div id="tab_afip_citi_compras_importaciones" class="bloque-relacion afip_citi_compras_importaciones">
		
            <h4><?php Lang::_lang('AfipCitiComprasImportaciones') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeNotaDebito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_nota_debito->getAfipCitiComprasImportacionessParaBloqueMasInfo() as $afip_citi_compras_importaciones){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_MASINFO_AFIP_CITI_COMPRAS_IMPORTACIONES_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_compras_importaciones){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiComprasImportaciones::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_importaciones->getFiltrosArrXCampo('PdeNotaDebito', 'pde_nota_debito_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiComprasImportacioness de ') ?> <strong><?php echo($pde_nota_debito->getDescripcion()) ?></strong>
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

