<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_orden_venta_estado_remision = VtaOrdenVentaEstadoRemision::getOxId($id);
//Gral::prr($vta_orden_venta_estado_remision);
?>

<div class="tabs ficha-vta_orden_venta_estado_remision" identificador="<?php echo $vta_orden_venta_estado_remision->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_orden_venta_estado_remision id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_remision->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_orden_venta_estado_remision descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_remision->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_remision vta_orden_venta_id">
            <div class="label"><?php Lang::_lang('VtaOrdenVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_remision->getVtaOrdenVenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_remision vta_orden_venta_tipo_estado_remision_id">
            <div class="label"><?php Lang::_lang('VtaOrdenVentaTipoEstadoRemision') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_remision->getVtaOrdenVentaTipoEstadoRemision()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_remision inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_estado_remision->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_remision actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_estado_remision->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_remision codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_remision->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_remision observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_remision->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_remision orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_orden_venta_estado_remision->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_orden_venta_estado_remision estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_orden_venta_estado_remision->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

