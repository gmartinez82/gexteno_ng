<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_oc_tipo_estado_recepcion = PdeOcTipoEstadoRecepcion::getOxId($id);
//Gral::prr($pde_oc_tipo_estado_recepcion);
?>

<div class="tabs ficha-pde_oc_tipo_estado_recepcion" identificador="<?php echo $pde_oc_tipo_estado_recepcion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_oc_tipo_estado_recepcion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_tipo_estado_recepcion->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_oc_tipo_estado_recepcion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_tipo_estado_recepcion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_tipo_estado_recepcion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_tipo_estado_recepcion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_tipo_estado_recepcion activo">
            <div class="label"><?php Lang::_lang('Activo') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_tipo_estado_recepcion->getActivo())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_tipo_estado_recepcion terminal">
            <div class="label"><?php Lang::_lang('Terminal') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_tipo_estado_recepcion->getTerminal())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_tipo_estado_recepcion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_tipo_estado_recepcion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_tipo_estado_recepcion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_tipo_estado_recepcion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_oc_tipo_estado_recepcion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_oc_tipo_estado_recepcion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

