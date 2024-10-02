<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_recibo_item_id = Gral::getVars(2, 'vta_recibo_item_id');
$vta_recibo_item = VtaReciboItem::getOxId($vta_recibo_item_id);
$vta_recibo_concepto = $vta_recibo_item->getVtaReciboConcepto();

?>
<div class="datos" id="<?php Gral::_echo($vta_recibo_concepto->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaReciboConcepto') ?>: 
        <strong><?php Gral::_echo($vta_recibo_concepto->getId()) ?> - <?php Gral::_echo($vta_recibo_concepto->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_recibo_concepto_alta.php?id=<?php echo($vta_recibo_concepto->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboConcepto') ?>: <strong><?php Gral::_echo($vta_recibo_concepto->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaReciboItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_item->getFiltrosArrXCampo('VtaReciboConcepto', 'vta_recibo_concepto_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaReciboItems') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_recibo_concepto->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

