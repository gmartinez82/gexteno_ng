
<?php include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/ins_insumo.php' ?>

<?php if (count($ins_insumos) > 0) { ?>

    <table border='0' align='center' class='listado' id='listado_adm_ins_insumo_barcode_gestion'>

        <tr>

            <td width='100' align='center' class='adm_tbl_encabezado'></td>

            <td width='40' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Id') ?><?php if ($criterio->getOrdenDato('campo') == 'id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='250' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=ins_categoria_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('InsCategoria') ?><?php if ($criterio->getOrdenDato('campo') == 'ins_categoria_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='400' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=descripcion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Descripcion') ?><?php if ($criterio->getOrdenDato('campo') == 'descripcion') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='150' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=codigo&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Codigo Interno') ?><?php if ($criterio->getOrdenDato('campo') == 'codigo') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=codigo_barra&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Codigo Barra') ?><?php if ($criterio->getOrdenDato('campo') == 'codigo_barra') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td align='center' class='adm_tbl_encabezado'></td>
        </tr>


        <?php
        foreach ($ins_insumos as $ins_insumo) {
            $estado = ($ins_insumo->getEstado()) ? 'habilitado' : 'deshabilitado';
            ?>

            <tr id="tr_ins_insumo_barcode_gestion_uno_<?php Gral::_echo($ins_insumo->getId()) ?>" class="uno" identificador="<?php Gral::_echo($ins_insumo->getId()) ?>">
                <?php include "ins_insumo_barcode_gestion_uno.php" ?>
            </tr>

        <?php } ?>

        <tr>
            <td colspan='15' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>

<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


