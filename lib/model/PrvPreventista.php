<?php

require_once "base/BPrvPreventista.php";

class PrvPreventista extends BPrvPreventista {
    /* Control */

    public function control() {
        $error = new DbError();

        // apellido
        if (!Ctrl::esVacio($this->getApellido())) {
            if (Ctrl::esMaxCaracteres(100, $this->getApellido())) {
                $error->addError(505, 'Apellido', 'apellido');
            }
        } else {
            $error->addError(100, 'Apellido', 'apellido');
        }

        // nombre
        if (!Ctrl::esVacio($this->getNombre())) {
            if (Ctrl::esMaxCaracteres(100, $this->getNombre())) {
                $error->addError(505, 'Nombre', 'nombre');
            }
        } else {
            $error->addError(100, 'Nombre', 'nombre');
        }

        return $error;
    }

    /*
      Metodo que retorna la descripcion de un objeto
      autor: Pablo Rosen
      fecha: 24/11/2011 12:11
      return string
     */

    public function getDescripcion() {
        return $this->getApellido() . ', ' . $this->getNombre();
    }

}

?>