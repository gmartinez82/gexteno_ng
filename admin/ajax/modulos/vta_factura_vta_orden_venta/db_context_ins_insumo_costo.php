<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_factura_vta_orden_venta_id = Gral::getVars(2, 'vta_factura_vta_orden_venta_id');
$vta_factura_vta_orden_venta = VtaFacturaVtaOrdenVenta::getOxId($vta_factura_vta_orden_venta_id);
$ins_insumo_costo = $vta_factura_vta_orden_venta->getInsInsumoCosto();

?>
<div class="datos" id="<?php Gral::_echo($ins_insumo_costo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsInsumoCosto') ?>: 
        <strong><?php Gral::_echo($ins_insumo_costo->getId()) ?> - <?php Gral::_echo($ins_insumo_costo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_insumo_costo_alta.php?id=<?php echo($ins_insumo_costo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoCosto') ?>: <strong><?php Gral::_echo($ins_insumo_costo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaFacturaVtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_vta_orden_venta->getFiltrosArrXCampo('InsInsumoCosto', 'ins_insumo_costo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaFacturaVtaOrdenVentas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_insumo_costo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

