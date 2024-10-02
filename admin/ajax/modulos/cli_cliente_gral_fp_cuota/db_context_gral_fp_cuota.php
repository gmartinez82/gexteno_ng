<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_cliente_gral_fp_cuota_id = Gral::getVars(2, 'cli_cliente_gral_fp_cuota_id');
$cli_cliente_gral_fp_cuota = CliClienteGralFpCuota::getOxId($cli_cliente_gral_fp_cuota_id);
$gral_fp_cuota = $cli_cliente_gral_fp_cuota->getGralFpCuota();

?>
<div class="datos" id="<?php Gral::_echo($gral_fp_cuota->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralFpCuota') ?>: 
        <strong><?php Gral::_echo($gral_fp_cuota->getId()) ?> - <?php Gral::_echo($gral_fp_cuota->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_fp_cuota_alta.php?id=<?php echo($gral_fp_cuota->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralFpCuota') ?>: <strong><?php Gral::_echo($gral_fp_cuota->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliClienteGralFpCuota::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_gral_fp_cuota->getFiltrosArrXCampo('GralFpCuota', 'gral_fp_cuota_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliClienteGralFpCuotas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_fp_cuota->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

