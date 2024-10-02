<?php

require_once "base/BVtaPresupuestoConflicto.php";

class VtaPresupuestoConflicto extends BVtaPresupuestoConflicto {

    const PREFIJO_CONF = 'CONF-';

    /**
     * Autor: Pablo Rosen
     * Fecha: 25/04/2022 07:28 hs.
     * Metodo que controla conflictos en presupuestos, y los activa de encontrarse con alguno
     * @param type $fecha_desde
     * @param type $fecha_hasta
     * @param type $vta_presupuesto
     */
    static function execControlConflictos($fecha_desde = false, $fecha_hasta = false, $vta_presupuesto = false){
        
        $c = new Criterio();
        $c->add(VtaPresupuestoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        
        if($fecha_desde){
            $c->add(VtaPresupuesto::GEN_ATTR_CREADO, $fecha_desde.' 00:00:00', Criterio::MAYORIGUAL);
        }
        if($fecha_hasta){
            $c->add(VtaPresupuesto::GEN_ATTR_CREADO, $fecha_hasta.' 23:59:59', Criterio::MENORIGUAL);
        }
        if($vta_presupuesto){
            $c->add(VtaPresupuesto::GEN_ATTR_ID, $vta_presupuesto->getId(), Criterio::IGUAL);
        }
        
        $c->addTabla(VtaPresupuesto::GEN_TABLA);
        $c->addRealJoin(VtaPresupuestoTipoEstado::GEN_TABLA, VtaPresupuestoTipoEstado::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ESTADO_ID);
        $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();
        
        $p = new Paginador(1, 1);
        $p = null;
        
        $vta_presupuestos = VtaPresupuesto::getVtaPresupuestos($p, $c);
        foreach($vta_presupuestos as $vta_presupuesto){
            //Gral::prr($vta_presupuesto);
            $vta_presupuesto->setControlVtaPresupuestoConflicto();
        }
         return true;
    }
    
    /**
     * Autor: Gustavo Romo.
     * Fecha: 11/10/2017 09:00 hs.
     * Metodo que resuelve el conflicto actualizando o manteniendo el importe.
     * @return Obj VtaPresupuestoConflicto
     */
    public function setResolverConflicto($txa_observacion, $actualizar = true) {
        $user = UsUsuario::autenticado();
        if ($actualizar) {
            $importe_resuelto = $this->getImporteActualizado();
        } else {
            $importe_resuelto = $this->getImporteInicial();
        }

        // ---------------------------------------------------------------------
        // se actualiza el importe resuelto
        // ---------------------------------------------------------------------
        $vta_presupuesto_ins_insumo = $this->getVtaPresupuestoInsInsumo();
        $vta_presupuesto_ins_insumo->setImporteUnitario($importe_resuelto);
        $vta_presupuesto_ins_insumo->save();

        $vta_presupuesto = $vta_presupuesto_ins_insumo->getVtaPresupuesto();
        
        // ---------------------------------------------------------------------
        // se registran los datos de resolucion del conflicto
        // ---------------------------------------------------------------------
        $this->setImporteResuelto($importe_resuelto);
        $this->setFechaResolucion(Gral::getFechaActual());
        if($user){
            $this->setUsUsuarioResolucion($user->getId());
        }
        $this->setResuelto(1);
        $this->setObservacion($txa_observacion);
        $this->setEstado(0);
        $this->save();

        // ---------------------------------------------------------------------
        // se actualiza la condicion de conflicto del presupuesto
        // ---------------------------------------------------------------------
        $vta_presupuesto->setControlVtaPresupuestoConflicto();

        return $this;
    }

}

?>