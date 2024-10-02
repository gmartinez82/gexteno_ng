<?php

require_once "base/BNovNovedad.php";

class NovNovedad extends BNovNovedad {

    public function getNovNovedadDestinatariosTodos() {
        $us_usuarios = parent::getUsUsuariosXNovNovedadDestinatario();
        $us_grupos = parent::getUsGruposXNovNovedadUsGrupo();
        
        // ---------------------------------------------------------------------
        // se agregan los usuarios vinculados directos
        // ---------------------------------------------------------------------
        foreach($us_usuarios as $us_usuario){
            $us_usuarios_todos[$us_usuario->getId()] = $us_usuario;
        }
        
        // ---------------------------------------------------------------------
        // se agregan los usuarios vinculados por grupo
        // ---------------------------------------------------------------------
        foreach($us_grupos as $us_grupo){
            $us_usuarios_del_grupo = $us_grupo->getUsUsuariosXUsAgrupado();
            foreach($us_usuarios_del_grupo as $us_usuario_del_grupo){
                $us_usuarios_todos[$us_usuario_del_grupo->getId()] = $us_usuario_del_grupo;
            }
        }
        
        return $us_usuarios_todos;
    }

    static function getUltimasNovedadesParaWidget($cantidad = 14) {
        $user = UsUsuario::autenticado();
        $arr_nov_novedads_ultimas = array();

        $cont = 0;
        $string_us_grupos_para_in = '';
        $us_grupos = $user->getUsGruposXUsAgrupado();
        foreach ($us_grupos as $us_grupo) {
            $cont++;
            $string_us_grupos_para_in .= $us_grupo->getId();
            if(count($us_grupos) > $cont){
                $string_us_grupos_para_in .= ',';
            }
        }

        $c = new Criterio();
        
        $c->add(UsUsuario::GEN_ATTR_ID, $user->getId(), Criterio::IGUAL);
        
        if(trim($string_us_grupos_para_in) != ''){
            $c->add(UsGrupo::GEN_ATTR_ID, '('.$string_us_grupos_para_in.')', Criterio::IN, false, Criterio::_OR);
        }
        
        $c->addTabla(NovNovedad::GEN_TABLA);
        $c->addRealJoin(NovNovedadDestinatario::GEN_TABLA, NovNovedadDestinatario::GEN_ATTR_NOV_NOVEDAD_ID, NovNovedad::GEN_ATTR_ID, 'LEFT JOIN');
        $c->addRealJoin(UsUsuario::GEN_TABLA, UsUsuario::GEN_ATTR_ID, NovNovedadDestinatario::GEN_ATTR_US_USUARIO_ID, 'LEFT JOIN');
        $c->addRealJoin(NovNovedadUsGrupo::GEN_TABLA, NovNovedadUsGrupo::GEN_ATTR_NOV_NOVEDAD_ID, NovNovedad::GEN_ATTR_ID, 'LEFT JOIN');
        $c->addRealJoin(UsGrupo::GEN_TABLA, UsGrupo::GEN_ATTR_ID, NovNovedadUsGrupo::GEN_ATTR_US_GRUPO_ID, 'LEFT JOIN');
        $c->addOrden(NovNovedad::GEN_ATTR_ID, Criterio::_DESC);
        $c->addOrden(NovNovedad::GEN_ATTR_FECHA, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador($cantidad, 1);

        $nov_novedads = NovNovedad::getNovNovedads($p, $c);
        foreach ($nov_novedads as $nov_novedad) {
            $arr_nov_novedads_ultimas[$nov_novedad->getFecha()][] = $nov_novedad;
        }

        return $arr_nov_novedads_ultimas;
    }

    public function getNovedadObservado($user = false) {
        if (!$user) {
            $user = UsUsuario::autenticado();
        }
        $array = array(
            array('campo' => 'nov_novedad_id', 'valor' => $this->getId()),
            array('campo' => 'us_usuario_id', 'valor' => $user->getId()),
        );
        $nov_novedad_observado = NovNovedadObservado::getOxArray($array);
        return $nov_novedad_observado;
    }

    public function setNovedadObservado() {
        $user = UsUsuario::autenticado();

        $array = array(
            array('campo' => 'nov_novedad_id', 'valor' => $this->getId()),
            array('campo' => 'us_usuario_id', 'valor' => $user->getId()),
        );
        $nov_novedad_observado = NovNovedadObservado::getOxArray($array);
        if (!$nov_novedad_observado) {
            $nov_novedad_observado = new NovNovedadObservado();
            $nov_novedad_observado->setNovNovedadId($this->getId());
            $nov_novedad_observado->setUsUsuarioId($user->getId());
            $nov_novedad_observado->setDescripcion('Observado por ' . $user->getNombre() . ' el ' . date('d/m/Y H:i'));
            $nov_novedad_observado->setEstado(1);
            $nov_novedad_observado->save();
        }
        return $nov_novedad_observado;
    }

    public function getNovedadLeido($user = false) {
        if (!$user) {
            $user = UsUsuario::autenticado();
        }
        $array = array(
            array('campo' => 'nov_novedad_id', 'valor' => $this->getId()),
            array('campo' => 'us_usuario_id', 'valor' => $user->getId()),
        );
        $nov_novedad_leido = NovNovedadLeido::getOxArray($array);
        return $nov_novedad_leido;
    }

    public function setNovedadLeido() {
        $user = UsUsuario::autenticado();

        $array = array(
            array('campo' => 'nov_novedad_id', 'valor' => $this->getId()),
            array('campo' => 'us_usuario_id', 'valor' => $user->getId()),
        );
        $nov_novedad_leido = NovNovedadLeido::getOxArray($array);
        if (!$nov_novedad_leido) {
            $nov_novedad_leido = new NovNovedadLeido();
            $nov_novedad_leido->setNovNovedadId($this->getId());
            $nov_novedad_leido->setUsUsuarioId($user->getId());
            $nov_novedad_leido->setDescripcion('Leido por ' . $user->getNombre() . ' el ' . date('d/m/Y H:i'));
            $nov_novedad_leido->setEstado(1);
            $nov_novedad_leido->save();
        }
        return $nov_novedad_leido;
    }

    /* Método getInfoBtnVolver */

    static function getInfoBtnVolver($indice = false) {
        $array = array(
            'url' => 'nov_novedad_gestion.php',
            'label' => 'Volver al Listado',
        );

        return ($indice) ? $array[$indice] : $array;
    }

}

?>