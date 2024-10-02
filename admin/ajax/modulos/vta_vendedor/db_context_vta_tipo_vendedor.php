<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_vendedor_id = Gral::getVars(2, 'vta_vendedor_id');
$vta_vendedor = VtaVendedor::getOxId($vta_vendedor_id);
$vta_tipo_vendedor = $vta_vendedor->getVtaTipoVendedor();

?>
<div class="datos" id="<?php Gral::_echo($vta_tipo_vendedor->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaTipoVendedor') ?>: 
        <strong><?php Gral::_echo($vta_tipo_vendedor->getId()) ?> - <?php Gral::_echo($vta_tipo_vendedor->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_tipo_vendedor_alta.php?id=<?php echo($vta_tipo_vendedor->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTipoVendedor') ?>: <strong><?php Gral::_echo($vta_tipo_vendedor->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaVendedor::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor->getFiltrosArrXCampo('VtaTipoVendedor', 'vta_tipo_vendedor_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaVendedors') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_tipo_vendedor->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

