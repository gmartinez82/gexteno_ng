<?php
include 'cabecera_phpexcel_tab_3.php';
?>

<table class="debug" id="modal_debug">
    <thead>
        <tr>
            <th class="t3_th_nro_fila">#</th>
            <th class="t3_th_prv_insumo_id">prv insumo_id</th>
            <th class="t3_th_ins_insumo_id">ins insumo_id</th>
            <th class="t3_th_ins_matriz_id">ins matriz_id</th>
            <th class="t3_th_codigo_proveedor">cod prov</th>
            <th class="t3_th_actualiza_descripcion">act des</th>
            <th class="t3_th_descripcion">descripcion</th>
            <th class="t3_th_descripcion_matriz">descripcion matriz</th>
            <th class="t3_th_importe">imp</th>
            <th class="t3_th_descuento">desc</th>
            <th class="t3_th_importe_neto">imp neto</th>
            <th class="t3_th_ultimo_importe">ult imp</th>
            <th class="t3_th_fecha_importacion">fecha imp</th>
            <th class="t3_th_incremento">inc</th>
            <th class="t3_th_costo_actual">costo act</th>
            <th class="t3_th_variacion">var</th>
            <th class="t3_th_actualizar_costo">act costo</th>
            <th class="t3_th_marca_id">marca_id</th>
            <th class="t3_th_codigo_marca">cod marca</th>
            <th class="t3_th_pieza_id">pieza_id</th>
            <th class="t3_th_codigo_pieza">cod pieza</th>
            <th class="t3_th_nuevo">nuevo</th>
            <th class="t3_th_modificado">modif</th>
            <th class="t3_th_cancelado">cancel</th>
        </tr>
    </thead>

    <tbody>
        <?php
        include 'get_debug_uno.php';

        $nombre_archivo = Gral::getSes('nombre_archivo');
        $path_destino = Gral::getPathAbs() . 'excel/tab_3/rollback/' . $nombre_archivo;

        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        $objReader->setReadDataOnly(false);

        if (file_exists($path_destino)) {
            $objPHPExcel = $objReader->load($path_destino);
            $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
        } else {
            echo "El archivo " . $path_destino . " no existe.";
            exit();
        }

        include 'set_excel_variables.php';
        include 'get_debug_uno.php';
        ?>
    </tbody>
</table>


