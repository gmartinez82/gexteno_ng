<?php

require_once "base/BGeoProvincia.php";

class GeoProvincia extends BGeoProvincia {

    public function control() {
        $error = new DbError();

        // ---------------------------------------------------------------------
        // descripcion
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio(trim($this->getDescripcion()))) {
            if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                $error->addError(505, 'Descripcion', 'descripcion');
            } else {
                $array = array(
                    array('campo' => 'geo_pais_id', 'valor' => $this->getGeoPaisId()),
                    array('campo' => 'descripcion', 'valor' => trim(strtoupper($this->getDescripcion()))),
                );
                $o = self::getOxArray($array);
                if ($o && $o->getId() != $this->getId()) {
                    $error->addError(140, 'Descripcion', 'descripcion');
                }
            }
        } else {
            $error->addError(100, 'Descripcion', 'descripcion');
        }

        // ---------------------------------------------------------------------
        // pais
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getGeoPaisId())) {
            $error->addError(100, 'GeoPais', 'geo_pais_id');
        }

        // ---------------------------------------------------------------------
        // codigo
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio(trim($this->getCodigo()))) {
            if (Ctrl::esMaxCaracteres(100, $this->getCodigo())) {
                $error->addError(505, 'Codigo', 'codigo');
            } else {
                $o = self::getOxCodigo(trim($this->getCodigo()));
                if ($o && $o->getId() != $this->getId()) {
                    $error->addError(140, 'Codigo', 'codigo');
                }
            }
        } else {
            //$error->addError(100, 'Codigo', 'codigo');
        }


        $this->error = $error;
        return $error;
    }

    public function getDescripcionFull($incluir_pais = true) {
        $texto = '';

        if ($this->getId() == 'null')
            return "-";

        $texto .= $this->getDescripcion();
        $texto .= ', ';
        $texto .= $this->getGeoProvincia()->getDescripcion();
        if ($incluir_pais) {
            $texto .= ', ';
            $texto .= $this->getGeoProvincia()->getGeoPais()->getDescripcion();
        }
        return $texto;
    }

    /**
     * [getDescripcionFullParaSelect description]
     * @return [type] [description]
     */
    public function getDescripcionFullParaSelect() {
        $texto = $this->getGeoPais()->getDescripcion();
        $texto .= " > ";
        $texto .= $this->getDescripcion();

        return $texto;
    }

    /**
     * [getGeoProvinciasFullCmb description]
     * @param  boolean $estado [description]
     * @return [type]          [description]
     */
    static function getGeoProvinciasFullCmb($estado = true) {
        $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
        $criterio = new Criterio();
        $criterio->addDistinct(false);

        if ($estado) {
            $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }

        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addRealJoin(GeoPais::GEN_TABLA, GeoPais::GEN_ATTR_ID, GeoProvincia::GEN_ATTR_GEO_PAIS_ID);
        $criterio->addOrden(GeoPais::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $criterio->addOrden(GeoProvincia::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $criterio->setCriterios();

        $col = GeoProvincia::getGeoProvincias($paginador, $criterio);

        $cont = 0;
        $arr = array();
        foreach ($col as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionFullParaSelect();
        }
        return $arr;
    }

}

?>
