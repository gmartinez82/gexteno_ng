<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cli_cliente = CliCliente::getOxId($id);
$cli_centro_pedidos = $cli_cliente->getCliCentroPedidos();
?>
<div class="datos" identificador="<?php Gral::_echo($cli_cliente->getId()) ?>" modulo="cli_cliente">

    <div class="titulo">
        <?php Lang::_lang('CliCliente') ?>: 
        <strong><?php Gral::_echo($cli_cliente->getDescripcion()) ?></strong><br />
        <?php Lang::_lang('CUIT/DNI') ?>: 
        <strong><?php Gral::_echo($cli_cliente->getCuit()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CLI_CLIENTE_GESTION_ACCION_CONFIG_TIENDA_CLAVE')): ?>
        <?php foreach($cli_centro_pedidos as $cli_centro_pedido){ ?>
            <div class="uno regenerar-clave-tienda gen-modal-open" gen-modal-file="ajax/modulos/cli_cliente_gestion/modal_tienda_clave.php?cli_cliente_id=<?php echo $id ?>&cli_centro_pedido_id=<?php echo $cli_centro_pedido->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="600" gen-modal-titulo="Asignar Clave de Acceso a Tienda" gen-modal-callback="setInitCliClienteGestion()">
                <img class="icono" src="imgs/btn_web.png" width="20" align="absmiddle" title="" />
                Acceso para <strong><?php Gral::_echo($cli_centro_pedido->getDescripcion()) ?></strong>
            </div>
        <?php } ?>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

