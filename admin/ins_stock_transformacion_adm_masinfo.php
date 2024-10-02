<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_stock_transformacion_id = Gral::getVars(2, 'id');
$ins_stock_transformacion = InsStockTransformacion::getOxId($ins_stock_transformacion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_stock_transformacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_STOCK_TRANSFORMACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_transformacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_stock_transformacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_STOCK_TRANSFORMACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_transformacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_stock_transformacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_MASINFO_INS_INSUMO_COSTO')){ ?>
            <li><a href="#tab_ins_insumo_costo"><?php Lang::_lang('InsInsumoCostos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_MASINFO_INS_STOCK_TRANSFORMACION_DESTINO')){ ?>
            <li><a href="#tab_ins_stock_transformacion_destino"><?php Lang::_lang('InsStockTransformacionDestinos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_MASINFO_INS_STOCK_MOVIMIENTO')){ ?>
            <li><a href="#tab_ins_stock_movimiento"><?php Lang::_lang('InsStockMovimientos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_MASINFO_INS_INSUMO_COSTO')){ ?>
	<div id="tab_ins_insumo_costo" class="bloque-relacion ins_insumo_costo">
		
            <h4><?php Lang::_lang('InsInsumoCosto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsStockTransformacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_stock_transformacion->getInsInsumoCostosParaBloqueMasInfo() as $ins_insumo_costo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_costo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_costo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_costo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_costo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_costo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_costo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_costo->getId() ?>" archivo="ajax/modulos/ins_insumo_costo/ins_insumo_costo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoCosto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_COSTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoCosto') ?>">
                                <a href="ins_insumo_costo_alta.php?id=<?php echo $ins_insumo_costo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_MASINFO_INS_INSUMO_COSTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_costo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoCosto::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_costo->getFiltrosArrXCampo('InsStockTransformacion', 'ins_stock_transformacion_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoCostos de ') ?> <strong><?php echo($ins_stock_transformacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_costo_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoCosto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_MASINFO_INS_STOCK_TRANSFORMACION_DESTINO')){ ?>
	<div id="tab_ins_stock_transformacion_destino" class="bloque-relacion ins_stock_transformacion_destino">
		
            <h4><?php Lang::_lang('InsStockTransformacionDestino') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsStockTransformacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_stock_transformacion->getInsStockTransformacionDestinosParaBloqueMasInfo() as $ins_stock_transformacion_destino){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_stock_transformacion_destino->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_stock_transformacion_destino->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_stock_transformacion_destino->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_transformacion_destino->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_stock_transformacion_destino->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_transformacion_destino->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_stock_transformacion_destino->getId() ?>" archivo="ajax/modulos/ins_stock_transformacion_destino/ins_stock_transformacion_destino_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsStockTransformacionDestino') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_DESTINO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsStockTransformacionDestino') ?>">
                                <a href="ins_stock_transformacion_destino_alta.php?id=<?php echo $ins_stock_transformacion_destino->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_MASINFO_INS_STOCK_TRANSFORMACION_DESTINO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_transformacion_destino){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockTransformacionDestino::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_transformacion_destino->getFiltrosArrXCampo('InsStockTransformacion', 'ins_stock_transformacion_id') ?>" >
                                <?php Lang::_lang('Ver InsStockTransformacionDestinos de ') ?> <strong><?php echo($ins_stock_transformacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_stock_transformacion_destino_alta.php" >
                            <?php Lang::_lang('Agregar InsStockTransformacionDestino') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_MASINFO_INS_STOCK_MOVIMIENTO')){ ?>
	<div id="tab_ins_stock_movimiento" class="bloque-relacion ins_stock_movimiento">
		
            <h4><?php Lang::_lang('InsStockMovimiento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsStockTransformacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_stock_transformacion->getInsStockMovimientosParaBloqueMasInfo() as $ins_stock_movimiento){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_MASINFO_INS_STOCK_MOVIMIENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_movimiento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_movimiento->getFiltrosArrXCampo('InsStockTransformacion', 'ins_stock_transformacion_id') ?>" >
                                <?php Lang::_lang('Ver InsStockMovimientos de ') ?> <strong><?php echo($ins_stock_transformacion->getDescripcion()) ?></strong>
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

