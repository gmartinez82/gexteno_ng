<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_tributo = VtaTributo::getOxId($id);
//Gral::prr($vta_tributo);
?>

<div class="tabs ficha-vta_tributo" identificador="<?php echo $vta_tributo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_tributo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_tributo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo alicuota_porcentual">
            <div class="label"><?php Lang::_lang('Alicuota Porcentual') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo->getAlicuotaPorcentual()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo alicuota_decimal">
            <div class="label"><?php Lang::_lang('Alicuota Decimal') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo->getAlicuotaDecimal()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo formula">
            <div class="label"><?php Lang::_lang('Formula') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo->getFormula()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo cntb_cuenta_id">
            <div class="label"><?php Lang::_lang('CntbCuenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo->getCntbCuenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_tributo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

