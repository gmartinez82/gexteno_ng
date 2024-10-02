<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$vta_orden_venta_id = Gral::getVars(2, 'vta_orden_venta_id');
$vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
$ins_lista_precio = $vta_orden_venta->getInsListaPrecio();

?>
<div class="datos" id="<?php Gral::_echo($ins_lista_precio->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsListaPrecio') ?>: 
        <strong><?php Gral::_echo($ins_lista_precio->getId()) ?> - <?php Gral::_echo($ins_lista_precio->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_lista_precio_alta.php?id=<?php echo($ins_lista_precio->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsListaPrecio') ?>: <strong><?php Gral::_echo($ins_lista_precio->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('InsListaPrecio', 'ins_lista_precio_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaOrdenVentas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_lista_precio->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

