<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$us_memo_estado_id = Gral::getVars(2, 'us_memo_estado_id');
$us_memo_estado = UsMemoEstado::getOxId($us_memo_estado_id);
$us_memo_tipo_estado = $us_memo_estado->getUsMemoTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($us_memo_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('UsMemoTipoEstado') ?>: 
        <strong><?php Gral::_echo($us_memo_tipo_estado->getId()) ?> - <?php Gral::_echo($us_memo_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="us_memo_tipo_estado_alta.php?id=<?php echo($us_memo_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsMemoTipoEstado') ?>: <strong><?php Gral::_echo($us_memo_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo UsMemoEstado::getFiltrosArrGral() ?>&arr=<?php echo $us_memo_estado->getFiltrosArrXCampo('UsMemoTipoEstado', 'us_memo_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('UsMemoEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($us_memo_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

