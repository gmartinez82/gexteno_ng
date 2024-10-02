<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_sexo = GralSexo::getOxId($id);
//Gral::prr($gral_sexo);
?>

<div class="tabs ficha-gral_sexo" identificador="<?php echo $gral_sexo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_sexo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sexo->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_sexo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sexo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sexo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sexo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_sexo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sexo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_sexo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sexo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_sexo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_sexo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

