<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$os_estado_id = Gral::getVars(2, 'os_estado_id');
$os_estado = OsEstado::getOxId($os_estado_id);
$os_tipo_estado = $os_estado->getOsTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($os_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('OsTipoEstado') ?>: 
        <strong><?php Gral::_echo($os_tipo_estado->getId()) ?> - <?php Gral::_echo($os_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="os_tipo_estado_alta.php?id=<?php echo($os_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('OsTipoEstado') ?>: <strong><?php Gral::_echo($os_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo OsEstado::getFiltrosArrGral() ?>&arr=<?php echo $os_estado->getFiltrosArrXCampo('OsTipoEstado', 'os_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('OsEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($os_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

