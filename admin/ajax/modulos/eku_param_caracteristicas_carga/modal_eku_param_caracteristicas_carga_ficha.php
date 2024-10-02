<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_caracteristicas_carga = EkuParamCaracteristicasCarga::getOxId($id);
//Gral::prr($eku_param_caracteristicas_carga);
?>

<div class="tabs ficha-eku_param_caracteristicas_carga" identificador="<?php echo $eku_param_caracteristicas_carga->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_caracteristicas_carga id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_caracteristicas_carga->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_caracteristicas_carga descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_caracteristicas_carga->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_caracteristicas_carga codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_caracteristicas_carga->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_caracteristicas_carga codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_caracteristicas_carga->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_caracteristicas_carga observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_caracteristicas_carga->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_caracteristicas_carga orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_caracteristicas_carga->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_caracteristicas_carga estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_caracteristicas_carga->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

