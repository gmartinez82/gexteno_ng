<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pan_tipo_panol = PanTipoPanol::getOxId($id);
//Gral::prr($pan_tipo_panol);
?>

<div class="tabs ficha-pan_tipo_panol" identificador="<?php echo $pan_tipo_panol->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pan_tipo_panol id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_tipo_panol->getId()) ?>
            </div>
        </div>

	
        <div class="par pan_tipo_panol descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_tipo_panol->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pan_tipo_panol codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_tipo_panol->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pan_tipo_panol observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_tipo_panol->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pan_tipo_panol orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_tipo_panol->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pan_tipo_panol estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_tipo_panol->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

