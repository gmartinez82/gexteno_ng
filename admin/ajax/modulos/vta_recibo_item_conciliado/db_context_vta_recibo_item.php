<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_recibo_item_conciliado_id = Gral::getVars(2, 'vta_recibo_item_conciliado_id');
$vta_recibo_item_conciliado = VtaReciboItemConciliado::getOxId($vta_recibo_item_conciliado_id);
$vta_recibo_item = $vta_recibo_item_conciliado->getVtaReciboItem();

?>
<div class="datos" id="<?php Gral::_echo($vta_recibo_item->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaReciboItem') ?>: 
        <strong><?php Gral::_echo($vta_recibo_item->getId()) ?> - <?php Gral::_echo($vta_recibo_item->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_recibo_item_alta.php?id=<?php echo($vta_recibo_item->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboItem') ?>: <strong><?php Gral::_echo($vta_recibo_item->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaReciboItemConciliado::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_item_conciliado->getFiltrosArrXCampo('VtaReciboItem', 'vta_recibo_item_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaReciboItemConciliados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_recibo_item->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

