<?php
include_once '_autoload.php';


$db_nombre_objeto = 'pde_pedido';
$pde_oc_agrupacion = new PdeOcAgrupacion();

// -------------------------------------------------------------------------
// inicializacion masiva desde recepcion masiva
// -------------------------------------------------------------------------    
$pde_oc_agrupacion_id = Gral::getVars(Gral::VARS_GET, 'pde_oc_agrupacion_id', 0);
if ($pde_oc_agrupacion_id != 0) {
    $pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);
    $pde_ocs = $pde_oc_agrupacion->getPdeOcs();

    $cmb_prv_proveedor_id = $pde_oc_agrupacion->getPrvProveedorId();
    $cmb_pde_centro_pedido_id = $pde_oc_agrupacion->getPdeCentroPedidoId();
    $cmb_pde_centro_recepcion_id = $pde_oc_agrupacion->getPdeCentroRecepcionId();
    //$txa_observacion = $pde_oc_agrupacion->getObservacion();

    $prv_proveedor = $pde_oc_agrupacion->getPrvProveedor();

    foreach ($pde_ocs as $pde_oc) {
        $key++;
        $arr_insumo_seleccionados[$key]['pde_oc_id'] = $pde_oc->getId();
        $arr_insumo_seleccionados[$key]['ins_insumo_id'] = $pde_oc->getInsInsumoId();
        $arr_insumo_seleccionados[$key]['cantidad'] = $pde_oc->getCantidad();

        $txt_cantidads[$key] = $pde_oc->getCantidad();
        $arr_pde_ocs[$key] = $pde_oc->getId();
    }
}
// -------------------------------------------------------------------------     

$txt_fecha_recepcion = date('Y-m-d');
?>
<form id='form_div_modal_etiquetas' name='form_div_modal_etiquetas' method='post' >
    <div class="datos agregar-masivo-etiquetas" pde_oc_agrupacion_id="<?php echo ($pde_oc_agrupacion) ? $pde_oc_agrupacion->getId() : 0 ?>" >
        <div class="div_listado_pde_oc_agrupacion_items">
            <?php //include "modal_oc_recibir_masivo_item_datos.php";  ?>
            <?php
            if ($prv_proveedor):
                ?>
                <div class="div_listado_pde_oc_agrupacion_items" id="div_listado_pde_oc_agrupacion_items">
                    <table class="listado_pde_oc_agrupacion_items" id="listado_pde_oc_agrupacion_items">
                        <thead>
                            <tr>
                                <th width='60' align='center' class='adm_tbl_encabezado'>Cant</th>
                                <th width='410' align='center' class='adm_tbl_encabezado'>Insumo</th>
                                <th width='150' align='center' class='adm_tbl_encabezado'>Cod Interno</th>
                                <th width='300' align='center' class='adm_tbl_encabezado'>Etiquetas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //Gral::prr(Gral::getPath('path_http'));
                            //$url = 'ins_insumo_barcode_gestion_interno_recepcion_generacion_pdf.php?pde_recepcion_id=' + pde_recepcion_id + '&cantidad=' + cantidad,
                            $url = Gral::getPath('path_http') . 'admin/ins_insumo_barcode_gestion_interno_recepcion_generacion_pdf.php?';
                            foreach ($txt_cantidads as $key => $txt_cantidad_recibir) {
                                $pde_oc_id = $arr_insumo_seleccionados[$key]['pde_oc_id'];
                                $insumo_id = $arr_insumo_seleccionados[$key]['ins_insumo_id'];

                                $pde_oc = PdeOc::getOxId($pde_oc_id);
                                $ins_insumo = InsInsumo::getOxId($insumo_id);

                                $pde_oc_tipo_estado = $pde_oc->getPdeOcTipoEstado();
                                $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
                                $cantidad = $pde_oc->getCantidad();
                                $cantidad_total_recibida = $pde_oc->getCantidadTotalRecibida();
                                $txt_cantidad_recibir = $cantidad - $cantidad_total_recibida;

                                $pde_recepcions = $pde_oc->getPdeRecepcions();
                                ?>
                                <tr class="tr-item uno" id="tr_item_<?php echo $key ?>" key = "<?php echo $key ?>" pde_oc_id="<?php echo $pde_oc_id ?>">
                                    <?php //include "modal_oc_recibir_masivo_item_uno.php"; ?>
                                    <td align="center" class="adm_tbl_lineas">
                                        <div class="cantidad">
                                            <?php Gral::_echo($cantidad_total_recibida) ?> de <?php Gral::_echo($cantidad) ?>
                                        </div>
                                        <div class="label-error" id="txt_cantidad_recibir_<?php echo $key ?>_error"></div>
                                    </td>
                                    <td align="left" class="adm_tbl_lineas">
                                        <div class="ins-insumo descripcion">
                                            <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                                        </div>

                                        <?php if ($prv_insumo) { ?>
                                            <div class="prv-insumo">
                                                <?php Gral::_echo($prv_insumo->getDescripcion()) ?>
                                            </div>
                                            <div class="codigo-proveedor">
                                                <?php Gral::_echo($prv_insumo->getCodigoProveedor()) ?>
                                            </div>
                                        <?php } ?>

                                        <div class="tipo-estado">
                                            <img src='imgs/pde_oc_estado/<?php Gral::_echo($pde_oc_tipo_estado->getCodigo()) ?>.png' width='12' align='absmiddle' />
                                            <?php Gral::_echo($pde_oc_tipo_estado->getDescripcion()) ?>
                                        </div>    

                                        <div class="label-error" id="dbsug_ins_insumo_id_<?php echo $key ?>_error"></div>
                                    </td>
                                    <td align="center" class="adm_tbl_lineas">
                                        <div class="codigo-interno">
                                            <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getCodigoInterno() : '') ?>
                                        </div>
                                    </td>
                                    <td align="center" class="adm_tbl_lineas">
                                        <div class="etiquetas botonera">                                        
                                            <?php foreach ($pde_recepcions as $pde_recepcion) { ?>
                                                <div class="etiqueta" pde_recepcion_id="<?php echo $pde_recepcion->getId() ?>">                                        
                                                    <input type="text" class="textbox spinner" id="txt_cantidad_<?php echo $pde_recepcion->getId() ?>" name="txt_cantidad[<?php echo $pde_recepcion->getId() ?>]" value="<?php echo $pde_recepcion->getCantidad() ?>" size="2" />                                        
                                                    <input type="button" class="boton generar-archivo-pdf" value="<?php Lang::_lang('Generar Archivo PDF') ?>" />
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th align='center'>&nbsp;</th>
                                <th align='center'>&nbsp;</th>
                                <th align='center'>&nbsp;</th>
                                <th align='center'>&nbsp;</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <?php
            else:
                ?>
                <div class="mensaje-sin-resultado">
                    <div class="mensaje"><?php Lang::_lang('Debe seleccionar un proveedor') ?></div>
                </div> 
            <?php
            endif;
            ?>
        </div>
        
    </div>
</form>
<script>
    setInitPdeOcAgrupacions();
    setInit();

    setInitDbSuggest();
    setInitDbSuggestBoton();
</script>