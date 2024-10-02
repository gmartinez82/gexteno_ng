<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_factura_pde_recibo_id = Gral::getVars(2, 'pde_factura_pde_recibo_id');
$pde_factura_pde_recibo = PdeFacturaPdeRecibo::getOxId($pde_factura_pde_recibo_id);
$pde_recibo = $pde_factura_pde_recibo->getPdeRecibo();

?>
<div class="datos" id="<?php Gral::_echo($pde_recibo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeRecibo') ?>: 
        <strong><?php Gral::_echo($pde_recibo->getId()) ?> - <?php Gral::_echo($pde_recibo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_recibo_alta.php?id=<?php echo($pde_recibo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecibo') ?>: <strong><?php Gral::_echo($pde_recibo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_recibo->getFiltrosArrXCampo('PdeRecibo', 'pde_recibo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeFacturaPdeRecibos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_recibo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

