<?php
require_once "base/BCliClienteTiendaNavegacion.php";

class CliClienteTiendaNavegacion extends BCliClienteTiendaNavegacion {

    static function registrarNavegacion() {
        $archivo = array_pop(explode('/', $_SERVER['PHP_SELF']));
        $cli_cliente_tienda = CliClienteTiendaLogin::getCliClienteTiendaAutenticado();
        if ($cli_cliente_tienda) {
            $cli_cliente = $cli_cliente_tienda->getCliCliente();
        }

        $cli_ultima = CliClienteTiendaNavegacion::getOxSession(session_id());
        if ($cli_ultima) {
            if ($cli_ultima->getPagina() == $archivo)
                return; // no registra en permanencia       
        }

        $cli_cliente_tienda_navegacion = new CliClienteTiendaNavegacion();
        if ($cli_cliente_tienda) {
            $cli_cliente_tienda_navegacion->setCliClienteTiendaId($cli_cliente_tienda->getId());
        }
        if ($cli_cliente) {
            $cli_cliente_tienda_navegacion->setCliClienteId($cli_cliente->getId());
        }
        $cli_cliente_tienda_navegacion->setSession(session_id());
        $cli_cliente_tienda_navegacion->setNavegador($_SERVER['HTTP_USER_AGENT']);
        $cli_cliente_tienda_navegacion->setPagina($archivo);
        $cli_cliente_tienda_navegacion->setUrl('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
        $cli_cliente_tienda_navegacion->setUrlReferer($_SERVER['HTTP_REFERER']);
        $cli_cliente_tienda_navegacion->setIp($_SERVER['REMOTE_ADDR'] . ' - ' . $_SERVER['HTTP_X_FORWARDED_FOR']);
        $cli_cliente_tienda_navegacion->setObservacion('');
        $cli_cliente_tienda_navegacion->setEstado(1);
        $cli_cliente_tienda_navegacion->save();
    }
    
    static function getPaginasRelevantes(){
        $arr_paginas[] = 'index.php';
        $arr_paginas[] = 'productos.php';
        $arr_paginas[] = 'producto.php';
        $arr_paginas[] = 'catalogos.php';
        $arr_paginas[] = 'nosotros.php';
        $arr_paginas[] = 'contacto.php';
        
        return $arr_paginas;
    }
    
    static function getPaginasRelevantesParaANY(){
        $arr_paginas = self::getPaginasRelevantes();
        $arr_paginas_string = implode(', ', $arr_paginas);
        
        return $arr_paginas_string;
    }
    
    static function getPaginasCmb() {
        $sql = "SELECT 
                    pagina
                FROM cli_cliente_tienda_navegacion
                WHERE TRUE
                AND pagina = ANY('{".self::getPaginasRelevantesParaANY()."}')
                GROUP BY 1
                ORDER BY 1 ASC 
                ";

        //Gral::pr($sql);
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        $arr = array();
        while ($fila = pg_fetch_object($cons->getResultado())) {
            $cont++;
            $arr[$cont]['cod'] = $fila->pagina;
            $arr[$cont]['descripcion'] = $fila->pagina;
        }
        return $arr;
    }

}

?>