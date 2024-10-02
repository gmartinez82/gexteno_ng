<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_id = Gral::getVars(2, 'id');
$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc = EkuDeE750GDtipDEGCamItemGRasMerc::getOxId($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E750_G_DTIP_D_E_G_CAM_ITEM_G_RAS_MERC_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

