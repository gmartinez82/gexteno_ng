<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_punto_venta_actual = VtaPuntoVentaActual::getOxId($id);
//Gral::prr($vta_punto_venta_actual);
?>

<div class="tabs ficha-vta_punto_venta_actual" identificador="<?php echo $vta_punto_venta_actual->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_punto_venta_actual id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta_actual->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_punto_venta_actual descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta_actual->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta_actual vta_punto_venta_id">
            <div class="label"><?php Lang::_lang('VtaPuntoVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta_actual->getVtaPuntoVenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta_actual vta_tipo_punto_venta_id">
            <div class="label"><?php Lang::_lang('VtaTipoPuntoVenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta_actual->getVtaTipoPuntoVenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta_actual serie">
            <div class="label"><?php Lang::_lang('Serie') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta_actual->getSerie()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta_actual numero_actual">
            <div class="label"><?php Lang::_lang('Numero Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta_actual->getNumeroActual()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta_actual observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta_actual->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta_actual orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta_actual->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_punto_venta_actual estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_punto_venta_actual->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

