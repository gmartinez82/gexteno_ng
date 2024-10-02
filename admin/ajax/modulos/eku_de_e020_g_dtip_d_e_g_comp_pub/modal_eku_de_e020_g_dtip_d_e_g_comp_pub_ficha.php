<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e020_g_dtip_d_e_g_comp_pub = EkuDeE020GDtipDEGCompPub::getOxId($id);
//Gral::prr($eku_de_e020_g_dtip_d_e_g_comp_pub);
?>

<div class="tabs ficha-eku_de_e020_g_dtip_d_e_g_comp_pub" identificador="<?php echo $eku_de_e020_g_dtip_d_e_g_comp_pub->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e020_g_dtip_d_e_g_comp_pub id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e020_g_dtip_d_e_g_comp_pub descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e020_g_dtip_d_e_g_comp_pub eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e020_g_dtip_d_e_g_comp_pub eku_e021_dmodcont">
            <div class="label"><?php Lang::_lang('eku_e021_dmodcont') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getEkuE021Dmodcont()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e020_g_dtip_d_e_g_comp_pub eku_e022_dentcont">
            <div class="label"><?php Lang::_lang('eku_e022_dentcont') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getEkuE022Dentcont()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e020_g_dtip_d_e_g_comp_pub eku_e023_danocont">
            <div class="label"><?php Lang::_lang('eku_e023_danocont') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getEkuE023Danocont()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e020_g_dtip_d_e_g_comp_pub eku_e024_dseccont">
            <div class="label"><?php Lang::_lang('eku_e024_dseccont') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getEkuE024Dseccont()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e020_g_dtip_d_e_g_comp_pub eku_e025_dfecodcont">
            <div class="label"><?php Lang::_lang('eku_e025_dfecodcont') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getEkuE025Dfecodcont()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e020_g_dtip_d_e_g_comp_pub codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e020_g_dtip_d_e_g_comp_pub observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e020_g_dtip_d_e_g_comp_pub orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e020_g_dtip_d_e_g_comp_pub->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e020_g_dtip_d_e_g_comp_pub estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e020_g_dtip_d_e_g_comp_pub->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

