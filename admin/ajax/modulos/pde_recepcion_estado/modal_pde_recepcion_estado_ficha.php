<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_recepcion_estado = PdeRecepcionEstado::getOxId($id);
//Gral::prr($pde_recepcion_estado);
?>

<div class="tabs ficha-pde_recepcion_estado" identificador="<?php echo $pde_recepcion_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_recepcion_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_recepcion_estado pde_recepcion_id">
            <div class="label"><?php Lang::_lang('PdeRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado->getPdeRecepcion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado pde_recepcion_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeRecepcionTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado->getPdeRecepcionTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado pde_centro_recepcion_id">
            <div class="label"><?php Lang::_lang('PdeCentroRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado->getPdeCentroRecepcion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado pan_panol_id">
            <div class="label"><?php Lang::_lang('PanPanol') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado->getPanPanol()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_recepcion_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_recepcion_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_estado->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

