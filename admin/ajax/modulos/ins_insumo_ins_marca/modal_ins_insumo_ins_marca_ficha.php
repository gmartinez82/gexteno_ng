<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_ins_marca = InsInsumoInsMarca::getOxId($id);
//Gral::prr($ins_insumo_ins_marca);
?>

<div class="tabs ficha-ins_insumo_ins_marca" identificador="<?php echo $ins_insumo_ins_marca->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_ins_marca id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_ins_marca->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_ins_marca ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_ins_marca->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_ins_marca ins_marca_id">
            <div class="label"><?php Lang::_lang('InsMarca') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_ins_marca->getInsMarca()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_ins_marca codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_ins_marca->getCodigo()) ?>
            </div>
        </div>
	
    </div>    

</div>

