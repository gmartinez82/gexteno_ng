<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_presupuesto_id = Gral::getVars(2, 'vta_presupuesto_id');
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$gral_escenario = $vta_presupuesto->getGralEscenario();

?>
<div class="datos" id="<?php Gral::_echo($gral_escenario->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralEscenario') ?>: 
        <strong><?php Gral::_echo($gral_escenario->getId()) ?> - <?php Gral::_echo($gral_escenario->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_escenario_alta.php?id=<?php echo($gral_escenario->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralEscenario') ?>: <strong><?php Gral::_echo($gral_escenario->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaPresupuesto::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto->getFiltrosArrXCampo('GralEscenario', 'gral_escenario_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaPresupuestos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_escenario->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

