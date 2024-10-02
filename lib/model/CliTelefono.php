<?php

require_once "base/BCliTelefono.php";

class CliTelefono extends BCliTelefono {

    public function control() {
        $error = new DbError();

        // ---------------------------------------------------------------------
        // descripcion
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio(trim($this->getDescripcion()))) {
            if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                $error->addError(505, 'Descripcion', 'descripcion');
            } else {
                $o = self::getOxDescripcion(trim($this->getDescripcion()));
                if ($o && $o->getId() != $this->getId()) {
                    $error->addError(140, 'Descripcion', 'descripcion');
                }
            }
        } else {
            $error->addError(100, 'Descripcion', 'descripcion');
        }

        // ---------------------------------------------------------------------
        // codigo
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio(trim($this->getCodigo()))) {
            if (Ctrl::esMaxCaracteres(100, $this->getCodigo())) {
                $error->addError(505, 'Codigo', 'codigo');
            } else {
                
            }
        } else {
            $error->addError(100, 'Codigo', 'codigo');
        }

        // ---------------------------------------------------------------------
        // telefono
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio(trim($this->getTelefono()))) {
            if (Ctrl::esMaxCaracteres(100, $this->getTelefono())) {
                $error->addError(505, 'Telefono', 'telefono');
            } else {
                
            }
        } else {
            $error->addError(100, 'Telefono', 'telefono');
        }


        $this->error = $error;
        return $error;
    }
    
    public function getDescripcion() {
        $texto = "";

        $texto .= $this->getGeoPais()->getCodigoTelefonico();
        $texto .= " - ";
        $texto .= $this->getCodigo();
        $texto .= " - ";
        $texto .= $this->getTelefono();

        return $texto;
    }

}

?>