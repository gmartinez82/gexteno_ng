<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_presupuesto_ins_insumo_id = Gral::getVars(2, 'id');
$vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($vta_presupuesto_ins_insumo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_presupuesto_ins_insumo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PRESUPUESTO_INS_INSUMO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_ins_insumo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_presupuesto_ins_insumo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PRESUPUESTO_INS_INSUMO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_ins_insumo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_presupuesto_ins_insumo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_MASINFO_VTA_PRESUPUESTO_CONFLICTO')){ ?>
            <li><a href="#tab_vta_presupuesto_conflicto"><?php Lang::_lang('VtaPresupuestoConflicto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_MASINFO_VTA_PRESUPUESTO_CANCELACION')){ ?>
            <li><a href="#tab_vta_presupuesto_cancelacion"><?php Lang::_lang('VtaPresupuestoCancelacion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_MASINFO_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_orden_venta"><?php Lang::_lang('VtaOrdenVenta') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_MASINFO_VTA_PRESUPUESTO_CONFLICTO')){ ?>
	<div id="tab_vta_presupuesto_conflicto" class="bloque-relacion vta_presupuesto_conflicto">
		
            <h4><?php Lang::_lang('VtaPresupuestoConflicto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPresupuestoInsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_presupuesto_ins_insumo->getVtaPresupuestoConflictosParaBloqueMasInfo() as $vta_presupuesto_conflicto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_presupuesto_conflicto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_presupuesto_conflicto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_presupuesto_conflicto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_conflicto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_presupuesto_conflicto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_conflicto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_presupuesto_conflicto->getId() ?>" archivo="ajax/modulos/vta_presupuesto_conflicto/vta_presupuesto_conflicto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPresupuestoConflicto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_CONFLICTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuestoConflicto') ?>">
                                <a href="vta_presupuesto_conflicto_alta.php?id=<?php echo $vta_presupuesto_conflicto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_MASINFO_VTA_PRESUPUESTO_CONFLICTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto_conflicto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuestoConflicto::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_conflicto->getFiltrosArrXCampo('VtaPresupuestoInsInsumo', 'vta_presupuesto_ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestoConflictos de ') ?> <strong><?php echo($vta_presupuesto_ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_presupuesto_conflicto_alta.php" >
                            <?php Lang::_lang('Agregar VtaPresupuestoConflicto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_MASINFO_VTA_PRESUPUESTO_CANCELACION')){ ?>
	<div id="tab_vta_presupuesto_cancelacion" class="bloque-relacion vta_presupuesto_cancelacion">
		
            <h4><?php Lang::_lang('VtaPresupuestoCancelacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPresupuestoInsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_presupuesto_ins_insumo->getVtaPresupuestoCancelacionsParaBloqueMasInfo() as $vta_presupuesto_cancelacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_presupuesto_cancelacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_presupuesto_cancelacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_presupuesto_cancelacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_cancelacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_presupuesto_cancelacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_cancelacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_presupuesto_cancelacion->getId() ?>" archivo="ajax/modulos/vta_presupuesto_cancelacion/vta_presupuesto_cancelacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPresupuestoCancelacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_CANCELACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuestoCancelacion') ?>">
                                <a href="vta_presupuesto_cancelacion_alta.php?id=<?php echo $vta_presupuesto_cancelacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_MASINFO_VTA_PRESUPUESTO_CANCELACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto_cancelacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuestoCancelacion::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_cancelacion->getFiltrosArrXCampo('VtaPresupuestoInsInsumo', 'vta_presupuesto_ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestoCancelacions de ') ?> <strong><?php echo($vta_presupuesto_ins_insumo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_presupuesto_cancelacion_alta.php" >
                            <?php Lang::_lang('Agregar VtaPresupuestoCancelacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_MASINFO_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_orden_venta" class="bloque-relacion vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPresupuestoInsInsumo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_presupuesto_ins_insumo->getVtaOrdenVentasParaBloqueMasInfo() as $vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_INS_INSUMO_MASINFO_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('VtaPresupuestoInsInsumo', 'vta_presupuesto_ins_insumo_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentas de ') ?> <strong><?php echo($vta_presupuesto_ins_insumo->getDescripcion()) ?></strong>
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
	
</div>

