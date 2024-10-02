<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_tipo_factura_ws_fe_param_tipo_comprobante_id = Gral::getVars(2, 'pde_tipo_factura_ws_fe_param_tipo_comprobante_id');
$pde_tipo_factura_ws_fe_param_tipo_comprobante = PdeTipoFacturaWsFeParamTipoComprobante::getOxId($pde_tipo_factura_ws_fe_param_tipo_comprobante_id);
$ws_fe_param_tipo_comprobante = $pde_tipo_factura_ws_fe_param_tipo_comprobante->getWsFeParamTipoComprobante();

?>
<div class="datos" id="<?php Gral::_echo($ws_fe_param_tipo_comprobante->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('WsFeParamTipoComprobante') ?>: 
        <strong><?php Gral::_echo($ws_fe_param_tipo_comprobante->getId()) ?> - <?php Gral::_echo($ws_fe_param_tipo_comprobante->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ws_fe_param_tipo_comprobante_alta.php?id=<?php echo($ws_fe_param_tipo_comprobante->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('WsFeParamTipoComprobante') ?>: <strong><?php Gral::_echo($ws_fe_param_tipo_comprobante->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeTipoFacturaWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $pde_tipo_factura_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('WsFeParamTipoComprobante', 'ws_fe_param_tipo_comprobante_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeTipoFacturaWsFeParamTipoComprobantes') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ws_fe_param_tipo_comprobante->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

