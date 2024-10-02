<?php
include_once "_autoload.php";
if (count($vta_orden_ventas) > 0) {
    $vta_presupuestos_en_vta_orden_ventas = VtaPresupuesto::getVtaPresupuestosEnVtaOrdenVentas($vta_orden_ventas);//Gral::prr($vta_orden_ventas);

    ?>
    <form id='form_generar_ajuste_debe' name='form_generar_ajuste_debe' method='POST' action=''>

        <div class="bloque-vta-presupuestos">
            <?php foreach ($vta_presupuestos_en_vta_orden_ventas as $vta_presupuestos_en_vta_orden_venta) { ?>
                <div class="bloque-vta-presupuesto">
                    <input type="checkbox" id="chk_vta_presupuesto_id_<?php Gral::_echo($vta_presupuestos_en_vta_orden_venta->getId()) ?>" name="chk_vta_presupuesto_id" value="<?php Gral::_echo($vta_presupuestos_en_vta_orden_venta->getId()) ?>" class="chk_vta_presupuesto_id" <?php echo ($vta_presupuesto_id == $vta_presupuestos_en_vta_orden_venta->getId()) ? 'checked="checked"' : '' ?> >
                    <label class="codigo" for="chk_vta_presupuesto_id_<?php Gral::_echo($vta_presupuestos_en_vta_orden_venta->getId()) ?>">
                        <?php Gral::_echo($vta_presupuestos_en_vta_orden_venta->getCodigo()) ?>  -
                        <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuestos_en_vta_orden_venta->getFecha())) ?> - 
                        <?php Gral::_echo($vta_presupuestos_en_vta_orden_venta->getCantidadItems()) ?> items -
                        <?php Gral::_echoImp($vta_presupuestos_en_vta_orden_venta->getImporteTotalPresupuestoConIva()) ?> - 
                        <?php Gral::_echo($vta_presupuestos_en_vta_orden_venta->getCreadoPorDescripcion()) ?> - 
                        <?php Gral::_echo($vta_presupuestos_en_vta_orden_venta->getInsTipoListaPrecio()->getDescripcion()) ?>
                    </label>
                </div>        
            <?php } ?>
        </div>

        <?php if ($vta_presupuesto) { ?>
            <table border='0' align='center' class='listado' id='listado_vta_ajuste_debe_generar_ajuste_debe' multiseleccion = "<?php echo $control_presupuesto ?>">
                <tr>
                    <td align='center' class='adm_tbl_encabezado'>
                        <?php if ($control_presupuesto) { ?>
                            <input type="checkbox" name="chk_vta_orden_venta_select_all" id="chk_vta_orden_venta_select_all" >
                        <?php } ?>
                    </td>

                    <td width='110' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Codigo') ?>
                    </td>

                    <td width='' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Insumo') ?>
                    </td>

                    <td width='70' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Estado') ?>
                    </td>

                    <td width='100' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Estado RMS') ?>
                    </td>

                    <td width='100' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Estado FACT') ?>
                    </td>

                    <td width='50' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Cant Fact') ?>
                    </td>

                    <td width='50' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Desc') ?> %
                    </td>

                    <td width='70' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Imp Unitario') ?>
                        </a>
                    </td>

                    <td width='130' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Imp Total') ?>
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

                    if ($vta_orden_venta->getCantidadDisponibleEnAjusteDebe() > 0) {
                        ?>
                        <tr id="tr_vta_orden_venta_uno_<?php Gral::_echo($vta_orden_venta->getId()) ?>" class="uno <?php echo $par ?>" vta_orden_venta_id="<?php Gral::_echo($vta_orden_venta->getId()) ?>">
                            <?php include "bloque_vta_orden_venta_listado_uno.php" ?>
                        </tr>
                    <?php } ?>


                <?php } ?>
            </table>

            <div class="botonera">
                <button class="boton" id='btn_set_ws_fe_afip' name='btn_set_ws_fe_afip' type='button' class='btn_set_ws_fe_afip'><?php Lang::_lang('Siguiente') ?></button>
            </div>
        <?php } else { ?>
            <div class="mensaje-sin-resultado">
                <div class="mensaje"><?php Lang::_lang('Debe seleccionar un presupuesto') ?></div>
            </div>
        <?php } ?>
    </form>
<?php } else { ?>
    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron Ordenes de Venta') ?></div>
    </div>
<?php } ?>

<script>
    setInit();
    setInitVtaAjusteDebeGestion();
</script>