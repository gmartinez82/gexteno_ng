<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_chq_tipo_emisor = FndChqTipoEmisor::getOxId($id);
//Gral::prr($fnd_chq_tipo_emisor);
?>

<div class="tabs ficha-fnd_chq_tipo_emisor" identificador="<?php echo $fnd_chq_tipo_emisor->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_chq_tipo_emisor id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_emisor->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_chq_tipo_emisor descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_emisor->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_emisor->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_emisor->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_emisor->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_emisor estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_emisor->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

