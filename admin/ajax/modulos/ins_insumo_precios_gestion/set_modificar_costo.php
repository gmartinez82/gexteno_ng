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
$porcentaje = Gral::getVars(1, 'porcentaje', 0);
$importe = Gral::getVars(1, 'importe', 0);
$descripcion = Gral::getVars(1, 'descripcion', '');
$observacion = Gral::getVars(1, 'observacion', '');

$cmb_filtro_iva_incluido = Gral::getSes(DbConfig::CONFIG_SISTEMA_CODIGO.DbConfig::CONFIG_CONF_PROYECTO_MIN.'INS_INSUMO_PRECIOS_GESTION_FILTRO_IVA_INCLUIDO');

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
    
    if ($ins_insumo) {
        $gral_tipo_iva = $ins_insumo->getGralTipoIvaVentaObj();
        $ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();
        if ($ins_insumo_costo) {
            $costo = $ins_insumo_costo->getCosto();
            
            if($porcentaje != 0){
                $costo = $costo * (($porcentaje / 100) + 1);
                $prefijo = 'MASIVO ('.$porcentaje.'%) - ';
            }elseif($importe > 0){
                $costo = $importe;
                $prefijo = 'MASIVO - ';
            }
            
            // se verifica si se esta operando con iva incluido
            if($cmb_filtro_iva_incluido){
                $costo = $costo / $gral_tipo_iva->getValorIvaDecimalParaSumarEnCalculo();
            }            
            
            // -----------------------------------------------------------------
            // se actualiza costo de insumo
            // -----------------------------------------------------------------
            $ins_insumo->setInsInsumoCostoActual(
                    $prv_importacion = false, $costo, $observacion, $prefijo.$descripcion
            );
        } else {
            if ($importe > 0) {
                $costo = $importe;
                $prefijo = 'MASIVO - Inicializacion - ';
            }

            // -----------------------------------------------------------------
            // se actualiza costo de insumo
            // -----------------------------------------------------------------
            $ins_insumo->setInsInsumoCostoActual(
                    $prv_importacion = false, $costo, $observacion, $prefijo.$descripcion
            );
        }
    }
}
?>