<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_fp_cuota_id = Gral::getVars(2, 'gral_fp_cuota_id');
$gral_fp_cuota = GralFpCuota::getOxId($gral_fp_cuota_id);
$gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();

?>
<div class="datos" id="<?php Gral::_echo($gral_fp_medio_pago->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralFpMedioPago') ?>: 
        <strong><?php Gral::_echo($gral_fp_medio_pago->getId()) ?> - <?php Gral::_echo($gral_fp_medio_pago->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_fp_medio_pago_alta.php?id=<?php echo($gral_fp_medio_pago->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralFpMedioPago') ?>: <strong><?php Gral::_echo($gral_fp_medio_pago->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralFpCuota::getFiltrosArrGral() ?>&arr=<?php echo $gral_fp_cuota->getFiltrosArrXCampo('GralFpMedioPago', 'gral_fp_medio_pago_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralFpCuotas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_fp_medio_pago->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

