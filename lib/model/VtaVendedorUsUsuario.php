<?php

require_once "base/BVtaVendedorUsUsuario.php";

class VtaVendedorUsUsuario extends BVtaVendedorUsUsuario {

    /**
     * Se sobreescribe el metodo para asegurar seteo del grupo VENDEDOR
     */
    public function saveDesdeRelacion() {
        $this->save();
        
        // ----------------------------
        // se verifica que el usuario tenga el grupo VENDEDOR
        // ----------------------------
        $this->setAsignarGrupoVendedor();
    }
    
    public function setAsignarGrupoVendedor(){
        // ----------------------------
        // se verifica que el usuario tenga el grupo VENDEDOR
        // ----------------------------
        $us_usuario = $this->getUsUsuario();
        $us_grupo = UsGrupo::getOxCodigo(UsGrupo::GRUPO_VENDEDOR);
        
        $array = array(
            array('campo' => 'us_grupo_id', 'valor' => $us_grupo->getId()),
            array('campo' => 'us_usuario_id', 'valor' => $us_usuario->getId()),
        );
        $us_agrupado = UsAgrupado::getOxArray($array);
        if(!$us_agrupado){
            $us_agrupado = new UsAgrupado();
            $us_agrupado->setUsGrupoId($us_grupo->getId());
            $us_agrupado->setUsUsuarioId($us_usuario->getId());
            $us_agrupado->save();
        }
    }

}

?>