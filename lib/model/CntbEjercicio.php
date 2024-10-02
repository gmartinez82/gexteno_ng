<?php

require_once "base/BCntbEjercicio.php";

class CntbEjercicio extends BCntbEjercicio {

    /**
     * Metodo que retorna el ejercicio contable actual para una empresa determinada
     */
    static function getCntbEjercicioActual($gral_empresa = false){
        
        if(!$gral_empresa){
            $gral_empresa = GralEmpresa::getOxId(1);
        }
        
        $c = new Criterio();
        $c->add(CntbEjercicio::GEN_ATTR_GRAL_EMPRESA_ID, $gral_empresa->getId(), Criterio::IGUAL);
        $c->add(CntbEjercicio::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(CntbEjercicio::GEN_TABLA);
        $c->addOrden(CntbEjercicio::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $p = new Paginador(1, 1);
        
        $cntb_ejercicios = CntbEjercicio::getCntbEjercicios($p, $c);
        foreach($cntb_ejercicios as $cntb_ejercicio){
            return $cntb_ejercicio;
        }
        return false;
    }
    
    /**
     * Metodo que permite registrar o editar un asiento contable para un ejercicio dado
     */
    public function setRegistrarAsiento($cntb_diario_asiento, $fecha, $cntb_tipo_asiento, $gral_actividad, $cntb_tipo_origen, $cntb_tipo_movimiento, $descripcion, $array_cuentas_debe, $array_cuentas_haber, $cntb_periodo = false, $observacion = '') {

        // ---------------------------------------------------------------------
        // se controla consistencia del asiento
        // ---------------------------------------------------------------------
        $arr_estado_control = $this->controlRegistrarAsiento($cntb_diario_asiento, $fecha, $cntb_tipo_asiento, $gral_actividad, $cntb_tipo_origen, $cntb_tipo_movimiento, $descripcion, $array_cuentas_debe, $array_cuentas_haber);
        if ($arr_estado_control['error'] == 1) {
            return $arr_estado_control;
        }
        // ---------------------------------------------------------------------
        $cntb_tipo_saldo_deudor = CntbTipoSaldo::getOxCodigo(CntbTipoSaldo::TIPO_DEUDOR);
        $cntb_tipo_saldo_acreedor = CntbTipoSaldo::getOxCodigo(CntbTipoSaldo::TIPO_ACREEDOR);

        // ---------------------------------------------------------------------
        // se inicializa o edita el asiento para el ejercicio
        // ---------------------------------------------------------------------
        if(!$cntb_diario_asiento){
            $cntb_diario_asiento = new CntbDiarioAsiento();
            
            // ---------------------------------------------------------------------        
            // al dar de alta un asiento se incrementa el numero de asiento
            // ---------------------------------------------------------------------        
            $numero = $this->getNumeroAsientoSiguiente();
        }else{
            $cntb_diario_asiento->deleteCntbDiarioAsientoCuentas();
            
            // ---------------------------------------------------------------------        
            // al editar un asiento se recupera el mismo numero de asiento
            // ---------------------------------------------------------------------        
            $numero = $cntb_diario_asiento->getNumero();
        }
        $cntb_diario_asiento->setCntbEjercicioId($this->getId());
        $cntb_diario_asiento->setCntbTipoAsientoId($cntb_tipo_asiento->getId());
        $cntb_diario_asiento->setCntbTipoOrigenId($cntb_tipo_origen->getId());
        $cntb_diario_asiento->setCntbTipoMovimientoId($cntb_tipo_movimiento->getId());
        $cntb_diario_asiento->setGralActividadId($gral_actividad->getId());
        $cntb_diario_asiento->setFecha($fecha);
        $cntb_diario_asiento->setDescripcion($descripcion);
        $cntb_diario_asiento->setObservacion($observacion);
        $cntb_diario_asiento->setEstado(1);
        $cntb_diario_asiento->setNumero($numero);
        $cntb_diario_asiento->setFecha($fecha);
        if($cntb_periodo){
            $cntb_diario_asiento->setCntbPeriodoId($cntb_periodo->getId());
        }
        $cntb_diario_asiento->save();

        //Gral::prr($cntb_diario_asiento);

        // ---------------------------------------------------------------------
        // se cargan cuentas del debe para el asiento
        // ---------------------------------------------------------------------
        foreach ($array_cuentas_debe as $array_cuenta) {

            $cntb_cuenta = $array_cuenta['cntb_cuenta'];
            $codigo_comprobante = $array_cuenta['codigo_comprobante'];
            $descripcion = $cntb_cuenta->getDescripcion();
            $importe = $array_cuenta['importe'];

            $importe_debe = $importe;
            $importe_haber = 0;
            $importe_saldo = 0; // ****************************************************************** FALTA CALCULAR EL SALDO

            $cntb_diario_asiento_cuenta = new CntbDiarioAsientoCuenta();
            $cntb_diario_asiento_cuenta->setCntbDiarioAsientoId($cntb_diario_asiento->getId());
            $cntb_diario_asiento_cuenta->setCntbCuentaId($cntb_cuenta->getId());
            $cntb_diario_asiento_cuenta->setCntbTipoSaldoId($cntb_tipo_saldo_deudor->getId());
            $cntb_diario_asiento_cuenta->setCodigoComprobante($codigo_comprobante);
            $cntb_diario_asiento_cuenta->setDescripcion($descripcion);
            $cntb_diario_asiento_cuenta->setImporteDebe($importe_debe);
            $cntb_diario_asiento_cuenta->setImporteHaber($importe_haber);
            $cntb_diario_asiento_cuenta->setImporteSaldo($importe_saldo);
            $cntb_diario_asiento_cuenta->setEstado(1);
            $cntb_diario_asiento_cuenta->save();

            //Gral::prr($cntb_diario_asiento_cuenta);
        }

        // ---------------------------------------------------------------------
        // se cargan cuentas del haber para el asiento
        // ---------------------------------------------------------------------
        foreach ($array_cuentas_haber as $array_cuenta) {

            $cntb_cuenta = $array_cuenta['cntb_cuenta'];
            $codigo_comprobante = $array_cuenta['codigo_comprobante'];
            $descripcion = $cntb_cuenta->getDescripcion();
            $importe = $array_cuenta['importe'];

            $importe_debe = 0;
            $importe_haber = $importe;
            $importe_saldo = 0; // ****************************************************************** FALTA CALCULAR EL SALDO

            $cntb_diario_asiento_cuenta = new CntbDiarioAsientoCuenta();
            $cntb_diario_asiento_cuenta->setCntbDiarioAsientoId($cntb_diario_asiento->getId());
            $cntb_diario_asiento_cuenta->setCntbCuentaId($cntb_cuenta->getId());
            $cntb_diario_asiento_cuenta->setCntbTipoSaldoId($cntb_tipo_saldo_acreedor->getId());
            $cntb_diario_asiento_cuenta->setCodigoComprobante($codigo_comprobante);
            $cntb_diario_asiento_cuenta->setDescripcion($descripcion);
            $cntb_diario_asiento_cuenta->setImporteDebe($importe_debe);
            $cntb_diario_asiento_cuenta->setImporteHaber($importe_haber);
            $cntb_diario_asiento_cuenta->setImporteSaldo($importe_saldo);
            $cntb_diario_asiento_cuenta->setEstado(1);
            $cntb_diario_asiento_cuenta->save();

            //Gral::prr($cntb_diario_asiento_cuenta);
        }

        $arr_estado_control['cntb_diario_asiento'] = $cntb_diario_asiento;
        return $arr_estado_control;
    }

    public function controlRegistrarAsiento($cntb_diario_asiento, $fecha, $cntb_tipo_asiento, $gral_actividad, $cntb_tipo_origen, $cntb_tipo_movimiento, $descripcionx, $array_cuentas_debe, $array_cuentas_haber) {
        $arr_estado_control['error'] = 0;

        // ---------------------------------------------------------------------
        // se controla consistencia de importes entre debe y haber
        // ---------------------------------------------------------------------
        $importe_debe = 0;
        $importe_haber = 0;

        foreach ($array_cuentas_debe as $array_cuenta) {
            $cntb_cuenta = $array_cuenta['cntb_cuenta'];
            $codigo_comprobante = $array_cuenta['codigo_comprobante'];
            $descripcion = $array_cuenta['descripcion'];
            $importe = $array_cuenta['importe'];

            $importe_debe+= $importe;
        }

        foreach ($array_cuentas_haber as $array_cuenta) {
            $cntb_cuenta = $array_cuenta['cntb_cuenta'];
            $codigo_comprobante = $array_cuenta['codigo_comprobante'];
            $descripcion = $array_cuenta['descripcion'];
            $importe = $array_cuenta['importe'];

            $importe_haber+= $importe;
        }

        //Gral::pr($importe_debe);
        //Gral::pr($importe_haber);

        if (number_format($importe_debe, 4) != number_format($importe_haber, 4)) {
            $arr_estado_control['error'] = 1;
            $arr_estado_control['errores'][] = array(
                'codigo' => 100,
                'descripcion' => 'Los importes del DEBE (' . $importe_debe . ') y HABER (' . $importe_haber . ') no coinciden (Diferencia ' . ($importe_debe - $importe_haber) . ')',
                'asiento_descripcion' => $descripcionx,
            );
        }

        return $arr_estado_control;
    }

    public function getNumeroAsientoSiguiente() {
        $c = new Criterio();
        $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_EJERCICIO_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
        $c->addOrden(CntbDiarioAsiento::GEN_ATTR_NUMERO, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $cntb_diario_asientos = CntbDiarioAsiento::getCntbDiarioAsientos($p, $c);
        foreach ($cntb_diario_asientos as $cntb_diario_asiento) {

            $ultimo_numero = $cntb_diario_asiento->getNumero();
            $proximo_numero = (int) $ultimo_numero + 1;

            return $proximo_numero;
        }
        return 1;
    }

    public function getCntbDiarioAsientosOrdenadosParaDiario($fecha_desde = false, $fecha_hasta = false) {
        $c = new Criterio();
        $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_EJERCICIO_ID, $this->getId(), Criterio::IGUAL);
        if ($fecha_desde) {
            $c->add(CntbDiarioAsiento::GEN_ATTR_FECHA, $fecha_desde, Criterio::MAYORIGUAL);
        }
        if ($fecha_hasta) {
            $c->add(CntbDiarioAsiento::GEN_ATTR_FECHA, $fecha_hasta, Criterio::MENORIGUAL);
        }
        $c->addTabla(CntbDiarioAsiento::GEN_TABLA);
        $c->addOrden(CntbDiarioAsiento::GEN_ATTR_FECHA, Criterio::_ASC);
        $c->addOrden(CntbDiarioAsiento::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $p = null;

        $cntb_diario_asientos = CntbDiarioAsiento::getCntbDiarioAsientos($p, $c);
        //Gral::prr($cntb_diario_asientos);
        return $cntb_diario_asientos;
    }

    public function getCntbDiarioAsientoCuentasOrdenadosParaMayor($cntb_cuenta, $fecha_desde, $fecha_hasta) {
        $c = new Criterio();
        $c->addDistinct(false);
        $c->add(CntbDiarioAsiento::GEN_ATTR_CNTB_EJERCICIO_ID, $this->getId(), Criterio::IGUAL);
        $c->add(CntbDiarioAsientoCuenta::GEN_ATTR_CNTB_CUENTA_ID, $cntb_cuenta->getId(), Criterio::IGUAL);
        if ($fecha_desde) {
            $c->add(CntbDiarioAsiento::GEN_ATTR_FECHA, $fecha_desde, Criterio::MAYORIGUAL);
        }
        if ($fecha_hasta) {
            $c->add(CntbDiarioAsiento::GEN_ATTR_FECHA, $fecha_hasta, Criterio::MENORIGUAL);
        }
        $c->addTabla(CntbDiarioAsientoCuenta::GEN_TABLA);
        $c->addRealJoin(CntbDiarioAsiento::GEN_TABLA, CntbDiarioAsiento::GEN_ATTR_ID, CntbDiarioAsientoCuenta::GEN_ATTR_CNTB_DIARIO_ASIENTO_ID);
        $c->addRealJoin(CntbCuenta::GEN_TABLA, CntbCuenta::GEN_ATTR_ID, CntbDiarioAsientoCuenta::GEN_ATTR_CNTB_CUENTA_ID);
        $c->addOrden(CntbDiarioAsiento::GEN_ATTR_FECHA, Criterio::_ASC);
        $c->addOrden(CntbDiarioAsiento::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $p = null;

        $cntb_diario_asiento_cuentas = CntbDiarioAsientoCuenta::getCntbDiarioAsientoCuentas($p, $c);
        //Gral::prr($cntb_diario_asiento_cuentas);
        return $cntb_diario_asiento_cuentas;        
    }

}

?>