<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pdi_pedido_agrupacion_tipo_estado_id = Gral::getVars(2, 'id');
$pdi_pedido_agrupacion_tipo_estado = PdiPedidoAgrupacionTipoEstado::getOxId($pdi_pedido_agrupacion_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pdi_pedido_agrupacion_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pdi_pedido_agrupacion_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pdi_pedido_agrupacion_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_MASINFO_PDI_PEDIDO_AGRUPACION')){ ?>
            <li><a href="#tab_pdi_pedido_agrupacion"><?php Lang::_lang('PdiPedidoAgrupacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_MASINFO_PDI_PEDIDO_AGRUPACION_ESTADO')){ ?>
            <li><a href="#tab_pdi_pedido_agrupacion_estado"><?php Lang::_lang('PdiPedidoAgrupacionEstados') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_MASINFO_PDI_PEDIDO_AGRUPACION')){ ?>
	<div id="tab_pdi_pedido_agrupacion" class="bloque-relacion pdi_pedido_agrupacion">
		
            <h4><?php Lang::_lang('PdiPedidoAgrupacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdiPedidoAgrupacionTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pdi_pedido_agrupacion_tipo_estado->getPdiPedidoAgrupacionsParaBloqueMasInfo() as $pdi_pedido_agrupacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pdi_pedido_agrupacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pdi_pedido_agrupacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pdi_pedido_agrupacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pdi_pedido_agrupacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido_agrupacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pdi_pedido_agrupacion->getId() ?>" archivo="ajax/modulos/pdi_pedido_agrupacion/pdi_pedido_agrupacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdiPedidoAgrupacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiPedidoAgrupacion') ?>">
                                <a href="pdi_pedido_agrupacion_alta.php?id=<?php echo $pdi_pedido_agrupacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_MASINFO_PDI_PEDIDO_AGRUPACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_pedido_agrupacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiPedidoAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido_agrupacion->getFiltrosArrXCampo('PdiPedidoAgrupacionTipoEstado', 'pdi_pedido_agrupacion_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver PdiPedidoAgrupacions de ') ?> <strong><?php echo($pdi_pedido_agrupacion_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pdi_pedido_agrupacion_alta.php" >
                            <?php Lang::_lang('Agregar PdiPedidoAgrupacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_MASINFO_PDI_PEDIDO_AGRUPACION_ESTADO')){ ?>
	<div id="tab_pdi_pedido_agrupacion_estado" class="bloque-relacion pdi_pedido_agrupacion_estado">
		
            <h4><?php Lang::_lang('PdiPedidoAgrupacionEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdiPedidoAgrupacionTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pdi_pedido_agrupacion_tipo_estado->getPdiPedidoAgrupacionEstadosParaBloqueMasInfo() as $pdi_pedido_agrupacion_estado){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_TIPO_ESTADO_MASINFO_PDI_PEDIDO_AGRUPACION_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_pedido_agrupacion_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiPedidoAgrupacionEstado::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido_agrupacion_estado->getFiltrosArrXCampo('PdiPedidoAgrupacionTipoEstado', 'pdi_pedido_agrupacion_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver PdiPedidoAgrupacionEstados de ') ?> <strong><?php echo($pdi_pedido_agrupacion_tipo_estado->getDescripcion()) ?></strong>
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
	
</div>

