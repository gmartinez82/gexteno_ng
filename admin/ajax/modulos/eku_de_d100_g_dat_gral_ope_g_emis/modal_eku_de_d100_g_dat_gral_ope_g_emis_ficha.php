<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_d100_g_dat_gral_ope_g_emis = EkuDeD100GDatGralOpeGEmis::getOxId($id);
//Gral::prr($eku_de_d100_g_dat_gral_ope_g_emis);
?>

<div class="tabs ficha-eku_de_d100_g_dat_gral_ope_g_emis" identificador="<?php echo $eku_de_d100_g_dat_gral_ope_g_emis->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_d100_g_dat_gral_ope_g_emis id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d101_drucem">
            <div class="label"><?php Lang::_lang('eku_d101_drucem') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD101Drucem()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d102_ddvemi">
            <div class="label"><?php Lang::_lang('eku_d102_ddvemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD102Ddvemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d103_itipcont">
            <div class="label"><?php Lang::_lang('eku_d103_itipcont') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD103Itipcont()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d104_ctipreg">
            <div class="label"><?php Lang::_lang('eku_d104_ctipreg') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD104Ctipreg()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d105_dnomemi">
            <div class="label"><?php Lang::_lang('eku_d105_dnomemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD105Dnomemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d106_dnomfanemi">
            <div class="label"><?php Lang::_lang('eku_d106_dnomfanemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD106Dnomfanemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d107_ddiremi">
            <div class="label"><?php Lang::_lang('eku_d107_ddiremi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD107Ddiremi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d108_dnumcas">
            <div class="label"><?php Lang::_lang('eku_d108_dnumcas') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD108Dnumcas()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d109_dcompdir1">
            <div class="label"><?php Lang::_lang('eku_d109_dcompdir1') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD109Dcompdir1()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d110_dcompdir2">
            <div class="label"><?php Lang::_lang('eku_d110_dcompdir2') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD110Dcompdir2()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d111_cdepemi">
            <div class="label"><?php Lang::_lang('eku_d111_cdepemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD111Cdepemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d112_ddesdepemi">
            <div class="label"><?php Lang::_lang('eku_d112_ddesdepemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD112Ddesdepemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d113_cdisemi">
            <div class="label"><?php Lang::_lang('eku_d113_cdisemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD113Cdisemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d114_ddesdisemi">
            <div class="label"><?php Lang::_lang('eku_d114_ddesdisemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD114Ddesdisemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d115_cciuemi">
            <div class="label"><?php Lang::_lang('eku_d115_cciuemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD115Cciuemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d116_ddesciuemi">
            <div class="label"><?php Lang::_lang('eku_d116_ddesciuemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD116Ddesciuemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d117_dtelemi">
            <div class="label"><?php Lang::_lang('eku_d117_dtelemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD117Dtelemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d118_demaile">
            <div class="label"><?php Lang::_lang('eku_d118_demaile') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD118Demaile()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis eku_d119_ddensuc">
            <div class="label"><?php Lang::_lang('eku_d119_ddensuc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getEkuD119Ddensuc()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d100_g_dat_gral_ope_g_emis->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d100_g_dat_gral_ope_g_emis estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_d100_g_dat_gral_ope_g_emis->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

