<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_tipo_personeria = GralTipoPersoneria::getOxId($id);
//Gral::prr($gral_tipo_personeria);
?>

<div class="tabs ficha-gral_tipo_personeria" identificador="<?php echo $gral_tipo_personeria->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_tipo_personeria id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_personeria->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_tipo_personeria descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_personeria->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_personeria codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_personeria->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_personeria observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_personeria->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_personeria orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_tipo_personeria->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_tipo_personeria estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_tipo_personeria->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

