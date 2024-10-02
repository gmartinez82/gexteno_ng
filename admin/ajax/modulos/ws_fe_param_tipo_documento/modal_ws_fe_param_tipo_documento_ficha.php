<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_param_tipo_documento = WsFeParamTipoDocumento::getOxId($id);
//Gral::prr($ws_fe_param_tipo_documento);
?>

<div class="tabs ficha-ws_fe_param_tipo_documento" identificador="<?php echo $ws_fe_param_tipo_documento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_param_tipo_documento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_documento->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_param_tipo_documento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_documento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_documento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_documento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_documento codigo_afip">
            <div class="label"><?php Lang::_lang('Codigo Afip') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_documento->getCodigoAfip()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_documento fecha_desde">
            <div class="label"><?php Lang::_lang('Fecha Desde') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_documento->getFechaDesde()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_documento fecha_hasta">
            <div class="label"><?php Lang::_lang('Fecha Hasta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_documento->getFechaHasta()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_documento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_documento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_documento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_documento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_documento estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_documento->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

