<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$alt_alerta = AltAlerta::getOxId($id);
//Gral::prr($alt_alerta);
?>

<div class="tabs ficha-alt_alerta" identificador="<?php echo $alt_alerta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par alt_alerta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta->getId()) ?>
            </div>
        </div>

	
        <div class="par alt_alerta alt_modulo_id">
            <div class="label"><?php Lang::_lang('Modulo') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta->getAltModulo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta alt_tipo_id">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta->getAltTipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta alt_nivel_id">
            <div class="label"><?php Lang::_lang('Nivel') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta->getAltNivel()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta alt_origen_id">
            <div class="label"><?php Lang::_lang('Origen') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta->getAltOrigen()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta alt_control_id">
            <div class="label"><?php Lang::_lang('Control') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta->getAltControl()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta referencia">
            <div class="label"><?php Lang::_lang('Referenccia') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta->getReferencia()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta url_redireccion">
            <div class="label"><?php Lang::_lang('Url Redirecc') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta->getUrlRedireccion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par alt_alerta estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_alerta->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

