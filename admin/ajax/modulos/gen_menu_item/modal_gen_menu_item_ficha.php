<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gen_menu_item = GenMenuItem::getOxId($id);
//Gral::prr($gen_menu_item);
?>

<div class="tabs ficha-gen_menu_item" identificador="<?php echo $gen_menu_item->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gen_menu_item id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_menu_item->getId()) ?>
            </div>
        </div>

	
        <div class="par gen_menu_item descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_menu_item->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_menu_item gen_arbol_id">
            <div class="label"><?php Lang::_lang('GenArbol') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_menu_item->getGenArbol()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_menu_item gen_menu_item_padre">
            <div class="label"><?php Lang::_lang('Padre') ?></div>
            <div class="dato">
                <?php Gral::_echo(($gen_menu_item->getGenMenuItemPadre() != 'null') ? GenMenuItem::getOxId($gen_menu_item->getGenMenuItemPadre())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par gen_menu_item codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_menu_item->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_menu_item alternativo">
            <div class="label"><?php Lang::_lang('Alternativo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_menu_item->getAlternativo()) ?>
            </div>
        </div>
		
        <div class="par gen_menu_item link">
            <div class="label"><?php Lang::_lang('Link') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_menu_item->getLink()) ?>
            </div>
        </div>
		
        <div class="par gen_menu_item observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_menu_item->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gen_menu_item orden">
            <div class="label"><?php Lang::_lang('Orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_menu_item->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gen_menu_item estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_menu_item->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

