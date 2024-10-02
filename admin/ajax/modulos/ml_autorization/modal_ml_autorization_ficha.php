<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ml_autorization = MlAutorization::getOxId($id);
//Gral::prr($ml_autorization);
?>

<div class="tabs ficha-ml_autorization" identificador="<?php echo $ml_autorization->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ml_autorization id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_autorization->getId()) ?>
            </div>
        </div>

	
        <div class="par ml_autorization descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_autorization->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_autorization codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_autorization->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ml_autorization ml_access_token">
            <div class="label"><?php Lang::_lang('ML Access Token') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_autorization->getMlAccessToken()) ?>
            </div>
        </div>
		
        <div class="par ml_autorization ml_refresh_code">
            <div class="label"><?php Lang::_lang('ML Refresh Code') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_autorization->getMlRefreshCode()) ?>
            </div>
        </div>
		
        <div class="par ml_autorization inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ml_autorization->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_autorization actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ml_autorization->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_autorization observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_autorization->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ml_autorization orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_autorization->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ml_autorization estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_autorization->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

