<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_param_tipo_pais = WsFeParamTipoPais::getOxId($id);
//Gral::prr($ws_fe_param_tipo_pais);
?>

<div class="tabs ficha-ws_fe_param_tipo_pais" identificador="<?php echo $ws_fe_param_tipo_pais->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_param_tipo_pais id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_pais->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_param_tipo_pais descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_pais->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_pais codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_pais->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_pais codigo_afip">
            <div class="label"><?php Lang::_lang('Codigo Afip') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_pais->getCodigoAfip()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_pais observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_pais->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_pais orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_pais->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_pais estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_pais->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

