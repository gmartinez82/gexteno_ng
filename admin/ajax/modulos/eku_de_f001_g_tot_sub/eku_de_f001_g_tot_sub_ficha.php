<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_de_f001_g_tot_sub = EkuDeF001GTotSub::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('EkuDe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuDe()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_f002_dsubexe') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF002Dsubexe()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_f003_dsubexo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF003Dsubexo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_f004_dsub5') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF004Dsub5()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_f005_dsub10') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF005Dsub10()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_f008_dtotope') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF008Dtotope()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_f009_dtotdesc') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF009Dtotdesc()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_f033_dtotdescglotem') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF033Dtotdescglotem()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_f034_dtotantitem') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF034Dtotantitem()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_f035_dtotant') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF035Dtotant()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_f010_dporcdesctotal') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF010Dporcdesctotal()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_f011_ddesctotal') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF011Ddesctotal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_f012_danticipo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF012Danticipo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_f013_dredon') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF013Dredon()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_f025_dcomi') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF025Dcomi()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_f014_dtotgralope') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF014Dtotgralope()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_f015_diva5') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF015Diva5()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_f016_diva10') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF016Diva10()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_f036_dliqtotiva5') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF036Dliqtotiva5()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_f037_dliqtotiva10') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF037Dliqtotiva10()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_f026_divacomi') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF026Divacomi()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_f017_dtotiva') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF017Dtotiva()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_f018_dbasegrav5') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF018Dbasegrav5()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_f019_dbasegrav10') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF019Dbasegrav10()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_f020_dtbasgraiva') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF020Dtbasgraiva()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('eku_f023_dtotalgs') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF023Dtotalgs()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('eku_f024_dtotcom') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getEkuF024Dtotcom()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($eku_de_f001_g_tot_sub->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_f001_g_tot_sub->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_de_f001_g_tot_sub->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_de_f001_g_tot_sub->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

