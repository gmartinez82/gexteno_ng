<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_id = Gral::getVars(2, 'id');
$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = EkuDeE940GDtipDEGTranspGCamEnt::getOxId($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

