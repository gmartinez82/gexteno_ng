<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_h001_g_cam_d_e_asoc_id = Gral::getVars(2, 'id');
$eku_de_h001_g_cam_d_e_asoc = EkuDeH001GCamDEAsoc::getOxId($eku_de_h001_g_cam_d_e_asoc_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_h001_g_cam_d_e_asoc->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_h001_g_cam_d_e_asoc->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_H001_G_CAM_D_E_ASOC_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_h001_g_cam_d_e_asoc->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_H001_G_CAM_D_E_ASOC_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_h001_g_cam_d_e_asoc->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

