<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_presupuesto_tipo_emision = VtaPresupuestoTipoEmision::getOxId($id);
//Gral::prr($vta_presupuesto_tipo_emision);
?>

<div class="tabs ficha-vta_presupuesto_tipo_emision" identificador="<?php echo $vta_presupuesto_tipo_emision->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_presupuesto_tipo_emision id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_tipo_emision->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_presupuesto_tipo_emision descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_tipo_emision->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_tipo_emision codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_tipo_emision->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_tipo_emision observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_tipo_emision->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_tipo_emision orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_presupuesto_tipo_emision->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_presupuesto_tipo_emision estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_presupuesto_tipo_emision->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

