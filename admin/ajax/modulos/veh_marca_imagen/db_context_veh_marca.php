<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$veh_marca_imagen_id = Gral::getVars(2, 'veh_marca_imagen_id');
$veh_marca_imagen = VehMarcaImagen::getOxId($veh_marca_imagen_id);
$veh_marca = $veh_marca_imagen->getVehMarca();

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
        <a href="_init.php?arr_gral=<?php echo VehMarcaImagen::getFiltrosArrGral() ?>&arr=<?php echo $veh_marca_imagen->getFiltrosArrXCampo('VehMarca', 'veh_marca_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VehMarcaImagens') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($veh_marca->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

