<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$fnd_caja_id = Gral::getVars(2, 'fnd_caja_id');
$fnd_caja = FndCaja::getOxId($fnd_caja_id);
$gral_caja = $fnd_caja->getGralCaja();

?>
<div class="datos" id="<?php Gral::_echo($gral_caja->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralCaja') ?>: 
        <strong><?php Gral::_echo($gral_caja->getId()) ?> - <?php Gral::_echo($gral_caja->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_caja_alta.php?id=<?php echo($gral_caja->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCaja') ?>: <strong><?php Gral::_echo($gral_caja->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo FndCaja::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja->getFiltrosArrXCampo('GralCaja', 'gral_caja_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('FndCajas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_caja->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

