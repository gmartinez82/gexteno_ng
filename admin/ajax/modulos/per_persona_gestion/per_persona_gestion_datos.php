
<?php //include Gral::getPathAbs().'admin/parciales/buscadores/activos/per_persona.php'  ?>

<?php if (count($per_personas) > 0) { ?>

    <table border='0' align='center' class='listado' id='listado_adm_per_persona_gestion'>

        <tr>
            <td width='15' align='center' class='adm_tbl_encabezado'></td>

            <td width='50' align='center' class='adm_tbl_encabezado'></td>

            <td width='320' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=descripcion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Descripcion') ?><?php if ($criterio->getOrdenDato('campo') == 'descripcion') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='150' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=gral_empresa_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('GralEmpresa') ?><?php if ($criterio->getOrdenDato('campo') == 'gral_empresa_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='60' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=per_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Estado') ?><?php if ($criterio->getOrdenDato('campo') == 'per_tipo_estado_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Dedos Vinculados') ?>
            </td>
            
            <td align='center' class='adm_tbl_encabezado'></td>
        </tr>


        <?php
        foreach ($per_personas as $per_persona) {
            $estado = ($per_persona->getEstado()) ? 'habilitado' : 'deshabilitado';
            ?>

            <tr id="tr_per_persona_gestion_uno_<?php Gral::_echo($per_persona->getId()) ?>" class="uno" identificador="<?php Gral::_echo($per_persona->getId()) ?>">
                <?php include "per_persona_gestion_uno.php" ?>
            </tr>


            <tr id='tr_eliminar_<?php Gral::_echo($per_persona->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($per_persona->getId()) ?>" >
                <td colspan='11' align='center' class='adm_tbl_lineas'><div id='div_eliminar_<?php Gral::_echo($per_persona->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
                        <br />
                        <div><input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
                            <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($per_persona->getId()) ?>, 0)'/>
                        </div>
                    </div>		</td>
                <td align='center'></td>
            </tr>


            <?php
// auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $per_persona->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($per_persona->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='11' align='center' class='adm_tbl_lineas'>


                    <div class="masinfo">
                        <?php
                        if (trim($id) == $per_persona->getId()) {
                            include "per_persona_adm_masinfo.php";
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
        </tr>

        <tr>
            <td colspan='7' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>

<?php }
else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


