<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_pedido_id = Gral::getVars(2, 'id');
$pde_pedido = PdePedido::getOxId($pde_pedido_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Coment a Proveedor') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_pedido->getComentarioProveedor())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_pedido->getNotaPublica())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_pedido->getNotaInterna())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_pedido->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_PEDIDO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_pedido->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_PEDIDO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_pedido->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_ESTADO')){ ?>
            <li><a href="#tab_pde_estado"><?php Lang::_lang('PdeEstados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_ENVIADO')){ ?>
            <li><a href="#tab_pde_pedido_enviado"><?php Lang::_lang('PdePedidoEnviados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_DESTINATARIO')){ ?>
            <li><a href="#tab_pde_pedido_destinatario"><?php Lang::_lang('PdePedidoDestinatarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_ENVIO_EMAIL')){ ?>
            <li><a href="#tab_pde_pedido_envio_email"><?php Lang::_lang('PdePedidoEnvioEmails') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_PRV_PROVEEDOR')){ ?>
            <li><a href="#tab_pde_pedido_prv_proveedor"><?php Lang::_lang('PdePedidoPrvProveedors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_PRV_PROVEEDOR_AVISADO')){ ?>
            <li><a href="#tab_pde_pedido_prv_proveedor_avisado"><?php Lang::_lang('PdePedidoPrvProveedorAvisados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_COTIZACION')){ ?>
            <li><a href="#tab_pde_cotizacion"><?php Lang::_lang('PdeCotizacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_OC')){ ?>
            <li><a href="#tab_pde_oc"><?php Lang::_lang('PdeOcs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_recepcion"><?php Lang::_lang('PdeRecepcions') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_ESTADO')){ ?>
	<div id="tab_pde_estado" class="bloque-relacion pde_estado">
		
            <h4><?php Lang::_lang('PdeEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdePedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_pedido->getPdeEstadosParaBloqueMasInfo() as $pde_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_estado->getId() ?>" archivo="ajax/modulos/pde_estado/pde_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeEstado') ?>">
                                <a href="pde_estado_alta.php?id=<?php echo $pde_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_estado->getFiltrosArrXCampo('PdePedido', 'pde_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeEstados de ') ?> <strong><?php echo($pde_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdeEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_ENVIADO')){ ?>
	<div id="tab_pde_pedido_enviado" class="bloque-relacion pde_pedido_enviado">
		
            <h4><?php Lang::_lang('PdePedidoEnviado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdePedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_pedido->getPdePedidoEnviadosParaBloqueMasInfo() as $pde_pedido_enviado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_pedido_enviado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_pedido_enviado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_pedido_enviado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_enviado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_pedido_enviado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_enviado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_pedido_enviado->getId() ?>" archivo="ajax/modulos/pde_pedido_enviado/pde_pedido_enviado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdePedidoEnviado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_ENVIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedidoEnviado') ?>">
                                <a href="pde_pedido_enviado_alta.php?id=<?php echo $pde_pedido_enviado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_ENVIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_pedido_enviado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdePedidoEnviado::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido_enviado->getFiltrosArrXCampo('PdePedido', 'pde_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdePedidoEnviados de ') ?> <strong><?php echo($pde_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_pedido_enviado_alta.php" >
                            <?php Lang::_lang('Agregar PdePedidoEnviado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_DESTINATARIO')){ ?>
	<div id="tab_pde_pedido_destinatario" class="bloque-relacion pde_pedido_destinatario">
		
            <h4><?php Lang::_lang('PdePedidoDestinatario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdePedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_pedido->getPdePedidoDestinatariosParaBloqueMasInfo() as $pde_pedido_destinatario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_pedido_destinatario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_pedido_destinatario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_pedido_destinatario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_destinatario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_pedido_destinatario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_destinatario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_pedido_destinatario->getId() ?>" archivo="ajax/modulos/pde_pedido_destinatario/pde_pedido_destinatario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdePedidoDestinatario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_DESTINATARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedidoDestinatario') ?>">
                                <a href="pde_pedido_destinatario_alta.php?id=<?php echo $pde_pedido_destinatario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_DESTINATARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_pedido_destinatario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdePedidoDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido_destinatario->getFiltrosArrXCampo('PdePedido', 'pde_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdePedidoDestinatarios de ') ?> <strong><?php echo($pde_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_pedido_destinatario_alta.php" >
                            <?php Lang::_lang('Agregar PdePedidoDestinatario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_ENVIO_EMAIL')){ ?>
	<div id="tab_pde_pedido_envio_email" class="bloque-relacion pde_pedido_envio_email">
		
            <h4><?php Lang::_lang('PdePedidoEnvioEmail') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdePedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_pedido->getPdePedidoEnvioEmailsParaBloqueMasInfo() as $pde_pedido_envio_email){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_pedido_envio_email->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_pedido_envio_email->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_pedido_envio_email->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_envio_email->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_pedido_envio_email->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_envio_email->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_pedido_envio_email->getId() ?>" archivo="ajax/modulos/pde_pedido_envio_email/pde_pedido_envio_email_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdePedidoEnvioEmail') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_ENVIO_EMAIL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedidoEnvioEmail') ?>">
                                <a href="pde_pedido_envio_email_alta.php?id=<?php echo $pde_pedido_envio_email->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_ENVIO_EMAIL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_pedido_envio_email){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdePedidoEnvioEmail::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido_envio_email->getFiltrosArrXCampo('PdePedido', 'pde_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdePedidoEnvioEmails de ') ?> <strong><?php echo($pde_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_pedido_envio_email_alta.php" >
                            <?php Lang::_lang('Agregar PdePedidoEnvioEmail') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_PRV_PROVEEDOR')){ ?>
	<div id="tab_pde_pedido_prv_proveedor" class="bloque-relacion pde_pedido_prv_proveedor">
		
            <h4><?php Lang::_lang('PdePedidoPrvProveedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdePedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_pedido->getPdePedidoPrvProveedorsParaBloqueMasInfo() as $pde_pedido_prv_proveedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_pedido_prv_proveedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_pedido_prv_proveedor->getDescripcionVinculante('PdePedido')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_pedido_prv_proveedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_prv_proveedor->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_pedido_prv_proveedor->getId() ?>" archivo="ajax/modulos/pde_pedido_prv_proveedor/pde_pedido_prv_proveedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdePedidoPrvProveedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_PRV_PROVEEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedidoPrvProveedor') ?>">
                                <a href="pde_pedido_prv_proveedor_alta.php?id=<?php echo $pde_pedido_prv_proveedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_PRV_PROVEEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_pedido_prv_proveedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdePedidoPrvProveedor::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido_prv_proveedor->getFiltrosArrXCampo('PdePedido', 'pde_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdePedidoPrvProveedors de ') ?> <strong><?php echo($pde_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_pedido_prv_proveedor_alta.php" >
                            <?php Lang::_lang('Agregar PdePedidoPrvProveedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_PRV_PROVEEDOR_AVISADO')){ ?>
	<div id="tab_pde_pedido_prv_proveedor_avisado" class="bloque-relacion pde_pedido_prv_proveedor_avisado">
		
            <h4><?php Lang::_lang('PdePedidoPrvProveedorAvisado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdePedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_pedido->getPdePedidoPrvProveedorAvisadosParaBloqueMasInfo() as $pde_pedido_prv_proveedor_avisado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_prv_proveedor_avisado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_prv_proveedor_avisado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_pedido_prv_proveedor_avisado->getId() ?>" archivo="ajax/modulos/pde_pedido_prv_proveedor_avisado/pde_pedido_prv_proveedor_avisado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdePedidoPrvProveedorAvisado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_PRV_PROVEEDOR_AVISADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedidoPrvProveedorAvisado') ?>">
                                <a href="pde_pedido_prv_proveedor_avisado_alta.php?id=<?php echo $pde_pedido_prv_proveedor_avisado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_PEDIDO_PRV_PROVEEDOR_AVISADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_pedido_prv_proveedor_avisado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdePedidoPrvProveedorAvisado::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido_prv_proveedor_avisado->getFiltrosArrXCampo('PdePedido', 'pde_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdePedidoPrvProveedorAvisados de ') ?> <strong><?php echo($pde_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_pedido_prv_proveedor_avisado_alta.php" >
                            <?php Lang::_lang('Agregar PdePedidoPrvProveedorAvisado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_COTIZACION')){ ?>
	<div id="tab_pde_cotizacion" class="bloque-relacion pde_cotizacion">
		
            <h4><?php Lang::_lang('PdeCotizacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdePedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_pedido->getPdeCotizacionsParaBloqueMasInfo() as $pde_cotizacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_cotizacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_cotizacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_cotizacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_cotizacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_cotizacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_cotizacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_cotizacion->getId() ?>" archivo="ajax/modulos/pde_cotizacion/pde_cotizacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCotizacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_COTIZACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCotizacion') ?>">
                                <a href="pde_cotizacion_alta.php?id=<?php echo $pde_cotizacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_COTIZACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_cotizacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCotizacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_cotizacion->getFiltrosArrXCampo('PdePedido', 'pde_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeCotizacions de ') ?> <strong><?php echo($pde_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_cotizacion_alta.php" >
                            <?php Lang::_lang('Agregar PdeCotizacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_OC')){ ?>
	<div id="tab_pde_oc" class="bloque-relacion pde_oc">
		
            <h4><?php Lang::_lang('PdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdePedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_pedido->getPdeOcsParaBloqueMasInfo() as $pde_oc){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc->getFiltrosArrXCampo('PdePedido', 'pde_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcs de ') ?> <strong><?php echo($pde_pedido->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_RECEPCION')){ ?>
	<div id="tab_pde_recepcion" class="bloque-relacion pde_recepcion">
		
            <h4><?php Lang::_lang('PdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdePedido') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_pedido->getPdeRecepcionsParaBloqueMasInfo() as $pde_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recepcion->getId() ?>" archivo="ajax/modulos/pde_recepcion/pde_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecepcion') ?>">
                                <a href="pde_recepcion_alta.php?id=<?php echo $pde_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_MASINFO_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion->getFiltrosArrXCampo('PdePedido', 'pde_pedido_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcions de ') ?> <strong><?php echo($pde_pedido->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

