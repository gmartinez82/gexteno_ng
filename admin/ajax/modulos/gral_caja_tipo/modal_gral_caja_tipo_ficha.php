<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_caja_tipo = GralCajaTipo::getOxId($id);
//Gral::prr($gral_caja_tipo);
?>

<div class="tabs ficha-gral_caja_tipo" identificador="<?php echo $gral_caja_tipo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_caja_tipo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja_tipo->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_caja_tipo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja_tipo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_caja_tipo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja_tipo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_caja_tipo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja_tipo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_caja_tipo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja_tipo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_caja_tipo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_caja_tipo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

