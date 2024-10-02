<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_memo_tipo = UsMemoTipo::getOxId($id);
//Gral::prr($us_memo_tipo);
?>

<div class="tabs ficha-us_memo_tipo" identificador="<?php echo $us_memo_tipo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_memo_tipo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo_tipo->getId()) ?>
            </div>
        </div>

	
        <div class="par us_memo_tipo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo_tipo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_memo_tipo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo_tipo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par us_memo_tipo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo_tipo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par us_memo_tipo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo_tipo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par us_memo_tipo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_memo_tipo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

