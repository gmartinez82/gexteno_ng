<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_orden_venta_vta_recibo = VtaOrdenVentaVtaRecibo::getOxId($id);
//Gral::prr($vta_orden_venta_vta_recibo);
?>

<div class="tabs ficha-vta_orden_venta_vta_recibo" identificador="<?php echo $vta_orden_venta_vta_recibo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_orden_venta_vta_recibo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_vta_recibo->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_orden_venta_vta_recibo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_vta_recibo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_vta_recibo vta_orden_venta_id">
            <div class="label"><?php Lang::_lang('VtaOrdenVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_vta_recibo->getVtaOrdenVenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_vta_recibo vta_recibo_id">
            <div class="label"><?php Lang::_lang('VtaRecibo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_vta_recibo->getVtaRecibo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_vta_recibo importe_afectado">
            <div class="label"><?php Lang::_lang('Imp Afectado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_vta_recibo->getImporteAfectado()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_vta_recibo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_vta_recibo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_vta_recibo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_vta_recibo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_vta_recibo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_vta_recibo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_vta_recibo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_vta_recibo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

