<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gen_api_consumer = GenApiConsumer::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gen_api_consumer->getId()) ?>" modulo="gen_api_consumer">

    <div class="titulo">
        <?php Lang::_lang('GenApiConsumer') ?>: 
        <strong><?php Gral::_echo($gen_api_consumer->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GEN_API_CONSUMER_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GenApiConsumer') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

