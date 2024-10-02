<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gen_widget_gen_widget_modulo_id = Gral::getVars(2, 'gen_widget_gen_widget_modulo_id');
$gen_widget_gen_widget_modulo = GenWidgetGenWidgetModulo::getOxId($gen_widget_gen_widget_modulo_id);
$gen_widget_modulo = $gen_widget_gen_widget_modulo->getGenWidgetModulo();

?>
<div class="datos" id="<?php Gral::_echo($gen_widget_modulo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GenWidgetModulo') ?>: 
        <strong><?php Gral::_echo($gen_widget_modulo->getId()) ?> - <?php Gral::_echo($gen_widget_modulo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gen_widget_modulo_alta.php?id=<?php echo($gen_widget_modulo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenWidgetModulo') ?>: <strong><?php Gral::_echo($gen_widget_modulo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GenWidgetGenWidgetModulo::getFiltrosArrGral() ?>&arr=<?php echo $gen_widget_gen_widget_modulo->getFiltrosArrXCampo('GenWidgetModulo', 'gen_widget_modulo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GenWidgetGenWidgetModulos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gen_widget_modulo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

