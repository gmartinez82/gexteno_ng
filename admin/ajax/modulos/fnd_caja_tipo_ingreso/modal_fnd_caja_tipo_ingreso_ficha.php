<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_caja_tipo_ingreso = FndCajaTipoIngreso::getOxId($id);
//Gral::prr($fnd_caja_tipo_ingreso);
?>

<div class="tabs ficha-fnd_caja_tipo_ingreso" identificador="<?php echo $fnd_caja_tipo_ingreso->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_caja_tipo_ingreso id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_tipo_ingreso->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_caja_tipo_ingreso descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_tipo_ingreso->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_tipo_ingreso codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_tipo_ingreso->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_tipo_ingreso observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_tipo_ingreso->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_tipo_ingreso orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_tipo_ingreso->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_tipo_ingreso estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_tipo_ingreso->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

