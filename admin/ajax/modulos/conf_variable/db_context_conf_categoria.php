<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$conf_variable_id = Gral::getVars(2, 'conf_variable_id');
$conf_variable = ConfVariable::getOxId($conf_variable_id);
$conf_categoria = $conf_variable->getConfCategoria();

?>
<div class="datos" id="<?php Gral::_echo($conf_categoria->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('ConfCategoria') ?>: 
        <strong><?php Gral::_echo($conf_categoria->getId()) ?> - <?php Gral::_echo($conf_categoria->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="conf_categoria_alta.php?id=<?php echo($conf_categoria->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('ConfCategoria') ?>: <strong><?php Gral::_echo($conf_categoria->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo ConfVariable::getFiltrosArrGral() ?>&arr=<?php echo $conf_variable->getFiltrosArrXCampo('ConfCategoria', 'conf_categoria_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('ConfVariables') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($conf_categoria->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

