<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_recepcion_tipo_estado = PdeRecepcionTipoEstado::getOxId($id);
//Gral::prr($pde_recepcion_tipo_estado);
?>

<div class="tabs ficha-pde_recepcion_tipo_estado" identificador="<?php echo $pde_recepcion_tipo_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_recepcion_tipo_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_tipo_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_recepcion_tipo_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_tipo_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_tipo_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_tipo_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_tipo_estado activo">
            <div class="label"><?php Lang::_lang('Activo') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_recepcion_tipo_estado->getActivo())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_tipo_estado terminal">
            <div class="label"><?php Lang::_lang('Terminal') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_recepcion_tipo_estado->getTerminal())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_tipo_estado afecta_stock">
            <div class="label"><?php Lang::_lang('Afecta Stock') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($pde_recepcion_tipo_estado->getAfectaStock())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_tipo_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_tipo_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_tipo_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_tipo_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_recepcion_tipo_estado estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_recepcion_tipo_estado->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

