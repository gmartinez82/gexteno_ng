<?php
include "_autoload.php";

// ------------------------------------------------------------------
// coleccion sobre la cual afectar
// ------------------------------------------------------------------
$chk_insumo_ids = Gral::getVars(1, 'chk_insumo_id');
$rad_aplicar_todos = Gral::getVars(Gral::VARS_POST, 'rad_aplicar_todos', 0);

$etiqueta_id = Gral::getVars(1, 'etiqueta_id', 0);
$ins_etiqueta = InsEtiqueta::getOxId($etiqueta_id);

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
    
    $array = array(
        array('campo' => 'ins_insumo_id', 'valor' => $ins_insumo->getId()),
        array('campo' => 'ins_etiqueta_id', 'valor' => $ins_etiqueta->getId()),
    );
    $ins_insumo_ins_etiqueta = InsInsumoInsEtiqueta::getOxArray($array);
    if(!$ins_insumo_ins_etiqueta){
        $ins_insumo_ins_etiqueta = new InsInsumoInsEtiqueta();
        $ins_insumo_ins_etiqueta->setInsInsumoId($ins_insumo->getId());
        $ins_insumo_ins_etiqueta->setInsEtiquetaId($ins_etiqueta->getId());
        $ins_insumo_ins_etiqueta->save();
    }
}
