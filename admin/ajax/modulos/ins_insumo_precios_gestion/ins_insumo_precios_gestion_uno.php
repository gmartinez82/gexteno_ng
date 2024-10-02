<?php
$cmb_filtro_iva_incluido = Gral::getSes(DbConfig::CONFIG_SISTEMA_CODIGO.DbConfig::CONFIG_CONF_PROYECTO_MIN.'INS_INSUMO_PRECIOS_GESTION_FILTRO_IVA_INCLUIDO');

$ins_marca = $ins_insumo->getInsMarca();
$ins_categoria = $ins_insumo->getInsCategoria();
$ins_matriz = $ins_insumo->getInsMatriz();

$ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();
$gral_tipo_iva_venta = $ins_insumo->getGralTipoIvaVentaObj();

if ($ins_insumo_costo) {
    $dias_desde_actualizacion_costo = Date::getDiferenciaTiempo('d', $ins_insumo_costo->getModificado(), date('Y-m-d'));

    $arr_fechas = Date::getArrFecha($ins_insumo_costo->getModificado());
    if ($arr_fechas['anio'] == date('Y') && $arr_fechas['mes'] == date('m')) {
        $css_estado_desde_actualizacion_costo = 'MES_ACTUAL';
    } elseif ($arr_fechas['anio'] == date('Y') && $arr_fechas['mes'] == str_pad((date('m') - 1), 0, STR_PAD_LEFT)) {
        $css_estado_desde_actualizacion_costo = 'MES_ANTERIOR';
    } else {
        $css_estado_desde_actualizacion_costo = 'MES_MUYANTERIOR';
    }
}
$ins_etiquetas = $ins_insumo->getInsEtiquetasXInsInsumoInsEtiqueta();
//$prv_proveedors = $ins_insumo->getPrvProveedorsXInsInsumoPrvProveedor();

?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="checkbox">
        <input type="checkbox" id="chk_insumo_id_<?php Gral::_echo($ins_insumo->getId()) ?>" name="chk_insumo_id[<?php Gral::_echo($ins_insumo->getId()) ?>]" value="<?php Gral::_echo($ins_insumo->getId()) ?>">        
    </div>

