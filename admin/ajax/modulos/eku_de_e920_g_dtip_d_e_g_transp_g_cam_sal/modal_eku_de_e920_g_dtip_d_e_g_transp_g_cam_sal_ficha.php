<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal = EkuDeE920GDtipDEGTranspGCamSal::getOxId($id);
//Gral::prr($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal);
?>

<div class="tabs ficha-eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal" identificador="<?php echo $eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal eku_e921_ddirlocsal">
            <div class="label"><?php Lang::_lang('eku_e921_ddirlocsal') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE921Ddirlocsal()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal eku_e922_dnumcassal">
            <div class="label"><?php Lang::_lang('eku_e922_dnumcassal') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE922Dnumcassal()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal eku_e923_dcomp1sal">
            <div class="label"><?php Lang::_lang('eku_e923_dcomp1sal') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE923Dcomp1sal()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal eku_e924_dcomp2sal">
            <div class="label"><?php Lang::_lang('eku_e924_dcomp2sal') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE924Dcomp2sal()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal eku_e925_cdepsal">
            <div class="label"><?php Lang::_lang('eku_e925_cdepsal') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE925Cdepsal()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal eku_e926_ddesdepsal">
            <div class="label"><?php Lang::_lang('eku_e926_ddesdepsal') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE926Ddesdepsal()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal eku_e927_cdissal">
            <div class="label"><?php Lang::_lang('eku_e927_cdissal') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE927Cdissal()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal eku_e928_ddesdissal">
            <div class="label"><?php Lang::_lang('eku_e928_ddesdissal') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE928Ddesdissal()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal eku_e929_cciusal">
            <div class="label"><?php Lang::_lang('eku_e929_cciusal') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE929Cciusal()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal eku_e930_ddesciusal">
            <div class="label"><?php Lang::_lang('eku_e930_ddesciusal') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE930Ddesciusal()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal eku_e931_dtelsal">
            <div class="label"><?php Lang::_lang('eku_e931_dtelsal') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEkuE931Dtelsal()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e920_g_dtip_d_e_g_transp_g_cam_sal->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

