<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_categoria_ins_marca = InsCategoriaInsMarca::getOxId($id);
//Gral::prr($ins_categoria_ins_marca);
?>

<div class="tabs ficha-ins_categoria_ins_marca" identificador="<?php echo $ins_categoria_ins_marca->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_categoria_ins_marca id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_categoria_ins_marca->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_categoria_ins_marca ins_categoria_id">
            <div class="label"><?php Lang::_lang('InsCategoria') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_categoria_ins_marca->getInsCategoria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_categoria_ins_marca ins_marca_id">
            <div class="label"><?php Lang::_lang('InsMarca') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_categoria_ins_marca->getInsMarca()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

