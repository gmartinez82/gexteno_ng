<?php
$user = UsUsuario::autenticado();

$ins_marca = $ins_insumo->getInsMarca();
$ins_categoria = $ins_insumo->getInsCategoria();
$ins_matriz = $ins_insumo->getInsMatriz();
//$ins_insumos_similares_por_matriz = $ins_matriz->getInsInsumos();
// se obtiene el costo actual
$ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();
//$ins_insumo_bultos = $ins_insumo->getInsInsumoBultos(null, null, true);

$ins_tipo_lista_precio_id = $criterio->getValorDeCampoXPos('ins_tipo_lista_precio_id');
if ($ins_tipo_lista_precio_id != '' && !is_null($ins_tipo_lista_precio_id)) {
    $ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($ins_tipo_lista_precio_id);
} else {
    if ($vta_presupuesto_activo) {
        $ins_tipo_lista_precio = InsTipoListaPrecio::getOxId($vta_presupuesto_activo->getInsTipoListaPrecioId());
    }else{
        //$ins_tipo_lista_precio = InsTipoListaPrecio::getOxCodigo(InsInsumo::TIPO_LISTA_DEFAULT);
        $ins_tipo_lista_precio = InsTipoListaPrecio::getTipoListaPrecioPorDefaultParaUsuario($us_usuario_autenticado, $vta_vendedor_autenticado);
    }
}

// se instancia la lista de precios del producto correspondiente al tipo de lista
$ins_lista_precio = $ins_insumo->getInsInsumoListaPrecioXTipoLista($ins_tipo_lista_precio);

$importe_venta = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio);
$importe_venta_con_iva = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio, $incluye_iva = true);

$gral_tipo_iva_venta = GralTipoIva::getOxId($ins_insumo->getGralTipoIvaVenta());
$ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
//Gral::prr($gral_tipo_iva_venta);

$ins_insumo_imagens_secundarias = $ins_insumo->getInsInsumoImagensSecundarias();
$ins_insumo_imagen_principal = $ins_insumo->getInsInsumoImagenPrincipal();

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

//$pan_panols = PanPanol::getPanPanols(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));
$pan_panols = PanPanol::getPanPanolsReales();

// potestad sobre panol
$arr_panol_id_potestads = PanPanol::getArrayPanPanolIdsXCredencial();

