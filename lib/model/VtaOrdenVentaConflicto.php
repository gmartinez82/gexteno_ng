<?php 
require_once "base/BVtaOrdenVentaConflicto.php"; 
class VtaOrdenVentaConflicto extends BVtaOrdenVentaConflicto
{
    
    const PREFIJO_CONF = 'CONF-OV-';
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 25/04/2022 07:28 hs.
     * Metodo que controla conflictos en OVs, y los activa de encontrarse con alguno
     * @param type $fecha_desde
     * @param type $fecha_hasta
     * @param type $vta_presupuesto
     */
    static function execControlConflictos($fecha_desde = false, $fecha_hasta = false, $vta_presupuesto = false){
        
        $c = new Criterio();
        $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        
        if($fecha_desde){
            $c->add(VtaOrdenVenta::GEN_ATTR_CREADO, $fecha_desde.' 00:00:00', Criterio::MAYORIGUAL);
        }
        if($fecha_hasta){
            $c->add(VtaOrdenVenta::GEN_ATTR_CREADO, $fecha_hasta.' 23:59:59', Criterio::MENORIGUAL);
        }
        if($vta_presupuesto){
            $c->add(VtaPresupuesto::GEN_ATTR_ID, $vta_presupuesto->getId(), Criterio::IGUAL);
        }
        
        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaOrdenVentaTipoEstadoFacturacion::GEN_TABLA, VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID);
        $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();
        
        $p = new Paginador(1, 1);
        $p = null;
        
        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
        foreach($vta_orden_ventas as $vta_orden_venta){
            $vta_orden_venta->setControlVtaOrdenVentaConflicto();
        }
        
    }

    /**
     * Autor: Gustavo Romo.
     * Fecha: 11/10/2017 09:00 hs.
     * Metodo que resuelve el conflicto actualizando o manteniendo el importe.
     * @return Obj VtaOrdenVentaConflicto
     */
    public function setResolverConflicto($observacion, $actualizar = true) {
        $vta_orden_venta = $this->getVtaOrdenVenta();
        
        $user = UsUsuario::autenticado();
        if ($actualizar) {
            $importe_resuelto = $this->getImporteActualizado();
        } else {
            $importe_resuelto = $this->getImporteInicial();
        }

        $this->setImporteResuelto($importe_resuelto);
        $this->setFechaResolucion(Gral::getFechaActual());
        if($user){
            $this->setUsUsuarioResolucion($user->getId());
        }
        $this->setResuelto(1);
        $this->setObservacion($observacion);
        $this->setEstado(0);
        $this->save();
        
        // ----------------------------------------------------------
        // se marca la orden de venta como conflicto resuelto
        // ----------------------------------------------------------
        $vta_orden_venta->setImporteUnitario($importe_resuelto);
        $vta_orden_venta->setConflicto(0);
        $vta_orden_venta->save();
                    
        return $this;
    }
}
?>