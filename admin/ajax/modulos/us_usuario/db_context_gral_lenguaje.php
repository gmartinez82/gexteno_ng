<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$us_usuario_id = Gral::getVars(2, 'us_usuario_id');
$us_usuario = UsUsuario::getOxId($us_usuario_id);
$gral_lenguaje = $us_usuario->getGralLenguaje();

?>
<div class="datos" id="<?php Gral::_echo($gral_lenguaje->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralLenguaje') ?>: 
        <strong><?php Gral::_echo($gral_lenguaje->getId()) ?> - <?php Gral::_echo($gral_lenguaje->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_lenguaje_alta.php?id=<?php echo($gral_lenguaje->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralLenguaje') ?>: <strong><?php Gral::_echo($gral_lenguaje->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo UsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $us_usuario->getFiltrosArrXCampo('GralLenguaje', 'gral_lenguaje_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('UsUsuarios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_lenguaje->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

