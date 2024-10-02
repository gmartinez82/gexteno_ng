<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_condicion_anticipo = EkuParamCondicionAnticipo::getOxId($id);
//Gral::prr($eku_param_condicion_anticipo);
?>

<div class="tabs ficha-eku_param_condicion_anticipo" identificador="<?php echo $eku_param_condicion_anticipo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_condicion_anticipo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_condicion_anticipo->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_condicion_anticipo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_condicion_anticipo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_condicion_anticipo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_condicion_anticipo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_condicion_anticipo codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_condicion_anticipo->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_condicion_anticipo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_condicion_anticipo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_condicion_anticipo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_condicion_anticipo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_condicion_anticipo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_condicion_anticipo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

