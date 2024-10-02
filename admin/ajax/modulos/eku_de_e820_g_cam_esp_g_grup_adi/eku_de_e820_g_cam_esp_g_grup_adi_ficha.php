<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e820_g_cam_esp_g_grup_adi = EkuDeE820GCamEspGGrupAdi::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e821_dciclo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuE821Dciclo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e822_dfecinic') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuE822Dfecinic()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e823_dfecfinc') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuE823Dfecfinc()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e824_dvencpag') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuE824Dvencpag()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e825_dcontrato') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuE825Dcontrato()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e826_dsalant') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getEkuE826Dsalant()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e820_g_cam_esp_g_grup_adi->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e820_g_cam_esp_g_grup_adi->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e820_g_cam_esp_g_grup_adi->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e820_g_cam_esp_g_grup_adi->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

