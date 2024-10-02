<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_chq_chequera = FndChqChequera::getOxId($id);
//Gral::prr($fnd_chq_chequera);
?>

<div class="tabs ficha-fnd_chq_chequera" identificador="<?php echo $fnd_chq_chequera->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_chq_chequera id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_chequera->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_chq_chequera descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_chequera->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_chequera gral_banco_id">
            <div class="label"><?php Lang::_lang('GralBanco') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_chequera->getGralBanco()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_chequera codigo_sucursal">
            <div class="label"><?php Lang::_lang('Codigo Sucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_chequera->getCodigoSucursal()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_chequera titular">
            <div class="label"><?php Lang::_lang('Titular') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_chequera->getTitular()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_chequera codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_chequera->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_chequera observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_chequera->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_chequera orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_chequera->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_chequera estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_chequera->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

