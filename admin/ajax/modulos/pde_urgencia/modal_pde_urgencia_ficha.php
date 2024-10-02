<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_urgencia = PdeUrgencia::getOxId($id);
//Gral::prr($pde_urgencia);
?>

<div class="tabs ficha-pde_urgencia" identificador="<?php echo $pde_urgencia->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_urgencia id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_urgencia->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_urgencia descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_urgencia->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_urgencia codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_urgencia->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_urgencia observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_urgencia->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_urgencia orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_urgencia->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_urgencia estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_urgencia->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

