<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cntb_diario_asiento_pde_factura_id = Gral::getVars(2, 'cntb_diario_asiento_pde_factura_id');
$cntb_diario_asiento_pde_factura = CntbDiarioAsientoPdeFactura::getOxId($cntb_diario_asiento_pde_factura_id);
$pde_factura = $cntb_diario_asiento_pde_factura->getPdeFactura();

?>
<div class="datos" id="<?php Gral::_echo($pde_factura->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeFactura') ?>: 
        <strong><?php Gral::_echo($pde_factura->getId()) ?> - <?php Gral::_echo($pde_factura->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_factura_alta.php?id=<?php echo($pde_factura->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFactura') ?>: <strong><?php Gral::_echo($pde_factura->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoPdeFactura::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_pde_factura->getFiltrosArrXCampo('PdeFactura', 'pde_factura_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CntbDiarioAsientoPdeFacturas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_factura->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

