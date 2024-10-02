<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_id = Gral::getVars(2, 'id');
$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = EkuDeE720GDtipDEGCamItemGValorItem::getOxId($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_DE_E720_G_DTIP_D_E_G_CAM_ITEM_G_VALOR_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

