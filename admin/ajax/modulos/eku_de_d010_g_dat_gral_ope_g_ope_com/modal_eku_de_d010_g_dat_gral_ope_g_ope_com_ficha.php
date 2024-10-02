<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_d010_g_dat_gral_ope_g_ope_com = EkuDeD010GDatGralOpeGOpeCom::getOxId($id);
//Gral::prr($eku_de_d010_g_dat_gral_ope_g_ope_com);
?>

<div class="tabs ficha-eku_de_d010_g_dat_gral_ope_g_ope_com" identificador="<?php echo $eku_de_d010_g_dat_gral_ope_g_ope_com->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com eku_d011_itiptra">
            <div class="label"><?php Lang::_lang('eku_d011_itiptra') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD011Itiptra()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com eku_d012_ddestiptra">
            <div class="label"><?php Lang::_lang('eku_d012_ddestiptra') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD012Ddestiptra()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com eku_d013_itimp">
            <div class="label"><?php Lang::_lang('eku_d013_itimp') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD013Itimp()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com eku_d014_ddestimp">
            <div class="label"><?php Lang::_lang('eku_d014_ddestimp') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD014Ddestimp()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com eku_d015_cmoneope">
            <div class="label"><?php Lang::_lang('eku_d015_cmoneope') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD015Cmoneope()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com eku_d016_ddesmoneope">
            <div class="label"><?php Lang::_lang('eku_d016_ddesmoneope') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD016Ddesmoneope()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com eku_d017_dcondticam">
            <div class="label"><?php Lang::_lang('eku_d017_dcondticam') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD017Dcondticam()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com eku_d018_dticam">
            <div class="label"><?php Lang::_lang('eku_d018_dticam') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD018Dticam()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com eku_d019_icondant">
            <div class="label"><?php Lang::_lang('eku_d019_icondant') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD019Icondant()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com eku_d020_ddescondant">
            <div class="label"><?php Lang::_lang('eku_d020_ddescondant') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getEkuD020Ddescondant()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d010_g_dat_gral_ope_g_ope_com->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d010_g_dat_gral_ope_g_ope_com estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_d010_g_dat_gral_ope_g_ope_com->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

