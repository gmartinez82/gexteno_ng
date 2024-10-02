<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_id = Gral::getVars(2, 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_id');
$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = EkuDeE720GDtipDEGCamItemGValorItem::getOxId($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item_id);
$eku_de_e700_g_dtip_d_e_g_cam_item = $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDeE700GDtipDEGCamItem();

?>
<div class="datos" id="<?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?>: 
        <strong><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getId()) ?> - <?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_de_e700_g_dtip_d_e_g_cam_item_alta.php?id=<?php echo($eku_de_e700_g_dtip_d_e_g_cam_item->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?>: <strong><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuDeE720GDtipDEGCamItemGValorItem::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getFiltrosArrXCampo('EkuDeE700GDtipDEGCamItem', 'eku_de_e700_g_dtip_d_e_g_cam_item_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuDeE720GDtipDEGCamItemGValorItems') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_de_e700_g_dtip_d_e_g_cam_item->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

