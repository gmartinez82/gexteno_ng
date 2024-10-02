<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$alt_alerta_id = Gral::getVars(2, 'alt_alerta_id');
$alt_alerta = AltAlerta::getOxId($alt_alerta_id);
$alt_origen = $alt_alerta->getAltOrigen();

?>
<div class="datos" id="<?php Gral::_echo($alt_origen->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('AltOrigen') ?>: 
        <strong><?php Gral::_echo($alt_origen->getId()) ?> - <?php Gral::_echo($alt_origen->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="alt_origen_alta.php?id=<?php echo($alt_origen->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('AltOrigen') ?>: <strong><?php Gral::_echo($alt_origen->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo AltAlerta::getFiltrosArrGral() ?>&arr=<?php echo $alt_alerta->getFiltrosArrXCampo('AltOrigen', 'alt_origen_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('AltAlertas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($alt_origen->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

