<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_presencia = EkuParamTipoPresencia::getOxId($id);
//Gral::prr($eku_param_tipo_presencia);
?>

<div class="tabs ficha-eku_param_tipo_presencia" identificador="<?php echo $eku_param_tipo_presencia->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_presencia id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_presencia->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_presencia descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_presencia->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_presencia codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_presencia->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_presencia codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_presencia->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_presencia observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_presencia->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_presencia orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_presencia->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_presencia estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_tipo_presencia->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

