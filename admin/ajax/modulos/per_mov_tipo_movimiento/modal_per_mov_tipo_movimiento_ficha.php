<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$per_mov_tipo_movimiento = PerMovTipoMovimiento::getOxId($id);
//Gral::prr($per_mov_tipo_movimiento);
?>

<div class="tabs ficha-per_mov_tipo_movimiento" identificador="<?php echo $per_mov_tipo_movimiento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par per_mov_tipo_movimiento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_tipo_movimiento->getId()) ?>
            </div>
        </div>

	
        <div class="par per_mov_tipo_movimiento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_tipo_movimiento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_tipo_movimiento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_tipo_movimiento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par per_mov_tipo_movimiento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_tipo_movimiento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par per_mov_tipo_movimiento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_mov_tipo_movimiento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par per_mov_tipo_movimiento estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_mov_tipo_movimiento->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

