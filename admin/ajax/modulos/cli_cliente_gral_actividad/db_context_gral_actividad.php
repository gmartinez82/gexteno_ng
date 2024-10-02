<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cli_cliente_gral_actividad_id = Gral::getVars(2, 'cli_cliente_gral_actividad_id');
$cli_cliente_gral_actividad = CliClienteGralActividad::getOxId($cli_cliente_gral_actividad_id);
$gral_actividad = $cli_cliente_gral_actividad->getGralActividad();

?>
<div class="datos" id="<?php Gral::_echo($gral_actividad->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralActividad') ?>: 
        <strong><?php Gral::_echo($gral_actividad->getId()) ?> - <?php Gral::_echo($gral_actividad->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_actividad_alta.php?id=<?php echo($gral_actividad->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralActividad') ?>: <strong><?php Gral::_echo($gral_actividad->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CliClienteGralActividad::getFiltrosArrGral() ?>&arr=<?php echo $cli_cliente_gral_actividad->getFiltrosArrXCampo('GralActividad', 'gral_actividad_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CliClienteGralActividads') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_actividad->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

