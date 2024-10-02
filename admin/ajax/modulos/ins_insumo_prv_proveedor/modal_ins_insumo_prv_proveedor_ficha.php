<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_prv_proveedor = InsInsumoPrvProveedor::getOxId($id);
//Gral::prr($ins_insumo_prv_proveedor);
?>

<div class="tabs ficha-ins_insumo_prv_proveedor" identificador="<?php echo $ins_insumo_prv_proveedor->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_prv_proveedor id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_prv_proveedor->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_prv_proveedor ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_prv_proveedor->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_prv_proveedor prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_prv_proveedor->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_prv_proveedor codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_prv_proveedor->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_prv_proveedor observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_prv_proveedor->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

