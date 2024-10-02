
<?php include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/pde_factura_gestion.php' ?>

<?php if (count($pde_facturas) > 0) { ?>
    <form id="form_cuerpo" name="form_cuerpo" method="post" action="">
        <table border='0' align='center' class='listado' id='listado_adm_pde_factura_gestion'>

            <tr>
                <td width='15' align='center' class='adm_tbl_encabezado'>
                    <!--
                    <input type="checkbox" name="chk_pde_factura_all" id="chk_pde_factura_all" class="chk_pde_factura_all" />
                    -->
                </td>

                <td width='30' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Act') ?>
                </td>
                
                <td width='80' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=codigo&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                        <?php Lang::_lang('Codigo') ?>

                        <?php if ($criterio->getOrdenDato('campo') == 'codigo') { ?>
                            <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                        <?php } ?>
                    </a>
                </td>

                <td width='300' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=prv_proveedor_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                        <?php Lang::_lang('Proveedor') ?>

                        <?php if ($criterio->getOrdenDato('campo') == 'prv_proveedor_id') { ?>
                            <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                        <?php } ?>
                    </a>
                </td>

                <td width='170' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=pde_factura_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                        <?php //Lang::_lang('PdeFacturaTipoEstado') ?>
                        <?php Lang::_lang('Estado') ?>

                        <?php if ($criterio->getOrdenDato('campo') == 'pde_factura_tipo_estado_id') { ?>
                            <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                        <?php } ?>
                    </a>
                </td>

                <td width='40' align='center' class='adm_tbl_encabezado'>
                    <a class='ordenar' href="?ord=1&c=pde_tipo_factura_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                        <?php Lang::_lang('Tipo') ?>

                        <?php if ($criterio->getOrdenDato('campo') == 'pde_tipo_factura_id') { ?>
                            <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                        <?php } ?>
                    </a>
                </td>

                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Subtotal') ?>
                </td>

                <td width='100' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Total') ?>
                </td>

                <td width='40' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Items') ?>
                </td>

                <td width='120' align='center' class='adm_tbl_encabezado'>
                    <?php Lang::_lang('Nro Comprobante') ?>
                </td>

                <td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
            </tr>


            <?php
            foreach ($pde_facturas as $pde_factura) {
                $estado = ($pde_factura->getEstado()) ? 'habilitado' : 'deshabilitado';
                ?>

                <tr id="tr_pde_factura_gestion_uno_<?php Gral::_echo($pde_factura->getId()) ?>" class="uno" identificador="<?php Gral::_echo($pde_factura->getId()) ?>">
                    <?php include "pde_factura_gestion_uno.php" ?>
                </tr>


                <tr id='tr_eliminar_<?php Gral::_echo($pde_factura->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($pde_factura->getId()) ?>" >
                    <td colspan='13' align='center' class='adm_tbl_lineas'><div id='div_eliminar_<?php Gral::_echo($pde_factura->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
                            <br />
                            <div><input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
                                <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($pde_factura->getId()) ?>, 0)'/>
                            </div>
                        </div>		</td>
                    <td align='center'></td>
                </tr>


                <?php
// auto hash de mas info de acuerdo al id recibido por url
                $id = Gral::getVars(2, 'id');
                $mi_display = "style='display:none;'";
                if (trim($id) == $pde_factura->getId()) {
                    $mi_display = '';
                    $mi_hash = "location.hash = 'mi_" . $id . "';";
                }
                ?>
                <tr id='tr_mi_<?php Gral::_echo($pde_factura->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                    <td colspan='13' align='center' class='adm_tbl_lineas'>


                        <div class="masinfo">
                            <?php
                            if (trim($id) == $pde_factura->getId()) {
                                include "pde_factura_gestion_adm_masinfo.php";
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
                <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            </tr>

            <tr>
                <td colspan='13' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
            </tr>
        </table>
    </form>
<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


