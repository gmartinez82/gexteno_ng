<?php 
require_once "base/BTndTiendaBusqueda.php"; 
class TndTiendaBusqueda extends BTndTiendaBusqueda
{
    static function setRegistrarBusqueda($cli_cliente_tienda, $cli_cliente, $buscar){
        if(trim($buscar) != ''){
            // ---------------------------------------------------------------------
            // se registra la palabra buscada
            // ---------------------------------------------------------------------
            $tnd_tienda_busqueda = new TndTiendaBusqueda();
            if($cli_cliente_tienda){
                $tnd_tienda_busqueda->setCliClienteTiendaId($cli_cliente_tienda->getId());
            }
            if($cli_cliente){
                $tnd_tienda_busqueda->setCliClienteId($cli_cliente->getId());
            }
            $tnd_tienda_busqueda->setSession(session_id());
            $tnd_tienda_busqueda->setIp($_SERVER['REMOTE_ADDR'] . ' - ' . $_SERVER['HTTP_X_FORWARDED_FOR']);
            $tnd_tienda_busqueda->setFecha(date('Y-m-d'));
            $tnd_tienda_busqueda->setDescripcion($buscar);
            $tnd_tienda_busqueda->setEstado(1);
            $tnd_tienda_busqueda->save();   

            return $tnd_tienda_busqueda;
        }
        return false;
    }
    
    public function setRegistrarResultadosDeBusqueda($ins_insumos_buscador){
        $cantidad = count($ins_insumos_buscador);
        
        $this->setCantidadPropuestos($cantidad);
        $this->setEstado(1);
        $this->save();
    }
}
?>