<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$cli_cliente_info_sifen = CliClienteInfoSifen::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('CliCliente') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getCliCliente()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('sifen_dcodres') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenDcodres()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('sifen_dmsgres') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenDmsgres()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('sifen_xcontruc_druccons') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDruccons()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('sifen_xcontruc_drazcons') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDrazcons()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('sifen_xcontruc_dcodestcons') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDcodestcons()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('sifen_xcontruc_ddesestcons') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDdesestcons()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('sifen_xcontruc_drucfactelec') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getSifenXcontrucDrucfactelec()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($cli_cliente_info_sifen->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_info_sifen->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_info_sifen->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($cli_cliente_info_sifen->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

