<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_asch01_req = EkuDeAsch01Req::getOxId($id);
//Gral::prr($eku_de_asch01_req);
?>

<div class="tabs ficha-eku_de_asch01_req" identificador="<?php echo $eku_de_asch01_req->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_asch01_req id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_asch01_req->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_asch01_req descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_asch01_req->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_asch01_req eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_asch01_req->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_asch01_req eku_asch02_did">
            <div class="label"><?php Lang::_lang('eku_asch02_did') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_asch01_req->getEkuAsch02Did()) ?>
            </div>
        </div>
		
        <div class="par eku_de_asch01_req eku_asch03_xde">
            <div class="label"><?php Lang::_lang('eku_asch03_xde') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_asch01_req->getEkuAsch03Xde()) ?>
            </div>
        </div>
		
        <div class="par eku_de_asch01_req codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_asch01_req->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_asch01_req observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_asch01_req->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_asch01_req orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_asch01_req->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_asch01_req estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_asch01_req->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

