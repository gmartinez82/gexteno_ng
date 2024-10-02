<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_politica_descuento_ins_categoria = VtaPoliticaDescuentoInsCategoria::getOxId($id);
//Gral::prr($vta_politica_descuento_ins_categoria);
?>

<div class="tabs ficha-vta_politica_descuento_ins_categoria" identificador="<?php echo $vta_politica_descuento_ins_categoria->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_politica_descuento_ins_categoria id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_ins_categoria->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_politica_descuento_ins_categoria vta_politica_descuento_id">
            <div class="label"><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_ins_categoria->getVtaPoliticaDescuento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento_ins_categoria ins_categoria_id">
            <div class="label"><?php Lang::_lang('InsCategoria') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_ins_categoria->getInsCategoria()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

