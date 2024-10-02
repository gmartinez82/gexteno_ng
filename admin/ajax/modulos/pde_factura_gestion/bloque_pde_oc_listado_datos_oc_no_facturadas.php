<h3>OC No Facturadas del proveedor</h3>

<?php if (count($pde_ocs_para_facturar) > PdeFactura::CANTIDAD_OC_FACTURA) { ?>
    <div class="comentario-limite-cantidad">
        En pantalla se muestran solo <?php echo PdeFactura::CANTIDAD_OC_FACTURA ?> OCs de <?php echo count($pde_ocs_para_facturar) ?> que existen facturables para el proveedor (de acuerdo a los filtros aplicados), en el caso de que desee agregar mas OCs a la factura debera realizarlo en una segunda instancia de carga luego de haber registrado la factura.
    </div>
<?php } ?>

<form id='form_generar_factura' name='form_generar_factura' method='POST' action=''>

    <table border='0' align='center' class='listado' id='listado_pde_factura_generar_factura' multiseleccion = "<?php echo $control_presupuesto ?>">
        <tr>
            <td align='center' class='adm_tbl_encabezado'>
                <?php if ($control_presupuesto) { ?>
                    <input type="checkbox" name="chk_pde_oc_select_all" id="chk_pde_oc_select_all" >
                <?php } ?>
            </td>

            <td width='70' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Codigo') ?>
            </td>

            <td width='' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Insumo') ?>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Estado RCP') ?>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Estado FACT') ?>
            </td>

            <td width='85' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp OC') ?>
            </td>

            <td width='60' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Cant') ?>
            </td>

            <td width='85' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp Unit') ?>
            </td>

            <td width='60' align='center' class='adm_tbl_encabezado'>
                % <?php Lang::_lang('Desc') ?>
            </td>

            <td width='85' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp Uni') ?>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp Tot') ?>
            </td>
        </tr>

        <?php
        $cont_pde_oc = 0;

        foreach ($pde_ocs_para_facturar as $pde_oc) {
            if (array_key_exists($pde_oc->getId(), $arr_pde_ocs_propuesto)) {
                continue;
            }

            $cont++;
            $cont_pde_oc++;

            if ($cont_pde_oc > PdeFactura::CANTIDAD_OC_FACTURA) {
                continue;
            }
            $arr_pde_ocs_propuesto[$pde_oc->getId()] = $pde_oc;
            ?>
            <tr id="tr_pde_oc_uno_<?php Gral::_echo($pde_oc->getId()) ?>" class="uno <?php echo $par ?>" pde_oc_id="<?php Gral::_echo($pde_oc->getId()) ?>" cont="<?php Gral::_echo($cont) ?>" >
                <?php include "bloque_pde_oc_listado_uno.php" ?>
            </tr>

        <?php } ?>

    </table>

    <div class="botonera">
        <?php if ($pde_factura) { ?>
            <button class="boton" id='btn_pde_factura_agregar_oc' name='btn_pde_factura_agregar_oc' type='button' class='btn_pde_factura_agregar_oc'><?php Lang::_lang('Agregar OCs a Factura') ?> <?php Gral::_echo($pde_factura->getNumeroComprobanteCompleto()) ?></button>
        <?php } else { ?>
            <button class="boton" id='btn_set_ws_fe_afip' name='btn_set_ws_fe_afip' type='button' class='btn_set_ws_fe_afip'><?php Lang::_lang('Siguiente') ?></button>
        <?php } ?>
    </div>

</form>  