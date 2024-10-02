<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_factura_id = Gral::getVars(2, 'vta_factura_id');
$vta_factura = VtaFactura::getOxId($vta_factura_id);
$gral_tipo_documento = $vta_factura->getGralTipoDocumento();

?>
<div class="datos" id="<?php Gral::_echo($gral_tipo_documento->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralTipoDocumento') ?>: 
        <strong><?php Gral::_echo($gral_tipo_documento->getId()) ?> - <?php Gral::_echo($gral_tipo_documento->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_tipo_documento_alta.php?id=<?php echo($gral_tipo_documento->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralTipoDocumento') ?>: <strong><?php Gral::_echo($gral_tipo_documento->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura->getFiltrosArrXCampo('GralTipoDocumento', 'gral_tipo_documento_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaFacturas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_tipo_documento->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

