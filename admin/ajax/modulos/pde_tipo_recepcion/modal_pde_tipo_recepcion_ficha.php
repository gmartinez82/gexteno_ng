<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_tipo_recepcion = PdeTipoRecepcion::getOxId($id);
//Gral::prr($pde_tipo_recepcion);
?>

<div class="tabs ficha-pde_tipo_recepcion" identificador="<?php echo $pde_tipo_recepcion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_tipo_recepcion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_recepcion->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_tipo_recepcion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_recepcion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_recepcion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_recepcion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_recepcion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_recepcion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_recepcion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_recepcion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_tipo_recepcion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_tipo_recepcion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

