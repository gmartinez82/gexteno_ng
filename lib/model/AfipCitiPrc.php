<?php

require_once "base/BAfipCitiPrc.php";

class AfipCitiPrc extends BAfipCitiPrc {

    //para controlar si ya hay creado para los datos del parametro
    static function getAfipCitiPrcInicializado($gral_empresa_id, $gral_mes_id, $anio) {
        $arr_cri = array(
            array('campo' => 'gral_empresa_id', 'valor' => $gral_empresa_id),
            array('campo' => 'gral_mes_id', 'valor' => $gral_mes_id),
            array('campo' => 'anio', 'valor' => $anio)
        );

        $afip_citi_prc = AfipCitiPrc::getOxArray($arr_cri);
        return $afip_citi_prc;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 13/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 15/09/2018
     */
    static function setInicializarAfipCitiPrc($gral_empresa_id, $gral_mes_id, $anio) {
        //despues empezar el proceso de la generacion de datos. Ya habia comenzado a hacer algo  
        //inicializar un prc (set campos)
        $gral_empresa = GralEmpresa::getOxId($gral_empresa_id);
        $gral_mes = GralMes::getOxId($gral_mes_id);

        $afip_citi_prc = new AfipCitiPrc();
        $descripcion = "Proceso AFIP CITI " . $gral_empresa->getDescripcion() . " - " . $gral_mes->getDescripcion() . "/" . $anio;
        $afip_citi_prc->setGralEmpresaId($gral_empresa_id);
        $afip_citi_prc->setGralMesId($gral_mes_id);
        $afip_citi_prc->setAnio($anio);
        $afip_citi_prc->setDescripcion($descripcion);
        $afip_citi_prc->setEstado(1);
        $afip_citi_prc->save();

        $afip_citi_cabecera = $afip_citi_prc->setInicializarAfipCitiCabecera($observacion = 'Inicializacion');
        $afip_citi_prc->setInicializarAfipCitiVentasCbte($afip_citi_cabecera);
        $afip_citi_prc->setInicializarAfipCitiVentasAlicuotas($afip_citi_cabecera);
        $afip_citi_prc->setInicializarAfipCitiComprasCbte($afip_citi_cabecera);
        $afip_citi_prc->setInicializarAfipCitiComprasAlicuotas($afip_citi_cabecera);
        $afip_citi_prc->setInicializarAfipCitiComprasImportaciones($afip_citi_cabecera);
    }

    public function setRenegerarAfipCitiPrc($observacion, $secuencia) {
        $afip_citi_cabecera = $this->setInicializarAfipCitiCabecera($observacion, $secuencia);
        $this->setInicializarAfipCitiVentasCbte($afip_citi_cabecera);
        $this->setInicializarAfipCitiVentasAlicuotas($afip_citi_cabecera);
        $this->setInicializarAfipCitiComprasCbte($afip_citi_cabecera);
        $this->setInicializarAfipCitiComprasAlicuotas($afip_citi_cabecera);
        $this->setInicializarAfipCitiComprasImportaciones($afip_citi_cabecera);
    }

    public function getAfipCitiCabeceraActual() {
        $array = array(
            array("campo" => "afip_citi_prc_id", "valor" => $this->getId()),
            array("campo" => "actual", "valor" => 1)
        );
        $afip_citi_cabecera = AfipCitiCabecera::getOxArray($array);
        return $afip_citi_cabecera;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 13/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 15/09/2018
     * @modificado 21/09/2018
     */
    public function setInicializarAfipCitiCabecera($observacion, $secuencia = false) {
        $gral_empresa = $this->getGralEmpresa();
        $gral_mes = $this->getGralMes();
        $anio = $this->getAnio();

        $gral_mes_codigo_numero = $gral_mes->getCodigoNumero();

        //*** OBTENER FECHA DESDE Y HASTA ***
        //La cantidad de dias del mes
        $dias_del_mes = cal_days_in_month(CAL_GREGORIAN, $gral_mes_codigo_numero, $this->getAnio());

        //se arman las fechas
        $fecha_desde = "01/" . $gral_mes_codigo_numero . "/" . $this->getAnio();
        $fecha_hasta = $dias_del_mes . "/" . $gral_mes_codigo_numero . "/" . $this->getAnio();

        $fecha_desde = Gral::getFechaToDb($fecha_desde);
        $fecha_hasta = Gral::getFechaToDb($fecha_hasta);
        //*** OBTENER FECHA DESDE Y HASTA ***
        //$fecha_desde = '2018-09-12';
        //$fecha_hasta = '2018-09-12';

        $vta_comprobantes = VtaComprobante::getVtaComprobantes($gral_empresa->getId(), $fecha_desde = false, $fecha_hasta = false, $gral_mes->getId(), $anio);
        $pde_comprobantes = PdeComprobante::getPdeComprobantes($gral_empresa->getId(), $fecha_desde = false, $fecha_hasta = false, $gral_mes->getId(), $anio);
        $pde_comprobantes_importaciones = PdeComprobante::getPdeComprobantes($gral_empresa->getId(), $fecha_desde = false, $fecha_hasta = false, $gral_mes->getId(), $anio, $prv_proveedor_id = false, $incluir_recibos = false, $orden = 'DESC', $solo_importaciones = true);

        $cantidad_comprobantes = count($vta_comprobantes) + count($pde_comprobantes);
        ($cantidad_comprobantes > 0) ? $afip_citi_sin_movimiento = "N" : $afip_citi_sin_movimiento = "S";

        $afip_citi_cabecera_actual = $this->getAfipCitiCabeceraActual();

        // se actualizan los campos actual de todos los estados del presupuesto
        $inicial = 1;
        foreach ($this->getAfipCitiCabeceras() as $afip_citi_cabecera) {
            $afip_citi_cabecera->setActual(0);
            $afip_citi_cabecera->save();
            $inicial = 0;
        }

        $afip_citi_cabecera = new AfipCitiCabecera();
        $afip_citi_cabecera->setAfipCitiPrcId($this->getId());


        //if($afip_citi_cabecera_actual)
        if ($secuencia) {
            $orden = $secuencia; //$afip_citi_cabecera_actual->getOrden() + 1;
        } else {
            $orden = 0;
        }


        $afip_citi_cuit_informante = $gral_empresa->getCuit();
        $afip_citi_periodo = $this->getAnio() . $gral_mes->getCodigoNumero();
        $afip_citi_secuencia = str_pad($orden, 2, "0", STR_PAD_LEFT); //"00";
        $afip_citi_prorratear_cf_computable = "N"; //SI (S) / NO (N)
        //agregar logica. Si afip_citi_prorratear_cf_computable es S entonces este campo es 1. Si es N este campo es vacio
        $afip_citi_cf_computable_o_comprobante = " "; //Global (1)  Por Comprobante (2)
        //agregar logica. Si afip_citi_cf_computable_o_comprobante es 1 entonces...si no es 1 va 0
        $afip_citi_importe_cf_computable_global = "0.00";
        $afip_citi_importe_cf_computable_asignacion_directa = "0.00";
        $afip_citi_importe_cf_computable_prorrateo = "0.00";
        $afip_citi_importe_cf_no_computable_global = "0.00";
        $afip_citi_importe_cf_contribuyente_ss_y_oc = "0.00";
        $afip_citi_importe_cf_computable_ss_y_oc = "0.00";

        $afip_citi_importe_cf_computable_global = round($afip_citi_importe_cf_computable_global, 2);
        $afip_citi_importe_cf_computable_global = Gral::completar_decimales($afip_citi_importe_cf_computable_global);

        $afip_citi_importe_cf_computable_asignacion_directa = round($afip_citi_importe_cf_computable_asignacion_directa, 2);
        $afip_citi_importe_cf_computable_asignacion_directa = Gral::completar_decimales($afip_citi_importe_cf_computable_asignacion_directa);

        $afip_citi_importe_cf_computable_prorrateo = round($afip_citi_importe_cf_computable_prorrateo, 2);
        $afip_citi_importe_cf_computable_prorrateo = Gral::completar_decimales($afip_citi_importe_cf_computable_prorrateo);

        $afip_citi_importe_cf_no_computable_global = round($afip_citi_importe_cf_no_computable_global, 2);
        $afip_citi_importe_cf_no_computable_global = Gral::completar_decimales($afip_citi_importe_cf_no_computable_global);

        $afip_citi_importe_cf_contribuyente_ss_y_oc = round($afip_citi_importe_cf_contribuyente_ss_y_oc, 2);
        $afip_citi_importe_cf_contribuyente_ss_y_oc = Gral::completar_decimales($afip_citi_importe_cf_contribuyente_ss_y_oc);

        $afip_citi_importe_cf_computable_ss_y_oc = round($afip_citi_importe_cf_computable_ss_y_oc, 2);
        $afip_citi_importe_cf_computable_ss_y_oc = Gral::completar_decimales($afip_citi_importe_cf_computable_ss_y_oc);


        //quitar punto a campos de importes 
        $afip_citi_importe_cf_computable_global = str_replace(".", '', $afip_citi_importe_cf_computable_global);
        $afip_citi_importe_cf_computable_asignacion_directa = str_replace(".", '', $afip_citi_importe_cf_computable_asignacion_directa);
        $afip_citi_importe_cf_computable_prorrateo = str_replace(".", '', $afip_citi_importe_cf_computable_prorrateo);
        $afip_citi_importe_cf_no_computable_global = str_replace(".", '', $afip_citi_importe_cf_no_computable_global);
        $afip_citi_importe_cf_contribuyente_ss_y_oc = str_replace(".", '', $afip_citi_importe_cf_contribuyente_ss_y_oc);
        $afip_citi_importe_cf_computable_ss_y_oc = str_replace(".", '', $afip_citi_importe_cf_computable_ss_y_oc);

        //rellenar campos
        $afip_citi_cuit_informante = str_pad($afip_citi_cuit_informante, 11, " ", STR_PAD_RIGHT);
        $afip_citi_periodo = str_pad($afip_citi_periodo, 6, " ", STR_PAD_RIGHT);
        $afip_citi_secuencia = str_pad($afip_citi_secuencia, 2, " ", STR_PAD_RIGHT);
        $afip_citi_sin_movimiento = str_pad($afip_citi_sin_movimiento, 1, " ", STR_PAD_RIGHT);
        $afip_citi_prorratear_cf_computable = str_pad($afip_citi_prorratear_cf_computable, 1, " ", STR_PAD_RIGHT);
        $afip_citi_cf_computable_o_comprobante = str_pad($afip_citi_cf_computable_o_comprobante, 1, " ", STR_PAD_RIGHT);
        $afip_citi_importe_cf_computable_global = str_pad($afip_citi_importe_cf_computable_global, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_cf_computable_asignacion_directa = str_pad($afip_citi_importe_cf_computable_asignacion_directa, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_cf_computable_prorrateo = str_pad($afip_citi_importe_cf_computable_prorrateo, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_cf_no_computable_global = str_pad($afip_citi_importe_cf_no_computable_global, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_cf_contribuyente_ss_y_oc = str_pad($afip_citi_importe_cf_contribuyente_ss_y_oc, 15, "0", STR_PAD_LEFT);
        $afip_citi_importe_cf_computable_ss_y_oc = str_pad($afip_citi_importe_cf_computable_ss_y_oc, 15, "0", STR_PAD_LEFT);

        //cortar todos los campos al tamaño requerido
        $afip_citi_cuit_informante = substr($afip_citi_cuit_informante, 0, 11);
        $afip_citi_periodo = substr($afip_citi_periodo, 0, 6);
        $afip_citi_secuencia = substr($afip_citi_secuencia, 0, 2);
        $afip_citi_sin_movimiento = substr($afip_citi_sin_movimiento, 0, 1);
        $afip_citi_prorratear_cf_computable = substr($afip_citi_prorratear_cf_computable, 0, 1);
        $afip_citi_cf_computable_o_comprobante = substr($afip_citi_cf_computable_o_comprobante, 0, 1);
        $afip_citi_importe_cf_computable_global = substr($afip_citi_importe_cf_computable_global, 0, 15);
        $afip_citi_importe_cf_computable_asignacion_directa = substr($afip_citi_importe_cf_computable_asignacion_directa, 0, 15);
        $afip_citi_importe_cf_computable_prorrateo = substr($afip_citi_importe_cf_computable_prorrateo, 0, 15);
        $afip_citi_importe_cf_no_computable_global = substr($afip_citi_importe_cf_no_computable_global, 0, 15);
        $afip_citi_importe_cf_contribuyente_ss_y_oc = substr($afip_citi_importe_cf_contribuyente_ss_y_oc, 0, 15);
        $afip_citi_importe_cf_computable_ss_y_oc = substr($afip_citi_importe_cf_computable_ss_y_oc, 0, 15);

        //set campos
        $afip_citi_cabecera->setInicial($inicial);
        $afip_citi_cabecera->setActual(1);
        $afip_citi_cabecera->setAfipCitiCuitInformante($afip_citi_cuit_informante);
        $afip_citi_cabecera->setAfipCitiPeriodo($afip_citi_periodo);
        $afip_citi_cabecera->setAfipCitiSecuencia($afip_citi_secuencia);
        $afip_citi_cabecera->setAfipCitiSinMovimiento($afip_citi_sin_movimiento);
        $afip_citi_cabecera->setAfipCitiProrratearCfComputable($afip_citi_prorratear_cf_computable);
        $afip_citi_cabecera->setAfipCitiCfComputableOComprobante($afip_citi_cf_computable_o_comprobante);
        $afip_citi_cabecera->setAfipCitiImporteCfComputableGlobal($afip_citi_importe_cf_computable_global);
        $afip_citi_cabecera->setAfipCitiImporteCfComputableAsignacionDirecta($afip_citi_importe_cf_computable_asignacion_directa);
        $afip_citi_cabecera->setAfipCitiImporteCfComputableProrrateo($afip_citi_importe_cf_computable_prorrateo);
        $afip_citi_cabecera->setAfipCitiImporteCfNoComputableGlobal($afip_citi_importe_cf_no_computable_global);
        $afip_citi_cabecera->setAfipCitiImporteCfContribuyenteSsYOc($afip_citi_importe_cf_contribuyente_ss_y_oc);
        $afip_citi_cabecera->setAfipCitiImporteCfComputableSsYOc($afip_citi_importe_cf_computable_ss_y_oc);
        $afip_citi_cabecera->setObservacion($observacion);
        $afip_citi_cabecera->setOrden($orden);
        $afip_citi_cabecera->setEstado(1);
        $afip_citi_cabecera->save();

        $afip_citi_cabecera->setVtaComprobantes($vta_comprobantes);
        $afip_citi_cabecera->setPdeComprobantes($pde_comprobantes);
        $afip_citi_cabecera->setPdeComprobantesImportaciones($pde_comprobantes_importaciones);
        //Gral::prr($afip_citi_cabecera);
        return $afip_citi_cabecera;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 15/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 18/09/2018
     * @modificado 19/09/2018
     * @modificado 20/09/2018
     * @modificado 21/09/2018
     */
    public function setInicializarAfipCitiVentasCbte($afip_citi_cabecera) {

        $vta_comprobantes = $afip_citi_cabecera->getVtaComprobantes();

        foreach ($vta_comprobantes as $vta_comprobante) {
            //Gral::prr($vta_comprobante);
            $arr_iva_full = $vta_comprobante->getArrIvaComprobanteFull();
            $arr_iva_full_para_citi = $vta_comprobante->getArrIvaParaCitiComprobanteFull();
            $arr_tributo_full = $vta_comprobante->getArrTributoComprobanteFull();

            $cantidad_iva_full = (count($arr_iva_full_para_citi) == 0) ? 1 : count($arr_iva_full_para_citi);

            $afip_citi_ventas_cbte = new AfipCitiVentasCbte();
            $afip_citi_ventas_cbte->setAfipCitiPrcId($this->getId());
            $afip_citi_ventas_cbte->setAfipCitiCabeceraId($afip_citi_cabecera->getId());

            $ws_fe_param_tipo_comprobante = $vta_comprobante->getWsFeParamTipoComprobante();
            //$vta_punto_venta              = $vta_comprobante->getVtaPuntoVenta();
            //$ws_fe_param_punto_venta      = $vta_punto_venta->getWsFeParamPuntoVentaXVtaPuntoVentaWsFeParamPuntoVenta();

            $gral_tipo_documento = $vta_comprobante->getGralTipoDocumento();
            if ($gral_tipo_documento->getId() != 'null') {
                $ws_fe_param_tipo_documento = $gral_tipo_documento->getWsFeParamTipoDocumentoXGralTipoDocumentoWsFeParamTipoDocumento();
                $tipo_documento_codigo_afip = $ws_fe_param_tipo_documento->getCodigoAfip();
            } else {
                $tipo_documento_codigo_afip = "99";
            }

            $ws_fe_param_tipo_moneda = WsFeParamTipoMoneda::getOxCodigoAfip("PES"); //pesos

            $afip_citi_fecha_emision = $vta_comprobante->getFechaEmision();
            $arr_fecha_emision = explode('-', $afip_citi_fecha_emision); //separa la fecha

            $afip_citi_fecha_comprobante = $arr_fecha_emision[0] . $arr_fecha_emision[1] . $arr_fecha_emision[2];
            $afip_citi_tipo_comprobante = $ws_fe_param_tipo_comprobante->getCodigoAfip();

            $afip_citi_punto_venta = $vta_comprobante->getNumeroPuntoVenta();
            $afip_citi_numero_comprobante = $vta_comprobante->getNumeroComprobante();
            $afip_citi_numero_comprobante_hasta = $vta_comprobante->getNumeroComprobante();
            $afip_citi_codigo_documento_comprador = $tipo_documento_codigo_afip;
            $afip_citi_numero_identificacion_comprador = $vta_comprobante->getPersonaDocumento();
            $afip_citi_denominacion_comprador = $vta_comprobante->getAfipCitiVentasDenominacionComprador();

            $afip_citi_importe_total_operacion = $vta_comprobante->getAfipCitiVentasCbteImporteTotalOperacion();
            $afip_citi_importe_total_conceptos = $vta_comprobante->getAfipCitiVentasCbteImporteTotalConceptos();
            $afip_citi_importe_percepcion_no_categorizados = $vta_comprobante->getAfipCitiVentasCbteImportePercepcionNoCategorizados();
            $afip_citi_importe_operaciones_exentas = $vta_comprobante->getAfipCitiVentasCbteImporteOperacionesExentas();

            $afip_citi_importe_percepciones_impuestos_nacionales = $vta_comprobante->getAfipCitiVentasCbteImportePercepcionesImpuestosNacionales($arr_tributo_full);
            $afip_citi_importe_percepciones_ingresos_brutos = $vta_comprobante->getAfipCitiVentasCbteImportePercepcionesIngresosBrutos($arr_tributo_full);
            $afip_citi_importe_percepciones_impuestos_municipales = $vta_comprobante->getAfipCitiVentasCbteImportePercepcionesImpuestosMunicipales($arr_tributo_full);
            $afip_citi_importe_impuestos_internos = $vta_comprobante->getAfipCitiVentasCbteImporteImpuestosInternos($arr_tributo_full);

            $afip_citi_codigo_moneda = $ws_fe_param_tipo_moneda->getCodigoAfip();
            $afip_citi_tipo_cambio = "0001000000";
            $afip_citi_cantidad_alicuotas_iva = $cantidad_iva_full;
            $afip_citi_codigo_operacion = (count($arr_iva_full_para_citi) == 0) ? "N" : " "; // N: No Gravado
            $afip_citi_importe_otros_tributos = $vta_comprobante->getAfipCitiVentasCbteImporteOtrosTributos($arr_tributo_full);
            $afip_citi_fecha_vencimiento_pago = '';

            $afip_citi_numero_identificacion_comprador = str_replace("-", '', $afip_citi_numero_identificacion_comprador);

            //rellenar
            $afip_citi_fecha_comprobante = str_pad($afip_citi_fecha_comprobante, 8, "0", STR_PAD_LEFT);
            $afip_citi_tipo_comprobante = str_pad($afip_citi_tipo_comprobante, 3, "0", STR_PAD_LEFT);
            $afip_citi_punto_venta = str_pad($afip_citi_punto_venta, 5, "0", STR_PAD_LEFT);
            $afip_citi_numero_comprobante = str_pad($afip_citi_numero_comprobante, 20, "0", STR_PAD_LEFT);
            $afip_citi_numero_comprobante_hasta = str_pad($afip_citi_numero_comprobante_hasta, 20, "0", STR_PAD_LEFT);
            $afip_citi_codigo_documento_comprador = str_pad($afip_citi_codigo_documento_comprador, 2, "0", STR_PAD_LEFT);
            $afip_citi_numero_identificacion_comprador = str_pad($afip_citi_numero_identificacion_comprador, 20, "0", STR_PAD_LEFT); // es alfanumerico pero lleva ceros a la izquierda (ver excel)
            $afip_citi_codigo_moneda = str_pad($afip_citi_codigo_moneda, 3, " ", STR_PAD_RIGHT);
            $afip_citi_tipo_cambio = str_pad($afip_citi_tipo_cambio, 10, "0", STR_PAD_LEFT);
            $afip_citi_cantidad_alicuotas_iva = str_pad($afip_citi_cantidad_alicuotas_iva, 1, "0", STR_PAD_LEFT);
            $afip_citi_codigo_operacion = str_pad($afip_citi_codigo_operacion, 1, " ", STR_PAD_RIGHT); // alfabetico de 1 caracter
            $afip_citi_fecha_vencimiento_pago = str_pad($afip_citi_fecha_vencimiento_pago, 8, "0", STR_PAD_LEFT);

            //cortar todos los campos al tamaño requerido
            $afip_citi_fecha_comprobante = substr($afip_citi_fecha_comprobante, 0, 8);
            $afip_citi_tipo_comprobante = substr($afip_citi_tipo_comprobante, 0, 3);
            $afip_citi_punto_venta = substr($afip_citi_punto_venta, 0, 5);
            $afip_citi_numero_comprobante = substr($afip_citi_numero_comprobante, 0, 20);
            $afip_citi_numero_comprobante_hasta = substr($afip_citi_numero_comprobante_hasta, 0, 20);
            $afip_citi_codigo_documento_comprador = substr($afip_citi_codigo_documento_comprador, 0, 2);
            $afip_citi_numero_identificacion_comprador = substr($afip_citi_numero_identificacion_comprador, 0, 20);
            $afip_citi_codigo_moneda = substr($afip_citi_codigo_moneda, 0, 3);
            $afip_citi_tipo_cambio = substr($afip_citi_tipo_cambio, 0, 10);
            $afip_citi_cantidad_alicuotas_iva = substr($afip_citi_cantidad_alicuotas_iva, 0, 1);
            $afip_citi_codigo_operacion = substr($afip_citi_codigo_operacion, 0, 1);
            $afip_citi_fecha_vencimiento_pago = substr($afip_citi_fecha_vencimiento_pago, 0, 8);

            //set campos
            $afip_citi_ventas_cbte->setAfipCitiFechaComprobante($afip_citi_fecha_comprobante);
            $afip_citi_ventas_cbte->setAfipCitiTipoComprobante($afip_citi_tipo_comprobante);
            $afip_citi_ventas_cbte->setAfipCitiPuntoVenta($afip_citi_punto_venta);
            $afip_citi_ventas_cbte->setAfipCitiNumeroComprobante($afip_citi_numero_comprobante);
            $afip_citi_ventas_cbte->setAfipCitiNumeroComprobanteHasta($afip_citi_numero_comprobante_hasta);
            $afip_citi_ventas_cbte->setAfipCitiCodigoDocumentoComprador($afip_citi_codigo_documento_comprador);
            $afip_citi_ventas_cbte->setAfipCitiNumeroIdentificacionComprador($afip_citi_numero_identificacion_comprador);
            $afip_citi_ventas_cbte->setAfipCitiDenominacionComprador($afip_citi_denominacion_comprador);
            $afip_citi_ventas_cbte->setAfipCitiImporteTotalOperacion($afip_citi_importe_total_operacion);
            $afip_citi_ventas_cbte->setAfipCitiImporteTotalConceptos($afip_citi_importe_total_conceptos);
            $afip_citi_ventas_cbte->setAfipCitiImportePercepcionNoCategorizados($afip_citi_importe_percepcion_no_categorizados);
            $afip_citi_ventas_cbte->setAfipCitiImporteOperacionesExentas($afip_citi_importe_operaciones_exentas);
            $afip_citi_ventas_cbte->setAfipCitiImportePercepcionesImpuestosNacionales($afip_citi_importe_percepciones_impuestos_nacionales);
            $afip_citi_ventas_cbte->setAfipCitiImportePercepcionesIngresosBrutos($afip_citi_importe_percepciones_ingresos_brutos);
            $afip_citi_ventas_cbte->setAfipCitiImportePercepcionesImpuestosMunicipales($afip_citi_importe_percepciones_impuestos_municipales);
            $afip_citi_ventas_cbte->setAfipCitiImporteImpuestosInternos($afip_citi_importe_impuestos_internos);
            $afip_citi_ventas_cbte->setAfipCitiCodigoMoneda($afip_citi_codigo_moneda);
            $afip_citi_ventas_cbte->setAfipCitiTipoCambio($afip_citi_tipo_cambio);
            $afip_citi_ventas_cbte->setAfipCitiCantidadAlicuotasIva($afip_citi_cantidad_alicuotas_iva);
            $afip_citi_ventas_cbte->setAfipCitiCodigoOperacion($afip_citi_codigo_operacion);
            $afip_citi_ventas_cbte->setAfipCitiImporteOtrosTributos($afip_citi_importe_otros_tributos);
            $afip_citi_ventas_cbte->setAfipCitiFechaVencimientoPago($afip_citi_fecha_vencimiento_pago);
            $afip_citi_ventas_cbte->setVtaComprobante($vta_comprobante);
            $afip_citi_ventas_cbte->setEstado(1);
            $afip_citi_ventas_cbte->save();
        }

        return $afip_citi_ventas_cbte;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 20/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 21/09/2018
     */
    public function setInicializarAfipCitiVentasAlicuotas($afip_citi_cabecera) {
        $vta_comprobantes = $afip_citi_cabecera->getVtaComprobantes();
        foreach ($vta_comprobantes as $vta_comprobante) {
            $ws_fe_param_tipo_comprobante = $vta_comprobante->getWsFeParamTipoComprobante();
            $arr_iva_full_para_citi = $vta_comprobante->getArrIvaParaCitiComprobanteFull();

            $afip_citi_tipo_comprobante = $ws_fe_param_tipo_comprobante->getCodigoAfip();
            $afip_citi_punto_venta = $vta_comprobante->getNumeroPuntoVenta();
            $afip_citi_numero_comprobante = $vta_comprobante->getNumeroComprobante();

            // -----------------------------------------------------------------
            // en el caso de que no tenga alicuotas gravadas, se agrega 1 con 
            // - Base Imponible: 0.00
            // - IVA 0% (Codigo AFIP 003)
            // - Impuesto Liquidado: 0.00
            // -----------------------------------------------------------------
            if (count($arr_iva_full_para_citi) == 0) {

                $gral_tipo_iva_cero = GralTipoIva::getOxCodigo(GralTipoIva::TIPO_0);

                $arr_iva_full_para_citi[$gral_tipo_iva_cero->getCodigo()] = array(
                    'id' => $gral_tipo_iva_cero->getId(),
                    'descripcion' => $gral_tipo_iva_cero->getDescripcion(),
                    'codigo' => $gral_tipo_iva_cero->getCodigo(),
                    'base_imponible' => 0,
                    'importe_iva' => 0,
                );
            }
            // -----------------------------------------------------------------

            foreach ($arr_iva_full_para_citi as $i => $iva_full) {
                $afip_citi_ventas_alicuotas = new AfipCitiVentasAlicuotas();
                $afip_citi_ventas_alicuotas->setAfipCitiPrcId($this->getId());
                $afip_citi_ventas_alicuotas->setAfipCitiCabeceraId($afip_citi_cabecera->getId());

                $gral_iva = GralTipoIva::getOxCodigo($i);
                $ws_fe_param_tipo_iva = $gral_iva->getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva();
                $afip_citi_importe_neto_gravado = $iva_full['base_imponible'];
                $afip_citi_alicuota_iva = $ws_fe_param_tipo_iva->getCodigoAfip();
                $afip_citi_importe_impuesto_liquidado = $iva_full['importe_iva'];

                $afip_citi_importe_neto_gravado = round($afip_citi_importe_neto_gravado, 2);
                $afip_citi_importe_neto_gravado = Gral::completar_decimales($afip_citi_importe_neto_gravado);

                $afip_citi_importe_impuesto_liquidado = round($afip_citi_importe_impuesto_liquidado, 2);
                $afip_citi_importe_impuesto_liquidado = Gral::completar_decimales($afip_citi_importe_impuesto_liquidado);

                //quitar punto a campos de importes 
                $afip_citi_importe_neto_gravado = str_replace(".", '', $afip_citi_importe_neto_gravado);
                $afip_citi_importe_impuesto_liquidado = str_replace(".", '', $afip_citi_importe_impuesto_liquidado);

                //rellenar campos
                $afip_citi_tipo_comprobante = str_pad($afip_citi_tipo_comprobante, 3, "0", STR_PAD_LEFT);
                $afip_citi_punto_venta = str_pad($afip_citi_punto_venta, 5, "0", STR_PAD_LEFT);
                $afip_citi_numero_comprobante = str_pad($afip_citi_numero_comprobante, 20, "0", STR_PAD_LEFT);
                $afip_citi_importe_neto_gravado = str_pad($afip_citi_importe_neto_gravado, 15, "0", STR_PAD_LEFT);
                $afip_citi_alicuota_iva = str_pad($afip_citi_alicuota_iva, 4, "0", STR_PAD_LEFT);
                $afip_citi_importe_impuesto_liquidado = str_pad($afip_citi_importe_impuesto_liquidado, 15, "0", STR_PAD_LEFT);

                //cortar todos los campos al tamaño requerido
                $afip_citi_tipo_comprobante = substr($afip_citi_tipo_comprobante, 0, 3);
                $afip_citi_punto_venta = substr($afip_citi_punto_venta, 0, 5);
                $afip_citi_numero_comprobante = substr($afip_citi_numero_comprobante, 0, 20);
                $afip_citi_importe_neto_gravado = substr($afip_citi_importe_neto_gravado, 0, 15);
                $afip_citi_alicuota_iva = substr($afip_citi_alicuota_iva, 0, 4);
                $afip_citi_importe_impuesto_liquidado = substr($afip_citi_importe_impuesto_liquidado, 0, 15);

                //set campos
                $afip_citi_ventas_alicuotas->setAfipCitiTipoComprobante($afip_citi_tipo_comprobante);
                $afip_citi_ventas_alicuotas->setAfipCitiPuntoVenta($afip_citi_punto_venta);
                $afip_citi_ventas_alicuotas->setAfipCitiNumeroComprobante($afip_citi_numero_comprobante);
                $afip_citi_ventas_alicuotas->setAfipCitiImporteNetoGravado($afip_citi_importe_neto_gravado);
                $afip_citi_ventas_alicuotas->setAfipCitiAlicuotaIva($afip_citi_alicuota_iva);
                $afip_citi_ventas_alicuotas->setAfipCitiImporteImpuestoLiquidado($afip_citi_importe_impuesto_liquidado);
                $afip_citi_ventas_alicuotas->setVtaComprobante($vta_comprobante);
                $afip_citi_ventas_alicuotas->setEstado(1);
                $afip_citi_ventas_alicuotas->save();
            }
        }
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 21/09/2018
     * @modificado_por Esteban Martinez
     * @modificado 26/09/2018
     */
    public function setInicializarAfipCitiComprasCbte($afip_citi_cabecera) {
        $pde_comprobantes = $afip_citi_cabecera->getPdeComprobantes();
        foreach ($pde_comprobantes as $pde_comprobante) {
            $arr_iva_full = $pde_comprobante->getArrIvaComprobanteFull();
            $arr_iva_full_para_citi = $pde_comprobante->getArrIvaParaCitiComprobanteFull();
            $arr_tributo_full = $pde_comprobante->getArrTributoComprobanteFull();

            $cantidad_iva_full = (count($arr_iva_full_para_citi) == 0) ? 1 : count($arr_iva_full_para_citi);

            $tipo_comprobante_codigo = $pde_comprobante->getTipoComprobanteCodigo();
            switch ($tipo_comprobante_codigo) {
                case PdeTipoFactura::TIPO_FACTURA_B:
                case PdeTipoFactura::TIPO_FACTURA_C:
                case PdeTipoNotaCredito::TIPO_NOTA_CREDITO_B:
                case PdeTipoNotaCredito::TIPO_NOTA_CREDITO_C:
                case PdeTipoNotaDebito::TIPO_NOTA_DEBITO_B:
                case PdeTipoNotaDebito::TIPO_NOTA_DEBITO_C:
                    $cantidad_iva_full = 0; // excepcion para este tipo de comprobantes
                    break;
            }

            $afip_citi_compras_cbte = new AfipCitiComprasCbte();
            $afip_citi_compras_cbte->setAfipCitiPrcId($this->getId());
            $afip_citi_compras_cbte->setAfipCitiCabeceraId($afip_citi_cabecera->getId());

            $ws_fe_param_tipo_comprobante = $pde_comprobante->getWsFeParamTipoComprobante();
            $tipo_documento_codigo_afip = "80"; //cuit, porque en los PDE no hay tipo de documento
            $ws_fe_param_tipo_moneda = WsFeParamTipoMoneda::getOxCodigoAfip("PES"); //pesos
            $afip_citi_fecha_emision = $pde_comprobante->getFechaEmision();
            $arr_fecha_emision = explode('-', $afip_citi_fecha_emision); //separa la fecha

            $afip_citi_fecha_comprobante = $arr_fecha_emision[0] . $arr_fecha_emision[1] . $arr_fecha_emision[2];
            $afip_citi_tipo_comprobante = $ws_fe_param_tipo_comprobante->getCodigoAfip();
            $afip_citi_punto_venta = $pde_comprobante->getNumeroPuntoVenta();
            $afip_citi_numero_comprobante = $pde_comprobante->getNumeroComprobante(); //hay que usar un nuevo metodo que tiene Pablo
            $afip_citi_numero_despacho = $pde_comprobante->getNumeroDespacho();
            $afip_citi_codigo_documento_vendedor = $tipo_documento_codigo_afip; //$ws_fe_param_tipo_documento->getCodigoAfip();
            $afip_citi_numero_identificacion_vendedor = $pde_comprobante->getCuit(); //$pde_comprobante->getPersonaDocumento();//revisar logica
            $afip_citi_denominacion_vendedor = $pde_comprobante->getAfipCitiVentasDenominacionVendedor();

            switch ($tipo_comprobante_codigo) {
                case PdeTipoFactura::TIPO_FACTURA_B:
                case PdeTipoFactura::TIPO_FACTURA_C:
                case PdeTipoNotaCredito::TIPO_NOTA_CREDITO_B:
                case PdeTipoNotaCredito::TIPO_NOTA_CREDITO_C:
                case PdeTipoNotaDebito::TIPO_NOTA_DEBITO_B:
                case PdeTipoNotaDebito::TIPO_NOTA_DEBITO_C:
                    $afip_citi_importe_total_operacion = $pde_comprobante->getAfipCitiComprasCbteImporteTotalOperacion();
                    $afip_citi_importe_total_conceptos = "000000000000000";
                    $afip_citi_importe_operaciones_exentas = "000000000000000";

                    $afip_citi_importe_percepciones_iva = "000000000000000";
                    $afip_citi_importe_percepciones_impuestos_nacionales = "000000000000000";
                    $afip_citi_importe_percepciones_ingresos_brutos = "000000000000000";
                    $afip_citi_importe_percepciones_impuestos_municipales = "000000000000000";
                    $afip_citi_importe_impuestos_internos = "000000000000000";
                    $afip_citi_importe_otros_tributos = "000000000000000";
                    $afip_citi_importe_iva_comision = "000000000000000";
                    $afip_citi_importe_cf_computable = "000000000000000";
                    break;
                default:
                    $afip_citi_importe_total_operacion = $pde_comprobante->getAfipCitiComprasCbteImporteTotalOperacion();
                    $afip_citi_importe_total_conceptos = $pde_comprobante->getAfipCitiComprasCbteImporteTotalConceptos();
                    $afip_citi_importe_operaciones_exentas = $pde_comprobante->getAfipCitiComprasCbteImporteOperacionesExentas();

                    $afip_citi_importe_percepciones_iva = $pde_comprobante->getAfipCitiComprasCbteImportePercepcionIva($arr_tributo_full);
                    $afip_citi_importe_percepciones_impuestos_nacionales = $pde_comprobante->getAfipCitiComprasCbteImportePercepcionesImpuestosNacionales($arr_tributo_full);
                    $afip_citi_importe_percepciones_ingresos_brutos = $pde_comprobante->getAfipCitiComprasCbteImportePercepcionesIngresosBrutos($arr_tributo_full);
                    $afip_citi_importe_percepciones_impuestos_municipales = $pde_comprobante->getAfipCitiComprasCbteImportePercepcionesImpuestosMunicipales($arr_tributo_full);
                    $afip_citi_importe_impuestos_internos = $pde_comprobante->getAfipCitiComprasCbteImporteImpuestosInternos($arr_tributo_full);
                    $afip_citi_importe_iva_comision = $pde_comprobante->getAfipCitiComprasCbteImporteIvaComision(); //revisar logica
                    $afip_citi_importe_cf_computable = $pde_comprobante->getAfipCitiComprasCbteImporteCfComputable();
                    $afip_citi_importe_otros_tributos = $pde_comprobante->getAfipCitiComprasCbteImporteOtrosTributos($arr_tributo_full);
            }

            $afip_citi_codigo_moneda = $ws_fe_param_tipo_moneda->getCodigoAfip();
            $afip_citi_tipo_cambio = "0001000000";
            $afip_citi_cantidad_alicuotas_iva = $cantidad_iva_full;

            switch ($tipo_comprobante_codigo) {
                case PdeTipoFactura::TIPO_DESPACHO_IMPORTACION:
                case PdeTipoNotaCredito::TIPO_NOTA_CREDITO_DI:
                case PdeTipoNotaDebito::TIPO_NOTA_DEBITO_DI:
                    $afip_citi_codigo_operacion = (count($arr_iva_full_para_citi) == 0) ? "X" : " "; // X: Importaciones del Exterior
                    break;
                case PdeTipoFactura::TIPO_FACTURA_B:
                case PdeTipoFactura::TIPO_FACTURA_C:
                case PdeTipoNotaCredito::TIPO_NOTA_CREDITO_B:
                case PdeTipoNotaCredito::TIPO_NOTA_CREDITO_C:
                case PdeTipoNotaDebito::TIPO_NOTA_DEBITO_B:
                case PdeTipoNotaDebito::TIPO_NOTA_DEBITO_C:
                    $afip_citi_codigo_operacion = " "; // si son comprobantes B o C se informa vacio
                    break;

                default:
                    $afip_citi_codigo_operacion = (count($arr_iva_full_para_citi) == 0) ? "N" : " "; // N: No Gravado
            }

            $afip_citi_cuit_emisor = "0";
            $afip_citi_denominacion_emisor = " ";
            $afip_citi_numero_identificacion_vendedor = str_replace("-", '', $afip_citi_numero_identificacion_vendedor);

            //rellenar
            $afip_citi_fecha_comprobante = str_pad($afip_citi_fecha_comprobante, 8, "0", STR_PAD_LEFT);
            $afip_citi_tipo_comprobante = str_pad($afip_citi_tipo_comprobante, 3, "0", STR_PAD_LEFT);
            $afip_citi_punto_venta = str_pad($afip_citi_punto_venta, 5, "0", STR_PAD_LEFT);

            $afip_citi_numero_comprobante = str_pad($afip_citi_numero_comprobante, 20, "0", STR_PAD_LEFT);
            $afip_citi_numero_despacho = str_pad($afip_citi_numero_despacho, 16, " ", STR_PAD_RIGHT);
            $afip_citi_codigo_documento_vendedor = str_pad($afip_citi_codigo_documento_vendedor, 2, "0", STR_PAD_LEFT);
            $afip_citi_numero_identificacion_vendedor = str_pad($afip_citi_numero_identificacion_vendedor, 20, "0", STR_PAD_LEFT); // es alfanumerico pero lleva ceros a la izquierda (ver excel)
            $afip_citi_codigo_moneda = str_pad($afip_citi_codigo_moneda, 3, " ", STR_PAD_RIGHT);
            $afip_citi_tipo_cambio = str_pad($afip_citi_tipo_cambio, 10, "0", STR_PAD_LEFT);
            $afip_citi_cantidad_alicuotas_iva = str_pad($afip_citi_cantidad_alicuotas_iva, 1, "0", STR_PAD_LEFT);
            $afip_citi_codigo_operacion = str_pad($afip_citi_codigo_operacion, 1, " ", STR_PAD_RIGHT);
            $afip_citi_cuit_emisor = str_pad($afip_citi_cuit_emisor, 11, "0", STR_PAD_LEFT);
            $afip_citi_denominacion_emisor = str_pad($afip_citi_denominacion_emisor, 30, " ", STR_PAD_RIGHT);

            //cortar todos los campos al tamaño requerido
            $afip_citi_fecha_comprobante = substr($afip_citi_fecha_comprobante, 0, 8);
            $afip_citi_tipo_comprobante = substr($afip_citi_tipo_comprobante, 0, 3);
            $afip_citi_punto_venta = substr($afip_citi_punto_venta, 0, 5);
            $afip_citi_numero_comprobante = substr($afip_citi_numero_comprobante, 0, 20);
            $afip_citi_numero_despacho = substr($afip_citi_numero_despacho, 0, 16);
            $afip_citi_codigo_documento_vendedor = substr($afip_citi_codigo_documento_vendedor, 0, 2);
            $afip_citi_numero_identificacion_vendedor = substr($afip_citi_numero_identificacion_vendedor, 0, 20);
            $afip_citi_codigo_moneda = substr($afip_citi_codigo_moneda, 0, 3);
            $afip_citi_tipo_cambio = substr($afip_citi_tipo_cambio, 0, 10);
            $afip_citi_cantidad_alicuotas_iva = substr($afip_citi_cantidad_alicuotas_iva, 0, 1);
            $afip_citi_codigo_operacion = substr($afip_citi_codigo_operacion, 0, 1);
            $afip_citi_cuit_emisor = substr($afip_citi_cuit_emisor, 0, 11);
            $afip_citi_denominacion_emisor = substr($afip_citi_denominacion_emisor, 0, 30);

            //set campos
            $afip_citi_compras_cbte->setAfipCitiFechaComprobante($afip_citi_fecha_comprobante);
            $afip_citi_compras_cbte->setAfipCitiTipoComprobante($afip_citi_tipo_comprobante);
            $afip_citi_compras_cbte->setAfipCitiPuntoVenta($afip_citi_punto_venta);
            $afip_citi_compras_cbte->setAfipCitiNumeroComprobante($afip_citi_numero_comprobante);
            $afip_citi_compras_cbte->setAfipCitiDespachoImportacion($afip_citi_numero_despacho);
            $afip_citi_compras_cbte->setAfipCitiCodigoDocumentoVendedor($afip_citi_codigo_documento_vendedor);
            $afip_citi_compras_cbte->setAfipCitiNumeroIdentificacionVendedor($afip_citi_numero_identificacion_vendedor);
            $afip_citi_compras_cbte->setAfipCitiDenominacionVendedor($afip_citi_denominacion_vendedor);
            $afip_citi_compras_cbte->setAfipCitiImporteTotalOperacion($afip_citi_importe_total_operacion);
            $afip_citi_compras_cbte->setAfipCitiImporteTotalConceptos($afip_citi_importe_total_conceptos);
            $afip_citi_compras_cbte->setAfipCitiImporteOperacionesExentas($afip_citi_importe_operaciones_exentas);
            $afip_citi_compras_cbte->setAfipCitiImportePercepcionesIva($afip_citi_importe_percepciones_iva);
            $afip_citi_compras_cbte->setAfipCitiImportePercepcionesImpuestosNacionales($afip_citi_importe_percepciones_impuestos_nacionales);
            $afip_citi_compras_cbte->setAfipCitiImportePercepcionesIngresosBrutos($afip_citi_importe_percepciones_ingresos_brutos);
            $afip_citi_compras_cbte->setAfipCitiImportePercepcionesImpuestosMunicipales($afip_citi_importe_percepciones_impuestos_municipales);
            $afip_citi_compras_cbte->setAfipCitiImporteImpuestosInternos($afip_citi_importe_impuestos_internos);
            $afip_citi_compras_cbte->setAfipCitiCodigoMoneda($afip_citi_codigo_moneda);
            $afip_citi_compras_cbte->setAfipCitiTipoCambio($afip_citi_tipo_cambio);
            $afip_citi_compras_cbte->setAfipCitiCantidadAlicuotasIva($afip_citi_cantidad_alicuotas_iva);
            $afip_citi_compras_cbte->setAfipCitiCodigoOperacion($afip_citi_codigo_operacion);
            $afip_citi_compras_cbte->setAfipCitiImporteCfComputable($afip_citi_importe_cf_computable);
            $afip_citi_compras_cbte->setAfipCitiImporteOtrosTributos($afip_citi_importe_otros_tributos);
            $afip_citi_compras_cbte->setAfipCitiCuitEmisor($afip_citi_cuit_emisor);
            $afip_citi_compras_cbte->setAfipCitiDenominacionEmisor($afip_citi_denominacion_emisor);
            $afip_citi_compras_cbte->setAfipCitiImporteIvaComision($afip_citi_importe_iva_comision);
            $afip_citi_compras_cbte->setPdeComprobante($pde_comprobante);
            $afip_citi_compras_cbte->setEstado(1);
            $afip_citi_compras_cbte->save();
        }

        return $afip_citi_compras_cbte;
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 26/09/2018
     */
    public function setInicializarAfipCitiComprasAlicuotas($afip_citi_cabecera) {

        $pde_comprobantes = $afip_citi_cabecera->getPdeComprobantes();
        foreach ($pde_comprobantes as $pde_comprobante) {

            $tipo_comprobante_codigo = $pde_comprobante->getTipoComprobanteCodigo();
            switch ($tipo_comprobante_codigo) {
                case PdeTipoFactura::TIPO_FACTURA_B:
                case PdeTipoFactura::TIPO_FACTURA_C:
                case PdeTipoFactura::TIPO_DESPACHO_IMPORTACION:
                case PdeTipoNotaCredito::TIPO_NOTA_CREDITO_B:
                case PdeTipoNotaCredito::TIPO_NOTA_CREDITO_C:
                case PdeTipoNotaCredito::TIPO_NOTA_CREDITO_DI:
                case PdeTipoNotaDebito::TIPO_NOTA_DEBITO_B:
                case PdeTipoNotaDebito::TIPO_NOTA_DEBITO_C:
                case PdeTipoNotaDebito::TIPO_NOTA_DEBITO_DI:
                    continue 2; // el 2 indica que debe ir continuar la iteracion del primer foreach externo, se considera al switch como un bloque de importacion
                    break;
            }

            $ws_fe_param_tipo_comprobante = $pde_comprobante->getWsFeParamTipoComprobante();
            $arr_iva_full_para_citi = $pde_comprobante->getArrIvaParaCitiComprobanteFull();
            $afip_citi_tipo_comprobante = $ws_fe_param_tipo_comprobante->getCodigoAfip();
            $afip_citi_punto_venta = $pde_comprobante->getNumeroPuntoVenta();
            $afip_citi_numero_comprobante = $pde_comprobante->getNumeroComprobante(); //hay que usar un nuevo metodo que tiene Pablo

            $tipo_documento_codigo_afip = "80";
            $afip_citi_codigo_documento_vendedor = $tipo_documento_codigo_afip; //$ws_fe_param_tipo_documento->getCodigoAfip();
            $afip_citi_numero_identificacion_vendedor = $pde_comprobante->getCuit();

            // -----------------------------------------------------------------
            // en el caso de que no tenga alicuotas gravadas, se agrega 1 con 
            // - Base Imponible: 0.00
            // - IVA 0% (Codigo AFIP 003)
            // - Impuesto Liquidado: 0.00
            // -----------------------------------------------------------------
            if (count($arr_iva_full_para_citi) == 0) {

                $gral_tipo_iva_cero = GralTipoIva::getOxCodigo(GralTipoIva::TIPO_0);

                $arr_iva_full_para_citi[$gral_tipo_iva_cero->getCodigo()] = array(
                    'id' => $gral_tipo_iva_cero->getId(),
                    'descripcion' => $gral_tipo_iva_cero->getDescripcion(),
                    'codigo' => $gral_tipo_iva_cero->getCodigo(),
                    'base_imponible' => 0,
                    'importe_iva' => 0,
                );
            }
            // -----------------------------------------------------------------            

            foreach ($arr_iva_full_para_citi as $i => $iva_full) {
                $afip_citi_compras_alicuotas = new AfipCitiComprasAlicuotas();
                $afip_citi_compras_alicuotas->setAfipCitiPrcId($this->getId());
                $afip_citi_compras_alicuotas->setAfipCitiCabeceraId($afip_citi_cabecera->getId());

                $gral_iva = GralTipoIva::getOxCodigo($i);
                $ws_fe_param_tipo_iva = $gral_iva->getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva();
                $afip_citi_importe_neto_gravado = $iva_full['base_imponible'];
                $afip_citi_alicuota_iva = $ws_fe_param_tipo_iva->getCodigoAfip();
                $afip_citi_importe_impuesto_liquidado = $iva_full['importe_iva'];

                $afip_citi_importe_neto_gravado = round($afip_citi_importe_neto_gravado, 2);
                $afip_citi_importe_neto_gravado = Gral::completar_decimales($afip_citi_importe_neto_gravado);

                $afip_citi_importe_impuesto_liquidado = round($afip_citi_importe_impuesto_liquidado, 2);
                $afip_citi_importe_impuesto_liquidado = Gral::completar_decimales($afip_citi_importe_impuesto_liquidado);

                //quitar punto a campos de importes 
                $afip_citi_importe_neto_gravado = str_replace(".", '', $afip_citi_importe_neto_gravado);
                $afip_citi_importe_impuesto_liquidado = str_replace(".", '', $afip_citi_importe_impuesto_liquidado);
                $afip_citi_numero_identificacion_vendedor = str_replace("-", '', $afip_citi_numero_identificacion_vendedor);

                //rellenar campos
                $afip_citi_tipo_comprobante = str_pad($afip_citi_tipo_comprobante, 3, "0", STR_PAD_LEFT);
                $afip_citi_punto_venta = str_pad($afip_citi_punto_venta, 5, "0", STR_PAD_LEFT);
                $afip_citi_numero_comprobante = str_pad($afip_citi_numero_comprobante, 20, "0", STR_PAD_LEFT);
                $afip_citi_codigo_documento_vendedor = str_pad($afip_citi_codigo_documento_vendedor, 2, "0", STR_PAD_LEFT);
                $afip_citi_numero_identificacion_vendedor = str_pad($afip_citi_numero_identificacion_vendedor, 20, "0", STR_PAD_LEFT);
                $afip_citi_importe_neto_gravado = str_pad($afip_citi_importe_neto_gravado, 15, "0", STR_PAD_LEFT);
                $afip_citi_alicuota_iva = str_pad($afip_citi_alicuota_iva, 4, "0", STR_PAD_LEFT);
                $afip_citi_importe_impuesto_liquidado = str_pad($afip_citi_importe_impuesto_liquidado, 15, "0", STR_PAD_LEFT);

                //cortar todos los campos al tamaño requerido
                $afip_citi_tipo_comprobante = substr($afip_citi_tipo_comprobante, 0, 3);
                $afip_citi_punto_venta = substr($afip_citi_punto_venta, 0, 5);
                $afip_citi_numero_comprobante = substr($afip_citi_numero_comprobante, 0, 20);
                $afip_citi_codigo_documento_vendedor = substr($afip_citi_codigo_documento_vendedor, 0, 2);
                $afip_citi_numero_identificacion_vendedor = substr($afip_citi_numero_identificacion_vendedor, 0, 20);
                $afip_citi_importe_neto_gravado = substr($afip_citi_importe_neto_gravado, 0, 15);
                $afip_citi_alicuota_iva = substr($afip_citi_alicuota_iva, 0, 4);
                $afip_citi_importe_impuesto_liquidado = substr($afip_citi_importe_impuesto_liquidado, 0, 15);

                //set campos
                $afip_citi_compras_alicuotas->setAfipCitiTipoComprobante($afip_citi_tipo_comprobante);
                $afip_citi_compras_alicuotas->setAfipCitiPuntoVenta($afip_citi_punto_venta);
                $afip_citi_compras_alicuotas->setAfipCitiNumeroComprobante($afip_citi_numero_comprobante);
                $afip_citi_compras_alicuotas->setAfipCitiCodigoDocumentoVendedor($afip_citi_codigo_documento_vendedor);
                $afip_citi_compras_alicuotas->setAfipCitiNumeroIdentificacionVendedor($afip_citi_numero_identificacion_vendedor);
                $afip_citi_compras_alicuotas->setAfipCitiImporteNetoGravado($afip_citi_importe_neto_gravado);
                $afip_citi_compras_alicuotas->setAfipCitiAlicuotaIva($afip_citi_alicuota_iva);
                $afip_citi_compras_alicuotas->setAfipCitiImporteImpuestoLiquidado($afip_citi_importe_impuesto_liquidado);
                $afip_citi_compras_alicuotas->setPdeComprobante($pde_comprobante);
                $afip_citi_compras_alicuotas->setEstado(1);
                $afip_citi_compras_alicuotas->save();
            }
        }
    }

    /**
     * @creado_por Esteban Martinez
     * @creado 26/09/2018
     */
    public function setInicializarAfipCitiComprasImportaciones($afip_citi_cabecera) {
        $pde_comprobantes_importaciones = $afip_citi_cabecera->getPdeComprobantesImportaciones();
        foreach ($pde_comprobantes_importaciones as $pde_comprobante) {
            $arr_iva_full_para_citi = $pde_comprobante->getArrIvaParaCitiComprobanteFull();
            $afip_citi_numero_despacho = $pde_comprobante->getNumeroDespacho();

            foreach ($arr_iva_full_para_citi as $i => $iva_full) {
                $afip_citi_compras_importaciones = new AfipCitiComprasImportaciones();
                $afip_citi_compras_importaciones->setAfipCitiPrcId($this->getId());
                $afip_citi_compras_importaciones->setAfipCitiCabeceraId($afip_citi_cabecera->getId());

                $gral_iva = GralTipoIva::getOxCodigo($i);
                $ws_fe_param_tipo_iva = $gral_iva->getWsFeParamTipoIvaXGralTipoIvaWsFeParamTipoIva();
                $afip_citi_importe_neto_gravado = $iva_full['base_imponible'];
                $afip_citi_alicuota_iva = $ws_fe_param_tipo_iva->getCodigoAfip();
                $afip_citi_importe_impuesto_liquidado = $iva_full['importe_iva'];

                $afip_citi_importe_neto_gravado = round($afip_citi_importe_neto_gravado, 2);
                $afip_citi_importe_neto_gravado = Gral::completar_decimales($afip_citi_importe_neto_gravado);

                $afip_citi_importe_impuesto_liquidado = round($afip_citi_importe_impuesto_liquidado, 2);
                $afip_citi_importe_impuesto_liquidado = Gral::completar_decimales($afip_citi_importe_impuesto_liquidado);

                //quitar punto a campos de importes 
                $afip_citi_importe_neto_gravado = str_replace(".", '', $afip_citi_importe_neto_gravado);
                $afip_citi_importe_impuesto_liquidado = str_replace(".", '', $afip_citi_importe_impuesto_liquidado);

                //rellenar
                $afip_citi_numero_despacho = str_pad($afip_citi_numero_despacho, 16, " ", STR_PAD_RIGHT);
                $afip_citi_importe_neto_gravado = str_pad($afip_citi_importe_neto_gravado, 15, "0", STR_PAD_LEFT);
                $afip_citi_alicuota_iva = str_pad($afip_citi_alicuota_iva, 4, "0", STR_PAD_LEFT);
                $afip_citi_importe_impuesto_liquidado = str_pad($afip_citi_importe_impuesto_liquidado, 15, "0", STR_PAD_LEFT);

                //cortar todos los campos al tamaño requerido
                $afip_citi_numero_despacho = substr($afip_citi_numero_despacho, 0, 16);
                $afip_citi_importe_neto_gravado = substr($afip_citi_importe_neto_gravado, 0, 15);
                $afip_citi_alicuota_iva = substr($afip_citi_alicuota_iva, 0, 4);
                $afip_citi_importe_impuesto_liquidado = substr($afip_citi_importe_impuesto_liquidado, 0, 15);

                //set campos
                $afip_citi_compras_importaciones->setAfipCitiDespachoImportacion($afip_citi_numero_despacho);
                $afip_citi_compras_importaciones->setAfipCitiImporteNetoGravado($afip_citi_importe_neto_gravado);
                $afip_citi_compras_importaciones->setAfipCitiAlicuotaIva($afip_citi_alicuota_iva);
                $afip_citi_compras_importaciones->setAfipCitiImporteImpuestoLiquidado($afip_citi_importe_impuesto_liquidado);
                $afip_citi_compras_importaciones->setPdeComprobante($pde_comprobante);
                $afip_citi_compras_importaciones->setEstado(1);
                $afip_citi_compras_importaciones->save();
            }
        }
    }

}

?>