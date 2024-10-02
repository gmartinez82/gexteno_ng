<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item = EkuDeE720GDtipDEGCamItemGValorItem::getOxId($id);
//Gral::prr($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item);
?>

<div class="tabs ficha-eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item" identificador="<?php echo $eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item eku_de_e700_g_dtip_d_e_g_cam_item_id">
            <div class="label"><?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuDeE700GDtipDEGCamItem()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item eku_e721_dpuniproser">
            <div class="label"><?php Lang::_lang('eku_e721_dpuniproser') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE721Dpuniproser()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item eku_e725_dticamit">
            <div class="label"><?php Lang::_lang('eku_e725_dticamit') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE725Dticamit()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item eku_e727_dtotbruopeitem">
            <div class="label"><?php Lang::_lang('eku_e727_dtotbruopeitem') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuE727Dtotbruopeitem()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item eku_ea002_ddescitem">
            <div class="label"><?php Lang::_lang('eku_ea002_ddescitem') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa002Ddescitem()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item eku_ea003_dporcdesit">
            <div class="label"><?php Lang::_lang('eku_ea003_dporcdesit') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa003Dporcdesit()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item eku_ea004_ddescgloitem">
            <div class="label"><?php Lang::_lang('eku_ea004_ddescgloitem') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa004Ddescgloitem()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item eku_ea006_dantpreuniit">
            <div class="label"><?php Lang::_lang('eku_ea006_dantpreuniit') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa006Dantpreuniit()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item eku_ea007_dantglopreuniit">
            <div class="label"><?php Lang::_lang('eku_ea007_dantglopreuniit') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa007Dantglopreuniit()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item eku_ea008_dtotopeitem">
            <div class="label"><?php Lang::_lang('eku_ea008_dtotopeitem') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa008Dtotopeitem()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item eku_ea009_dtotopegs">
            <div class="label"><?php Lang::_lang('eku_ea009_dtotopegs') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEkuEa009Dtotopegs()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

