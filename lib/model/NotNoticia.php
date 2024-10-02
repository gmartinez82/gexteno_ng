<?php

require_once "base/BNotNoticia.php";

class NotNoticia extends BNotNoticia {

    public function control() {
        $error = new DbError();

        if (Ctrl::esVacio($this->getDescripcion())) {
            $error->addError(100, 'Descripcion', 'descripcion');
        }
        if (Ctrl::esNull($this->getNotCategoriaId())) {
            $error->addError(100, 'Categoria', 'not_categoria_id');
        }
        if (Ctrl::esVacio($this->getCopete())) {
            $error->addError(100, 'Copete', 'copete');
        }

        $this->error = $error;
        return $error;
    }

    static function getNotNoticiasHomeDestacadas($categoria) {
        $c = new Criterio();
        $c->add('not_noticia.estado', 1, Criterio::IGUAL);
        $c->add('not_noticia.destacado', 1, Criterio::IGUAL);
        if ($categoria != '') {
            $c->add('not_categoria.codigo', $categoria, Criterio::IGUAL);
        }
        $c->addTabla('not_noticia');
        $c->addRealJoin('not_categoria', 'not_categoria.id', 'not_noticia.not_categoria_id', 'LEFT JOIN');
        $c->addOrden('not_noticia.creado', 'desc');
        $c->setCriterios();

        $p = new Paginador(6, 1);
        $not_noticias_destacadas = NotNoticia::getNotNoticias($p, $c);
        return $not_noticias_destacadas;
    }

    public function getFechaLargaTexto() {
        $arr_fecha = Date::getArrFecha($this->getFecha());

        $nro_dia_semana = date(N, strtotime($this->getFecha()));

        $texto .= Date::getDiaLetras($nro_dia_semana, 'completo') . ' ';
        $texto .= $arr_fecha['dia'] . ' de ';
        $texto .= Date::getMesLetras($arr_fecha['mes'], 'completo') . ' de ';
        $texto .= $arr_fecha['anio'];
        return $texto;
        //return "Lunes 23 de noviembre de 2012";
    }

    public function getFechaLargaTextoListado() {
        $arr_fecha = Date::getArrFecha($this->getFecha());

        $texto = $arr_fecha['dia'] . ' de ';
        $texto .= Date::getMesLetras($arr_fecha['mes'], 'completo');
        return $texto;
        //return "5 de Noviembre";
    }

    public function getPathImagenPrincipal($thumb = false) {
        $c = new Criterio();
        $c->add('estado', 1, Criterio::IGUAL);
        //$c->add('not_tipo_imagen.codigo', 'PORTADA', Criterio::IGUAL); // tipo banner
        $c->addTabla('not_noticia_imagen'); // imagen activa
        //$c->addRealJoin('not_tipo_imagen', 'not_tipo_imagen.id', 'not_noticia_imagen.not_tipo_imagen_id');
        $c->addOrden('orden', 'asc');
        $c->setCriterios();

        //$p = new Paginador(1, 1);

        $imagen_principal = $this->getNotNoticiaImagen($c);
        if ($imagen_principal) {
            return $imagen_principal->getPathImagen($thumb);
        }
        return Gral::getPath('path_http') . "imgs/no-imagen.jpg";
    }

    public function getNotNoticiasRelacionadas() {
        $arr_relacionadas = array();

        $relacionadas = $this->getNotRelacionadas();
        foreach ($relacionadas as $relacionada) {
            $not_noticia = NotNoticia::getOxId($relacionada->getNotNoticiaRelacionada());
            $arr_relacionadas[$not_noticia->getId()] = $not_noticia;
        }

        $relacionadas = NotRelacionada::getOsxNotNoticiaRelacionada($this->getId());
        foreach ($relacionadas as $relacionada) {
            $not_noticia = NotNoticia::getOxId($relacionada->getNotNoticiaId());
            $arr_relacionadas[$not_noticia->getId()] = $not_noticia;
        }

        return $arr_relacionadas;
    }

    public function getNotNoticiasRelacionadasXCategoria() {
        $c = new Criterio();
        $c->add('estado', 1, Criterio::IGUAL);
        $c->add('not_categoria_id', $this->getNotCategoriaId(), Criterio::IGUAL);
        $c->add('id', $this->getId(), Criterio::DISTINTO);

        $c->addTabla('not_noticia');
        $c->addOrden('creado', 'desc');
        $c->setCriterios();

        $p = new Paginador(5, 1);
        $not_noticias = NotNoticia::getNotNoticias($p, $c);
        return $not_noticias;
    }

    public function registrarVisita() {
        $navegador = $_SERVER['HTTP_USER_AGENT'];
        $referer = $_SERVER['HTTP_REFERER'];
        $observacion = $navegador . ' ' . $referer;
        $ip = $_SERVER['REMOTE_ADDR'] . ' - ' . $_SERVER['HTTP_X_FORWARDED_FOR'];

        // control de registro de leida para la ip
        $not_noticia_leida_registradas = NotNoticiaLeida::getOsxNumeroIp($ip);
        $ya_registrada = false;
        foreach ($not_noticia_leida_registradas as $not_noticia_leida_registrada) {
            if ($not_noticia_leida_registrada->getNotNoticiaId() == $this->getId()) {
                $ya_registrada = true;
            }
        }

        if (!$ya_registrada) {
            $not_noticia_leida = new NotNoticiaLeida();
            $not_noticia_leida->setNotNoticiaId($this->getId());
            $not_noticia_leida->setNumeroIp($ip);
            $not_noticia_leida->setObservacion($observacion);
            $not_noticia_leida->setEstado(1);
            $not_noticia_leida->save();
        }
    }

    /*
     * Metodo que retorna una coleccion de IDs de los GalAlbums asignados a NotNoticia 
     */

    public function getNotRelacionadasId() {
        $ids = array();
        foreach ($this->getNotRelacionadas() as $o) {
            $ids[] = $o->getNotNoticiaRelacionada();
        }
        return $ids;
    }

    public function getNotNoticiasParaApp($p, $palabra) {
        $c = new Criterio();
        $c->add(NotNoticia::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        if ($palabra != '') {
            $c->addInicioSubconsulta();
            $c->add(NotNoticia::GEN_ATTR_DESCRIPCION, $palabra, Criterio::LIKE);
            $c->add(NotNoticia::GEN_ATTR_COPETE, $palabra, Criterio::LIKE, false, Criterio::_OR);
            $c->add(NotNoticia::GEN_ATTR_CUERPO, $palabra, Criterio::LIKE, false, Criterio::_OR);
            $c->addFinSubconsulta();
        }
        $c->addTabla(NotNoticia::GEN_TABLA);
        $c->addOrden(NotNoticia::GEN_ATTR_FECHA, Criterio::_DESC);
        $c->addOrden(NotNoticia::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $not_noticias = NotNoticia::getNotNoticias($p, $c);
        return $not_noticias;
    }

}

?>