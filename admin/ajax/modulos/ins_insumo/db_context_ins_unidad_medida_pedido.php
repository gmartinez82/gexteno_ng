<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_insumo_id = Gral::getVars(2, 'ins_insumo_id');
$ins_insumo = InsInsumo::getOxId($ins_insumo_id);
$ins_unidad_medida_pedido = $ins_insumo->getInsUnidadMedidaPedido();

?>
<div class="datos" id="<?php Gral::_echo($ins_unidad_medida_pedido->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsUnidadMedidaPedido') ?>: 
        <strong><?php Gral::_echo($ins_unidad_medida_pedido->getId()) ?> - <?php Gral::_echo($ins_unidad_medida_pedido->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_unidad_medida_pedido_alta.php?id=<?php echo($ins_unidad_medida_pedido->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsUnidadMedidaPedido') ?>: <strong><?php Gral::_echo($ins_unidad_medida_pedido->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo->getFiltrosArrXCampo('InsUnidadMedidaPedido', 'ins_unidad_medida_pedido_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsInsumos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_unidad_medida_pedido->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

