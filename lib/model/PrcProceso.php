<?php

class PrcProceso {

    const EXPORT_SEPARADOR = '|';
    const EXPORT_SEPARADOR_INTERNO = ',';
    const PREFIJO_IDENTIFICADO = 'LAE-';
    const PATH_TMP_IMAGEN = 'https://kya.gexteno.com.ar/archivos/imagenes/ins_insumo_imagen/';

    static function generarCsvTiendaOnline() {

        $fp = fopen(Gral::getPathAbs() . "export/insumos.csv", "w+");

        $linea = '';
        $linea .= 'INSUMO_ID' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_NOMBRE' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_DESCRIPCION_LARGA' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_DESCRIPCION_CORTA' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_IMPORTE_VENTA' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_IMAGENES' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_CATEGORIA' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_ETIQUETAS' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_ATTR_LBL_MARCA' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_ATTR_VAL_MARCA' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_ATTR_LBL_CODIGO_MARCA' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_ATTR_VAL_CODIGO_MARCA' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_ATTR_LBL_UNIDAD_MEDIDA' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_ATTR_VAL_UNIDAD_MEDIDA' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_VINCULADOS' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_SIMILARES' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_STOCK' . self::EXPORT_SEPARADOR;
        $linea .= 'INSUMO_DESTACADO' . self::EXPORT_SEPARADOR;

        fwrite($fp, $linea . PHP_EOL);
        //Gral::pr($linea);

        $ins_tipo_lista_precio = InsTipoListaPrecio::getOxCodigo(InsTipoListaPrecio::TIPO_PRECIO_VENTA_ONLINE);

        $ins_insumos = InsInsumo::getInsInsumosParaVentaOnline();
        foreach ($ins_insumos as $ins_insumo) {

            $ins_categoria = $ins_insumo->getInsCategoria();
            $ins_venta_web_info = $ins_insumo->getInsVentaWebInfo();
            $ins_insumo_imagenes = $ins_insumo->getInsInsumoImagens();
            $ins_importe_venta_actual = round($ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio, $incluye_iva = true), 2);

            $ins_marca = $ins_insumo->getInsMarca();
            $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();

            $ins_insumo_vinculados = $ins_insumo->getInsInsumoVinculadosOrdenados();
            $ins_insumo_similars = $ins_insumo->getInsInsumoSimilarsOrdenados();

            $linea = '';

            // -----------------------------------------------------------------
            // id
            // -----------------------------------------------------------------
            $linea .= self::PREFIJO_IDENTIFICADO . $ins_insumo->getId() . self::EXPORT_SEPARADOR;

            // si tiene info para venta web personalizada
            if ($ins_venta_web_info) {

                // -----------------------------------------------------------------
                // titulo
                // -----------------------------------------------------------------
                if (trim($ins_venta_web_info->getDescripcion()) != '') {
                    // si no esta vacia se utiliza
                    $insumo_nombre = $ins_venta_web_info->getDescripcion();
                    $insumo_nombre = html_entity_decode($insumo_nombre);
                    //$insumo_nombre = str_replace(';', ',', $insumo_nombre);
                    $insumo_nombre = trim($insumo_nombre);

                    $linea .= $insumo_nombre . self::EXPORT_SEPARADOR;
                } else {
                    // si el campo de info web descripcion esta vacia se utiliza la descripcion del insumo
                    $insumo_nombre = $ins_insumo->getDescripcion();
                    $insumo_nombre = html_entity_decode($insumo_nombre);
                    //$insumo_nombre = str_replace(';', ',', $insumo_nombre);
                    $insumo_nombre = trim($insumo_nombre);

                    $linea .= $insumo_nombre . self::EXPORT_SEPARADOR;
                }

                // -----------------------------------------------------------------
                // descripcion larga
                // -----------------------------------------------------------------
                $descripcion_ext = $ins_venta_web_info->getDescripcionExt();
                $info_adicional_extendida_tienda = $ins_insumo->getInfoAdicionalExtendidaParaTienda();
                $info_adicional_extendida_tienda = str_replace('|', ' ', $info_adicional_extendida_tienda);
                $info_adicional_extendida_tienda_full = $descripcion_ext . nl2br($info_adicional_extendida_tienda);

                $insumo_descripcion_larga = $info_adicional_extendida_tienda_full;
                //$insumo_descripcion_larga = str_replace("&#13;&#10;", "<br />", $insumo_descripcion_larga);
                //$insumo_descripcion_larga = str_replace(';', ',', $insumo_descripcion_larga);
                //$insumo_descripcion_larga = html_entity_decode($insumo_descripcion_larga);
                $insumo_descripcion_larga = trim($insumo_descripcion_larga);

                $linea .= $insumo_descripcion_larga . self::EXPORT_SEPARADOR;

                // -----------------------------------------------------------------
                // descripcion corta
                // -----------------------------------------------------------------
                //$insumo_descripcion_corta = str_replace("&#13;&#10;", "<br />", $insumo_descripcion_corta);
                //$insumo_descripcion_corta = str_replace(';', ',', $ins_venta_web_info->getDescripcionBreve());
                $insumo_descripcion_corta = trim($insumo_descripcion_corta);

                $linea .= $insumo_descripcion_corta . self::EXPORT_SEPARADOR;
            } else {
                // -----------------------------------------------------------------
                // titulo
                // -----------------------------------------------------------------
                $insumo_nombre = $ins_insumo->getDescripcion();
                //$insumo_nombre = str_replace(';', ',', $insumo_nombre);
                $insumo_nombre = trim($insumo_nombre);

                $linea .= $insumo_nombre . self::EXPORT_SEPARADOR;

                // -----------------------------------------------------------------
                // descripcion larga
                // -----------------------------------------------------------------
                $info_adicional_extendida_tienda = $ins_insumo->getInfoAdicionalExtendidaParaTienda();
                $info_adicional_extendida_tienda_full = $info_adicional_extendida_tienda;

                $insumo_descripcion_larga = $info_adicional_extendida_tienda_full;
                //$insumo_descripcion_larga = str_replace("&#13;&#10;", "<br />", $insumo_descripcion_larga);
                //$insumo_descripcion_larga = str_replace(';', ',', $insumo_descripcion_larga);
                $insumo_descripcion_larga = trim($insumo_descripcion_larga);

                $linea .= $insumo_descripcion_larga . self::EXPORT_SEPARADOR;

                // -----------------------------------------------------------------
                // descripcion corta
                // -----------------------------------------------------------------
                $linea .= '' . self::EXPORT_SEPARADOR;
            }

            // -----------------------------------------------------------------
            // importe
            // -----------------------------------------------------------------
            $linea .= $ins_importe_venta_actual . self::EXPORT_SEPARADOR;

            // -----------------------------------------------------------------
            // imagenes
            // -----------------------------------------------------------------
            $imagenes = '';
            foreach ($ins_insumo_imagenes as $ins_insumo_imagen) {
                $imagenes .= self::PATH_TMP_IMAGEN . $ins_insumo_imagen->getArchivo() . self::EXPORT_SEPARADOR_INTERNO;
            }
            $linea .= $imagenes . self::EXPORT_SEPARADOR;

            // -----------------------------------------------------------------
            // categoria
            // -----------------------------------------------------------------
            $categoria = str_replace(' - ', ' > ', $ins_categoria->getFamiliaDescripcion());
            $linea .= $categoria . self::EXPORT_SEPARADOR;

            // -----------------------------------------------------------------
            // etiquetas
            // -----------------------------------------------------------------
            $arr_etiquetas = $ins_insumo->getArrEtiquetasParaWeb();
            $string_etiquetas = implode(self::EXPORT_SEPARADOR_INTERNO, $arr_etiquetas);
            $linea .= $string_etiquetas . self::EXPORT_SEPARADOR;

            // -----------------------------------------------------------------
            // attr 1 - marca
            // -----------------------------------------------------------------
            $attr_string_lbl_marca = 'Marca';
            $linea .= $attr_string_lbl_marca . self::EXPORT_SEPARADOR;
            $attr_string_val_marca = $ins_marca->getDescripcion();
            $linea .= $attr_string_val_marca . self::EXPORT_SEPARADOR;

            // -----------------------------------------------------------------
            // attr 2 - codigo marca
            // -----------------------------------------------------------------
            $attr_string_lbl_codigo_marca = 'Codigo Marca';
            $linea .= $attr_string_lbl_codigo_marca . self::EXPORT_SEPARADOR;
            $attr_string_val_codigo_marca = $ins_insumo->getCodigoMarca();
            $linea .= $attr_string_val_codigo_marca . self::EXPORT_SEPARADOR;

            // -----------------------------------------------------------------
            // attr 3 - unidad medida
            // -----------------------------------------------------------------
            $attr_string_lbl_unidad_medida = 'Unidad de Medida';
            $linea .= $attr_string_lbl_unidad_medida . self::EXPORT_SEPARADOR;
            $attr_string_val_unidad_medida = $ins_unidad_medida->getDescripcion();
            $linea .= $attr_string_val_unidad_medida . self::EXPORT_SEPARADOR;

            // -----------------------------------------------------------------
            // insumos vinculados
            // -----------------------------------------------------------------
            $vinculados = '';
            foreach ($ins_insumo_vinculados as $ins_insumo_vinculado) {
                $vinculados .= self::PREFIJO_IDENTIFICADO . $ins_insumo_vinculado->getId() . self::EXPORT_SEPARADOR_INTERNO;
            }
            $linea .= $vinculados . self::EXPORT_SEPARADOR;

            // -----------------------------------------------------------------
            // insumos similares
            // -----------------------------------------------------------------
            $similares = '';
            foreach ($ins_insumo_similars as $ins_insumo_similar) {
                $similares .= self::PREFIJO_IDENTIFICADO . $ins_insumo_similar->getId() . self::EXPORT_SEPARADOR_INTERNO;
            }
            $linea .= $similares . self::EXPORT_SEPARADOR;

            // -----------------------------------------------------------------
            // Control de Stock: instock - outofstock
            // -----------------------------------------------------------------
            $linea .= 'instock' . self::EXPORT_SEPARADOR;

            // -----------------------------------------------------------------
            // Destacado: yes - no
            // -----------------------------------------------------------------
            $linea .= ($ins_venta_web_info && $ins_venta_web_info->getDestacado()) ? 'yes' : 'no' . self::EXPORT_SEPARADOR;

            // se reemplaza salto de linea por caracter html
            $linea = str_replace(PHP_EOL, '<br />', $linea);
            $linea = str_replace("&#13;&#10;", '<br />', $linea);
            $linea = str_replace(chr(13) . chr(10), '<br />', $linea);

            fwrite($fp, $linea . PHP_EOL);
            Gral::pr($linea);
        }

