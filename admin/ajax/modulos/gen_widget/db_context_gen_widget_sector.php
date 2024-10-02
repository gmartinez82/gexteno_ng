<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gen_widget_id = Gral::getVars(2, 'gen_widget_id');
$gen_widget = GenWidget::getOxId($gen_widget_id);
$gen_widget_sector = $gen_widget->getGenWidgetSector();

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
        <a href="_init.php?arr_gral=<?php echo GenWidget::getFiltrosArrGral() ?>&arr=<?php echo $gen_widget->getFiltrosArrXCampo('GenWidgetSector', 'gen_widget_sector_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GenWidgets') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gen_widget_sector->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

