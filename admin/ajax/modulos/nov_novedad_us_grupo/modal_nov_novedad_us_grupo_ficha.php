<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$nov_novedad_us_grupo = NovNovedadUsGrupo::getOxId($id);
//Gral::prr($nov_novedad_us_grupo);
?>

<div class="tabs ficha-nov_novedad_us_grupo" identificador="<?php echo $nov_novedad_us_grupo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par nov_novedad_us_grupo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_us_grupo->getId()) ?>
            </div>
        </div>

	
        <div class="par nov_novedad_us_grupo nov_novedad_id">
            <div class="label"><?php Lang::_lang('NovNovedad') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_us_grupo->getNovNovedad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_us_grupo us_grupo_id">
            <div class="label"><?php Lang::_lang('UsGrupo') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_us_grupo->getUsGrupo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_us_grupo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_us_grupo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_us_grupo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_us_grupo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_us_grupo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_us_grupo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_us_grupo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_us_grupo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_us_grupo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_us_grupo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

