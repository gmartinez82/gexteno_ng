<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cntb_cuenta_id = Gral::getVars(2, 'cntb_cuenta_id');
$cntb_cuenta = CntbCuenta::getOxId($cntb_cuenta_id);
$cntb_tipo_cuenta = $cntb_cuenta->getCntbTipoCuenta();

?>
<div class="datos" id="<?php Gral::_echo($cntb_tipo_cuenta->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CntbTipoCuenta') ?>: 
        <strong><?php Gral::_echo($cntb_tipo_cuenta->getId()) ?> - <?php Gral::_echo($cntb_tipo_cuenta->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cntb_tipo_cuenta_alta.php?id=<?php echo($cntb_tipo_cuenta->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbTipoCuenta') ?>: <strong><?php Gral::_echo($cntb_tipo_cuenta->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CntbCuenta::getFiltrosArrGral() ?>&arr=<?php echo $cntb_cuenta->getFiltrosArrXCampo('CntbTipoCuenta', 'cntb_tipo_cuenta_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CntbCuentas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cntb_tipo_cuenta->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

