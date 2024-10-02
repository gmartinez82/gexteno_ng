<?php 
require_once "base/BPdiPedidoDestinatario.php"; 
class PdiPedidoDestinatario extends BPdiPedidoDestinatario
{
    static function enviarEmailsPendientes(){
        $os_pendientes = self::getEnviosPendientes();
        foreach($os_pendientes as $o){
            //$o->envuar
        }
    }
}
?>