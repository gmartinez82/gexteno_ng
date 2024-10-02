<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cli_cliente_tienda = CliClienteTienda::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cli_cliente_tienda->getId()) ?>" modulo="cli_cliente_tienda">

    <div class="titulo">
        <?php Lang::_lang('CliClienteTienda') ?>: 
        <strong><?php Gral::_echo($cli_cliente_tienda->getDescripcion()) ?></strong>
    </div>
    <?php if($cli_cliente_tienda->getCliClienteId() == 'null'): ?>
        <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_GESTION_ACCION_CONFIG_CREAR_CLIENTE')): ?>
            <div class="uno crear-cliente gen-modal-open" modulo_estado="" gen-modal-file="ajax/modulos/cli_cliente_tienda_gestion/modal_crear_cliente.php?identificador=<?php echo $id ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Crear Cliente" gen-modal-callback="setInit()">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Crear') ?> <?php Lang::_lang('Cliente') ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if($cli_cliente_tienda->getCliClienteId() == 'null'): ?>
        <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_GESTION_ACCION_CONFIG_VINCULAR_CLIENTE')): ?>
            <div class="uno vincular-cliente gen-modal-open" modulo_estado="" gen-modal-file="ajax/modulos/cli_cliente_tienda_gestion/modal_vincular_cliente.php?identificador=<?php echo $id ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Vincular Cliente" gen-modal-callback="setInit()">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Vincular') ?> <?php Lang::_lang('Cliente') ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if($cli_cliente_tienda->getCliClienteId() != 'null'): ?>
        <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_TIENDA_GESTION_ACCION_CONFIG_VERIFICAR_CLIENTE')): ?>
            <div class="uno verificar-cliente gen-modal-open" modulo_estado="" gen-modal-file="ajax/modulos/cli_cliente_tienda_gestion/modal_verificar_cliente.php?identificador=<?php echo $id ?>" gen-modal-content=".div_modal" gen-modal-width="80%" gen-modal-height="700" gen-modal-titulo="Verificar Cliente" gen-modal-callback="setInit()">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Verificar') ?> <?php Lang::_lang('Cliente') ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

