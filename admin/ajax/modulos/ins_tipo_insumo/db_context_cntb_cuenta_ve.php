<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_tipo_insumo_id = Gral::getVars(2, 'ins_tipo_insumo_id');
$ins_tipo_insumo = InsTipoInsumo::getOxId($ins_tipo_insumo_id);
$cntb_cuenta_ve = $ins_tipo_insumo->getCntbCuentaVe();

?>
<div class="datos" id="<?php Gral::_echo($cntb_cuenta_ve->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('CntbCuentaVe') ?>: 
        <strong><?php Gral::_echo($cntb_cuenta_ve->getId()) ?> - <?php Gral::_echo($cntb_cuenta_ve->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="cntb_cuenta_ve_alta.php?id=<?php echo($cntb_cuenta_ve->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbCuentaVe') ?>: <strong><?php Gral::_echo($cntb_cuenta_ve->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsTipoInsumo::getFiltrosArrGral() ?>&arr=<?php echo $ins_tipo_insumo->getFiltrosArrXCampo('CntbCuentaVe', 'cntb_cuenta_ve_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsTipoInsumos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($cntb_cuenta_ve->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

