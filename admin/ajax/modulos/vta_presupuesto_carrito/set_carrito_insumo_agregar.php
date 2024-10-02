<?php

include "_autoload.php";
$user = UsUsuario::autenticado();

//VtaPresupuesto::abandonarPresupuesto(); // se utiliza para forzar inicializar un presupuesto

$ins_insumo_id = Gral::getVars(Gral::VARS_POST, 'ins_insumo_id', 0);
$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, 'vta_presupuesto_id', 0);
$cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cli_cliente_id', 0);
$ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_POST, 'cmb_ins_tipo_lista_precio_id', 0, Gral::TIPO_INTEGER);
$txt_cantidad = Gral::getVars(Gral::VARS_POST, 'txt_cantidad', 0);
$ins_insumo_bulto_id = Gral::getVars(Gral::VARS_POST, 'cmb_ins_insumo_bulto_id', 0, Gral::TIPO_INTEGER);

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
if (!$vta_presupuesto) {
    $cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'dbsug_cli_cliente_id', 0);
    $ins_tipo_lista_precio_id = Gral::getVars(Gral::VARS_POST, 'cmb_ins_tipo_lista_precio_id', 0);
    
    $ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($ins_tipo_lista_precio_id);
}else{
    $ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();
    $ins_tipo_lista_precio_id = $ins_tipo_lista_precio->getId();
    $vta_presupuesto_tipo_estado = $vta_presupuesto->getVtaPresupuestoTipoEstado();
}

$ins_insumo = InsInsumo::getOxId($ins_insumo_id);
$ins_insumo_bultos = $ins_insumo->getInsInsumoBultosOrdenados($ins_tipo_lista_precio);

$ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio, $solo_habilitado = true);


// ------------------------------------------------------------------------------
// se realizan los controles de datos
// ------------------------------------------------------------------------------
$arr["error"] = false;

if ($ins_insumo_id == 0) {
    $arr["error_general"].= Lang::_lang("No se encontro el ins_insumo", true);
    $arr["error"] = true;
}

if (!$vta_presupuesto) {
    if ($ins_tipo_lista_precio_id == 0) {
        $arr["cmb_ins_tipo_lista_precio_id"] = Lang::_lang("Debe seleccionar un tipo de lista de precios", true);
        $arr["error"] = true;
    }
}

if ($txt_cantidad <= 0) {
    $arr["txt_cantidad"] = Lang::_lang("Debe indicar una cantidad mayor a cero", true);
    $arr["error"] = true;
}

if($ins_tipo_lista_precio && $ins_tipo_lista_precio->getBultoCerrado() && count($ins_insumo_bultos) > 0){
    if ($ins_insumo_bulto_id == 0) {
        $arr["cmb_ins_insumo_bulto_id"] = Lang::_lang("Debe seleccionar un tipo de bulto cerrado", true);
        $arr["error"] = true;
    }
}

if($ins_lista_precio && $ins_lista_precio->getCantidadMinimaVenta() > $txt_cantidad){
    $arr["txt_cantidad"] = Lang::_lang("No supera la cantidad minima de venta", true).' ('.$ins_lista_precio->getCantidadMinimaVenta().')';
    $arr["error"] = true;
}

// -----------------------------------------------------------------
// se verifica que el presupuesto se encuentre en curso
// -----------------------------------------------------------------
if($vta_presupuesto_tipo_estado){
    if(!$vta_presupuesto_tipo_estado->getActivo() || $vta_presupuesto_tipo_estado->getTerminal()){
        $arr["error_general"].= Lang::_lang("El presupuesto actual no se encuentra activo", true).' - Codigo '.$vta_presupuesto->getCodigo();
        $arr["error"] = true;    
    }
}

if (!$arr["error"]) {

    // -----------------------------------------------------------------
    // Sse verifica si el presupuesto no se encuentra inicializado, para inicializarlo
    // -----------------------------------------------------------------
    if (!Gral::getSes(VtaPresupuesto::PRESUPUESTO_ACTIVO)) {
        $vta_vendedor = $user->getVtaVendedor();
        $fecha = date('Y-m-d');

        // -----------------------------------------------------------------
        // Se inicializa el presupuesto nuevo
        // -----------------------------------------------------------------
        $vta_presupuesto = VtaPresupuesto::inicializarPresupuesto($vta_vendedor->getId(), $fecha, $ins_tipo_lista_precio_id, $cli_cliente_id);

        // -----------------------------------------------------------------
        // Se guarda en session el ID del presupuesto creado
        // -----------------------------------------------------------------
        Gral::setSes(VtaPresupuesto::PRESUPUESTO_ACTIVO, $vta_presupuesto->getId());
    } else {
        // -----------------------------------------------------------------
        // Se instancia el presupuesto activo
        // -----------------------------------------------------------------       
        $vta_presupuesto = VtaPresupuesto::getOxId(Gral::getSes(VtaPresupuesto::PRESUPUESTO_ACTIVO));
    }

    // -----------------------------------------------------------------
    // Se verifica si el insumo esta actualmente incluido en el presupuesto o no
    // -----------------------------------------------------------------
    $vta_presupuesto_ins_insumo = $vta_presupuesto->getVtaPresupuestoInsInsumoXInsInsumoId($ins_insumo_id);
    if ($vta_presupuesto_ins_insumo) {

        // -----------------------------------------------------------------
        // Si existe el insumo en el presupuesto, se modifica la cantidad
        // -----------------------------------------------------------------
        $vta_presupuesto->setInsumoExistenteAPresupuesto($vta_presupuesto_ins_insumo, $txt_cantidad, $ins_tipo_lista_precio_id, $cli_cliente_id, $ins_insumo_bulto_id);
    } else {

        // -----------------------------------------------------------------
        // si no existe producto en el presupuesto, se incializa el producto en el presupuesto
        // -----------------------------------------------------------------
        $vta_presupuesto->setInsumoAPresupuesto($ins_insumo_id, $txt_cantidad, $ins_tipo_lista_precio_id, $cli_cliente_id, $ins_insumo_bulto_id);
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;

