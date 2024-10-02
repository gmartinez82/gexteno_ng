<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_oc_reclamo = PdeOcReclamo::getOxId($id);
//Gral::prr($pde_oc_reclamo);
?>

<div class="tabs ficha-pde_oc_reclamo" identificador="<?php echo $pde_oc_reclamo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_oc_reclamo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_oc_reclamo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo pde_oc_id">
            <div class="label"><?php Lang::_lang('PdeOc') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo->getPdeOc()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo pde_oc_reclamo_motivo_id">
            <div class="label"><?php Lang::_lang('PdeOcReclamoMotivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo->getPdeOcReclamoMotivo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_reclamo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_reclamo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

