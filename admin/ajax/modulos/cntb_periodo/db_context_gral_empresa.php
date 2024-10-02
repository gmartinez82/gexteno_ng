<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$cntb_periodo_id = Gral::getVars(2, 'cntb_periodo_id');
$cntb_periodo = CntbPeriodo::getOxId($cntb_periodo_id);
$gral_empresa = $cntb_periodo->getGralEmpresa();

?>
<div class="datos" id="<?php Gral::_echo($gral_empresa->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralEmpresa') ?>: 
        <strong><?php Gral::_echo($gral_empresa->getId()) ?> - <?php Gral::_echo($gral_empresa->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_empresa_alta.php?id=<?php echo($gral_empresa->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralEmpresa') ?>: <strong><?php Gral::_echo($gral_empresa->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo CntbPeriodo::getFiltrosArrGral() ?>&arr=<?php echo $cntb_periodo->getFiltrosArrXCampo('GralEmpresa', 'gral_empresa_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('CntbPeriodos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_empresa->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

