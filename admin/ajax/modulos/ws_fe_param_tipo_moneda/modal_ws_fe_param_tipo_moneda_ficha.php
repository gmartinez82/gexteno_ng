<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_param_tipo_moneda = WsFeParamTipoMoneda::getOxId($id);
//Gral::prr($ws_fe_param_tipo_moneda);
?>

<div class="tabs ficha-ws_fe_param_tipo_moneda" identificador="<?php echo $ws_fe_param_tipo_moneda->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_param_tipo_moneda id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_moneda->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_param_tipo_moneda descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_moneda->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_moneda codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_moneda->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_moneda codigo_afip">
            <div class="label"><?php Lang::_lang('Codigo Afip') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_moneda->getCodigoAfip()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_moneda fecha_desde">
            <div class="label"><?php Lang::_lang('Fecha Desde') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_moneda->getFechaDesde()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_moneda fecha_hasta">
            <div class="label"><?php Lang::_lang('Fecha Hasta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_moneda->getFechaHasta()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_moneda observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_moneda->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_moneda orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_moneda->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_moneda estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_moneda->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

