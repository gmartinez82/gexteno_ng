<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pdi_pedido_id = Gral::getVars(2, 'id');
$pdi_pedido = PdiPedido::getOxId($pdi_pedido_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pdi_pedido->getNotaPublica())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pdi_pedido->getNotaInterna())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pdi_pedido->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDI_PEDIDO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pdi_pedido->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDI_PEDIDO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pdi_pedido->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_MASINFO_INS_STOCK_MOVIMIENTO')){ ?>
            <li><a href="#tab_ins_stock_movimiento"><?php Lang::_lang('InsStockMovimientos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_MASINFO_PDI_ESTADO')){ ?>
            <li><a href="#tab_pdi_estado"><?php Lang::_lang('PdiEstados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_MASINFO_PDI_PEDIDO_DESTINATARIO')){ ?>
            <li><a href="#tab_pdi_pedido_destinatario"><?php Lang::_lang('PdiPedidoDestinatarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_MASINFO_PDI_COMENTARIO')){ ?>
            <li><a href="#tab_pdi_comentario"><?php Lang::_lang('PdiComentarios') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_MASINFO_INS_STOCK_MOVIMIENTO')){ ?>
	<div id="tab_ins_stock_movimiento" class="bloque-relacion ins_stock_movimiento">
		
            <h4><?php Lang::_lang('InsStockMovimiento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdiPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pdi_pedido->getInsStockMovimientosParaBloqueMasInfo() as $ins_stock_movimiento){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_MASINFO_INS_STOCK_MOVIMIENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_movimiento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_movimiento->getFiltrosArrXCampo('PdiPedido', 'pdi_pedido_id') ?>" >
                                <?php Lang::_lang('Ver InsStockMovimientos de ') ?> <strong><?php echo($pdi_pedido->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_MASINFO_PDI_ESTADO')){ ?>
	<div id="tab_pdi_estado" class="bloque-relacion pdi_estado">
		
            <h4><?php Lang::_lang('PdiEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdiPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pdi_pedido->getPdiEstadosParaBloqueMasInfo() as $pdi_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pdi_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pdi_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pdi_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pdi_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pdi_estado->getId() ?>" archivo="ajax/modulos/pdi_estado/pdi_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdiEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDI_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiEstado') ?>">
                                <a href="pdi_estado_alta.php?id=<?php echo $pdi_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_MASINFO_PDI_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiEstado::getFiltrosArrGral() ?>&arr=<?php echo $pdi_estado->getFiltrosArrXCampo('PdiPedido', 'pdi_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdiEstados de ') ?> <strong><?php echo($pdi_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pdi_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdiEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_MASINFO_PDI_PEDIDO_DESTINATARIO')){ ?>
	<div id="tab_pdi_pedido_destinatario" class="bloque-relacion pdi_pedido_destinatario">
		
            <h4><?php Lang::_lang('PdiPedidoDestinatario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdiPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pdi_pedido->getPdiPedidoDestinatariosParaBloqueMasInfo() as $pdi_pedido_destinatario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pdi_pedido_destinatario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pdi_pedido_destinatario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pdi_pedido_destinatario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_destinatario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pdi_pedido_destinatario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_destinatario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pdi_pedido_destinatario->getId() ?>" archivo="ajax/modulos/pdi_pedido_destinatario/pdi_pedido_destinatario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdiPedidoDestinatario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_DESTINATARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiPedidoDestinatario') ?>">
                                <a href="pdi_pedido_destinatario_alta.php?id=<?php echo $pdi_pedido_destinatario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_MASINFO_PDI_PEDIDO_DESTINATARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_pedido_destinatario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiPedidoDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido_destinatario->getFiltrosArrXCampo('PdiPedido', 'pdi_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdiPedidoDestinatarios de ') ?> <strong><?php echo($pdi_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pdi_pedido_destinatario_alta.php" >
                            <?php Lang::_lang('Agregar PdiPedidoDestinatario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_MASINFO_PDI_COMENTARIO')){ ?>
	<div id="tab_pdi_comentario" class="bloque-relacion pdi_comentario">
		
            <h4><?php Lang::_lang('PdiComentario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdiPedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pdi_pedido->getPdiComentariosParaBloqueMasInfo() as $pdi_comentario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pdi_comentario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pdi_comentario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pdi_comentario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_comentario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pdi_comentario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_comentario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pdi_comentario->getId() ?>" archivo="ajax/modulos/pdi_comentario/pdi_comentario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdiComentario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDI_COMENTARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiComentario') ?>">
                                <a href="pdi_comentario_alta.php?id=<?php echo $pdi_comentario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_MASINFO_PDI_COMENTARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_comentario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiComentario::getFiltrosArrGral() ?>&arr=<?php echo $pdi_comentario->getFiltrosArrXCampo('PdiPedido', 'pdi_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdiComentarios de ') ?> <strong><?php echo($pdi_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pdi_comentario_alta.php" >
                            <?php Lang::_lang('Agregar PdiComentario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

