<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_param_tipo_comprobante = WsFeParamTipoComprobante::getOxId($id);
//Gral::prr($ws_fe_param_tipo_comprobante);
?>

<div class="tabs ficha-ws_fe_param_tipo_comprobante" identificador="<?php echo $ws_fe_param_tipo_comprobante->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_param_tipo_comprobante id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_comprobante->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_param_tipo_comprobante descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_comprobante->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_comprobante codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_comprobante->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_comprobante codigo_afip">
            <div class="label"><?php Lang::_lang('Codigo Afip') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_comprobante->getCodigoAfip()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_comprobante fecha_desde">
            <div class="label"><?php Lang::_lang('Fecha Desde') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_comprobante->getFechaDesde()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_comprobante fecha_hasta">
            <div class="label"><?php Lang::_lang('Fecha Hasta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_comprobante->getFechaHasta()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_comprobante observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_comprobante->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_comprobante orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_comprobante->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_param_tipo_comprobante estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_param_tipo_comprobante->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

