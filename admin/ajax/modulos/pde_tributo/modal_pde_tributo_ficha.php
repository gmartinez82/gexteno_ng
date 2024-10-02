<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_tributo = PdeTributo::getOxId($id);
//Gral::prr($pde_tributo);
?>

<div class="tabs ficha-pde_tributo" identificador="<?php echo $pde_tributo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_tributo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tributo->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_tributo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tributo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_tributo alicuota_porcentual">
            <div class="label"><?php Lang::_lang('Alicuota Porcentual') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tributo->getAlicuotaPorcentual()) ?>
            </div>
        </div>
		
        <div class="par pde_tributo alicuota_decimal">
            <div class="label"><?php Lang::_lang('Alicuota Decimal') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tributo->getAlicuotaDecimal()) ?>
            </div>
        </div>
		
        <div class="par pde_tributo formula">
            <div class="label"><?php Lang::_lang('Formula') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tributo->getFormula()) ?>
            </div>
        </div>
		
        <div class="par pde_tributo cntb_cuenta_id">
            <div class="label"><?php Lang::_lang('CntbCuenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tributo->getCntbCuenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_tributo es_retencion">
            <div class="label"><?php Lang::_lang('Es Retencion') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_tributo->getEsRetencion())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_tributo es_percepcion">
            <div class="label"><?php Lang::_lang('Es Percepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_tributo->getEsPercepcion())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_tributo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tributo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_tributo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tributo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_tributo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tributo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_tributo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_tributo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

