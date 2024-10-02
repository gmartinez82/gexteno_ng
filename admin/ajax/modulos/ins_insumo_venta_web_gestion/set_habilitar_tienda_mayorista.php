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
$estado = Gral::getVars(1, 'estado', -1);

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

foreach ($ins_insumos as $ins_insumo) {
    
    if($estado != -1){
        $ins_insumo->setVentaMayorista($estado);
        $ins_insumo->save();
    }
}
