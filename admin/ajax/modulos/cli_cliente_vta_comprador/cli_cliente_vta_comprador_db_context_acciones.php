<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cli_cliente_vta_comprador = CliClienteVtaComprador::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cli_cliente_vta_comprador->getId()) ?>" modulo="cli_cliente_vta_comprador">

    <div class="titulo">
        <?php Lang::_lang('CliClienteVtaComprador') ?>: 
        <strong><?php Gral::_echo($cli_cliente_vta_comprador->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_VTA_COMPRADOR_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CliClienteVtaComprador') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

