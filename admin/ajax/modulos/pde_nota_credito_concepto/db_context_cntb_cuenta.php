<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_nota_credito_concepto_id = Gral::getVars(2, 'pde_nota_credito_concepto_id');
$pde_nota_credito_concepto = PdeNotaCreditoConcepto::getOxId($pde_nota_credito_concepto_id);
$cntb_cuenta = $pde_nota_credito_concepto->getCntbCuenta();

?>
<div class="datos" id="<?php Gral::_echo($cntb_cuenta->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CntbCuenta') ?>: 
        <strong><?php Gral::_echo($cntb_cuenta->getId()) ?> - <?php Gral::_echo($cntb_cuenta->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cntb_cuenta_alta.php?id=<?php echo($cntb_cuenta->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbCuenta') ?>: <strong><?php Gral::_echo($cntb_cuenta->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoConcepto::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_concepto->getFiltrosArrXCampo('CntbCuenta', 'cntb_cuenta_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeNotaCreditoConceptos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cntb_cuenta->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

