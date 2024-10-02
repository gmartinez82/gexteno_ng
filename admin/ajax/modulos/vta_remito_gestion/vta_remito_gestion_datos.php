
<?php //include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/vta_remito.php' ?>

<?php if (count($vta_remitos) > 0) { ?>

    <table border='0' align='center' class='listado' id='listado_adm_vta_remito_gestion'>

        <tr>
            <td width='15' align='center' class='adm_tbl_encabezado'>&nbsp;</td>

            <td width='70' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=codigo&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Codigo') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'codigo') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='320' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=cli_cliente_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Cliente') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'cli_cliente_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='150' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=vta_remito_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Estado') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'vta_remito_tipo_estado_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='40' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Tipo') ?>
            </td>
            
            <td width='40' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Items') ?>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('PanPanol') ?>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=creado_por&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Creado Por') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'creado_por') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
        </tr>


        <?php
        foreach ($vta_remitos as $vta_remito) {
            $estado = ($vta_remito->getEstado()) ? 'habilitado' : 'deshabilitado';
            ?>

            <tr id="tr_vta_remito_gestion_uno_<?php Gral::_echo($vta_remito->getId()) ?>" class="uno" identificador="<?php Gral::_echo($vta_remito->getId()) ?>">
                <?php include "vta_remito_gestion_uno.php" ?>
            </tr>


            <tr id='tr_eliminar_<?php Gral::_echo($vta_remito->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($vta_remito->getId()) ?>" >
                <td colspan='7' align='center' class='adm_tbl_lineas'><div id='div_eliminar_<?php Gral::_echo($vta_remito->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
                        <br />
                        <div><input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
                            <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($vta_remito->getId()) ?>, 0)'/>
                        </div>
                    </div>		</td>
                <td align='center'></td>
            </tr>


            <?php
            // auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $vta_remito->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($vta_remito->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='9' align='center' class='adm_tbl_lineas'>


                    <div class="masinfo">
                        <?php
                        if (trim($id) == $vta_remito->getId()) {
                            include "vta_remito_adm_masinfo.php";
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
        </tr>

        <tr>
            <td colspan='9' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>

<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


