<?php include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/prd_orden_trabajo_gestion.php' ?>

<?php if (count($prd_orden_trabajos) > 0) { ?>
    <table border='0' align='center' class='listado' id='listado_adm_prd_orden_trabajo_gestion'>

        <tr>
            <td width='15' align='center' class='adm_tbl_encabezado'>&nbsp;</td>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('') ?>
            </td>

            <td width='350' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Descripcion') ?>
            </td>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Cantidad') ?>
            </td>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Estado') ?>
            </td>

            <td width='150' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Origen') ?>
            </td>
            
            <td width='150' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Ciclos') ?>
            </td>

            <td width='150' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Operaciones') ?>
            </td>

            <td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
        </tr>


        <?php
        foreach ($prd_orden_trabajos as $prd_orden_trabajo) {
            $estado = ($prd_orden_trabajo->getEstado()) ? 'habilitado' : 'deshabilitado';
        ?>

            <tr id="tr_prd_orden_trabajo_gestion_uno_<?php Gral::_echo($prd_orden_trabajo->getId()) ?>" class="uno" identificador="<?php Gral::_echo($prd_orden_trabajo->getId()) ?>">
                <?php include "prd_orden_trabajo_gestion_uno.php" ?>
            </tr>
            
            <tr id='tr_eliminar_<?php Gral::_echo($prd_orden_trabajo->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($prd_orden_trabajo->getId()) ?>">
                <td colspan='7' align='center' class='adm_tbl_lineas'>

                    <div id='div_eliminar_<?php Gral::_echo($prd_orden_trabajo->getId()) ?>' class='div_eliminar warning'>

                        <div class="eliminar-titulo">
                            <?php Lang::_lang('Confirma la Eliminacion') ?>
                        </div>

                        <div class="eliminar-mensaje">
                            <?php Lang::_lang('Esta a punto de eliminar') ?> "<strong><?php Gral::_echo($prd_orden_trabajo->getDescripcion()) ?></strong>".<br />
                            <?php Lang::_lang('Al eliminar el registro se eliminaran tambien todos los datos vinculados') ?>.<br />
                            <?php Lang::_lang('Una vez eliminados no podra recuperarlos') ?>.
                        </div>

                        <div class="eliminar-botonera">
                            <input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>' class='btn_mensaje_aceptar' />
                            <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>' class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($prd_orden_trabajo->getId()) ?>,0)' />
                        </div>
                    </div>

                </td>
                <td align='center'></td>
            </tr>
            
            <?php
            // auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $prd_orden_trabajo->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($prd_orden_trabajo->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='7' align='center' class='adm_tbl_lineas'>


                    <div class="masinfo">
                        <?php
                        if (trim($id) == $prd_orden_trabajo->getId()) {
                            include "prd_orden_trabajo_adm_masinfo.php";
                        }
                        ?>
                    </div>

                </td>
                <td align='center'></td>
            </tr>


        <?php } ?>

        <tr>
            
            <td align='center' class="adm_tbl_pie">&nbsp;</td>
            <td align='center' class="adm_tbl_pie">&nbsp;</td>
            <td align='center' class="adm_tbl_pie">&nbsp;</td>
            <td align='center' class="adm_tbl_pie">&nbsp;</td>
            <td align='center' class="adm_tbl_pie">&nbsp;</td>
            <td align='center' class="adm_tbl_pie">&nbsp;</td>
            <td align='center' class="adm_tbl_pie">&nbsp;</td>
            <td align='center' class="adm_tbl_pie">&nbsp;</td>
            <td align='center' class="adm_tbl_pie">&nbsp;</td>
        </tr>

        <tr>
            <td colspan='7' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>

<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>