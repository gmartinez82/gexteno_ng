<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_caja_tipo_movimiento = FndCajaTipoMovimiento::getOxId($id);
//Gral::prr($fnd_caja_tipo_movimiento);
?>

<div class="tabs ficha-fnd_caja_tipo_movimiento" identificador="<?php echo $fnd_caja_tipo_movimiento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_caja_tipo_movimiento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_tipo_movimiento->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_caja_tipo_movimiento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_tipo_movimiento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_tipo_movimiento automatico">
            <div class="label"><?php Lang::_lang('Automatico') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_tipo_movimiento->getAutomatico())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_tipo_movimiento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_tipo_movimiento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_tipo_movimiento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_tipo_movimiento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_tipo_movimiento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_caja_tipo_movimiento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_caja_tipo_movimiento estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_caja_tipo_movimiento->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

