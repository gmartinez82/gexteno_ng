<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_factura_item_id = Gral::getVars(2, 'vta_factura_item_id');
$vta_factura_item = VtaFacturaItem::getOxId($vta_factura_item_id);
$gral_tipo_iva = $vta_factura_item->getGralTipoIva();

?>
<div class="datos" id="<?php Gral::_echo($gral_tipo_iva->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralTipoIva') ?>: 
        <strong><?php Gral::_echo($gral_tipo_iva->getId()) ?> - <?php Gral::_echo($gral_tipo_iva->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_tipo_iva_alta.php?id=<?php echo($gral_tipo_iva->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralTipoIva') ?>: <strong><?php Gral::_echo($gral_tipo_iva->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaFacturaItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_item->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaFacturaItems') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_tipo_iva->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

