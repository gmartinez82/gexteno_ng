<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred = EkuDeE640GDtipDEGCamCondGPagCred::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e641_icondcred') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE641Icondcred()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e642_ddcondcred') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE642Ddcondcred()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e643_dplazocre') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE643Dplazocre()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e644_dcuotas') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE644Dcuotas()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e645_dmonent') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEkuE645Dmonent()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

