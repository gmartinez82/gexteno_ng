<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cli_cliente = CliCliente::getOxId($id);

$cli_cliente_tipo_estado = $cli_cliente->getCliClienteTipoEstado();

$cli_cliente_tipo_estado_venta = $cli_cliente->getCliClienteTipoEstadoVenta();

$cli_cliente_tipo_estado_cobro = $cli_cliente->getCliClienteTipoEstadoCobro();

$cli_cliente_tipo_estado_cuenta = $cli_cliente->getCliClienteTipoEstadoCuenta();

$cli_cliente_tipo_estado_satisfaccion = $cli_cliente->getCliClienteTipoEstadoSatisfaccion();

?>
<div class="datos" identificador="<?php Gral::_echo($cli_cliente->getId()) ?>" modulo="cli_cliente">

    <div class="titulo">
        <?php Lang::_lang('CliCliente') ?>: 
        <strong><?php Gral::_echo($cli_cliente->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CliCliente') ?>
        </div>
    <?php endif; ?>

    <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_ADM_ACCION_CONFIG_CAMBIAR_CLI_CLIENTE_ESTADO')): ?>
        <div class="uno cambiar-estado" modulo_estado="cli_cliente_estado">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Cambiar') ?> <?php Lang::_lang('CliClienteEstado') ?>
        </div>
    <?php endif; ?>
    
    <?php 
    // -------------------------------------------------------------------------
    // acciones personalizadas
    // -------------------------------------------------------------------------    
    if(file_exists("cli_cliente_db_context_acciones_custom.php")){
        include "cli_cliente_db_context_acciones_custom.php";
    } 
    ?>

    <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_ADM_ACCION_CONFIG_CAMBIAR_CLI_CLIENTE_ESTADO_VENTA')): ?>
        <div class="uno cambiar-estado" modulo_estado="cli_cliente_estado_venta">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Cambiar') ?> <?php Lang::_lang('CliClienteEstadoVenta') ?>
        </div>
    <?php endif; ?>
    
    <?php 
    // -------------------------------------------------------------------------
    // acciones personalizadas
    // -------------------------------------------------------------------------    
    if(file_exists("cli_cliente_db_context_acciones_custom.php")){
        include "cli_cliente_db_context_acciones_custom.php";
    } 
    ?>

    <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_ADM_ACCION_CONFIG_CAMBIAR_CLI_CLIENTE_ESTADO_COBRO')): ?>
        <div class="uno cambiar-estado" modulo_estado="cli_cliente_estado_cobro">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Cambiar') ?> <?php Lang::_lang('CliClienteEstadoCobro') ?>
        </div>
    <?php endif; ?>
    
    <?php 
    // -------------------------------------------------------------------------
    // acciones personalizadas
    // -------------------------------------------------------------------------    
    if(file_exists("cli_cliente_db_context_acciones_custom.php")){
        include "cli_cliente_db_context_acciones_custom.php";
    } 
    ?>

    <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_ADM_ACCION_CONFIG_CAMBIAR_CLI_CLIENTE_ESTADO_CUENTA')): ?>
        <div class="uno cambiar-estado" modulo_estado="cli_cliente_estado_cuenta">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Cambiar') ?> <?php Lang::_lang('CliClienteEstadoCuenta') ?>
        </div>
    <?php endif; ?>
    
    <?php 
    // -------------------------------------------------------------------------
    // acciones personalizadas
    // -------------------------------------------------------------------------    
    if(file_exists("cli_cliente_db_context_acciones_custom.php")){
        include "cli_cliente_db_context_acciones_custom.php";
    } 
    ?>

    <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_ADM_ACCION_CONFIG_CAMBIAR_CLI_CLIENTE_ESTADO_SATISFACCION')): ?>
        <div class="uno cambiar-estado" modulo_estado="cli_cliente_estado_satisfaccion">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Cambiar') ?> <?php Lang::_lang('CliClienteEstadoSatisfaccion') ?>
        </div>
    <?php endif; ?>
    
    <?php 
    // -------------------------------------------------------------------------
    // acciones personalizadas
    // -------------------------------------------------------------------------    
    if(file_exists("cli_cliente_db_context_acciones_custom.php")){
        include "cli_cliente_db_context_acciones_custom.php";
    } 
    ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

