<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cntb_tipo_cuenta_id = Gral::getVars(2, 'cntb_tipo_cuenta_id');
$cntb_tipo_cuenta = CntbTipoCuenta::getOxId($cntb_tipo_cuenta_id);
$cntb_tipo_saldo = $cntb_tipo_cuenta->getCntbTipoSaldo();

?>
<div class="datos" id="<?php Gral::_echo($cntb_tipo_saldo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CntbTipoSaldo') ?>: 
        <strong><?php Gral::_echo($cntb_tipo_saldo->getId()) ?> - <?php Gral::_echo($cntb_tipo_saldo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cntb_tipo_saldo_alta.php?id=<?php echo($cntb_tipo_saldo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbTipoSaldo') ?>: <strong><?php Gral::_echo($cntb_tipo_saldo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CntbTipoCuenta::getFiltrosArrGral() ?>&arr=<?php echo $cntb_tipo_cuenta->getFiltrosArrXCampo('CntbTipoSaldo', 'cntb_tipo_saldo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CntbTipoCuentas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cntb_tipo_saldo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

