<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_orden_venta_tipo_estado_remision_id = Gral::getVars(2, 'id');
$vta_orden_venta_tipo_estado_remision = VtaOrdenVentaTipoEstadoRemision::getOxId($vta_orden_venta_tipo_estado_remision_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_orden_venta_tipo_estado_remision->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_tipo_estado_remision->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_orden_venta_tipo_estado_remision->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_tipo_estado_remision->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_orden_venta_tipo_estado_remision->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_MASINFO_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_orden_venta"><?php Lang::_lang('VtaOrdenVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_MASINFO_VTA_ORDEN_VENTA_ESTADO_REMISION')){ ?>
            <li><a href="#tab_vta_orden_venta_estado_remision"><?php Lang::_lang('VtaOrdenVentaEstadoRemision') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_MASINFO_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_orden_venta" class="bloque-relacion vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoRemision') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_orden_venta_tipo_estado_remision->getVtaOrdenVentasParaBloqueMasInfo() as $vta_orden_venta){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_MASINFO_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('VtaOrdenVentaTipoEstadoRemision', 'vta_orden_venta_tipo_estado_remision_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentas de ') ?> <strong><?php echo($vta_orden_venta_tipo_estado_remision->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_MASINFO_VTA_ORDEN_VENTA_ESTADO_REMISION')){ ?>
	<div id="tab_vta_orden_venta_estado_remision" class="bloque-relacion vta_orden_venta_estado_remision">
		
            <h4><?php Lang::_lang('VtaOrdenVentaEstadoRemision') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoRemision') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_orden_venta_tipo_estado_remision->getVtaOrdenVentaEstadoRemisionsParaBloqueMasInfo() as $vta_orden_venta_estado_remision){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_orden_venta_estado_remision->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_orden_venta_estado_remision->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado_remision->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_remision->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado_remision->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_remision->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_orden_venta_estado_remision->getId() ?>" archivo="ajax/modulos/vta_orden_venta_estado_remision/vta_orden_venta_estado_remision_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaOrdenVentaEstadoRemision') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ESTADO_REMISION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVentaEstadoRemision') ?>">
                                <a href="vta_orden_venta_estado_remision_alta.php?id=<?php echo $vta_orden_venta_estado_remision->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_MASINFO_VTA_ORDEN_VENTA_ESTADO_REMISION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta_estado_remision){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVentaEstadoRemision::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta_estado_remision->getFiltrosArrXCampo('VtaOrdenVentaTipoEstadoRemision', 'vta_orden_venta_tipo_estado_remision_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentaEstadoRemisions de ') ?> <strong><?php echo($vta_orden_venta_tipo_estado_remision->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_orden_venta_estado_remision_alta.php" >
                            <?php Lang::_lang('Agregar VtaOrdenVentaEstadoRemision') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

