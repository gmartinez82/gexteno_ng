
<?php include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/pde_nota_credito_gestion.php' ?>

<?php if (count($pde_nota_creditos) > 0) { ?>

    <table border='0' align='center' class='listado' id='listado_adm_pde_nota_credito_gestion'>

        <tr>
            <td width='15' align='center' class='adm_tbl_encabezado'>&nbsp;</td>

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

            <td width='250' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=persona_descripcion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Proveedor') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'persona_descripcion') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='170' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=pde_nota_credito_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php //Lang::_lang('PdeNotaCreditoTipoEstado') ?>
                    <?php Lang::_lang('Estado') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'pde_nota_credito_tipo_estado_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='40' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=pde_tipo_nota_credito_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Tipo') ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'pde_tipo_nota_credito_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Subtotal') ?>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Total') ?>
            </td>            

            <td width='40' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Items') ?>
            </td>

            <td width='130' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Nro Comprobante') ?>
            </td>

            <td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
        </tr>


        <?php
        foreach ($pde_nota_creditos as $pde_nota_credito) {
            $estado = ($pde_nota_credito->getEstado()) ? 'habilitado' : 'deshabilitado';
            ?>

            <tr id="tr_pde_nota_credito_gestion_uno_<?php Gral::_echo($pde_nota_credito->getId()) ?>" class="uno" identificador="<?php Gral::_echo($pde_nota_credito->getId()) ?>">
                <?php include "pde_nota_credito_gestion_uno.php" ?>
            </tr>


            <tr id='tr_eliminar_<?php Gral::_echo($pde_nota_credito->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($pde_nota_credito->getId()) ?>" >
                <td colspan='14' align='center' class='adm_tbl_lineas'><div id='div_eliminar_<?php Gral::_echo($pde_nota_credito->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
                        <br />
                        <div><input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
                            <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($pde_nota_credito->getId()) ?>, 0)'/>
                        </div>
                    </div>		</td>
                <td align='center'></td>
            </tr>


            <?php
// auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $pde_nota_credito->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($pde_nota_credito->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='14' align='center' class='adm_tbl_lineas'>


                    <div class="masinfo">
                        <?php
                        if (trim($id) == $pde_nota_credito->getId()) {
                            include "pde_nota_credito_gestion_adm_masinfo.php";
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
            <td colspan='14' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>

<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


