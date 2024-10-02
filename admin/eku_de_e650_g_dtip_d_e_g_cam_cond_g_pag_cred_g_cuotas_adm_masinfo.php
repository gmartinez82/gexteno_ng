<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_id = Gral::getVars(2, 'id');
$eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas = EkuDeE650GDtipDEGCamCondGPagCredGCuotas::getOxId($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E650_G_DTIP_D_E_G_CAM_COND_G_PAG_CRED_G_CUOTAS_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

