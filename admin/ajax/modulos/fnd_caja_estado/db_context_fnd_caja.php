<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$fnd_caja_estado_id = Gral::getVars(2, 'fnd_caja_estado_id');
$fnd_caja_estado = FndCajaEstado::getOxId($fnd_caja_estado_id);
$fnd_caja = $fnd_caja_estado->getFndCaja();

?>
<div class="datos" id="<?php Gral::_echo($fnd_caja->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('FndCaja') ?>: 
        <strong><?php Gral::_echo($fnd_caja->getId()) ?> - <?php Gral::_echo($fnd_caja->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="fnd_caja_alta.php?id=<?php echo($fnd_caja->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCaja') ?>: <strong><?php Gral::_echo($fnd_caja->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo FndCajaEstado::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_estado->getFiltrosArrXCampo('FndCaja', 'fnd_caja_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('FndCajaEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($fnd_caja->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

