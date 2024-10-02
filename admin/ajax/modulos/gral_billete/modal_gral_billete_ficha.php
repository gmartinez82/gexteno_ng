<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_billete = GralBillete::getOxId($id);
//Gral::prr($gral_billete);
?>

<div class="tabs ficha-gral_billete" identificador="<?php echo $gral_billete->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_billete id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_billete->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_billete descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_billete->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_billete gral_moneda_id">
            <div class="label"><?php Lang::_lang('GralMoneda') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_billete->getGralMoneda()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_billete importe">
            <div class="label"><?php Lang::_lang('Importe') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_billete->getImporte()) ?>
            </div>
        </div>
		
        <div class="par gral_billete codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_billete->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_billete observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_billete->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_billete orden">
            <div class="label"><?php Lang::_lang('Orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_billete->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_billete estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_billete->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

