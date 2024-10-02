<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$vta_remito_enviado = VtaRemitoEnviado::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($vta_remito_enviado->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('VtaRemito') ?></div>
        <div class='dato'><?php Gral::_echo($vta_remito_enviado->getVtaRemito()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Asunto') ?></div>
        <div class='dato'><?php Gral::_echo($vta_remito_enviado->getAsunto()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Destinatario') ?></div>
        <div class='dato'><?php Gral::_echo($vta_remito_enviado->getDestinatario()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cuerpo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_remito_enviado->getCuerpo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Adjunto') ?></div>
        <div class='dato'><?php Gral::_echo($vta_remito_enviado->getAdjunto()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo de Envio') ?></div>
        <div class='dato'><?php Gral::_echo($vta_remito_enviado->getCodigoEnvio()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($vta_remito_enviado->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($vta_remito_enviado->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($vta_remito_enviado->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($vta_remito_enviado->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_enviado->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_remito_enviado->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_remito_enviado->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($vta_remito_enviado->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

