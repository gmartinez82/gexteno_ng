<?php
include "_autoload.php";

$prv_proveedor_id = Gral::getSes('prv_proveedor_id');
$prv_importacion_id = Gral::getSes('prv_importacion_id');
if ($prv_importacion_id > 0) {
    $prv_importacion = PrvImportacion::getOxId($prv_importacion_id);
} else {
    echo 'No existe prv_importacion_id';
    exit();
}

include 'prv_importacion_logica_tab_5.php';
include 'set_excel_variables.php';

//Gral::prr($arr_rows);
//exit;

foreach ($arr_rows as $row => $arr_row) {
    $error = false; // Bandera
    $msj = ''; // Descripcion Tecnica
    $msj_error = ''; // error al guardado de algun objeto
    $msj_gral = ''; // Descripcion
    $msj_observacion = '';
    
    
    /*
$arr_row = array(
        'fila' => $fila,
        'prv_importacion_id' => $prv_importacion_id,
        'prv_insumo_id' => $prv_insumo_id,
        'codigo_proveedor' => $codigo_proveedor,
        'seleccion' => $seleccion,
        'descripcion' => $descripcion,
        'descripcion_matriz' => $descripcion_matriz,
        'importe' => $importe,
        'descuento' => $descuento,
        'importe_neto' => $importe_neto,
        'ultimo_importe' => $ultimo_importe,
        'fecha_importacion' => $fecha_importacion,
        'incremento' => $incremento,
        'costo_actual' => $costo_actual,
        'variacion' => $variacion,
        'actualizar_costo' => $actualizar_costo,
        'codigo_marca' => $codigo_marca,
        'codigo_oem' => $codigo_oem,
        'ins_marca_id' => $ins_marca_id,
        'ins_marca_oem_id' => $ins_marca_oem_id,
        'ins_insumo_id' => $ins_insumo_id,
        'ins_matriz_id' => $ins_matriz_id,
        'modificado' => $modificado,
        'nuevo' => $nuevo,
        'permite_desvincular' => $permite_desvincular,
        'cancelado' => $cancelado,
        'proveedor_referencial' => $proveedor_referencial,
    );
     *      */
    

    $ins_matriz_id = $arr_row['ins_matriz_id'];
    $ins_insumo_id = $arr_row['ins_insumo_id'];
    $prv_insumo_id = $arr_row['prv_insumo_id'];
    $ins_marca_id = ((int) $arr_row['ins_marca_id'] != 0) ? (int) $arr_row['ins_marca_id'] : null;
    $ins_marca_pieza = ((int) $arr_row['ins_marca_oem_id'] != 0) ? (int) $arr_row['ins_marca_oem_id'] : null;
    $codigo_marca = PrvInsumoExcel::getCodigoSaneado($arr_row['codigo_marca']);
    $codigo_pieza = PrvInsumoExcel::getCodigoSaneado($arr_row['codigo_oem']);
    $actualiza_descripcion = (int) $arr_row['seleccion'];
    $descripcion = $arr_row['descripcion'];
    $importe_neto = number_format($arr_row['importe_neto'], 2, '.', '');
    $descuento = number_format($arr_row['descuento'], 2, '.', '');
    $codigo_proveedor = PrvInsumoExcel::getCodigoSaneado($arr_row['codigo_proveedor']);
    $importe = number_format($arr_row['importe'], 2, '.', '');
    $actualizar_costo = $arr_row['actualizar_costo'];

    $descripcion_matriz = ($arr_row['descripcion_matriz'] != '') ? $arr_row['descripcion_matriz'] : $descripcion;
    $cancelado = $arr_row['cancelado'];

    // ------------------------------------------------------------------------------------- SANEAMIENTO
    // se sanean las descripciones para evitar conflictos con caracteres especiales
    $descripcion = Gral::getVars(Gral::VARS_SANEAMIENTO, $descripcion);
    $descripcion_matriz = Gral::getVars(Gral::VARS_SANEAMIENTO, $descripcion_matriz);

    $descripcion = trim($descripcion);
    $descripcion_matriz = trim($descripcion_matriz);
    // ------------------------------------------------------------------------------------- SANEAMIENTO


    // -------------------------------------------------------------------------------------------------
    // si la fila se encuentra inhabilitada no se procesa
    if ($cancelado == 1){ continue; }

    // si el codigo del proveedor es vacio no se procesa
    if (trim($codigo_proveedor) == ''){ continue; }
    // -------------------------------------------------------------------------------------------------


    // -------------------------------------------------------------------------------------------------
    // Nueva matriz e ins_insumo (Con y Sin prv_insumo)
    // -------------------------------------------------------------------------------------------------
    if ($ins_matriz_id == '0' && $ins_insumo_id == '0') {

        $ins_matriz = new InsMatriz();
        $ins_matriz->setDescripcion($descripcion_matriz);
        $ins_matriz->setCodigoPieza($codigo_pieza);
        $ins_matriz->setInsMarcaId($ins_marca_pieza);

        $ins_insumo = InsInsumo::setNuevoInsInsumo($ins_matriz, $descripcion, $codigo_marca, $ins_marca_id, $observacion = '');
        $ins_matriz = $ins_insumo->getInsMatriz();

        if ($ins_matriz) {
            $msj .= date('d/m/Y H:i:s').' creo la matriz id ' . $ins_matriz->getId() . ' - ' . $ins_matriz->getDescripcion();
        }
        $msj .= ' '.date('d/m/Y H:i:s').' creo el InsInsumo id ' . $ins_insumo->getId() . ' - ' . $ins_insumo->getDescripcion();

        $v_observacion = 'Actualización de Costo por Importación de Lista de Precios. Importación #' . $prv_importacion->getId();
        $ins_insumo_costo = $ins_insumo->setInsInsumoCostoActual($prv_importacion, $importe_neto, $v_observacion);
        $msj .= ' '.date('d/m/Y H:i:s').' creo el InsInsumoCosto id ' . $ins_insumo_costo->getId() . ' - ' . $ins_insumo_costo->getDescripcion();

        // Sin prv_insumo existente
        if ($prv_insumo_id == '') {

            $prv_insumo = new PrvInsumo();
            $prv_insumo->setCodigoMarca($codigo_marca);
            $prv_insumo->setCodigoPieza($codigo_pieza);
            $prv_insumo->setCodigoProveedor($codigo_proveedor);
            $prv_insumo->setDescripcion($descripcion);
            $prv_insumo->setEstado('1');
            $prv_insumo->setFechaActualizacion(Gral::getFechaHoraActual());
            $prv_insumo->setInsInsumoId($ins_insumo->getId());
            $prv_insumo->setInsMarcaId($ins_marca_id);
            $prv_insumo->setInsMarcaPieza($ins_marca_pieza);
            $prv_insumo->setInsMatrizId($ins_matriz->getId());
            $prv_insumo->setObservacion('');
            $prv_insumo->setPrvProveedorId($prv_proveedor_id);
            $prv_insumo->save();
            $msj .= ' '.date('d/m/Y H:i:s').' creo el PrvInsumo id ' . $prv_insumo->getId() . ' - ' . $prv_insumo->getDescripcion();
            
            /*
            $prv_insumo_costo = new PrvInsumoCosto();
            $prv_insumo_costo->setActual('1');
            $prv_insumo_costo->setDescuento($descuento);
            $prv_insumo_costo->setEstado('1');
            $prv_insumo_costo->setFechaActualizacion(Gral::getFechaHoraActual());
            $prv_insumo_costo->setImporteBruto($importe);
            $prv_insumo_costo->setNumeroImportacion(1);
            $prv_insumo_costo->setObservacion('');
            $prv_insumo_costo->setPrvInsumoId($prv_insumo->getId());
            $prv_insumo_costo->setPrvImportacionId($prv_importacion->getId());
            $prv_insumo_costo->save();
            */
            
            // se inicializa el primer costo del prv insumo
            $prv_insumo_costo = $prv_insumo->setPrvInsumoCostoActual($prv_importacion, $importe, $descuento, $numero_importacion = 1, $fecha = false, $observacion = '');
            

            $msj .= ' '.date('d/m/Y H:i:s').' creo el PrvInsumoCosto id ' . $prv_insumo_costo->getId();
            $msj_gral .= '1 - Genero una matriz, InsInsumo, InsInsumoCosto, PrvInsumo y PrvInsumoCosto: ';
        } else {

            // Con prv_insumo existente
            $prv_insumo = PrvInsumo::getOxId((int) $prv_insumo_id);
            if ($prv_insumo) {
                $prv_insumo->setFechaActualizacion(Gral::getFechaHoraActual());
                $prv_insumo->setInsInsumoId($ins_insumo->getId());
                $prv_insumo->setInsMatrizId($ins_insumo->getInsMatrizId());
                $prv_insumo->setCodigoMarca($codigo_marca);
                $prv_insumo->setCodigoPieza($codigo_pieza);
                $prv_insumo->setInsMarcaId($ins_marca_id);
                $prv_insumo->setInsMarcaPieza($ins_marca_pieza);
                $prv_insumo->save();
                $msj .= ' '.date('d/m/Y H:i:s').' actualizo PrvInsumo id' . $prv_insumo->getId() . ' - ' . $prv_insumo->getDescripcion();

                $prv_insumo_costo_old = $prv_insumo->getPrvInsumoCostoActual();
                if ($prv_insumo_costo_old) {
                    $numero_importacion = $prv_insumo_costo_old->getNumeroImportacion();
                    
                    /*
                    $prv_insumo_costo_old->setActual(0);
                    $prv_insumo_costo_old->save();

                    $prv_insumo_costo = new PrvInsumoCosto();
                    $prv_insumo_costo->setActual('1');
                    $prv_insumo_costo->setDescuento($descuento);
                    $prv_insumo_costo->setEstado('1');
                    $prv_insumo_costo->setFechaActualizacion(Gral::getFechaHoraActual());
                    $prv_insumo_costo->setImporteBruto($importe);
                    $prv_insumo_costo->setNumeroImportacion($numero_importacion + 1);
                    $prv_insumo_costo->setObservacion('');
                    $prv_insumo_costo->setPrvInsumoId($prv_insumo->getId());
                    $prv_insumo_costo->setPrvImportacionId($prv_importacion->getId());
                    $prv_insumo_costo->save();
                    */
                    
                    // se actualiza el costo del prv insumo
                    $prv_insumo_costo = $prv_insumo->setPrvInsumoCostoActual($prv_importacion, $importe, $descuento, $numero_importacion, $fecha = false, $observacion = '');
                    
                    $msj .= ' '.date('d/m/Y H:i:s').' actualizo PrvInsumoCosto id ' . $prv_insumo_costo->getId();
                }
            }
            $msj_gral .= '2 - Genero una matriz, InsInsumo, InsInsumoCosto y Actualizo PrvInsumo y (Genero)PrvInsumoCosto cambiando actual ';
        }
    } else {

        // -------------------------------------------------------------------------------------------------
        // Se crea un nuevo prv_insumo (No existe en base para el proveedor)
        // -------------------------------------------------------------------------------------------------
        if ($prv_insumo_id == '') {
            $prv_insumo = new PrvInsumo();
            $prv_insumo->setCodigoProveedor($codigo_proveedor);
            $prv_insumo->setDescripcion($descripcion);
            $prv_insumo->setEstado('1');
            $prv_insumo->setFechaActualizacion(Gral::getFechaHoraActual());
            $msj .= ' '.date('d/m/Y H:i:s').' Creo PrvInsumo - ' . $prv_insumo->getDescripcion();

            // -------------------------------------------------------------------------------------------------
            // Asocie un prv_insumo a un ins_isumo
            // -------------------------------------------------------------------------------------------------
            if ($ins_insumo_id > 0 && $ins_matriz_id == '') {
                $ins_insumo = InsInsumo::getOxId((int) $ins_insumo_id);
                if ($ins_insumo) {
                    $ins_matriz = $ins_insumo->getInsMatriz();
                    if ($ins_matriz) {
                        $prv_insumo->setInsMatrizId($ins_matriz->getId());
                        $prv_insumo->setInsInsumoId((int) $ins_insumo_id);

                        $prv_insumo->setCodigoMarca($codigo_marca);
                        $prv_insumo->setCodigoPieza($codigo_pieza);
                        $prv_insumo->setInsMarcaId($ins_marca_id);
                        $prv_insumo->setInsMarcaPieza($ins_marca_pieza);
                    }
                    $msj .= ' '.date('d/m/Y H:i:s').' asigno a PrvInsumo la Matriz (cargo el codigo que tiene la matriz y el insumo) id' . $ins_insumo->getInsMatrizId();
                }

            // -------------------------------------------------------------------------------------------------
            // Asocie un un prv_insumo a una ins_matriz
            // -------------------------------------------------------------------------------------------------
            } elseif ($ins_matriz_id > 0 && $ins_insumo_id == '') {

                $ins_matriz = InsMatriz::getOxId((int) $ins_matriz_id);

                if ($ins_matriz) {

                    $ins_insumo = InsInsumo::setNuevoInsInsumo($ins_matriz, $descripcion, $codigo_marca, $ins_marca_id, $observacion = '');
                    $msj .= ' '.date('d/m/Y H:i:s').' Creo el InsInsumo id ' . $ins_insumo->getId() . ' - ' . $ins_insumo->getDescripcion();

                    $v_observacion = 'Actualización de Costo por Importación de Lista de Precios. Importación #' . $prv_importacion->getId();
                    $ins_insumo_costo = $ins_insumo->setInsInsumoCostoActual($prv_importacion, $importe_neto, $v_observacion);
                    $msj .= ' '.date('d/m/Y H:i:s').' creo el InsInsumoCosto id ' . $ins_insumo_costo->getId() . ' - ' . $ins_insumo_costo->getDescripcion();

                    $prv_insumo->setInsInsumoId($ins_insumo->getId());
                    $prv_insumo->setInsMatrizId((int) $ins_matriz->getId());
                    $prv_insumo->setCodigoMarca($codigo_marca);
                    $prv_insumo->setCodigoPieza($codigo_pieza);
                    $prv_insumo->setInsMarcaId($ins_marca_id);
                    $prv_insumo->setInsMarcaPieza($ins_marca_pieza);

                    $msj .= ' '.date('d/m/Y H:i:s').' cargo los valores que tiene la Matriz a PrvInsumo id ' . $ins_matriz->getId() . ' - ' . $ins_matriz->getDescripcion();
                }

            // -------------------------------------------------------------------------------------------------
            // Sin asociar a ins_insumo o ins_matriz
            // -------------------------------------------------------------------------------------------------
            } else {
                $prv_insumo->setCodigoMarca($codigo_marca);
                $prv_insumo->setCodigoPieza($codigo_pieza);
                $prv_insumo->setInsMarcaId($ins_marca_id);
                $prv_insumo->setInsMarcaPieza($ins_marca_pieza);
            }

            $prv_insumo->setObservacion('');
            $prv_insumo->setPrvProveedorId($prv_proveedor_id);
            $prv_insumo->save();
            
            /*
            $prv_insumo_costo = new PrvInsumoCosto();
            $prv_insumo_costo->setActual('1');
            $prv_insumo_costo->setDescuento($descuento);
            $prv_insumo_costo->setEstado('1');
            $prv_insumo_costo->setFechaActualizacion(Gral::getFechaHoraActual());
            $prv_insumo_costo->setImporteBruto($importe);
            $prv_insumo_costo->setNumeroImportacion(1);
            $prv_insumo_costo->setObservacion('');
            $prv_insumo_costo->setPrvInsumoId($prv_insumo->getId());
            $prv_insumo_costo->setPrvImportacionId($prv_importacion->getId());
            $prv_insumo_costo->save();
            */
            
            // se inicializa el primer costo del prv insumo
            $prv_insumo_costo = $prv_insumo->setPrvInsumoCostoActual($prv_importacion, $importe, $descuento, $numero_importacion = 1, $fecha = false, $observacion = '');
            
            $msj .= ' '.date('d/m/Y H:i:s').' creo PrvInsumoCosto id ' . $prv_insumo_costo->getId();

            $msj_gral .= '3 - Genero un PrvInsumo y PrvInsumoCosto asociando o NO a matriz, InsInsumo, InsInsumoCosto. ';

            // Ya existe el prv_insumo, actualizo Prv_Insumo y genero PrvInsumo_Costo
        } else {

            // -------------------------------------------------------------------------------------------------
            // si ya existe en base el prv insumo, se instancia y actualiza
            // -------------------------------------------------------------------------------------------------
            $prv_insumo = PrvInsumo::getOxId((int) $prv_insumo_id);

            if ($prv_insumo) {
                $prv_insumo->setFechaActualizacion(Gral::getFechaHoraActual());
                $msj .= ' '.date('d/m/Y H:i:s').' Busco PrvInsumo id ' . $prv_insumo->getId() . ' - ' . $prv_insumo->getDescripcion();

                // -------------------------------------------------------------------------------------------------
                // Tiene un ins_insumo asociado
                // -------------------------------------------------------------------------------------------------
                if ($ins_insumo_id > 0 && $ins_matriz_id == '') {
                    $prv_insumo->setInsInsumoId((int) $ins_insumo_id);

                    $ins_insumo = InsInsumo::getOxId((int) $ins_insumo_id);
                    if ($ins_insumo) {

                        $ins_matriz = InsMatriz::getOxId($ins_insumo->getInsMatrizId());
                        if ($ins_matriz) {
                            $prv_insumo->setInsMatrizId($ins_insumo->getInsMatrizId());
                        }
                    }
                    $msj .= ' '.date('d/m/Y H:i:s').' actualizo PrvInsumo (codMarca, codPieza y ids desde base) id ' . $prv_insumo->getId() . ' - ' . $prv_insumo->getDescripcion();


                // -------------------------------------------------------------------------------------------------
                // Tiene un ins_matriz asociada
                // -------------------------------------------------------------------------------------------------
                } elseif ($ins_matriz_id > 0 && $ins_insumo_id == '') {

                    $ins_matriz = InsMatriz::getOxId((int) $ins_matriz_id);

                    if ($ins_matriz) {

                        $ins_insumo = InsInsumo::setNuevoInsInsumo($ins_matriz, $descripcion, $codigo_marca, $ins_marca_id, $observacion = '');
                        $msj .= ' '.date('d/m/Y H:i:s').' creo el InsInsumo id ' . $ins_insumo->getId() . ' - ' . $ins_insumo->getDescripcion();

                        $v_observacion = 'Actualización de Costo por Importación de Lista de Precios. Importación #' . $prv_importacion->getId();
                        $ins_insumo_costo = $ins_insumo->setInsInsumoCostoActual($prv_importacion, $importe_neto, $v_observacion);
                        $msj .= ' '.date('d/m/Y H:i:s').' creo el InsInsumoCosto id ' . $ins_insumo_costo->getId() . ' - ' . $ins_insumo_costo->getDescripcion();

                        $prv_insumo->setInsInsumoId($ins_insumo->getId());
                        $prv_insumo->setInsMatrizId((int) $ins_matriz_id);

                        $msj .= ' '.date('d/m/Y H:i:s').' actualizo PrvInsumo codigos y marcas id ' . $prv_insumo->getId() . ' - ' . $prv_insumo->getDescripcion();
                    }
                }

                $prv_insumo->setCodigoMarca($codigo_marca);
                $prv_insumo->setCodigoPieza($codigo_pieza);
                $prv_insumo->setInsMarcaId($ins_marca_id);
                $prv_insumo->setInsMarcaPieza($ins_marca_pieza);

                $prv_insumo->save();

                // Actualizo el costo de prv_insumo
                $prv_insumo_costo_old = $prv_insumo->getPrvInsumoCostoActual();
                if ($prv_insumo_costo_old) {
                    $numero_importacion = $prv_insumo_costo_old->getNumeroImportacion();
                    
                    /*
                    $prv_insumo_costo_old->setActual(0);
                    $prv_insumo_costo_old->setEstado(0);
                    $prv_insumo_costo_old->save();

                    $prv_insumo_costo = new PrvInsumoCosto();
                    $prv_insumo_costo->setActual('1');
                    $prv_insumo_costo->setDescuento($descuento);
                    $prv_insumo_costo->setEstado('1');
                    $prv_insumo_costo->setFechaActualizacion(Gral::getFechaHoraActual());
                    $prv_insumo_costo->setImporteBruto($importe);
                    $prv_insumo_costo->setNumeroImportacion($numero_importacion + 1);
                    $prv_insumo_costo->setObservacion('');
                    $prv_insumo_costo->setPrvInsumoId($prv_insumo->getId());
                    $prv_insumo_costo->setPrvImportacionId($prv_importacion->getId());
                    $prv_insumo_costo->save();
                    */
                    
                    // se actualiza el costo del prv insumo
                    $prv_insumo_costo = $prv_insumo->setPrvInsumoCostoActual($prv_importacion, $importe, $descuento, $numero_importacion, $fecha = false, $observacion = '');
                    

                    $msj .= ' '.date('d/m/Y H:i:s').' actualizo PrvInsumoCosto id ' . $prv_insumo_costo->getId();
                } else {
                    echo 'No se encontro PRV_INSUMO_COSTO <br>';
                }
                $msj_gral .= '4 - Actualizo un PrvInsumo y PrvInsumoCosto asociando, creando o No (dependiendo el caso) una matriz o InsInsumo, InsInsumoCosto. ';
            } else {
                echo 'No se encontro PRV_INSUMO ' . $prv_insumo_id . '<br>';
            }
        }

        
        // -------------------------------------------------------------------------------------------------
        // Actualiza descripcion (check actualizar descripcion)
        // -------------------------------------------------------------------------------------------------
        if ($actualiza_descripcion == 1 && $prv_insumo) {
            $prv_insumo->setDescripcion($descripcion);
            $prv_insumo->save();
            $msj .= ' '.date('d/m/Y H:i:s').' Actualizo descripcion en prv_insumo id ' . $prv_insumo->getId();
        }

        // -------------------------------------------------------------------------------------------------
        // Actualiza Ins insumo Costo (check actualizar costo)
        // -------------------------------------------------------------------------------------------------
        if ($actualizar_costo == '1' && $prv_insumo) {
            $ins_insumo = $prv_insumo->getInsInsumo();
            if ($ins_insumo) {
                $v_observacion = 'Actualización de Costo por Importación de Lista de Precios. Importación #' . $prv_importacion->getId();
                $ins_insumo_costo = $ins_insumo->setInsInsumoCostoActual($prv_importacion, $importe_neto, $v_observacion);
                $msj .= ' '.date('d/m/Y H:i:s').' Actualizo costo en InsInsumoCosto id ' . $ins_insumo_costo->getId() . ' - ' . $ins_insumo_costo->getDescripcion();
            } else {
                $error = true;
                $msj_error .= 'Error al actualizar ins_insumo_costo de ins_insumo id ' . $prv_insumo->getInsInsumoId();
            }
        }
    }

    // Control de errores
    if ($ins_matriz) {
        if (empty($ins_matriz->getId())) {
            $error = true;
            $msj_error .= 'Error al guardar ins_matriz. ';
        }
        $msj_observacion = ' Ins_Matriz id ' . $ins_matriz->getId() . ' - ' . $ins_matriz->getDescripcion();
        unset($ins_matriz);
    }

    if ($ins_insumo) {

        if (empty($ins_insumo->getId())) {
            $error = true;
            $msj_error .= 'Error al guardar el ins_insumo. ';
        }
        $msj_observacion .= ' Ins_Insumo id ' . $ins_insumo->getId() . ' - ' . $ins_insumo->getDescripcion();
        unset($ins_insumo);
    }

    if ($ins_insumo_costo) {
        if (empty($ins_insumo_costo->getId())) {
            $error = true;
            $msj_error .= 'Error al guardar ins_insumo_costo. ';
        }
        $msj_observacion .= ' Ins_Insumo_Costo id ' . $ins_insumo_costo->getId() . ' - ' . $ins_insumo_costo->getDescripcion();
        unset($ins_insumo_costo);
    }

    if ($prv_insumo) {

        $ins_insumo_asociado = $prv_insumo->getInsInsumo();
        if($ins_insumo_asociado->getId() != 'null'){
            // se actualizan las equivalencias del insumo

            $ins_insumo_asociado->setInsInsumoCodigosEquivalencias();
            $msj_observacion .= ' Se registraron codigos de equivalencia del Ins Insumo id ' . $ins_insumo_asociado->getId() . ' - ' . $ins_insumo_asociado->getDescripcion();
        }

        if (empty($prv_insumo->getId())) {
            $error = true;
            $msj_error .= 'Error al guardar prv_insumo. ';
        }
        
        
        // se determina que si el proveedor es referencial inicial para el costo
        $prv_insumo_referencial = $prv_insumo->setProveedorReferencialInicial();
        if($prv_insumo_referencial){
            $msj_observacion .= ' Se determino como referencial de precios ' . $prv_insumo->getId() . ' - ' . $prv_insumo->getDescripcion();        
        }
        
        unset($prv_insumo);
    }

    if ($prv_insumo_costo) {
        if (empty($prv_insumo_costo->getId())) {
            $error = true;
            $msj_error .= 'Error al guardar prv_insumo_costo. ';
        }
        $msj_observacion .= ' Prv_Insumo_Costo id ' . $prv_insumo_costo->getId() . ' - ' . $prv_insumo_costo->getImporteBruto();
        unset($prv_insumo_costo);
    }

    if ($prv_importacion) {
        $prv_importacion_resultado = new PrvImportacionResultado();

        if ($error) {
            $prv_importacion_resultado->setCodigo(PrvImportacionTipoEstado::TIPO_PROCESADO_ERROR);
            $prv_importacion_resultado->setDescripcion($msj_gral);
            $prv_importacion_resultado->setObservacion($msj_error);
            $prv_importacion_resultado->setObservacionTecnica($msj);
        } else {
            $prv_importacion_resultado->setCodigo(PrvImportacionTipoEstado::TIPO_PROCESADO);
            $prv_importacion_resultado->setDescripcion($msj_gral);
            $prv_importacion_resultado->setObservacion($msj_observacion);
            $prv_importacion_resultado->setObservacionTecnica($msj);
        }

        $prv_importacion_resultado->setPrvImportacionId($prv_importacion->getId());
        $prv_importacion_resultado->save();

        $prv_importacion_resultados[] = $prv_importacion_resultado;

        if (empty($prv_importacion_resultado->getId())) {
            Gral::pr('Error al guardar prv_importacion_resultado. \n');
        }
        unset($prv_importacion_resultado);
    } else {
        echo "No se guardo prv_importacion. ";
        exit();
    }
}

if ($error) {
    $prv_importacion->setPrvImportacionEstado(PrvImportacionTipoEstado::TIPO_PROCESADO_ERROR, $msj_error);
} else {
    $prv_importacion->setPrvImportacionEstado(PrvImportacionTipoEstado::TIPO_PROCESADO);
}

?>


<?php include "prv_insumo_tab_5_resultados.php" ?>