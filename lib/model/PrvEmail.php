<?php

require_once "base/BPrvEmail.php";

class PrvEmail extends BPrvEmail {

    public function control() {
        $error = new DbError();

        // ---------------------------------------------------------------------
        // descripcion
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio(trim($this->getDescripcion()))) {
            if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                $error->addError(505, 'Descripcion', 'descripcion');
            } else {
            }
        } else {
            $error->addError(100, 'Descripcion', 'descripcion');
        }


        $this->error = $error;
        return $error;
    }

}

?>