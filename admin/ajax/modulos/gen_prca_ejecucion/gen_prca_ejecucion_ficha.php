<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$gen_prca_ejecucion = GenPrcaEjecucion::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($gen_prca_ejecucion->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GenApiProyecto') ?></div>
        <div class='dato'><?php Gral::_echo($gen_prca_ejecucion->getGenApiProyecto()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GenPrcaProceso') ?></div>
        <div class='dato'><?php Gral::_echo($gen_prca_ejecucion->getGenPrcaProceso()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha Hora Inicio') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion->getFechahoraInicio())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Fecha Hora Fin') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion->getFechahoraFin())) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Iniciado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gen_prca_ejecucion->getIniciado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Finalizado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gen_prca_ejecucion->getFinalizado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($gen_prca_ejecucion->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('id_remoto') ?></div>
        <div class='dato'><?php Gral::_echo($gen_prca_ejecucion->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Confirmado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gen_prca_ejecucion->getConfirmado())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($gen_prca_ejecucion->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($gen_prca_ejecucion->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($gen_prca_ejecucion->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($gen_prca_ejecucion->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($gen_prca_ejecucion->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

