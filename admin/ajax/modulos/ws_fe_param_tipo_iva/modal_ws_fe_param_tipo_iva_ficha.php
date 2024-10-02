<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_param_tipo_iva = WsFeParamTipoIva::getOxId($id);
//Gral::prr($ws_fe_param_tipo_iva);
?>

<div class="tabs ficha-ws_fe_param_tipo_iva" identificador="<?php echo $ws_fe_param_tipo_iva->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_param_tipo_iva id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_iva->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_param_tipo_iva descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_iva->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_iva codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_iva->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_iva codigo_afip">
            <div class="label"><?php Lang::_lang('Codigo Afip') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_iva->getCodigoAfip()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_iva fecha_desde">
            <div class="label"><?php Lang::_lang('Fecha Desde') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_iva->getFechaDesde()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_iva fecha_hasta">
            <div class="label"><?php Lang::_lang('Fecha Hasta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_iva->getFechaHasta()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_iva observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_iva->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_iva orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_iva->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_iva estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_iva->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

