<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$us_memo_estado = UsMemoEstado::getOxId($id);
//Gral::prr($us_memo_estado);
?>

<div class="tabs ficha-us_memo_estado" identificador="<?php echo $us_memo_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par us_memo_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par us_memo_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_memo_estado us_memo_id">
            <div class="label"><?php Lang::_lang('UsMemo') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo_estado->getUsMemo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_memo_estado us_memo_tipo_estado_id">
            <div class="label"><?php Lang::_lang('UsMemoTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo_estado->getUsMemoTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_memo_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_memo_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_memo_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_memo_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par us_memo_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par us_memo_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par us_memo_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($us_memo_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par us_memo_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($us_memo_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

