<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_fp_forma_pago_id = Gral::getVars(2, 'gral_fp_forma_pago_id');
$gral_fp_forma_pago = GralFpFormaPago::getOxId($gral_fp_forma_pago_id);
$cntb_cuenta_com = $gral_fp_forma_pago->getCntbCuentaCom();

?>
<div class="datos" id="<?php Gral::_echo($cntb_cuenta_com->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CntbCuentaCom') ?>: 
        <strong><?php Gral::_echo($cntb_cuenta_com->getId()) ?> - <?php Gral::_echo($cntb_cuenta_com->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cntb_cuenta_com_alta.php?id=<?php echo($cntb_cuenta_com->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbCuentaCom') ?>: <strong><?php Gral::_echo($cntb_cuenta_com->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralFpFormaPago::getFiltrosArrGral() ?>&arr=<?php echo $gral_fp_forma_pago->getFiltrosArrXCampo('CntbCuentaCom', 'cntb_cuenta_com_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralFpFormaPagos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cntb_cuenta_com->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

