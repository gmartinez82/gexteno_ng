<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc = EkuDeE750GDtipDEGCamItemGRasMerc::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDeE700GDtipDEGCamItem()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e751_dnumlote') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE751Dnumlote()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e752_dvencmerc') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE752Dvencmerc()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e753_dnserie') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE753Dnserie()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e754_dnumpedi') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE754Dnumpedi()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e755_dnumsegui') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE755Dnumsegui()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e756_dnomimp') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE756Dnomimp()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e757_ddirimp') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE757Ddirimp()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e758_dnumfir') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE758Dnumfir()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_e759_dnumreg') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE759Dnumreg()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_e760_dnumregentcom') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE760Dnumregentcom()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

