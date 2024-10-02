<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pdi_urgencia = PdiUrgencia::getOxId($id);
//Gral::prr($pdi_urgencia);
?>

<div class="tabs ficha-pdi_urgencia" identificador="<?php echo $pdi_urgencia->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pdi_urgencia id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_urgencia->getId()) ?>
            </div>
        </div>

	
        <div class="par pdi_urgencia descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_urgencia->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pdi_urgencia codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_urgencia->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pdi_urgencia observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_urgencia->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pdi_urgencia orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_urgencia->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pdi_urgencia estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pdi_urgencia->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

