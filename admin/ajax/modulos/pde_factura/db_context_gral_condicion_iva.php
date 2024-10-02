<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_factura_id = Gral::getVars(2, 'pde_factura_id');
$pde_factura = PdeFactura::getOxId($pde_factura_id);
$gral_condicion_iva = $pde_factura->getGralCondicionIva();

?>
<div class="datos" id="<?php Gral::_echo($gral_condicion_iva->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralCondicionIva') ?>: 
        <strong><?php Gral::_echo($gral_condicion_iva->getId()) ?> - <?php Gral::_echo($gral_condicion_iva->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_condicion_iva_alta.php?id=<?php echo($gral_condicion_iva->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIva') ?>: <strong><?php Gral::_echo($gral_condicion_iva->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeFactura::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura->getFiltrosArrXCampo('GralCondicionIva', 'gral_condicion_iva_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeFacturas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_condicion_iva->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