$txt_cantidad_simulador = 1;
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $ins_insumo->getId() ?>" modulo="ins_insumo">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="id">
        ID <?php Gral::_echo($ins_insumo->getId()) ?>
    </div>
    <div class="codigo-interno">
        <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
    </div>
    
    <?php if($ins_insumo->getEsConsumible()){ ?>
        <div class="icon-es-consumible" title="Es Materia Prima">
            MP
        </div>
    <?php } ?>

    <?php if($ins_insumo->getEsFabricable()){ ?>
        <div class="icon-es-fabricable" title="Es Fabricable">
            FB
        </div>
    <?php } ?>

    <div class="creado" title="<?php Gral::_echo(Gral::getFechaHoraToWEB($ins_insumo->getCreado())) ?>">
        <?php Gral::_echo(Gral::getFechaToWEB($ins_insumo->getCreado())) ?>
    </div>
    <div class="creado-por">
        <?php Gral::_echo($ins_insumo->getCreadoPorDescripcion()) ?>
    </div>
    
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <?php if ($ins_insumo_imagen_principal) { ?>
        <div class="avatar">
            <a href="<?php echo $ins_insumo_imagen_principal->getPathImagen() ?>" rel="ins_insumo_<?php echo $ins_insumo->getId() ?>" title="<?php Gral::_echo($ins_insumo_imagen_principal->getObservacion()) ?>">
                <img class="foto" src="<?php echo $ins_insumo_imagen_principal->getPathImagen(true) ?>" alt="imagen-prd" />
            </a>
        </div>

        <div class="fotos-min">
            <?php foreach ($ins_insumo_imagens_secundarias as $ins_insumo_imagen) { ?>
                <div class="foto avatar">
                    <a href="<?php echo $ins_insumo_imagen->getPathImagen() ?>" rel="ins_insumo_<?php echo $ins_insumo->getId() ?>" title="<?php Gral::_echo($ins_insumo_imagen->getObservacion()) ?>">
                        <img src="<?php echo $ins_insumo_imagen->getPathImagen(true) ?>" alt="img-prd" />
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <img src="../imgs/no-imagen.jpg" width="60" alt="img-prd" />
    <?php } ?>


</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <div class="info-insumo">
        <?php if ($ins_marca->getId() != 'null') { ?>
            <div class="marca">
                <label class="label">Marca:</label> 
                <label class="descripcion-marca"><?php Gral::_echo($ins_marca->getDescripcion()) ?></label>            
            </div>
        <?php } ?>

        <div class="descripcion">
            <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
        </div>

        <div class="categoria">
            <label class="label">Cat:</label> 
            <?php Gral::_echo($ins_categoria->getFamiliaDescripcion()) ?>
        </div>

        <div class="etiquetas">
            <label class="label">Etiq:</label>
            <?php foreach ($ins_insumo->getInsEtiquetasXInsInsumoInsEtiqueta() as $ins_etiqueta) { ?>
                <label class="etiqueta"><?php Gral::_echo($ins_etiqueta->getDescripcion()) ?></label> /
            <?php } ?>
        </div>

        <div class="atributos">
            <label class="label">Atrib:</label>
            <?php foreach ($ins_insumo->getInsInsumoInsAtributos() as $ins_insumo_ins_atributo) { ?>
                <label class="atributo"><?php Gral::_echo($ins_insumo_ins_atributo->getInsAtributo()->getDescripcion()) ?></label>:  
                <label class="atributo-valor"><?php Gral::_echo($ins_insumo_ins_atributo->getValor()) ?> <?php Gral::_echo($ins_insumo_ins_atributo->getInsUnidadMedidaAtributo()->getDescripcionCorta()) ?></label>
                </label> /
            <?php } ?>
        </div>

        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_VER_VINCULO_PROVEEDOR')) { ?>
            <div class="proveedores" style="display: nonex;">
                <label class="label">Prv:</label>
                <label class="proveedor">
                    <?php foreach ($ins_insumo->getPrvProveedorsXPrvInsumo() as $prv_proveedor) { ?>
                        <?php Gral::_echo($prv_proveedor->getDescripcion()) ?> /
                    <?php } ?>
                </label>
            </div>
        <?php } ?>

        <div class="similares">

        </div>

        <div class="nota-interna" title="<?php Gral::_echoTxt($ins_insumo->getNotasInternas()) ?>">
            <label class="label">N.I. </label><?php Gral::_echo(substr($ins_insumo->getNotasInternas(), 0, 100)) ?> ...
        </div>

        <?php 
        // ---------------------------------------------------------------------
        // se muestran bultos configurados al insumo
        // ---------------------------------------------------------------------
        $ins_insumo->getHtmlInsumoBultoConfiguracion();
        ?>
        
        <?php if(trim($ins_insumo->getCodigoBarra()) != ''){ ?>
            <div class="codigo-barra">
                <img src="imgs/icn_barcode.png" width="16" alt="icn-barcode" /><?php Gral::_echo($ins_insumo->getCodigoBarra()) ?>
            </div>
        <?php } ?>

    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <?php include "bloque_stock_uno.php" ?>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <?php include "bloque_importe_uno.php" ?>
    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_ACCION_MODIFICAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='ins_insumo_alta.php?id=<?php Gral::_echo($ins_insumo->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'>
                    <img src='imgs/btn_modi.gif' width='20' border='0' />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion ver-ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_ACCION_ESTADO')) { ?>
            <li class='adm_botones_accion estado' title='<?php Lang::_lang(($ins_insumo->getEstado()) ? 'Habilitado' : 'Deshabilitado') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($ins_insumo->getEstado()) ?>.gif' width='20' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_ACCION_ELIMINAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='Javascript:eliminar(<?php Gral::_echo($ins_insumo->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>

        <?php if($ins_insumo->getEsVendible()){ ?>
            <?php if ($user->getVtaVendedor()) { ?>
                <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_ACCION_AGREGAR_CARRITO')) { ?>
                    <?php if ($ins_insumo->getEstado() && $importe_venta > 0) { ?>
                        <?php if (in_array($ins_insumo->getId(), $arr_insumos_id_en_presupuesto)) { ?>
                            <li class='adm_botones_accion agregar-carrito' title="Volver a Agregar al Carrito de Ventas">
                                <img src='imgs/icn_venta_web_1_on.png' width='20' border='0' />
                            </li>
                        <?php } else { ?>
                            <li class='adm_botones_accion agregar-carrito' title="Agregar al Carrito de Ventas">
                                <img src='imgs/icn_venta_web_1.png' width='20' border='0' />
                            </li>
                        <?php } ?>
                    <?php } else { ?>
                        <li class='adm_botones_accion' title="El insumo no cumple las condiciones necesarias para agregar al carrito">
                            <img src='imgs/icn_venta_web_0.png' width='20' border='0' />
                        </li>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_ACCION_ENVIAR_FICHA_TECNICA')) { ?>
            <li class='adm_botones_accion ins_insumo_gestion_enviar_ficha_tecnica'>
                <img src='imgs/btn_email.png' width='20' border='0' title="Enviar Email" />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_ACCION_GIMAGEN')) { ?>
            <li class='adm_botones_accion'>
                <a href='ins_insumo_imagen_gestor.php?id=<?php Gral::_echo($ins_insumo->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'>
                    <img src='imgs/btn_album_imagenes.png' width='22' border='0' />
                </a>
            </li>
        <?php } ?>            

    </ul>
</td>
