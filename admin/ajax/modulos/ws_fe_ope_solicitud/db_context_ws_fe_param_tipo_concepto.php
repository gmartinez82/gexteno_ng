<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ws_fe_ope_solicitud_id = Gral::getVars(2, 'ws_fe_ope_solicitud_id');
$ws_fe_ope_solicitud = WsFeOpeSolicitud::getOxId($ws_fe_ope_solicitud_id);
$ws_fe_param_tipo_concepto = $ws_fe_ope_solicitud->getWsFeParamTipoConcepto();

?>
<div class="datos" id="<?php Gral::_echo($ws_fe_param_tipo_concepto->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('WsFeParamTipoConcepto') ?>: 
        <strong><?php Gral::_echo($ws_fe_param_tipo_concepto->getId()) ?> - <?php Gral::_echo($ws_fe_param_tipo_concepto->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ws_fe_param_tipo_concepto_alta.php?id=<?php echo($ws_fe_param_tipo_concepto->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeParamTipoConcepto') ?>: <strong><?php Gral::_echo($ws_fe_param_tipo_concepto->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud->getFiltrosArrXCampo('WsFeParamTipoConcepto', 'ws_fe_param_tipo_concepto_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('WsFeOpeSolicituds') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ws_fe_param_tipo_concepto->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

