<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_nota_credito_item_id = Gral::getVars(2, 'pde_nota_credito_item_id');
$pde_nota_credito_item = PdeNotaCreditoItem::getOxId($pde_nota_credito_item_id);
$pde_nota_credito_concepto = $pde_nota_credito_item->getPdeNotaCreditoConcepto();

?>
<div class="datos" id="<?php Gral::_echo($pde_nota_credito_concepto->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeNotaCreditoConcepto') ?>: 
        <strong><?php Gral::_echo($pde_nota_credito_concepto->getId()) ?> - <?php Gral::_echo($pde_nota_credito_concepto->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_nota_credito_concepto_alta.php?id=<?php echo($pde_nota_credito_concepto->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoConcepto') ?>: <strong><?php Gral::_echo($pde_nota_credito_concepto->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_item->getFiltrosArrXCampo('PdeNotaCreditoConcepto', 'pde_nota_credito_concepto_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeNotaCreditoItems') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_nota_credito_concepto->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

