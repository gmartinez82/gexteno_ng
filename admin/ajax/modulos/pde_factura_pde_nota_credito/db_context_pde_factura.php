<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_factura_pde_nota_credito_id = Gral::getVars(2, 'pde_factura_pde_nota_credito_id');
$pde_factura_pde_nota_credito = PdeFacturaPdeNotaCredito::getOxId($pde_factura_pde_nota_credito_id);
$pde_factura = $pde_factura_pde_nota_credito->getPdeFactura();

?>
<div class="datos" id="<?php Gral::_echo($pde_factura->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeFactura') ?>: 
        <strong><?php Gral::_echo($pde_factura->getId()) ?> - <?php Gral::_echo($pde_factura->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_factura_alta.php?id=<?php echo($pde_factura->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFactura') ?>: <strong><?php Gral::_echo($pde_factura->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_nota_credito->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeFacturaPdeNotaCreditos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_factura->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

