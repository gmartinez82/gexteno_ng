<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$veh_coche_id = Gral::getVars(2, 'veh_coche_id');
$veh_coche = VehCoche::getOxId($veh_coche_id);
$veh_modelo = $veh_coche->getVehModelo();

?>
<div class="datos" id="<?php Gral::_echo($veh_modelo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VehModelo') ?>: 
        <strong><?php Gral::_echo($veh_modelo->getId()) ?> - <?php Gral::_echo($veh_modelo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="veh_modelo_alta.php?id=<?php echo($veh_modelo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VehModelo') ?>: <strong><?php Gral::_echo($veh_modelo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VehCoche::getFiltrosArrGral() ?>&arr=<?php echo $veh_coche->getFiltrosArrXCampo('VehModelo', 'veh_modelo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VehCoches') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($veh_modelo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

