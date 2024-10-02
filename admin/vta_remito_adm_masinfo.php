<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_remito_id = Gral::getVars(2, 'id');
$vta_remito = VtaRemito::getOxId($vta_remito_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaHoraToWeb($vta_remito->getFecha()))) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_remito->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_REMITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_remito->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_REMITO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_remito->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_MASINFO_VTA_REMITO_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_remito_vta_orden_venta"><?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_MASINFO_VTA_REMITO_ESTADO')){ ?>
            <li><a href="#tab_vta_remito_estado"><?php Lang::_lang('VtaRemitoEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_MASINFO_VTA_REMITO_ENVIADO')){ ?>
            <li><a href="#tab_vta_remito_enviado"><?php Lang::_lang('VtaRemitoEnviado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_MASINFO_INS_STOCK_MOVIMIENTO')){ ?>
            <li><a href="#tab_ins_stock_movimiento"><?php Lang::_lang('InsStockMovimientos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_REMITO_MASINFO_VTA_REMITO_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_remito_vta_orden_venta" class="bloque-relacion vta_remito_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRemito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_remito->getVtaRemitoVtaOrdenVentasParaBloqueMasInfo() as $vta_remito_vta_orden_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito_vta_orden_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito_vta_orden_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito_vta_orden_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_vta_orden_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito_vta_orden_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_vta_orden_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito_vta_orden_venta->getId() ?>" archivo="ajax/modulos/vta_remito_vta_orden_venta/vta_remito_vta_orden_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_VTA_ORDEN_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemitoVtaOrdenVenta') ?>">
                                <a href="vta_remito_vta_orden_venta_alta.php?id=<?php echo $vta_remito_vta_orden_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_MASINFO_VTA_REMITO_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemitoVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_vta_orden_venta->getFiltrosArrXCampo('VtaRemito', 'vta_remito_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitoVtaOrdenVentas de ') ?> <strong><?php echo($vta_remito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_vta_orden_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemitoVtaOrdenVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_REMITO_MASINFO_VTA_REMITO_ESTADO')){ ?>
	<div id="tab_vta_remito_estado" class="bloque-relacion vta_remito_estado">
		
            <h4><?php Lang::_lang('VtaRemitoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRemito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_remito->getVtaRemitoEstadosParaBloqueMasInfo() as $vta_remito_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito_estado->getId() ?>" archivo="ajax/modulos/vta_remito_estado/vta_remito_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemitoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemitoEstado') ?>">
                                <a href="vta_remito_estado_alta.php?id=<?php echo $vta_remito_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_MASINFO_VTA_REMITO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemitoEstado::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_estado->getFiltrosArrXCampo('VtaRemito', 'vta_remito_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitoEstados de ') ?> <strong><?php echo($vta_remito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_estado_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemitoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_REMITO_MASINFO_VTA_REMITO_ENVIADO')){ ?>
	<div id="tab_vta_remito_enviado" class="bloque-relacion vta_remito_enviado">
		
            <h4><?php Lang::_lang('VtaRemitoEnviado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRemito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_remito->getVtaRemitoEnviadosParaBloqueMasInfo() as $vta_remito_enviado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito_enviado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito_enviado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito_enviado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_enviado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito_enviado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_enviado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito_enviado->getId() ?>" archivo="ajax/modulos/vta_remito_enviado/vta_remito_enviado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemitoEnviado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ENVIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemitoEnviado') ?>">
                                <a href="vta_remito_enviado_alta.php?id=<?php echo $vta_remito_enviado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_MASINFO_VTA_REMITO_ENVIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito_enviado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemitoEnviado::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_enviado->getFiltrosArrXCampo('VtaRemito', 'vta_remito_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitoEnviados de ') ?> <strong><?php echo($vta_remito->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_enviado_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemitoEnviado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_REMITO_MASINFO_INS_STOCK_MOVIMIENTO')){ ?>
	<div id="tab_ins_stock_movimiento" class="bloque-relacion ins_stock_movimiento">
		
            <h4><?php Lang::_lang('InsStockMovimiento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaRemito') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_remito->getInsStockMovimientosParaBloqueMasInfo() as $ins_stock_movimiento){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_MASINFO_INS_STOCK_MOVIMIENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_movimiento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_movimiento->getFiltrosArrXCampo('VtaRemito', 'vta_remito_id') ?>" >
                                <?php Lang::_lang('Ver InsStockMovimientos de ') ?> <strong><?php echo($vta_remito->getDescripcion()) ?></strong>
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
	
</div>

