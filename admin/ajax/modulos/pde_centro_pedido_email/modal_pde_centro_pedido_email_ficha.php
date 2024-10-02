<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_centro_pedido_email = PdeCentroPedidoEmail::getOxId($id);
//Gral::prr($pde_centro_pedido_email);
?>

<div class="tabs ficha-pde_centro_pedido_email" identificador="<?php echo $pde_centro_pedido_email->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_centro_pedido_email id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_centro_pedido_email->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_centro_pedido_email descripcion">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_centro_pedido_email->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_centro_pedido_email pde_centro_pedido_id">
            <div class="label"><?php Lang::_lang('PdeCentroPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_centro_pedido_email->getPdeCentroPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_centro_pedido_email codigo">
            <div class="label"><?php Lang::_lang('codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_centro_pedido_email->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_centro_pedido_email observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_centro_pedido_email->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_centro_pedido_email orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_centro_pedido_email->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_centro_pedido_email estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_centro_pedido_email->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

