<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_transporte_modalidad = EkuParamTransporteModalidad::getOxId($id);
//Gral::prr($eku_param_transporte_modalidad);
?>

<div class="tabs ficha-eku_param_transporte_modalidad" identificador="<?php echo $eku_param_transporte_modalidad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_transporte_modalidad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_modalidad->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_transporte_modalidad descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_modalidad->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_modalidad codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_modalidad->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_modalidad codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_modalidad->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_modalidad observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_modalidad->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_modalidad orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_modalidad->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_modalidad estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_transporte_modalidad->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

