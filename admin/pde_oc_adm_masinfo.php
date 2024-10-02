<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_oc_id = Gral::getVars(2, 'id');
$pde_oc = PdeOc::getOxId($pde_oc_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_oc->getNotaPublica())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_oc->getNotaInterna())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_oc->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_OC_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_oc->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_OC_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_oc->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ESTADO')){ ?>
            <li><a href="#tab_pde_oc_estado"><?php Lang::_lang('PdeOcEstados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ESTADO_RECEPCION')){ ?>
            <li><a href="#tab_pde_oc_estado_recepcion"><?php Lang::_lang('PdeOcEstadoRecepcion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ESTADO_FACTURACION')){ ?>
            <li><a href="#tab_pde_oc_estado_facturacion"><?php Lang::_lang('PdeOcEstadoFacturacion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ENVIADO')){ ?>
            <li><a href="#tab_pde_oc_enviado"><?php Lang::_lang('PdeOcEnviados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_DESTINATARIO')){ ?>
            <li><a href="#tab_pde_oc_destinatario"><?php Lang::_lang('PdeOcDestinatario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ENVIO_EMAIL')){ ?>
            <li><a href="#tab_pde_oc_envio_email"><?php Lang::_lang('PdeOcEnvioEmails') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_recepcion"><?php Lang::_lang('PdeRecepcions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_RECLAMO')){ ?>
            <li><a href="#tab_pde_oc_reclamo"><?php Lang::_lang('PdeOcReclamos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_FACTURA_PDE_OC')){ ?>
            <li><a href="#tab_pde_factura_pde_oc"><?php Lang::_lang('PdeFacturaPdeOcs') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ESTADO')){ ?>
	<div id="tab_pde_oc_estado" class="bloque-relacion pde_oc_estado">
		
            <h4><?php Lang::_lang('PdeOcEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc->getPdeOcEstadosParaBloqueMasInfo() as $pde_oc_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_estado->getId() ?>" archivo="ajax/modulos/pde_oc_estado/pde_oc_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcEstado') ?>">
                                <a href="pde_oc_estado_alta.php?id=<?php echo $pde_oc_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_estado->getFiltrosArrXCampo('PdeOc', 'pde_oc_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcEstados de ') ?> <strong><?php echo($pde_oc->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ESTADO_RECEPCION')){ ?>
	<div id="tab_pde_oc_estado_recepcion" class="bloque-relacion pde_oc_estado_recepcion">
		
            <h4><?php Lang::_lang('PdeOcEstadoRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc->getPdeOcEstadoRecepcionsParaBloqueMasInfo() as $pde_oc_estado_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_estado_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_estado_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_estado_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_estado_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_estado_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_estado_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_estado_recepcion->getId() ?>" archivo="ajax/modulos/pde_oc_estado_recepcion/pde_oc_estado_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcEstadoRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_ESTADO_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcEstadoRecepcion') ?>">
                                <a href="pde_oc_estado_recepcion_alta.php?id=<?php echo $pde_oc_estado_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ESTADO_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_estado_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcEstadoRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_estado_recepcion->getFiltrosArrXCampo('PdeOc', 'pde_oc_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcEstadoRecepcions de ') ?> <strong><?php echo($pde_oc->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_estado_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcEstadoRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ESTADO_FACTURACION')){ ?>
	<div id="tab_pde_oc_estado_facturacion" class="bloque-relacion pde_oc_estado_facturacion">
		
            <h4><?php Lang::_lang('PdeOcEstadoFacturacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc->getPdeOcEstadoFacturacionsParaBloqueMasInfo() as $pde_oc_estado_facturacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_estado_facturacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_estado_facturacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_estado_facturacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_estado_facturacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_estado_facturacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_estado_facturacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_estado_facturacion->getId() ?>" archivo="ajax/modulos/pde_oc_estado_facturacion/pde_oc_estado_facturacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcEstadoFacturacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_ESTADO_FACTURACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcEstadoFacturacion') ?>">
                                <a href="pde_oc_estado_facturacion_alta.php?id=<?php echo $pde_oc_estado_facturacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ESTADO_FACTURACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_estado_facturacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcEstadoFacturacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_estado_facturacion->getFiltrosArrXCampo('PdeOc', 'pde_oc_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcEstadoFacturacions de ') ?> <strong><?php echo($pde_oc->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_estado_facturacion_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcEstadoFacturacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ENVIADO')){ ?>
	<div id="tab_pde_oc_enviado" class="bloque-relacion pde_oc_enviado">
		
            <h4><?php Lang::_lang('PdeOcEnviado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc->getPdeOcEnviadosParaBloqueMasInfo() as $pde_oc_enviado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_enviado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_enviado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_enviado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_enviado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_enviado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_enviado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_enviado->getId() ?>" archivo="ajax/modulos/pde_oc_enviado/pde_oc_enviado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcEnviado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_ENVIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcEnviado') ?>">
                                <a href="pde_oc_enviado_alta.php?id=<?php echo $pde_oc_enviado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ENVIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_enviado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcEnviado::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_enviado->getFiltrosArrXCampo('PdeOc', 'pde_oc_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcEnviados de ') ?> <strong><?php echo($pde_oc->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_enviado_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcEnviado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_DESTINATARIO')){ ?>
	<div id="tab_pde_oc_destinatario" class="bloque-relacion pde_oc_destinatario">
		
            <h4><?php Lang::_lang('PdeOcDestinatario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc->getPdeOcDestinatariosParaBloqueMasInfo() as $pde_oc_destinatario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_destinatario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_destinatario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_destinatario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_destinatario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_destinatario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_destinatario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_destinatario->getId() ?>" archivo="ajax/modulos/pde_oc_destinatario/pde_oc_destinatario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcDestinatario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_DESTINATARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcDestinatario') ?>">
                                <a href="pde_oc_destinatario_alta.php?id=<?php echo $pde_oc_destinatario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_DESTINATARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_destinatario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcDestinatario::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_destinatario->getFiltrosArrXCampo('PdeOc', 'pde_oc_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcDestinatarios de ') ?> <strong><?php echo($pde_oc->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_destinatario_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcDestinatario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ENVIO_EMAIL')){ ?>
	<div id="tab_pde_oc_envio_email" class="bloque-relacion pde_oc_envio_email">
		
            <h4><?php Lang::_lang('PdeOcEnvioEmail') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc->getPdeOcEnvioEmailsParaBloqueMasInfo() as $pde_oc_envio_email){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_envio_email->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_envio_email->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_envio_email->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_envio_email->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_envio_email->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_envio_email->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_envio_email->getId() ?>" archivo="ajax/modulos/pde_oc_envio_email/pde_oc_envio_email_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcEnvioEmail') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_ENVIO_EMAIL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcEnvioEmail') ?>">
                                <a href="pde_oc_envio_email_alta.php?id=<?php echo $pde_oc_envio_email->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_ENVIO_EMAIL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_envio_email){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcEnvioEmail::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_envio_email->getFiltrosArrXCampo('PdeOc', 'pde_oc_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcEnvioEmails de ') ?> <strong><?php echo($pde_oc->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_envio_email_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcEnvioEmail') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_RECEPCION')){ ?>
	<div id="tab_pde_recepcion" class="bloque-relacion pde_recepcion">
		
            <h4><?php Lang::_lang('PdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc->getPdeRecepcionsParaBloqueMasInfo() as $pde_recepcion){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion->getFiltrosArrXCampo('PdeOc', 'pde_oc_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcions de ') ?> <strong><?php echo($pde_oc->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_RECLAMO')){ ?>
	<div id="tab_pde_oc_reclamo" class="bloque-relacion pde_oc_reclamo">
		
            <h4><?php Lang::_lang('PdeOcReclamo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc->getPdeOcReclamosParaBloqueMasInfo() as $pde_oc_reclamo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_reclamo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_reclamo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_reclamo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_reclamo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_reclamo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_reclamo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_reclamo->getId() ?>" archivo="ajax/modulos/pde_oc_reclamo/pde_oc_reclamo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcReclamo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_RECLAMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcReclamo') ?>">
                                <a href="pde_oc_reclamo_alta.php?id=<?php echo $pde_oc_reclamo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_OC_RECLAMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_reclamo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcReclamo::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_reclamo->getFiltrosArrXCampo('PdeOc', 'pde_oc_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcReclamos de ') ?> <strong><?php echo($pde_oc->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_reclamo_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcReclamo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_FACTURA_PDE_OC')){ ?>
	<div id="tab_pde_factura_pde_oc" class="bloque-relacion pde_factura_pde_oc">
		
            <h4><?php Lang::_lang('PdeFacturaPdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc->getPdeFacturaPdeOcsParaBloqueMasInfo() as $pde_factura_pde_oc){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_MASINFO_PDE_FACTURA_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_oc->getFiltrosArrXCampo('PdeOc', 'pde_oc_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeOcs de ') ?> <strong><?php echo($pde_oc->getDescripcion()) ?></strong>
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
	
</div>

