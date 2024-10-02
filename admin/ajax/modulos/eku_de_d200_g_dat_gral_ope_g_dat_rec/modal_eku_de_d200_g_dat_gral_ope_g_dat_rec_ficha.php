<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_d200_g_dat_gral_ope_g_dat_rec = EkuDeD200GDatGralOpeGDatRec::getOxId($id);
//Gral::prr($eku_de_d200_g_dat_gral_ope_g_dat_rec);
?>

<div class="tabs ficha-eku_de_d200_g_dat_gral_ope_g_dat_rec" identificador="<?php echo $eku_de_d200_g_dat_gral_ope_g_dat_rec->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d201_inatrec">
            <div class="label"><?php Lang::_lang('eku_d201_inatrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD201Inatrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d202_itiope">
            <div class="label"><?php Lang::_lang('eku_d202_itiope') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD202Itiope()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d203_cpaisrec">
            <div class="label"><?php Lang::_lang('eku_d203_cpaisrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD203Cpaisrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d204_ddespaisre">
            <div class="label"><?php Lang::_lang('eku_d204_ddespaisre') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD204Ddespaisre()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d205_iticontrec">
            <div class="label"><?php Lang::_lang('eku_d205_iticontrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD205Iticontrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d206_drucrec">
            <div class="label"><?php Lang::_lang('eku_d206_drucrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD206Drucrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d207_ddvrec">
            <div class="label"><?php Lang::_lang('eku_d207_ddvrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD207Ddvrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d208_itipidrec">
            <div class="label"><?php Lang::_lang('eku_d208_itipidrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD208Itipidrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d209_ddtipidrec">
            <div class="label"><?php Lang::_lang('eku_d209_ddtipidrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD209Ddtipidrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d210_dnumidrec">
            <div class="label"><?php Lang::_lang('eku_d210_dnumidrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD210Dnumidrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d211_dnomrec">
            <div class="label"><?php Lang::_lang('eku_d211_dnomrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD211Dnomrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d212_dnomfanrec">
            <div class="label"><?php Lang::_lang('eku_d212_dnomfanrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD212Dnomfanrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d213_ddirrec">
            <div class="label"><?php Lang::_lang('eku_d213_ddirrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD213Ddirrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d218_dnumcasrec">
            <div class="label"><?php Lang::_lang('eku_d218_dnumcasrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD218Dnumcasrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d219_cdeprec">
            <div class="label"><?php Lang::_lang('eku_d219_cdeprec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD219Cdeprec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d220_ddesdeprec">
            <div class="label"><?php Lang::_lang('eku_d220_ddesdeprec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD220Ddesdeprec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d221_cdisrec">
            <div class="label"><?php Lang::_lang('eku_d221_cdisrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD221Cdisrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d222_ddesdisrec">
            <div class="label"><?php Lang::_lang('eku_d222_ddesdisrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD222Ddesdisrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d223_cciurec">
            <div class="label"><?php Lang::_lang('eku_d223_cciurec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD223Cciurec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d224_ddesciurec">
            <div class="label"><?php Lang::_lang('eku_d224_ddesciurec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD224Ddesciurec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d214_dtelrec">
            <div class="label"><?php Lang::_lang('eku_d214_dtelrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD214Dtelrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d215_dcelrec">
            <div class="label"><?php Lang::_lang('eku_d215_dcelrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD215Dcelrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d216_demailrec">
            <div class="label"><?php Lang::_lang('eku_d216_demailrec') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD216Demailrec()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec eku_d217_dcodcliente">
            <div class="label"><?php Lang::_lang('eku_d217_dcodcliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuD217Dcodcliente()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d200_g_dat_gral_ope_g_dat_rec->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d200_g_dat_gral_ope_g_dat_rec estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_d200_g_dat_gral_ope_g_dat_rec->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

