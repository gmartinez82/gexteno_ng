<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_recibo_id = Gral::getVars(2, 'pde_recibo_id');
$pde_recibo = PdeRecibo::getOxId($pde_recibo_id);
$fnd_caja = $pde_recibo->getFndCaja();

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
        <a href="_init.php?arr_gral=<?php echo PdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo->getFiltrosArrXCampo('FndCaja', 'fnd_caja_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeRecibos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($fnd_caja->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

