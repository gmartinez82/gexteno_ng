<?php
include_once "_autoload.php";

$prv_importacion_id = Gral::getSes('prv_importacion_id');
$prv_importacion = PrvImportacion::getOxId($prv_importacion_id);

// buscador palabra
$txt_buscador = Gral::getSes('PRV_IMPORTACION_LISTA_BUSCADOR_PALABRA');
$ordenar_campo = Gral::getSes('PRV_IMPORTACION_LISTA_ORDENAR_CAMPO');
$ordenar_tipo = Gral::getSes('PRV_IMPORTACION_LISTA_ORDENAR_TIPO');

$pag = Gral::getVars(2, 'pag', 1);
PrvImportacionLista::setSesPag($pag);

$paginador = new Paginador(PrvImportacionLista::getSesPagCantidad(), PrvImportacionLista::getSesPag());
//$paginador = new Paginador(10, 0);

$sql = "SELECT "
        . "* "
        . "FROM tmp_prv_importacion_tab_3 "
        . "WHERE true "
        ;
if($txt_buscador != ''){
$sql .= "AND ("
        ."codigo_proveedor like '%".$txt_buscador."%' "
        ."OR UPPER(descripcion) like '%".$txt_buscador."%' "
        . ")";
}
$sql .= "AND prv_importacion_id = ".$prv_importacion->getId()." ";

if($ordenar_campo != ''){
    
    switch ($ordenar_campo){
        case 'importe':
        case 'descuento':
        case 'importe_neto':
        case 'ultimo_importe':
        case 'incremento':
        case 'costo_actual':
        case 'variacion':
            $ordenar_campo = "coalesce(nullif(".$ordenar_campo.", ''), '0')";
            $casteo = "::FLOAT";
        break;
        default:
            $casteo = "";
    }
    
    $sql .= "ORDER BY ".$ordenar_campo.$casteo." ".$ordenar_tipo." ";
}else{
    $sql .= "ORDER BY fila asc ";
}

$sql;
$cons = new Consulta();
$cons->setSQL($sql);
$cons->setPaginacion($paginador->getRegistros(), $paginador->getPagina());
$cons->execute();

$paginador->setTotal($cons->getTotal()); /* Se actualiza objeto paginador */


while($fila_rs = pg_fetch_object($cons->getResultado())){
    
    $fila = $fila_rs->fila;
    $prv_importacion_id = $fila_rs->prv_importacion_id;
    $prv_insumo_id = $fila_rs->prv_insumo_id;
    $codigo_proveedor = $fila_rs->codigo_proveedor;
    $seleccion = $fila_rs->seleccion;
    $descripcion = $fila_rs->descripcion;
    $descripcion_matriz = $fila_rs->descripcion_matriz;
    $importe = $fila_rs->importe;
    $descuento = $fila_rs->descuento;
    $importe_neto = $fila_rs->importe_neto;
    $ultimo_importe = $fila_rs->ultimo_importe;
    $fecha_importacion = $fila_rs->fecha_importacion;
    $incremento = $fila_rs->incremento;
    $costo_actual = $fila_rs->costo_actual;
    $variacion = $fila_rs->variacion;
    $actualizar_costo = $fila_rs->actualizar_costo;
    $codigo_marca = $fila_rs->codigo_marca;
    $codigo_oem = $fila_rs->codigo_oem;
    $ins_marca_id = $fila_rs->ins_marca_id;
    $ins_marca_oem_id = $fila_rs->ins_marca_oem_id;
    $ins_insumo_id = $fila_rs->ins_insumo_id;
    $ins_matriz_id = $fila_rs->ins_matriz_id;
    $modificado = $fila_rs->modificado;
    $nuevo = $fila_rs->nuevo;
    $permite_desvincular = $fila_rs->permite_desvincular;
    $cancelado = $fila_rs->cancelado;
    $proveedor_referencial = $fila_rs->proveedor_referencial;
    
    $arr_rows[$fila] = array(
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
    
}
//Gral::prr($arr_rows);
//exit;

include "prv_insumo_tab_3.php";

?>
<script>
    setInitPrvInsumo();
</script>