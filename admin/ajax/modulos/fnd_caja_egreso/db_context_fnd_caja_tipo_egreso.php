<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$fnd_caja_egreso_id = Gral::getVars(2, 'fnd_caja_egreso_id');
$fnd_caja_egreso = FndCajaEgreso::getOxId($fnd_caja_egreso_id);
$fnd_caja_tipo_egreso = $fnd_caja_egreso->getFndCajaTipoEgreso();

?>
<div class="datos" id="<?php Gral::_echo($fnd_caja_tipo_egreso->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('FndCajaTipoEgreso') ?>: 
        <strong><?php Gral::_echo($fnd_caja_tipo_egreso->getId()) ?> - <?php Gral::_echo($fnd_caja_tipo_egreso->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="fnd_caja_tipo_egreso_alta.php?id=<?php echo($fnd_caja_tipo_egreso->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaTipoEgreso') ?>: <strong><?php Gral::_echo($fnd_caja_tipo_egreso->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo FndCajaEgreso::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_egreso->getFiltrosArrXCampo('FndCajaTipoEgreso', 'fnd_caja_tipo_egreso_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('FndCajaEgresos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($fnd_caja_tipo_egreso->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

