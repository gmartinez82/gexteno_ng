<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$os_tipo = OsTipo::getOxId($id);
//Gral::prr($os_tipo);
?>

<div class="tabs ficha-os_tipo" identificador="<?php echo $os_tipo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par os_tipo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_tipo->getId()) ?>
            </div>
        </div>

	
        <div class="par os_tipo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_tipo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_tipo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_tipo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par os_tipo plantilla">
            <div class="label"><?php Lang::_lang('Plantilla') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_tipo->getPlantilla()) ?>
            </div>
        </div>
		
        <div class="par os_tipo codigo_numerico">
            <div class="label"><?php Lang::_lang('Codigo Numerico') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_tipo->getCodigoNumerico()) ?>
            </div>
        </div>
		
        <div class="par os_tipo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_tipo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par os_tipo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_tipo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par os_tipo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($os_tipo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

