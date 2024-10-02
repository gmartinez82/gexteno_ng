<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_presupuesto_tipo_venta = VtaPresupuestoTipoVenta::getOxId($id);
//Gral::prr($vta_presupuesto_tipo_venta);
?>

<div class="tabs ficha-vta_presupuesto_tipo_venta" identificador="<?php echo $vta_presupuesto_tipo_venta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_presupuesto_tipo_venta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_tipo_venta->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_presupuesto_tipo_venta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_tipo_venta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_tipo_venta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_tipo_venta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_tipo_venta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_tipo_venta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_tipo_venta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_tipo_venta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_tipo_venta estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_tipo_venta->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

