<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_etiqueta = InsEtiqueta::getOxId($id);
//Gral::prr($ins_etiqueta);
?>

<div class="tabs ficha-ins_etiqueta" identificador="<?php echo $ins_etiqueta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_etiqueta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_etiqueta->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_etiqueta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_etiqueta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_etiqueta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_etiqueta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_etiqueta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_etiqueta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_etiqueta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_etiqueta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_etiqueta estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_etiqueta->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

