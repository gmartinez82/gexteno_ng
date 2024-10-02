<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cli_cliente_info_sifen = CliClienteInfoSifen::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cli_cliente_info_sifen->getId()) ?>" modulo="cli_cliente_info_sifen">

    <div class="titulo">
        <?php Lang::_lang('CliClienteInfoSifen') ?>: 
        <strong><?php Gral::_echo($cli_cliente_info_sifen->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_INFO_SIFEN_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CliClienteInfoSifen') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

