<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$afip_citi_ventas_alicuotas_id = Gral::getVars(2, 'afip_citi_ventas_alicuotas_id');
$afip_citi_ventas_alicuotas = AfipCitiVentasAlicuotas::getOxId($afip_citi_ventas_alicuotas_id);
$vta_factura = $afip_citi_ventas_alicuotas->getVtaFactura();

?>
<div class="datos" id="<?php Gral::_echo($vta_factura->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaFactura') ?>: 
        <strong><?php Gral::_echo($vta_factura->getId()) ?> - <?php Gral::_echo($vta_factura->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_factura_alta.php?id=<?php echo($vta_factura->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFactura') ?>: <strong><?php Gral::_echo($vta_factura->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo AfipCitiVentasAlicuotas::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_ventas_alicuotas->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('AfipCitiVentasAlicuotass') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_factura->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

