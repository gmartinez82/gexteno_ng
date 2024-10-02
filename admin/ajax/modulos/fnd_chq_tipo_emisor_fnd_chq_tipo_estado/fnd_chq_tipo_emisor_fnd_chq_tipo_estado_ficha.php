<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$fnd_chq_tipo_emisor_fnd_chq_tipo_estado = FndChqTipoEmisorFndChqTipoEstado::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('FndChqTipoEmisor') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEmisor()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('FndChqTipoEstado') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstado()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('FndChqTipoEstado Posible') ?></div>
        <div class='dato'><?php Gral::_echo(($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoPosible() != 'null') ? FndChqTipoEstado::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFndChqTipoEstadoPosible())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cambio Automatico') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioAutomatico())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Cambio Manual') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioManual())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Predederminado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getPredeterminado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Cambio Otro Comprobante') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioOtroComprobante())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cambio Simultaneo') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCambioSimultaneo())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

