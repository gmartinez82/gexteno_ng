<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_recibo_ws_fe_ope_solicitud_id = Gral::getVars(2, 'vta_recibo_ws_fe_ope_solicitud_id');
$vta_recibo_ws_fe_ope_solicitud = VtaReciboWsFeOpeSolicitud::getOxId($vta_recibo_ws_fe_ope_solicitud_id);
$ws_fe_ope_solicitud = $vta_recibo_ws_fe_ope_solicitud->getWsFeOpeSolicitud();

?>
<div class="datos" id="<?php Gral::_echo($ws_fe_ope_solicitud->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('WsFeOpeSolicitud') ?>: 
        <strong><?php Gral::_echo($ws_fe_ope_solicitud->getId()) ?> - <?php Gral::_echo($ws_fe_ope_solicitud->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ws_fe_ope_solicitud_alta.php?id=<?php echo($ws_fe_ope_solicitud->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?>: <strong><?php Gral::_echo($ws_fe_ope_solicitud->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaReciboWsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_ws_fe_ope_solicitud->getFiltrosArrXCampo('WsFeOpeSolicitud', 'ws_fe_ope_solicitud_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaReciboWsFeOpeSolicituds') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ws_fe_ope_solicitud->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

