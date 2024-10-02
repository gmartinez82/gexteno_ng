<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_j001_g_cam_fu_f_d = EkuDeJ001GCamFuFD::getOxId($id);
//Gral::prr($eku_de_j001_g_cam_fu_f_d);
?>

<div class="tabs ficha-eku_de_j001_g_cam_fu_f_d" identificador="<?php echo $eku_de_j001_g_cam_fu_f_d->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_j001_g_cam_fu_f_d id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_j001_g_cam_fu_f_d descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_j001_g_cam_fu_f_d eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_j001_g_cam_fu_f_d eku_j002_dcarqr">
            <div class="label"><?php Lang::_lang('eku_j002_dcarqr') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getEkuJ002Dcarqr()) ?>
            </div>
        </div>
		
        <div class="par eku_de_j001_g_cam_fu_f_d eku_j003_dinfadic">
            <div class="label"><?php Lang::_lang('eku_j003_dinfadic') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getEkuJ003Dinfadic()) ?>
            </div>
        </div>
		
        <div class="par eku_de_j001_g_cam_fu_f_d codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_j001_g_cam_fu_f_d observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_j001_g_cam_fu_f_d orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_j001_g_cam_fu_f_d estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_j001_g_cam_fu_f_d->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

