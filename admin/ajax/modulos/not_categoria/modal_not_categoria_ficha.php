<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$not_categoria = NotCategoria::getOxId($id);
//Gral::prr($not_categoria);
?>

<div class="tabs ficha-not_categoria" identificador="<?php echo $not_categoria->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par not_categoria id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_categoria->getId()) ?>
            </div>
        </div>

	
        <div class="par not_categoria descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_categoria->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par not_categoria codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_categoria->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par not_categoria observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_categoria->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par not_categoria orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_categoria->getOrden()) ?>
            </div>
        </div>
		
        <div class="par not_categoria estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($not_categoria->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

