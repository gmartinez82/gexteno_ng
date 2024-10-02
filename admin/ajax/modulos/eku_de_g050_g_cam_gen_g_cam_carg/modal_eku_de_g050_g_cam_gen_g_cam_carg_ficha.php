<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_g050_g_cam_gen_g_cam_carg = EkuDeG050GCamGenGCamCarg::getOxId($id);
//Gral::prr($eku_de_g050_g_cam_gen_g_cam_carg);
?>

<div class="tabs ficha-eku_de_g050_g_cam_gen_g_cam_carg" identificador="<?php echo $eku_de_g050_g_cam_gen_g_cam_carg->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_g050_g_cam_gen_g_cam_carg id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg eku_g051_cunimedtotvol">
            <div class="label"><?php Lang::_lang('eku_g051_cunimedtotvol') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG051Cunimedtotvol()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg eku_g052_ddesunimedtotvol">
            <div class="label"><?php Lang::_lang('eku_g052_ddesunimedtotvol') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG052Ddesunimedtotvol()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg eku_g053_dtotvolmerc">
            <div class="label"><?php Lang::_lang('eku_g053_dtotvolmerc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG053Dtotvolmerc()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg eku_g054_cunimedtotpes">
            <div class="label"><?php Lang::_lang('eku_g054_cunimedtotpes') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG054Cunimedtotpes()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg eku_g055_ddesunimedtotpes">
            <div class="label"><?php Lang::_lang('eku_g055_ddesunimedtotpes') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG055Ddesunimedtotpes()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg eku_g056_dtotpesmerc">
            <div class="label"><?php Lang::_lang('eku_g056_dtotpesmerc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG056Dtotpesmerc()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg eku_g057_icarcarga">
            <div class="label"><?php Lang::_lang('eku_g057_icarcarga') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG057Icarcarga()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg eku_g058_ddescarcarga">
            <div class="label"><?php Lang::_lang('eku_g058_ddescarcarga') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getEkuG058Ddescarcarga()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_g050_g_cam_gen_g_cam_carg estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_g050_g_cam_gen_g_cam_carg->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

