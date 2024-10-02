<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_transporte_tipo = EkuParamTransporteTipo::getOxId($id);
//Gral::prr($eku_param_transporte_tipo);
?>

<div class="tabs ficha-eku_param_transporte_tipo" identificador="<?php echo $eku_param_transporte_tipo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_transporte_tipo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_tipo->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_transporte_tipo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_tipo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_tipo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_tipo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_tipo codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_tipo->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_tipo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_tipo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_tipo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_tipo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_tipo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_transporte_tipo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

