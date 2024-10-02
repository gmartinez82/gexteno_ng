<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_cuenta_plan = CntbCuentaPlan::getOxId($id);
//Gral::prr($cntb_cuenta_plan);
?>

<div class="tabs ficha-cntb_cuenta_plan" identificador="<?php echo $cntb_cuenta_plan->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_cuenta_plan id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta_plan->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_cuenta_plan descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta_plan->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta_plan codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta_plan->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta_plan php_clase">
            <div class="label"><?php Lang::_lang('PHP Clase') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta_plan->getPhpClase()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta_plan bd_tabla">
            <div class="label"><?php Lang::_lang('BD Tabla') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta_plan->getBdTabla()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta_plan observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta_plan->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta_plan orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_cuenta_plan->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cntb_cuenta_plan estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cntb_cuenta_plan->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

