<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ws_fe_ope_solicitud_tributo_id = Gral::getVars(2, 'ws_fe_ope_solicitud_tributo_id');
$ws_fe_ope_solicitud_tributo = WsFeOpeSolicitudTributo::getOxId($ws_fe_ope_solicitud_tributo_id);
$ws_fe_param_tipo_tributo = $ws_fe_ope_solicitud_tributo->getWsFeParamTipoTributo();

?>
<div class="datos" id="<?php Gral::_echo($ws_fe_param_tipo_tributo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('WsFeParamTipoTributo') ?>: 
        <strong><?php Gral::_echo($ws_fe_param_tipo_tributo->getId()) ?> - <?php Gral::_echo($ws_fe_param_tipo_tributo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ws_fe_param_tipo_tributo_alta.php?id=<?php echo($ws_fe_param_tipo_tributo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeParamTipoTributo') ?>: <strong><?php Gral::_echo($ws_fe_param_tipo_tributo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo WsFeOpeSolicitudTributo::getFiltrosArrGral() ?>&arr=<?php echo $ws_fe_ope_solicitud_tributo->getFiltrosArrXCampo('WsFeParamTipoTributo', 'ws_fe_param_tipo_tributo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('WsFeOpeSolicitudTributos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ws_fe_param_tipo_tributo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

