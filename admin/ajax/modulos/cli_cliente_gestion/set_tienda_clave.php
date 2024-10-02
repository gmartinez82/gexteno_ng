<?php

include "_autoload.php";

// ------------------------------------------------------------------
// el ID se recibe por GET
// ------------------------------------------------------------------
$cli_cliente_id = Gral::getVars(Gral::VARS_GET, "cli_cliente_id", 0);
$cli_centro_pedido_id = Gral::getVars(Gral::VARS_GET, 'cli_centro_pedido_id', 0);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$txt_telefono_whatsapp = Gral::getVars(Gral::VARS_POST, "txt_telefono_whatsapp", '', Gral::TIPO_STRING);
$cmb_cli_categoria_id = Gral::getVars(Gral::VARS_POST, "cmb_cli_categoria_id", 0, Gral::TIPO_INTEGER);
$txt_email = Gral::getVars(Gral::VARS_POST, "txt_email", '', Gral::TIPO_STRING);
$txt_password = Gral::getVars(Gral::VARS_POST, "txt_password", '', Gral::TIPO_STRING);
$cmb_enviar_email = Gral::getVars(Gral::VARS_POST, "cmb_enviar_email", -1, Gral::TIPO_INTEGER);

$cli_cliente = CliCliente::getOxId($cli_cliente_id);
$cli_centro_pedido = CliCentroPedido::getOxId($cli_centro_pedido_id);

$cli_cliente_tienda = $cli_centro_pedido->getCliClienteTienda();

// ------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------
$arr["error"] = false;

if ($cmb_cli_categoria_id == 0) {
    $arr["cmb_cli_categoria_id"] = Lang::_lang("Debe indicar una categoria", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txt_telefono_whatsapp)) {
    $arr["txt_telefono_whatsapp"] = Lang::_lang("Debe indicar una nro de whatsapp", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txt_email)) {
    $arr["txt_email"] = Lang::_lang("Debe indicar una correo electronico", true);
    $arr["error"] = true;
}elseif(!Ctrl::esEmail($txt_email)){
    $arr["txt_email"] = Lang::_lang("Formato invalido de email para crear la cuenta de la tienda", true);
    $arr["error"] = true;    
}else{
    $cli_cliente_tienda_existente = CliClienteTienda::getOxEmail($txt_email);
    if($cli_cliente_tienda && $cli_cliente_tienda_existente){
        if($cli_cliente_tienda && $cli_cliente_tienda->getId() != $cli_cliente_tienda_existente->getId()){
            $arr["txt_email"] = Lang::_lang("Ya existe un cliente tienda con el email indicado, no puede utilizarse el mismo email para 2 clientes tienda distintos", true);
            $arr["txt_email"].= '<br />';
            $arr["txt_email"].= $cli_cliente_tienda_existente->getCodigo().' - '.$cli_cliente_tienda_existente->getDescripcion();
            $arr["error"] = true;            
        }
    }else{
        if($cli_cliente_tienda_existente){
            $arr["txt_email"] = Lang::_lang("Ya existe un cliente tienda con el email indicado, no puede utilizarse el mismo email para 2 clientes tienda distintos", true);
            $arr["txt_email"].= '<br />';
            $arr["txt_email"].= $cli_cliente_tienda_existente->getCodigo().' - '.$cli_cliente_tienda_existente->getDescripcion();
            $arr["error"] = true;            
        }        
    }
}

if (Ctrl::esVacio($txt_password)) {
    $arr["txt_password"] = Lang::_lang("Debe indicar una clave de acceso", true);
    $arr["error"] = true;
}

if ($cmb_enviar_email == -1) {
    $arr["cmb_enviar_email"] = Lang::_lang("Debe indicar una opcion", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    
    // ----------------------------------------------------------------------
    // se agregan datos de contacto al cliente
    // ----------------------------------------------------------------------
    $cli_cliente->setCliCategoriaId($cmb_cli_categoria_id);
    if($cli_cliente->getTelefonoWhatsapp() == ''){
        $cli_cliente->setTelefonoWhatsapp($txt_telefono_whatsapp);
    }
    if($cli_cliente->getEmail() == ''){
        $cli_cliente->setEmail($txt_email);
    }
    $cli_cliente->save();

    // ----------------------------------------------------------------------
    // se agregan datos de contacto al centro de pedido
    // ----------------------------------------------------------------------
    $cli_centro_pedido->setTelefono($txt_telefono_whatsapp);
    if($cli_centro_pedido->getTelefono() == ''){
        $cli_centro_pedido->setTelefono($txt_telefono_whatsapp);
    }
    if($cli_centro_pedido->getEmail() == ''){
        $cli_centro_pedido->setEmail($txt_email);
    }
    $cli_centro_pedido->save();
    
    if ($cli_cliente_tienda) {
        // ----------------------------------------------------------------------
        // si existe cliente tienda, solo regenera la clave
        // ----------------------------------------------------------------------
        $cli_cliente_tienda->setNuevaClave($txt_password);
        
        $cli_cliente_tienda->setEmail($txt_email);
        $cli_cliente_tienda->save();
    } else {
        // ----------------------------------------------------------------------
        // si no existe cliente tienda, crea uno y genera la clave
        // ----------------------------------------------------------------------
        $cli_cliente_tienda = $cli_cliente->setInicializarCliClienteTienda($cli_centro_pedido, $txt_password);
        
        $cli_cliente_tienda->setEmail($txt_email);
        $cli_cliente_tienda->save();
    }
    
    if($cli_cliente_tienda && $cmb_enviar_email){
        // ----------------------------------------------------------------------
        // se envia notificacion al cliente con los datos de acceso a la tienda
        // ----------------------------------------------------------------------
        $cli_cliente_tienda->enviarCorreoCreacionCuentaACliente($enviar = true, $txt_password);
    }
}

// ------------------------------------------------------------------
// se retornan datos
// ------------------------------------------------------------------
$arr_json = json_encode($arr);
echo $arr_json;
?>
