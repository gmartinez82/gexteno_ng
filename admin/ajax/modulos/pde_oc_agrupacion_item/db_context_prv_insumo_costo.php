<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_oc_agrupacion_item_id = Gral::getVars(2, 'pde_oc_agrupacion_item_id');
$pde_oc_agrupacion_item = PdeOcAgrupacionItem::getOxId($pde_oc_agrupacion_item_id);
$prv_insumo_costo = $pde_oc_agrupacion_item->getPrvInsumoCosto();

?>
<div class="datos" id="<?php Gral::_echo($prv_insumo_costo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrvInsumoCosto') ?>: 
        <strong><?php Gral::_echo($prv_insumo_costo->getId()) ?> - <?php Gral::_echo($prv_insumo_costo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prv_insumo_costo_alta.php?id=<?php echo($prv_insumo_costo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvInsumoCosto') ?>: <strong><?php Gral::_echo($prv_insumo_costo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeOcAgrupacionItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_agrupacion_item->getFiltrosArrXCampo('PrvInsumoCosto', 'prv_insumo_costo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeOcAgrupacionItems') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_insumo_costo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

