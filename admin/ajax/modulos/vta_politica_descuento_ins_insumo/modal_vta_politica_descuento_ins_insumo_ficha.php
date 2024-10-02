<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_politica_descuento_ins_insumo = VtaPoliticaDescuentoInsInsumo::getOxId($id);
//Gral::prr($vta_politica_descuento_ins_insumo);
?>

<div class="tabs ficha-vta_politica_descuento_ins_insumo" identificador="<?php echo $vta_politica_descuento_ins_insumo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_politica_descuento_ins_insumo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_ins_insumo->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_politica_descuento_ins_insumo vta_politica_descuento_id">
            <div class="label"><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_ins_insumo->getVtaPoliticaDescuento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento_ins_insumo ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_ins_insumo->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

