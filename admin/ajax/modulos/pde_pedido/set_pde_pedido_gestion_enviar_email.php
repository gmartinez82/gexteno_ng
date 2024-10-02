<?php

include "_autoload.php";

$pde_pedido_id = Gral::getVars(Gral::VARS_GET, "pde_pedido_id", 0);
$txt_direccion_mails = Gral::getVars(Gral::VARS_GET, "txt_direccion_mail", '');
$txa_observacion = Gral::getVars(Gral::VARS_GET, "txa_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

foreach ($txt_direccion_mails as $i => $txt_direccion_mail) {
    if (Ctrl::esVacio($txt_direccion_mail)) {
        //$arr["txt_direccion_mail_".$i] = Lang::_lang("Debe indicar un email", true);
        //$arr["error"] = true;
    } else {
        $destinatarios = str_replace(' ', '', $txt_direccion_mail);
        $destinatarios = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);
        foreach($arr_destinatarios as $arr_destinatario){
            if (!Ctrl::esEmail($arr_destinatario)) {
                $arr["txt_direccion_mail_" . $i] = Lang::_lang("Email con formato erroneo", true);
                $arr["error"] = true;
            }            
        }
    }
}
if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if ($pde_pedido_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro Pedido", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $pde_pedido = PdePedido::getOxId($pde_pedido_id);

    if ($pde_pedido) {

        foreach ($txt_direccion_mails as $i => $txt_direccion_mail) {
            $prv_proveedor = PrvProveedor::getOxId($i);
            

            $enviar = true;
            //$enviar = false;

            $destinatarios = $txt_direccion_mail;

            if ($destinatarios != '') {
                $envio_ok = $pde_pedido->enviarPdePedidoEmail($enviar, $destinatarios, $txa_observacion, $prv_proveedor);
                
                if (!$envio_ok) {
                    $arr["envio_mail"] = Lang::_lang("Ocurrio un error durante el proceso de envio, puede que no todos los destinatarios hayan sido enviados", true);
                    $arr["error"] = true;
                }
            }

        }
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>