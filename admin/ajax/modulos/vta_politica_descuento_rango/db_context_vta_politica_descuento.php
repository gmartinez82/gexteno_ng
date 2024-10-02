<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_politica_descuento_rango_id = Gral::getVars(2, 'vta_politica_descuento_rango_id');
$vta_politica_descuento_rango = VtaPoliticaDescuentoRango::getOxId($vta_politica_descuento_rango_id);
$vta_politica_descuento = $vta_politica_descuento_rango->getVtaPoliticaDescuento();

?>
<div class="datos" id="<?php Gral::_echo($vta_politica_descuento->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaPoliticaDescuento') ?>: 
        <strong><?php Gral::_echo($vta_politica_descuento->getId()) ?> - <?php Gral::_echo($vta_politica_descuento->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_politica_descuento_alta.php?id=<?php echo($vta_politica_descuento->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPoliticaDescuento') ?>: <strong><?php Gral::_echo($vta_politica_descuento->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaPoliticaDescuentoRango::getFiltrosArrGral() ?>&arr=<?php echo $vta_politica_descuento_rango->getFiltrosArrXCampo('VtaPoliticaDescuento', 'vta_politica_descuento_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaPoliticaDescuentoRangos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_politica_descuento->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

