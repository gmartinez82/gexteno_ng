<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_unidad_medida_pedido = InsUnidadMedidaPedido::getOxId($id);
//Gral::prr($ins_unidad_medida_pedido);
?>

<div class="tabs ficha-ins_unidad_medida_pedido" identificador="<?php echo $ins_unidad_medida_pedido->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_unidad_medida_pedido id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_unidad_medida_pedido->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_unidad_medida_pedido descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_unidad_medida_pedido->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_unidad_medida_pedido codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_unidad_medida_pedido->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_unidad_medida_pedido observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_unidad_medida_pedido->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_unidad_medida_pedido orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_unidad_medida_pedido->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_unidad_medida_pedido estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_unidad_medida_pedido->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

