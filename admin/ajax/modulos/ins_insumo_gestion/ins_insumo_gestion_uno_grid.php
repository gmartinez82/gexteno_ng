<?php
$user = UsUsuario::autenticado();

$ins_marca = $ins_insumo->getInsMarca();
$ins_categoria = $ins_insumo->getInsCategoria();
$ins_matriz = $ins_insumo->getInsMatriz();
//$ins_insumos_similares_por_matriz = $ins_matriz->getInsInsumos();
// se obtiene el costo actual
$ins_insumo_costo = $ins_insumo->getInsInsumoCostoActual();

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

$pan_panols = PanPanol::getPanPanols(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));

// potestad sobre panol
$arr_panol_id_potestads = PanPanol::getArrayPanPanolIdsXCredencial();
?>

<div class="inner <?php echo $estado ?> <?php echo $publicado ?>">

    <div class="avatar">	
        <a href="<?php Gral::_echo($ins_insumo->getPathImagenPrincipal()) ?>" rel="img-ins-insumo-<?php echo $ins_insumo->getId() ?>">
            <img src='<?php Gral::_echo($ins_insumo->getPathImagenPrincipal()) ?>' border='0' />
        </a>
    </div>

    <div class="descripcion">	
        <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
    </div>

    <div class="importes-venta">

        <?php if ($gral_tipo_iva_venta) { ?>
            <?php if ($ins_insumo_costo) { ?>
                <?php if ($importe_venta) { ?>

                    <div class="importe-venta-bruto">
                        <?php Gral::_echoImp($importe_venta) ?>
                        <div class="importe-iva">
                            + <?php Gral::_echo($gral_tipo_iva_venta->getDescripcion()) ?>
                        </div>
                    </div>

                    <div class="importe-venta-neto">
                        <?php Gral::_echoImp($importe_venta_con_iva) ?>
                    </div>

                    <div></div>

                    <div class="importe-costo-modificado <?php echo $css_estado_desde_actualizacion_costo ?>">
                        <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>
                        <?php Gral::_echo(Gral::getFechaToWeb($ins_insumo_costo->getModificado())) ?>, hace <?php echo $dias_desde_actualizacion_costo ?> días por <?php Gral::_echo($ins_insumo_costo->getModificadoPorDescripcion()) ?>
                    </div>

                <?php } else { ?>
                    <div class="importe-no-vinculado">
                        No está habilitado para la lista "<strong><?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>"</strong>
                    </div>
                <?php } ?>

            <?php } else { ?>
                <div class="importe-no-vinculado">
                    No tiene costo asignado
                </div>
            <?php } ?>

        <?php } else { ?>
            <div class="importe-no-vinculado">
                No tiene TIPO de IVA vinculado
            </div>
        <?php } ?>

    </div>

    <div class="otros-datos">
        <div class="otro-dato">
            <?php Gral::_echo($ins_categoria->getFamiliaDescripcion()) ?>
        </div>
        <div class="otro-dato">
            CI: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
        </div>
    </div>

    <ul class="acciones">

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

</div>
