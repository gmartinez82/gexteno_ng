<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_nota_credito_ws_fe_ope_solicitud_id = Gral::getVars(2, 'vta_nota_credito_ws_fe_ope_solicitud_id');
$vta_nota_credito_ws_fe_ope_solicitud = VtaNotaCreditoWsFeOpeSolicitud::getOxId($vta_nota_credito_ws_fe_ope_solicitud_id);
$vta_nota_credito = $vta_nota_credito_ws_fe_ope_solicitud->getVtaNotaCredito();

?>
<div class="datos" id="<?php Gral::_echo($vta_nota_credito->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaNotaCredito') ?>: 
        <strong><?php Gral::_echo($vta_nota_credito->getId()) ?> - <?php Gral::_echo($vta_nota_credito->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_nota_credito_alta.php?id=<?php echo($vta_nota_credito->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCredito') ?>: <strong><?php Gral::_echo($vta_nota_credito->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoWsFeOpeSolicitud::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_ws_fe_ope_solicitud->getFiltrosArrXCampo('VtaNotaCredito', 'vta_nota_credito_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaNotaCreditoWsFeOpeSolicituds') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_nota_credito->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

