<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_nota_credito_vta_factura_vta_orden_venta = VtaNotaCreditoVtaFacturaVtaOrdenVenta::getOxId($id);
//Gral::prr($vta_nota_credito_vta_factura_vta_orden_venta);
?>

<div class="tabs ficha-vta_nota_credito_vta_factura_vta_orden_venta" identificador="<?php echo $vta_nota_credito_vta_factura_vta_orden_venta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_nota_credito_vta_factura_vta_orden_venta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_nota_credito_vta_factura_vta_orden_venta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_vta_factura_vta_orden_venta vta_nota_credito_id">
            <div class="label"><?php Lang::_lang('VtaNotaCredito') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getVtaNotaCredito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_vta_factura_vta_orden_venta vta_factura_vta_orden_venta_id">
            <div class="label"><?php Lang::_lang('VtaFacturaVtaOrdenVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getVtaFacturaVtaOrdenVenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_vta_factura_vta_orden_venta ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_vta_factura_vta_orden_venta ins_unidad_medida_id">
            <div class="label"><?php Lang::_lang('InsUnidadMedida') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getInsUnidadMedida()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_vta_factura_vta_orden_venta gral_tipo_iva_id">
            <div class="label"><?php Lang::_lang('GralTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getGralTipoIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_vta_factura_vta_orden_venta importe_unitario">
            <div class="label"><?php Lang::_lang('Imp Unitario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getImporteUnitario()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_vta_factura_vta_orden_venta cantidad">
            <div class="label"><?php Lang::_lang('cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_vta_factura_vta_orden_venta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_vta_factura_vta_orden_venta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_vta_factura_vta_orden_venta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito_vta_factura_vta_orden_venta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_nota_credito_vta_factura_vta_orden_venta estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_nota_credito_vta_factura_vta_orden_venta->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

