<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini = EkuDeE605GDtipDEGCamCondGPaConEIni::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e606_itipago') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE606Itipago()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e607_ddestipag') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE607Ddestipag()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e608_dmontipag') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE608Dmontipag()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e609_cmonetipag') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE609Cmonetipag()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e610_ddmonetipag') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE610Ddmonetipag()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e611_dticamtipa') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEkuE611Dticamtipa()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

