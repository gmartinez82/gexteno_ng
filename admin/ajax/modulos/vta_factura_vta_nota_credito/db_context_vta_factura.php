<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_factura_vta_nota_credito_id = Gral::getVars(2, 'vta_factura_vta_nota_credito_id');
$vta_factura_vta_nota_credito = VtaFacturaVtaNotaCredito::getOxId($vta_factura_vta_nota_credito_id);
$vta_factura = $vta_factura_vta_nota_credito->getVtaFactura();

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
        <a href="_init.php?arr_gral=<?php echo VtaFacturaVtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_vta_nota_credito->getFiltrosArrXCampo('VtaFactura', 'vta_factura_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaFacturaVtaNotaCreditos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_factura->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

