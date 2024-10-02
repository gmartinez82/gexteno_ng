<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_vendedor_valoracion_id = Gral::getVars(2, 'vta_vendedor_valoracion_id');
$vta_vendedor_valoracion = VtaVendedorValoracion::getOxId($vta_vendedor_valoracion_id);
$vta_vendedor_valoracion_tipo_item = $vta_vendedor_valoracion->getVtaVendedorValoracionTipoItem();

?>
<div class="datos" id="<?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaVendedorValoracionTipoItem') ?>: 
        <strong><?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getId()) ?> - <?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_vendedor_valoracion_tipo_item_alta.php?id=<?php echo($vta_vendedor_valoracion_tipo_item->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedorValoracionTipoItem') ?>: <strong><?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaVendedorValoracion::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_valoracion->getFiltrosArrXCampo('VtaVendedorValoracionTipoItem', 'vta_vendedor_valoracion_tipo_item_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaVendedorValoracions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

