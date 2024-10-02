<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_factura_id = Gral::getVars(2, 'vta_factura_id');
$vta_factura = VtaFactura::getOxId($vta_factura_id);
$gral_fp_forma_pago = $vta_factura->getGralFpFormaPago();

?>
<div class="datos" id="<?php Gral::_echo($gral_fp_forma_pago->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralFpFormaPago') ?>: 
        <strong><?php Gral::_echo($gral_fp_forma_pago->getId()) ?> - <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_fp_forma_pago_alta.php?id=<?php echo($gral_fp_forma_pago->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralFpFormaPago') ?>: <strong><?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura->getFiltrosArrXCampo('GralFpFormaPago', 'gral_fp_forma_pago_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaFacturas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

