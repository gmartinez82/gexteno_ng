<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_novedad_motivo = GralNovedadMotivo::getOxId($id);
//Gral::prr($gral_novedad_motivo);
?>

<div class="tabs ficha-gral_novedad_motivo" identificador="<?php echo $gral_novedad_motivo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_novedad_motivo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad_motivo->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_novedad_motivo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad_motivo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad_motivo gral_novedad_id">
            <div class="label"><?php Lang::_lang('GralNovedad') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad_motivo->getGralNovedad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad_motivo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad_motivo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad_motivo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad_motivo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad_motivo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad_motivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad_motivo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_novedad_motivo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

