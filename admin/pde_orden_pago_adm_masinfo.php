<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_orden_pago_id = Gral::getVars(2, 'id');
$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_orden_pago->getDomicilioLegal())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_orden_pago->getCuit())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_orden_pago->getObservacion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_orden_pago->getNotaPublica())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_ORDEN_PAGO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_orden_pago->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_ORDEN_PAGO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_orden_pago->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_RECIBO')){ ?>
            <li><a href="#tab_pde_recibo"><?php Lang::_lang('PdeRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_ESTADO')){ ?>
            <li><a href="#tab_pde_orden_pago_estado"><?php Lang::_lang('PdeOrdenPagoEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_ENVIADO')){ ?>
            <li><a href="#tab_pde_orden_pago_enviado"><?php Lang::_lang('PdeOrdenPagoEnviados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_PDE_FACTURA')){ ?>
            <li><a href="#tab_pde_orden_pago_pde_factura"><?php Lang::_lang('PdeOrdenPagoPdeFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_PDE_NOTA_DEBITO')){ ?>
            <li><a href="#tab_pde_orden_pago_pde_nota_debito"><?php Lang::_lang('PdeOrdenPagoPdeNotaDebito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO')){ ?>
            <li><a href="#tab_pde_orden_pago_gral_fp_forma_pago"><?php Lang::_lang('PdeOrdenPagoGralFpFormaPago') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_CHEQUE')){ ?>
            <li><a href="#tab_pde_orden_pago_gral_fp_forma_pago_cheque"><?php Lang::_lang('PdeOrdenPagoGralFpFormaPagoCheques') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_FND_CHQ_CHEQUE')){ ?>
            <li><a href="#tab_fnd_chq_cheque"><?php Lang::_lang('FndChqCheque') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_RECIBO')){ ?>
	<div id="tab_pde_recibo" class="bloque-relacion pde_recibo">
		
            <h4><?php Lang::_lang('PdeRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOrdenPago') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_orden_pago->getPdeRecibosParaBloqueMasInfo() as $pde_recibo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo->getFiltrosArrXCampo('PdeOrdenPago', 'pde_orden_pago_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecibos de ') ?> <strong><?php echo($pde_orden_pago->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_ESTADO')){ ?>
	<div id="tab_pde_orden_pago_estado" class="bloque-relacion pde_orden_pago_estado">
		
            <h4><?php Lang::_lang('PdeOrdenPagoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOrdenPago') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_orden_pago->getPdeOrdenPagoEstadosParaBloqueMasInfo() as $pde_orden_pago_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_orden_pago_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_orden_pago_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_orden_pago_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_orden_pago_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_orden_pago_estado->getId() ?>" archivo="ajax/modulos/pde_orden_pago_estado/pde_orden_pago_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOrdenPagoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOrdenPagoEstado') ?>">
                                <a href="pde_orden_pago_estado_alta.php?id=<?php echo $pde_orden_pago_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPagoEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago_estado->getFiltrosArrXCampo('PdeOrdenPago', 'pde_orden_pago_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagoEstados de ') ?> <strong><?php echo($pde_orden_pago->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_orden_pago_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdeOrdenPagoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_ENVIADO')){ ?>
	<div id="tab_pde_orden_pago_enviado" class="bloque-relacion pde_orden_pago_enviado">
		
            <h4><?php Lang::_lang('PdeOrdenPagoEnviado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOrdenPago') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_orden_pago->getPdeOrdenPagoEnviadosParaBloqueMasInfo() as $pde_orden_pago_enviado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_orden_pago_enviado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_orden_pago_enviado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_orden_pago_enviado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_enviado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_orden_pago_enviado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_enviado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_orden_pago_enviado->getId() ?>" archivo="ajax/modulos/pde_orden_pago_enviado/pde_orden_pago_enviado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOrdenPagoEnviado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_ENVIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOrdenPagoEnviado') ?>">
                                <a href="pde_orden_pago_enviado_alta.php?id=<?php echo $pde_orden_pago_enviado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_ENVIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago_enviado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPagoEnviado::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago_enviado->getFiltrosArrXCampo('PdeOrdenPago', 'pde_orden_pago_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagoEnviados de ') ?> <strong><?php echo($pde_orden_pago->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_orden_pago_enviado_alta.php" >
                            <?php Lang::_lang('Agregar PdeOrdenPagoEnviado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_PDE_FACTURA')){ ?>
	<div id="tab_pde_orden_pago_pde_factura" class="bloque-relacion pde_orden_pago_pde_factura">
		
            <h4><?php Lang::_lang('PdeOrdenPagoPdeFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOrdenPago') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_orden_pago->getPdeOrdenPagoPdeFacturasParaBloqueMasInfo() as $pde_orden_pago_pde_factura){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_PDE_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago_pde_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPagoPdeFactura::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago_pde_factura->getFiltrosArrXCampo('PdeOrdenPago', 'pde_orden_pago_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagoPdeFacturas de ') ?> <strong><?php echo($pde_orden_pago->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_PDE_NOTA_DEBITO')){ ?>
	<div id="tab_pde_orden_pago_pde_nota_debito" class="bloque-relacion pde_orden_pago_pde_nota_debito">
		
            <h4><?php Lang::_lang('PdeOrdenPagoPdeNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOrdenPago') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_orden_pago->getPdeOrdenPagoPdeNotaDebitosParaBloqueMasInfo() as $pde_orden_pago_pde_nota_debito){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_PDE_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago_pde_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPagoPdeNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago_pde_nota_debito->getFiltrosArrXCampo('PdeOrdenPago', 'pde_orden_pago_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagoPdeNotaDebitos de ') ?> <strong><?php echo($pde_orden_pago->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO')){ ?>
	<div id="tab_pde_orden_pago_gral_fp_forma_pago" class="bloque-relacion pde_orden_pago_gral_fp_forma_pago">
		
            <h4><?php Lang::_lang('PdeOrdenPagoGralFpFormaPago') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOrdenPago') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_orden_pago->getPdeOrdenPagoGralFpFormaPagosParaBloqueMasInfo() as $pde_orden_pago_gral_fp_forma_pago){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_gral_fp_forma_pago->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_gral_fp_forma_pago->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_orden_pago_gral_fp_forma_pago->getId() ?>" archivo="ajax/modulos/pde_orden_pago_gral_fp_forma_pago/pde_orden_pago_gral_fp_forma_pago_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOrdenPagoGralFpFormaPago') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOrdenPagoGralFpFormaPago') ?>">
                                <a href="pde_orden_pago_gral_fp_forma_pago_alta.php?id=<?php echo $pde_orden_pago_gral_fp_forma_pago->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago_gral_fp_forma_pago){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPagoGralFpFormaPago::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago_gral_fp_forma_pago->getFiltrosArrXCampo('PdeOrdenPago', 'pde_orden_pago_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagoGralFpFormaPagos de ') ?> <strong><?php echo($pde_orden_pago->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_orden_pago_gral_fp_forma_pago_alta.php" >
                            <?php Lang::_lang('Agregar PdeOrdenPagoGralFpFormaPago') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_CHEQUE')){ ?>
	<div id="tab_pde_orden_pago_gral_fp_forma_pago_cheque" class="bloque-relacion pde_orden_pago_gral_fp_forma_pago_cheque">
		
            <h4><?php Lang::_lang('PdeOrdenPagoGralFpFormaPagoCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOrdenPago') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_orden_pago->getPdeOrdenPagoGralFpFormaPagoChequesParaBloqueMasInfo() as $pde_orden_pago_gral_fp_forma_pago_cheque){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago_cheque->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago_cheque->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago_cheque->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_gral_fp_forma_pago_cheque->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago_cheque->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_gral_fp_forma_pago_cheque->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_orden_pago_gral_fp_forma_pago_cheque->getId() ?>" archivo="ajax/modulos/pde_orden_pago_gral_fp_forma_pago_cheque/pde_orden_pago_gral_fp_forma_pago_cheque_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOrdenPagoGralFpFormaPagoCheque') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_CHEQUE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOrdenPagoGralFpFormaPagoCheque') ?>">
                                <a href="pde_orden_pago_gral_fp_forma_pago_cheque_alta.php?id=<?php echo $pde_orden_pago_gral_fp_forma_pago_cheque->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago_gral_fp_forma_pago_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPagoGralFpFormaPagoCheque::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago_gral_fp_forma_pago_cheque->getFiltrosArrXCampo('PdeOrdenPago', 'pde_orden_pago_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagoGralFpFormaPagoCheques de ') ?> <strong><?php echo($pde_orden_pago->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_orden_pago_gral_fp_forma_pago_cheque_alta.php" >
                            <?php Lang::_lang('Agregar PdeOrdenPagoGralFpFormaPagoCheque') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_FND_CHQ_CHEQUE')){ ?>
	<div id="tab_fnd_chq_cheque" class="bloque-relacion fnd_chq_cheque">
		
            <h4><?php Lang::_lang('FndChqCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOrdenPago') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_orden_pago->getFndChqChequesParaBloqueMasInfo() as $fnd_chq_cheque){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_MASINFO_FND_CHQ_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqCheque::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_cheque->getFiltrosArrXCampo('PdeOrdenPago', 'pde_orden_pago_id') ?>" >
                                <?php Lang::_lang('Ver FndChqCheques de ') ?> <strong><?php echo($pde_orden_pago->getDescripcion()) ?></strong>
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

