<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_g050_g_cam_gen_g_cam_carg_id = Gral::getVars(2, 'id');
$eku_de_g050_g_cam_gen_g_cam_carg = EkuDeG050GCamGenGCamCarg::getOxId($eku_de_g050_g_cam_gen_g_cam_carg_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_g050_g_cam_gen_g_cam_carg->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_g050_g_cam_gen_g_cam_carg->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_g050_g_cam_gen_g_cam_carg->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_g050_g_cam_gen_g_cam_carg->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

