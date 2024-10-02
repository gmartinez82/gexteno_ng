<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_comision_vta_factura = VtaComisionVtaFactura::getOxId($id);
//Gral::prr($vta_comision_vta_factura);
?>

<div class="tabs ficha-vta_comision_vta_factura" identificador="<?php echo $vta_comision_vta_factura->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_comision_vta_factura id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_vta_factura->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_comision_vta_factura descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_vta_factura->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_vta_factura vta_comision_id">
            <div class="label"><?php Lang::_lang('VtaComision') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_vta_factura->getVtaComision()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_vta_factura vta_factura_id">
            <div class="label"><?php Lang::_lang('VtaFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_vta_factura->getVtaFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_vta_factura base_comisionable">
            <div class="label"><?php Lang::_lang('Base Comisionable') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_vta_factura->getBaseComisionable()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_vta_factura importe_afectado">
            <div class="label"><?php Lang::_lang('Imp Afectado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_vta_factura->getImporteAfectado()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_vta_factura porcentaje_comision">
            <div class="label"><?php Lang::_lang('Porc Comision') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_vta_factura->getPorcentajeComision()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_vta_factura importe_comision">
            <div class="label"><?php Lang::_lang('Imp Comision') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_vta_factura->getImporteComision()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_vta_factura codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_vta_factura->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_vta_factura observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_vta_factura->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_vta_factura orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comision_vta_factura->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_comision_vta_factura estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_comision_vta_factura->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

