<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_param_tipo_afectacion_tributaria = EkuParamTipoAfectacionTributaria::getOxId($id);
//Gral::prr($eku_param_tipo_afectacion_tributaria);
?>

<div class="tabs ficha-eku_param_tipo_afectacion_tributaria" identificador="<?php echo $eku_param_tipo_afectacion_tributaria->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_param_tipo_afectacion_tributaria id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_afectacion_tributaria->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_param_tipo_afectacion_tributaria descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_afectacion_tributaria->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_afectacion_tributaria codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_afectacion_tributaria->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_afectacion_tributaria codigo_eku">
            <div class="label"><?php Lang::_lang('Cod Eku') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_afectacion_tributaria->getCodigoEku()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_afectacion_tributaria observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_afectacion_tributaria->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_afectacion_tributaria orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_param_tipo_afectacion_tributaria->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_param_tipo_afectacion_tributaria estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_param_tipo_afectacion_tributaria->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

