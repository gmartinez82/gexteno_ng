<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_chq_tipo_pago = FndChqTipoPago::getOxId($id);
//Gral::prr($fnd_chq_tipo_pago);
?>

<div class="tabs ficha-fnd_chq_tipo_pago" identificador="<?php echo $fnd_chq_tipo_pago->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_chq_tipo_pago id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_pago->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_chq_tipo_pago descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_pago->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_pago codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_pago->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_pago observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_pago->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_pago orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_pago->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_chq_tipo_pago estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_chq_tipo_pago->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

