<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gen_api_token_id = Gral::getVars(2, 'gen_api_token_id');
$gen_api_token = GenApiToken::getOxId($gen_api_token_id);
$gen_api_consumer = $gen_api_token->getGenApiConsumer();

?>
<div class="datos" id="<?php Gral::_echo($gen_api_consumer->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GenApiConsumer') ?>: 
        <strong><?php Gral::_echo($gen_api_consumer->getId()) ?> - <?php Gral::_echo($gen_api_consumer->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gen_api_consumer_alta.php?id=<?php echo($gen_api_consumer->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenApiConsumer') ?>: <strong><?php Gral::_echo($gen_api_consumer->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GenApiToken::getFiltrosArrGral() ?>&arr=<?php echo $gen_api_token->getFiltrosArrXCampo('GenApiConsumer', 'gen_api_consumer_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GenApiTokens') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gen_api_consumer->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

