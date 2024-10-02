<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_transporte_condicion_negociacion = EkuParamTransporteCondicionNegociacion::getOxId($id);
//Gral::prr($eku_param_transporte_condicion_negociacion);
?>

<div class="tabs ficha-eku_param_transporte_condicion_negociacion" identificador="<?php echo $eku_param_transporte_condicion_negociacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_transporte_condicion_negociacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_condicion_negociacion->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_transporte_condicion_negociacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_condicion_negociacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_condicion_negociacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_condicion_negociacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_condicion_negociacion codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_condicion_negociacion->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_condicion_negociacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_condicion_negociacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_condicion_negociacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_transporte_condicion_negociacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_transporte_condicion_negociacion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_transporte_condicion_negociacion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

