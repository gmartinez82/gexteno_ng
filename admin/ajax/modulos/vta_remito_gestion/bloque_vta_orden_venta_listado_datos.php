<?php
include_once "_autoload.php";

if (count($vta_orden_ventas) > 0) {
    ?>
    <form id='form_generar_remito' name='form_generar_remito' method='POST' action=''>

        <table border='0' align='center' class='listado' id='listado_vta_remito_generar_remito' multiseleccion = "<?php echo $control_presupuesto ?>">
            <tr>
                <td align='center' class='adm_tbl_encabezado'>
                    <?php if ($control_presupuesto) { ?>
                        <input type="checkbox" name="chk_vta_orden_venta_select_all" id="chk_vta_orden_venta_select_all" >
                    <?php } ?>
                </td>

                <td width='70' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Presupuesto') ?>
                </td>

                <td width='450' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Insumo') ?>
                </td>

                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Estado') ?>
                </td>

                <td width='150' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Estado Remision') ?>
                </td>

                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Tipo de Lista') ?>
                    </a>
                </td>

                <td width='150' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Estado Facturacion') ?>
                </td>
            </tr>

            <?php
            $inicio = true;
            $vta_presupuesto_id_agrupacion = 0;
            $par = 'par';

            foreach ($vta_orden_ventas as $vta_orden_venta) {

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

                if ($vta_orden_venta->getCantidadDisponibleEnRemito() > 0) {
                    ?>
                    <tr id="tr_vta_orden_venta_uno_<?php Gral::_echo($vta_orden_venta->getId()) ?>" class="uno <?php echo $par ?>" vta_orden_venta_id="<?php Gral::_echo($vta_orden_venta->getId()) ?>">
                        <?php include "bloque_vta_orden_venta_listado_uno.php" ?>
                    </tr>
                <?php } ?>


            <?php } ?>
        </table>

        <div class="botonera">
            <button class="boton" id='btn_generar_remito' name='btn_generar_remito' type='button' class='btn_generar_remito'><?php Lang::_lang('Generar Remito') ?></button>
        </div>

    </form>
<?php } else { ?>
    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron Ordenes de Venta') ?></div>
    </div>
<?php } ?>

<script>
    setInit();
    setInitVtaRemitoGestion();
</script>