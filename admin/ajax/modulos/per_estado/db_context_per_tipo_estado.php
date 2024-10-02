<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$per_estado_id = Gral::getVars(2, 'per_estado_id');
$per_estado = PerEstado::getOxId($per_estado_id);
$per_tipo_estado = $per_estado->getPerTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($per_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PerTipoEstado') ?>: 
        <strong><?php Gral::_echo($per_tipo_estado->getId()) ?> - <?php Gral::_echo($per_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="per_tipo_estado_alta.php?id=<?php echo($per_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerTipoEstado') ?>: <strong><?php Gral::_echo($per_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PerEstado::getFiltrosArrGral() ?>&arr=<?php echo $per_estado->getFiltrosArrXCampo('PerTipoEstado', 'per_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PerEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($per_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

