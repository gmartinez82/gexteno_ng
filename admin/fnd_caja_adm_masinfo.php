<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$fnd_caja_id = Gral::getVars(2, 'id');
$fnd_caja = FndCaja::getOxId($fnd_caja_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($fnd_caja->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CAJA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_caja->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CAJA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_caja->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_VTA_RECIBO')){ ?>
            <li><a href="#tab_vta_recibo"><?php Lang::_lang('VtaRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_PDE_RECIBO')){ ?>
            <li><a href="#tab_pde_recibo"><?php Lang::_lang('PdeRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_PDE_ORDEN_PAGO')){ ?>
            <li><a href="#tab_pde_orden_pago"><?php Lang::_lang('PdeOrdenPagos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CAJA_ESTADO')){ ?>
            <li><a href="#tab_fnd_caja_estado"><?php Lang::_lang('FndCajaEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CAJA_INGRESO')){ ?>
            <li><a href="#tab_fnd_caja_ingreso"><?php Lang::_lang('FndCajaIngreso') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CAJA_EGRESO')){ ?>
            <li><a href="#tab_fnd_caja_egreso"><?php Lang::_lang('FndCajaEgreso') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CHQ_ESTADO')){ ?>
            <li><a href="#tab_fnd_chq_estado"><?php Lang::_lang('FndChqEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CHQ_CHEQUE')){ ?>
            <li><a href="#tab_fnd_chq_cheque"><?php Lang::_lang('FndChqCheque') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_VTA_RECIBO')){ ?>
	<div id="tab_vta_recibo" class="bloque-relacion vta_recibo">
		
            <h4><?php Lang::_lang('VtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCaja') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja->getVtaRecibosParaBloqueMasInfo() as $vta_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo->getId() ?>" archivo="ajax/modulos/vta_recibo/vta_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRecibo') ?>">
                                <a href="vta_recibo_alta.php?id=<?php echo $vta_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo->getFiltrosArrXCampo('FndCaja', 'fnd_caja_id') ?>" >
                                <?php Lang::_lang('Ver VtaRecibos de ') ?> <strong><?php echo($fnd_caja->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_alta.php" >
                            <?php Lang::_lang('Agregar VtaRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_PDE_RECIBO')){ ?>
	<div id="tab_pde_recibo" class="bloque-relacion pde_recibo">
		
            <h4><?php Lang::_lang('PdeRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCaja') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja->getPdeRecibosParaBloqueMasInfo() as $pde_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo->getId() ?>" archivo="ajax/modulos/pde_recibo/pde_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecibo') ?>">
                                <a href="pde_recibo_alta.php?id=<?php echo $pde_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_PDE_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo->getFiltrosArrXCampo('FndCaja', 'fnd_caja_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecibos de ') ?> <strong><?php echo($fnd_caja->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_PDE_ORDEN_PAGO')){ ?>
	<div id="tab_pde_orden_pago" class="bloque-relacion pde_orden_pago">
		
            <h4><?php Lang::_lang('PdeOrdenPago') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCaja') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja->getPdeOrdenPagosParaBloqueMasInfo() as $pde_orden_pago){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_orden_pago->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_orden_pago->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_orden_pago->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_orden_pago->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_orden_pago->getId() ?>" archivo="ajax/modulos/pde_orden_pago/pde_orden_pago_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOrdenPago') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOrdenPago') ?>">
                                <a href="pde_orden_pago_alta.php?id=<?php echo $pde_orden_pago->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_PDE_ORDEN_PAGO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPago::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago->getFiltrosArrXCampo('FndCaja', 'fnd_caja_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagos de ') ?> <strong><?php echo($fnd_caja->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_orden_pago_alta.php" >
                            <?php Lang::_lang('Agregar PdeOrdenPago') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CAJA_ESTADO')){ ?>
	<div id="tab_fnd_caja_estado" class="bloque-relacion fnd_caja_estado">
		
            <h4><?php Lang::_lang('FndCajaEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCaja') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja->getFndCajaEstadosParaBloqueMasInfo() as $fnd_caja_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_caja_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_caja_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_caja_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_caja_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_caja_estado->getId() ?>" archivo="ajax/modulos/fnd_caja_estado/fnd_caja_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajaEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaEstado') ?>">
                                <a href="fnd_caja_estado_alta.php?id=<?php echo $fnd_caja_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CAJA_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_caja_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajaEstado::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_estado->getFiltrosArrXCampo('FndCaja', 'fnd_caja_id') ?>" >
                                <?php Lang::_lang('Ver FndCajaEstados de ') ?> <strong><?php echo($fnd_caja->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_caja_estado_alta.php" >
                            <?php Lang::_lang('Agregar FndCajaEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CAJA_INGRESO')){ ?>
	<div id="tab_fnd_caja_ingreso" class="bloque-relacion fnd_caja_ingreso">
		
            <h4><?php Lang::_lang('FndCajaIngreso') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCaja') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja->getFndCajaIngresosParaBloqueMasInfo() as $fnd_caja_ingreso){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_caja_ingreso->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_caja_ingreso->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_caja_ingreso->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_ingreso->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_caja_ingreso->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_ingreso->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_caja_ingreso->getId() ?>" archivo="ajax/modulos/fnd_caja_ingreso/fnd_caja_ingreso_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajaIngreso') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_INGRESO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaIngreso') ?>">
                                <a href="fnd_caja_ingreso_alta.php?id=<?php echo $fnd_caja_ingreso->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CAJA_INGRESO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_caja_ingreso){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajaIngreso::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_ingreso->getFiltrosArrXCampo('FndCaja', 'fnd_caja_id') ?>" >
                                <?php Lang::_lang('Ver FndCajaIngresos de ') ?> <strong><?php echo($fnd_caja->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_caja_ingreso_alta.php" >
                            <?php Lang::_lang('Agregar FndCajaIngreso') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CAJA_EGRESO')){ ?>
	<div id="tab_fnd_caja_egreso" class="bloque-relacion fnd_caja_egreso">
		
            <h4><?php Lang::_lang('FndCajaEgreso') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCaja') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja->getFndCajaEgresosParaBloqueMasInfo() as $fnd_caja_egreso){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_caja_egreso->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_caja_egreso->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_caja_egreso->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_egreso->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_caja_egreso->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_egreso->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_caja_egreso->getId() ?>" archivo="ajax/modulos/fnd_caja_egreso/fnd_caja_egreso_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajaEgreso') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_EGRESO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaEgreso') ?>">
                                <a href="fnd_caja_egreso_alta.php?id=<?php echo $fnd_caja_egreso->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CAJA_EGRESO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_caja_egreso){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajaEgreso::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_egreso->getFiltrosArrXCampo('FndCaja', 'fnd_caja_id') ?>" >
                                <?php Lang::_lang('Ver FndCajaEgresos de ') ?> <strong><?php echo($fnd_caja->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_caja_egreso_alta.php" >
                            <?php Lang::_lang('Agregar FndCajaEgreso') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CHQ_ESTADO')){ ?>
	<div id="tab_fnd_chq_estado" class="bloque-relacion fnd_chq_estado">
		
            <h4><?php Lang::_lang('FndChqEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCaja') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja->getFndChqEstadosParaBloqueMasInfo() as $fnd_chq_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_chq_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_chq_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_chq_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_chq_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_chq_estado->getId() ?>" archivo="ajax/modulos/fnd_chq_estado/fnd_chq_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndChqEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CHQ_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndChqEstado') ?>">
                                <a href="fnd_chq_estado_alta.php?id=<?php echo $fnd_chq_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CHQ_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqEstado::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_estado->getFiltrosArrXCampo('FndCaja', 'fnd_caja_id') ?>" >
                                <?php Lang::_lang('Ver FndChqEstados de ') ?> <strong><?php echo($fnd_caja->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_chq_estado_alta.php" >
                            <?php Lang::_lang('Agregar FndChqEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CHQ_CHEQUE')){ ?>
	<div id="tab_fnd_chq_cheque" class="bloque-relacion fnd_chq_cheque">
		
            <h4><?php Lang::_lang('FndChqCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCaja') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja->getFndChqChequesParaBloqueMasInfo() as $fnd_chq_cheque){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_chq_cheque->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_chq_cheque->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_chq_cheque->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_cheque->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_chq_cheque->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_cheque->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_chq_cheque->getId() ?>" archivo="ajax/modulos/fnd_chq_cheque/fnd_chq_cheque_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndChqCheque') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndChqCheque') ?>">
                                <a href="fnd_chq_cheque_alta.php?id=<?php echo $fnd_chq_cheque->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MASINFO_FND_CHQ_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqCheque::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_cheque->getFiltrosArrXCampo('FndCaja', 'fnd_caja_id') ?>" >
                                <?php Lang::_lang('Ver FndChqCheques de ') ?> <strong><?php echo($fnd_caja->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_chq_cheque_alta.php" >
                            <?php Lang::_lang('Agregar FndChqCheque') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

