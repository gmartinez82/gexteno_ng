<?php
include "_autoload.php";

$cli_cliente_tienda_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0, Gral::TIPO_INTEGER);

$cli_cliente_tienda = CliClienteTienda::getOxId($cli_cliente_tienda_id);

if($cli_cliente_tienda)
{
    $cli_cliente = CliCliente::getOxId($cli_cliente_tienda->getCliClienteId());
    $cli_cliente_id = $cli_cliente->getId();
}

$arr_campos = $cli_cliente_tienda->getArrayParaVerificarCliente();
$hay_diferencias_en_clientes = $cli_cliente_tienda->getHayDiferenciasEnClientes();
?>

<form id='form_verificar_cliente' name='form_verificar_cliente' method='post' action='' >
    <div class="datos verificar-cliente" >                
        
        <div id="error_general_error" class="label-error"></div>
        
        <?php include 'bloque_cli_cliente_gestion_verificar_datos.php'; ?>

    </div>
</form>
<script>
    setInit();
    setInitCliClienteTiendaGestion();
</script>