<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pan_panol_id = Gral::getVars(2, 'id');
$pan_panol = PanPanol::getOxId($pan_panol_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pan_panol->getDomicilio())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Responsable') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pan_panol->getResponsable())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pan_panol->getTelefono())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pan_panol->getEmail())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo Corto') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pan_panol->getCodigoCorto())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pan_panol->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PAN_PANOL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_panol->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pan_panol->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PAN_PANOL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_panol->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pan_panol->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_GRAL_SUCURSAL_PAN_PANOL')){ ?>
            <li><a href="#tab_gral_sucursal_pan_panol"><?php Lang::_lang('GralSucursalPanPanols') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_INSUMO_PAN_PANOL')){ ?>
            <li><a href="#tab_ins_insumo_pan_panol"><?php Lang::_lang('InsInsumoPanPanols') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_STOCK_TRANSFORMACION')){ ?>
            <li><a href="#tab_ins_stock_transformacion"><?php Lang::_lang('InsStockTransformacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_STOCK_TRANSFORMACION_DESTINO')){ ?>
            <li><a href="#tab_ins_stock_transformacion_destino"><?php Lang::_lang('InsStockTransformacionDestinos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_PAN_PANOL_US_USUARIO')){ ?>
            <li><a href="#tab_pan_panol_us_usuario"><?php Lang::_lang('PanPanolUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_VTA_REMITO')){ ?>
            <li><a href="#tab_vta_remito"><?php Lang::_lang('VtaRemito') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_STOCK_MOVIMIENTO')){ ?>
            <li><a href="#tab_ins_stock_movimiento"><?php Lang::_lang('InsStockMovimientos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_STOCK_RESUMEN')){ ?>
            <li><a href="#tab_ins_stock_resumen"><?php Lang::_lang('InsStockResumens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_PDE_RECEPCION_ESTADO')){ ?>
            <li><a href="#tab_pde_recepcion_estado"><?php Lang::_lang('PdeRecepcionEstados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_PDE_CENTRO_RECEPCION_PAN_PANOL')){ ?>
            <li><a href="#tab_pde_centro_recepcion_pan_panol"><?php Lang::_lang('PdeCentroRecepcionPanPanols') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_VTA_REMITO_AJUSTE')){ ?>
            <li><a href="#tab_vta_remito_ajuste"><?php Lang::_lang('VtaRemitoAjuste') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_GRAL_SUCURSAL_PAN_PANOL')){ ?>
	<div id="tab_gral_sucursal_pan_panol" class="bloque-relacion gral_sucursal_pan_panol">
		
            <h4><?php Lang::_lang('GralSucursalPanPanol') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PanPanol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pan_panol->getGralSucursalPanPanolsParaBloqueMasInfo() as $gral_sucursal_pan_panol){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_sucursal_pan_panol->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_sucursal_pan_panol->getDescripcionVinculante('PanPanol')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_sucursal_pan_panol->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_pan_panol->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_sucursal_pan_panol->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_pan_panol->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_sucursal_pan_panol->getId() ?>" archivo="ajax/modulos/gral_sucursal_pan_panol/gral_sucursal_pan_panol_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralSucursalPanPanol') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_PAN_PANOL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursalPanPanol') ?>">
                                <a href="gral_sucursal_pan_panol_alta.php?id=<?php echo $gral_sucursal_pan_panol->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_GRAL_SUCURSAL_PAN_PANOL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_sucursal_pan_panol){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralSucursalPanPanol::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_pan_panol->getFiltrosArrXCampo('PanPanol', 'pan_panol_id') ?>" >
                                <?php Lang::_lang('Ver GralSucursalPanPanols de ') ?> <strong><?php echo($pan_panol->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_sucursal_pan_panol_alta.php" >
                            <?php Lang::_lang('Agregar GralSucursalPanPanol') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_INSUMO_PAN_PANOL')){ ?>
	<div id="tab_ins_insumo_pan_panol" class="bloque-relacion ins_insumo_pan_panol">
		
            <h4><?php Lang::_lang('InsInsumoPanPanol') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PanPanol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pan_panol->getInsInsumoPanPanolsParaBloqueMasInfo() as $ins_insumo_pan_panol){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_pan_panol->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_pan_panol->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_pan_panol->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_pan_panol->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_pan_panol->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_pan_panol->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_pan_panol->getId() ?>" archivo="ajax/modulos/ins_insumo_pan_panol/ins_insumo_pan_panol_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoPanPanol') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoPanPanol') ?>">
                                <a href="ins_insumo_pan_panol_alta.php?id=<?php echo $ins_insumo_pan_panol->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_INSUMO_PAN_PANOL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_pan_panol){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoPanPanol::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_pan_panol->getFiltrosArrXCampo('PanPanol', 'pan_panol_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoPanPanols de ') ?> <strong><?php echo($pan_panol->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_pan_panol_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoPanPanol') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_STOCK_TRANSFORMACION')){ ?>
	<div id="tab_ins_stock_transformacion" class="bloque-relacion ins_stock_transformacion">
		
            <h4><?php Lang::_lang('InsStockTransformacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PanPanol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pan_panol->getInsStockTransformacionsParaBloqueMasInfo() as $ins_stock_transformacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_stock_transformacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_stock_transformacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_stock_transformacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_transformacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_stock_transformacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_transformacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_stock_transformacion->getId() ?>" archivo="ajax/modulos/ins_stock_transformacion/ins_stock_transformacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsStockTransformacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_STOCK_TRANSFORMACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsStockTransformacion') ?>">
                                <a href="ins_stock_transformacion_alta.php?id=<?php echo $ins_stock_transformacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_STOCK_TRANSFORMACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_transformacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockTransformacion::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_transformacion->getFiltrosArrXCampo('PanPanol', 'pan_panol_id') ?>" >
                                <?php Lang::_lang('Ver InsStockTransformacions de ') ?> <strong><?php echo($pan_panol->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_stock_transformacion_alta.php" >
                            <?php Lang::_lang('Agregar InsStockTransformacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_STOCK_TRANSFORMACION_DESTINO')){ ?>
	<div id="tab_ins_stock_transformacion_destino" class="bloque-relacion ins_stock_transformacion_destino">
		
            <h4><?php Lang::_lang('InsStockTransformacionDestino') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PanPanol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pan_panol->getInsStockTransformacionDestinosParaBloqueMasInfo() as $ins_stock_transformacion_destino){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_STOCK_TRANSFORMACION_DESTINO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_transformacion_destino){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockTransformacionDestino::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_transformacion_destino->getFiltrosArrXCampo('PanPanol', 'pan_panol_id') ?>" >
                                <?php Lang::_lang('Ver InsStockTransformacionDestinos de ') ?> <strong><?php echo($pan_panol->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_PAN_PANOL_US_USUARIO')){ ?>
	<div id="tab_pan_panol_us_usuario" class="bloque-relacion pan_panol_us_usuario">
		
            <h4><?php Lang::_lang('PanPanolUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PanPanol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pan_panol->getPanPanolUsUsuariosParaBloqueMasInfo() as $pan_panol_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pan_panol_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pan_panol_us_usuario->getDescripcionVinculante('PanPanol')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pan_panol_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_panol_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pan_panol_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_panol_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pan_panol_us_usuario->getId() ?>" archivo="ajax/modulos/pan_panol_us_usuario/pan_panol_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PanPanolUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PanPanolUsUsuario') ?>">
                                <a href="pan_panol_us_usuario_alta.php?id=<?php echo $pan_panol_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_PAN_PANOL_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pan_panol_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PanPanolUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $pan_panol_us_usuario->getFiltrosArrXCampo('PanPanol', 'pan_panol_id') ?>" >
                                <?php Lang::_lang('Ver PanPanolUsUsuarios de ') ?> <strong><?php echo($pan_panol->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pan_panol_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar PanPanolUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_VTA_REMITO')){ ?>
	<div id="tab_vta_remito" class="bloque-relacion vta_remito">
		
            <h4><?php Lang::_lang('VtaRemito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PanPanol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pan_panol->getVtaRemitosParaBloqueMasInfo() as $vta_remito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito->getId() ?>" archivo="ajax/modulos/vta_remito/vta_remito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemito') ?>">
                                <a href="vta_remito_alta.php?id=<?php echo $vta_remito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_VTA_REMITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemito::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito->getFiltrosArrXCampo('PanPanol', 'pan_panol_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitos de ') ?> <strong><?php echo($pan_panol->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_STOCK_MOVIMIENTO')){ ?>
	<div id="tab_ins_stock_movimiento" class="bloque-relacion ins_stock_movimiento">
		
            <h4><?php Lang::_lang('InsStockMovimiento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PanPanol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pan_panol->getInsStockMovimientosParaBloqueMasInfo() as $ins_stock_movimiento){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_STOCK_MOVIMIENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_movimiento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_movimiento->getFiltrosArrXCampo('PanPanol', 'pan_panol_id') ?>" >
                                <?php Lang::_lang('Ver InsStockMovimientos de ') ?> <strong><?php echo($pan_panol->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_STOCK_RESUMEN')){ ?>
	<div id="tab_ins_stock_resumen" class="bloque-relacion ins_stock_resumen">
		
            <h4><?php Lang::_lang('InsStockResumen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PanPanol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pan_panol->getInsStockResumensParaBloqueMasInfo() as $ins_stock_resumen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_stock_resumen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_stock_resumen->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_stock_resumen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_stock_resumen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_stock_resumen->getId() ?>" archivo="ajax/modulos/ins_stock_resumen/ins_stock_resumen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsStockResumen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsStockResumen') ?>">
                                <a href="ins_stock_resumen_alta.php?id=<?php echo $ins_stock_resumen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_INS_STOCK_RESUMEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_stock_resumen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsStockResumen::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_resumen->getFiltrosArrXCampo('PanPanol', 'pan_panol_id') ?>" >
                                <?php Lang::_lang('Ver InsStockResumens de ') ?> <strong><?php echo($pan_panol->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_stock_resumen_alta.php" >
                            <?php Lang::_lang('Agregar InsStockResumen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_PDE_RECEPCION_ESTADO')){ ?>
	<div id="tab_pde_recepcion_estado" class="bloque-relacion pde_recepcion_estado">
		
            <h4><?php Lang::_lang('PdeRecepcionEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PanPanol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pan_panol->getPdeRecepcionEstadosParaBloqueMasInfo() as $pde_recepcion_estado){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_PDE_RECEPCION_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcionEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion_estado->getFiltrosArrXCampo('PanPanol', 'pan_panol_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcionEstados de ') ?> <strong><?php echo($pan_panol->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_PDE_CENTRO_RECEPCION_PAN_PANOL')){ ?>
	<div id="tab_pde_centro_recepcion_pan_panol" class="bloque-relacion pde_centro_recepcion_pan_panol">
		
            <h4><?php Lang::_lang('PdeCentroRecepcionPanPanol') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PanPanol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pan_panol->getPdeCentroRecepcionPanPanolsParaBloqueMasInfo() as $pde_centro_recepcion_pan_panol){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_centro_recepcion_pan_panol->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_centro_recepcion_pan_panol->getDescripcionVinculante('PanPanol')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_centro_recepcion_pan_panol->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_recepcion_pan_panol->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_centro_recepcion_pan_panol->getId() ?>" archivo="ajax/modulos/pde_centro_recepcion_pan_panol/pde_centro_recepcion_pan_panol_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCentroRecepcionPanPanol') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_PAN_PANOL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroRecepcionPanPanol') ?>">
                                <a href="pde_centro_recepcion_pan_panol_alta.php?id=<?php echo $pde_centro_recepcion_pan_panol->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_PDE_CENTRO_RECEPCION_PAN_PANOL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_centro_recepcion_pan_panol){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCentroRecepcionPanPanol::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_recepcion_pan_panol->getFiltrosArrXCampo('PanPanol', 'pan_panol_id') ?>" >
                                <?php Lang::_lang('Ver PdeCentroRecepcionPanPanols de ') ?> <strong><?php echo($pan_panol->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_centro_recepcion_pan_panol_alta.php" >
                            <?php Lang::_lang('Agregar PdeCentroRecepcionPanPanol') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_VTA_REMITO_AJUSTE')){ ?>
	<div id="tab_vta_remito_ajuste" class="bloque-relacion vta_remito_ajuste">
		
            <h4><?php Lang::_lang('VtaRemitoAjuste') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PanPanol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pan_panol->getVtaRemitoAjustesParaBloqueMasInfo() as $vta_remito_ajuste){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_remito_ajuste->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_remito_ajuste->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_remito_ajuste->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_ajuste->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_remito_ajuste->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_ajuste->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_remito_ajuste->getId() ?>" archivo="ajax/modulos/vta_remito_ajuste/vta_remito_ajuste_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRemitoAjuste') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemitoAjuste') ?>">
                                <a href="vta_remito_ajuste_alta.php?id=<?php echo $vta_remito_ajuste->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_MASINFO_VTA_REMITO_AJUSTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_remito_ajuste){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRemitoAjuste::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_ajuste->getFiltrosArrXCampo('PanPanol', 'pan_panol_id') ?>" >
                                <?php Lang::_lang('Ver VtaRemitoAjustes de ') ?> <strong><?php echo($pan_panol->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_remito_ajuste_alta.php" >
                            <?php Lang::_lang('Agregar VtaRemitoAjuste') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

