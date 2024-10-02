<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq = EkuDeE630GDtipDEGCamCondGPagCheq::getOxId($id);
//Gral::prr($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq);
?>

<div class="tabs ficha-eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq" identificador="<?php echo $eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq eku_e631_dnumcheq">
            <div class="label"><?php Lang::_lang('eku_e631_dnumcheq') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEkuE631Dnumcheq()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq eku_e632_dbcoemi">
            <div class="label"><?php Lang::_lang('eku_e632_dbcoemi') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEkuE632Dbcoemi()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e630_g_dtip_d_e_g_cam_cond_g_pag_cheq->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