        fclose($fp);
    }

    /**
     * Metodo que limpia las tablas temporales de importacion de listas
     */
    static function execLimpiarTemporalImportacionListas() {

        // se obtienen todas las importaciones que no se encuentran activas y que tienen temporales cargados
        $prv_importacions = PrvImportacion::getPrvImportacionsParaEliminarEnTmp(0);
        //Gral::prr($prv_importacions);
        //Gral::pr(count($prv_importacions));
        // ---------------------------------------------------------------------
        // se eliminan los registros temporales de importaciones inactivas
        // ---------------------------------------------------------------------
        $sql_delete = "";
        foreach ($prv_importacions as $prv_importacion) {
            $sql_delete .= "DELETE FROM tmp_prv_importacion_tab_3 WHERE prv_importacion_id = " . $prv_importacion->getId() . ";";
        }
        $ejec = new Ejecucion();
        $ejec->setSql($sql_delete);
        Gral::prr($sql_delete);
        $ejec->execute();
        // ---------------------------------------------------------------------
        // ---------------------------------------------------------------------
        // se eliminan los registros temporales de importaciones inactivas de rollback
        // ---------------------------------------------------------------------
        $sql_delete = "";
        foreach ($prv_importacions as $prv_importacion) {
            $sql_delete .= "DELETE FROM tmp_prv_importacion_tab_3_rollback WHERE prv_importacion_id = " . $prv_importacion->getId() . ";";
        }
        $ejec = new Ejecucion();
        $ejec->setSql($sql_delete);
        Gral::prr($sql_delete);
        $ejec->execute();
        // ---------------------------------------------------------------------
    }

    /**
     * Proceso que controla vencimientos de presupuestos
     */
    static function execControlVencimientosVtaPresupuesto() {
        $c = new Criterio();
        $c->add(VtaPresupuestoEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->add(VtaPresupuestoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $c->add(VtaPresupuestoTipoEstado::GEN_ATTR_CODIGO, VtaPresupuestoTipoEstado::TIPO_EN_PROCESO_TIENDA, Criterio::DISTINTO);
        $c->add(VtaPresupuestoTipoEstado::GEN_ATTR_CODIGO, VtaPresupuestoTipoEstado::TIPO_EN_PRODUCCION, Criterio::DISTINTO);
        $c->add(VtaPresupuestoTipoEstado::GEN_ATTR_CODIGO, VtaPresupuestoTipoEstado::TIPO_PRODUCCION_FINALIZADA, Criterio::DISTINTO);
        $c->add(VtaPresupuesto::GEN_ATTR_FECHA_VENCIMIENTO, date('Y-m-d'), Criterio::MENOR);
        $c->addTabla(VtaPresupuesto::GEN_TABLA);
        $c->addRealJoin(VtaPresupuestoEstado::GEN_TABLA, VtaPresupuestoEstado::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
        $c->addRealJoin(VtaPresupuestoTipoEstado::GEN_TABLA, VtaPresupuestoTipoEstado::GEN_ATTR_ID, VtaPresupuestoEstado::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ESTADO_ID);
        $c->addOrden(VtaPresupuesto::GEN_ATTR_FECHA_VENCIMIENTO, Criterio::_ASC);
        $c->setCriterios();

        $vta_presupuestos = VtaPresupuesto::getVtaPresupuestos(null, $c);
        foreach ($vta_presupuestos as $vta_presupuesto) {

            // -----------------------------------------------------------------
            // se registra nuevo estado del presupuesto
            // -----------------------------------------------------------------
            $vta_presupuesto_estado = $vta_presupuesto->setVtaPresupuestoEstado(
                    VtaPresupuestoTipoEstado::TIPO_VENCIDO, 'Activado por Control Automatico de Vencimientos'
            );
        }

        // programar envio de aviso por email (FALTA) 
    }

    /**
     * Metodo que controla el stock de cada insumo, de acuerdo a su resumen de stock
     * y actualiza el estado en el que se encuentra el resumen
     */
    static function controlStockInsumosTipoEstado($id = false) {

        if (!$id) {
            $ins_stock_resumens = InsStockResumen::getInsStockResumens();
        } else {
            $ins_stock_resumen = InsStockResumen::getOxId($id);
            $ins_stock_resumens[] = $ins_stock_resumen;
        }

        foreach ($ins_stock_resumens as $ins_stock_resumen) {
            //Gral::prr($ins_stock_resumen);

            $arr_puntos_insumo = $ins_stock_resumen->getInsInsumo()->getInsInsumoPuntosEnPanol($ins_stock_resumen->getPanPanol());

            // se obtiene el estado actual del resumen de stock
            //$ins_stock_resumen_tipo_estado = $ins_stock_resumen->getInsStockResumenTipoEstadoActual();
            $ins_stock_resumen_tipo_estado = $ins_stock_resumen->getInsStockResumenTipoEstado();
            if (!$ins_stock_resumen_tipo_estado) {
                $ins_stock_resumen_tipo_estado = new InsStockResumenTipoEstado();
            }

            if ($arr_puntos_insumo[InsInsumo::PUNTO_MAXIMO] != 0) {
                // solo se realiza el control si el punto maximo es mayor a cero
                if ($ins_stock_resumen->getCantidad() > $arr_puntos_insumo[InsInsumo::PUNTO_MAXIMO]) {
                    if ($ins_stock_resumen_tipo_estado->getCodigo() != InsStockResumenTipoEstado::TIPO_EXCEDIDO) {
                        $ins_stock_resumen->setInsStockResumenEstado(InsStockResumenTipoEstado::TIPO_EXCEDIDO);
                    }
                } else {
                    if ($ins_stock_resumen->getCantidad() > $arr_puntos_insumo[InsInsumo::PUNTO_PEDIDO]) {
                        if ($ins_stock_resumen_tipo_estado->getCodigo() != InsStockResumenTipoEstado::TIPO_REGULAR) {
                            $ins_stock_resumen->setInsStockResumenEstado(InsStockResumenTipoEstado::TIPO_REGULAR);
                        }
                    }
                }
                if ($ins_stock_resumen->getCantidad() <= $arr_puntos_insumo[InsInsumo::PUNTO_PEDIDO]) {
                    if ($ins_stock_resumen->getCantidad() <= $arr_puntos_insumo[InsInsumo::PUNTO_MINIMO]) {
                        if ($ins_stock_resumen_tipo_estado->getCodigo() != InsStockResumenTipoEstado::TIPO_MENOR_MINIMO) {
                            $ins_stock_resumen->setInsStockResumenEstado(InsStockResumenTipoEstado::TIPO_MENOR_MINIMO);
                        }
                    } else {
                        if ($ins_stock_resumen_tipo_estado->getCodigo() != InsStockResumenTipoEstado::TIPO_REQUIERE_PEDIDO) {
                            $ins_stock_resumen->setInsStockResumenEstado(InsStockResumenTipoEstado::TIPO_REQUIERE_PEDIDO);
                        }
                    }
                }
            } else {
                // si el punto maximo es cero, siempre el insumo permanece en estado regular
                if ($ins_stock_resumen_tipo_estado->getCodigo() != InsStockResumenTipoEstado::TIPO_REGULAR) {
                    $ins_stock_resumen->setInsStockResumenEstado(InsStockResumenTipoEstado::TIPO_REGULAR);
                }
            }
        }
    }

    /**
     * Metodo que controla el stock de cada insumo, de acuerdo a su resumen de stock
     * y actualiza el estado en el que se encuentra el resumen
     */
    static function controlCostoInicializadoInsumos($id = false) {

        if (!$id) {
            $ins_insumos = InsInsumo::getInsInsumos();
        } else {
            $ins_insumo = InsInsumo::getOxId($id);
            $ins_insumos[] = $ins_insumo;
        }

        foreach ($ins_insumos as $ins_insumo) {
            //Gral::prr($ins_insumo);
            $ins_insumo->setInicializarCostoCero();
        }
    }

    /**
     * Metodo que enviar informacion del server que podria ser variable, como la IP del servidor
     */
    static function enviarCorreoInfoServer() {
        //Gral::prr($_SERVER);

        $msg = "<pre>" . print_r($_SERVER, true) . "</pre>";
        $mail_asunto = Gral::getConfig('conf_proyecto_min') . " - Info Server - " . date("d/m/Y H:i:s");

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $mail = new PHPMailer();

        $mail->IsSMTP(); //indico a la clase que use SMTP
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 2;
        $mail->Timeout = 20;
        if (Mail::MAIL_SECURE != '') {
            $mail->SMTPSecure = Mail::MAIL_SECURE;
        }
        $mail->CharSet = 'UTF-8';

        $mail->Host = Mail::MAIL_SERVIDOR_ENVIO; // SMTP server
        $mail->Username = Mail::MAIL_CASILLA_USUARIO;
        $mail->Password = Mail::MAIL_PASS_ENVIO;
        $mail->Port = Mail::MAIL_PUERTO_ENVIO;

        $mail->From = Mail::MAIL_CASILLA_ENVIO;
        $mail->FromName = Mail::MAIL_NOMBRE_REMITENTE;
        $mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO);
        $mail->AddAddress("psrosen81@gmail.com");

        $mail->IsHTML(true);
        $mail->Subject = $mail_asunto;

        $mail->Body = $msg;

        $mail->Send();
    }

    /**
     * Metodo que controla diariamente el estado de los cheques de acuerdo a 
     * la fecha de cobro y vencimiento del mismo
     */
    static function execControlEstadoDeCheques() {
        $fnd_chq_cheques = FndChqCheque::getFndChqCheques();
        foreach ($fnd_chq_cheques as $fnd_chq_cheque) {
            $fnd_chq_cheque->controlEstadoDeCheque();
        }
    }

    /**
     * Metodo que ejecuta los procesos automaticos vinculados a ML
     */
    static function execProcesoAutomaticoML() {
        // ---------------------------------------------------------------------
        // se envian datos hacia ML
        // ---------------------------------------------------------------------
        self::execActualizarInsumosPublicadosHaciaML();

        // ---------------------------------------------------------------------
        // se obtiene datos desde ML para auditoria
        // ---------------------------------------------------------------------
        //self::execActualizarInsumosPublicadosDesdeML();
    }

    /**
     * Metodo que recorre todos los productos publicados en ML, de acuerdo a la BD
     * y actualiza en local algunos campos de auditoria para controlar consistencia
     * entre datos locales y datos en ML, como ser precio, stock, etc.
     */
    static function execActualizarInsumosPublicadosHaciaML() {

        $c = new Criterio();
        $c->add(InsVentaMlInfo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        //$c->add(MlItemStatus::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(InsVentaMlInfo::GEN_TABLA);
        $c->addRealJoin(MlItemStatus::GEN_TABLA, MlItemStatus::GEN_ATTR_ID, InsVentaMlInfo::GEN_ATTR_ML_ITEM_STATUS_ID);
        $c->addOrden(InsVentaMlInfo::GEN_ATTR_ML_ULTIMA_ACTUALIZACION, Criterio::_ASC);
        $c->addOrden(InsVentaMlInfo::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $p = new Paginador(600, 1);
        //$p = null;

        $ins_venta_ml_infos = InsVentaMlInfo::getInsVentaMlInfos($p, $c);
        //Gral::prr($ins_venta_ml_infos);
        //return;

        foreach ($ins_venta_ml_infos as $ins_venta_ml_info) {
            Gral::pr($ins_venta_ml_info->getInsInsumoId());
            $ins_insumo = $ins_venta_ml_info->getInsInsumo();

            // -----------------------------------------------------------------
            // se recalcula precio para la publicacion
            // -----------------------------------------------------------------
            $ins_venta_ml_info->setRecalcularPrecioParaML();

            // -----------------------------------------------------------------
            // se actualiza publicacion en ML
            // -----------------------------------------------------------------
            $result = MlGeneral::setActualizar($ins_insumo, $ins_venta_ml_info);
            //Gral::prr($result);

            $body = $result['body'];
            if ($body) {
                //Gral::prr($body);

                $ml_id = $body->id;
                $ml_permalink = $body->permalink;
                $ml_start_time = $body->start_time;
                $ml_expiration_time = $body->expiration_time;
                $ml_price = $body->price;
                $ml_base_price = $body->base_price;
                $ml_status = $body->status;
                $ml_initial_quantity = $body->initial_quantity;
                $ml_available_quantity = $body->available_quantity;
                $ml_sold_quantity = $body->sold_quantity;

                $ml_item_status = MlItemStatus::getOxCodigoMl($ml_status);

                $ins_venta_ml_info->setMlPrice($ml_price);
                $ins_venta_ml_info->setMlAvailableQuantity($ml_available_quantity);
                $ins_venta_ml_info->setMlSoldQuantity($ml_sold_quantity);
                $ins_venta_ml_info->setMlStatus($ml_status);

                if ($ml_item_status) {
                    $ins_venta_ml_info->setMlItemStatusId($ml_item_status->getId());
                }

                $ins_venta_ml_info->setMlUltimaActualizacion(date('Y-m-d H:i:s'));
                $ins_venta_ml_info->save();
            }
        }
    }

    /**
     * Metodo que recorre todos los productos publicados en ML, de acuerdo a la BD
     * y actualiza en local algunos campos de auditoria para controlar consistencia
     * entre datos locales y datos en ML, como ser precio, stock, etc.
     */
    static function execActualizarInsumosPublicadosDesdeML() {

        $c = new Criterio();
        $c->add(InsVentaMlInfo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        //$c->add(MlItemStatus::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(InsVentaMlInfo::GEN_TABLA);
        $c->addRealJoin(MlItemStatus::GEN_TABLA, MlItemStatus::GEN_ATTR_ID, InsVentaMlInfo::GEN_ATTR_ML_ITEM_STATUS_ID);
        //$c->addOrden(InsVentaMlInfo::GEN_ATTR_ML_ULTIMA_ACTUALIZACION, Criterio::_ASC);
        $c->addOrden(InsVentaMlInfo::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $p = new Paginador(1, 1);
        //$p = null;

        $ins_venta_ml_infos = InsVentaMlInfo::getInsVentaMlInfos($p, $c);
        //Gral::prr($ins_venta_ml_infos);
        //return;

        foreach ($ins_venta_ml_infos as $ins_venta_ml_info) {
            //Gral::pr($ins_venta_ml_info->getInsInsumoId());
            $result = MlGeneral::getPublicacion($ins_venta_ml_info);
            //Gral::prr($result);

            $body = $result['body'];
            if ($body) {
                //Gral::prr($body);

                $ml_id = $body->id;
                $ml_permalink = $body->permalink;
                $ml_start_time = $body->start_time;
                $ml_expiration_time = $body->expiration_time;
                $ml_price = $body->price;
                $ml_base_price = $body->base_price;
                $ml_status = $body->status;
                $ml_initial_quantity = $body->initial_quantity;
                $ml_available_quantity = $body->available_quantity;
                $ml_sold_quantity = $body->sold_quantity;

                $ml_item_status = MlItemStatus::getOxCodigoMl($ml_status);

                $ins_venta_ml_info->setMlPrice($ml_price);
                $ins_venta_ml_info->setMlAvailableQuantity($ml_available_quantity);
                $ins_venta_ml_info->setMlSoldQuantity($ml_sold_quantity);
                $ins_venta_ml_info->setMlStatus($ml_status);

                if ($ml_item_status) {
                    $ins_venta_ml_info->setMlItemStatusId($ml_item_status->getId());
                }

                $ins_venta_ml_info->setMlUltimaActualizacion(date('Y-m-d H:i:s'));
                $ins_venta_ml_info->save();
            }
        }
    }

    static function execInsInsumoActualizarClaves() {
        $c = new Criterio();
        //$c->add(InsInsumo::GEN_ATTR_ID, 28598, Criterio::IGUAL);
        $c->addTabla(InsInsumo::GEN_TABLA);
        $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(10, 1);
        $p = null;

        $ins_insumos = InsInsumo::getInsInsumos($p, $c);

        $cont = 0;
        $sql_update = "";
        foreach ($ins_insumos as $ins_insumo) {
            $cont++;
            $sql_update .= "UPDATE ins_insumo SET claves = '" . $ins_insumo->getInsInsumoClaves() . "', claves_atributos = '" . $ins_insumo->getInsInsumoClavesAtributos() . "' WHERE id = " . $ins_insumo->getId() . '; ';

            if ($cont == 1000) {
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                $ejec->execute();

                $sql_update = '';
            }
        }
        $ejec = new Ejecucion();
        $ejec->setSql($sql_update);
        $ejec->execute();
        //Gral::pr($sql_update);
    }

    static function execPrvInsumoActualizarClaves() {

        // control de hora de ejecucion
        $hora_actual = date('H');
        if ($hora_actual != '04') {
            // se controla que solo se ejecute a las 21 horas
            return;
        }

        $c = new Criterio();
        $c->addTabla(PrvInsumo::GEN_TABLA);
        $c->addOrden(PrvInsumo::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(10, 1);
        $p = null;

        $prv_insumos = PrvInsumo::getPrvInsumos($p, $c);

        $cont = 0;
        $sql_update = "";
        foreach ($prv_insumos as $prv_insumo) {
            $cont++;
            $sql_update .= "UPDATE prv_insumo SET claves = '" . $prv_insumo->getPrvInsumoClaves() . "' WHERE id = " . $prv_insumo->getId() . '; ';

            if ($cont == 1000) {
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                $ejec->execute();

                $sql_update = '';
            }
        }
        $ejec = new Ejecucion();
        $ejec->setSql($sql_update);
        $ejec->execute();
        //Gral::pr($sql_update);
    }

    static function execInsCategoriaReordenar() {

        $c = new Criterio();
        $c->addTabla(InsCategoria::GEN_TABLA);
        $c->addOrden(InsCategoria::GEN_ATTR_FAMILIA_DESCRIPCION, Criterio::_ASC);
        $c->setCriterios();

        $p = null;
        $ins_categorias = InsCategoria::getInsCategorias($p, $c);

        $cont = 0;
        $sql_update = "";
        foreach ($ins_categorias as $ins_categoria) {
            $cont++;
            $sql_update .= "UPDATE ins_categoria SET orden = '" . $cont . "' WHERE id = " . $ins_categoria->getId() . '; ';

            if ($cont == 1000) {
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                $ejec->execute();

                $sql_update = '';
            }
        }
        $ejec = new Ejecucion();
        $ejec->setSql($sql_update);
        $ejec->execute();
        //Gral::pr($sql_update);
    }

    /**
     * Metodo que ejecuta un optimizaciones en las tablas del sistema
     */
    static function execBdOptimization() {
        $hora_actual = date('H');

        self::execBdOptimizationVacuumAnalyze();

        if ($hora_actual == '02') {
            self::execBdOptimizationReindex();
        }
    }

    static function execBdOptimizationVacuumAnalyze() {
        $ejec = new Ejecucion();
        $sql = 'VACUUM (ANALYZE)';
        $ejec->setSql($sql);
        $ejec->execute();
    }

    static function execBdOptimizationReindex() {
        $ejec = new Ejecucion();
        $sql = 'REINDEX DATABASE ' . Gral::getConfig('bd_base') . ';';
        $ejec->setSql($sql);
        $ejec->execute();
    }

    static function controlVtaOrdenVentasEstadoFacturacion() {
        // ---------------------------------------------------------------------
        // se verifica el estado de facturacion de las OV
        // ---------------------------------------------------------------------
        $c = new Criterio();
        $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);

        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaOrdenVentaTipoEstadoFacturacion::GEN_TABLA, VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID);
        $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addRealJoin(VtaVendedor::GEN_TABLA, VtaVendedor::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_VENDEDOR_ID);

        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas(null, $c);
        //Gral::prr($vta_orden_ventas);
        foreach ($vta_orden_ventas as $vta_orden_venta) {
            $cantidad_disponible_facturar = $vta_orden_venta->getCantidadDisponibleEnFactura();

            if ($cantidad_disponible_facturar <= 0) {
                //Gral::prr($vta_orden_venta);
            
                // -------------------------------------------------------------
                // se regulariza el estado de facturacion de la OV
                // -------------------------------------------------------------
                $vta_orden_venta->setVtaOrdenVentaEstadoFacturacion(VtaOrdenVentaTipoEstadoFacturacion::TIPO_FACTURA_TOTAL, $observacion = 'Regularizado por proceso automatico');
            }
        }
    }
    
    static function controlVtaOrdenVentasFinalizadas() {
        $c = new Criterio();
        $c->add(VtaOrdenVentaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_TERMINAL, 1, Criterio::IGUAL);
        $c->add(VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_TERMINAL, 1, Criterio::IGUAL);
        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(VtaOrdenVentaTipoEstado::GEN_TABLA, VtaOrdenVentaTipoEstado::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaOrdenVentaTipoEstadoFacturacion::GEN_TABLA, VtaOrdenVentaTipoEstadoFacturacion::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_FACTURACION_ID);
        $c->addRealJoin(VtaOrdenVentaTipoEstadoRemision::GEN_TABLA, VtaOrdenVentaTipoEstadoRemision::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_ORDEN_VENTA_TIPO_ESTADO_REMISION_ID);
        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $p = new Paginador(3000, 1);
        $p = null;

        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
        //Gral::prr($vta_orden_ventas);
        foreach ($vta_orden_ventas as $vta_orden_venta) {
            // -------------------------------------------------------------
            // se regulariza el estado finalizado de la OV
            // -------------------------------------------------------------
            $vta_orden_venta->setVtaOrdenVentaEstado(VtaOrdenVentaTipoEstado::TIPO_FINALIZADO, $observacion = 'Regularizado por proceso automatico');
        }
    }

    static function controlComprobantesImporteTotalRegistrado() {

        // -----------------------------------------------------------------------------
        // vta_presupuesto
        // -----------------------------------------------------------------------------
        $sql = "SELECT * FROM vta_presupuesto WHERE importe_total = 0 ORDER BY id ASC";
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        while ($fila = pg_fetch_object($cons->getResultado())) {
            //Gral::prr($fila);
            $id = $fila->id;

            $vta_presupuesto = VtaPresupuesto::getOxId($id);
            if ($vta_presupuesto) {
                $importe_total = $vta_presupuesto->getImporteTotalPresupuestoConIva();

                Gral::pr($vta_presupuesto->getCodigo());
                Gral::pr($importe_total);

                $sql_update = "UPDATE vta_presupuesto SET importe_total = " . $importe_total . " WHERE id = " . $vta_presupuesto->getId();
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                $ejec->execute();
            }
        }

        // -----------------------------------------------------------------------------
        // vta_factura
        // -----------------------------------------------------------------------------
        $sql = "SELECT * FROM vta_factura WHERE importe_total = 0 ORDER BY id ASC";
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        while ($fila = pg_fetch_object($cons->getResultado())) {
            //Gral::prr($fila);
            $id = $fila->id;

            $vta_factura = VtaFactura::getOxId($id);
            if ($vta_factura) {
                $importe_total = $vta_factura->getVtaFacturaTotal();

                Gral::pr($vta_factura->getCodigo());
                Gral::pr($importe_total);

                $sql_update = "UPDATE vta_factura SET importe_total = " . $importe_total . " WHERE id = " . $vta_factura->getId();
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                $ejec->execute();
            }
        }

        // -----------------------------------------------------------------------------
        // vta_nota_credito
        // -----------------------------------------------------------------------------
        $sql = "SELECT * FROM vta_nota_credito WHERE importe_total = 0 ORDER BY id ASC";
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        while ($fila = pg_fetch_object($cons->getResultado())) {
            //Gral::prr($fila);
            $id = $fila->id;

            $vta_nota_credito = VtaNotaCredito::getOxId($id);
            if ($vta_nota_credito) {
                $importe_total = $vta_nota_credito->getVtaNotaCreditoTotal();

                Gral::pr($vta_nota_credito->getCodigo());
                Gral::pr($importe_total);

                $sql_update = "UPDATE vta_nota_credito SET importe_total = " . $importe_total . " WHERE id = " . $vta_nota_credito->getId();
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                $ejec->execute();
            }
        }

        // -----------------------------------------------------------------------------
        // vta_nota_debito
        // -----------------------------------------------------------------------------
        $sql = "SELECT * FROM vta_nota_debito WHERE importe_total = 0 ORDER BY id ASC";
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        while ($fila = pg_fetch_object($cons->getResultado())) {
            //Gral::prr($fila);
            $id = $fila->id;

            $vta_nota_debito = VtaNotaDebito::getOxId($id);
            if ($vta_nota_debito) {
                $importe_total = $vta_nota_debito->getVtaNotaDebitoTotal();

                Gral::pr($vta_nota_debito->getCodigo());
                Gral::pr($importe_total);

                $sql_update = "UPDATE vta_nota_debito SET importe_total = " . $importe_total . " WHERE id = " . $vta_nota_debito->getId();
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                $ejec->execute();
            }
        }

        // -----------------------------------------------------------------------------
        // vta_recibo
        // -----------------------------------------------------------------------------
        $sql = "SELECT * FROM vta_recibo WHERE importe_total = 0 ORDER BY id ASC";
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        while ($fila = pg_fetch_object($cons->getResultado())) {
            //Gral::prr($fila);
            $id = $fila->id;

            $vta_recibo = VtaRecibo::getOxId($id);
            if ($vta_recibo) {
                $importe_total = $vta_recibo->getVtaReciboTotal();

                Gral::pr($vta_recibo->getCodigo());
                Gral::pr($importe_total);

                $sql_update = "UPDATE vta_recibo SET importe_total = " . $importe_total . " WHERE id = " . $vta_recibo->getId();
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                $ejec->execute();
            }
        }

        // -----------------------------------------------------------------------------
        // pde_factura
        // -----------------------------------------------------------------------------
        $sql = "SELECT * FROM pde_factura WHERE importe_total = 0 ORDER BY id ASC";
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        while ($fila = pg_fetch_object($cons->getResultado())) {
            //Gral::prr($fila);
            $id = $fila->id;

            $pde_factura = PdeFactura::getOxId($id);
            if ($pde_factura) {
                $importe_total = $pde_factura->getPdeFacturaTotal();

                Gral::pr($pde_factura->getCodigo());
                Gral::pr($importe_total);

                $sql_update = "UPDATE pde_factura SET importe_total = " . $importe_total . " WHERE id = " . $pde_factura->getId();
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                $ejec->execute();
            }
        }

        // -----------------------------------------------------------------------------
        // pde_nota_credito
        // -----------------------------------------------------------------------------
        $sql = "SELECT * FROM pde_nota_credito WHERE importe_total = 0 ORDER BY id ASC";
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        while ($fila = pg_fetch_object($cons->getResultado())) {
            //Gral::prr($fila);
            $id = $fila->id;

            $pde_nota_credito = PdeNotaCredito::getOxId($id);
            if ($pde_nota_credito) {
                $importe_total = $pde_nota_credito->getPdeNotaCreditoTotal();

                Gral::pr($pde_nota_credito->getCodigo());
                Gral::pr($importe_total);

                $sql_update = "UPDATE pde_nota_credito SET importe_total = " . $importe_total . " WHERE id = " . $pde_nota_credito->getId();
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                $ejec->execute();
            }
        }

        // -----------------------------------------------------------------------------
        // pde_nota_debito
        // -----------------------------------------------------------------------------
        $sql = "SELECT * FROM pde_nota_debito WHERE importe_total = 0 ORDER BY id ASC";
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        while ($fila = pg_fetch_object($cons->getResultado())) {
            //Gral::prr($fila);
            $id = $fila->id;

            $pde_nota_debito = PdeNotaDebito::getOxId($id);
            if ($pde_nota_debito) {
                $importe_total = $pde_nota_debito->getPdeNotaDebitoTotal();

                Gral::pr($pde_nota_debito->getCodigo());
                Gral::pr($importe_total);

                $sql_update = "UPDATE pde_nota_debito SET importe_total = " . $importe_total . " WHERE id = " . $pde_nota_debito->getId();
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                $ejec->execute();
            }
        }

        // -----------------------------------------------------------------------------
        // pde_recibo
        // -----------------------------------------------------------------------------
        $sql = "SELECT * FROM pde_recibo WHERE importe_total = 0 ORDER BY id ASC";
        $cons = new Consulta();
        $cons->setSQL($sql);
        $cons->execute();

        while ($fila = pg_fetch_object($cons->getResultado())) {
            //Gral::prr($fila);
            $id = $fila->id;

            $pde_recibo = PdeRecibo::getOxId($id);
            if ($pde_recibo) {
                $importe_total = $pde_recibo->getPdeReciboTotal();

                Gral::pr($pde_recibo->getCodigo());
                Gral::pr($importe_total);

                $sql_update = "UPDATE pde_recibo SET importe_total = " . $importe_total . " WHERE id = " . $pde_recibo->getId();
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                $ejec->execute();
            }
        }
    }

    static function execAFIPSolicitudCAEParaComprobantesSinCAE() {

        // ----------------------------------------------------------------------
        // facturas sin CAE
        // ----------------------------------------------------------------------
        $c = new Criterio();
        $c->add(VtaPuntoVenta::GEN_ATTR_SOLICITA_CAE, 1, Criterio::IGUAL);
        $c->add(VtaFacturaTipoEstado::GEN_ATTR_ANULADO, 1, Criterio::DISTINTO);
        $c->add(VtaFactura::GEN_ATTR_FECHA_EMISION, '2021-06-07', Criterio::MAYORIGUAL);
        $c->add(VtaFactura::GEN_ATTR_CAE, Criterio::VACIO, Criterio::IGUAL);
        $c->addTabla(VtaFactura::GEN_TABLA);
        $c->addRealJoin(VtaFacturaTipoEstado::GEN_TABLA, VtaFacturaTipoEstado::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_FACTURA_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaPuntoVenta::GEN_TABLA, VtaPuntoVenta::GEN_ATTR_ID, VtaFactura::GEN_ATTR_VTA_PUNTO_VENTA_ID);
        $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $p = new Paginador(10, 1);
        //$p = null;

        $vta_facturas = VtaFactura::getVtaFacturas($p, $c);
        //Gral::prr($vta_facturas);
        foreach ($vta_facturas as $vta_factura) {
            Gral::prr($vta_factura);
            $vta_punto_venta = $vta_factura->getVtaPuntoVenta();
            if ($vta_punto_venta->getSolicitaCae()) {


                $arr_comprobantes_afip = $vta_factura->getWsFeOpeSolicitudConNroComprobanteAutorizadoEnAfip();
                Gral::prr($arr_comprobantes_afip);
                $afip_codigo_autorizacion = '';
                $afip_codigo_autorizacion_existe = false;
                if ($arr_comprobantes_afip && is_array($arr_comprobantes_afip)) {
                    foreach ($arr_comprobantes_afip as $ws_fe_ope_solicitud_id => $arr_comprobante_afip) {
                        $afip_codigo_autorizacion = $arr_comprobante_afip['codigo_autorizacion'];
                        if (trim($afip_codigo_autorizacion) != '') {
                            $afip_codigo_autorizacion_existe = true;
                        }
                    }
                    if ($afip_codigo_autorizacion_existe) {
                        Gral::pr('continue');
                        Gral::pr('Error 1001 - El comprobante tiene un nro vinculado que ya ha sido autorizado');                        
                        continue;
                    }
                }

                // --------------------------------------------------------------
                // se genera la solicitud
                // --------------------------------------------------------------
                $ws_fe_param_tipo_concepto_id = 1;
                $ws_fe_afip_tipo_documento = 80;
                $ws_fe_ope_solicitud = WsFeOpeSolicitud::setInicializarWsFeOpeSolicitud($vta_factura->getId(), $vta_factura->getGralEmpresaId(), $vta_factura->getVtaPuntoVentaId(), $vta_factura->getVtaTipoFacturaId(), $ws_fe_param_tipo_concepto_id, $ws_fe_afip_tipo_documento, $observacion = 'Reintento Automatico - Procesos Automaticos '.DbConfig::CONFIG_SISTEMA_NOMBRE);
                if ($ws_fe_ope_solicitud) {
                    // ----------------------------------------------------------
                    // se solicita autorizacion a AFIP
                    // ----------------------------------------------------------
                    if($ws_fe_ope_solicitud->setEnviarWsFeOpeSolicitud()){
                        Gral::pr('CAE Autorizado correctamente');
                    }else{
                        Gral::pr('Error 1000 - No se pudo autorizar');                        
                    }
                }
            }
        }
    }
    
    /**
     * Metodo que controla conflictos de precios en presupuestos
     */
    static function execControlConflictosVtaPresupuestos() {

        $fecha_desde = '2018-09-01';
        $fecha_hasta = false;
        //$vta_presupuesto = VtaPresupuesto::getOxId(24317);
        $vta_presupuesto = false;

        // ---------------------------------------------------------------------
        // se ejecuta proceso para generar conflictos de presupuestos
        // ---------------------------------------------------------------------
        VtaPresupuestoConflicto::execControlConflictos($fecha_desde, $fecha_hasta, $vta_presupuesto);
    }
    
    /**
     * Metodo que controla conflictos de precios en OVs
     */
    static function execControlConflictosVtaOrdenVentas() {

        $fecha_desde = '2018-09-01';
        $fecha_hasta = false;
        //$vta_presupuesto = VtaPresupuesto::getOxId(24317);
        $vta_presupuesto = false;

        // ---------------------------------------------------------------------
        // se ejecuta proceso para generar conflictos de OVs
        // ---------------------------------------------------------------------
        VtaOrdenVentaConflicto::execControlConflictos($fecha_desde, $fecha_hasta, $vta_presupuesto);
    }
    
    /**
     * Metodo que actualiza los resumenes de importes de comprobantes
     */    
    static function execComprobantesActualizarImporteResumen() {

        // --------------------------------------------------------------------------
        // Obtener vta_facturas
        // --------------------------------------------------------------------------
        $c = new Criterio();
        $c->addTabla(VtaFactura::GEN_TABLA);
        $c->addOrden(VtaFactura::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $cantidad = 10000;
        $p = new Paginador($cantidad, 1);
        $p = null;

        Gral::pr(date('H:i:s'), '- Inicia ' . $cantidad . ' VtaFacturas');
        $vta_facturas = VtaFactura::getVtaFacturas($p, $c);
        foreach ($vta_facturas as $vta_factura) {
            // --------------------------------------------------------------------------
            // se actualiza comprobante
            // --------------------------------------------------------------------------
            $vta_factura->setActualizarResumenComprobante();
        }
        Gral::pr(date('H:i:s'), '- Finaliza ' . $cantidad . ' VtaFacturas');

        // --------------------------------------------------------------------------
        // Obtener vta_nota_credito
        // --------------------------------------------------------------------------
        $c = new Criterio();
        $c->addTabla(VtaNotaCredito::GEN_TABLA);
        $c->addOrden(VtaNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $cantidad = 10000;
        $p = new Paginador($cantidad, 1);
        $p = null;

        Gral::pr(date('H:i:s'), '- Inicia ' . $cantidad . ' VtaNotaCreditos');
        $vta_nota_creditos = VtaNotaCredito::getVtaNotaCreditos($p, $c);
        foreach ($vta_nota_creditos as $vta_nota_credito) {
            // --------------------------------------------------------------------------
            // se actualiza comprobante
            // --------------------------------------------------------------------------
            $vta_nota_credito->setActualizarResumenComprobante();
        }
        Gral::pr(date('H:i:s'), '- Finaliza ' . $cantidad . ' VtaNotaCreditos');

        // --------------------------------------------------------------------------
        // Obtener vta_nota_debito
        // --------------------------------------------------------------------------
        $c = new Criterio();
        $c->addTabla(VtaNotaDebito::GEN_TABLA);
        $c->addOrden(VtaNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $cantidad = 10000;
        $p = new Paginador($cantidad, 1);
        $p = null;

        Gral::pr(date('H:i:s'), '- Inicia ' . $cantidad . ' VtaNotaDebitos');
        $vta_nota_debitos = VtaNotaDebito::getVtaNotaDebitos($p, $c);
        foreach ($vta_nota_debitos as $vta_nota_debito) {
            // --------------------------------------------------------------------------
            // se actualiza comprobante
            // --------------------------------------------------------------------------
            $vta_nota_debito->setActualizarResumenComprobante();
        }
        Gral::pr(date('H:i:s'), '- Finaliza ' . $cantidad . ' VtaNotaDebitos');

        // --------------------------------------------------------------------------
        // Obtener vta_recibo
        // --------------------------------------------------------------------------
        $c = new Criterio();
        $c->addTabla(VtaRecibo::GEN_TABLA);
        $c->addOrden(VtaRecibo::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $cantidad = 10000;
        $p = new Paginador($cantidad, 1);
        $p = null;

        Gral::pr(date('H:i:s'), '- Inicia ' . $cantidad . ' VtaRecibos');
        $vta_recibos = VtaRecibo::getVtaRecibos($p, $c);
        foreach ($vta_recibos as $vta_recibo) {
            // --------------------------------------------------------------------------
            // se actualiza comprobante
            // --------------------------------------------------------------------------
            $vta_recibo->setActualizarResumenComprobante();
        }
        Gral::pr(date('H:i:s'), '- Finaliza ' . $cantidad . ' VtaRecibos');

        //---------------------------------------------------------------------
        // --------------------------------------------------------------------------
        // Obtener pde_facturas
        // --------------------------------------------------------------------------
        $c = new Criterio();
        $c->addTabla(PdeFactura::GEN_TABLA);
        $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $cantidad = 10000;
        $p = new Paginador($cantidad, 1);
        $p = null;

        Gral::pr(date('H:i:s'), '- Inicia ' . $cantidad . ' PdeFacturas');
        $pde_facturas = PdeFactura::getPdeFacturas($p, $c);
        foreach ($pde_facturas as $pde_factura) {
            // --------------------------------------------------------------------------
            // se actualiza comprobante
            // --------------------------------------------------------------------------
            $pde_factura->setActualizarResumenComprobante();
        }
        Gral::pr(date('H:i:s'), '- Finaliza ' . $cantidad . ' PdeFacturas');

        // --------------------------------------------------------------------------
        // Obtener pde_nota_credito
        // --------------------------------------------------------------------------
        $c = new Criterio();
        $c->addTabla(PdeNotaCredito::GEN_TABLA);
        $c->addOrden(PdeNotaCredito::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $cantidad = 10000;
        $p = new Paginador($cantidad, 1);
        $p = null;

        Gral::pr(date('H:i:s'), '- Inicia ' . $cantidad . ' PdeNotaCreditos');
        $pde_nota_creditos = PdeNotaCredito::getPdeNotaCreditos($p, $c);
        foreach ($pde_nota_creditos as $pde_nota_credito) {
            // --------------------------------------------------------------------------
            // se actualiza comprobante
            // --------------------------------------------------------------------------
            $pde_nota_credito->setActualizarResumenComprobante();
        }
        Gral::pr(date('H:i:s'), '- Finaliza ' . $cantidad . ' PdeNotaCreditos');

        // --------------------------------------------------------------------------
        // Obtener pde_nota_debito
        // --------------------------------------------------------------------------
        $c = new Criterio();
        $c->addTabla(PdeNotaDebito::GEN_TABLA);
        $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $cantidad = 10000;
        $p = new Paginador($cantidad, 1);
        $p = null;

        Gral::pr(date('H:i:s'), '- Inicia ' . $cantidad . ' PdeNotaDebitos');
        $pde_nota_debitos = PdeNotaDebito::getPdeNotaDebitos($p, $c);
        foreach ($pde_nota_debitos as $pde_nota_debito) {
            // --------------------------------------------------------------------------
            // se actualiza comprobante
            // --------------------------------------------------------------------------
            $pde_nota_debito->setActualizarResumenComprobante();
        }
        Gral::pr(date('H:i:s'), '- Finaliza ' . $cantidad . ' PdeNotaDebitos');

        // --------------------------------------------------------------------------
        // Obtener pde_recibo
        // --------------------------------------------------------------------------
        $c = new Criterio();
        $c->addTabla(PdeRecibo::GEN_TABLA);
        $c->addOrden(PdeRecibo::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $cantidad = 10000;
        $p = new Paginador($cantidad, 1);
        $p = null;

        Gral::pr(date('H:i:s'), '- Inicia ' . $cantidad . ' PdeRecibos');
        $pde_recibos = PdeRecibo::getPdeRecibos($p, $c);
        foreach ($pde_recibos as $pde_recibo) {
            // --------------------------------------------------------------------------
            // se actualiza comprobante
            // --------------------------------------------------------------------------
            $pde_recibo->setActualizarResumenComprobante();
        }
        Gral::pr(date('H:i:s'), '- Finaliza ' . $cantidad . ' PdeRecibos');

        // --------------------------------------------------------------------------
        // Obtener vta_orden_venta
        // --------------------------------------------------------------------------
        $c = new Criterio();
        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $cantidad = 10000;
        $p = new Paginador($cantidad, 1);
        $p = null;

        Gral::pr(date('H:i:s'), '- Inicia ' . $cantidad . ' VtaOrdenVentas');
        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
        foreach ($vta_orden_ventas as $vta_orden_venta) {
            // --------------------------------------------------------------------------
            // se actualiza comprobante   
            // --------------------------------------------------------------------------
            $vta_orden_venta->setActualizarResumenComprobante();
        }
        Gral::pr(date('H:i:s'), '- Finaliza ' . $cantidad . ' VtaOrdenVentas');

        // --------------------------------------------------------------------------
        // Obtener pde_orden_pago
        // --------------------------------------------------------------------------
        $c = new Criterio();
        $c->addTabla(PdeOrdenPago::GEN_TABLA);
        $c->addOrden(PdeOrdenPago::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $cantidad = 10000;
        $p = new Paginador($cantidad, 1);
        $p = null;

        Gral::pr(date('H:i:s'), '- Inicia ' . $cantidad . ' PdeOrdenPagos');
        $pde_orden_pagos = PdeOrdenPago::getPdeOrdenPagos($p, $c);
        foreach ($pde_orden_pagos as $pde_orden_pago) {
            // --------------------------------------------------------------------------
            // se actualiza comprobante   
            // --------------------------------------------------------------------------
            $pde_orden_pago->setActualizarResumenComprobante();
        }
        Gral::pr(date('H:i:s'), '- Finaliza ' . $cantidad . ' PdeOrdenPagos');

        // --------------------------------------------------------------------------
        // Obtener pde_oc
        // --------------------------------------------------------------------------
        $c = new Criterio();
        $c->addTabla(PdeOc::GEN_TABLA);
        $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $cantidad = 10000;
        $p = new Paginador($cantidad, 1);
        $p = null;

        Gral::pr(date('H:i:s'), '- Inicia ' . $cantidad . ' PdeOcs');
        $pde_ocs = PdeOc::getPdeOcs($p, $c);
        foreach ($pde_ocs as $pde_oc) {
            // --------------------------------------------------------------------------
            // se actualiza comprobante   
            // --------------------------------------------------------------------------
            $pde_oc->setActualizarResumenComprobante();
        }
        Gral::pr(date('H:i:s'), '- Finaliza ' . $cantidad . ' PdeOcs');
    }
    
    static function execActualizarGralMonedaTipoCambio(){
        // ---------------------------------------------------------------------
        // se obtiene el tipo de cambio desde la API de Exchange Rate
        // ---------------------------------------------------------------------
        GralMoneda::getActualizarTipoCambioDesdeAPIExchangeRate();
    }
    
    static function execActualizarPuntosStockSugeridos(){
        
        // ---------------------------------------------------------------------
        // control de dia de ejecucion
        // ---------------------------------------------------------------------
        $hora_actual = date('w');
        if ($hora_actual != 0) {
            // se controla que solo se ejecute los dias domingo (0)
            return;
        }
        
        // ---------------------------------------------------------------------
        // se setean los puntos de stock sugeridos para depositos centrales
        // ---------------------------------------------------------------------
        InsInsumoPanPanol::setPuntosStockSugeridosDepositoCentral();
        
        // ---------------------------------------------------------------------
        // se setean los puntos de stock sugeridos para las sucursales
        // ---------------------------------------------------------------------
        InsInsumoPanPanol::setPuntosStockSugeridosSucursal();
    }
    
    static function exexGenerarListaPreciosEnPDF(){
        include Gral::getPathAbs() . 'comps/tcpdf/pdf_comprobante_interno_min.php';

        // -----------------------------------------------------------------------------
        // Info del Header
        // -----------------------------------------------------------------------------
        $titulo = "Lista de Precios";
        $subtitulo = "Generado el ".date('d/m/Y').' a las '.date('H:i:s');
        $observacion = "Los precios estan expresados con IVA Incluido";

        // -----------------------------------------------------------------------------
        // Se inicializa PDF
        // -----------------------------------------------------------------------------
        $pdf = new PDFComprobanteInternoMin();
        $pdf->setTitulo($titulo);
        $pdf->setSubtitulo($subtitulo);
        $pdf->setObservacion($observacion);

        // -----------------------------------------------------------------------------

        $pdf->AddPage();
        $pdf->SetFont('Helvetica', 'B', 12);

        $pdf->setX(0);
        $pdf->setY(35);

        $pdf->SetMargins(10, 35, 10, true);
        $pdf->SetAutoPageBreak(TRUE, 20);

        // -----------------------------------------------------------------------------
        // Parametros
        // -----------------------------------------------------------------------------
        $param = array(
        );

        // -----------------------------------------------------------------------------
        // Productos
        // -----------------------------------------------------------------------------
        $archivo = Gral::getPathAbs() . "admin/ajax/modulos/ins_insumo_precios_gestion/pdf_ins_lista_precio_plantilla_produtos.php";
        $html_tabla_leyendas = Gral::get_include_contents($archivo, $param);

        $pdf->writeHTML($html_tabla_leyendas);

        $nombre = DbConfig::CONFIG_CONF_PROYECTO_MIN . '-Lista-Precio-'.date('Y-m-d').'.pdf';

        //$pdf->Output($nombre, 'I');
        $pdf->Output(DbConfig::PATH_ABSOLUTO.'export/'.$nombre, 'F');

    }
    
    static function execSetearUrlTiendaEnInsumos(){
        $ins_insumos = InsInsumo::getInsInsumos();
        foreach($ins_insumos as $ins_insumo){
            // ---------------------------------------------------------------------
            // se setea URL para Tienda Integrada
            // ---------------------------------------------------------------------
            if ($ins_insumo->getUrlTienda() == '') {
                $url_tienda = $ins_insumo->getId() . '-' . substr(Gral::getStringSaneadoSinCaracteresEspeciales($ins_insumo->getDescripcion()), 0, 90);

                $sql = "UPDATE ins_insumo SET url_tienda = '".$url_tienda."' WHERE id = ".$ins_insumo->getId();

                $ejec = new Ejecucion();
                $ejec->setSql($sql);
                $ejec->execute();
                
            }
        }
    }

    static function execSetearClavesTiendaEnInsumos(){
        $ins_insumos = InsInsumo::getInsInsumos();
        foreach($ins_insumos as $ins_insumo){
            // ---------------------------------------------------------------------
            // se setea URL para Tienda Integrada
            // ---------------------------------------------------------------------
            $claves_tienda = $ins_insumo->getClavesTienda();
            $claves_tienda = Gral::getTextoPluralizado($claves_tienda);

            $sql = "UPDATE ins_insumo SET claves_tienda = '".$claves_tienda."' WHERE id = ".$ins_insumo->getId();

            $ejec = new Ejecucion();
            $ejec->setSql($sql);
            $ejec->execute();
                
        }
    }
    
    /**
     * Metodo que controla y fuerza ejecucion de resumenes de importes para las
     * tablas deberian tenerlo y NO lo tienen generado. 
     */
    static function execGenerarResumenesImportes(){
        $array = array(
            VtaFactura::GEN_TABLA,
            VtaNotaCredito::GEN_TABLA,
            VtaNotaDebito::GEN_TABLA,
            VtaRecibo::GEN_TABLA,
            VtaAjusteDebe::GEN_TABLA,
            VtaAjusteHaber::GEN_TABLA,
            PdeFactura::GEN_TABLA,
            PdeNotaCredito::GEN_TABLA,
            PdeNotaDebito::GEN_TABLA,
            PdeRecibo::GEN_TABLA,
            PdeOc::GEN_TABLA,
            VtaOrdenVenta::GEN_TABLA,
        );
        
        foreach($array as $tabla){
            $sql = "
                select 
                    ".$tabla.".creado as creado, 
                    ".$tabla.".id as id, 
                    ".$tabla."_importe.id as resumen_id
                from ".$tabla." 
                left join ".$tabla."_importe on ".$tabla."_importe.".$tabla."_id = ".$tabla.".id
                where true
                and ".$tabla."_importe.".$tabla."_id is null
                order by ".$tabla.".id asc
                -- limit 1
                ;
            ";
            //Gral::echoSqlSentence($sql);

            $cons = new Consulta();
            $cons->setSql($sql);
            $cons->execute();

            while($fila = pg_fetch_object($cons->getResultado())){
                //Gral::prr($fila);
                $id = $fila->id; 
                $clase = Gral::getDBClaseDesdeTabla($tabla);

                $o = $clase::getOxId($id);
                if($o){
                    //Gral::prr($o);
                    $o->setActualizarResumenComprobante();
                }
            }
        }
    }
        
        /**
     * 
     */
    static function execVincularClientesASucursalesPorVentas(){

        // ---------------------------------------------------------------------
        // control de dia de ejecucion
        // ---------------------------------------------------------------------
        $hora_actual = date('w');
        if ($hora_actual != 0) {
            // se controla que solo se ejecute los dias domingo (0)
            return;
        }
        
        $arr_sucursales_clientes = array();
        
        $fecha_hasta = date('Y-m-d');
        $fecha_desde = Date::sumarDias($fecha_hasta, -180);
        
        $c = new Criterio();
        $c->add(GralSucursal::GEN_ATTR_CODIGO, GralSucursal::SUCURSAL_PREVENTA, Criterio::DISTINTO); // no PREVENTA            
        $c->add(GralSucursal::GEN_ATTR_CODIGO, GralSucursal::SUCURSAL_TELEMARKETING, Criterio::DISTINTO);// no TLMKT  
        $c->add(GralSucursal::GEN_ATTR_CODIGO, GralSucursal::SUCURSAL_VIRTUAL, Criterio::DISTINTO); // no VIRTUAL
        
        if($fecha_desde){
            $c->add(VtaOrdenVenta::GEN_ATTR_CREADO, $fecha_desde.' 00:00:00', Criterio::MAYORIGUAL);            
        }
        if($fecha_hasta){
            $c->add(VtaOrdenVenta::GEN_ATTR_CREADO, $fecha_hasta.' 00:00:00', Criterio::MENORIGUAL);            
        }
        $c->add(VtaPresupuesto::GEN_ATTR_CLI_CLIENTE_ID, Criterio::VACIO, Criterio::IS_NOT_NULL);
        $c->addTabla(VtaOrdenVenta::GEN_TABLA);
        $c->addRealJoin(VtaPresupuesto::GEN_TABLA, VtaPresupuesto::GEN_ATTR_ID, VtaOrdenVenta::GEN_ATTR_VTA_PRESUPUESTO_ID);
        $c->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_GRAL_SUCURSAL_ID);
        $c->addOrden(VtaOrdenVenta::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();
        
        $p = new Paginador(10000, 1);
        $p = null;
        
        $vta_orden_ventas = VtaOrdenVenta::getVtaOrdenVentas($p, $c);
        //Gral::pr(count($vta_orden_ventas));
        //exit;
        foreach($vta_orden_ventas as $vta_orden_venta){
            $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
            $gral_sucursal = $vta_presupuesto->getGralSucursal();
            $cli_cliente = $vta_presupuesto->getCliCliente();
            
            if($cli_cliente->getId() != 'null'){
                $arr_sucursales_clientes[$cli_cliente->getCuit()][$gral_sucursal->getCodigo()]++;
            }
        }
        //Gral::prr($arr_sucursales_clientes);

        // ---------------------------------------------------------------------
        // se eliminan vinculos para volver a generar (solo AUTO SI)
        // ---------------------------------------------------------------------
        $sql_delete = "DELETE FROM gral_sucursal_cli_cliente WHERE automatico = 1;";
        $ejec = new Ejecucion();
        $ejec->setSql($sql_delete);
        $ejec->execute();
        
        // ---------------------------------------------------------------------
        // se genera vinculo de cliente con sucursal
        // ---------------------------------------------------------------------        
        foreach($arr_sucursales_clientes as $cuit => $arr_sucursales){
            $gral_sucursal_referencial_codigo = '';
            $cantidad_vendida_mayor = 0;
            foreach($arr_sucursales as $gral_sucursal_codigo => $cantidad_vendida){
                if($cantidad_vendida > $cantidad_vendida_mayor){
                    $cantidad_vendida_mayor = $cantidad_vendida;
                    $gral_sucursal_referencial_codigo = $gral_sucursal_codigo;
                }
            }       
            $cli_cliente = CliCliente::getOxCuit($cuit);
            $gral_sucursal = GralSucursal::getOxCodigo($gral_sucursal_referencial_codigo);

            // -----------------------------------------------------------------
            // se verifica si el cliente no tiene ya una sucursal vinculada
            // (para casos donde se personalizo el vinculo AUTO = NO)
            // -----------------------------------------------------------------
            $gral_sucursal_vinculada = $cli_cliente->getGralSucursalXGralSucursalCliCliente();
            if(!$gral_sucursal_vinculada){
                $gral_sucursal_cli_cliente = new GralSucursalCliCliente();
                $gral_sucursal_cli_cliente->setGralSucursalId($gral_sucursal->getId());
                $gral_sucursal_cli_cliente->setCliClienteId($cli_cliente->getId());
                $gral_sucursal_cli_cliente->setEstado(1);
                $gral_sucursal_cli_cliente->setAutomatico(1);
                $gral_sucursal_cli_cliente->setObservacion('Vinc Autom el '.date('d/m/Y H:i:s'));
                $gral_sucursal_cli_cliente->save();
                //Gral::prr($gral_sucursal_cli_cliente);
            }
        }
        
    }
    
    /*
     * Autor: Baez Julian
     * Fecha: 28/10/2022 13:00
     */
    static function execActualizarCliClienteTipoEstadoVenta(){
        // -------------------------------------------------------------------------
        // 1° consulta - CliCliente
        // -------------------------------------------------------------------------
        $c = new Criterio();
        //$c->addSelect(CliClienteEstadoVenta::GEN_ATTR_MODIFICADO);
        //$c->add(CliCliente::GEN_ATTR_ID, 14, Criterio::IGUAL);
        //$c->add(CliClienteEstadoVenta::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(CliCliente::GEN_TABLA);
        //$c->addRealJoin(CliClienteEstadoVenta::GEN_TABLA, CliClienteEstadoVenta::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
        //$c->addOrden(CliClienteEstadoVenta::GEN_ATTR_MODIFICADO, Criterio::_ASC);
        $c->setCriterios();

        //$p = new Paginador(1000, 1);
        $p = null;

        $cli_clientes = CliCliente::getCliClientes($p, $c);

        foreach($cli_clientes as $cli_cliente) {
            Gral::pr($cli_cliente->getId());

            // -----------------------------------------------------------------
            // se actualiza el tipo de estado de venta del cliente
            // -----------------------------------------------------------------
            $cli_cliente->setActualizarTipoEstadoVenta();
        }
    }

    /*
     * Autor: 
     * Fecha: 
     */
    static function execActualizarCliClienteTipoEstadoCobro(){
    }
    
    /*
     * Autor: 
     * Fecha: 
     */
    static function execActualizarCliClienteTipoEstadoCuenta(){
    }
    
    /**
     * 
     */
    static function execActualizarCliClienteInfoSifen($cantidad = 10){
        self::execActualizarCliClienteControlRUC();
        //self::execActualizarCliClienteInfoSifenImportados($cantidad);
        //self::execActualizarCliClienteInfoSifenNoImportados($cantidad);
    }

    /**
     * 
     */
    static function execActualizarCliClienteControlRUC(){
        $c = new Criterio();
        $c->add(GralTipoDocumento::GEN_ATTR_CODIGO, GralTipoDocumento::TIPO_CUIT, Criterio::IGUAL);
        $c->addTabla(CliCliente::GEN_TABLA);
        $c->addRealJoin(GralTipoDocumento::GEN_TABLA, GralTipoDocumento::GEN_ATTR_ID, CliCliente::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID);
        $c->addOrden(CliCliente::GEN_ATTR_MODIFICADO, Criterio::_ASC);
        $c->setCriterios();

        $p = null;

        $cli_clientes = CliCliente::getCliClientes($p, $c);
        //Gral::prr($cli_clientes);
        foreach($cli_clientes as $cli_cliente){
            if(Ctrl::esRUCValido($cli_cliente->getCuit())){
                
                Gral::pr('------------------------------------');
                Gral::pr($cli_cliente->getDescripcion());
                Gral::pr($cli_cliente->getCuit());
                Gral::pr('RUC-VALIDO');
                
                $sql_update = "UPDATE cli_cliente SET codigo = 'RUC-VALIDO' WHERE id=".$cli_cliente->getId();
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                //$ejec->execute();
            }else{

                Gral::pr('------------------------------------');
                Gral::pr($cli_cliente->getDescripcion());
                Gral::pr($cli_cliente->getCuit());
                Gral::pr('RUC-NO-VALIDO xxxxxxxxxxxxxxxxxxxxxx');
                
                $sql_update = "UPDATE cli_cliente SET codigo = 'RUC-NO-VALIDO' WHERE id=".$cli_cliente->getId();
                $ejec = new Ejecucion();
                $ejec->setSql($sql_update);
                //$ejec->execute();
            }
        }
        
        return true;
    }
    
    /**
     * 
     */
    static function execActualizarCliClienteInfoSifenImportados($cantidad = 10){
        $c = new Criterio();
        $c->addSelect(CliClienteInfoSifen::GEN_ATTR_MODIFICADO);
        $c->add(CliCliente::GEN_ATTR_CODIGO, 'RUC-VALIDO', Criterio::IGUAL);
        $c->add(GralTipoDocumento::GEN_ATTR_CODIGO, GralTipoDocumento::TIPO_CUIT, Criterio::IGUAL);
        $c->addTabla(CliCliente::GEN_TABLA);
        $c->addRealJoin(CliClienteInfoSifen::GEN_TABLA, CliClienteInfoSifen::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
        $c->addRealJoin(GralTipoDocumento::GEN_TABLA, GralTipoDocumento::GEN_ATTR_ID, CliCliente::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID);
        $c->addOrden(CliClienteInfoSifen::GEN_ATTR_MODIFICADO, Criterio::_ASC);
        $c->setCriterios();

        $p = new Paginador($cantidad, 1);

        $cli_clientes = CliCliente::getCliClientes($p, $c);
        foreach($cli_clientes as $cli_cliente){
            Gral::prr($cli_cliente);
            $cli_cliente->getInfoRucDesdeSifen();
        }
        
        return true;
    }

    /**
     * 
     */
    static function execActualizarCliClienteInfoSifenNoImportados($cantidad = 10){
        $c = new Criterio();
        $c->add(CliCliente::GEN_ATTR_CODIGO, 'RUC-VALIDO', Criterio::IGUAL);
        $c->add(GralTipoDocumento::GEN_ATTR_CODIGO, GralTipoDocumento::TIPO_CUIT, Criterio::IGUAL);
        $c->add(CliClienteInfoSifen::GEN_ATTR_ID, Criterio::VACIO, Criterio::IS_NULL);
        $c->addTabla(CliCliente::GEN_TABLA);
        $c->addRealJoin(CliClienteInfoSifen::GEN_TABLA, CliClienteInfoSifen::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID, 'LEFT JOIN');
        $c->addRealJoin(GralTipoDocumento::GEN_TABLA, GralTipoDocumento::GEN_ATTR_ID, CliCliente::GEN_ATTR_GRAL_TIPO_DOCUMENTO_ID);
        $c->addOrden(CliCliente::GEN_ATTR_MODIFICADO, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador($cantidad, 1);

        $cli_clientes = CliCliente::getCliClientes($p, $c);
        foreach($cli_clientes as $cli_cliente){
            Gral::prr($cli_cliente);
            $cli_cliente->getInfoRucDesdeSifen();
        }
        
        return true;
    }
    
}
?>