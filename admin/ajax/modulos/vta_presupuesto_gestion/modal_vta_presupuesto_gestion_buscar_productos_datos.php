
<?php
$c = new Criterio('GEX_VTA_PRESUPUESTO_BUSCADOR');
$c->addTabla('ins_insumo');
$c->addOrden('ins_insumo.descripcion');
$c->setCriteriosInicial();

$ins_insumos = InsInsumo::getInsInsumos(null, $c);
//Gral::prr($ins_insumos);

// -----------------------------------------------------------------
// Se instancia el presupuesto activo
// -----------------------------------------------------------------       
$vta_presupuesto_activo = VtaPresupuesto::getPresupuestoActivo();
$ins_tipo_lista_precio = $vta_presupuesto_activo->getInsTipoListaPrecio();

if (count($ins_insumos) > 0) {
    $cont = 0;
    foreach ($ins_insumos as $ins_insumo) {
        $cont++;
        
        $importe_venta = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio, false);        
        $importe_venta_con_iva = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio, true);        
        ?>
        <div class="buscador-producto-uno" ins_insumo_id="<?php echo $ins_insumo->getId() ?>" tabindex="<?php echo $cont ?>">

            <div class="producto-imagen avatar">
                <a href="<?php Gral::_echo($ins_insumo->getPathImagenPrincipal()) ?>">
                    <img src="<?php Gral::_echo($ins_insumo->getPathImagenPrincipal()) ?>" width="70" alt="imagen" />
                </a>
            </div>

            <div class="producto-info">

                <?php if($importe_venta){ ?>
                
                
                    <div class="botonera">
                        
                        <div class="importe-sin-iva">
                            <?php Gral::_echoImp($importe_venta) ?>
                            <label class="leyenda-masiva">+ IVA</label>
                        </div>

                        <div class="importe-con-iva">
                            <?php Gral::_echoImp($importe_venta_con_iva) ?>
                        </div>
                        
                        <input type="button" class="boton agregar" value="Agregar al Presupuesto" />
                    </div>
                <?php } ?>
                
                <div class="descripcion">
                    <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                </div>
                
                <div class="categoria">
                    <strong><?php Gral::_echo($ins_insumo->getInsCategoria()->getFamiliaDescripcion()) ?></strong>
                </div>
                
                <div class="codigo">
                    ID: <strong><?php Gral::_echo($ins_insumo->getId()) ?></strong> - 
                    Cod Interno: <strong><?php Gral::_echo($ins_insumo->getCodigoInterno()) ?></strong> - 
                    Cod Barra: <strong><?php Gral::_echo($ins_insumo->getCodigoBarra()) ?></strong>
                </div>
                
                <?php if(!$ins_insumo->getControlStock()){ ?>
                <div class="no-controla-stock">
                    No Controla Stock
                </div>
                <?php } ?>

                <?php $ins_insumo->getHtmlInsumoBultoConfiguracion() ?>
                
            </div>

        </div>
    <?php } ?>
<?php } else { ?>
    <div class="no-resultado">No se encontraron productos con el criterio elegido.</div>
<?php } ?>            
<script>
    setInitVtaPresupuestoGestion();
    setInit();
</script>