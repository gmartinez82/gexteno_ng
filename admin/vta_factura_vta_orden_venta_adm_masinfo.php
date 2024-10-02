<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_factura_vta_orden_venta_id = Gral::getVars(2, 'id');
$vta_factura_vta_orden_venta = VtaFacturaVtaOrdenVenta::getOxId($vta_factura_vta_orden_venta_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_factura_vta_orden_venta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_FACTURA_VTA_ORDEN_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_orden_venta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_factura_vta_orden_venta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_FACTURA_VTA_ORDEN_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_orden_venta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_factura_vta_orden_venta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_ORDEN_VENTA_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
            <li><a href="#tab_vta_nota_credito_vta_factura_vta_orden_venta"><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_ORDEN_VENTA_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA')){ ?>
	<div id="tab_vta_nota_credito_vta_factura_vta_orden_venta" class="bloque-relacion vta_nota_credito_vta_factura_vta_orden_venta">
		
            <h4><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura_vta_orden_venta->getVtaNotaCreditoVtaFacturaVtaOrdenVentasParaBloqueMasInfo() as $vta_nota_credito_vta_factura_vta_orden_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_factura_vta_orden_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_factura_vta_orden_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_credito_vta_factura_vta_orden_venta->getId() ?>" archivo="ajax/modulos/vta_nota_credito_vta_factura_vta_orden_venta/vta_nota_credito_vta_factura_vta_orden_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?>">
                                <a href="vta_nota_credito_vta_factura_vta_orden_venta_alta.php?id=<?php echo $vta_nota_credito_vta_factura_vta_orden_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_ORDEN_VENTA_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_ORDEN_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_vta_factura_vta_orden_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoVtaFacturaVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_vta_factura_vta_orden_venta->getFiltrosArrXCampo('VtaFacturaVtaOrdenVenta', 'vta_factura_vta_orden_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoVtaFacturaVtaOrdenVentas de ') ?> <strong><?php echo($vta_factura_vta_orden_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_credito_vta_factura_vta_orden_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaCreditoVtaFacturaVtaOrdenVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

