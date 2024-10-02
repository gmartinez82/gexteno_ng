<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_orden_venta_estado_cobro = VtaOrdenVentaEstadoCobro::getOxId($id);
//Gral::prr($vta_orden_venta_estado_cobro);
?>

<div class="tabs ficha-vta_orden_venta_estado_cobro" identificador="<?php echo $vta_orden_venta_estado_cobro->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_orden_venta_estado_cobro id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_cobro->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_orden_venta_estado_cobro descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_cobro->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_cobro vta_orden_venta_id">
            <div class="label"><?php Lang::_lang('VtaOrdenVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_cobro->getVtaOrdenVenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_cobro vta_orden_venta_tipo_estado_cobro_id">
            <div class="label"><?php Lang::_lang('VtaOrdenVentaTipoEstadoCobro') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_cobro->getVtaOrdenVentaTipoEstadoCobro()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_cobro inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_estado_cobro->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_cobro actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_estado_cobro->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_cobro codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_cobro->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_cobro observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_cobro->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_cobro orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_cobro->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_cobro estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_estado_cobro->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

