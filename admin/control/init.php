<?php

define('GEN_PATH_HTTP', Gral::getPath('path_http'));
define('GEN_PATH_ABS', Gral::getPath('path_absoluto'));

$us_usuario_autenticado = UsUsuario::autenticado();
if($us_usuario_autenticado){
    $gral_sucursals_autorizadas_ids = $us_usuario_autenticado->getGralSucursalUsUsuariosId();    
}

// ------------------------------------------------------------------------------
// se identifica al vendedor vinculado al usuario
// ------------------------------------------------------------------------------
$vta_vendedor_autenticado = $us_usuario_autenticado->getVtaVendedor();
if($vta_vendedor_autenticado){
    
    // --------------------------------------------------------------------------
    // se instancian las sucursales que el usuario puede visualizar
    // --------------------------------------------------------------------------    
    $gral_sucursals_autorizadas = $us_usuario_autenticado->getGralSucursalsXGralSucursalUsUsuario();

    // --------------------------------------------------------------------------
    // se instancian los depositos que el usuario puede visualizar
    // --------------------------------------------------------------------------    
    $pan_panols_autorizados = $us_usuario_autenticado->getPanPanolsXPanPanolUsUsuario();
    
    // --------------------------------------------------------------------------
    // se instancia la sucursal vinculada al vendedor
    // --------------------------------------------------------------------------    
    $gral_sucursal_autenticada = $vta_vendedor_autenticado->getGralSucursal();    
    if($gral_sucursal_autenticada->getId() == 'null'){
        $gral_sucursal_autenticada = false;
    }
    
    //Gral::prr($gral_sucursal_autenticada);
    //Gral::prr($pan_panols_autorizadas);
    //Gral::prr($vta_vendedor_autenticado);
}

$vta_presupuesto_activo_id = Gral::getSes(VtaPresupuesto::PRESUPUESTO_ACTIVO);
if (!Ctrl::esVacio($vta_presupuesto_activo_id)) {
    $vta_presupuesto_activo = VtaPresupuesto::getOxId($vta_presupuesto_activo_id);
    if ($vta_presupuesto_activo) {
        $ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($vta_presupuesto_activo->getInsTipoListaPrecioId());
    }
}

// ------------------------------------------------------------------------------
// se identifica al cajero vinculado al usuario
// ------------------------------------------------------------------------------
$fnd_cajero_autenticado = $us_usuario_autenticado->getFndCajero();

// ------------------------------------------------------------------------------
// se inicializa moneda por default del sistema
// ------------------------------------------------------------------------------
$gral_moneda_base = GralMoneda::getGralMonedaBase();
