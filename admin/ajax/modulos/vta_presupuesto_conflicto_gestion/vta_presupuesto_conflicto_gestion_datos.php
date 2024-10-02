
<?php //include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/vta_presupuesto_conflicto.php' ?>

<?php if (count($vta_presupuesto_conflictos) > 0) { ?>

    <table border='0' align='center' class='listado' id='listado_adm_vta_presupuesto_conflicto_gestion'>

        <tr>
            <td width='15' align='center' class='adm_tbl_encabezado'>&nbsp;</td>

            <td width='90' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Presupuesto') ?>
            </td>

            <td width='90' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=codigo&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Codigo') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'codigo') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='360' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=vta_presupuesto_ins_insumo_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Insumo') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'vta_presupuesto_ins_insumo_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='90' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=importe_inicial&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Imp Original') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'importe_inicial') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='90' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=importe_actualizado&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Imp Actual') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'importe_actualizado') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=importe_resuelto&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Imp Resuelto') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'importe_resuelto') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='200' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=observacion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Observacion') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'observacion') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>
            
            <td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
        </tr>


        <?php
        foreach ($vta_presupuesto_conflictos as $vta_presupuesto_conflicto) {
            $estado = ($vta_presupuesto_conflicto->getEstado()) ? 'habilitado' : 'deshabilitado';
            ?>

            <tr id="tr_vta_presupuesto_conflicto_gestion_uno_<?php Gral::_echo($vta_presupuesto_conflicto->getId()) ?>" class="uno" identificador="<?php Gral::_echo($vta_presupuesto_conflicto->getId()) ?>">
                <?php include "vta_presupuesto_conflicto_gestion_uno.php" ?>
            </tr>


            <tr id='tr_eliminar_<?php Gral::_echo($vta_presupuesto_conflicto->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($vta_presupuesto_conflicto->getId()) ?>" >
                <td colspan='9' align='center' class='adm_tbl_lineas'><div id='div_eliminar_<?php Gral::_echo($vta_presupuesto_conflicto->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
                        <br />
                        <div><input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
                            <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($vta_presupuesto_conflicto->getId()) ?>, 0)'/>
                        </div>
                    </div>		</td>
                <td align='center'></td>
            </tr>


            <?php
// auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $vta_presupuesto_conflicto->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($vta_presupuesto_conflicto->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='9' align='center' class='adm_tbl_lineas'>


                    <div class="masinfo">
                        <?php
                        if (trim($id) == $vta_presupuesto_conflicto->getId()) {
                            include "vta_presupuesto_conflicto_gestion_adm_masinfo.php";
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


