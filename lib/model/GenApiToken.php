<?php

require_once "base/BGenApiToken.php";

class GenApiToken extends BGenApiToken {

    public function getDescripcion() {
        $texto .= ' ';
        $texto .= $this->getCodigo();
        $texto .= ' - ';
        $texto .= Gral::getFechaHoraToWEB($this->getCreado());

        return $texto;
    }

    public function esTokenValido() {
        return true;
    }

    /**
     * [validarToken Valida si un token recibido]
     * @param  [string] $token [El token]
     * @return [array] $arr_token [array con info de token]
     */
    static function validarToken($token) {
        $c = new Criterio();
        $c->add(GenApiToken::GEN_ATTR_CODIGO, $token, Criterio::IGUAL);
        $c->add(GenApiToken::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $c->add(GenApiToken::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(GenApiToken::GEN_ATTR_VENCIMIENTO, date('Y-m-d H:i:s'), Criterio::MAYOR);
        $c->addTabla(GenApiToken::GEN_TABLA);
        $c->addOrden(GenApiToken::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $gen_api_tokens = GenApiToken::getGenApiTokens($p, $c);
        foreach ($gen_api_tokens as $gen_api_token) {
            $arr_token = array(
                'estado' => 1,
                'token' => $gen_api_token->getCodigo(),
                'gen_api_token' => $gen_api_token
            );
            return $arr_token;
        }

        $c = new Criterio();
        $c->add(GenApiToken::GEN_ATTR_CODIGO, $token, Criterio::IGUAL);
        $c->addTabla(GenApiToken::GEN_TABLA);
        $c->addOrden(GenApiToken::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $gen_api_tokens = GenApiToken::getGenApiTokens($p, $c);
        foreach ($gen_api_tokens as $gen_api_token) {
            $arr_token = array(
                'estado' => 0,
                'token' => $gen_api_token->getCodigo(),
                'gen_api_token' => $gen_api_token
            );
            return $arr_token;
        }

        return false;
    }

}

?>