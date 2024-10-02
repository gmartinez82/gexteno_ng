
<?php //include Gral::getPathAbs().'admin/parciales/buscadores/activos/cntb_diario_asiento.php'     ?>

<?php if (count($cntb_diario_asientos) > 0) { ?>

    <table border='0' align='center' class='listado' id='listado_adm_cntb_diario_asiento_gestion'>

        <tr>
            <td width='15' align='center' class='adm_tbl_encabezado'>&nbsp;</td>

            <td width='80' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=numero&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Asiento') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'numero') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='500' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Concepto') ?>
            </td>

            <td width='200' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Debe') ?>
            </td>

            <td width='200' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Haber') ?>
            </td>
            
            <td width='50' align='center' class='adm_tbl_encabezado'>&nbsp;</td>
        </tr>


        <?php
        foreach ($cntb_diario_asientos as $cntb_diario_asiento) {
            $estado = ($cntb_diario_asiento->getEstado()) ? 'habilitado' : 'deshabilitado';
            ?>

            <tr id="tr_cntb_diario_asiento_gestion_uno_<?php Gral::_echo($cntb_diario_asiento->getId()) ?>" class="uno" identificador="<?php Gral::_echo($cntb_diario_asiento->getId()) ?>">
                <?php include "cntb_diario_asiento_gestion_uno.php" ?>
            </tr>


            <tr id='tr_eliminar_<?php Gral::_echo($cntb_diario_asiento->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($cntb_diario_asiento->getId()) ?>" >
                <td colspan='10' align='center' class='adm_tbl_lineas'><div id='div_eliminar_<?php Gral::_echo($cntb_diario_asiento->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
                        <br />
                        <div><input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
                            <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($cntb_diario_asiento->getId()) ?>, 0)'/>
                        </div>
                    </div>		</td>
                <td align='center'></td>
            </tr>


            <?php
            // auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $cntb_diario_asiento->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($cntb_diario_asiento->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='10' align='center' class='adm_tbl_lineas'>


                    <div class="masinfo">
                        <?php
                        if (trim($id) == $cntb_diario_asiento->getId()) {
                            include "cntb_diario_asiento_adm_masinfo.php";
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
        </tr>

        <tr>
            <td colspan='10' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>

<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


