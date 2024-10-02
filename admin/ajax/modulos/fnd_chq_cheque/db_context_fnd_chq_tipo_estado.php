<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$fnd_chq_cheque_id = Gral::getVars(2, 'fnd_chq_cheque_id');
$fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);
$fnd_chq_tipo_estado = $fnd_chq_cheque->getFndChqTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($fnd_chq_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('FndChqTipoEstado') ?>: 
        <strong><?php Gral::_echo($fnd_chq_tipo_estado->getId()) ?> - <?php Gral::_echo($fnd_chq_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="fnd_chq_tipo_estado_alta.php?id=<?php echo($fnd_chq_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndChqTipoEstado') ?>: <strong><?php Gral::_echo($fnd_chq_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo FndChqCheque::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_cheque->getFiltrosArrXCampo('FndChqTipoEstado', 'fnd_chq_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('FndChqCheques') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($fnd_chq_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

