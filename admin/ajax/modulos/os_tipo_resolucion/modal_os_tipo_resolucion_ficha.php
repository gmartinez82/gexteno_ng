<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$os_tipo_resolucion = OsTipoResolucion::getOxId($id);
//Gral::prr($os_tipo_resolucion);
?>

<div class="tabs ficha-os_tipo_resolucion" identificador="<?php echo $os_tipo_resolucion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par os_tipo_resolucion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_tipo_resolucion->getId()) ?>
            </div>
        </div>

	
        <div class="par os_tipo_resolucion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_tipo_resolucion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_tipo_resolucion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_tipo_resolucion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par os_tipo_resolucion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_tipo_resolucion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par os_tipo_resolucion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_tipo_resolucion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par os_tipo_resolucion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($os_tipo_resolucion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

