<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_param_tipo_opcional = WsFeParamTipoOpcional::getOxId($id);
//Gral::prr($ws_fe_param_tipo_opcional);
?>

<div class="tabs ficha-ws_fe_param_tipo_opcional" identificador="<?php echo $ws_fe_param_tipo_opcional->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_param_tipo_opcional id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_opcional->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_param_tipo_opcional descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_opcional->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_opcional codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_opcional->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_opcional codigo_afip">
            <div class="label"><?php Lang::_lang('Codigo Afip') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_opcional->getCodigoAfip()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_opcional fecha_desde">
            <div class="label"><?php Lang::_lang('Fecha Desde') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_opcional->getFechaDesde()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_opcional fecha_hasta">
            <div class="label"><?php Lang::_lang('Fecha Hasta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_opcional->getFechaHasta()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_opcional observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_opcional->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_opcional orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_opcional->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_opcional estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_opcional->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

