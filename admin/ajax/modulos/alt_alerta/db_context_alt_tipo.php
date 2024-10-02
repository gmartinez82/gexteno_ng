<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$alt_alerta_id = Gral::getVars(2, 'alt_alerta_id');
$alt_alerta = AltAlerta::getOxId($alt_alerta_id);
$alt_tipo = $alt_alerta->getAltTipo();

?>
<div class="datos" id="<?php Gral::_echo($alt_tipo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('AltTipo') ?>: 
        <strong><?php Gral::_echo($alt_tipo->getId()) ?> - <?php Gral::_echo($alt_tipo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="alt_tipo_alta.php?id=<?php echo($alt_tipo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('AltTipo') ?>: <strong><?php Gral::_echo($alt_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo AltAlerta::getFiltrosArrGral() ?>&arr=<?php echo $alt_alerta->getFiltrosArrXCampo('AltTipo', 'alt_tipo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('AltAlertas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($alt_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

