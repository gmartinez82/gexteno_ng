<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_si_no = GralSiNo::getOxId($id);
//Gral::prr($gral_si_no);
?>

<div class="tabs ficha-gral_si_no" identificador="<?php echo $gral_si_no->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_si_no id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_si_no->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_si_no descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_si_no->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_si_no codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_si_no->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_si_no observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_si_no->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_si_no orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_si_no->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_si_no estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_si_no->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

