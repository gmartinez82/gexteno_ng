<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_g001_g_cam_gen_id = Gral::getVars(2, 'id');
$eku_de_g001_g_cam_gen = EkuDeG001GCamGen::getOxId($eku_de_g001_g_cam_gen_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_g001_g_cam_gen->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_g001_g_cam_gen->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_G001_G_CAM_GEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_g001_g_cam_gen->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_g001_g_cam_gen->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_G001_G_CAM_GEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_g001_g_cam_gen->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_g001_g_cam_gen->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

