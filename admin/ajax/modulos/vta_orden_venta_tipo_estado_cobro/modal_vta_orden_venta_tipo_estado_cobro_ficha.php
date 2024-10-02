<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_orden_venta_tipo_estado_cobro = VtaOrdenVentaTipoEstadoCobro::getOxId($id);
//Gral::prr($vta_orden_venta_tipo_estado_cobro);
?>

<div class="tabs ficha-vta_orden_venta_tipo_estado_cobro" identificador="<?php echo $vta_orden_venta_tipo_estado_cobro->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_orden_venta_tipo_estado_cobro id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_cobro->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_orden_venta_tipo_estado_cobro descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_cobro->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_cobro codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_cobro->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_cobro activo">
            <div class="label"><?php Lang::_lang('Activo') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_tipo_estado_cobro->getActivo())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_cobro terminal">
            <div class="label"><?php Lang::_lang('Terminal') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_tipo_estado_cobro->getTerminal())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_cobro observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_cobro->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_cobro orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_cobro->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_cobro estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_tipo_estado_cobro->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

