<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_similar = InsInsumoSimilar::getOxId($id);
//Gral::prr($ins_insumo_similar);
?>

<div class="tabs ficha-ins_insumo_similar" identificador="<?php echo $ins_insumo_similar->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_similar id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_similar->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_similar ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_similar->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_similar ins_insumo_similar">
            <div class="label"><?php Lang::_lang('InsInsumoSimilar') ?></div>
            <div class="dato">
                <?php Gral::_echo(($ins_insumo_similar->getInsInsumoSimilar() != 'null') ? InsInsumo::getOxId($ins_insumo_similar->getInsInsumoSimilar())->getDescripcion() : '') ?>
            </div>
        </div>
	
    </div>    

</div>

