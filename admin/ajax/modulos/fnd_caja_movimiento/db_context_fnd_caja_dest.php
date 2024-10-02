<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$fnd_caja_movimiento_id = Gral::getVars(2, 'fnd_caja_movimiento_id');
$fnd_caja_movimiento = FndCajaMovimiento::getOxId($fnd_caja_movimiento_id);
$fnd_caja_dest = $fnd_caja_movimiento->getFndCajaDest();

?>
<div class="datos" id="<?php Gral::_echo($fnd_caja_dest->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('FndCajaDest') ?>: 
        <strong><?php Gral::_echo($fnd_caja_dest->getId()) ?> - <?php Gral::_echo($fnd_caja_dest->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="fnd_caja_dest_alta.php?id=<?php echo($fnd_caja_dest->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaDest') ?>: <strong><?php Gral::_echo($fnd_caja_dest->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo FndCajaMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_movimiento->getFiltrosArrXCampo('FndCajaDest', 'fnd_caja_dest_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('FndCajaMovimientos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($fnd_caja_dest->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

