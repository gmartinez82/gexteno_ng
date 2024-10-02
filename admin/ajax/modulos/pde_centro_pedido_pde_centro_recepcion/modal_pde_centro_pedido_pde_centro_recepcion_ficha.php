<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_centro_pedido_pde_centro_recepcion = PdeCentroPedidoPdeCentroRecepcion::getOxId($id);
//Gral::prr($pde_centro_pedido_pde_centro_recepcion);
?>

<div class="tabs ficha-pde_centro_pedido_pde_centro_recepcion" identificador="<?php echo $pde_centro_pedido_pde_centro_recepcion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_centro_pedido_pde_centro_recepcion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_centro_pedido_pde_centro_recepcion->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_centro_pedido_pde_centro_recepcion pde_centro_pedido_id">
            <div class="label"><?php Lang::_lang('PdeCentroPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_centro_pedido_pde_centro_recepcion->getPdeCentroPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_centro_pedido_pde_centro_recepcion pde_centro_recepcion_id">
            <div class="label"><?php Lang::_lang('PdeCentroRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_centro_pedido_pde_centro_recepcion->getPdeCentroRecepcion()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

