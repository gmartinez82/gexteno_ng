<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_arsch01_resp = EkuDeArsch01Resp::getOxId($id);
//Gral::prr($eku_de_arsch01_resp);
?>

<div class="tabs ficha-eku_de_arsch01_resp" identificador="<?php echo $eku_de_arsch01_resp->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_arsch01_resp id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_arsch01_resp descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp eku_de_asch01_req_id">
            <div class="label"><?php Lang::_lang('EkuDeAsch01Req') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp->getEkuDeAsch01Req()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp eku_arsch01_pp02_id_cdc">
            <div class="label"><?php Lang::_lang('eku_arsch01_pp02_id_cdc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp->getEkuArsch01Pp02IdCdc()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp eku_arsch01_pp03_ddecproc">
            <div class="label"><?php Lang::_lang('eku_arsch01_pp03_ddecproc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp->getEkuArsch01Pp03Ddecproc()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp eku_arsch01_pp04_ddigval">
            <div class="label"><?php Lang::_lang('eku_arsch01_pp04_ddigval') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp->getEkuArsch01Pp04Ddigval()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp eku_arsch01_pp050_destres">
            <div class="label"><?php Lang::_lang('eku_arsch01_pp050_destres') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp->getEkuArsch01Pp050Destres()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp eku_arsch01_pp051_dprotaut">
            <div class="label"><?php Lang::_lang('eku_arsch01_pp051_dprotaut') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp->getEkuArsch01Pp051Dprotaut()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_arsch01_resp->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

