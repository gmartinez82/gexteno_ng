<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_condicion_iva_vta_tipo_factura_id = Gral::getVars(2, 'gral_condicion_iva_vta_tipo_factura_id');
$gral_condicion_iva_vta_tipo_factura = GralCondicionIvaVtaTipoFactura::getOxId($gral_condicion_iva_vta_tipo_factura_id);
$vta_tipo_factura = $gral_condicion_iva_vta_tipo_factura->getVtaTipoFactura();

?>
<div class="datos" id="<?php Gral::_echo($vta_tipo_factura->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaTipoFactura') ?>: 
        <strong><?php Gral::_echo($vta_tipo_factura->getId()) ?> - <?php Gral::_echo($vta_tipo_factura->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_tipo_factura_alta.php?id=<?php echo($vta_tipo_factura->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTipoFactura') ?>: <strong><?php Gral::_echo($vta_tipo_factura->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralCondicionIvaVtaTipoFactura::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_vta_tipo_factura->getFiltrosArrXCampo('VtaTipoFactura', 'vta_tipo_factura_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoFacturas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_tipo_factura->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

