<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_factura_item = PdeFacturaItem::getOxId($id);
//Gral::prr($pde_factura_item);
?>

<div class="tabs ficha-pde_factura_item" identificador="<?php echo $pde_factura_item->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_factura_item id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_item->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_factura_item descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_item->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_item pde_factura_id">
            <div class="label"><?php Lang::_lang('PdeFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_item->getPdeFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_item gral_tipo_iva_id">
            <div class="label"><?php Lang::_lang('GralTipoIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_item->getGralTipoIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_item pde_factura_concepto_id">
            <div class="label"><?php Lang::_lang('PdeFacturaConcepto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_item->getPdeFacturaConcepto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_item importe_unitario">
            <div class="label"><?php Lang::_lang('Imp Unitario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_item->getImporteUnitario()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_item cantidad">
            <div class="label"><?php Lang::_lang('cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_item->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_item codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_item->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_item observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_item->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_item orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_item->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_item estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_factura_item->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

