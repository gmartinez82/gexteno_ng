<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_hoja_ruta_id = Gral::getVars(2, 'vta_hoja_ruta_id');
$vta_hoja_ruta = VtaHojaRuta::getOxId($vta_hoja_ruta_id);
$ope_chofer = $vta_hoja_ruta->getOpeChofer();

?>
<div class="datos" id="<?php Gral::_echo($ope_chofer->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('OpeChofer') ?>: 
        <strong><?php Gral::_echo($ope_chofer->getId()) ?> - <?php Gral::_echo($ope_chofer->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ope_chofer_alta.php?id=<?php echo($ope_chofer->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('OpeChofer') ?>: <strong><?php Gral::_echo($ope_chofer->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaHojaRuta::getFiltrosArrGral() ?>&arr=<?php echo $vta_hoja_ruta->getFiltrosArrXCampo('OpeChofer', 'ope_chofer_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaHojaRutas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ope_chofer->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

