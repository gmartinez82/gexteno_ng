<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pdi_estado_id = Gral::getVars(2, 'pdi_estado_id');
$pdi_estado = PdiEstado::getOxId($pdi_estado_id);
$pdi_tipo_estado = $pdi_estado->getPdiTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($pdi_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdiTipoEstado') ?>: 
        <strong><?php Gral::_echo($pdi_tipo_estado->getId()) ?> - <?php Gral::_echo($pdi_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pdi_tipo_estado_alta.php?id=<?php echo($pdi_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiTipoEstado') ?>: <strong><?php Gral::_echo($pdi_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdiEstado::getFiltrosArrGral() ?>&arr=<?php echo $pdi_estado->getFiltrosArrXCampo('PdiTipoEstado', 'pdi_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdiEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pdi_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

