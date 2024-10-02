<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_vendedor_descuento_id = Gral::getVars(2, 'vta_vendedor_descuento_id');
$vta_vendedor_descuento = VtaVendedorDescuento::getOxId($vta_vendedor_descuento_id);
$ins_etiqueta = $vta_vendedor_descuento->getInsEtiqueta();

?>
<div class="datos" id="<?php Gral::_echo($ins_etiqueta->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsEtiqueta') ?>: 
        <strong><?php Gral::_echo($ins_etiqueta->getId()) ?> - <?php Gral::_echo($ins_etiqueta->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_etiqueta_alta.php?id=<?php echo($ins_etiqueta->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsEtiqueta') ?>: <strong><?php Gral::_echo($ins_etiqueta->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaVendedorDescuento::getFiltrosArrGral() ?>&arr=<?php echo $vta_vendedor_descuento->getFiltrosArrXCampo('InsEtiqueta', 'ins_etiqueta_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaVendedorDescuentos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_etiqueta->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

