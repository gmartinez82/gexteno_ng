<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = EkuDeE940GDtipDEGTranspGCamEnt::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e941_ddirlocent') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE941Ddirlocent()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e942_dnumcasent') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE942Dnumcasent()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e943_dcomp1ent') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE943Dcomp1ent()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e944_dcomp2ent') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE944Dcomp2ent()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e945_cdepent') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE945Cdepent()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e946_ddesdepent') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE946Ddesdepent()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e947_cdisent') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE947Cdisent()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e948_ddesdisent') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE948Ddesdisent()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e949_cciuent') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE949Cciuent()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e950_ddesciuent') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE950Ddesciuent()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e951_dtelent') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEkuE951Dtelent()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

