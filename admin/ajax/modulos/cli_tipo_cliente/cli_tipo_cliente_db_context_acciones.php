<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cli_tipo_cliente = CliTipoCliente::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cli_tipo_cliente->getId()) ?>" modulo="cli_tipo_cliente">

    <div class="titulo">
        <?php Lang::_lang('CliTipoCliente') ?>: 
        <strong><?php Gral::_echo($cli_tipo_cliente->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CLI_TIPO_CLIENTE_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CliTipoCliente') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

