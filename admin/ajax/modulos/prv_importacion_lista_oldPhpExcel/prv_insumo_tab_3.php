<?php
include "_autoload.php";

require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php');
require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel/Reader/Excel2007.php');
include 'prv_insumo_variables_cabecera.php';


$prv_importacion_id = Gral::getVars(2, 'prv_importacion_id', 0);

if ($prv_importacion_id > 0) {

    $prv_importacion = PrvImportacion::getOxId($prv_importacion_id);

    if ($prv_importacion) {

        $nombre_archivo = $prv_importacion->getId() . ".xlsx";
        Gral::setSes('nombre_archivo', $nombre_archivo);
        $path_destino = Gral::getPathAbs() . 'excel/tab_3/' . $nombre_archivo;
        $path_destino_rollback = Gral::getPathAbs() . 'excel/tab_3/rollback/' . $nombre_archivo;

        $prv_proveedor_id = $prv_importacion->getPrvProveedorId();
        $descuento = $prv_importacion->getDescuento();
        $web_ins_marca_id = $prv_importacion->getInsMarcaId();
        $web_pieza_id = $prv_importacion->getInsMarcaPieza();

        Gral::setSes('prv_proveedor_id', $prv_proveedor_id);
        Gral::setSes('descuento', $descuento);
        Gral::setSes('web_ins_marca_id', $web_ins_marca_id);
        Gral::setSes('web_pieza_id', $web_pieza_id);
        Gral::setSes('prv_importacion_id', $prv_importacion->getId());

        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        $objReader->setReadDataOnly(false);
        
        $objReader_rollback = PHPExcel_IOFactory::createReader('Excel2007');
        $objReader_rollback->setReadDataOnly(false);

        if (file_exists($path_destino) && file_exists($path_destino_rollback)) {
            $objPHPExcel = $objReader->load($path_destino);
            $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
            $highestRow = $objWorksheet->getHighestRow();
            
            $objPHPExcel_rollback = $objReader_rollback->load($path_destino_rollback);
            $objWorksheet_rollback = $objPHPExcel_rollback->setActiveSheetIndex(0);
            $highestRow_rollback = $objWorksheet_rollback->getHighestRow();

            include 'prv_importacion_logica_tab_3_restaurar_importacion.php';
            
        } else {
            echo "Error no se encontro archivo " . $nombre_archivo . " .";
        }
        
    } else {
        echo "Error al cargar lista.";
    }
} else {
    
    $prv_importacion_id = Gral::getSes('prv_importacion_id');
    $prv_importacion = PrvImportacion::getOxId($prv_importacion_id);
    if ($prv_importacion) {
        $prv_importacion->setPrvImportacionEstado(PrvImportacionTipoEstado::TIPO_EN_TAB_3);
        Gral::setSes('prv_importacion_id', $prv_importacion->getId());
    }

    $nombre_archivo = Gral::getSes('nombre_archivo');
    $path_destino = Gral::getPathAbs() . 'excel/tab_2/' . $nombre_archivo;

    $filas = Gral::getVars(1, 'check_fila', 0);
    $columnas = Gral::getVars(1, 'columna', 0);

    $prv_proveedor_id = Gral::getSes('prv_proveedor_id');
    $descuento = Gral::getSes('descuento');
    $web_ins_marca_id = Gral::getSes('web_ins_marca_id');
    $web_pieza_id = Gral::getSes('web_pieza_id');

    $objReader_tab2 = PHPExcel_IOFactory::createReader('Excel2007');
    $objReader_tab2->setReadDataOnly(false);

    if (file_exists($path_destino)) {
        $objPHPExcel_tab2 = $objReader_tab2->load($path_destino);
        $objWorksheet_tab2 = $objPHPExcel_tab2->setActiveSheetIndex(0);

        $highestRow = $objWorksheet_tab2->getHighestRow();

        // Seteo los check
        if (isset($filas)) {
            foreach ($filas as $fila) {
                $objWorksheet_tab2->setCellValueByColumnAndRow(0, $fila, '1');
            }
        }

        // Seteo la cabecera
        if (isset($columnas)) {
            $objWorksheet_tab2->insertNewRowBefore();
            $objWorksheet_tab2->setCellValueByColumnAndRow(0, 1, 'seleccion');
            for ($i = 0; $i < count($columnas); $i++) {
                $objWorksheet_tab2->setCellValueByColumnAndRow($i + 1, 1, $columnas[$i]);
            }
        }

        // borro las filas vacias
        $highestRow = $objWorksheet_tab2->getHighestRow();
        //Gral::pr($highestRow, 'Paso 1');
        for ($row = $highestRow; $row >= 1; --$row) {
            if ($objWorksheet_tab2->getCellByColumnAndRow(0, $row)->getValue() == '') {
                //$objWorksheet_tab2->removeRow($row);
            }
        }

        $highestRow = $objWorksheet_tab2->getHighestRow();
        //Gral::pr($highestRow, 'Paso 2');

        // Ordeno las columnas
        $highestColumn = $objWorksheet_tab2->getHighestColumn();
        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);

        for ($col = 0; $col <= $highestColumnIndex; ++$col) {
            switch ($objWorksheet_tab2->getCellByColumnAndRow($col, 1)->getValue()) {
                case 'seleccion':
                    $col_web_seleccion = $col;
                    break;
                case 'descripcion':
                    $col_web_descripcion = $col;
                    break;
                case 'codigo_proveedor':
                    $col_web_codigo_proveedor = $col;
                    break;
                case 'codigo_marca':
                    $col_web_codigo_marca = $col;
                    break;
                case 'codigo_pieza':
                    $col_web_codigo_pieza = $col;
                    break;
                case 'marca_id':
                    $col_web_marca_id = $col;
                    break;
                case 'pieza_id':
                    $col_web_pieza_id = $col;
                    break;
                case 'importe':
                    $col_web_importe = $col;
                    break;
            }
        }

        if (!isset($col_web_codigo_proveedor) || !isset($col_web_descripcion) || !isset($col_web_importe)) {
            echo 'Error al seleccionar las columnas. Debe seleccionar minimamente CODIGO DE PROVEEDOR, DESCRIPCION e IMPORTE';
            exit();
        }
        // borro las filas que no tengan cod de proveedor, descripcion o importe
        $highestRow = $objWorksheet_tab2->getHighestRow();
        //Gral::pr($highestRow, 'Paso 3');

        for ($row = $highestRow; $row > 1; --$row) {
            $col_prv_objWorksheet_tab2_tmp = $objWorksheet_tab2->getCellByColumnAndRow($col_web_codigo_proveedor, $row)->getValue();
//            $col_descripcion_objWorksheet_tab2_tmp = $objWorksheet_tab2->getCellByColumnAndRow($col_web_descripcion, $row)->getValue();
            if ($col_prv_objWorksheet_tab2_tmp == '') {
                //$objWorksheet_tab2->removeRow($row, 1);
            }
        }

        $objPHPExcel = new PHPExcel();
        $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);


        $objWorksheet->setCellValueByColumnAndRow($col_prv_insumo_id, 1, 'prv_insumo_id');
        $objWorksheet->setCellValueByColumnAndRow($col_codigo_proveedor, 1, 'codigo_proveedor');
        $objWorksheet->setCellValueByColumnAndRow($col_seleccion, 1, 'actualiza_descripcion');
        $objWorksheet->setCellValueByColumnAndRow($col_descripcion, 1, 'descripcion');
        $objWorksheet->setCellValueByColumnAndRow($col_importe, 1, 'importe');
        $objWorksheet->setCellValueByColumnAndRow($col_descuento, 1, 'descuento');
        $objWorksheet->setCellValueByColumnAndRow($col_importe_neto, 1, 'importe_neto');
        $objWorksheet->setCellValueByColumnAndRow($col_ultimo_importe, 1, 'ultimo_importe');
        $objWorksheet->setCellValueByColumnAndRow($col_fecha_importacion, 1, 'fecha_importacion');
        $objWorksheet->setCellValueByColumnAndRow($col_incremento, 1, 'incremento');
        $objWorksheet->setCellValueByColumnAndRow($col_costo_actual, 1, 'costo_actual');
        $objWorksheet->setCellValueByColumnAndRow($col_variacion, 1, 'variacion');
        $objWorksheet->setCellValueByColumnAndRow($col_actualizar_costo, 1, 'actualizar_costo');
        $objWorksheet->setCellValueByColumnAndRow($col_codigo_marca, 1, 'codigo_marca');
        $objWorksheet->setCellValueByColumnAndRow($col_codigo_pieza, 1, 'codigo_pieza');
        $objWorksheet->setCellValueByColumnAndRow($col_marca_id, 1, 'marca_id');
        $objWorksheet->setCellValueByColumnAndRow($col_pieza_id, 1, 'pieza_id');
        $objWorksheet->setCellValueByColumnAndRow($col_ins_insumo_id, 1, 'ins_insumo_id');
        $objWorksheet->setCellValueByColumnAndRow($col_ins_matriz_id, 1, 'ins_matriz_id');
        $objWorksheet->setCellValueByColumnAndRow($col_modificado, 1, 'modificado');
        $objWorksheet->setCellValueByColumnAndRow($col_nuevo, 1, 'nuevo');

        $objWorksheet->setCellValueByColumnAndRow($col_cancelado, 1, 'cancelado');
        $objWorksheet->setCellValueByColumnAndRow($col_descripcion_matriz, 1, 'descripcion_matriz');
        $objWorksheet->setCellValueByColumnAndRow($col_proveedor_referencial, 1, 'referencial');

        $highestRow = $objWorksheet_tab2->getHighestRow();
        //Gral::pr($highestRow, 'Paso 4');
        //exit;
        Gral::pr(date('H:i:s'), 'antes de logica');
        include 'prv_importacion_logica_tab_3.php';
        Gral::pr(date('H:i:s'), 'despues de logica');
                
    } else {
        echo "No se encuentra el documento: ";
        echo $path_destino;
        exit();
    }
}
?>
                    <?php Gral::pr(date('H:i:s'), 'antes de uno'); ?>

