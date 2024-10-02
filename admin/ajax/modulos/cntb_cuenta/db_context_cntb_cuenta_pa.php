<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cntb_cuenta_id = Gral::getVars(2, 'cntb_cuenta_id');
$cntb_cuenta = CntbCuenta::getOxId($cntb_cuenta_id);
$cntb_cuenta_pa = $cntb_cuenta->getCntbCuentaPa();

?>
<div class="datos" id="<?php Gral::_echo($cntb_cuenta_pa->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CntbCuentaPa') ?>: 
        <strong><?php Gral::_echo($cntb_cuenta_pa->getId()) ?> - <?php Gral::_echo($cntb_cuenta_pa->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cntb_cuenta_pa_alta.php?id=<?php echo($cntb_cuenta_pa->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbCuentaPa') ?>: <strong><?php Gral::_echo($cntb_cuenta_pa->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CntbCuenta::getFiltrosArrGral() ?>&arr=<?php echo $cntb_cuenta->getFiltrosArrXCampo('CntbCuentaPa', 'cntb_cuenta_pa_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CntbCuentas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cntb_cuenta_pa->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

