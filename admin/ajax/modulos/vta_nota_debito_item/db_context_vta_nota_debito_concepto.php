<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_nota_debito_item_id = Gral::getVars(2, 'vta_nota_debito_item_id');
$vta_nota_debito_item = VtaNotaDebitoItem::getOxId($vta_nota_debito_item_id);
$vta_nota_debito_concepto = $vta_nota_debito_item->getVtaNotaDebitoConcepto();

?>
<div class="datos" id="<?php Gral::_echo($vta_nota_debito_concepto->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaNotaDebitoConcepto') ?>: 
        <strong><?php Gral::_echo($vta_nota_debito_concepto->getId()) ?> - <?php Gral::_echo($vta_nota_debito_concepto->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_nota_debito_concepto_alta.php?id=<?php echo($vta_nota_debito_concepto->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaDebitoConcepto') ?>: <strong><?php Gral::_echo($vta_nota_debito_concepto->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_item->getFiltrosArrXCampo('VtaNotaDebitoConcepto', 'vta_nota_debito_concepto_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaNotaDebitoItems') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_nota_debito_concepto->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

