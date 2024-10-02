<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_pedido_prv_proveedor = PdePedidoPrvProveedor::getOxId($id);
//Gral::prr($pde_pedido_prv_proveedor);
?>

<div class="tabs ficha-pde_pedido_prv_proveedor" identificador="<?php echo $pde_pedido_prv_proveedor->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_pedido_prv_proveedor id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido_prv_proveedor->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_pedido_prv_proveedor pde_pedido_id">
            <div class="label"><?php Lang::_lang('PdePedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido_prv_proveedor->getPdePedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido_prv_proveedor prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido_prv_proveedor->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

