<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_presupuesto_tipo_venta_id = Gral::getVars(2, 'id');
$vta_presupuesto_tipo_venta = VtaPresupuestoTipoVenta::getOxId($vta_presupuesto_tipo_venta_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_presupuesto_tipo_venta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PRESUPUESTO_TIPO_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_tipo_venta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_presupuesto_tipo_venta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_PRESUPUESTO_TIPO_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_tipo_venta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_presupuesto_tipo_venta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_TIPO_VENTA_MASINFO_VTA_PRESUPUESTO')){ ?>
            <li><a href="#tab_vta_presupuesto"><?php Lang::_lang('VtaPresupuesto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_TIPO_VENTA_MASINFO_VTA_PUNTO_VENTA_VTA_PRESUPUESTO_TIPO_VENTA')){ ?>
            <li><a href="#tab_vta_punto_venta_vta_presupuesto_tipo_venta"><?php Lang::_lang('VtaPuntoVentaVtaPresupuestoTipoVentas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_TIPO_VENTA_MASINFO_VTA_PRESUPUESTO')){ ?>
	<div id="tab_vta_presupuesto" class="bloque-relacion vta_presupuesto">
		
            <h4><?php Lang::_lang('VtaPresupuesto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPresupuestoTipoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_presupuesto_tipo_venta->getVtaPresupuestosParaBloqueMasInfo() as $vta_presupuesto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_presupuesto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_presupuesto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_presupuesto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_presupuesto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_presupuesto->getId() ?>" archivo="ajax/modulos/vta_presupuesto/vta_presupuesto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPresupuesto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuesto') ?>">
                                <a href="vta_presupuesto_alta.php?id=<?php echo $vta_presupuesto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_TIPO_VENTA_MASINFO_VTA_PRESUPUESTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuesto::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto->getFiltrosArrXCampo('VtaPresupuestoTipoVenta', 'vta_presupuesto_tipo_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestos de ') ?> <strong><?php echo($vta_presupuesto_tipo_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_presupuesto_alta.php" >
                            <?php Lang::_lang('Agregar VtaPresupuesto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_TIPO_VENTA_MASINFO_VTA_PUNTO_VENTA_VTA_PRESUPUESTO_TIPO_VENTA')){ ?>
	<div id="tab_vta_punto_venta_vta_presupuesto_tipo_venta" class="bloque-relacion vta_punto_venta_vta_presupuesto_tipo_venta">
		
            <h4><?php Lang::_lang('VtaPuntoVentaVtaPresupuestoTipoVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaPresupuestoTipoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_presupuesto_tipo_venta->getVtaPuntoVentaVtaPresupuestoTipoVentasParaBloqueMasInfo() as $vta_punto_venta_vta_presupuesto_tipo_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_punto_venta_vta_presupuesto_tipo_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_punto_venta_vta_presupuesto_tipo_venta->getDescripcionVinculante('VtaPresupuestoTipoVenta')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_punto_venta_vta_presupuesto_tipo_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta_vta_presupuesto_tipo_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_punto_venta_vta_presupuesto_tipo_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta_vta_presupuesto_tipo_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_punto_venta_vta_presupuesto_tipo_venta->getId() ?>" archivo="ajax/modulos/vta_punto_venta_vta_presupuesto_tipo_venta/vta_punto_venta_vta_presupuesto_tipo_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPuntoVentaVtaPresupuestoTipoVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_VTA_PRESUPUESTO_TIPO_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPuntoVentaVtaPresupuestoTipoVenta') ?>">
                                <a href="vta_punto_venta_vta_presupuesto_tipo_venta_alta.php?id=<?php echo $vta_punto_venta_vta_presupuesto_tipo_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_TIPO_VENTA_MASINFO_VTA_PUNTO_VENTA_VTA_PRESUPUESTO_TIPO_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_punto_venta_vta_presupuesto_tipo_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPuntoVentaVtaPresupuestoTipoVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_punto_venta_vta_presupuesto_tipo_venta->getFiltrosArrXCampo('VtaPresupuestoTipoVenta', 'vta_presupuesto_tipo_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaPuntoVentaVtaPresupuestoTipoVentas de ') ?> <strong><?php echo($vta_presupuesto_tipo_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_punto_venta_vta_presupuesto_tipo_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaPuntoVentaVtaPresupuestoTipoVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

