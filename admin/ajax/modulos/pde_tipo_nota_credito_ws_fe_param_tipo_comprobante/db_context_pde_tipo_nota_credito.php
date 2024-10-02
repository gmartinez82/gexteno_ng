<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_id = Gral::getVars(2, 'pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_id');
$pde_tipo_nota_credito_ws_fe_param_tipo_comprobante = PdeTipoNotaCreditoWsFeParamTipoComprobante::getOxId($pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_id);
$pde_tipo_nota_credito = $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getPdeTipoNotaCredito();

?>
<div class="datos" id="<?php Gral::_echo($pde_tipo_nota_credito->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeTipoNotaCredito') ?>: 
        <strong><?php Gral::_echo($pde_tipo_nota_credito->getId()) ?> - <?php Gral::_echo($pde_tipo_nota_credito->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_tipo_nota_credito_alta.php?id=<?php echo($pde_tipo_nota_credito->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeTipoNotaCredito') ?>: <strong><?php Gral::_echo($pde_tipo_nota_credito->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeTipoNotaCreditoWsFeParamTipoComprobante::getFiltrosArrGral() ?>&arr=<?php echo $pde_tipo_nota_credito_ws_fe_param_tipo_comprobante->getFiltrosArrXCampo('PdeTipoNotaCredito', 'pde_tipo_nota_credito_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeTipoNotaCreditoWsFeParamTipoComprobantes') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_tipo_nota_credito->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

