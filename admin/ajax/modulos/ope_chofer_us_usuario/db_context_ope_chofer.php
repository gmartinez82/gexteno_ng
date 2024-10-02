<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ope_chofer_us_usuario_id = Gral::getVars(2, 'ope_chofer_us_usuario_id');
$ope_chofer_us_usuario = OpeChoferUsUsuario::getOxId($ope_chofer_us_usuario_id);
$ope_chofer = $ope_chofer_us_usuario->getOpeChofer();

?>
<div class="datos" id="<?php Gral::_echo($ope_chofer->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('OpeChofer') ?>: 
        <strong><?php Gral::_echo($ope_chofer->getId()) ?> - <?php Gral::_echo($ope_chofer->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ope_chofer_alta.php?id=<?php echo($ope_chofer->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('OpeChofer') ?>: <strong><?php Gral::_echo($ope_chofer->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo OpeChoferUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $ope_chofer_us_usuario->getFiltrosArrXCampo('OpeChofer', 'ope_chofer_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('OpeChoferUsUsuarios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ope_chofer->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

