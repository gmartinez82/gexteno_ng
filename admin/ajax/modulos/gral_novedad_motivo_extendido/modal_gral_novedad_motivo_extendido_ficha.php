<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_novedad_motivo_extendido = GralNovedadMotivoExtendido::getOxId($id);
//Gral::prr($gral_novedad_motivo_extendido);
?>

<div class="tabs ficha-gral_novedad_motivo_extendido" identificador="<?php echo $gral_novedad_motivo_extendido->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_novedad_motivo_extendido id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad_motivo_extendido->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_novedad_motivo_extendido descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad_motivo_extendido->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad_motivo_extendido gral_novedad_motivo_id">
            <div class="label"><?php Lang::_lang('GralNovedadMotivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad_motivo_extendido->getGralNovedadMotivo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad_motivo_extendido codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad_motivo_extendido->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad_motivo_extendido observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad_motivo_extendido->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad_motivo_extendido orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_novedad_motivo_extendido->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_novedad_motivo_extendido estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_novedad_motivo_extendido->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

