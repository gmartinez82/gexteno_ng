<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_id = Gral::getVars(2, 'id');
$eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d = EkuDeE620GDtipDEGCamCondGPagTarCD::getOxId($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E620_G_DTIP_D_E_G_CAM_COND_G_PAG_TAR_C_D_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e620_g_dtip_d_e_g_cam_cond_g_pag_tar_c_d->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

