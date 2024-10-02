<?php 
require_once "base/BCntbCuenta.php"; 
class CntbCuenta extends BCntbCuenta
{
    public function control() {
        $error = new DbError();

        // ---------------------------------------------------------------------
        // descripcion
        // ---------------------------------------------------------------------
        if (Ctrl::esVacio($this->getDescripcion())) {
            $error->addError('Debe ingresar una descripcion', '', 'descripcion');
        }

        // ---------------------------------------------------------------------
        // numero
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio($this->getNumero())) {
            $o = self::getOxNumero($this->getNumero());
            if ($o && $o->getId() != $this->getId()) {
                $error->addError('Ya existe el numero de cuenta', '', 'numero');
            }
        } else {
            $error->addError('Debe ingresar un numero de cuenta', '', 'numero');
        }

        // ---------------------------------------------------------------------
        // nivel
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio($this->getNivel())) {
            $o = self::getOxNivel($this->getNivel());
            if ($o && $o->getId() != $this->getId()) {
                $error->addError('Ya existe el nivel', '', 'nivel');
            }
        } else {
            $error->addError('Debe ingresar un nivel', '', 'nivel');
        }
        
        return $error;
    }
    
    public function getFamiliaDescripcion() {
        $texto = '';
        $texto = $this->getArbolFamiliaDescripcion();

        return $texto;
    }

    
}
?>