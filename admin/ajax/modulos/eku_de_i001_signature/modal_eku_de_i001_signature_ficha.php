<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_i001_signature = EkuDeI001Signature::getOxId($id);
//Gral::prr($eku_de_i001_signature);
?>

<div class="tabs ficha-eku_de_i001_signature" identificador="<?php echo $eku_de_i001_signature->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_i001_signature id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_i001_signature->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_i001_signature descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_i001_signature->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_i001_signature eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_i001_signature->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_i001_signature eku_i002_signature">
            <div class="label"><?php Lang::_lang('eku_i002_signature') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_i001_signature->getEkuI002Signature()) ?>
            </div>
        </div>
		
        <div class="par eku_de_i001_signature codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_i001_signature->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_i001_signature observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_i001_signature->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_i001_signature orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_i001_signature->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_i001_signature estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_i001_signature->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

