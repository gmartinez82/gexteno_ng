<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$per_persona_archivo = PerPersonaArchivo::getOxId($id);
//Gral::prr($per_persona_archivo);
?>

<div class="tabs ficha-per_persona_archivo" identificador="<?php echo $per_persona_archivo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par per_persona_archivo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_archivo->getId()) ?>
            </div>
        </div>

	
        <div class="par per_persona_archivo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_archivo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona_archivo per_persona_id">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_archivo->getPerPersona()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona_archivo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_archivo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par per_persona_archivo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_archivo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par per_persona_archivo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par per_persona_archivo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par per_persona_archivo archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par per_persona_archivo peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_archivo->getPeso()) ?>
            </div>
        </div>
		
        <div class="par per_persona_archivo tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_archivo->getTipo()) ?>
            </div>
        </div>
	
    </div>    

</div>

