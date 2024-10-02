<?php

require_once "base/BVtaTributo.php";

class VtaTributo extends BVtaTributo {

    const TRIBUTO_PERCEPCIONES_IIBB = 'PERCEPCIONES_IIBB';
    const TRIBUTO_PERCEPCIONES_TASA_COMERCIO = 'PERCEPCIONES_TASA_COMERCIO';

    public function getVtaTributoAplica($vta_comprobante, $subtotal_calculado, $omitir_minimo = false) {
        $arr_vta_tributo_aplica = false;

        switch ($this->getCodigo()) {

            // -----------------------------------------------------------------
            // TRIBUTO_PERCEPCIONES_IIBB
            // -----------------------------------------------------------------
            case VtaTributo::TRIBUTO_PERCEPCIONES_IIBB:

                $cli_cliente = $vta_comprobante->getCliCliente();
                if ($cli_cliente) {
                    $geo_localidad = $cli_cliente->getGeoLocalidad();
                    $geo_provincia = $geo_localidad->getGeoProvincia();
                }
                $gral_condicion_iva = $vta_comprobante->getGralCondicionIva();

                $vta_punto_venta = $vta_comprobante->getVtaPuntoVenta();
                if ($vta_punto_venta) {
                    $geo_localidad_punto_venta = $vta_punto_venta->getGeoLocalidad();
                    $geo_provincia_punto_venta = $geo_localidad_punto_venta->getGeoProvincia();
                }

                $importe_minimo_tributo_a_aplicar = (!$omitir_minimo) ? ConfVariable::getVtaComprobanteMinimoParaPercepcionesIIBBMnes() : 0;

                // se determina si es cliente o no
                if ($cli_cliente && $vta_punto_venta) {

                    // se determina la provincia del cliente y punto de venta
                    if ($geo_provincia->getCodigo() == "MISIONES" && $geo_provincia_punto_venta->getCodigo() == "MISIONES") {

                        // se determina la condicion de iva del cliente
                        if ($gral_condicion_iva) {

                            switch ($gral_condicion_iva->getCodigo()) {

                                // solo aplica para RI y Monotributo
                                case GralCondicionIva::TIPO_RESPONSABLE_INSCRIPTO:
                                case GralCondicionIva::TIPO_MONOTRIBUTISTA:

                                    $importe_tributo = $subtotal_calculado * $this->getAlicuotaDecimal();

                                    // se controla que el importe del tributo sea mayor a minimo
                                    if ($importe_tributo > $importe_minimo_tributo_a_aplicar) {
                                        $arr_vta_tributo_aplica = array(
                                            'vta_tributo' => $this,
                                            'aplica' => 1,
                                            'exento' => 0,
                                            'exencion' => 0,
                                            'minimo' => $importe_minimo_tributo_a_aplicar,
                                            'supera_minimo' => 1,
                                        );

                                        // excepcion para exencion
                                        $vta_tributo_exencion = $cli_cliente->getVtaTributoExencionActiva($this);
                                        if ($cli_cliente && $vta_tributo_exencion) {
                                            $arr_vta_tributo_aplica = array(
                                                'vta_tributo' => $this,
                                                'aplica' => 1,
                                                'exento' => 1,
                                                'exencion' => $vta_tributo_exencion,
                                                'minimo' => $importe_minimo_tributo_a_aplicar,
                                                'supera_minimo' => 1,
                                            );
                                        }
                                    } else {
                                        $arr_vta_tributo_aplica = array(
                                            'vta_tributo' => $this,
                                            'aplica' => 1,
                                            'exento' => 0,
                                            'exencion' => 0,
                                            'minimo' => $importe_minimo_tributo_a_aplicar,
                                            'supera_minimo' => 0,
                                        );
                                    }

                                    break;
                                default:
                            }
                        }
                    }
                }
                break;
                
            // -----------------------------------------------------------------
            // TRIBUTO_PERCEPCIONES_TASA_COMERCIO
            // -----------------------------------------------------------------
            case VtaTributo::TRIBUTO_PERCEPCIONES_TASA_COMERCIO:

                $cli_cliente = $vta_comprobante->getCliCliente();
                if ($cli_cliente) {
                    $geo_localidad = $cli_cliente->getGeoLocalidad();
                    $geo_provincia = $geo_localidad->getGeoProvincia();
                }
                $gral_condicion_iva = $vta_comprobante->getGralCondicionIva();

                $vta_punto_venta = $vta_comprobante->getVtaPuntoVenta();
                if ($vta_punto_venta) {
                    $geo_localidad_punto_venta = $vta_punto_venta->getGeoLocalidad();
                    $geo_provincia_punto_venta = $geo_localidad_punto_venta->getGeoProvincia();
                }

                $importe_minimo_tributo_a_aplicar = (!$omitir_minimo) ? ConfVariable::getVtaComprobanteMinimoParaPercepcionesTasaComercio() : 0;

                // se determina si es cliente o no
                if ($cli_cliente && $vta_punto_venta) {

                    // se determina la localidad del cliente y punto de venta
                    if ($geo_localidad->getCodigo() == "POSADAS" && $geo_localidad_punto_venta->getCodigo() == "POSADAS") {

                        // se determina la condicion de iva del cliente
                        if ($gral_condicion_iva) {

                            switch ($gral_condicion_iva->getCodigo()) {

                                // solo aplica para RI y Monotributo
                                case GralCondicionIva::TIPO_RESPONSABLE_INSCRIPTO:
                                case GralCondicionIva::TIPO_MONOTRIBUTISTA:

                                    $importe_tributo = $subtotal_calculado * $this->getAlicuotaDecimal();

                                    // se controla que el importe del tributo sea mayor a minimo
                                    if ($importe_tributo > $importe_minimo_tributo_a_aplicar) {
                                        $arr_vta_tributo_aplica = array(
                                            'vta_tributo' => $this,
                                            'aplica' => 1,
                                            'exento' => 0,
                                            'exencion' => 0,
                                            'minimo' => $importe_minimo_tributo_a_aplicar,
                                            'supera_minimo' => 1,
                                        );

                                        // excepcion para exencion
                                        $vta_tributo_exencion = $cli_cliente->getVtaTributoExencionActiva($this);
                                        if ($cli_cliente && $vta_tributo_exencion) {
                                            $arr_vta_tributo_aplica = array(
                                                'vta_tributo' => $this,
                                                'aplica' => 1,
                                                'exento' => 1,
                                                'exencion' => $vta_tributo_exencion,
                                                'minimo' => $importe_minimo_tributo_a_aplicar,
                                                'supera_minimo' => 1,
                                            );
                                        }
                                    } else {
                                        $arr_vta_tributo_aplica = array(
                                            'vta_tributo' => $this,
                                            'aplica' => 0,
                                            'exento' => 0,
                                            'exencion' => 0,
                                            'minimo' => $importe_minimo_tributo_a_aplicar,
                                            'supera_minimo' => 0,
                                        );
                                    }

                                    break;
                                default:
                            }
                        }
                    }
                }
                break;
        }
        //Gral::prr($arr_vta_tributo_aplica);
        return $arr_vta_tributo_aplica;
    }

}

?>