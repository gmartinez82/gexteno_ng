<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_punto_venta_ws_fe_param_punto_venta_id = Gral::getVars(2, 'vta_punto_venta_ws_fe_param_punto_venta_id');
$vta_punto_venta_ws_fe_param_punto_venta = VtaPuntoVentaWsFeParamPuntoVenta::getOxId($vta_punto_venta_ws_fe_param_punto_venta_id);
$ws_fe_param_punto_venta = $vta_punto_venta_ws_fe_param_punto_venta->getWsFeParamPuntoVenta();

?>
<div class="datos" id="<?php Gral::_echo($ws_fe_param_punto_venta->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('WsFeParamPuntoVenta') ?>: 
        <strong><?php Gral::_echo($ws_fe_param_punto_venta->getId()) ?> - <?php Gral::_echo($ws_fe_param_punto_venta->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ws_fe_param_punto_venta_alta.php?id=<?php echo($ws_fe_param_punto_venta->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeParamPuntoVenta') ?>: <strong><?php Gral::_echo($ws_fe_param_punto_venta->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaPuntoVentaWsFeParamPuntoVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_punto_venta_ws_fe_param_punto_venta->getFiltrosArrXCampo('WsFeParamPuntoVenta', 'ws_fe_param_punto_venta_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaPuntoVentaWsFeParamPuntoVentas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ws_fe_param_punto_venta->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

