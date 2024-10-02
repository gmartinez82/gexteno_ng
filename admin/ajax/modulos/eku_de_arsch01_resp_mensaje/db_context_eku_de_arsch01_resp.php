<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_de_arsch01_resp_mensaje_id = Gral::getVars(2, 'eku_de_arsch01_resp_mensaje_id');
$eku_de_arsch01_resp_mensaje = EkuDeArsch01RespMensaje::getOxId($eku_de_arsch01_resp_mensaje_id);
$eku_de_arsch01_resp = $eku_de_arsch01_resp_mensaje->getEkuDeArsch01Resp();

?>
<div class="datos" id="<?php Gral::_echo($eku_de_arsch01_resp->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuDeArsch01Resp') ?>: 
        <strong><?php Gral::_echo($eku_de_arsch01_resp->getId()) ?> - <?php Gral::_echo($eku_de_arsch01_resp->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_de_arsch01_resp_alta.php?id=<?php echo($eku_de_arsch01_resp->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeArsch01Resp') ?>: <strong><?php Gral::_echo($eku_de_arsch01_resp->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuDeArsch01RespMensaje::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_arsch01_resp_mensaje->getFiltrosArrXCampo('EkuDeArsch01Resp', 'eku_de_arsch01_resp_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuDeArsch01RespMensajes') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_de_arsch01_resp->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

