<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$fnd_chq_chequera_id = Gral::getVars(2, 'fnd_chq_chequera_id');
$fnd_chq_chequera = FndChqChequera::getOxId($fnd_chq_chequera_id);
$gral_banco = $fnd_chq_chequera->getGralBanco();

?>
<div class="datos" id="<?php Gral::_echo($gral_banco->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralBanco') ?>: 
        <strong><?php Gral::_echo($gral_banco->getId()) ?> - <?php Gral::_echo($gral_banco->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_banco_alta.php?id=<?php echo($gral_banco->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralBanco') ?>: <strong><?php Gral::_echo($gral_banco->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo FndChqChequera::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_chequera->getFiltrosArrXCampo('GralBanco', 'gral_banco_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('FndChqChequeras') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_banco->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

