<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id = Gral::getVars(2, 'fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id');
$fnd_chq_tipo_emisor_fnd_chq_tipo_estado = FndChqTipoEmisorFndChqTipoEstado::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id);
$fnd_chq_tipo_estado_posi = $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoPosi();

?>
<div class="datos" id="<?php Gral::_echo($fnd_chq_tipo_estado_posi->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('FndChqTipoEstadoPosi') ?>: 
        <strong><?php Gral::_echo($fnd_chq_tipo_estado_posi->getId()) ?> - <?php Gral::_echo($fnd_chq_tipo_estado_posi->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="fnd_chq_tipo_estado_posi_alta.php?id=<?php echo($fnd_chq_tipo_estado_posi->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndChqTipoEstadoPosi') ?>: <strong><?php Gral::_echo($fnd_chq_tipo_estado_posi->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo FndChqTipoEmisorFndChqTipoEstado::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFiltrosArrXCampo('FndChqTipoEstadoPosi', 'fnd_chq_tipo_estado_posi_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('FndChqTipoEmisorFndChqTipoEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($fnd_chq_tipo_estado_posi->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

