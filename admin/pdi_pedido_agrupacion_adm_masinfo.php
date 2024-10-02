<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pdi_pedido_agrupacion_id = Gral::getVars(2, 'id');
$pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pdi_pedido_agrupacion->getNotaPublica())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pdi_pedido_agrupacion->getNotaInterna())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pdi_pedido_agrupacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDI_PEDIDO_AGRUPACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pdi_pedido_agrupacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDI_PEDIDO_AGRUPACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pdi_pedido_agrupacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_MASINFO_PDI_PEDIDO')){ ?>
            <li><a href="#tab_pdi_pedido"><?php Lang::_lang('PdiPedidos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_MASINFO_PDI_PEDIDO_AGRUPACION_ESTADO')){ ?>
            <li><a href="#tab_pdi_pedido_agrupacion_estado"><?php Lang::_lang('PdiPedidoAgrupacionEstados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_MASINFO_PDI_PEDIDO_AGRUPACION_ENVIADO')){ ?>
            <li><a href="#tab_pdi_pedido_agrupacion_enviado"><?php Lang::_lang('PdiPedidoAgrupacionEnviado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_MASINFO_PDI_PEDIDO_AGRUPACION_ITEM')){ ?>
            <li><a href="#tab_pdi_pedido_agrupacion_item"><?php Lang::_lang('PdiPedidoAgrupacionItems') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_MASINFO_PDI_PEDIDO')){ ?>
	<div id="tab_pdi_pedido" class="bloque-relacion pdi_pedido">
		
            <h4><?php Lang::_lang('PdiPedido') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdiPedidoAgrupacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pdi_pedido_agrupacion->getPdiPedidosParaBloqueMasInfo() as $pdi_pedido){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pdi_pedido->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pdi_pedido->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pdi_pedido->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pdi_pedido->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pdi_pedido->getId() ?>" archivo="ajax/modulos/pdi_pedido/pdi_pedido_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdiPedido') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiPedido') ?>">
                                <a href="pdi_pedido_alta.php?id=<?php echo $pdi_pedido->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_MASINFO_PDI_PEDIDO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_pedido){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiPedido::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido->getFiltrosArrXCampo('PdiPedidoAgrupacion', 'pdi_pedido_agrupacion_id') ?>" >
                                <?php Lang::_lang('Ver PdiPedidos de ') ?> <strong><?php echo($pdi_pedido_agrupacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pdi_pedido_alta.php" >
                            <?php Lang::_lang('Agregar PdiPedido') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_MASINFO_PDI_PEDIDO_AGRUPACION_ESTADO')){ ?>
	<div id="tab_pdi_pedido_agrupacion_estado" class="bloque-relacion pdi_pedido_agrupacion_estado">
		
            <h4><?php Lang::_lang('PdiPedidoAgrupacionEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdiPedidoAgrupacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pdi_pedido_agrupacion->getPdiPedidoAgrupacionEstadosParaBloqueMasInfo() as $pdi_pedido_agrupacion_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pdi_pedido_agrupacion_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pdi_pedido_agrupacion_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pdi_pedido_agrupacion_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pdi_pedido_agrupacion_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pdi_pedido_agrupacion_estado->getId() ?>" archivo="ajax/modulos/pdi_pedido_agrupacion_estado/pdi_pedido_agrupacion_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdiPedidoAgrupacionEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiPedidoAgrupacionEstado') ?>">
                                <a href="pdi_pedido_agrupacion_estado_alta.php?id=<?php echo $pdi_pedido_agrupacion_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_MASINFO_PDI_PEDIDO_AGRUPACION_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_pedido_agrupacion_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiPedidoAgrupacionEstado::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido_agrupacion_estado->getFiltrosArrXCampo('PdiPedidoAgrupacion', 'pdi_pedido_agrupacion_id') ?>" >
                                <?php Lang::_lang('Ver PdiPedidoAgrupacionEstados de ') ?> <strong><?php echo($pdi_pedido_agrupacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pdi_pedido_agrupacion_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdiPedidoAgrupacionEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_MASINFO_PDI_PEDIDO_AGRUPACION_ENVIADO')){ ?>
	<div id="tab_pdi_pedido_agrupacion_enviado" class="bloque-relacion pdi_pedido_agrupacion_enviado">
		
            <h4><?php Lang::_lang('PdiPedidoAgrupacionEnviado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdiPedidoAgrupacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pdi_pedido_agrupacion->getPdiPedidoAgrupacionEnviadosParaBloqueMasInfo() as $pdi_pedido_agrupacion_enviado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pdi_pedido_agrupacion_enviado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion_enviado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pdi_pedido_agrupacion_enviado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion_enviado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pdi_pedido_agrupacion_enviado->getId() ?>" archivo="ajax/modulos/pdi_pedido_agrupacion_enviado/pdi_pedido_agrupacion_enviado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdiPedidoAgrupacionEnviado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ENVIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiPedidoAgrupacionEnviado') ?>">
                                <a href="pdi_pedido_agrupacion_enviado_alta.php?id=<?php echo $pdi_pedido_agrupacion_enviado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_MASINFO_PDI_PEDIDO_AGRUPACION_ENVIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_pedido_agrupacion_enviado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiPedidoAgrupacionEnviado::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido_agrupacion_enviado->getFiltrosArrXCampo('PdiPedidoAgrupacion', 'pdi_pedido_agrupacion_id') ?>" >
                                <?php Lang::_lang('Ver PdiPedidoAgrupacionEnviados de ') ?> <strong><?php echo($pdi_pedido_agrupacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pdi_pedido_agrupacion_enviado_alta.php" >
                            <?php Lang::_lang('Agregar PdiPedidoAgrupacionEnviado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_MASINFO_PDI_PEDIDO_AGRUPACION_ITEM')){ ?>
	<div id="tab_pdi_pedido_agrupacion_item" class="bloque-relacion pdi_pedido_agrupacion_item">
		
            <h4><?php Lang::_lang('PdiPedidoAgrupacionItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdiPedidoAgrupacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pdi_pedido_agrupacion->getPdiPedidoAgrupacionItemsParaBloqueMasInfo() as $pdi_pedido_agrupacion_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pdi_pedido_agrupacion_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pdi_pedido_agrupacion_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pdi_pedido_agrupacion_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pdi_pedido_agrupacion_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pdi_pedido_agrupacion_item->getId() ?>" archivo="ajax/modulos/pdi_pedido_agrupacion_item/pdi_pedido_agrupacion_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdiPedidoAgrupacionItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiPedidoAgrupacionItem') ?>">
                                <a href="pdi_pedido_agrupacion_item_alta.php?id=<?php echo $pdi_pedido_agrupacion_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_MASINFO_PDI_PEDIDO_AGRUPACION_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_pedido_agrupacion_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiPedidoAgrupacionItem::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido_agrupacion_item->getFiltrosArrXCampo('PdiPedidoAgrupacion', 'pdi_pedido_agrupacion_id') ?>" >
                                <?php Lang::_lang('Ver PdiPedidoAgrupacionItems de ') ?> <strong><?php echo($pdi_pedido_agrupacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pdi_pedido_agrupacion_item_alta.php" >
                            <?php Lang::_lang('Agregar PdiPedidoAgrupacionItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

