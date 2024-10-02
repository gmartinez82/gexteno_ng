<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pdi_comentario = PdiComentario::getOxId($id);
//Gral::prr($pdi_comentario);
?>

<div class="tabs ficha-pdi_comentario" identificador="<?php echo $pdi_comentario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pdi_comentario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_comentario->getId()) ?>
            </div>
        </div>

	
        <div class="par pdi_comentario descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_comentario->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_comentario pdi_pedido_id">
            <div class="label"><?php Lang::_lang('PdiPedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_comentario->getPdiPedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_comentario codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_comentario->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pdi_comentario observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_comentario->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pdi_comentario orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_comentario->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pdi_comentario estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_comentario->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

