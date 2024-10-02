<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_e900_g_dtip_d_e_g_transp = EkuDeE900GDtipDEGTransp::getOxId($id);
//Gral::prr($eku_de_e900_g_dtip_d_e_g_transp);
?>

<div class="tabs ficha-eku_de_e900_g_dtip_d_e_g_transp" identificador="<?php echo $eku_de_e900_g_dtip_d_e_g_transp->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_e900_g_dtip_d_e_g_transp id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_e900_g_dtip_d_e_g_transp descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp eku_e901_itiptrans">
            <div class="label"><?php Lang::_lang('eku_e901_itiptrans') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getEkuE901Itiptrans()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp eku_e902_ddestiptrans">
            <div class="label"><?php Lang::_lang('eku_e902_ddestiptrans') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getEkuE902Ddestiptrans()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp eku_e903_imodtrans">
            <div class="label"><?php Lang::_lang('eku_e903_imodtrans') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getEkuE903Imodtrans()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp eku_e904_ddesmodtrans">
            <div class="label"><?php Lang::_lang('eku_e904_ddesmodtrans') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getEkuE904Ddesmodtrans()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp eku_e905_irespflete">
            <div class="label"><?php Lang::_lang('eku_e905_irespflete') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getEkuE905Irespflete()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp eku_e906_ccondneg">
            <div class="label"><?php Lang::_lang('eku_e906_ccondneg') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getEkuE906Ccondneg()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp eku_e907_dnumanif">
            <div class="label"><?php Lang::_lang('eku_e907_dnumanif') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getEkuE907Dnumanif()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp eku_e908_dnudespimp">
            <div class="label"><?php Lang::_lang('eku_e908_dnudespimp') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getEkuE908Dnudespimp()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp eku_e909_dinitras">
            <div class="label"><?php Lang::_lang('eku_e909_dinitras') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getEkuE909Dinitras()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp eku_e910_dfintras">
            <div class="label"><?php Lang::_lang('eku_e910_dfintras') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getEkuE910Dfintras()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp eku_e911_cpaisdest">
            <div class="label"><?php Lang::_lang('eku_e911_cpaisdest') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getEkuE911Cpaisdest()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp eku_e912_ddespaisdest">
            <div class="label"><?php Lang::_lang('eku_e912_ddespaisdest') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getEkuE912Ddespaisdest()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_e900_g_dtip_d_e_g_transp estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_e900_g_dtip_d_e_g_transp->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

