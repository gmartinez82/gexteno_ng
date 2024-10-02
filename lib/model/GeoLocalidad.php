<?php

require_once "base/BGeoLocalidad.php";

class GeoLocalidad extends BGeoLocalidad {

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
                    array('campo' => 'geo_provincia_id', 'valor' => $this->getGeoProvinciaId()),
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
        // provincia
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getGeoProvinciaId())) {
            $error->addError(100, 'GeoProvincia', 'geo_provincia_id');
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
        $texto = $this->getGeoProvincia()->getGeoPais()->getDescripcion();
        $texto .= " > ";
        $texto .= $this->getGeoProvincia()->getDescripcion();
        $texto .= " > ";
        $texto .= $this->getDescripcion();

        return $texto;
    }
    
    public function getDescripcionParaRelacion(){
        $texto = $this->getGeoProvincia()->getGeoPais()->getDescripcion();
        $texto .= " > ";
        $texto .= $this->getGeoProvincia()->getDescripcion();
        $texto .= " > ";
        $texto .= $this->getDescripcion();

        return $texto;        
    }

    /**
     * [getGeoLocalidadsFullCmb description]
     * @param  boolean $estado [description]
     * @return [type]          [description]
     */
    static function getGeoLocalidadsFullCmb($estado = true) {
        $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
        $criterio = new Criterio();
        $criterio->addDistinct(false);

        if ($estado) {
            $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }

        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addRealJoin(GeoProvincia::GEN_TABLA, GeoProvincia::GEN_ATTR_ID, GeoLocalidad::GEN_ATTR_GEO_PROVINCIA_ID);
        $criterio->addRealJoin(GeoPais::GEN_TABLA, GeoPais::GEN_ATTR_ID, GeoProvincia::GEN_ATTR_GEO_PAIS_ID);
        $criterio->addOrden(GeoPais::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $criterio->addOrden(GeoProvincia::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $criterio->addOrden(GeoLocalidad::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $criterio->setCriterios();

        $col = GeoLocalidad::getGeoLocalidads($paginador, $criterio);

        $cont = 0;
        $arr = array();
        foreach ($col as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionFullParaSelect();
        }
        return $arr;
    }
    
    /**
     * 
     * @return type
     */
    public function getGralDiasPosiblesDeEntrega(){
        $criterio = new Criterio();
        $criterio->addDistinct(true);
        $criterio->addTabla(GralDia::GEN_TABLA);
        
        $criterio->add(GeoLocalidad::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        
        $criterio->addRealJoin(GralRutaGralDia::GEN_TABLA, GralRutaGralDia::GEN_ATTR_GRAL_DIA_ID, GralDia::GEN_ATTR_ID);
        $criterio->addRealJoin(GralRuta::GEN_TABLA, GralRuta::GEN_ATTR_ID, GralRutaGralDia::GEN_ATTR_GRAL_RUTA_ID);        
        $criterio->addRealJoin(GralRutaGeoLocalidad::GEN_TABLA, GralRutaGeoLocalidad::GEN_ATTR_GRAL_RUTA_ID, GralRuta::GEN_ATTR_ID);
        $criterio->addRealJoin(GeoLocalidad::GEN_TABLA, GeoLocalidad::GEN_ATTR_ID, GralRutaGeoLocalidad::GEN_ATTR_GEO_LOCALIDAD_ID);
        
        $criterio->addOrden(GralDia::GEN_ATTR_ORDEN, Criterio::_ASC);
        $criterio->setCriterios();
        
        $gral_dias = GralDia::getGralDias(null, $criterio);
        return $gral_dias;
    }
    
    /**
     * 
     * @return string
     */
    public function getGralDiasPosiblesDeEntregaString(){
        $texto = '';
        $gral_dias = $this->getGralDiasPosiblesDeEntrega();
        foreach($gral_dias as $gral_dia){
            $texto.= $gral_dia->getDescripcion().', ';
        }
        $texto = substr($texto, 0, -2);
        return $texto;
    }

}

?>