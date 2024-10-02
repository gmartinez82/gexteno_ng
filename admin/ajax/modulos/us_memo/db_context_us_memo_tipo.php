<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$us_memo_id = Gral::getVars(2, 'us_memo_id');
$us_memo = UsMemo::getOxId($us_memo_id);
$us_memo_tipo = $us_memo->getUsMemoTipo();

?>
<div class="datos" id="<?php Gral::_echo($us_memo_tipo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('UsMemoTipo') ?>: 
        <strong><?php Gral::_echo($us_memo_tipo->getId()) ?> - <?php Gral::_echo($us_memo_tipo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="us_memo_tipo_alta.php?id=<?php echo($us_memo_tipo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsMemoTipo') ?>: <strong><?php Gral::_echo($us_memo_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo UsMemo::getFiltrosArrGral() ?>&arr=<?php echo $us_memo->getFiltrosArrXCampo('UsMemoTipo', 'us_memo_tipo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('UsMemos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($us_memo_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

