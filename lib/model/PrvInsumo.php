<?php

require_once "base/BPrvInsumo.php";

class PrvInsumo extends BPrvInsumo {

    const GEN_CLASE_AUDITORIA = false;

    /**
     * Metodo que retorna los datos "claves" del prv insumo
     */
    public function getPrvInsumoClaves() {
        $claves = '';

        $claves .= $this->getDescripcion();
        $claves .= ' ' . $this->getPrvProveedor()->getDescripcion();
        $claves .= ' ' . $this->getInsMarca()->getDescripcion();
        $claves .= ' ' . $this->getInsMarcaPiezaObj()->getDescripcion();
        $claves .= ' ' . $this->getCodigoProveedor();
        $claves .= ' ' . $this->getCodigoMarca();
        $claves .= ' ' . $this->getCodigoPieza();

        return $claves;
    }

    /**
     * Metodo que setea el campo "claves" del prv insumo
     */
    public function setPrvInsumoClaves() {
        $claves = $this->getPrvInsumoClaves();

        $this->setClaves($claves);
        $this->save();

        return $claves;
    }

    public function getPrvInsumoCostoActual() {
        $c = new Criterio();
        $c->add(PrvInsumoCosto::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PrvInsumoCosto::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(PrvInsumoCosto::GEN_TABLA);
        $c->setCriterios();

        $prv_insumo_costos = PrvInsumoCosto::getPrvInsumoCostos($p = new Paginador(1, 1), $c);
        if (count($prv_insumo_costos)) {
            $prv_insumo_costo_actual = $prv_insumo_costos[0];
            return $prv_insumo_costo_actual;
        }
        return false;
    }

    public function getPrvInsumoCostoAnterior() {
        $prv_insumo_costo_actual = $this->getPrvInsumoCostoActual();
        $numero_importacion = $prv_insumo_costo_actual->getNumeroImportacion();

        $c = new Criterio();
        $c->add(PrvInsumoCosto::GEN_ATTR_PRV_INSUMO_ID, $this->getId(), Criterio::IGUAL);
        //$c->add(PrvInsumoCosto::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->add(PrvInsumoCosto::GEN_ATTR_NUMERO_IMPORTACION, ($numero_importacion - 1), Criterio::IGUAL);
        $c->addTabla(PrvInsumoCosto::GEN_TABLA);
        $c->setCriterios();

        $prv_insumo_costos = PrvInsumoCosto::getPrvInsumoCostos($p = new Paginador(1, 1), $c);
        if (count($prv_insumo_costos)) {
            $prv_insumo_costo_actual = $prv_insumo_costos[0];
            return $prv_insumo_costo_actual;
        }
        return false;
    }

    public function getInsInsumoCostoActual($ins_insumo_id) {
        $ins_insumo = InsInsumo::getOxId($ins_insumo_id);

        if ($ins_insumo) {
            $criterio = new Criterio();
            $criterio->add(InsInsumoCosto::GEN_ATTR_INS_INSUMO_ID, $ins_insumo->getId(), Criterio::IGUAL);
            $criterio->add(InsInsumoCosto::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
            $criterio->addTabla(InsInsumoCosto::GEN_TABLA);
            $criterio->setCriterios();

            $ins_insumo_costo_actuals = InsInsumoCosto::getInsInsumoCostos($p = new Paginador(1, 1), $criterio);

            if (count($ins_insumo_costo_actuals)) {
                $ins_insumo_costo_actual = $ins_insumo_costo_actuals[0];
                return $ins_insumo_costo_actual;
            }
        }

        return false;
    }

    public function getPrvInsumoXPrvProveedorIdXCodProveedor($prv_proveedor_id, $codigo_proveedor) {
        $c = new Criterio();
        $c->add(PrvInsumo::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
        $c->add(PrvInsumo::GEN_ATTR_CODIGO_PROVEEDOR, $codigo_proveedor, Criterio::IGUAL);
        $c->addTabla(PrvInsumo::GEN_TABLA);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $prv_insumos = PrvInsumo::getPrvInsumos($p, $c);

        if (count($prv_insumos)) {
            $prv_insumo = $prv_insumos[0];
            return $prv_insumo;
        }
        return false;
    }

    static function getPrvInsumosEnArray($prv_proveedor_id) {

        $c = new Criterio();
        $c->add(PrvInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(PrvInsumo::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor_id, Criterio::IGUAL);
        $c->addTabla(PrvInsumo::GEN_TABLA);
        $c->setCriterios();

        $prv_insumos = PrvInsumo::getPrvInsumos(null, $c);
        foreach ($prv_insumos as $prv_insumo) {
            $prv_proveedor_id = $prv_insumo->getPrvProveedorId();
            $codigo_proveedor = $prv_insumo->getCodigoProveedor();

            $arr[$prv_proveedor_id][$codigo_proveedor] = $prv_insumo;
        }
        return $arr;
    }

    public function getInsMarcaPiezaObj() {
        if ($this->getInsMarcaPieza() != 'null') {
            return InsMarca::getOxId($this->getInsMarcaPieza());
        }
        return new InsMarca();
    }

    public function setProveedorReferencial() {
        $ins_insumo = $this->getInsInsumo();

        if ($ins_insumo) {
            // se actualizan todos los prv insumo del ins insumo a referencial cero
            $ejec = new Ejecucion();
            $sql = 'UPDATE prv_insumo SET referencial = 0 WHERE ins_insumo_id = ' . $ins_insumo->getId();
            $ejec->setSql($sql);
            $ejec->execute();
        }

        // se determina como referencial el elegido
        $this->setReferencial(1);
        $this->save();
    }

    public function setProveedorReferencialQuitar() {
        $ins_insumo = $this->getInsInsumo();

        if ($ins_insumo) {
            // se actualizan todos los prv insumo del ins insumo a referencial cero
            $ejec = new Ejecucion();
            $sql = 'UPDATE prv_insumo SET referencial = 0 WHERE ins_insumo_id = ' . $ins_insumo->getId();
            $ejec->setSql($sql);
            $ejec->execute();
        }
    }

    public function setProveedorReferencialInicial() {
        $ins_insumo = $this->getInsInsumo();

        $prv_insumos = $ins_insumo->getPrvInsumos();
        if (count($prv_insumos) == 1) {
            // se determina como referencial el elegido
            $this->setReferencial(1);
            $this->save();

            return $this;
        }
        return false;
    }

    /**
     * Creado: 19/08/2017 17:08
     * Author: Pablo Rosen
     * Metodo que setea un nuevo costo para el insumo de proveedor
     * @return \PrvInsumoCosto
     */
    public function setPrvInsumoCostoActual($prv_importacion, $importe, $descuento, $numero_importacion, $fecha = false, $observacion = '') {

        // se fuerza modificacion de actual para los anteriores
        $ejec = new Ejecucion();
        $sql = 'UPDATE prv_insumo_costo SET actual = 0 WHERE prv_insumo_id = ' . $this->getId() . ' AND actual <> 0';
        $ejec->setSql($sql);
        $ejec->execute();

        // se registra un nuevo costo para el insumo de proveedor
        $prv_insumo_costo = new PrvInsumoCosto();
        $prv_insumo_costo->setPrvInsumoId($this->getId());
        if ($prv_importacion) {
            $prv_insumo_costo->setPrvImportacionId($prv_importacion->getId());
        }
        $prv_insumo_costo->setFechaActualizacion(Gral::getFechaHoraActual());
        if ($fecha) {
            $prv_insumo_costo->setFechaActualizacion($fecha);
        }
        $prv_insumo_costo->setImporteBruto($importe);
        $prv_insumo_costo->setDescuento($descuento);
        $prv_insumo_costo->setObservacion($observacion);
        $prv_insumo_costo->setActual(1);
        $prv_insumo_costo->setEstado(1);
        $prv_insumo_costo->setNumeroImportacion($numero_importacion);
        $prv_insumo_costo->save();

        return $prv_insumo_costo;
    }

    static function setPrvInsumoNuevo($prv_proveedor_id, $codigo_marca, $codigo_pieza, $codigo_proveedor, $descripcion, $observacion = '', $ins_insumo_id = false, $ins_marca_id = false, $ins_marca_pieza = false, $ins_matriz_id = false, $prv_importacion = false, $importe_oc = 0, $descuento = 0, $numero_importacion = 0, $fecha = false) {
        if ($prv_proveedor_id) {
            $prv_insumo = new PrvInsumo();
            $prv_insumo->setPrvProveedorId($prv_proveedor_id);
            $prv_insumo->setCodigoMarca($codigo_marca);
            $prv_insumo->setCodigoPieza($codigo_pieza);
            $prv_insumo->setCodigoProveedor($codigo_proveedor);
            $prv_insumo->setDescripcion($descripcion);
            $prv_insumo->setEstado(1);
            $prv_insumo->setFechaActualizacion(Gral::getFechaActual());
            $prv_insumo->setObservacion($observacion);

            if ($ins_insumo_id) {
                $prv_insumo->setInsInsumoId($ins_insumo_id);
            }

            if ($ins_marca_id) {
                $prv_insumo->setInsMarcaId($ins_marca_id);
            }

            if ($ins_marca_pieza) {
                $prv_insumo->setInsMarcaPieza($ins_marca_pieza);
            }

            if ($ins_matriz_id) {
                $prv_insumo->setInsMatrizId($ins_matriz_id);
            }

            $prv_insumo->save();

            // -----------------------------------------------------------------
            // crear costo de proveedor (PrvInsumoCosto)
            // -----------------------------------------------------------------
            if ($prv_insumo) {
                $prv_insumo_costo = $prv_insumo->setPrvInsumoCostoActual(
                        $prv_importacion, $importe_oc, $descuento, $numero_importacion, $fecha, $observacion
                );
            }


            return $prv_insumo;
        }
        return false;
    }

}
