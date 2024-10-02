<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$eku_de_c001_g_timb = EkuDeC001GTimb::getOxId($id);
//Gral::prr($eku_de_c001_g_timb);
?>

<div class="tabs ficha-eku_de_c001_g_timb" identificador="<?php echo $eku_de_c001_g_timb->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par eku_de_c001_g_timb id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getId()) ?>
            </div>
        </div>

	
        <div class="par eku_de_c001_g_timb descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb eku_de_id">
            <div class="label"><?php Lang::_lang('EkuDe') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getEkuDe()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb eku_c002_itide">
            <div class="label"><?php Lang::_lang('eku_c002_itide') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getEkuC002Itide()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb eku_c003_ddestide">
            <div class="label"><?php Lang::_lang('eku_c003_ddestide') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getEkuC003Ddestide()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb eku_c004_dnumtim">
            <div class="label"><?php Lang::_lang('eku_c004_dnumtim') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getEkuC004Dnumtim()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb eku_c005_dest">
            <div class="label"><?php Lang::_lang('eku_c005_dest') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getEkuC005Dest()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb eku_c006_dpunexp">
            <div class="label"><?php Lang::_lang('eku_c006_dpunexp') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getEkuC006Dpunexp()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb eku_c007_dnumdoc">
            <div class="label"><?php Lang::_lang('eku_c007_dnumdoc') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getEkuC007Dnumdoc()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb eku_c010_dserienum">
            <div class="label"><?php Lang::_lang('eku_c010_dserienum') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getEkuC010Dserienum()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb eku_c008_dfeinit">
            <div class="label"><?php Lang::_lang('eku_c008_dfeinit') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getEkuC008Dfeinit()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb eku_c009_dfefint">
            <div class="label"><?php Lang::_lang('eku_c009_dfefint') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getEkuC009Dfefint()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($eku_de_c001_g_timb->getOrden()) ?>
            </div>
        </div>
		
        <div class="par eku_de_c001_g_timb estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($eku_de_c001_g_timb->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

