<?php
include_once "_autoload.php";

if (count($pde_orden_ventas) > 0) {
    ?>
    <form id='form_generar_factura' name='form_generar_factura' method='POST' action=''>

        <table border='0' align='center' class='listado' id='listado_pde_factura_generar_factura' multiseleccion = "<?php echo $control_presupuesto ?>">
            <tr>
                <td align='center' class='adm_tbl_encabezado'>
                    <?php if ($control_presupuesto) { ?>
                        <input type="checkbox" name="chk_pde_orden_venta_select_all" id="chk_pde_orden_venta_select_all" >
                    <?php } ?>
                </td>

                <td width='70' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Presupuesto') ?>
                </td>

                <td width='70' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Codigo') ?>
                </td>

                <td width='' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Insumo') ?>
                </td>

                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Estado') ?>
                </td>

                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Estado Remision') ?>
                </td>

                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Tipo de Lista') ?>
                </td>

                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Estado Facturacion') ?>
                </td>

                <td width='50' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Cant Fact') ?>
                </td>

                <td width='50' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Desc') ?> %
                </td>

                <td width='90' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Imp Unitario') ?>
                </td>

                <td width='90' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Imp Total') ?>
                </td>

                <td width='70' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('IVA') ?>
                </td>

            </tr>

            <?php
            $inicio = true;
            $pde_presupuesto_id_agrupacion = 0;
            $par = 'par';

            foreach ($pde_orden_ventas as $pde_orden_venta) {

                $pde_presupuesto = $pde_orden_venta->getPdePresupuesto();

                if ($inicio) {
                    $inicio = false;
                    $pde_presupuesto_id_agrupacion = $pde_presupuesto->getId();
                }

                $hay_cambio = ($pde_presupuesto_id_agrupacion != $pde_presupuesto->getId()) ? true : false;
                if ($hay_cambio) {
                    $par = ($par != 'par') ? 'par' : 'impar';
                }
                $pde_presupuesto_id_agrupacion = $pde_presupuesto->getId();

                if ($pde_orden_venta->getCantidadDisponibleEnFactura() > 0) {
                    ?>
                    <tr id="tr_pde_orden_venta_uno_<?php Gral::_echo($pde_orden_venta->getId()) ?>" class="uno <?php echo $par ?>" pde_orden_venta_id="<?php Gral::_echo($pde_orden_venta->getId()) ?>">
                        <?php include "bloque_pde_orden_venta_listado_uno.php" ?>
                    </tr>
                <?php } ?>


            <?php } ?>
        </table>

        <div class="botonera">
            <button class="boton" id='btn_set_ws_fe_afip' name='btn_set_ws_fe_afip' type='button' class='btn_set_ws_fe_afip'><?php Lang::_lang('Siguiente') ?></button>
        </div>

    </form>
<?php } else { ?>
    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron Ordenes de Venta') ?></div>
    </div>
<?php } ?>

<script>
    setInit();
    setInitPdeFacturaGestion();
</script>