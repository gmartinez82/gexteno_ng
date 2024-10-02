<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_oc_reclamo_motivo = PdeOcReclamoMotivo::getOxId($id);
//Gral::prr($pde_oc_reclamo_motivo);
?>

<div class="tabs ficha-pde_oc_reclamo_motivo" identificador="<?php echo $pde_oc_reclamo_motivo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_oc_reclamo_motivo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_motivo->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_oc_reclamo_motivo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_motivo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_motivo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_motivo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_motivo puntaje">
            <div class="label"><?php Lang::_lang('Puntaje') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_motivo->getPuntaje()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_motivo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_motivo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_motivo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_motivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo_motivo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo_motivo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

