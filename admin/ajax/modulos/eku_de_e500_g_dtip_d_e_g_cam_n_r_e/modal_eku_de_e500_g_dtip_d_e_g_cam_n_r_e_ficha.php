<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e500_g_dtip_d_e_g_cam_n_r_e = EkuDeE500GDtipDEGCamNRE::getOxId($id);
//Gral::prr($eku_de_e500_g_dtip_d_e_g_cam_n_r_e);
?>

<div class="tabs ficha-eku_de_e500_g_dtip_d_e_g_cam_n_r_e" identificador="<?php echo $eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e500_g_dtip_d_e_g_cam_n_r_e id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e500_g_dtip_d_e_g_cam_n_r_e descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e500_g_dtip_d_e_g_cam_n_r_e eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e500_g_dtip_d_e_g_cam_n_r_e eku_e501_imoteminr">
            <div class="label"><?php Lang::_lang('eku_e501_imoteminr') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE501Imoteminr()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e500_g_dtip_d_e_g_cam_n_r_e eku_e502_ddesmoteminr">
            <div class="label"><?php Lang::_lang('eku_e502_ddesmoteminr') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE502Ddesmoteminr()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e500_g_dtip_d_e_g_cam_n_r_e eku_e503_irespeminr">
            <div class="label"><?php Lang::_lang('eku_e503_irespeminr') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE503Irespeminr()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e500_g_dtip_d_e_g_cam_n_r_e eku_e504_ddesrespeminr">
            <div class="label"><?php Lang::_lang('eku_e504_ddesrespeminr') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE504Ddesrespeminr()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e500_g_dtip_d_e_g_cam_n_r_e eku_e505_dkmr">
            <div class="label"><?php Lang::_lang('eku_e505_dkmr') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE505Dkmr()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e500_g_dtip_d_e_g_cam_n_r_e eku_e506_dfecem">
            <div class="label"><?php Lang::_lang('eku_e506_dfecem') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEkuE506Dfecem()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e500_g_dtip_d_e_g_cam_n_r_e codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e500_g_dtip_d_e_g_cam_n_r_e observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e500_g_dtip_d_e_g_cam_n_r_e orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e500_g_dtip_d_e_g_cam_n_r_e estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e500_g_dtip_d_e_g_cam_n_r_e->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

