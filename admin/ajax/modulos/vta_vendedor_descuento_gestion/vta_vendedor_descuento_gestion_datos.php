<?php
include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/vta_vendedor_descuento.php';

$vta_vendedors = VtaVendedor::getVtaVendedors();
$ins_etiquetas = InsEtiqueta::getInsEtiquetas();
$mat_vta_vendedor_descuento = array();

$vta_vendedor_descuentos = VtaVendedorDescuento::getVtaVendedorDescuentos();

foreach ($ins_etiquetas as $ins_etiqueta) {
    foreach ($vta_vendedors as $vta_vendedor) {
        $mat_vta_vendedor_descuento[$ins_etiqueta->getId()][$vta_vendedor->getId()] = 0;
    }
}

foreach ($vta_vendedor_descuentos as $vta_vendedor_descuento) {
    $mat_vta_vendedor_descuento[$vta_vendedor_descuento->getInsEtiquetaId()][$vta_vendedor_descuento->getVtaVendedorId()] = $vta_vendedor_descuento->getDescuentoMaximo();
}
?>

<?php if (count($mat_vta_vendedor_descuento) > 0) { ?>

    <table border='0' align='center' class='listado' id='listado_adm_vta_vendedor_descuento_gestion'>
        <tr>
            <td width='150' align='center' class='adm_tbl_encabezado'>&nbsp;</td>

            <?php foreach ($vta_vendedors as $vta_vendedor) { ?>
                <td width='120' align='center' class='adm_tbl_encabezado' vta_vendedor_id="<?php Gral::_echo($vta_vendedor->getId()) ?>">
                    <?php Lang::_lang($vta_vendedor->getDescripcion()) ?>
                </td>
            <?php } ?>
        </tr>

        <?php foreach ($ins_etiquetas as $ins_etiqueta) { ?>
            <tr id="tr_ins_etiqueta_uno_<?php Gral::_echo($ins_etiqueta->getId()) ?>" class="uno">

                <td width='250' align='left' class='adm_tbl_lineas'><?php Lang::_lang($ins_etiqueta->getDescripcion()) ?></td>

                <?php foreach ($vta_vendedors as $vta_vendedor) { ?>
                    <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                        <input class="textbox spinner descuento_maximo" type="text" id="txt_descuento_maximo[<?php echo $ins_etiqueta->getId() ?>][<?php echo $vta_vendedor->getId() ?>]" name="txt_descuento_maximo[<?php echo $ins_etiqueta->getId() ?>][<?php echo $vta_vendedor->getId() ?>]" size="3" value="<?php Gral::_echo($mat_vta_vendedor_descuento[$ins_etiqueta->getId()][$vta_vendedor->getId()]) ?>" ins_etiqueta_id="<?php Gral::_echo($ins_etiqueta->getId()) ?>" vta_vendedor_id="<?php Gral::_echo($vta_vendedor->getId()) ?>"/> %
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>

    </table>

<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