</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="info-insumo">

        <div class="avatar foto">
            <a href="<?php echo $ins_insumo->getPathImagenPrincipal() ?>" rel="imagen-insumo-<?php echo $ins_insumo->getId() ?>">
                <img src="<?php echo $ins_insumo->getPathImagenPrincipal(true) ?>" alt="img" width="40" />
            </a>
        </div>

        <div class="marca">
            <label class="label"><?php Lang::_lang('Marca') ?>:</label> 
            <label class="descripcion-marca"><?php Gral::_echo($ins_marca->getDescripcion()) ?></label>            
            <label class="codigo-marca"><?php Gral::_echo($ins_insumo->getCodigoMarca()) ?></label>
        </div>

        <div class="insumo">
            <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
            
            <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_ACCION_MODIFICAR')) { ?>
                <a href='ins_insumo_alta.php?id=<?php Gral::_echo($ins_insumo->getId()) ?>&hash=<?php Gral::_echo($ins_insumo->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>' target="_blank">
                    <img src='imgs/btn_modi.gif' width='14' border='0' />
                </a>
            <?php } ?>
        </div>

        <div class="codigo-interno">
            C.I.: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
        </div>

        <div class="categoria">
            <?php Gral::_echo($ins_insumo->getInsCategoria()->getArbolFamiliaDescripcion()) ?>
        </div>
        
        <?php 
        // ---------------------------------------------------------------------
        // se muestran bultos configurados al insumo
        // ---------------------------------------------------------------------
        $ins_insumo->getHtmlInsumoBultoConfiguracion();
        ?>
        
        <?php if (count($ins_etiquetas) > 0) { ?>
            <div class="etiquetas">
                <?php foreach ($ins_etiquetas as $ins_etiqueta) { ?>
                    <div class="etiqueta" title="Etiqueta">
                        <?php Gral::_echo($ins_etiqueta->getDescripcion()) ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

        <?php if (count($prv_proveedors) > 0) { ?>
            <div class="proveedors">
                <?php foreach ($prv_proveedors as $prv_proveedor) { ?>
                    <div class="proveedor" title="Proveedor">
                        <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <?php if ($ins_insumo_costo) { ?>
        
        <div class="costo <?php echo ($ins_insumo_costo->getCosto() == 0) ? 'cero' : '' ?>">
            <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_PRECIOS_GESTION_EDITAR_COSTO_INDIVIDUAL")) { ?>
                <input type="textbox" id="txt_costo_<?php echo $ins_insumo->getId() ?>" name="txt_costo_<?php echo $ins_insumo->getId() ?>" class="textbox moneda-d2 txt_costo" value="<?php Gral::_echo(Gral::getImporteDesdeDbToPriceFormat($ins_insumo_costo->getCostoNeto($cmb_filtro_iva_incluido), 2)) ?>" size="5" title="Costo Actual" />
                
                <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_PRECIOS_GESTION_FICHA")) { ?>
                    <img class="adm_botones_accion ver-ficha" src='imgs/btn_ficha.png' width='12' border='0' title="Ver Historial de Costos" />            
                <?php } ?>
                
            <?php } else { ?>
                <?php Gral::_echoImp($ins_insumo_costo->getCostoNeto($cmb_filtro_iva_incluido)) ?>
            <?php } ?>
                
            <div class="texto-iva <?php Gral::_echo(($cmb_filtro_iva_incluido) ? 'iva-incluido' : 'mas-iva') ?>">
                <?php Gral::_echo(($cmb_filtro_iva_incluido) ? 'IVA Incluido' : '+ IVA') ?>
            </div>                
        </div>

        <div class="importe-costo-modificado <?php echo $css_estado_desde_actualizacion_costo ?>" title="<?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_costo->getModificado())) ?>">
            <strong><?php Gral::_echo(Gral::getFechaToWeb($ins_insumo_costo->getModificado())) ?></strong><br />
            <?php Gral::_echo($ins_insumo_costo->getModificadoDiferenciaDiasDescripcion()) ?>
            <div class="importe-costo-modificado-por">por <?php Gral::_echo($ins_insumo_costo->getModificadoPorDescripcion()) ?></div>
        </div>

    <?php } else { ?>
        <div class="costo">
            <?php if (UsCredencial::getEsAcreditado("INS_INSUMO_PRECIOS_GESTION_EDITAR_COSTO_INDIVIDUAL")) { ?>
            <input type="textbox" id="txt_costo_<?php echo $ins_insumo->getId() ?>" name="txt_costo_<?php echo $ins_insumo->getId() ?>" class="textbox moneda-d2 txt_costo" value="<?php Gral::_echoImp(0) ?>" size="5" title="Sin Costo Actual" />
            <?php } else { ?>
                -
            <?php } ?>
                
            <div class="texto-iva <?php Gral::_echo(($cmb_filtro_iva_incluido) ? 'iva-incluido' : 'mas-iva') ?>">
                <?php Gral::_echo(($cmb_filtro_iva_incluido) ? 'IVA Incluido' : '+ IVA') ?>
            </div>                
        </div>
    <?php } ?>
    
</td>

<?php
foreach ($ins_tipo_lista_precios as $ins_tipo_lista_precio) {
    $ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio);
    $porcentaje_incremento_propio = ($ins_lista_precio && $ins_lista_precio->getPorcentajeIncremento() != 0) ? true : false;
    $porcentaje_descuento_propio = ($ins_lista_precio && $ins_lista_precio->getPorcentajeDescuento() != 0) ? true : false;
    $importe_propio = ($ins_lista_precio && $ins_lista_precio->getImporteManual() != 0) ? true : false;
    ?>
    <td align='center' id="td_lista_precio_<?php echo $ins_insumo->getId() ?>_<?php echo $ins_tipo_lista_precio->getId() ?>" class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> uno-tipo-lista-precio <?php echo $ins_tipo_lista_precio->getCodigo() ?>' tipo_lista_precio_id="<?php echo $ins_tipo_lista_precio->getId(); ?>">

        <?php if ($ins_insumo_costo) { ?>
            <?php include "ins_insumo_precios_gestion_uno_importe.php" ?>
        <?php } ?>

    </td>

<?php } ?>
