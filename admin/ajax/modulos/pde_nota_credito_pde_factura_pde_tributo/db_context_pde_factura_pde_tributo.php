<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_nota_credito_pde_factura_pde_tributo_id = Gral::getVars(2, 'pde_nota_credito_pde_factura_pde_tributo_id');
$pde_nota_credito_pde_factura_pde_tributo = PdeNotaCreditoPdeFacturaPdeTributo::getOxId($pde_nota_credito_pde_factura_pde_tributo_id);
$pde_factura_pde_tributo = $pde_nota_credito_pde_factura_pde_tributo->getPdeFacturaPdeTributo();

?>
<div class="datos" id="<?php Gral::_echo($pde_factura_pde_tributo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeFacturaPdeTributo') ?>: 
        <strong><?php Gral::_echo($pde_factura_pde_tributo->getId()) ?> - <?php Gral::_echo($pde_factura_pde_tributo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_factura_pde_tributo_alta.php?id=<?php echo($pde_factura_pde_tributo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaPdeTributo') ?>: <strong><?php Gral::_echo($pde_factura_pde_tributo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeFacturaPdeTributo::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_factura_pde_tributo->getFiltrosArrXCampo('PdeFacturaPdeTributo', 'pde_factura_pde_tributo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeTributos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_factura_pde_tributo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

