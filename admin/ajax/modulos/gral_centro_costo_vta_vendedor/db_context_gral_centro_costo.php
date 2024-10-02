<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_centro_costo_vta_vendedor_id = Gral::getVars(2, 'gral_centro_costo_vta_vendedor_id');
$gral_centro_costo_vta_vendedor = GralCentroCostoVtaVendedor::getOxId($gral_centro_costo_vta_vendedor_id);
$gral_centro_costo = $gral_centro_costo_vta_vendedor->getGralCentroCosto();

?>
<div class="datos" id="<?php Gral::_echo($gral_centro_costo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralCentroCosto') ?>: 
        <strong><?php Gral::_echo($gral_centro_costo->getId()) ?> - <?php Gral::_echo($gral_centro_costo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_centro_costo_alta.php?id=<?php echo($gral_centro_costo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCentroCosto') ?>: <strong><?php Gral::_echo($gral_centro_costo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralCentroCostoVtaVendedor::getFiltrosArrGral() ?>&arr=<?php echo $gral_centro_costo_vta_vendedor->getFiltrosArrXCampo('GralCentroCosto', 'gral_centro_costo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralCentroCostoVtaVendedors') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_centro_costo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

