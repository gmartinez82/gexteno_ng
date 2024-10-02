<?php
include_once "_autoload.php";

$prv_importacion_id = Gral::getVars(2, 'prv_importacion_id', 0);

if ($prv_importacion_id > 0) {

    $prv_importacion = PrvImportacion::getOxId($prv_importacion_id);

    if ($prv_importacion) {

        $prv_proveedor_id = $prv_importacion->getPrvProveedorId();
        $descuento = $prv_importacion->getDescuento();
        $web_ins_marca_id = $prv_importacion->getInsMarcaId();
        $web_pieza_id = $prv_importacion->getInsMarcaPieza();

        Gral::setSes('prv_proveedor_id', $prv_proveedor_id);
        Gral::setSes('descuento', $descuento);
        Gral::setSes('web_ins_marca_id', $web_ins_marca_id);
        Gral::setSes('web_pieza_id', $web_pieza_id);
        Gral::setSes('prv_importacion_id', $prv_importacion->getId());
        
        Gral::setSes('PRV_IMPORTACION_LISTA_BUSCADOR_PALABRA', '');
        Gral::setSes('PRV_IMPORTACION_LISTA_ORDENAR_CAMPO', 'fila');
        Gral::setSes('PRV_IMPORTACION_LISTA_ORDENAR_TIPO', 'asc');

        //include 'prv_importacion_logica_tab_3_restaurar_importacion.php';
        //include 'prv_insumo_tab_3.php';
    } else {
        echo "Error al cargar lista.";
    }
}
