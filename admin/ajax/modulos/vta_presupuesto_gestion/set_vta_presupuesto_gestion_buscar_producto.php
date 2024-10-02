<?php

include "_autoload.php";

$txt_buscador_productos = Gral::getVars(Gral::VARS_GET, 'txt_buscador_productos', '', Gral::TIPO_STRING);

// consulta de precios de productos
$c = new Criterio('GEX_VTA_PRESUPUESTO_BUSCADOR');

$c->add('ins_insumo.estado', 1, Criterio::IGUAL);
$c->add('ins_insumo.es_vendible', 1, Criterio::IGUAL);

if ($txt_buscador_productos != '') {
    $c->addInicioSubconsulta();
    $c->add('ins_insumo.descripcion', $txt_buscador_productos, Criterio::LIKE);
    $c->add('ins_insumo.codigo', $txt_buscador_productos, Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_insumo.codigo_interno', $txt_buscador_productos, Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_insumo.claves', $txt_buscador_productos, Criterio::LIKE, false, Criterio::_OR);
    $c->add('ins_marca.descripcion', $txt_buscador_productos, Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->addTabla('ins_insumo');
$c->addRealJoin('ins_marca', 'ins_marca.id', 'ins_insumo.ins_marca_id', 'LEFT JOIN');
$c->addOrden('ins_insumo.descripcion');
$c->setCriterios();

$ins_insumos = InsInsumo::getInsInsumos(null, $c);
$cantidad_insumos = count($ins_insumos);

$arr['cantidad'] = $cantidad_insumos;

if ($cantidad_insumos == 1) {
    $ins_insumo = $ins_insumos[0];
    $ins_insumo_id = $ins_insumo->getId();

    // -----------------------------------------------------------------
    // Se instancia el presupuesto activo
    // -----------------------------------------------------------------       
    $vta_presupuesto = VtaPresupuesto::getOxId(Gral::getSes(VtaPresupuesto::PRESUPUESTO_ACTIVO));
    $ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();

    // -----------------------------------------------------------------------------
    // Se verifica si el producto tiene precio de venta activo en el tipo de lista
    // -----------------------------------------------------------------------------
    $importe_venta = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio);        

    if($importe_venta){
        // -----------------------------------------------------------------
        // Se verifica si el insumo esta actualmente incluido en el presupuesto o no
        // -----------------------------------------------------------------
        $vta_presupuesto_ins_insumo = $vta_presupuesto->getVtaPresupuestoInsInsumoXInsInsumoId($ins_insumo_id);
        if ($vta_presupuesto_ins_insumo) {
            $cantidad = $vta_presupuesto_ins_insumo->getCantidad();
            $cantidad++;

            // -----------------------------------------------------------------
            // Si existe el insumo en el presupuesto, se modifica la cantidad
            // -----------------------------------------------------------------
            $vta_presupuesto->setInsumoExistenteAPresupuesto($vta_presupuesto_ins_insumo, $cantidad, $ins_tipo_lista_precio->getId(), $cli_cliente_id = false);
            $arr['msg'] = 'Producto Agregado';        
        } else {

            // -----------------------------------------------------------------
            // si no existe producto en el presupuesto, se incializa el producto en el presupuesto
            // -----------------------------------------------------------------
            $vta_presupuesto->setInsumoAPresupuesto($ins_insumo_id, $cantidad = 1, $ins_tipo_lista_precio->getId(), $cli_cliente_id = false);
            $arr['msg'] = 'Nuevo Producto Agregado';        
        }
        $arr['error'] = 0;
    }else{
        $arr['error'] = 1;        
        $arr['msg'] = 'El producto no tiene precio activo en la lista utilizada';        
    }
}

$arr_json = json_encode($arr);
echo $arr_json;
