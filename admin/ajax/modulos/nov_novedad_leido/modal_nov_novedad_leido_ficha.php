<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$nov_novedad_leido = NovNovedadLeido::getOxId($id);
//Gral::prr($nov_novedad_leido);
?>

<div class="tabs ficha-nov_novedad_leido" identificador="<?php echo $nov_novedad_leido->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par nov_novedad_leido id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_leido->getId()) ?>
            </div>
        </div>

	
        <div class="par nov_novedad_leido nov_novedad_id">
            <div class="label"><?php Lang::_lang('NovNovedad') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_leido->getNovNovedad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_leido us_usuario_id">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_leido->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_leido descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_leido->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_leido codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_leido->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_leido observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_leido->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_leido orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_leido->getOrden()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_leido estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_leido->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

