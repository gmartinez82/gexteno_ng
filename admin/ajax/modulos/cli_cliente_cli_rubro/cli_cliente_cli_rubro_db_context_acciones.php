<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cli_cliente_cli_rubro = CliClienteCliRubro::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cli_cliente_cli_rubro->getId()) ?>" modulo="cli_cliente_cli_rubro">

    <div class="titulo">
        <?php Lang::_lang('CliClienteCliRubro') ?>: 
        <strong><?php Gral::_echo($cli_cliente_cli_rubro->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_CLI_RUBRO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CliClienteCliRubro') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

