<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_nota_credito_vta_factura_vta_tributo_id = Gral::getVars(2, 'vta_nota_credito_vta_factura_vta_tributo_id');
$vta_nota_credito_vta_factura_vta_tributo = VtaNotaCreditoVtaFacturaVtaTributo::getOxId($vta_nota_credito_vta_factura_vta_tributo_id);
$vta_factura_vta_tributo = $vta_nota_credito_vta_factura_vta_tributo->getVtaFacturaVtaTributo();

?>
<div class="datos" id="<?php Gral::_echo($vta_factura_vta_tributo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaFacturaVtaTributo') ?>: 
        <strong><?php Gral::_echo($vta_factura_vta_tributo->getId()) ?> - <?php Gral::_echo($vta_factura_vta_tributo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_factura_vta_tributo_alta.php?id=<?php echo($vta_factura_vta_tributo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFacturaVtaTributo') ?>: <strong><?php Gral::_echo($vta_factura_vta_tributo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoVtaFacturaVtaTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_vta_factura_vta_tributo->getFiltrosArrXCampo('VtaFacturaVtaTributo', 'vta_factura_vta_tributo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaTributos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_factura_vta_tributo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

