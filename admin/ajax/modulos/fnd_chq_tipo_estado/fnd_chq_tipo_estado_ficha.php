<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$fnd_chq_tipo_estado = FndChqTipoEstado::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_estado->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('En Cartera') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getEnCartera())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Activo') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getActivo())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Terminal') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getTerminal())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Anulado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getAnulado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Cambio Automatico') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getCambioAutomatico())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cambio Manual') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getCambioManual())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_estado->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_estado->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_estado->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_estado->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_tipo_estado->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_estado->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_tipo_estado->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_estado->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

