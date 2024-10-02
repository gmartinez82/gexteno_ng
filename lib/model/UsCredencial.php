<?php

require_once "base/BUsCredencial.php";

class UsCredencial extends BUsCredencial {

    const US_USUARIO_CLAVE_MULTIUSUARIO = 'US_USUARIO_CLAVE_MULTIUSUARIO';
    const NUTRIR_BD = false;
    const USAR_SESSION = true;
    
    /**
     * 
     * @return \Error
     * @creado_por Esteban Martinez
     * @creado 23/11/2016
     */
    public function control() {
        $error = new DbError();

        if (!Ctrl::esVacio($this->getDescripcion())) {
            if (Ctrl::esMaxCaracteres(100, trim($this->getDescripcion()))) {
                $error->addError(505, "Descripcion", "descripcion");
            } else {
                $o = self::getOxDescripcion($this->getDescripcion());

                if ($o && $o->getId() != $this->getId()) {
                    // se controla que no sea el mismo  
                    $error->addError("La descripcion '" . $o->getDescripcion() . "' ya se encuentra registrada", "Descripcion ", "descripcion");
                }
            }
        } else {
            $error->addError(100, "Descripcion", "descripcion");
        }

        if (!Ctrl::esVacio($this->getCodigo())) {
            if (Ctrl::esMaxCaracteres(100, $this->getCodigo())) {
                $error->addError(505, "Codigo", "codigo");
            } else {
                $o = self::getOxCodigo($this->getCodigo());


                if ($o && $o->getId() != $this->getId()) {
                    // se controla que no sea el mismo  
                    $error->addError("El codigo '" . $o->getCodigo() . "' ya se encuentra registrado", "Codigo", "codigo");
                }
            }
        } else {
            //$error->addError(100, "Codigo", "codigo");
        }



        return $error;
    }

    /**
     * @creado_por Pablo Rosen
     * @creado 19/11/2016
     */
    public function saveDesdeBackend() {
        $id = ($this->getId() != '') ? $this->getId() : 0;

        $o = self::getOxId($id);

        parent::saveDesdeBackend();

        if (!$o) {
            // se inicializa el codigo para url amigable
            $this->setCodigoFormateado();
        } else {
            // se mantiene el mismo codigo para url amigable
            $this->setCodigoFormateado($o->getCodigo());
        }
    }

    /**
     * 
     * @param type $codigo
     * @creado_por Pablo Rosen
     * @creado 19/11/2016
     */
    public function setCodigoFormateado($codigo = '') {
        if (strlen($codigo) == 0) {
            if ($this->getCodigo() != '') {
                $codigo = strtoupper($this->getCodigo());
            } else {
                $codigo = Gral::getStringSaneadoSinCaracteresEspeciales($this->getDescripcion());
                $codigo = strtoupper($codigo);
            }
        }

        $this->setCodigo($codigo);
        $this->save();
    }

    static function getEsAcreditado($codigo, $us_usuario_id = false) {
        self::nutrirBaseDatos($codigo);

        if ($us_usuario_id) {
            // si se indica el usuario
            $us_usuario = UsUsuario::getOxId($us_usuario_id);

            if ($us_usuario) {
                $absoluto = $us_usuario->getAbsoluto();
                if ($absoluto == 1) {
                    return true;
                }
            }

            $credenciales = $us_usuario->getCredenciales();
            $acreditado = array_search($codigo, $credenciales);
            if (trim($acreditado) != '') {
                return true;
            }
            return false;
        } else {
            // si se controla para usuario logueado
            $us_usuario = UsUsuario::autenticado();
            if ($us_usuario) {
                $absoluto = $us_usuario->getAbsoluto();
                if ($absoluto == 1) {
                    return true;
                }
            }

            if (self::USAR_SESSION) {
                $credenciales = $us_usuario->getCredencialesSes();
            } else {
                $credenciales = $us_usuario->getCredenciales();
            }

            $acreditado = array_search($codigo, $credenciales);
            if (trim($acreditado) != '') {
                return true;
            }
            return false;
        }
    }

    static function nutrirBaseDatos($codigo) {
        if (!self::NUTRIR_BD) {
            return;
        }

        $us_credencial = UsCredencial::getOxCodigo($codigo);
        if (!$us_credencial) {
            $us_credencial = new UsCredencial();
            $us_credencial->setDescripcion($codigo);
            $us_credencial->setCodigo($codigo);
            $us_credencial->setEstado(1);
            $us_credencial->save();
        }
        return true;
    }

}

?>
