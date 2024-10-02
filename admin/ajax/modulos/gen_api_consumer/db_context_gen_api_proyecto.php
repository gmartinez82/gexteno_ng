<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gen_api_consumer_id = Gral::getVars(2, 'gen_api_consumer_id');
$gen_api_consumer = GenApiConsumer::getOxId($gen_api_consumer_id);
$gen_api_proyecto = $gen_api_consumer->getGenApiProyecto();

?>
<div class="datos" id="<?php Gral::_echo($gen_api_proyecto->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GenApiProyecto') ?>: 
        <strong><?php Gral::_echo($gen_api_proyecto->getId()) ?> - <?php Gral::_echo($gen_api_proyecto->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gen_api_proyecto_alta.php?id=<?php echo($gen_api_proyecto->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenApiProyecto') ?>: <strong><?php Gral::_echo($gen_api_proyecto->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GenApiConsumer::getFiltrosArrGral() ?>&arr=<?php echo $gen_api_consumer->getFiltrosArrXCampo('GenApiProyecto', 'gen_api_proyecto_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GenApiConsumers') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gen_api_proyecto->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