<form action="" method="POST" name="formulario_tablero_control" id="formulario_tablero_control">
    
    <?php include "prv_importacion_info_top.php" ?>
    
    <table class="display" id="tabla_tabs_3" importacion_id="<?php echo $prv_importacion->getId() ?>">
        <thead>
            <tr>
                <th class="t3_th_nro_fila">#</th>
                <th class="t3_th_nuevo">Nvo</th>
                <th class="t3_th_id">&nbsp;</th>
                <th class="t3_th_cod_proveedor">Cod PRV</th>
                <th class="t3_th_insumo">Insumo</th>
                <th class="t3_th_cod_marca">Marca</th>
                <th class="t3_th_cod_pieza">OEM</th>
                <th class="t3_th_nuevo_importe">Imp S/D</th>
                <th class="t3_th_nuevo_descuento">% Dsc</th>
                <th class="t3_th_nuevo_importe_neto">Imp Neto</th>
                <th class="t3_th_ultimo_importe">Ult Imp</th>
                <th class="t3_th_ultimo_fecha">Ult Fech</th>
                <th class="t3_th_nuevo_incremento">% Increm</th>
                <th class="t3_th_insumo_importe">Costo Act</th>
                <th class="t3_th_insumo_incremento">% Incr</th>
                <th class="t3_th_insumo_accion">Sel</th>
                <th class="t3_th_cancelar">&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $ins_marcas = InsMarca::getInsMarcas();

            for ($row = 2; $row <= $highestRow; ++$row) {
                ?>
                <tr id="tr_prv_insumo_<?php echo $row ?>" class="uno" identificador="<?php echo $row ?>">
                    <?php include "prv_insumo_uno.php"; ?>
                </tr>
            <?php } ?>

        </tbody>
    </table>
                    <?php Gral::pr(date('H:i:s'), 'despues de uno'); ?>

    <div class="botonera botonera-siguiente">
        <div class="errores-paso"></div>

        <a class="boton" id="siguiente_tabs_4" href="#">Siguiente</a>
    </div>

</form>