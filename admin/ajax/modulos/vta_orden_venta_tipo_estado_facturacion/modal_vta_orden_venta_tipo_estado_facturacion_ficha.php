<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_orden_venta_tipo_estado_facturacion = VtaOrdenVentaTipoEstadoFacturacion::getOxId($id);
//Gral::prr($vta_orden_venta_tipo_estado_facturacion);
?>

<div class="tabs ficha-vta_orden_venta_tipo_estado_facturacion" identificador="<?php echo $vta_orden_venta_tipo_estado_facturacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_orden_venta_tipo_estado_facturacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_orden_venta_tipo_estado_facturacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_facturacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_facturacion activo">
            <div class="label"><?php Lang::_lang('Activo') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_tipo_estado_facturacion->getActivo())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_facturacion terminal">
            <div class="label"><?php Lang::_lang('Terminal') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_tipo_estado_facturacion->getTerminal())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_facturacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_facturacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_facturacion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_tipo_estado_facturacion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

