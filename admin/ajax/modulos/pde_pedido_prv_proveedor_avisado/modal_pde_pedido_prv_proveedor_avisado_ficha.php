<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_pedido_prv_proveedor_avisado = PdePedidoPrvProveedorAvisado::getOxId($id);
//Gral::prr($pde_pedido_prv_proveedor_avisado);
?>

<div class="tabs ficha-pde_pedido_prv_proveedor_avisado" identificador="<?php echo $pde_pedido_prv_proveedor_avisado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_pedido_prv_proveedor_avisado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_pedido_prv_proveedor_avisado pde_pedido_id">
            <div class="label"><?php Lang::_lang('PdePedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getPdePedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido_prv_proveedor_avisado prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido_prv_proveedor_avisado enviado_a">
            <div class="label"><?php Lang::_lang('Destinatario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido_prv_proveedor_avisado->getEnviadoA()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido_prv_proveedor_avisado leido">
            <div class="label"><?php Lang::_lang('Leido') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_pedido_prv_proveedor_avisado->getLeido())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido_prv_proveedor_avisado leido_el">
            <div class="label"><?php Lang::_lang('Leido El') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido_prv_proveedor_avisado->getLeidoEl())) ?>
            </div>
        </div>
	
    </div>    

</div>

