<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_centro_recepcion_id = Gral::getVars(2, 'id');
$pde_centro_recepcion = PdeCentroRecepcion::getOxId($pde_centro_recepcion_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Domicilio') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_centro_recepcion->getDomicilio())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_centro_recepcion->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_centro_recepcion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_CENTRO_RECEPCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_recepcion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_centro_recepcion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_CENTRO_RECEPCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_recepcion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_centro_recepcion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_OC_AGRUPACION')){ ?>
            <li><a href="#tab_pde_oc_agrupacion"><?php Lang::_lang('PdeOcAgrupacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_OC')){ ?>
            <li><a href="#tab_pde_oc"><?php Lang::_lang('PdeOcs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_RECEPCION_AGRUPACION')){ ?>
            <li><a href="#tab_pde_recepcion_agrupacion"><?php Lang::_lang('PdeRecepcionAgrupacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_RECEPCION')){ ?>
            <li><a href="#tab_pde_recepcion"><?php Lang::_lang('PdeRecepcions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_RECEPCION_ESTADO')){ ?>
            <li><a href="#tab_pde_recepcion_estado"><?php Lang::_lang('PdeRecepcionEstados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_CENTRO_RECEPCION_PAN_PANOL')){ ?>
            <li><a href="#tab_pde_centro_recepcion_pan_panol"><?php Lang::_lang('PdeCentroRecepcionPanPanols') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_CENTRO_RECEPCION_US_USUARIO')){ ?>
            <li><a href="#tab_pde_centro_recepcion_us_usuario"><?php Lang::_lang('PdeCentroRecepcionUsUsuarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION')){ ?>
            <li><a href="#tab_pde_centro_pedido_pde_centro_recepcion"><?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcions') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_OC_AGRUPACION')){ ?>
	<div id="tab_pde_oc_agrupacion" class="bloque-relacion pde_oc_agrupacion">
		
            <h4><?php Lang::_lang('PdeOcAgrupacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_recepcion->getPdeOcAgrupacionsParaBloqueMasInfo() as $pde_oc_agrupacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_agrupacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_agrupacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_agrupacion->getId() ?>" archivo="ajax/modulos/pde_oc_agrupacion/pde_oc_agrupacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>">
                                <a href="pde_oc_agrupacion_alta.php?id=<?php echo $pde_oc_agrupacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_OC_AGRUPACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_agrupacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_agrupacion->getFiltrosArrXCampo('PdeCentroRecepcion', 'pde_centro_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcAgrupacions de ') ?> <strong><?php echo($pde_centro_recepcion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_agrupacion_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcAgrupacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_OC')){ ?>
	<div id="tab_pde_oc" class="bloque-relacion pde_oc">
		
            <h4><?php Lang::_lang('PdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_recepcion->getPdeOcsParaBloqueMasInfo() as $pde_oc){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc->getFiltrosArrXCampo('PdeCentroRecepcion', 'pde_centro_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcs de ') ?> <strong><?php echo($pde_centro_recepcion->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_RECEPCION_AGRUPACION')){ ?>
	<div id="tab_pde_recepcion_agrupacion" class="bloque-relacion pde_recepcion_agrupacion">
		
            <h4><?php Lang::_lang('PdeRecepcionAgrupacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_recepcion->getPdeRecepcionAgrupacionsParaBloqueMasInfo() as $pde_recepcion_agrupacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recepcion_agrupacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recepcion_agrupacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recepcion_agrupacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_agrupacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recepcion_agrupacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recepcion_agrupacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recepcion_agrupacion->getId() ?>" archivo="ajax/modulos/pde_recepcion_agrupacion/pde_recepcion_agrupacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecepcionAgrupacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECEPCION_AGRUPACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecepcionAgrupacion') ?>">
                                <a href="pde_recepcion_agrupacion_alta.php?id=<?php echo $pde_recepcion_agrupacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_RECEPCION_AGRUPACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion_agrupacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcionAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion_agrupacion->getFiltrosArrXCampo('PdeCentroRecepcion', 'pde_centro_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcionAgrupacions de ') ?> <strong><?php echo($pde_centro_recepcion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recepcion_agrupacion_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecepcionAgrupacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_RECEPCION')){ ?>
	<div id="tab_pde_recepcion" class="bloque-relacion pde_recepcion">
		
            <h4><?php Lang::_lang('PdeRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_recepcion->getPdeRecepcionsParaBloqueMasInfo() as $pde_recepcion){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion->getFiltrosArrXCampo('PdeCentroRecepcion', 'pde_centro_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcions de ') ?> <strong><?php echo($pde_centro_recepcion->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_RECEPCION_ESTADO')){ ?>
	<div id="tab_pde_recepcion_estado" class="bloque-relacion pde_recepcion_estado">
		
            <h4><?php Lang::_lang('PdeRecepcionEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_recepcion->getPdeRecepcionEstadosParaBloqueMasInfo() as $pde_recepcion_estado){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_RECEPCION_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recepcion_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecepcionEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion_estado->getFiltrosArrXCampo('PdeCentroRecepcion', 'pde_centro_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecepcionEstados de ') ?> <strong><?php echo($pde_centro_recepcion->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_CENTRO_RECEPCION_PAN_PANOL')){ ?>
	<div id="tab_pde_centro_recepcion_pan_panol" class="bloque-relacion pde_centro_recepcion_pan_panol">
		
            <h4><?php Lang::_lang('PdeCentroRecepcionPanPanol') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_recepcion->getPdeCentroRecepcionPanPanolsParaBloqueMasInfo() as $pde_centro_recepcion_pan_panol){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_centro_recepcion_pan_panol->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_centro_recepcion_pan_panol->getDescripcionVinculante('PdeCentroRecepcion')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_CENTRO_RECEPCION_PAN_PANOL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_centro_recepcion_pan_panol){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCentroRecepcionPanPanol::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_recepcion_pan_panol->getFiltrosArrXCampo('PdeCentroRecepcion', 'pde_centro_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeCentroRecepcionPanPanols de ') ?> <strong><?php echo($pde_centro_recepcion->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_CENTRO_RECEPCION_US_USUARIO')){ ?>
	<div id="tab_pde_centro_recepcion_us_usuario" class="bloque-relacion pde_centro_recepcion_us_usuario">
		
            <h4><?php Lang::_lang('PdeCentroRecepcionUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_recepcion->getPdeCentroRecepcionUsUsuariosParaBloqueMasInfo() as $pde_centro_recepcion_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_centro_recepcion_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_centro_recepcion_us_usuario->getDescripcionVinculante('PdeCentroRecepcion')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_centro_recepcion_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_recepcion_us_usuario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_centro_recepcion_us_usuario->getId() ?>" archivo="ajax/modulos/pde_centro_recepcion_us_usuario/pde_centro_recepcion_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCentroRecepcionUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroRecepcionUsUsuario') ?>">
                                <a href="pde_centro_recepcion_us_usuario_alta.php?id=<?php echo $pde_centro_recepcion_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_CENTRO_RECEPCION_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_centro_recepcion_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCentroRecepcionUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_recepcion_us_usuario->getFiltrosArrXCampo('PdeCentroRecepcion', 'pde_centro_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeCentroRecepcionUsUsuarios de ') ?> <strong><?php echo($pde_centro_recepcion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_centro_recepcion_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar PdeCentroRecepcionUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION')){ ?>
	<div id="tab_pde_centro_pedido_pde_centro_recepcion" class="bloque-relacion pde_centro_pedido_pde_centro_recepcion">
		
            <h4><?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeCentroRecepcion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_centro_recepcion->getPdeCentroPedidoPdeCentroRecepcionsParaBloqueMasInfo() as $pde_centro_pedido_pde_centro_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_centro_pedido_pde_centro_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_centro_pedido_pde_centro_recepcion->getDescripcionVinculante('PdeCentroRecepcion')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_centro_pedido_pde_centro_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_centro_pedido_pde_centro_recepcion->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_centro_pedido_pde_centro_recepcion->getId() ?>" archivo="ajax/modulos/pde_centro_pedido_pde_centro_recepcion/pde_centro_pedido_pde_centro_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroPedidoPdeCentroRecepcion') ?>">
                                <a href="pde_centro_pedido_pde_centro_recepcion_alta.php?id=<?php echo $pde_centro_pedido_pde_centro_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_MASINFO_PDE_CENTRO_PEDIDO_PDE_CENTRO_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_centro_pedido_pde_centro_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeCentroPedidoPdeCentroRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_centro_pedido_pde_centro_recepcion->getFiltrosArrXCampo('PdeCentroRecepcion', 'pde_centro_recepcion_id') ?>" >
                                <?php Lang::_lang('Ver PdeCentroPedidoPdeCentroRecepcions de ') ?> <strong><?php echo($pde_centro_recepcion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_centro_pedido_pde_centro_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar PdeCentroPedidoPdeCentroRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

