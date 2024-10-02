<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$us_usuario_auditoria = UsUsuarioAuditoria::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($us_usuario_auditoria->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('UsUsuario') ?></div>
        <div class='dato'><?php Gral::_echo($us_usuario_auditoria->getUsUsuario()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Tabla') ?></div>
        <div class='dato'><?php Gral::_echo($us_usuario_auditoria->getTabla()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Accion') ?></div>
        <div class='dato'><?php Gral::_echo($us_usuario_auditoria->getAccion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Pagina') ?></div>
        <div class='dato'><?php Gral::_echo($us_usuario_auditoria->getPagina()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Url') ?></div>
        <div class='dato'><?php Gral::_echo($us_usuario_auditoria->getUrl()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Comando') ?></div>
        <div class='dato'><?php Gral::_echo($us_usuario_auditoria->getComando()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Before') ?></div>
        <div class='dato'><?php Gral::_echo($us_usuario_auditoria->getDatoBefore()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('After') ?></div>
        <div class='dato'><?php Gral::_echo($us_usuario_auditoria->getDatoAfter()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($us_usuario_auditoria->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($us_usuario_auditoria->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($us_usuario_auditoria->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario_auditoria->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($us_usuario_auditoria->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario_auditoria->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($us_usuario_auditoria->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

