<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$fnd_caja_ingreso_id = Gral::getVars(2, 'fnd_caja_ingreso_id');
$fnd_caja_ingreso = FndCajaIngreso::getOxId($fnd_caja_ingreso_id);
$fnd_caja_tipo_ingreso = $fnd_caja_ingreso->getFndCajaTipoIngreso();

?>
<div class="datos" id="<?php Gral::_echo($fnd_caja_tipo_ingreso->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('FndCajaTipoIngreso') ?>: 
        <strong><?php Gral::_echo($fnd_caja_tipo_ingreso->getId()) ?> - <?php Gral::_echo($fnd_caja_tipo_ingreso->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="fnd_caja_tipo_ingreso_alta.php?id=<?php echo($fnd_caja_tipo_ingreso->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaTipoIngreso') ?>: <strong><?php Gral::_echo($fnd_caja_tipo_ingreso->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo FndCajaIngreso::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_ingreso->getFiltrosArrXCampo('FndCajaTipoIngreso', 'fnd_caja_tipo_ingreso_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('FndCajaIngresos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($fnd_caja_tipo_ingreso->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

