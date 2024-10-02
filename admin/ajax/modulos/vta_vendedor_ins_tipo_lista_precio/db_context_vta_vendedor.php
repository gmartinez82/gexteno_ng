<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_vendedor_ins_tipo_lista_precio_id = Gral::getVars(2, 'vta_vendedor_ins_tipo_lista_precio_id');
$vta_vendedor_ins_tipo_lista_precio = VtaVendedorInsTipoListaPrecio::getOxId($vta_vendedor_ins_tipo_lista_precio_id);
$vta_vendedor = $vta_vendedor_ins_tipo_lista_precio->getVtaVendedor();

?>
<div class="datos" id="<?php Gral::_echo($vta_vendedor->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaVendedor') ?>: 
        <strong><?php Gral::_echo($vta_vendedor->getId()) ?> - <?php Gral::_echo($vta_vendedor->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_vendedor_alta.php?id=<?php echo($vta_vendedor->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaVendedor') ?>: <strong><?php Gral::_echo($vta_vendedor->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaVendedorInsTipoListaPrecio::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_ins_tipo_lista_precio->getFiltrosArrXCampo('VtaVendedor', 'vta_vendedor_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaVendedorInsTipoListaPrecios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_vendedor->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

