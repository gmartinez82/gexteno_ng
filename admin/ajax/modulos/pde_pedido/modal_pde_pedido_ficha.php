<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_pedido = PdePedido::getOxId($id);
//Gral::prr($pde_pedido);
?>

<div class="tabs ficha-pde_pedido" identificador="<?php echo $pde_pedido->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_pedido id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_pedido descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido pde_centro_pedido_id">
            <div class="label"><?php Lang::_lang('PdeCentroPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getPdeCentroPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido pde_urgencia_id">
            <div class="label"><?php Lang::_lang('PdeUrgencia') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getPdeUrgencia()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido pde_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getPdeTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido vencimiento">
            <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_pedido->getVencimiento())) ?>
            </div>
        </div>
		
        <div class="par pde_pedido codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido comentario_proveedor">
            <div class="label"><?php Lang::_lang('Coment a Proveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getComentarioProveedor()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido nota_publica">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getNotaPublica()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido nota_interna">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getNotaInterna()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_pedido estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_pedido->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

