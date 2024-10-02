<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_orden_venta_tipo_estado_remision = VtaOrdenVentaTipoEstadoRemision::getOxId($id);
//Gral::prr($vta_orden_venta_tipo_estado_remision);
?>

<div class="tabs ficha-vta_orden_venta_tipo_estado_remision" identificador="<?php echo $vta_orden_venta_tipo_estado_remision->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_orden_venta_tipo_estado_remision id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_remision->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_orden_venta_tipo_estado_remision descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_remision->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_remision codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_remision->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_remision activo">
            <div class="label"><?php Lang::_lang('Activo') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_tipo_estado_remision->getActivo())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_remision terminal">
            <div class="label"><?php Lang::_lang('Terminal') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_tipo_estado_remision->getTerminal())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_remision observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_remision->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_remision orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_tipo_estado_remision->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_tipo_estado_remision estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_tipo_estado_remision->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

