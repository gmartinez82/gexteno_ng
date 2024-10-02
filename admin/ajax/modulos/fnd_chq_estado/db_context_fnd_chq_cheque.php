<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$fnd_chq_estado_id = Gral::getVars(2, 'fnd_chq_estado_id');
$fnd_chq_estado = FndChqEstado::getOxId($fnd_chq_estado_id);
$fnd_chq_cheque = $fnd_chq_estado->getFndChqCheque();

?>
<div class="datos" id="<?php Gral::_echo($fnd_chq_cheque->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('FndChqCheque') ?>: 
        <strong><?php Gral::_echo($fnd_chq_cheque->getId()) ?> - <?php Gral::_echo($fnd_chq_cheque->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="fnd_chq_cheque_alta.php?id=<?php echo($fnd_chq_cheque->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndChqCheque') ?>: <strong><?php Gral::_echo($fnd_chq_cheque->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo FndChqEstado::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_estado->getFiltrosArrXCampo('FndChqCheque', 'fnd_chq_cheque_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('FndChqEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($fnd_chq_cheque->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

