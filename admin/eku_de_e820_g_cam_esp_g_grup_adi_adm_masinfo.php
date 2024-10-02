<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_e820_g_cam_esp_g_grup_adi_id = Gral::getVars(2, 'id');
$eku_de_e820_g_cam_esp_g_grup_adi = EkuDeE820GCamEspGGrupAdi::getOxId($eku_de_e820_g_cam_esp_g_grup_adi_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e820_g_cam_esp_g_grup_adi->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e820_g_cam_esp_g_grup_adi->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E820_G_CAM_ESP_G_GRUP_ADI_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e820_g_cam_esp_g_grup_adi->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E820_G_CAM_ESP_G_GRUP_ADI_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e820_g_cam_esp_g_grup_adi->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

