<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_orden_venta_estado_cobro_id = Gral::getVars(2, 'vta_orden_venta_estado_cobro_id');
$vta_orden_venta_estado_cobro = VtaOrdenVentaEstadoCobro::getOxId($vta_orden_venta_estado_cobro_id);
$vta_orden_venta_tipo_estado_cobro = $vta_orden_venta_estado_cobro->getVtaOrdenVentaTipoEstadoCobro();

?>
<div class="datos" id="<?php Gral::_echo($vta_orden_venta_tipo_estado_cobro->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaOrdenVentaTipoEstadoCobro') ?>: 
        <strong><?php Gral::_echo($vta_orden_venta_tipo_estado_cobro->getId()) ?> - <?php Gral::_echo($vta_orden_venta_tipo_estado_cobro->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_orden_venta_tipo_estado_cobro_alta.php?id=<?php echo($vta_orden_venta_tipo_estado_cobro->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoCobro') ?>: <strong><?php Gral::_echo($vta_orden_venta_tipo_estado_cobro->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaOrdenVentaEstadoCobro::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta_estado_cobro->getFiltrosArrXCampo('VtaOrdenVentaTipoEstadoCobro', 'vta_orden_venta_tipo_estado_cobro_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaOrdenVentaEstadoCobros') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_orden_venta_tipo_estado_cobro->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

