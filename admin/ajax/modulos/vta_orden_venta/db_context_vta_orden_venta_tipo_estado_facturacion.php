<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_orden_venta_id = Gral::getVars(2, 'vta_orden_venta_id');
$vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
$vta_orden_venta_tipo_estado_facturacion = $vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion();

?>
<div class="datos" id="<?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaOrdenVentaTipoEstadoFacturacion') ?>: 
        <strong><?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getId()) ?> - <?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_orden_venta_tipo_estado_facturacion_alta.php?id=<?php echo($vta_orden_venta_tipo_estado_facturacion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoFacturacion') ?>: <strong><?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('VtaOrdenVentaTipoEstadoFacturacion', 'vta_orden_venta_tipo_estado_facturacion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaOrdenVentas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_orden_venta_tipo_estado_facturacion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

