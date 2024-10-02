<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_moneda = EkuParamMoneda::getOxId($id);
//Gral::prr($eku_param_moneda);
?>

<div class="tabs ficha-eku_param_moneda" identificador="<?php echo $eku_param_moneda->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_moneda id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_moneda->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_moneda descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_moneda->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_moneda codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_moneda->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_moneda codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_moneda->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_moneda observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_moneda->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_moneda orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_moneda->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_moneda estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_moneda->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

