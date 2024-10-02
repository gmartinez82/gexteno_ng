<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras = EkuDeE960GDtipDEGTranspGVehTras::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e961_dtivehtras') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE961Dtivehtras()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e962_dmarveh') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE962Dmarveh()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e967_dtipidenveh') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE967Dtipidenveh()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e963_dnroidveh') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE963Dnroidveh()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e964_dadicveh') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE964Dadicveh()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e965_dnromatveh') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE965Dnromatveh()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e966_dnrovuelo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEkuE966Dnrovuelo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

