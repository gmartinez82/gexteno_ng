
<?php include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/pde_recepcion.php' ?>

<?php if (count($pde_recepcions) > 0) { ?>
    <form id="form_cuerpo" name="form_cuerpo" method="post" action="">

        <table border='0' align='center' class='listado' id='listado_adm_pde_recepcion_gestion'>
            <tr>
                <td width='15' align='center' class='adm_tbl_encabezado'></td>
                
                <!--
                <td width='15' align='center' class='adm_tbl_encabezado'>
                    <input type="checkbox" name="chk_pde_recepcion_all" id="chk_pde_recepcion_all" class="chk_pde_recepcion_all" />
                </td>
                -->
                
                <td width='70' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Cod RCP') ?><?php if ($criterio->getOrdenDato('campo') == 'id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
                </td>

                <td width='320' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=descripcion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Descripcion') ?><?php if ($criterio->getOrdenDato('campo') == 'descripcion') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
                </td>

                <td width='160' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=prv_proveedor_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('PrvProveedor') ?><?php if ($criterio->getOrdenDato('campo') == 'prv_proveedor_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
                </td>

                <td width='130' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Estado') ?>
                </td>

                <td width='50' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=cantidad&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Cant') ?><?php if ($criterio->getOrdenDato('campo') == 'cantidad') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
                </td>
                
                <td width='90' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=importe_unidad&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Imp RCP Unid') ?><?php if ($criterio->getOrdenDato('campo') == 'importe_unidad') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
                </td>

                <td width='90' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=importe_total&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Imp RCP Total') ?><?php if ($criterio->getOrdenDato('campo') == 'importe_total') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
                </td>

                <td width='90' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Imp OC') ?>
                </td>
                
                <td align='center' class='adm_tbl_encabezado'></td>
            </tr>


            <?php
            foreach ($pde_recepcions as $pde_recepcion) {
                $estado = ($pde_recepcion->getEstado()) ? 'habilitado' : 'deshabilitado';
                $noleido = ($pde_recepcion->esPdeRecepcionLeido()) ? '' : 'noleido';
                $destacado = ($pde_recepcion->esPdeRecepcionDestacado()) ? 'destacado' : '';
                ?>

                <tr id="tr_pde_recepcion_gestion_uno_<?php Gral::_echo($pde_recepcion->getId()) ?>" class="uno" identificador="<?php Gral::_echo($pde_recepcion->getId()) ?>">
                    <?php include "pde_recepcion_gestion_uno.php" ?>
                </tr>


                <?php
                // auto hash de mas info de acuerdo al id recibido por url
                $id = Gral::getVars(2, 'id');
                $mi_display = "style='display:none;'";
                if (trim($id) == $pde_recepcion->getId()) {
                    $mi_display = '';
                    $mi_hash = "location.hash = 'mi_" . $id . "';";
                }
                ?>
                <tr id='tr_mi_<?php Gral::_echo($pde_recepcion->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                    <td colspan='12' align='center' class='adm_tbl_lineas'>


                        <div class="masinfo">
                            <?php
                            if (trim($id) == $pde_recepcion->getId()) {
                                include "pde_recepcion_adm_masinfo.php";
                            }
                            ?>
                        </div>

                    </td>
                    <td align='center'></td>
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
            </tr>

            <tr>
                <td colspan='12' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
            </tr>
        </table>
    </form>
<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


