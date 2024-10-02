<?php
include_once "_autoload.php";

$vta_orden_venta_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_orden_venta", null);
$vta_orden_venta_cantidads = Gral::getVars(Gral::VARS_POST, "txt_vta_orden_venta_cantidad", null);

$vta_orden_ventas = array();
foreach ($vta_orden_venta_ids as $key => $vta_orden_venta_id) {
    $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);

    $cantidad_a_facturars[$key] = $vta_orden_venta_cantidads[$vta_orden_venta->getId()];
    $vta_orden_ventas[$key] = $vta_orden_venta;
}
//Gral::prr($cantidad_a_facturars);
//Gral::prr($vta_orden_ventas);exit;

if (count($vta_orden_ventas) > 0) {
    ?>

        <table border='0' align='center' class='listado' id='listado_vta_factura_generar_factura' multiseleccion = "<?php echo $control_presupuesto ?>">
            <tr>

                <td width='110' align='center' class='adm_tbl_encabezado'>
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
                    <?php Lang::_lang('Estado Facturacion') ?>
                </td>

                <td width='50' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Cant a Fact') ?>
                </td>

                <td width='50' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Desc') ?> %
                </td>

                <td width='90' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Imp Unitario') ?>
                    </a>
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
            $vta_presupuesto_id_agrupacion = 0;
            $par = 'par';

            foreach ($vta_orden_ventas as $key => $vta_orden_venta) {

                $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();

                if ($inicio) {
                    $inicio = false;
                    $vta_presupuesto_id_agrupacion = $vta_presupuesto->getId();
                }

                $hay_cambio = ($vta_presupuesto_id_agrupacion != $vta_presupuesto->getId()) ? true : false;
                if ($hay_cambio) {
                    $par = ($par != 'par') ? 'par' : 'impar';
                }
                $vta_presupuesto_id_agrupacion = $vta_presupuesto->getId();

                //if ($vta_orden_venta->getCantidadDisponibleEnFactura() > 0) {
                    ?>
                    <tr id="tr_vta_orden_venta_uno_<?php Gral::_echo($vta_orden_venta->getId()) ?>" class="uno <?php echo $par ?>" vta_orden_venta_id="<?php Gral::_echo($vta_orden_venta->getId()) ?>">
                        <?php include "bloque_modal_vta_orden_venta_listado_uno.php" ?>
                    </tr>
                <?php //} ?>


            <?php } ?>
        </table>

<br>
<br>
<?php } else { ?>
    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron Ordenes de Venta') ?></div>
    </div>
<?php } ?>
