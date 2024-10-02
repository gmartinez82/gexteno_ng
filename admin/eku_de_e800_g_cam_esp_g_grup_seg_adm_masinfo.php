<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_e800_g_cam_esp_g_grup_seg_id = Gral::getVars(2, 'id');
$eku_de_e800_g_cam_esp_g_grup_seg = EkuDeE800GCamEspGGrupSeg::getOxId($eku_de_e800_g_cam_esp_g_grup_seg_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e800_g_cam_esp_g_grup_seg->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e800_g_cam_esp_g_grup_seg->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E800_G_CAM_ESP_G_GRUP_SEG_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e800_g_cam_esp_g_grup_seg->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e800_g_cam_esp_g_grup_seg->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E800_G_CAM_ESP_G_GRUP_SEG_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e800_g_cam_esp_g_grup_seg->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e800_g_cam_esp_g_grup_seg->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

