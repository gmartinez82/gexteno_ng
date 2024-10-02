<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_de_arsch01_resp_mensaje_id = Gral::getVars(2, 'eku_de_arsch01_resp_mensaje_id');
$eku_de_arsch01_resp_mensaje = EkuDeArsch01RespMensaje::getOxId($eku_de_arsch01_resp_mensaje_id);
$eku_de_asch01_req = $eku_de_arsch01_resp_mensaje->getEkuDeAsch01Req();

?>
<div class="datos" id="<?php Gral::_echo($eku_de_asch01_req->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuDeAsch01Req') ?>: 
        <strong><?php Gral::_echo($eku_de_asch01_req->getId()) ?> - <?php Gral::_echo($eku_de_asch01_req->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_de_asch01_req_alta.php?id=<?php echo($eku_de_asch01_req->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeAsch01Req') ?>: <strong><?php Gral::_echo($eku_de_asch01_req->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuDeArsch01RespMensaje::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_arsch01_resp_mensaje->getFiltrosArrXCampo('EkuDeAsch01Req', 'eku_de_asch01_req_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuDeArsch01RespMensajes') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_de_asch01_req->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

