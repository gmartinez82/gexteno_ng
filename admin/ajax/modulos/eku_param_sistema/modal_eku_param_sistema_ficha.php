<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_sistema = EkuParamSistema::getOxId($id);
//Gral::prr($eku_param_sistema);
?>

<div class="tabs ficha-eku_param_sistema" identificador="<?php echo $eku_param_sistema->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_sistema id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_sistema->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_sistema descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_sistema->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_sistema codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_sistema->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_sistema codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_sistema->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_sistema observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_sistema->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_sistema orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_sistema->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_sistema estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_sistema->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

