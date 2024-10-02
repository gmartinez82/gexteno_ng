<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_orden_venta_estado_id = Gral::getVars(2, 'vta_orden_venta_estado_id');
$vta_orden_venta_estado = VtaOrdenVentaEstado::getOxId($vta_orden_venta_estado_id);
$vta_orden_venta = $vta_orden_venta_estado->getVtaOrdenVenta();

?>
<div class="datos" id="<?php Gral::_echo($vta_orden_venta->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaOrdenVenta') ?>: 
        <strong><?php Gral::_echo($vta_orden_venta->getId()) ?> - <?php Gral::_echo($vta_orden_venta->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_orden_venta_alta.php?id=<?php echo($vta_orden_venta->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVenta') ?>: <strong><?php Gral::_echo($vta_orden_venta->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaOrdenVentaEstado::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta_estado->getFiltrosArrXCampo('VtaOrdenVenta', 'vta_orden_venta_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaOrdenVentaEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_orden_venta->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

