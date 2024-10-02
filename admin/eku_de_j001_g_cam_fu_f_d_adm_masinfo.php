<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_j001_g_cam_fu_f_d_id = Gral::getVars(2, 'id');
$eku_de_j001_g_cam_fu_f_d = EkuDeJ001GCamFuFD::getOxId($eku_de_j001_g_cam_fu_f_d_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_j001_g_cam_fu_f_d->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_j001_g_cam_fu_f_d->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_J001_G_CAM_FU_F_D_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_j001_g_cam_fu_f_d->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_J001_G_CAM_FU_F_D_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_j001_g_cam_fu_f_d->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

