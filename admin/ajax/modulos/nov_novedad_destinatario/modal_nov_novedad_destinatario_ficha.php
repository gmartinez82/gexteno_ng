<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$nov_novedad_destinatario = NovNovedadDestinatario::getOxId($id);
//Gral::prr($nov_novedad_destinatario);
?>

<div class="tabs ficha-nov_novedad_destinatario" identificador="<?php echo $nov_novedad_destinatario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par nov_novedad_destinatario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_destinatario->getId()) ?>
            </div>
        </div>

	
        <div class="par nov_novedad_destinatario nov_novedad_id">
            <div class="label"><?php Lang::_lang('NovNovedad') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_destinatario->getNovNovedad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_destinatario us_usuario_id">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_destinatario->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_destinatario descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_destinatario->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_destinatario codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_destinatario->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_destinatario observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_destinatario->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_destinatario orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_destinatario->getOrden()) ?>
            </div>
        </div>
		
        <div class="par nov_novedad_destinatario estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($nov_novedad_destinatario->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

