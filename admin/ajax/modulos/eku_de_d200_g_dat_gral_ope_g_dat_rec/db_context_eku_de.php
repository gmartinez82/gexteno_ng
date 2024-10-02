<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$eku_de_d200_g_dat_gral_ope_g_dat_rec_id = Gral::getVars(2, 'eku_de_d200_g_dat_gral_ope_g_dat_rec_id');
$eku_de_d200_g_dat_gral_ope_g_dat_rec = EkuDeD200GDatGralOpeGDatRec::getOxId($eku_de_d200_g_dat_gral_ope_g_dat_rec_id);
$eku_de = $eku_de_d200_g_dat_gral_ope_g_dat_rec->getEkuDe();

?>
<div class="datos" id="<?php Gral::_echo($eku_de->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('EkuDe') ?>: 
        <strong><?php Gral::_echo($eku_de->getId()) ?> - <?php Gral::_echo($eku_de->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="eku_de_alta.php?id=<?php echo($eku_de->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuDe') ?>: <strong><?php Gral::_echo($eku_de->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo EkuDeD200GDatGralOpeGDatRec::getFiltrosArrGral() ?>&arr=<?php echo $eku_de_d200_g_dat_gral_ope_g_dat_rec->getFiltrosArrXCampo('EkuDe', 'eku_de_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('EkuDeD200GDatGralOpeGDatRecs') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($eku_de->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

