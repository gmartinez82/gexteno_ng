<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_b001_g_ope_d_e = EkuDeB001GOpeDE::getOxId($id);
//Gral::prr($eku_de_b001_g_ope_d_e);
?>

<div class="tabs ficha-eku_de_b001_g_ope_d_e" identificador="<?php echo $eku_de_b001_g_ope_d_e->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_b001_g_ope_d_e id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_b001_g_ope_d_e->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_b001_g_ope_d_e descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_b001_g_ope_d_e->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_b001_g_ope_d_e eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_b001_g_ope_d_e->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_b001_g_ope_d_e eku_b002_itipemi">
            <div class="label"><?php Lang::_lang('eku_b002_itipemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_b001_g_ope_d_e->getEkuB002Itipemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_b001_g_ope_d_e eku_b003_ddestipemi">
            <div class="label"><?php Lang::_lang('eku_b003_ddestipemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_b001_g_ope_d_e->getEkuB003Ddestipemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_b001_g_ope_d_e eku_b004_dcodseg">
            <div class="label"><?php Lang::_lang('eku_b004_dcodseg') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_b001_g_ope_d_e->getEkuB004Dcodseg()) ?>
            </div>
        </div>
		
        <div class="par eku_de_b001_g_ope_d_e eku_b005_dinfoemi">
            <div class="label"><?php Lang::_lang('eku_b005_dinfoemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_b001_g_ope_d_e->getEkuB005Dinfoemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_b001_g_ope_d_e eku_b006_dinfofisc">
            <div class="label"><?php Lang::_lang('eku_b006_dinfofisc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_b001_g_ope_d_e->getEkuB006Dinfofisc()) ?>
            </div>
        </div>
		
        <div class="par eku_de_b001_g_ope_d_e codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_b001_g_ope_d_e->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_b001_g_ope_d_e observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_b001_g_ope_d_e->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_b001_g_ope_d_e orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_b001_g_ope_d_e->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_b001_g_ope_d_e estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_b001_g_ope_d_e->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

