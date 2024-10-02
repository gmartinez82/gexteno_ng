<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_oc_agrupacion_id = Gral::getVars(2, 'pde_oc_agrupacion_id');
$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);
$prv_descuento_financiero = $pde_oc_agrupacion->getPrvDescuentoFinanciero();

?>
<div class="datos" id="<?php Gral::_echo($prv_descuento_financiero->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrvDescuentoFinanciero') ?>: 
        <strong><?php Gral::_echo($prv_descuento_financiero->getId()) ?> - <?php Gral::_echo($prv_descuento_financiero->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prv_descuento_financiero_alta.php?id=<?php echo($prv_descuento_financiero->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvDescuentoFinanciero') ?>: <strong><?php Gral::_echo($prv_descuento_financiero->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeOcAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_agrupacion->getFiltrosArrXCampo('PrvDescuentoFinanciero', 'prv_descuento_financiero_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeOcAgrupacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_descuento_financiero->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

