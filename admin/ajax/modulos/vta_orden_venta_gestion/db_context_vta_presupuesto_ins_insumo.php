<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$vta_orden_venta_id = Gral::getVars(2, 'vta_orden_venta_id');
$vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
$vta_presupuesto_ins_insumo = $vta_orden_venta->getVtaPresupuestoInsInsumo();

?>
<div class="datos" id="<?php Gral::_echo($vta_presupuesto_ins_insumo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaPresupuestoInsInsumo') ?>: 
        <strong><?php Gral::_echo($vta_presupuesto_ins_insumo->getId()) ?> - <?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_presupuesto_ins_insumo_alta.php?id=<?php echo($vta_presupuesto_ins_insumo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuestoInsInsumo') ?>: <strong><?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('VtaPresupuestoInsInsumo', 'vta_presupuesto_ins_insumo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaOrdenVentas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

