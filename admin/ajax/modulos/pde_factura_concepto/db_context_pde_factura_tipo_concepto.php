<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_factura_concepto_id = Gral::getVars(2, 'pde_factura_concepto_id');
$pde_factura_concepto = PdeFacturaConcepto::getOxId($pde_factura_concepto_id);
$pde_factura_tipo_concepto = $pde_factura_concepto->getPdeFacturaTipoConcepto();

?>
<div class="datos" id="<?php Gral::_echo($pde_factura_tipo_concepto->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeFacturaTipoConcepto') ?>: 
        <strong><?php Gral::_echo($pde_factura_tipo_concepto->getId()) ?> - <?php Gral::_echo($pde_factura_tipo_concepto->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_factura_tipo_concepto_alta.php?id=<?php echo($pde_factura_tipo_concepto->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaTipoConcepto') ?>: <strong><?php Gral::_echo($pde_factura_tipo_concepto->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeFacturaConcepto::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_concepto->getFiltrosArrXCampo('PdeFacturaTipoConcepto', 'pde_factura_tipo_concepto_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeFacturaConceptos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_factura_tipo_concepto->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

