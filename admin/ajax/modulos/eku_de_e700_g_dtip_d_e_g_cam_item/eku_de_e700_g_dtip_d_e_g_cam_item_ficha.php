<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e700_g_dtip_d_e_g_cam_item = EkuDeE700GDtipDEGCamItem::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e701_dcodint') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE701Dcodint()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e702_dpararanc') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE702Dpararanc()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e703_dncm') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE703Dncm()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e704_ddncpg') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE704Ddncpg()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e705_ddncpe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE705Ddncpe()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e706_dgtin') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE706Dgtin()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e707_dgtinpq') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE707Dgtinpq()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e708_ddesproser') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE708Ddesproser()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e709_cunimed') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE709Cunimed()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e710_ddesunimed') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE710Ddesunimed()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e711_dcantproser') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE711Dcantproser()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e712_cpaisorig') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE712Cpaisorig()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e713_ddespaisorig') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE713Ddespaisorig()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e714_dinfitem') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE714Dinfitem()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e715_crelmerc') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE715Crelmerc()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e716_ddesrelmerc') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE716Ddesrelmerc()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e717_dcanquimer') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE717Dcanquimer()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e718_dporquimer') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE718Dporquimer()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e719_dcdcanticipo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getEkuE719Dcdcanticipo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e700_g_dtip_d_e_g_cam_item->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e700_g_dtip_d_e_g_cam_item->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e700_g_dtip_d_e_g_cam_item->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

