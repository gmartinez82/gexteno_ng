<?php

require_once "base/BUsGrupo.php";

class UsGrupo extends BUsGrupo {
    
    const GRUPO_USUARIOS_BASE = 'USUARIOS_BASE';
    const GRUPO_USUARIOS_GESTION = 'USUARIOS_GESTION';
    const GRUPO_USUARIOS_CLAVE = 'USUARIOS_CLAVE';
    
    const GRUPO_VENDEDOR = 'VENDEDOR';
    const GRUPO_CAJERO = 'CAJERO';

    const PANOL_RESPONSABLE = 'PANOL_RESPONSABLE'; // panolero
    const CENTRO_PEDIDO_RESPONSABLE = 'CENTRO_PEDIDO_RESPONSABLE'; // responsable de pedidos
    const CENTRO_PEDIDO_CONSULTA = 'CENTRO_PEDIDO_CONSULTA'; // responsable de pedidos
    const CENTRO_PEDIDO_PROVEEDOR = 'CENTRO_PEDIDO_PROVEEDOR'; // responsable de pedidos de proveedor
    const CENTRO_RECEPCION_RESPONSABLE = 'CENTRO_RECEPCION_RESPONSABLE'; // responsable de recepciones
    const CENTRO_ENVIO_RESPONSABLE = 'CENTRO_ENVIO_RESPONSABLE'; // responsable de gestion de envios
    
    const GRUPO_CHOFER = 'CHOFER';
    
    /*
      Autor: Pablo Rosen
      Fecha: 15/06/2011
      Return: coleccion de string

      retorna las credenciales del grupo
     */

    public function getCredenciales() {
        $credenciales = array();

        // se recuperan las credenciales asignadas al usuario
        $agrupadors = $this->getUsAgrupadors();
        foreach ($agrupadors as $agrupador) {
            $credenciales[] = $agrupador->getUsCredencial()->getCodigo();
        }

        return $credenciales;
    }

}

?>