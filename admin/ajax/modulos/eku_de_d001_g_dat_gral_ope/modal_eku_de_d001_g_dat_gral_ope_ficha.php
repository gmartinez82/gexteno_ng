<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_d001_g_dat_gral_ope = EkuDeD001GDatGralOpe::getOxId($id);
//Gral::prr($eku_de_d001_g_dat_gral_ope);
?>

<div class="tabs ficha-eku_de_d001_g_dat_gral_ope" identificador="<?php echo $eku_de_d001_g_dat_gral_ope->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_d001_g_dat_gral_ope id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d001_g_dat_gral_ope->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_d001_g_dat_gral_ope descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d001_g_dat_gral_ope->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d001_g_dat_gral_ope eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d001_g_dat_gral_ope->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d001_g_dat_gral_ope eku_d002_dfeemide">
            <div class="label"><?php Lang::_lang('eku_d002_dFeEmiDE') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d001_g_dat_gral_ope->getEkuD002Dfeemide()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d001_g_dat_gral_ope codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d001_g_dat_gral_ope->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d001_g_dat_gral_ope observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d001_g_dat_gral_ope->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d001_g_dat_gral_ope orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d001_g_dat_gral_ope->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d001_g_dat_gral_ope estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_d001_g_dat_gral_ope->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

