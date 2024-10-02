<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_recibo_id = Gral::getVars(2, 'id');
$pde_recibo = PdeRecibo::getOxId($pde_recibo_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Pto Vta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_recibo->getNumeroPuntoVenta())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Recibo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_recibo->getNumeroRecibo())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Numero de Recibo Completo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_recibo->getNumeroReciboCompleto())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_recibo->getDomicilioLegal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_recibo->getCuit())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_recibo->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_recibo->getNotaInterna())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_RECIBO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_recibo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_RECIBO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_recibo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_FACTURA_PDE_RECIBO')){ ?>
            <li><a href="#tab_pde_factura_pde_recibo"><?php Lang::_lang('PdeFacturaPdeRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_NOTA_DEBITO_PDE_RECIBO')){ ?>
            <li><a href="#tab_pde_nota_debito_pde_recibo"><?php Lang::_lang('PdeNotaDebitoPdeRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_IMAGEN')){ ?>
            <li><a href="#tab_pde_recibo_imagen"><?php Lang::_lang('PdeReciboImagens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_ARCHIVO')){ ?>
            <li><a href="#tab_pde_recibo_archivo"><?php Lang::_lang('PdeReciboArchivos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_ESTADO')){ ?>
            <li><a href="#tab_pde_recibo_estado"><?php Lang::_lang('PdeReciboEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_ITEM')){ ?>
            <li><a href="#tab_pde_recibo_item"><?php Lang::_lang('PdeReciboItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_ITEM_CHEQUE')){ ?>
            <li><a href="#tab_pde_recibo_item_cheque"><?php Lang::_lang('PdeReciboItemCheque') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_PDE_TRIBUTO')){ ?>
            <li><a href="#tab_pde_recibo_pde_tributo"><?php Lang::_lang('PdeReciboPdeTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_RECIBO')){ ?>
            <li><a href="#tab_cntb_diario_asiento_pde_recibo"><?php Lang::_lang('CntbDiarioAsientoPdeRecibos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_FND_CHQ_CHEQUE')){ ?>
            <li><a href="#tab_fnd_chq_cheque"><?php Lang::_lang('FndChqCheque') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_FACTURA_PDE_RECIBO')){ ?>
	<div id="tab_pde_factura_pde_recibo" class="bloque-relacion pde_factura_pde_recibo">
		
            <h4><?php Lang::_lang('PdeFacturaPdeRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recibo->getPdeFacturaPdeRecibosParaBloqueMasInfo() as $pde_factura_pde_recibo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_FACTURA_PDE_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_recibo->getFiltrosArrXCampo('PdeRecibo', 'pde_recibo_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeRecibos de ') ?> <strong><?php echo($pde_recibo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_NOTA_DEBITO_PDE_RECIBO')){ ?>
	<div id="tab_pde_nota_debito_pde_recibo" class="bloque-relacion pde_nota_debito_pde_recibo">
		
            <h4><?php Lang::_lang('PdeNotaDebitoPdeRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recibo->getPdeNotaDebitoPdeRecibosParaBloqueMasInfo() as $pde_nota_debito_pde_recibo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_NOTA_DEBITO_PDE_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito_pde_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoPdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_pde_recibo->getFiltrosArrXCampo('PdeRecibo', 'pde_recibo_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitoPdeRecibos de ') ?> <strong><?php echo($pde_recibo->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_IMAGEN')){ ?>
	<div id="tab_pde_recibo_imagen" class="bloque-relacion pde_recibo_imagen">
		
            <h4><?php Lang::_lang('PdeReciboImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recibo->getPdeReciboImagensParaBloqueMasInfo() as $pde_recibo_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($pde_recibo_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($pde_recibo_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo_imagen->getId() ?>" archivo="ajax/modulos/pde_recibo_imagen/pde_recibo_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeReciboImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeReciboImagen') ?>">
                                <a href="pde_recibo_imagen_alta.php?id=<?php echo $pde_recibo_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeReciboImagen::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo_imagen->getFiltrosArrXCampo('PdeRecibo', 'pde_recibo_id') ?>" >
                                <?php Lang::_lang('Ver PdeReciboImagens de ') ?> <strong><?php echo($pde_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_imagen_alta.php" >
                            <?php Lang::_lang('Agregar PdeReciboImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_ARCHIVO')){ ?>
	<div id="tab_pde_recibo_archivo" class="bloque-relacion pde_recibo_archivo">
		
            <h4><?php Lang::_lang('PdeReciboArchivo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recibo->getPdeReciboArchivosParaBloqueMasInfo() as $pde_recibo_archivo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo_archivo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo_archivo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo_archivo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_archivo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo_archivo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_archivo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo_archivo->getId() ?>" archivo="ajax/modulos/pde_recibo_archivo/pde_recibo_archivo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeReciboArchivo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ARCHIVO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeReciboArchivo') ?>">
                                <a href="pde_recibo_archivo_alta.php?id=<?php echo $pde_recibo_archivo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_ARCHIVO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo_archivo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeReciboArchivo::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo_archivo->getFiltrosArrXCampo('PdeRecibo', 'pde_recibo_id') ?>" >
                                <?php Lang::_lang('Ver PdeReciboArchivos de ') ?> <strong><?php echo($pde_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_archivo_alta.php" >
                            <?php Lang::_lang('Agregar PdeReciboArchivo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_ESTADO')){ ?>
	<div id="tab_pde_recibo_estado" class="bloque-relacion pde_recibo_estado">
		
            <h4><?php Lang::_lang('PdeReciboEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recibo->getPdeReciboEstadosParaBloqueMasInfo() as $pde_recibo_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo_estado->getId() ?>" archivo="ajax/modulos/pde_recibo_estado/pde_recibo_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeReciboEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeReciboEstado') ?>">
                                <a href="pde_recibo_estado_alta.php?id=<?php echo $pde_recibo_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeReciboEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo_estado->getFiltrosArrXCampo('PdeRecibo', 'pde_recibo_id') ?>" >
                                <?php Lang::_lang('Ver PdeReciboEstados de ') ?> <strong><?php echo($pde_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdeReciboEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_ITEM')){ ?>
	<div id="tab_pde_recibo_item" class="bloque-relacion pde_recibo_item">
		
            <h4><?php Lang::_lang('PdeReciboItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recibo->getPdeReciboItemsParaBloqueMasInfo() as $pde_recibo_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo_item->getId() ?>" archivo="ajax/modulos/pde_recibo_item/pde_recibo_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeReciboItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeReciboItem') ?>">
                                <a href="pde_recibo_item_alta.php?id=<?php echo $pde_recibo_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeReciboItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo_item->getFiltrosArrXCampo('PdeRecibo', 'pde_recibo_id') ?>" >
                                <?php Lang::_lang('Ver PdeReciboItems de ') ?> <strong><?php echo($pde_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_item_alta.php" >
                            <?php Lang::_lang('Agregar PdeReciboItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_ITEM_CHEQUE')){ ?>
	<div id="tab_pde_recibo_item_cheque" class="bloque-relacion pde_recibo_item_cheque">
		
            <h4><?php Lang::_lang('PdeReciboItemCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recibo->getPdeReciboItemChequesParaBloqueMasInfo() as $pde_recibo_item_cheque){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo_item_cheque->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo_item_cheque->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo_item_cheque->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_item_cheque->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo_item_cheque->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_item_cheque->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo_item_cheque->getId() ?>" archivo="ajax/modulos/pde_recibo_item_cheque/pde_recibo_item_cheque_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeReciboItemCheque') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ITEM_CHEQUE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeReciboItemCheque') ?>">
                                <a href="pde_recibo_item_cheque_alta.php?id=<?php echo $pde_recibo_item_cheque->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_ITEM_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo_item_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeReciboItemCheque::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo_item_cheque->getFiltrosArrXCampo('PdeRecibo', 'pde_recibo_id') ?>" >
                                <?php Lang::_lang('Ver PdeReciboItemCheques de ') ?> <strong><?php echo($pde_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_item_cheque_alta.php" >
                            <?php Lang::_lang('Agregar PdeReciboItemCheque') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_PDE_TRIBUTO')){ ?>
	<div id="tab_pde_recibo_pde_tributo" class="bloque-relacion pde_recibo_pde_tributo">
		
            <h4><?php Lang::_lang('PdeReciboPdeTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recibo->getPdeReciboPdeTributosParaBloqueMasInfo() as $pde_recibo_pde_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo_pde_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo_pde_tributo->getDescripcionVinculante('PdeRecibo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo_pde_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_pde_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo_pde_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_pde_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo_pde_tributo->getId() ?>" archivo="ajax/modulos/pde_recibo_pde_tributo/pde_recibo_pde_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeReciboPdeTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_PDE_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeReciboPdeTributo') ?>">
                                <a href="pde_recibo_pde_tributo_alta.php?id=<?php echo $pde_recibo_pde_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_PDE_RECIBO_PDE_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo_pde_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeReciboPdeTributo::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo_pde_tributo->getFiltrosArrXCampo('PdeRecibo', 'pde_recibo_id') ?>" >
                                <?php Lang::_lang('Ver PdeReciboPdeTributos de ') ?> <strong><?php echo($pde_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_pde_tributo_alta.php" >
                            <?php Lang::_lang('Agregar PdeReciboPdeTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_RECIBO')){ ?>
	<div id="tab_cntb_diario_asiento_pde_recibo" class="bloque-relacion cntb_diario_asiento_pde_recibo">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoPdeRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recibo->getCntbDiarioAsientoPdeRecibosParaBloqueMasInfo() as $cntb_diario_asiento_pde_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_pde_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_pde_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_pde_recibo->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_pde_recibo/cntb_diario_asiento_pde_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoPdeRecibo') ?>">
                                <a href="cntb_diario_asiento_pde_recibo_alta.php?id=<?php echo $cntb_diario_asiento_pde_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_pde_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoPdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_pde_recibo->getFiltrosArrXCampo('PdeRecibo', 'pde_recibo_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoPdeRecibos de ') ?> <strong><?php echo($pde_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_pde_recibo_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoPdeRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_FND_CHQ_CHEQUE')){ ?>
	<div id="tab_fnd_chq_cheque" class="bloque-relacion fnd_chq_cheque">
		
            <h4><?php Lang::_lang('FndChqCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recibo->getFndChqChequesParaBloqueMasInfo() as $fnd_chq_cheque){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_chq_cheque->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_chq_cheque->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_chq_cheque->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_cheque->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_chq_cheque->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_cheque->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_chq_cheque->getId() ?>" archivo="ajax/modulos/fnd_chq_cheque/fnd_chq_cheque_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndChqCheque') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndChqCheque') ?>">
                                <a href="fnd_chq_cheque_alta.php?id=<?php echo $fnd_chq_cheque->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_MASINFO_FND_CHQ_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqCheque::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_cheque->getFiltrosArrXCampo('PdeRecibo', 'pde_recibo_id') ?>" >
                                <?php Lang::_lang('Ver FndChqCheques de ') ?> <strong><?php echo($pde_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_chq_cheque_alta.php" >
                            <?php Lang::_lang('Agregar FndChqCheque') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

