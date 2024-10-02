<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$per_persona_imagen = PerPersonaImagen::getOxId($id);
//Gral::prr($per_persona_imagen);
?>

<div class="tabs ficha-per_persona_imagen" identificador="<?php echo $per_persona_imagen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par per_persona_imagen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_imagen->getId()) ?>
            </div>
        </div>

	
        <div class="par per_persona_imagen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_imagen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona_imagen per_persona_id">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_imagen->getPerPersona()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona_imagen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_imagen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par per_persona_imagen archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_imagen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par per_persona_imagen peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_imagen->getPeso()) ?>
            </div>
        </div>
		
        <div class="par per_persona_imagen tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_imagen->getTipo()) ?>
            </div>
        </div>
		
        <div class="par per_persona_imagen alto">
            <div class="label"><?php Lang::_lang('Alto') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_imagen->getAlto()) ?>
            </div>
        </div>
		
        <div class="par per_persona_imagen ancho">
            <div class="label"><?php Lang::_lang('Ancho') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_imagen->getAncho()) ?>
            </div>
        </div>
		
        <div class="par per_persona_imagen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_imagen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par per_persona_imagen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona_imagen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par per_persona_imagen estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_persona_imagen->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

