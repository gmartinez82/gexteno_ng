<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_ins_etiqueta = InsInsumoInsEtiqueta::getOxId($id);
//Gral::prr($ins_insumo_ins_etiqueta);
?>

<div class="tabs ficha-ins_insumo_ins_etiqueta" identificador="<?php echo $ins_insumo_ins_etiqueta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_ins_etiqueta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_ins_etiqueta->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_ins_etiqueta ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_ins_etiqueta->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_ins_etiqueta ins_etiqueta_id">
            <div class="label"><?php Lang::_lang('InsEtiqueta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_ins_etiqueta->getInsEtiqueta()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

