<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_d140_g_dat_gral_ope_g_resp_d_e = EkuDeD140GDatGralOpeGRespDE::getOxId($id);
//Gral::prr($eku_de_d140_g_dat_gral_ope_g_resp_d_e);
?>

<div class="tabs ficha-eku_de_d140_g_dat_gral_ope_g_resp_d_e" identificador="<?php echo $eku_de_d140_g_dat_gral_ope_g_resp_d_e->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_d140_g_dat_gral_ope_g_resp_d_e id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_d140_g_dat_gral_ope_g_resp_d_e descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d140_g_dat_gral_ope_g_resp_d_e eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d140_g_dat_gral_ope_g_resp_d_e eku_d141_itipidrespde">
            <div class="label"><?php Lang::_lang('eku_d141_itipidrespde') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD141Itipidrespde()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d140_g_dat_gral_ope_g_resp_d_e eku_d142_ddtipidrespde">
            <div class="label"><?php Lang::_lang('eku_d142_ddtipidrespde') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD142Ddtipidrespde()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d140_g_dat_gral_ope_g_resp_d_e eku_d143_dnumidrespde">
            <div class="label"><?php Lang::_lang('eku_d143_dnumidrespde') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD143Dnumidrespde()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d140_g_dat_gral_ope_g_resp_d_e eku_d144_dnomrespde">
            <div class="label"><?php Lang::_lang('eku_d144_dnomrespde') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD144Dnomrespde()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d140_g_dat_gral_ope_g_resp_d_e eku_d145_dcarrespde">
            <div class="label"><?php Lang::_lang('eku_d145_dcarrespde') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEkuD145Dcarrespde()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d140_g_dat_gral_ope_g_resp_d_e codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d140_g_dat_gral_ope_g_resp_d_e observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d140_g_dat_gral_ope_g_resp_d_e orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_d140_g_dat_gral_ope_g_resp_d_e estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_d140_g_dat_gral_ope_g_resp_d_e->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

