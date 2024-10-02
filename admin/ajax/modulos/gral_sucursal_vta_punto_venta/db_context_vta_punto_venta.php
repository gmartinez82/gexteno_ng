<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_sucursal_vta_punto_venta_id = Gral::getVars(2, 'gral_sucursal_vta_punto_venta_id');
$gral_sucursal_vta_punto_venta = GralSucursalVtaPuntoVenta::getOxId($gral_sucursal_vta_punto_venta_id);
$vta_punto_venta = $gral_sucursal_vta_punto_venta->getVtaPuntoVenta();

?>
<div class="datos" id="<?php Gral::_echo($vta_punto_venta->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaPuntoVenta') ?>: 
        <strong><?php Gral::_echo($vta_punto_venta->getId()) ?> - <?php Gral::_echo($vta_punto_venta->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_punto_venta_alta.php?id=<?php echo($vta_punto_venta->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPuntoVenta') ?>: <strong><?php Gral::_echo($vta_punto_venta->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralSucursalVtaPuntoVenta::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_vta_punto_venta->getFiltrosArrXCampo('VtaPuntoVenta', 'vta_punto_venta_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralSucursalVtaPuntoVentas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_punto_venta->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

