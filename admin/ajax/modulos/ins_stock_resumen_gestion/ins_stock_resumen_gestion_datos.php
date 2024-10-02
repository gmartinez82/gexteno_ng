
<?php include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/ins_stock_resumen.php' ?>

<?php if (count($ins_stock_resumens) > 0) { ?>
    <form id="form_cuerpo" name="form_cuerpo" method="post" action="">

        <table border='0' align='center' class='listado' id='listado_adm_ins_stock_resumen_gestion'>

            <tr>

                <td width='15' align='center' class='adm_tbl_encabezado'>
                    <input type="checkbox" name="chk_pde_stock_resumen_all" id="chk_pde_stock_resumen_all" class="chk_pde_stock_resumen_all" />
                </td>

                <td width='40' align='center' class='adm_tbl_encabezado'>
                    &nbsp;
                </td>

                <td width='330' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=ins_insumo.descripcion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Producto') ?><?php if ($criterio->getOrdenDato('campo') == 'ins_insumo.descripcion') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
                </td>

                <td width='70' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=pan_panol_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Deposito') ?><?php if ($criterio->getOrdenDato('campo') == 'pan_panol_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
                </td>

                <td width='45' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('CLSF') ?>
                </td>

                <td width='45' align='center' class='adm_tbl_encabezado' title="<?php Lang::_lang('Cantidad Real') ?>">
                    <a class='ordenar' href="?ord=1&c=cantidad_real&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                        <?php Lang::_lang('Cant Real') ?>
                        <?php if ($criterio->getOrdenDato('campo') == 'cantidad_real') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?>
                    </a>
                </td>

                <td width='45' align='center' class='adm_tbl_encabezado' title="<?php Lang::_lang('Cantidad Comprometida') ?>">
                    <a class='ordenar' href="?ord=1&c=cantidad_comprometida&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                        <?php Lang::_lang('Cant Comp') ?>
                        <?php if ($criterio->getOrdenDato('campo') == 'cantidad_comprometida') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?>
                    </a>
                </td>		

                <td width='45' align='center' class='adm_tbl_encabezado' title="<?php Lang::_lang('Cantidad Disponible') ?>">
                    <a class='ordenar' href="?ord=1&c=cantidad&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                        <?php Lang::_lang('Cant Disp') ?>
                        <?php if ($criterio->getOrdenDato('campo') == 'cantidad') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?>
                    </a>
                </td>
                
                <td width='120' align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Tipo Estado') ?></td>

                <td width='220' align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Puntos de Stock') ?></td>
                
                <td width='90' align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Ult Costo') ?></td>

                <td width='60' align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Acc') ?></td>
            </tr>


            <?php
            foreach ($ins_stock_resumens as $ins_stock_resumen) {
                $ins_insumo = $ins_stock_resumen->getInsInsumo();
                $estado = ($ins_insumo->getEstado()) ? 'habilitado' : 'deshabilitado';
                ?>

                <tr id="tr_ins_stock_resumen_gestion_uno_<?php Gral::_echo($ins_stock_resumen->getId()) ?>" class="uno" identificador="<?php Gral::_echo($ins_stock_resumen->getId()) ?>" insumo_id="<?php Gral::_echo($ins_stock_resumen->getInsInsumoId()) ?>" panol_id="<?php Gral::_echo($ins_stock_resumen->getPanPanolId()) ?>">
                    <?php include "ins_stock_resumen_gestion_uno.php" ?>
                </tr>

            <?php } ?>

            <tr>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            </tr>

            <tr>
                <td colspan='16' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
            </tr>
        </table>
    </form>
<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


