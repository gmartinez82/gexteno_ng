<?php

include "_autoload.php";

// ------------------------------------------------------------------
// coleccion sobre la cual afectar
// ------------------------------------------------------------------
$chk_insumo_ids = Gral::getVars(1, 'chk_insumo_id');
$rad_aplicar_todos = Gral::getVars(Gral::VARS_POST, 'rad_aplicar_todos', 0);

// ------------------------------------------------------------------
// el resto de los campos del formulario se reciben por POST
// ------------------------------------------------------------------
$tipo_lista_precio_id = Gral::getVars(1, 'tipo_lista_precio_id', 0);
$porcentaje = Gral::getVars(1, 'porcentaje', 0);
$importe = Gral::getVars(1, 'importe', 0);

// -----------------------------------------------------------------------------
// se inicializa criterio para reconocer la busqueda realizada
// -----------------------------------------------------------------------------
if($rad_aplicar_todos){
    $criterio = new Criterio(InsInsumo::SES_CRITERIOS);
    $criterio->addTabla(InsInsumo::GEN_TABLA);
    $criterio->setCriteriosInicial();

    $paginador = null;
    $ins_insumos = InsInsumo::getInsInsumos($paginador, $criterio);
}else{
    foreach ($chk_insumo_ids as $chk_insumo_id) {
        $ins_insumo_uno = InsInsumo::getOxId($chk_insumo_id);
        $ins_insumos[] = $ins_insumo_uno;
    }
}

$ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($tipo_lista_precio_id);
if ($ins_tipo_lista_precio) {
    foreach ($ins_insumos as $ins_insumo) {

        $ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();
        if ($ins_insumo_costo) {
            $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio);
            if ($ins_lista_precio) {
                if($ins_tipo_lista_precio->getPorcentajeIncremento() != $porcentaje){
                    $ins_lista_precio->setPorcentajeIncremento($porcentaje);
                }else{
                    $ins_lista_precio->setPorcentajeIncremento(0);
                }
                $ins_lista_precio->setImporteManual($importe);

                //Gral::prr($ins_lista_precio);
                $ins_lista_precio->setCalcularImporte($save = true);
            }
        }
    }
}
?>