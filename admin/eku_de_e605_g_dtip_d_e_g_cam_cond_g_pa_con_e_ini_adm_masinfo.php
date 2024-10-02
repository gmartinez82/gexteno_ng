<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_id = Gral::getVars(2, 'id');
$eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini = EkuDeE605GDtipDEGCamCondGPaConEIni::getOxId($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E605_G_DTIP_D_E_G_CAM_COND_G_PA_CON_E_INI_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E605_G_DTIP_D_E_G_CAM_COND_G_PA_CON_E_INI_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

