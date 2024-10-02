<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ws_fe_ope_solicitud_comprobante_asociado = WsFeOpeSolicitudComprobanteAsociado::getOxId($id);
//Gral::prr($ws_fe_ope_solicitud_comprobante_asociado);
?>

<div class="tabs ficha-ws_fe_ope_solicitud_comprobante_asociado" identificador="<?php echo $ws_fe_ope_solicitud_comprobante_asociado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ws_fe_ope_solicitud_comprobante_asociado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getId()) ?>
            </div>
        </div>

	
        <div class="par ws_fe_ope_solicitud_comprobante_asociado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_comprobante_asociado ws_fe_ope_solicitud_id">
            <div class="label"><?php Lang::_lang('WsFeOpeSolicitud') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getWsFeOpeSolicitud()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_comprobante_asociado ws_fe_afip_tipo_comprobante">
            <div class="label"><?php Lang::_lang('Tipo de Comprobante') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipTipoComprobante()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_comprobante_asociado ws_fe_afip_punto_venta">
            <div class="label"><?php Lang::_lang('Punto de Venta') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipPuntoVenta()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_comprobante_asociado ws_fe_afip_numero">
            <div class="label"><?php Lang::_lang('Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipNumero()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_comprobante_asociado ws_fe_afip_cuit">
            <div class="label"><?php Lang::_lang('Cuit') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getWsFeAfipCuit()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_comprobante_asociado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ws_fe_ope_solicitud_comprobante_asociado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ws_fe_ope_solicitud_comprobante_asociado->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

