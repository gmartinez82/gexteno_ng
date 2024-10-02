<?php

require_once "base/BGenApiConsumer.php";

class GenApiConsumer extends BGenApiConsumer {

    /**
     * Metodo de autenticacion de consumer
     * @param string $consumer
     * @param string $secret_code
     */
    static function autenticarConsumer($consumer, $secret_code) {
        $c = new Criterio();
        $c->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(self::GEN_ATTR_CONSUMER, $consumer, Criterio::IGUAL);
        $c->add(self::GEN_ATTR_SECRET_CODE, $secret_code, Criterio::IGUAL);
        $c->addTabla(self::GEN_TABLA);
        $c->setCriterios();

        $gen_api_consumers = self::getGenApiConsumers(null, $c);
        foreach ($gen_api_consumers as $gen_api_consumer) {
            return $gen_api_consumer;
        }
        return false;
    }

    /**
     * Metodo que retorna el token actual del consumer
     */
    public function getTokenActual() {
        $c = new Criterio();
        $c->add(self::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(GenApiToken::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $c->add(GenApiToken::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(GenApiToken::GEN_TABLA);
        $c->addRealJoin(GenApiProyecto::GEN_TABLA, GenApiProyecto::GEN_ATTR_ID, GenApiToken::GEN_ATTR_GEN_API_PROYECTO_ID);
        $c->addRealJoin(self::GEN_TABLA, self::GEN_ATTR_ID, GenApiToken::GEN_ATTR_GEN_API_CONSUMER_ID);
        $c->addOrden(GenApiToken::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $gen_api_tokens = GenApiToken::getGenApiTokens(null, $c);
        foreach ($gen_api_tokens as $gen_api_token) {
            return $gen_api_token;
        }
        return false;
    }

    /**
     * Metodo que genera un nuevo token para el consumer
     */
    public function setGenerarToken() {
        $gen_api_proyecto = $this->getGenApiProyecto();

        $vencimiento = date('Y-m-d H:i:s');
        $vencimiento = strtotime('+24 hour', strtotime($vencimiento));
        $vencimiento = date('Y-m-d H:i:s', $vencimiento);

        $token = md5($this->getConsumer() . $this->getSecretCode() . date('YmdHis'));

        $gen_api_token = new GenApiToken();
        $gen_api_token->setGenApiConsumerId($this->getId());
        $gen_api_token->setGenApiProyectoId($gen_api_proyecto->getId());
        $gen_api_token->setCodigo($token);
        $gen_api_token->setVencimiento($vencimiento);
        $gen_api_token->setActivo(1);
        $gen_api_token->setEstado(1);
        $gen_api_token->save();

        return $gen_api_token;
    }

    /**
     * Metodo que inactiva tokens del consumer
     */
    public function inactivarTokens() {
        $c = new Criterio();
        $c->add(self::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(GenApiToken::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $c->add(GenApiToken::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(GenApiToken::GEN_TABLA);
        $c->addRealJoin(GenApiProyecto::GEN_TABLA, GenApiProyecto::GEN_ATTR_ID, GenApiToken::GEN_ATTR_GEN_API_PROYECTO_ID);
        $c->addRealJoin(self::GEN_TABLA, self::GEN_ATTR_ID, GenApiToken::GEN_ATTR_GEN_API_CONSUMER_ID);
        $c->addOrden(GenApiToken::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $gen_api_tokens = GenApiToken::getGenApiTokens(null, $c);
        foreach ($gen_api_tokens as $gen_api_token) {
            $gen_api_token->setActivo(0);
            $gen_api_token->setEstado(0);
            $gen_api_token->save();
        }
        return false;
    }

}

?>