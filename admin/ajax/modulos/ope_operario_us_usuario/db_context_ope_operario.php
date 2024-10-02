<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ope_operario_us_usuario_id = Gral::getVars(2, 'ope_operario_us_usuario_id');
$ope_operario_us_usuario = OpeOperarioUsUsuario::getOxId($ope_operario_us_usuario_id);
$ope_operario = $ope_operario_us_usuario->getOpeOperario();

?>
<div class="datos" id="<?php Gral::_echo($ope_operario->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('OpeOperario') ?>: 
        <strong><?php Gral::_echo($ope_operario->getId()) ?> - <?php Gral::_echo($ope_operario->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ope_operario_alta.php?id=<?php echo($ope_operario->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('OpeOperario') ?>: <strong><?php Gral::_echo($ope_operario->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo OpeOperarioUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $ope_operario_us_usuario->getFiltrosArrXCampo('OpeOperario', 'ope_operario_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('OpeOperarioUsUsuarios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ope_operario->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

