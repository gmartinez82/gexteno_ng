<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$nov_novedad = NovNovedad::getOxId($id);
//Gral::prr($nov_novedad);
?>

<div class="tabs ficha-nov_novedad" identificador="<?php echo $nov_novedad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par nov_novedad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad->getId()) ?>
            </div>
        </div>

	
        <div class="par nov_novedad descripcion">
            <div class="label"><?php Lang::_lang('Titulo') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad descripcion_breve">
            <div class="label"><?php Lang::_lang('Descripcion Breve') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad->getDescripcionBreve()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($nov_novedad->getFecha())) ?>
            </div>
        </div>
		
        <div class="par nov_novedad descripcion_extendida">
            <div class="label"><?php Lang::_lang('Descripcion Extendida') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($nov_novedad->getFecha())) ?>
            </div>
        </div>
		
        <div class="par nov_novedad observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad->getOrden()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($nov_novedad->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

