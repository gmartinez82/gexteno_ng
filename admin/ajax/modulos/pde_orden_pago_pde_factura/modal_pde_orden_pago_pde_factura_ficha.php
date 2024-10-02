<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_orden_pago_pde_factura = PdeOrdenPagoPdeFactura::getOxId($id);
//Gral::prr($pde_orden_pago_pde_factura);
?>

<div class="tabs ficha-pde_orden_pago_pde_factura" identificador="<?php echo $pde_orden_pago_pde_factura->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_orden_pago_pde_factura id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_factura->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_orden_pago_pde_factura descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_factura->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_factura pde_orden_pago_id">
            <div class="label"><?php Lang::_lang('PdeOrdenPago') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_factura->getPdeOrdenPago()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_factura pde_factura_id">
            <div class="label"><?php Lang::_lang('PdeFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_factura->getPdeFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_factura importe_afectado">
            <div class="label"><?php Lang::_lang('Imp Afectado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_factura->getImporteAfectado()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_factura codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_factura->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_factura observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_factura->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_factura orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago_pde_factura->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_orden_pago_pde_factura estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_orden_pago_pde_factura->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

