<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_oc_agrupacion_item_id = Gral::getVars(2, 'pde_oc_agrupacion_item_id');
$pde_oc_agrupacion_item = PdeOcAgrupacionItem::getOxId($pde_oc_agrupacion_item_id);
$prv_descuento_comercial = $pde_oc_agrupacion_item->getPrvDescuentoComercial();

?>
<div class="datos" id="<?php Gral::_echo($prv_descuento_comercial->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrvDescuentoComercial') ?>: 
        <strong><?php Gral::_echo($prv_descuento_comercial->getId()) ?> - <?php Gral::_echo($prv_descuento_comercial->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prv_descuento_comercial_alta.php?id=<?php echo($prv_descuento_comercial->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvDescuentoComercial') ?>: <strong><?php Gral::_echo($prv_descuento_comercial->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeOcAgrupacionItem::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_agrupacion_item->getFiltrosArrXCampo('PrvDescuentoComercial', 'prv_descuento_comercial_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeOcAgrupacionItems') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_descuento_comercial->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

