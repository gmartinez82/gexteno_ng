<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cntb_diario_asiento_cuenta_id = Gral::getVars(2, 'cntb_diario_asiento_cuenta_id');
$cntb_diario_asiento_cuenta = CntbDiarioAsientoCuenta::getOxId($cntb_diario_asiento_cuenta_id);
$cntb_diario_asiento = $cntb_diario_asiento_cuenta->getCntbDiarioAsiento();

?>
<div class="datos" id="<?php Gral::_echo($cntb_diario_asiento->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CntbDiarioAsiento') ?>: 
        <strong><?php Gral::_echo($cntb_diario_asiento->getId()) ?> - <?php Gral::_echo($cntb_diario_asiento->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cntb_diario_asiento_alta.php?id=<?php echo($cntb_diario_asiento->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsiento') ?>: <strong><?php Gral::_echo($cntb_diario_asiento->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoCuenta::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_cuenta->getFiltrosArrXCampo('CntbDiarioAsiento', 'cntb_diario_asiento_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CntbDiarioAsientoCuentas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cntb_diario_asiento->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

