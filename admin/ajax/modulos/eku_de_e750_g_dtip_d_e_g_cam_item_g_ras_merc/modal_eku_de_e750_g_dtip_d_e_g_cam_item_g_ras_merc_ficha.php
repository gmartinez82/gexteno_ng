<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc = EkuDeE750GDtipDEGCamItemGRasMerc::getOxId($id);
//Gral::prr($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc);
?>

<div class="tabs ficha-eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc" identificador="<?php echo $eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc eku_de_e700_g_dtip_d_e_g_cam_item_id">
            <div class="label"><?php Lang::_lang('EkuDeE700GDtipDEGCamItem') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuDeE700GDtipDEGCamItem()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc eku_e751_dnumlote">
            <div class="label"><?php Lang::_lang('eku_e751_dnumlote') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE751Dnumlote()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc eku_e752_dvencmerc">
            <div class="label"><?php Lang::_lang('eku_e752_dvencmerc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE752Dvencmerc()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc eku_e753_dnserie">
            <div class="label"><?php Lang::_lang('eku_e753_dnserie') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE753Dnserie()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc eku_e754_dnumpedi">
            <div class="label"><?php Lang::_lang('eku_e754_dnumpedi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE754Dnumpedi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc eku_e755_dnumsegui">
            <div class="label"><?php Lang::_lang('eku_e755_dnumsegui') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE755Dnumsegui()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc eku_e756_dnomimp">
            <div class="label"><?php Lang::_lang('eku_e756_dnomimp') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE756Dnomimp()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc eku_e757_ddirimp">
            <div class="label"><?php Lang::_lang('eku_e757_ddirimp') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE757Ddirimp()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc eku_e758_dnumfir">
            <div class="label"><?php Lang::_lang('eku_e758_dnumfir') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE758Dnumfir()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc eku_e759_dnumreg">
            <div class="label"><?php Lang::_lang('eku_e759_dnumreg') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE759Dnumreg()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc eku_e760_dnumregentcom">
            <div class="label"><?php Lang::_lang('eku_e760_dnumregentcom') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEkuE760Dnumregentcom()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e750_g_dtip_d_e_g_cam_item_g_ras_merc->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

