<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_orden_venta_estado = VtaOrdenVentaEstado::getOxId($id);
//Gral::prr($vta_orden_venta_estado);
?>

<div class="tabs ficha-vta_orden_venta_estado" identificador="<?php echo $vta_orden_venta_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_orden_venta_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_orden_venta_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado vta_orden_venta_id">
            <div class="label"><?php Lang::_lang('VtaOrdenVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado->getVtaOrdenVenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado vta_orden_venta_tipo_estado_id">
            <div class="label"><?php Lang::_lang('VtaOrdenVentaTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado->getVtaOrdenVentaTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

