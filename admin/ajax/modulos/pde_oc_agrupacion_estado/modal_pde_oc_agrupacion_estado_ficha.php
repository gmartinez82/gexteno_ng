<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_oc_agrupacion_estado = PdeOcAgrupacionEstado::getOxId($id);
//Gral::prr($pde_oc_agrupacion_estado);
?>

<div class="tabs ficha-pde_oc_agrupacion_estado" identificador="<?php echo $pde_oc_agrupacion_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_oc_agrupacion_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_oc_agrupacion_estado pde_oc_agrupacion_id">
            <div class="label"><?php Lang::_lang('PdeOcAgrupacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_estado->getPdeOcAgrupacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_estado pde_oc_agrupacion_tipo_estado_id">
            <div class="label"><?php Lang::_lang('PdeOcAgrupacionTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_estado->getPdeOcAgrupacionTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_agrupacion_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_agrupacion_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_agrupacion_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion_estado->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

