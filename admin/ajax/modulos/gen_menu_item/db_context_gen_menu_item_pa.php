<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gen_menu_item_id = Gral::getVars(2, 'gen_menu_item_id');
$gen_menu_item = GenMenuItem::getOxId($gen_menu_item_id);
$gen_menu_item_pa = $gen_menu_item->getGenMenuItemPa();

?>
<div class="datos" id="<?php Gral::_echo($gen_menu_item_pa->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GenMenuItemPa') ?>: 
        <strong><?php Gral::_echo($gen_menu_item_pa->getId()) ?> - <?php Gral::_echo($gen_menu_item_pa->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gen_menu_item_pa_alta.php?id=<?php echo($gen_menu_item_pa->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenMenuItemPa') ?>: <strong><?php Gral::_echo($gen_menu_item_pa->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GenMenuItem::getFiltrosArrGral() ?>&arr=<?php echo $gen_menu_item->getFiltrosArrXCampo('GenMenuItemPa', 'gen_menu_item_pa_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GenMenuItems') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gen_menu_item_pa->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

