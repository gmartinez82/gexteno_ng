<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_ope_estado = EkuDeOpeEstado::getOxId($id);
//Gral::prr($eku_de_ope_estado);
?>

<div class="tabs ficha-eku_de_ope_estado" identificador="<?php echo $eku_de_ope_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_ope_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ope_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_ope_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ope_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ope_estado eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDeOpeTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ope_estado->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ope_estado eku_de_ope_tipo_estado_id">
            <div class="label"><?php Lang::_lang('EkuDeOpeTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ope_estado->getEkuDeOpeTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ope_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_ope_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ope_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_ope_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ope_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ope_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ope_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ope_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ope_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_ope_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_ope_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_ope_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

