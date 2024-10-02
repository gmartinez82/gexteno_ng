<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";

$id = Gral::getVars(2, 'id', 0);
$vta_politica_descuento = VtaPoliticaDescuento::getOxId($id);
//Gral::prr($vta_politica_descuento);
?>

<div class="tabs ficha-vta_politica_descuento" identificador="<?php echo $vta_politica_descuento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_politica_descuento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_politica_descuento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento observacion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

