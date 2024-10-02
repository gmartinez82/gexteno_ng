<?php

require_once "base/BAppMovInstalacion.php";

class AppMovInstalacion extends BAppMovInstalacion {

    public function getDescripcion() {
        $texto .= ' ';
        $texto .= $this->getId();
        $texto .= ' - ';
        $texto .= Gral::getFechaHoraToWEB($this->getCreado());

        return $texto;
    }

    static function setRegistrarInstalacion($token, $app_version, $imei, $so_descripcion, $so_version, $marca, $modelo, $operador_movil, $pais_operador) {

        $app_mov_token = AppMovToken::getOxCodigo($token);
        if ($app_mov_token) {
            $app_mov_modulo = $app_mov_token->getAppMovModulo();

            // ----------------------------------------------------------------------
            // se identifica la version que se quiere instalar
            // ----------------------------------------------------------------------
            $array = array(
                array('campo' => 'app_mov_modulo_id', 'valor' => $app_mov_modulo->getId()),
                array('campo' => 'version', 'valor' => $app_version),
            );
            $app_mov_version = AppMovVersion::getOxArray($array);

            // ----------------------------------------------------------------------
            // se identifica dispositivo si existe, sino se crea
            // ----------------------------------------------------------------------
            $app_mov_dispositivo = AppMovDispositivo::getOxImei($imei);
            if (!$app_mov_dispositivo) {
                // ------------------------------------------------------------------
                // si no existe se crea el dispositivo
                // ------------------------------------------------------------------
                $app_mov_dispositivo = new AppMovDispositivo();
                $app_mov_dispositivo->setImei($imei);
                $app_mov_dispositivo->setEstado(1);
            }
            $app_mov_dispositivo->setSoDescripcion($so_descripcion);
            $app_mov_dispositivo->setSoVersion($so_version);
            $app_mov_dispositivo->setMarca($marca);
            $app_mov_dispositivo->setModelo($modelo);
            $app_mov_dispositivo->setObservacion($operador_movil . ' - ' . $pais_operador);
            $app_mov_dispositivo->save();

            // ----------------------------------------------------------------------
            // se verifica si existe instalacion para el modulo en el dispositivo, si existe se cancela
            // ----------------------------------------------------------------------
            $array = array(
                array('campo' => 'app_mov_modulo_id', 'valor' => $app_mov_modulo->getId()),
                array('campo' => 'app_mov_dispositivo_id', 'valor' => $app_mov_dispositivo->getId()),
                array('campo' => 'estado', 'valor' => 1),
            );
            $app_mov_instalacions = AppMovInstalacion::getOsxArray($array);
            foreach ($app_mov_instalacions as $app_mov_instalacion) {
                $app_mov_instalacion->setEstado(0);
                $app_mov_instalacion->save();
            }

            // ----------------------------------------------------------------------
            // se registra una nueva instalacion
            // ----------------------------------------------------------------------
            $app_mov_instalacion = new AppMovInstalacion();
            $app_mov_instalacion->setAppMovDispositivoId($app_mov_dispositivo->getId());
            $app_mov_instalacion->setAppMovModuloId($app_mov_modulo->getId());
            $app_mov_instalacion->setAppMovTokenId($app_mov_token->getId());
            if ($app_mov_version) {
                $app_mov_instalacion->setAppMovVersionId($app_mov_version->getId());
            }
            $app_mov_instalacion->setCodigo(md5(date('Y-m-d H:i:s')));
            $app_mov_instalacion->setAppVersion($app_version);
            $app_mov_instalacion->setFechaUltimaActividad(date('Y-m-d H:i:s'));
            $app_mov_instalacion->setEstado(1);
            $app_mov_instalacion->save();

            return $app_mov_instalacion;
        }
        return false;
    }

    static function getVersionActual($token, $instalacion_id) {
        $app_mov_token = AppMovToken::getOxCodigo($token);
        
        $app_mov_instalacion = AppMovInstalacion::getOxId($instalacion_id);
        $app_mov_modulo = $app_mov_instalacion->getAppMovModulo();
        $app_mov_version_actual = $app_mov_modulo->getVersionActual();
        
        if($app_mov_version_actual){
            return $app_mov_version_actual;
        }
        return false;
    }

    public function setRegistrarActividad($metodo, $os, $us_usuario_id = false, $version = false) {

        $gen_api_token = $this->getGenApiToken();

        $registros = count($os);
        $respuesta = '<pre>' . print_r($os, true) . '</pre>';
        $token = $gen_api_token->getCodigo();

        // ----------------------------------------------------------------------
        // se registra la actividad
        // ----------------------------------------------------------------------
        $app_mov_actividad = new AppMovActividad();
        $app_mov_actividad->setAppMovInstalacionId($this->getId());
        $app_mov_actividad->setAppMovDispositivoId($this->getAppMovDispositivoId());
        $app_mov_actividad->setAppMovModuloId($this->getAppMovModuloId());
        $app_mov_actividad->setGenApiTokenId($this->getGenApiTokenId());
        $app_mov_actividad->setFechaActividad(date('Y-m-d H:i:s'));
        $app_mov_actividad->setMetodo($metodo);
        $app_mov_actividad->setRegistros($registros);
        $app_mov_actividad->setRespuesta($respuesta);
        $app_mov_actividad->setObservacion('VERSION: ' . $version);
        $app_mov_actividad->setToken($token);
        $app_mov_actividad->setEstado(1);
        $app_mov_actividad->save();

        // ----------------------------------------------------------------------
        // se actualiza la ultima actividad de la instalacion
        // ----------------------------------------------------------------------
        $this->setFechaUltimaActividad(date('Y-m-d H:i:s'));
        $this->save();


        if ($us_usuario_id) {
            $ejec = new Ejecucion();
            $sql = 'UPDATE app_mov_actividad SET '
                    . 'orden = ' . $us_usuario_id . ', '
                    . 'modificado_por = ' . $us_usuario_id . ' '
                    . 'WHERE id = ' . $app_mov_actividad->getId();
            $ejec->setSql($sql);
            $ejec->execute();

            $ejec = new Ejecucion();
            $sql = "UPDATE app_mov_instalacion SET "
                    . "orden = " . $us_usuario_id . ", "
                    . "us_usuario_id = " . $us_usuario_id . ", "
                    . "modificado_por = " . $us_usuario_id . " "
                    . "WHERE id = " . $this->getId();
            $ejec->setSql($sql);
            $ejec->execute();

            if (trim($version) != '') {
                $ejec = new Ejecucion();
                $sql = "UPDATE app_mov_instalacion SET "
                        . "app_version_activa = '" . $version . "' "
                        . "WHERE id = " . $this->getId();
                $ejec->setSql($sql);
                $ejec->execute();
            }
        }
    }

    public function getEsVersionValida() {
        $app_mov_modulo = $this->getAppMovModulo();
        $app_mov_version_actual = $app_mov_modulo->getVersionActual();

        return true;
    }

}

?>