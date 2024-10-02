<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_factura_id = Gral::getVars(2, 'pde_factura_id');
$pde_factura = PdeFactura::getOxId($pde_factura_id);
$gral_mes = $pde_factura->getGralMes();

?>
<div class="datos" id="<?php Gral::_echo($gral_mes->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralMes') ?>: 
        <strong><?php Gral::_echo($gral_mes->getId()) ?> - <?php Gral::_echo($gral_mes->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_mes_alta.php?id=<?php echo($gral_mes->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralMes') ?>: <strong><?php Gral::_echo($gral_mes->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeFactura::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura->getFiltrosArrXCampo('GralMes', 'gral_mes_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeFacturas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_mes->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

