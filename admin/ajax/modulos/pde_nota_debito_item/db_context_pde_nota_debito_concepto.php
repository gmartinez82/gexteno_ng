<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_nota_debito_item_id = Gral::getVars(2, 'pde_nota_debito_item_id');
$pde_nota_debito_item = PdeNotaDebitoItem::getOxId($pde_nota_debito_item_id);
$pde_nota_debito_concepto = $pde_nota_debito_item->getPdeNotaDebitoConcepto();

?>
<div class="datos" id="<?php Gral::_echo($pde_nota_debito_concepto->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeNotaDebitoConcepto') ?>: 
        <strong><?php Gral::_echo($pde_nota_debito_concepto->getId()) ?> - <?php Gral::_echo($pde_nota_debito_concepto->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_nota_debito_concepto_alta.php?id=<?php echo($pde_nota_debito_concepto->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebitoConcepto') ?>: <strong><?php Gral::_echo($pde_nota_debito_concepto->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_item->getFiltrosArrXCampo('PdeNotaDebitoConcepto', 'pde_nota_debito_concepto_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeNotaDebitoItems') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_nota_debito_concepto->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

