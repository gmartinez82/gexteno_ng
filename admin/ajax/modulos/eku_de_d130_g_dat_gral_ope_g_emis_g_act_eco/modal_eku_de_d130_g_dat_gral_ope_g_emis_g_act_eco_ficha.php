<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco = EkuDeD130GDatGralOpeGEmisGActEco::getOxId($id);
//Gral::prr($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco);
?>

<div class="tabs ficha-eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco" identificador="<?php echo $eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco eku_d131_cacteco">
            <div class="label"><?php Lang::_lang('eku_d131_cacteco') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getEkuD131Cacteco()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco eku_d132_ddesacteco">
            <div class="label"><?php Lang::_lang('eku_d132_ddesacteco') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getEkuD132Ddesacteco()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

