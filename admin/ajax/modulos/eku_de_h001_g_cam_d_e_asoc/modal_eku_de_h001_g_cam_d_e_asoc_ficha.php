<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_h001_g_cam_d_e_asoc = EkuDeH001GCamDEAsoc::getOxId($id);
//Gral::prr($eku_de_h001_g_cam_d_e_asoc);
?>

<div class="tabs ficha-eku_de_h001_g_cam_d_e_asoc" identificador="<?php echo $eku_de_h001_g_cam_d_e_asoc->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_h001_g_cam_d_e_asoc id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_h001_g_cam_d_e_asoc descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h002_itipdocaso">
            <div class="label"><?php Lang::_lang('eku_h002_itipdocaso') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH002Itipdocaso()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h003_ddestipdocaso">
            <div class="label"><?php Lang::_lang('eku_h003_ddestipdocaso') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH003Ddestipdocaso()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h004_dcdcderef">
            <div class="label"><?php Lang::_lang('eku_h004_dcdcderef') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH004Dcdcderef()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h005_dntimdi">
            <div class="label"><?php Lang::_lang('eku_h005_dntimdi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH005Dntimdi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h006_destdocaso">
            <div class="label"><?php Lang::_lang('eku_h006_destdocaso') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH006Destdocaso()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h007_dpexpdocaso">
            <div class="label"><?php Lang::_lang('eku_h007_dpexpdocaso') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH007Dpexpdocaso()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h008_dnumdocaso">
            <div class="label"><?php Lang::_lang('eku_h008_dnumdocaso') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH008Dnumdocaso()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h009_itipodocaso">
            <div class="label"><?php Lang::_lang('eku_h009_itipodocaso') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH009Itipodocaso()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h010_ddtipodocaso">
            <div class="label"><?php Lang::_lang('eku_h010_ddtipodocaso') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH010Ddtipodocaso()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h011_dfecemidi">
            <div class="label"><?php Lang::_lang('eku_h011_dfecemidi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH011Dfecemidi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h012_dnumcomret">
            <div class="label"><?php Lang::_lang('eku_h012_dnumcomret') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH012Dnumcomret()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h013_dnumrescf">
            <div class="label"><?php Lang::_lang('eku_h013_dnumrescf') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH013Dnumrescf()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h014_itipcons">
            <div class="label"><?php Lang::_lang('eku_h014_itipcons') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH014Itipcons()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h015_ddestipcons">
            <div class="label"><?php Lang::_lang('eku_h015_ddestipcons') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH015Ddestipcons()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h016_dnumcons">
            <div class="label"><?php Lang::_lang('eku_h016_dnumcons') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH016Dnumcons()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc eku_h017_dnumcontrol">
            <div class="label"><?php Lang::_lang('eku_h017_dnumcontrol') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getEkuH017Dnumcontrol()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_h001_g_cam_d_e_asoc estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_h001_g_cam_d_e_asoc->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

