<?php
include "_autoload.php";

require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php');
require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel/Reader/Excel2007.php');

$nombre_archivo = Gral::getSes('nombre_archivo');
$path_destino = Gral::getPathAbs() . 'excel/tab_4/' . $nombre_archivo;

$prv_proveedor_id = Gral::getSes('prv_proveedor_id');

include 'prv_insumo_variables_cabecera.php';

$prv_importacion_id = Gral::getSes('prv_importacion_id');
if ($prv_importacion_id > 0) {
    $prv_importacion = PrvImportacion::getOxId($prv_importacion_id);
} else {
    echo 'No existe prv_importacion_id';
    exit();
}

$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objReader->setReadDataOnly(false);

if (file_exists($path_destino)) {
    $objPHPExcel = $objReader->load($path_destino);
    $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
    $highestRow = $objWorksheet->getHighestRow();

    for ($row = 2; $row <= $highestRow; ++$row) {
        $error = false; // Bandera
        $msj = ''; // Descripcion Tecnica
        $msj_error = ''; // error al guardado de algun objeto
        $msj_gral = ''; // Descripcion
        $msj_observacion = '';

        $ins_matriz_id = $objWorksheet->getCellByColumnAndRow($col_ins_matriz_id, $row)->getValue();
        $ins_insumo_id = $objWorksheet->getCellByColumnAndRow($col_ins_insumo_id, $row)->getValue();
        $prv_insumo_id = $objWorksheet->getCellByColumnAndRow($col_prv_insumo_id, $row)->getValue();
        $ins_marca_id = ((int) $objWorksheet->getCellByColumnAndRow($col_marca_id, $row)->getValue() != 0) ? (int) $objWorksheet->getCellByColumnAndRow($col_marca_id, $row)->getValue() : null;
        $ins_marca_pieza = ((int) $objWorksheet->getCellByColumnAndRow($col_pieza_id, $row)->getValue() != 0) ? (int) $objWorksheet->getCellByColumnAndRow($col_pieza_id, $row)->getValue() : null;
        $codigo_marca = PrvInsumoExcel::getCodigoSaneado($objWorksheet->getCellByColumnAndRow($col_codigo_marca, $row)->getValue());
        $codigo_pieza = PrvInsumoExcel::getCodigoSaneado($objWorksheet->getCellByColumnAndRow($col_codigo_pieza, $row)->getValue());
        $actualiza_descripcion = (int) $objWorksheet->getCellByColumnAndRow($col_seleccion, $row)->getValue();
        $descripcion = $objWorksheet->getCellByColumnAndRow($col_descripcion, $row)->getValue();
        $importe_neto = number_format($objWorksheet->getCellByColumnAndRow($col_importe_neto, $row)->getValue(), 2, '.', '');
        $descuento = number_format($objWorksheet->getCellByColumnAndRow($col_descuento, $row)->getValue(), 2, '.', '');
        $codigo_proveedor = PrvInsumoExcel::getCodigoSaneado($objWorksheet->getCellByColumnAndRow($col_codigo_proveedor, $row)->getValue());
        $importe = number_format($objWorksheet->getCellByColumnAndRow($col_importe, $row)->getValue(), 2, '.', '');
        $actualizar_costo = $objWorksheet->getCellByColumnAndRow($col_actualizar_costo, $row)->getValue();

        $descripcion_matriz = ($objWorksheet->getCellByColumnAndRow($col_descripcion_matriz, $row)->getValue() != '') ? $objWorksheet->getCellByColumnAndRow($col_descripcion_matriz, $row)->getValue() : $descripcion;
        $cancelado = $objWorksheet->getCellByColumnAndRow($col_cancelado, $row)->getValue();
        
        // ------------------------------------------------------------------------------------- SANEAMIENTO
        // se sanean las descripciones para evitar conflictos con caracteres especiales
        $descripcion = Gral::getVars(Gral::VARS_SANEAMIENTO, $descripcion);
        $descripcion_matriz = Gral::getVars(Gral::VARS_SANEAMIENTO, $descripcion_matriz);
        
        $descripcion = trim($descripcion);
        $descripcion_matriz = trim($descripcion_matriz);
        // ------------------------------------------------------------------------------------- SANEAMIENTO
        

        // si la fila se encuentra inhabilitada no se procesa
        if ($cancelado == 1){ continue; }
        
        // si el codigo del proveedor es vacio no se procesa
        if (trim($codigo_proveedor) == ''){ continue; }
        
        
        // Nueva matriz e ins_insumo (Con y Sin prv_insumo)
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

                // se determina que el proveedor es referencial para el costo
                $prv_insumo->setProveedorReferencial();
                
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

                    // se determina que el proveedor es referencial para el costo
                    $prv_insumo->setProveedorReferencial();
                    
                    $prv_insumo_costo_old = $prv_insumo->getPrvInsumoCostoActual();
                    if ($prv_insumo_costo_old) {
                        $prv_insumo_costo_old->setActual(0);
                        $numero_importacion = $prv_insumo_costo_old->getNumeroImportacion();
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
                        $msj .= ' '.date('d/m/Y H:i:s').' actualizo PrvInsumoCosto id ' . $prv_insumo_costo->getId();
                    }
                }
                $msj_gral .= '2 - Genero una matriz, InsInsumo, InsInsumoCosto y Actualizo PrvInsumo y (Genero)PrvInsumoCosto cambiando actual ';
            }
        } else {

            // Creo un prv_insumo (No existe en base para el proveedor)
            if ($prv_insumo_id == '') {
                $prv_insumo = new PrvInsumo();
                $prv_insumo->setCodigoProveedor($codigo_proveedor);
                $prv_insumo->setDescripcion($descripcion);
                $prv_insumo->setEstado('1');
                $prv_insumo->setFechaActualizacion(Gral::getFechaHoraActual());
                $msj .= ' '.date('d/m/Y H:i:s').' Creo PrvInsumo - ' . $prv_insumo->getDescripcion();

                // Asocie un prv_insumo a un ins_isumo
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

                    // Asocie un un prv_insumo a una ins_matriz
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

                    // Sin asociar a ins_insumo o ins_matriz
                } else {
                    $prv_insumo->setCodigoMarca($codigo_marca);
                    $prv_insumo->setCodigoPieza($codigo_pieza);
                    $prv_insumo->setInsMarcaId($ins_marca_id);
                    $prv_insumo->setInsMarcaPieza($ins_marca_pieza);
                }

                $prv_insumo->setObservacion('');
                $prv_insumo->setPrvProveedorId($prv_proveedor_id);
                $prv_insumo->save();

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
                $msj .= ' '.date('d/m/Y H:i:s').' creo PrvInsumoCosto id ' . $prv_insumo_costo->getId();

                $msj_gral .= '3 - Genero un PrvInsumo y PrvInsumoCosto asociando o NO a matriz, InsInsumo, InsInsumoCosto. ';

                // Ya existe el prv_insumo, actualizo Prv_Insumo y genero PrvInsumo_Costo
            } else {

                $prv_insumo = PrvInsumo::getOxId((int) $prv_insumo_id);

                if ($prv_insumo) {
                    $prv_insumo->setFechaActualizacion(Gral::getFechaHoraActual());
                    $msj .= ' '.date('d/m/Y H:i:s').' Busco PrvInsumo id ' . $prv_insumo->getId() . ' - ' . $prv_insumo->getDescripcion();

                    // Tiene un ins_insumo asociado
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


                        // Tiene un ins_matriz asociada
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
                        $prv_insumo_costo_old->setActual(0);
                        $prv_insumo_costo_old->setEstado(0);
                        $numero_importacion = $prv_insumo_costo_old->getNumeroImportacion();
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

                        $msj .= ' '.date('d/m/Y H:i:s').' actualizo PrvInsumoCosto id ' . $prv_insumo_costo->getId();
                    } else {
                        echo 'No se encontro PRV_INSUMO_COSTO <br>';
                    }
                    $msj_gral .= '4 - Actualizo un PrvInsumo y PrvInsumoCosto asociando, creando o No (dependiendo el caso) una matriz o InsInsumo, InsInsumoCosto. ';
                } else {
                    echo 'No se encontro PRV_INSUMO ' . $prv_insumo_id . '<br>';
                }
            }

            // Actualiza descripcion (check actualizar descripcion)
            if ($actualiza_descripcion == 1 && $prv_insumo) {
                $prv_insumo->setDescripcion($descripcion);
                $prv_insumo->save();
                $msj .= ' '.date('d/m/Y H:i:s').' Actualizo descripcion en prv_insumo id ' . $prv_insumo->getId();
            }

            // Actualiza Ins insumo Costo (check actualizar costo)
            if ($actualizar_costo == '1' && $prv_insumo) {
                $ins_insumo_id = $prv_insumo->getInsInsumoId();
                $ins_insumo = InsInsumo::getOxId($ins_insumo_id);
                if ($ins_insumo) {
                    $v_observacion = 'Actualización de Costo por Importación de Lista de Precios. Importación #' . $prv_importacion->getId();
                    $ins_insumo_costo = $ins_insumo->setInsInsumoCostoActual($prv_importacion, $importe_neto, $v_observacion);
                    $msj .= ' '.date('d/m/Y H:i:s').' Actualizo costo en InsInsumoCosto id ' . $ins_insumo_costo->getId() . ' - ' . $ins_insumo_costo->getDescripcion();
                } else {
                    $error = true;
                    $msj_error .= 'Error al actualizar ins_insumo_costo de ins_insumo id ' . $ins_insumo_id;
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
            }
            
            if (empty($prv_insumo->getId())) {
                $error = true;
                $msj_error .= 'Error al guardar prv_insumo. ';
            }
            $msj_observacion .= ' Prv_Insumo id ' . $prv_insumo->getId() . ' - ' . $prv_insumo->getDescripcion();
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
} else {
    echo "No se encuentra el documento: ";
    echo $path_destino;
    exit();
}
?>


<?php include "prv_insumo_tab_5_resultados.php" ?>