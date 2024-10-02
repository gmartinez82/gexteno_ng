<?php

require_once "base/BInsInsumoDestinoTransformacion.php";

class InsInsumoDestinoTransformacion extends BInsInsumoDestinoTransformacion {

    public function getDescripcion() {
        $texto = "";

        $texto .= $this->getCantidad() . " " . $this->getInsInsumoDestinoObj()->getDescripcion();

        return $texto;
    }

    public function control() {
        $error = new DbError();

        // ins_insumo
        if (Ctrl::esNull($this->getInsInsumoId())) {
            $error->addError(100, 'Insumo', 'ins_insumo_id');
        }

        // ins_insumo destino
        if (Ctrl::esNull($this->getInsInsumoDestino())) {
            $error->addError('Debe indicar un insumo destino', 'Insumo Destino', 'ins_insumo_destino');
        }

        // cantidad
        if (!Ctrl::esNumero($this->getCantidad())) {
            $error->addError('Debe ingresar un numero mayor a cero', 'Cantidad', 'cantidad');
        } else {
            if ($this->getCantidad() <= 0) {
                $error->addError('Debe ingresar un numero mayor a cero', 'Cantidad', 'cantidad');
            }
        }

        return $error;
    }

    public function saveDesdeBackend() {
        parent::saveDesdeBackend();
        
        // se setea el insumo principal como origen de transformacion
        $ins_insumo = $this->getInsInsumo();
        $ins_insumo->setEsTransformableOrigen(1);
        $ins_insumo->save();

        // se setea el insumo destino como destino de transformacion
        $ins_insumo_destino = $this->getInsInsumoDestinoObj();
        $ins_insumo_destino->setEsTransformableDestino(1);
        $ins_insumo_destino->save();        
    }

    public function saveDesdeVinculo() {
        //parent::saveDesdeVinculo();
    }

}

?>