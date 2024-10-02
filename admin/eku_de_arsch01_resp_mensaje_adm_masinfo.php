<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_arsch01_resp_mensaje_id = Gral::getVars(2, 'id');
$eku_de_arsch01_resp_mensaje = EkuDeArsch01RespMensaje::getOxId($eku_de_arsch01_resp_mensaje_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_arsch01_resp_mensaje->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_arsch01_resp_mensaje->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_ARSCH01_RESP_MENSAJE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_arsch01_resp_mensaje->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_arsch01_resp_mensaje->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_ARSCH01_RESP_MENSAJE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_arsch01_resp_mensaje->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_arsch01_resp_mensaje->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

