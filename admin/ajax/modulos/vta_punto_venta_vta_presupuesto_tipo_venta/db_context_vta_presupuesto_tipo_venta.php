<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_punto_venta_vta_presupuesto_tipo_venta_id = Gral::getVars(2, 'vta_punto_venta_vta_presupuesto_tipo_venta_id');
$vta_punto_venta_vta_presupuesto_tipo_venta = VtaPuntoVentaVtaPresupuestoTipoVenta::getOxId($vta_punto_venta_vta_presupuesto_tipo_venta_id);
$vta_presupuesto_tipo_venta = $vta_punto_venta_vta_presupuesto_tipo_venta->getVtaPresupuestoTipoVenta();

?>
<div class="datos" id="<?php Gral::_echo($vta_presupuesto_tipo_venta->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaPresupuestoTipoVenta') ?>: 
        <strong><?php Gral::_echo($vta_presupuesto_tipo_venta->getId()) ?> - <?php Gral::_echo($vta_presupuesto_tipo_venta->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_presupuesto_tipo_venta_alta.php?id=<?php echo($vta_presupuesto_tipo_venta->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuestoTipoVenta') ?>: <strong><?php Gral::_echo($vta_presupuesto_tipo_venta->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaPuntoVentaVtaPresupuestoTipoVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_punto_venta_vta_presupuesto_tipo_venta->getFiltrosArrXCampo('VtaPresupuestoTipoVenta', 'vta_presupuesto_tipo_venta_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaPuntoVentaVtaPresupuestoTipoVentas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_presupuesto_tipo_venta->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

