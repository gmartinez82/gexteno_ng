<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_contribuyente = EkuParamTipoContribuyente::getOxId($id);
//Gral::prr($eku_param_tipo_contribuyente);
?>

<div class="tabs ficha-eku_param_tipo_contribuyente" identificador="<?php echo $eku_param_tipo_contribuyente->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_contribuyente id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_contribuyente->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_contribuyente descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_contribuyente->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_contribuyente codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_contribuyente->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_contribuyente codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_contribuyente->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_contribuyente observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_contribuyente->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_contribuyente orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_contribuyente->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_contribuyente estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_tipo_contribuyente->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

