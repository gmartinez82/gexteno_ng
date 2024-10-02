<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_orden_venta_tipo_estado_facturacion_id = Gral::getVars(2, 'id');
$vta_orden_venta_tipo_estado_facturacion = VtaOrdenVentaTipoEstadoFacturacion::getOxId($vta_orden_venta_tipo_estado_facturacion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_orden_venta_tipo_estado_facturacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_tipo_estado_facturacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_tipo_estado_facturacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_MASINFO_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_orden_venta"><?php Lang::_lang('VtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_MASINFO_VTA_ORDEN_VENTA_ESTADO_FACTURACION')){ ?>
            <li><a href="#tab_vta_orden_venta_estado_facturacion"><?php Lang::_lang('VtaOrdenVentaEstadoFacturacion') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_MASINFO_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_orden_venta" class="bloque-relacion vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoFacturacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_orden_venta_tipo_estado_facturacion->getVtaOrdenVentasParaBloqueMasInfo() as $vta_orden_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_orden_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_orden_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_orden_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_orden_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_orden_venta->getId() ?>" archivo="ajax/modulos/vta_orden_venta/vta_orden_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaOrdenVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVenta') ?>">
                                <a href="vta_orden_venta_alta.php?id=<?php echo $vta_orden_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_MASINFO_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('VtaOrdenVentaTipoEstadoFacturacion', 'vta_orden_venta_tipo_estado_facturacion_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentas de ') ?> <strong><?php echo($vta_orden_venta_tipo_estado_facturacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_orden_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaOrdenVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_MASINFO_VTA_ORDEN_VENTA_ESTADO_FACTURACION')){ ?>
	<div id="tab_vta_orden_venta_estado_facturacion" class="bloque-relacion vta_orden_venta_estado_facturacion">
		
            <h4><?php Lang::_lang('VtaOrdenVentaEstadoFacturacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoFacturacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_orden_venta_tipo_estado_facturacion->getVtaOrdenVentaEstadoFacturacionsParaBloqueMasInfo() as $vta_orden_venta_estado_facturacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_orden_venta_estado_facturacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_orden_venta_estado_facturacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado_facturacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_facturacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado_facturacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_facturacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_orden_venta_estado_facturacion->getId() ?>" archivo="ajax/modulos/vta_orden_venta_estado_facturacion/vta_orden_venta_estado_facturacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaOrdenVentaEstadoFacturacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ESTADO_FACTURACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVentaEstadoFacturacion') ?>">
                                <a href="vta_orden_venta_estado_facturacion_alta.php?id=<?php echo $vta_orden_venta_estado_facturacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_MASINFO_VTA_ORDEN_VENTA_ESTADO_FACTURACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta_estado_facturacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVentaEstadoFacturacion::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta_estado_facturacion->getFiltrosArrXCampo('VtaOrdenVentaTipoEstadoFacturacion', 'vta_orden_venta_tipo_estado_facturacion_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentaEstadoFacturacions de ') ?> <strong><?php echo($vta_orden_venta_tipo_estado_facturacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_orden_venta_estado_facturacion_alta.php" >
                            <?php Lang::_lang('Agregar VtaOrdenVentaEstadoFacturacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

