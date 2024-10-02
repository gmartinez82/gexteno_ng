<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_sucursal_gral_caja_id = Gral::getVars(2, 'gral_sucursal_gral_caja_id');
$gral_sucursal_gral_caja = GralSucursalGralCaja::getOxId($gral_sucursal_gral_caja_id);
$gral_sucursal = $gral_sucursal_gral_caja->getGralSucursal();

?>
<div class="datos" id="<?php Gral::_echo($gral_sucursal->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralSucursal') ?>: 
        <strong><?php Gral::_echo($gral_sucursal->getId()) ?> - <?php Gral::_echo($gral_sucursal->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_sucursal_alta.php?id=<?php echo($gral_sucursal->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursal') ?>: <strong><?php Gral::_echo($gral_sucursal->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralSucursalGralCaja::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_gral_caja->getFiltrosArrXCampo('GralSucursal', 'gral_sucursal_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralSucursalGralCajas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_sucursal->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

