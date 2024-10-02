<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$us_acreditado_id = Gral::getVars(2, 'us_acreditado_id');
$us_acreditado = UsAcreditado::getOxId($us_acreditado_id);
$us_credencial = $us_acreditado->getUsCredencial();

?>
<div class="datos" id="<?php Gral::_echo($us_credencial->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('UsCredencial') ?>: 
        <strong><?php Gral::_echo($us_credencial->getId()) ?> - <?php Gral::_echo($us_credencial->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="us_credencial_alta.php?id=<?php echo($us_credencial->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsCredencial') ?>: <strong><?php Gral::_echo($us_credencial->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo UsAcreditado::getFiltrosArrGral() ?>&arr=<?php echo $us_acreditado->getFiltrosArrXCampo('UsCredencial', 'us_credencial_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('UsAcreditados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($us_credencial->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

