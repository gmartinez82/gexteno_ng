
<?php //include Gral::getPathAbs().'admin/parciales/buscadores/activos/fnd_chq_cheque.php'       ?>


<?php if (count($fnd_chq_cheques) > 0) { ?>

    <table border='0' align='center' class='listado' id='listado_adm_fnd_chq_cheque'>

        <tr>

            <td width='15' align='center' class='adm_tbl_encabezado'>&nbsp;</td>

            <td width='70' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Emision') ?>
            </td>

            <td width='300' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Info') ?>
            </td>

            <td width='90' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Vinculado a') ?>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Entregador') ?>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Tipo') ?>
            </td>

            <td width='140' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=fnd_chq_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                <?php Lang::_lang('Tipo de Estado') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'fnd_chq_tipo_estado_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='90' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=importe&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Importe') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'importe') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=fecha_cobro&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Fecha Cobro') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'fecha_cobro') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('En Cartera') ?>
            </td>
            
            <td align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Acciones') ?>
            </td>
        </tr>


        <?php
        foreach ($fnd_chq_cheques as $fnd_chq_cheque) {
            $estado = ($fnd_chq_cheque->getEstado()) ? 'habilitado' : 'deshabilitado';
            ?>

            <tr id="tr_fnd_chq_cheque_gestion_uno_<?php Gral::_echo($fnd_chq_cheque->getId()) ?>" class="uno" identificador="<?php Gral::_echo($fnd_chq_cheque->getId()) ?>">
                <?php include "fnd_chq_cheque_gestion_uno.php" ?>
            </tr>

            <?php
            // auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $fnd_chq_cheque->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($fnd_chq_cheque->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='24' align='center' class='adm_tbl_lineas'>


                    <div class="masinfo">
                        <?php
                        if (trim($id) == $fnd_chq_cheque->getId()) {
                            include "fnd_chq_cheque_adm_masinfo.php";
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
            <td colspan='11' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>

<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


