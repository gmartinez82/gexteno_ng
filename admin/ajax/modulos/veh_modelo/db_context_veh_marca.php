<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$veh_modelo_id = Gral::getVars(2, 'veh_modelo_id');
$veh_modelo = VehModelo::getOxId($veh_modelo_id);
$veh_marca = $veh_modelo->getVehMarca();

?>
<div class="datos" id="<?php Gral::_echo($veh_marca->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VehMarca') ?>: 
        <strong><?php Gral::_echo($veh_marca->getId()) ?> - <?php Gral::_echo($veh_marca->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="veh_marca_alta.php?id=<?php echo($veh_marca->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VehMarca') ?>: <strong><?php Gral::_echo($veh_marca->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VehModelo::getFiltrosArrGral() ?>&arr=<?php echo $veh_modelo->getFiltrosArrXCampo('VehMarca', 'veh_marca_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VehModelos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($veh_marca->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

