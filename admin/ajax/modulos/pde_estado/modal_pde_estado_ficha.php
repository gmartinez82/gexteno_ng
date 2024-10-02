<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_estado = PdeEstado::getOxId($id);
//Gral::prr($pde_estado);
?>

<div class="tabs ficha-pde_estado" identificador="<?php echo $pde_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_estado pde_pedido_id">
            <div class="label"><?php Lang::_lang('PdePedido') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_estado->getPdePedido()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_estado pde_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_estado->getPdeTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_estado->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

