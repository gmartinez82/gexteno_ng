<?php

require_once "base/BMlAutorization.php";

class MlAutorization extends BMlAutorization {

    static function setInicializarObjMeliConToken() {
        // ---------------------------------------------------------------------
        // se recupera el token actual
        // ---------------------------------------------------------------------
        $ml_autorization_actual = MlAutorization::getTokenActual();

        if ($ml_autorization_actual->getEstadoVigencia()) {
            // ---------------------------------------------------------------------
            // token vigente
            // ---------------------------------------------------------------------            
            $meli = new MlMeli(MlConfig::CONFIG_APP_ID, MlConfig::CONFIG_SECRET_KEY, $ml_autorization_actual->getMlAccessToken());
        } else {
            // ---------------------------------------------------------------------
            // token vencido - se refresca access token
            // ---------------------------------------------------------------------            
            $meli = new MlMeli(MlConfig::CONFIG_APP_ID, MlConfig::CONFIG_SECRET_KEY, $ml_autorization_actual->getMlAccessToken(), $ml_autorization_actual->getMlRefreshCode());
            $refresh = $meli->refreshAccessToken();

            $body = $refresh["body"];
            if ($body) {
                $access_token = $body->access_token;
                $refresh_token = $body->refresh_token;
                $scope = $body->scope;
                $token_type = $body->token_type;
                $expires_in = $body->expires_in;

                MlAutorization::setTokenActual($access_token, $refresh_token, $scope, $token_type, $expires_in);
            }
        }
        
        return $meli;
    }

    static function getTokenActual() {
        $c = new Criterio();
        $c->add(MlAutorization::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(MlAutorization::GEN_TABLA);
        $c->addOrden(MlAutorization::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $ml_autorizations = MlAutorization::getMlAutorizations($p, $c);
        foreach ($ml_autorizations as $ml_autorization) {
            return $ml_autorization;
        }

        return false;
    }

    static function setTokenActual($access_token, $refresh_token, $scope, $token_type, $expires_in) {

        // control para cuando hay cortes de internet o no se obtiene respuesta de ML
        if(trim($access_token) == ''){
            return false;
        }
        
        $ejec = new Ejecucion();
        $sql = "UPDATE " . MlAutorization::GEN_TABLA . " SET " . MlAutorization::GEN_ATTR_MIN_ACTUAL . " = 0 WHERE " . MlAutorization::GEN_ATTR_MIN_ACTUAL . " = 1;";
        $ejec->setSql($sql);
        $ejec->execute();

        $observacion = '';
        $observacion .= 'access_token = ' . $access_token . PHP_EOL;
        $observacion .= 'refresh_token = ' . $refresh_token . PHP_EOL;
        $observacion .= 'scope = ' . $scope . PHP_EOL;
        $observacion .= 'token_type = ' . $token_type . PHP_EOL;
        $observacion .= 'expires_in = ' . $expires_in . PHP_EOL;

        $ml_autorization = new MlAutorization();
        $ml_autorization->setMlAccessToken($access_token);
        $ml_autorization->setMlRefreshCode($refresh_token);
        $ml_autorization->setObservacion($observacion);
        $ml_autorization->setInicial(0);
        $ml_autorization->setActual(1);
        $ml_autorization->setEstado(1);
        $ml_autorization->save();

        return $ml_autorization;
    }

    public function getEstadoVigencia() {
        $minutoslimite = 360; // 6 horas

        $creado = $this->getCreado();
        $diferencia_minutos = Date::getDiferenciaTiempo('i', $creado, date('Y-m-d H:i:s'));

        if ($diferencia_minutos >= $minutoslimite) {
            return false; // supero el tiempo limite
        }
        return true;
    }

}

?>