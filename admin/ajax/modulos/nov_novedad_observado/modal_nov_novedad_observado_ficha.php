<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$nov_novedad_observado = NovNovedadObservado::getOxId($id);
//Gral::prr($nov_novedad_observado);
?>

<div class="tabs ficha-nov_novedad_observado" identificador="<?php echo $nov_novedad_observado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par nov_novedad_observado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_observado->getId()) ?>
            </div>
        </div>

	
        <div class="par nov_novedad_observado nov_novedad_id">
            <div class="label"><?php Lang::_lang('NovNovedad') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_observado->getNovNovedad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_observado us_usuario_id">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_observado->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_observado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_observado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_observado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_observado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_observado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_observado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_observado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_observado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_observado estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_observado->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

