<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_denominacion_tarjeta = EkuParamDenominacionTarjeta::getOxId($id);
//Gral::prr($eku_param_denominacion_tarjeta);
?>

<div class="tabs ficha-eku_param_denominacion_tarjeta" identificador="<?php echo $eku_param_denominacion_tarjeta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_denominacion_tarjeta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_denominacion_tarjeta->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_denominacion_tarjeta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_denominacion_tarjeta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_denominacion_tarjeta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_denominacion_tarjeta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_denominacion_tarjeta codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_denominacion_tarjeta->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_denominacion_tarjeta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_denominacion_tarjeta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_denominacion_tarjeta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_denominacion_tarjeta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_denominacion_tarjeta estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_denominacion_tarjeta->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

