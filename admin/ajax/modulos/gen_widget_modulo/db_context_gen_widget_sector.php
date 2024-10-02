<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gen_widget_modulo_id = Gral::getVars(2, 'gen_widget_modulo_id');
$gen_widget_modulo = GenWidgetModulo::getOxId($gen_widget_modulo_id);
$gen_widget_sector = $gen_widget_modulo->getGenWidgetSector();

?>
<div class="datos" id="<?php Gral::_echo($gen_widget_sector->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GenWidgetSector') ?>: 
        <strong><?php Gral::_echo($gen_widget_sector->getId()) ?> - <?php Gral::_echo($gen_widget_sector->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gen_widget_sector_alta.php?id=<?php echo($gen_widget_sector->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenWidgetSector') ?>: <strong><?php Gral::_echo($gen_widget_sector->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GenWidgetModulo::getFiltrosArrGral() ?>&arr=<?php echo $gen_widget_modulo->getFiltrosArrXCampo('GenWidgetSector', 'gen_widget_sector_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GenWidgetModulos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gen_widget_sector->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

