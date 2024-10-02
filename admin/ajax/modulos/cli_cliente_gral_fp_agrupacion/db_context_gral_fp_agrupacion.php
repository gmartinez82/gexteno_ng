<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_cliente_gral_fp_agrupacion_id = Gral::getVars(2, 'cli_cliente_gral_fp_agrupacion_id');
$cli_cliente_gral_fp_agrupacion = CliClienteGralFpAgrupacion::getOxId($cli_cliente_gral_fp_agrupacion_id);
$gral_fp_agrupacion = $cli_cliente_gral_fp_agrupacion->getGralFpAgrupacion();

?>
<div class="datos" id="<?php Gral::_echo($gral_fp_agrupacion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralFpAgrupacion') ?>: 
        <strong><?php Gral::_echo($gral_fp_agrupacion->getId()) ?> - <?php Gral::_echo($gral_fp_agrupacion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_fp_agrupacion_alta.php?id=<?php echo($gral_fp_agrupacion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralFpAgrupacion') ?>: <strong><?php Gral::_echo($gral_fp_agrupacion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliClienteGralFpAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_gral_fp_agrupacion->getFiltrosArrXCampo('GralFpAgrupacion', 'gral_fp_agrupacion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliClienteGralFpAgrupacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_fp_agrupacion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

