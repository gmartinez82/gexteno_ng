<?php
include_once "_autoload.php";

$pde_oc_ids = Gral::getVars(Gral::VARS_POST, "chk_pde_oc", null);
$pde_oc_cantidads = Gral::getVars(Gral::VARS_POST, "txt_pde_oc_cantidad", null);

$pde_ocs = array();
foreach ($pde_oc_ids as $key => $pde_oc_id) {
    $pde_oc = PdeOc::getOxId($pde_oc_id);

    $cantidad_a_facturars[$key] = $pde_oc_cantidads[$pde_oc->getId()];
    $importe_unitario_a_facturars[$key] = $pde_oc_importe_unitarios[$pde_oc->getId()];
    $pde_ocs[$key] = $pde_oc;
}
//Gral::prr($cantidad_a_facturars);
//Gral::prr($pde_ocs);exit;

if (count($pde_ocs) > 0) {
    ?>

        <table border='0' align='center' class='listado' id='listado_pde_factura_generar_factura' multiseleccion = "<?php echo $control_presupuesto ?>">
            <tr>

                <td width='70' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('OC') ?>
                </td>

                <td width='' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Insumo') ?>
                </td>

                <td width='120' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Estado Recepcion') ?>
                </td>

                <td width='120' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Estado Facturacion') ?>
                </td>

                <td width='60' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Cant') ?>
                </td>

                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Imp Unitario') ?>
                    </a>
                </td>

                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Imp Total') ?>
                </td>
            </tr>

            <?php
            $inicio = true;

            foreach ($pde_ocs as $key => $pde_oc) {

                //if ($pde_oc->getCantidadDisponibleEnFactura() > 0) {
                    ?>
                    <tr id="tr_pde_oc_uno_<?php Gral::_echo($pde_oc->getId()) ?>" class="uno <?php echo $par ?>" pde_oc_id="<?php Gral::_echo($pde_oc->getId()) ?>">
                        <?php include "bloque_modal_pde_oc_listado_uno.php" ?>
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
