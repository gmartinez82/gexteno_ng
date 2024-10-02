
<?php //include Gral::getPathAbs().'admin/parciales/buscadores/activos/os_orden_servicio.php'      ?>

<?php
if (count($os_orden_servicios) > 0):
    ?>

    <table border='0' align='center' class='listado' id='listado_adm_os_orden_servicio_gestion'>

        <tr>
            <td width='15' align='center' class='adm_tbl_encabezado'></td>
            <td width='120' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=codigo&t="><?php Lang::_lang('Codigo') ?><?php if ($criterio->getOrdenDato('campo') == 'codigo') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=os_tipo_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Tipo OS') ?><?php if ($criterio->getOrdenDato('campo') == 'codigo') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='430' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=per_persona_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Persona') ?><?php if ($criterio->getOrdenDato('campo') == 'per_persona_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=fecha_hecho&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Fecha Hecho') ?><?php if ($criterio->getOrdenDato('campo') == 'fecha_hecho') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=fecha_limite_resolucion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Limite Resolucion') ?><?php if ($criterio->getOrdenDato('campo') == 'fecha_limite_resolucion') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='140' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=os_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Tipo Estado') ?><?php if ($criterio->getOrdenDato('campo') == 'os_tipo_estado_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>
            </td>

            <td width='160' align='center' class='adm_tbl_encabezado'></td>
        </tr>

        <?php
        foreach ($os_orden_servicios as $os_orden_servicio):

            $estado = ($os_orden_servicio->getEstado()) ? "habilitado" : "deshabilitado";
            ?>

            <tr id="tr_os_orden_servicio_gestion_uno_<?php Gral::_echo($os_orden_servicio->getId()) ?>" class="uno" identificador="<?php Gral::_echo($os_orden_servicio->getId()) ?>">
                <?php include "os_orden_servicio_gestion_uno.php" ?>
            </tr>

            <tr id='tr_eliminar_<?php Gral::_echo($os_orden_servicio->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($os_orden_servicio->getId()) ?>" >
                <td colspan='7' align='center' class='adm_tbl_lineas'><div id='div_eliminar_<?php Gral::_echo($os_orden_servicio->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
                        <br />
                        <div>
                            <input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
                            <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($os_orden_servicio->getId()) ?>, 0)'/>
                        </div>
                    </div>		
                </td>
                <td align='center'></td>
            </tr>

            <?php
            // auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $os_orden_servicio->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($os_orden_servicio->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='7' align='center' class='adm_tbl_lineas'>

                    <div class="masinfo">
                        <?php
                        if (trim($id) == $os_orden_servicio->getId()) {
                            include "os_orden_servicio_adm_masinfo.php";
                        }
                        ?>
                    </div>
                </td>
                <td align='center'></td>
            </tr>
            <?php
        endforeach;
        ?>

        <tr>
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
            <td colspan='8' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>

    </table>

    <?php
else:
    ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php
endif;
?>

<script>
    setInit();
    setInitOsOrdenServicio();
</script>