<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_venta_ml_info_id = Gral::getVars(2, 'ins_venta_ml_info_id');
$ins_venta_ml_info = InsVentaMlInfo::getOxId($ins_venta_ml_info_id);
$ml_shipping_mode = $ins_venta_ml_info->getMlShippingMode();

?>
<div class="datos" id="<?php Gral::_echo($ml_shipping_mode->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('MlShippingMode') ?>: 
        <strong><?php Gral::_echo($ml_shipping_mode->getId()) ?> - <?php Gral::_echo($ml_shipping_mode->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ml_shipping_mode_alta.php?id=<?php echo($ml_shipping_mode->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('MlShippingMode') ?>: <strong><?php Gral::_echo($ml_shipping_mode->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsVentaMlInfo::getFiltrosArrGral() ?>&arr=<?php echo $ins_venta_ml_info->getFiltrosArrXCampo('MlShippingMode', 'ml_shipping_mode_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsVentaMlInfos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ml_shipping_mode->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

