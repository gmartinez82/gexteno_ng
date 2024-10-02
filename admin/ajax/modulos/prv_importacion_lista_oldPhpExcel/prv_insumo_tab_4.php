<?php
include "_autoload.php";
session_start();
require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel.php');
require_once(Gral::getPathAbs() . 'comps/phpexcel/PHPExcel/Reader/Excel2007.php');

$nombre_archivo = Gral::getSes('nombre_archivo');
$path_destino = Gral::getPathAbs() . 'excel/tab_3/' . $nombre_archivo;

$prv_proveedor_id = Gral::getSes('prv_proveedor_id');

$actualiza_descripcions = Gral::getVars(1, 'check_seleccion', 0);
$actualiza_nuevos = Gral::getVars(1, 'check_nuevo', 0);
$ins_marca_ids = Gral::getVars(1, 'cmb_ins_marca_id', 0);
$ins_pieza_ids = Gral::getVars(1, 'cmb_pieza_id', 0);
$actualizar_costos = Gral::getVars(1, 'check_actualizar_costo', 0);

$prv_importacion_id = Gral::getVars(2, 'prv_importacion_id', 0);
if ($prv_importacion_id == 0) {
    $prv_importacion_id = Gral::getSes('prv_importacion_id');
} else {
    Gral::setSes('prv_importacion_id', $prv_importacion_id);
}

$prv_importacion = PrvImportacion::getOxId($prv_importacion_id);
if ($prv_importacion) {
    $prv_importacion->setPrvImportacionEstado(PrvImportacionTipoEstado::TIPO_EN_TAB_4);
}

include 'prv_insumo_variables_cabecera.php';

$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objReader->setReadDataOnly(false);

if (file_exists($path_destino)) {
    $objPHPExcel = $objReader->load($path_destino);
    $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);

    // Actualiza Nuevos
//    if (isset($actualiza_nuevos)) {
//        foreach ($actualiza_nuevos as $actualiza_nuevo) {
//            $objWorksheet->setCellValueByColumnAndRow($col_ins_insumo_id, $actualiza_nuevo, 0);
//            $objWorksheet->setCellValueByColumnAndRow($col_ins_matriz_id, $actualiza_nuevo, 0);
//        }
//    }
    // Actualiza descripcion
//    if (isset($actualiza_descripcions)) {
//        foreach ($actualiza_descripcions as $actualiza_descripcion) {
//            $objWorksheet->setCellValueByColumnAndRow($col_seleccion, $actualiza_descripcion, '1');
//        }
//    }
    // Actualiza costos
//    if (isset($actualizar_costos)) {
//        foreach ($actualizar_costos as $actualizar_costo) {
//            $objWorksheet->setCellValueByColumnAndRow($col_actualizar_costo, $actualizar_costo, '1');
//        }
//    }
    // Actualiza ins marca id
//    if (isset($ins_marca_ids)) {
//        foreach ($ins_marca_ids as $i => $ins_marca_id) {
//            if ($ins_marca_id != 0)
//                $objWorksheet->setCellValueByColumnAndRow($col_marca_id, $i + 2, $ins_marca_id);
//        }
//    }
    // Actualiza ins pieza id
//    if (isset($ins_pieza_ids)) {
//        foreach ($ins_pieza_ids as $i => $ins_pieza_id) {
//            if ($ins_pieza_id != 0)
//                $objWorksheet->setCellValueByColumnAndRow($col_pieza_id, $i + 2, $ins_pieza_id);
//        }
//    }

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save(Gral::getPathAbs() . 'excel/tab_4/' . $nombre_archivo);
} else {
    echo "No se encuentra el documento: ";
    echo $path_destino;
    exit();
}

$highestRow = $objWorksheet->getHighestRow();
$highestColumn = $objWorksheet->getHighestColumn();
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
?>
<?php include "prv_importacion_info_top.php" ?>

<table class="display" id="tabla_tabs_4">
    <thead>
        <tr>
            <th class="t3_th_nro_fila">#</th>
            <th class="t3_th_nuevo">Nvo</th>
            <th class="t3_th_id">ID</th>
            <th class="t3_th_cod_proveedor">Cod PRV</th>
            <th class="t3_th_insumo">Insumo</th>
            <th class="t3_th_cod_marca">Marca</th>
            <th class="t3_th_cod_pieza">OEM</th>
            <th class="t3_th_nuevo_importe">Imp S/D</th>
            <th class="t3_th_nuevo_descuento">% Desc</th>
            <th class="t3_th_nuevo_importe_neto">Imp Neto</th>
            <th class="t3_th_ultimo_importe">Ult Imp</th>
            <th class="t3_th_ultimo_fecha">Fech Imp</th>
            <th class="t3_th_nuevo_incremento">% Increm</th>
            <th class="t3_th_insumo_importe">Costo Actual</th>
            <th class="t3_th_insumo_incremento">% Increm</th>
            <th class="t3_th_insumo_accion">Act</th>
            <th class="t3_th_cancelar">-</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $ins_marcas = InsMarca::getInsMarcas();

        for ($row = 2; $row <= $highestRow; ++$row) {
            include "prv_insumo_uno_list.php";
        }
        ?>

    </tbody>
</table>

<div class="botonera botonera-siguiente">
    <a class="boton" id="siguiente_tabs_5" href="#">Confirmar Importación de Datos</a>
</div>