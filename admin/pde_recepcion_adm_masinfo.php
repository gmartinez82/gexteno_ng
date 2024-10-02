<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_recepcion_id = Gral::getVars(2, 'id');
$pde_recepcion = PdeRecepcion::getOxId($pde_recepcion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_recepcion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_RECEPCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_recepcion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_RECEPCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_recepcion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_INS_STOCK_MOVIMIENTO')){ ?>
            <li><a href="#tab_ins_stock_movimiento"><?php Lang::_lang('InsStockMovimientos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_PDE_RECEPCION_ESTADO')){ ?>
            <li><a href="#tab_pde_recepcion_estado"><?php Lang::_lang('PdeRecepcionEstados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_PDE_RECEPCION_ESTADO_FACTURACION')){ ?>
            <li><a href="#tab_pde_recepcion_estado_facturacion"><?php Lang::_lang('PdeRecepcionEstadoFacturacion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_PDE_RECEPCION_DESTINATARIO')){ ?>
            <li><a href="#tab_pde_recepcion_destinatario"><?php Lang::_lang('PdeRecepcionDestinatarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_PDE_FACTURA_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_factura_pde_recepcion"><?php Lang::_lang('PdeFacturaPdeRecepcions') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_INS_STOCK_MOVIMIENTO')){ ?>
	<div id="tab_ins_stock_movimiento" class="bloque-relacion ins_stock_movimiento">
		
            <h4><?php Lang::_lang('InsStockMovimiento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recepcion->getInsStockMovimientosParaBloqueMasInfo() as $ins_stock_movimiento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_stock_movimiento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_stock_movimiento->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_stock_movimiento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_movimiento->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_stock_movimiento->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_movimiento->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_stock_movimiento->getId() ?>" archivo="ajax/modulos/ins_stock_movimiento/ins_stock_movimiento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsStockMovimiento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_STOCK_MOVIMIENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsStockMovimiento') ?>">
                                <a href="ins_stock_movimiento_alta.php?id=<?php echo $ins_stock_movimiento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_INS_STOCK_MOVIMIENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_movimiento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_movimiento->getFiltrosArrXCampo('PdeRecepcion', 'pde_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver InsStockMovimientos de ') ?> <strong><?php echo($pde_recepcion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_stock_movimiento_alta.php" >
                            <?php Lang::_lang('Agregar InsStockMovimiento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_PDE_RECEPCION_ESTADO')){ ?>
	<div id="tab_pde_recepcion_estado" class="bloque-relacion pde_recepcion_estado">
		
            <h4><?php Lang::_lang('PdeRecepcionEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recepcion->getPdeRecepcionEstadosParaBloqueMasInfo() as $pde_recepcion_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recepcion_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recepcion_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recepcion_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recepcion_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recepcion_estado->getId() ?>" archivo="ajax/modulos/pde_recepcion_estado/pde_recepcion_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecepcionEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecepcionEstado') ?>">
                                <a href="pde_recepcion_estado_alta.php?id=<?php echo $pde_recepcion_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_PDE_RECEPCION_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcionEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion_estado->getFiltrosArrXCampo('PdeRecepcion', 'pde_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcionEstados de ') ?> <strong><?php echo($pde_recepcion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recepcion_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecepcionEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_PDE_RECEPCION_ESTADO_FACTURACION')){ ?>
	<div id="tab_pde_recepcion_estado_facturacion" class="bloque-relacion pde_recepcion_estado_facturacion">
		
            <h4><?php Lang::_lang('PdeRecepcionEstadoFacturacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recepcion->getPdeRecepcionEstadoFacturacionsParaBloqueMasInfo() as $pde_recepcion_estado_facturacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recepcion_estado_facturacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recepcion_estado_facturacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recepcion_estado_facturacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_estado_facturacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recepcion_estado_facturacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_estado_facturacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recepcion_estado_facturacion->getId() ?>" archivo="ajax/modulos/pde_recepcion_estado_facturacion/pde_recepcion_estado_facturacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecepcionEstadoFacturacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ESTADO_FACTURACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecepcionEstadoFacturacion') ?>">
                                <a href="pde_recepcion_estado_facturacion_alta.php?id=<?php echo $pde_recepcion_estado_facturacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_PDE_RECEPCION_ESTADO_FACTURACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion_estado_facturacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcionEstadoFacturacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion_estado_facturacion->getFiltrosArrXCampo('PdeRecepcion', 'pde_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcionEstadoFacturacions de ') ?> <strong><?php echo($pde_recepcion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recepcion_estado_facturacion_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecepcionEstadoFacturacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_PDE_RECEPCION_DESTINATARIO')){ ?>
	<div id="tab_pde_recepcion_destinatario" class="bloque-relacion pde_recepcion_destinatario">
		
            <h4><?php Lang::_lang('PdeRecepcionDestinatario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recepcion->getPdeRecepcionDestinatariosParaBloqueMasInfo() as $pde_recepcion_destinatario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recepcion_destinatario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recepcion_destinatario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recepcion_destinatario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_destinatario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recepcion_destinatario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_destinatario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recepcion_destinatario->getId() ?>" archivo="ajax/modulos/pde_recepcion_destinatario/pde_recepcion_destinatario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecepcionDestinatario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_DESTINATARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecepcionDestinatario') ?>">
                                <a href="pde_recepcion_destinatario_alta.php?id=<?php echo $pde_recepcion_destinatario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_PDE_RECEPCION_DESTINATARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion_destinatario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcionDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion_destinatario->getFiltrosArrXCampo('PdeRecepcion', 'pde_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcionDestinatarios de ') ?> <strong><?php echo($pde_recepcion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recepcion_destinatario_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecepcionDestinatario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_PDE_FACTURA_PDE_RECEPCION')){ ?>
	<div id="tab_pde_factura_pde_recepcion" class="bloque-relacion pde_factura_pde_recepcion">
		
            <h4><?php Lang::_lang('PdeFacturaPdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recepcion->getPdeFacturaPdeRecepcionsParaBloqueMasInfo() as $pde_factura_pde_recepcion){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_MASINFO_PDE_FACTURA_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_recepcion->getFiltrosArrXCampo('PdeRecepcion', 'pde_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeRecepcions de ') ?> <strong><?php echo($pde_recepcion->getDescripcion()) ?></strong>
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
	
</div>

