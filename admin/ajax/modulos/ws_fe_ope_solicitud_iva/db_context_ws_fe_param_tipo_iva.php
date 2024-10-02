<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ws_fe_ope_solicitud_iva_id = Gral::getVars(2, 'ws_fe_ope_solicitud_iva_id');
$ws_fe_ope_solicitud_iva = WsFeOpeSolicitudIva::getOxId($ws_fe_ope_solicitud_iva_id);
$ws_fe_param_tipo_iva = $ws_fe_ope_solicitud_iva->getWsFeParamTipoIva();

?>
<div class="datos" id="<?php Gral::_echo($ws_fe_param_tipo_iva->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('WsFeParamTipoIva') ?>: 
        <strong><?php Gral::_echo($ws_fe_param_tipo_iva->getId()) ?> - <?php Gral::_echo($ws_fe_param_tipo_iva->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ws_fe_param_tipo_iva_alta.php?id=<?php echo($ws_fe_param_tipo_iva->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeParamTipoIva') ?>: <strong><?php Gral::_echo($ws_fe_param_tipo_iva->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitudIva::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud_iva->getFiltrosArrXCampo('WsFeParamTipoIva', 'ws_fe_param_tipo_iva_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('WsFeOpeSolicitudIvas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ws_fe_param_tipo_iva->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

