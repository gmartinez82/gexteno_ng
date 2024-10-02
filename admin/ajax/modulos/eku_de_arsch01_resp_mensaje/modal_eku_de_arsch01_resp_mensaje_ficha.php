<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_arsch01_resp_mensaje = EkuDeArsch01RespMensaje::getOxId($id);
//Gral::prr($eku_de_arsch01_resp_mensaje);
?>

<div class="tabs ficha-eku_de_arsch01_resp_mensaje" identificador="<?php echo $eku_de_arsch01_resp_mensaje->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_arsch01_resp_mensaje id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_arsch01_resp_mensaje descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp_mensaje eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp_mensaje eku_de_asch01_req_id">
            <div class="label"><?php Lang::_lang('EkuDeAsch01Req') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getEkuDeAsch01Req()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp_mensaje eku_de_arsch01_resp_id">
            <div class="label"><?php Lang::_lang('EkuDeArsch01Resp') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getEkuDeArsch01Resp()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp_mensaje eku_arsch01_pp052_dcodres">
            <div class="label"><?php Lang::_lang('eku_arsch01_pp052_dcodres') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getEkuArsch01Pp052Dcodres()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp_mensaje eku_arsch01_pp053_dmsgres">
            <div class="label"><?php Lang::_lang('eku_arsch01_pp053_dmsgres') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getEkuArsch01Pp053Dmsgres()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp_mensaje codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp_mensaje observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp_mensaje orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_arsch01_resp_mensaje->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_arsch01_resp_mensaje estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_arsch01_resp_mensaje->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

