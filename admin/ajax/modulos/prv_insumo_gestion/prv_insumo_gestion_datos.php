
<?php //include Gral::getPathAbs().'admin/parciales/buscadores/activos/prv_insumo.php'  ?>

<?php
if (count($prv_insumos) > 0):
    ?>

    <table id='listado_adm_prv_insumo_gestion' border='0' align='center' class='listado' >

        <tr>
            <td width='130' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=codigo_proveedor&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Cod Proveedor'); ?>
                    <?php if ($criterio->getOrdenDato('campo') == 'codigo_proveedor') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>
            <td width='260' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=descripcion&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Descripcion'); ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'descripcion') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>
            <td width='100' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=prv_proveedor_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('PrvProveedor'); ?>
                    <?php if ($criterio->getOrdenDato('campo') == 'prv_proveedor_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>
            <td width='100' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=ins_marca_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('InsMarca'); ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'ins_marca_id') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>
            <td width='100' align='center' class='adm_tbl_encabezado'>
                <a class='ordenar' href="?ord=1&c=codigo_marca&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>">
                    <?php Lang::_lang('Cod Marca'); ?>

                    <?php if ($criterio->getOrdenDato('campo') == 'codigo_marca') { ?>
                        <img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'>
                    <?php } ?>
                </a>
            </td>
            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Costo Actual') ?>
            </td>
            <td width='200' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Insumo Propio') ?>
            </td>
            <td align='center' class='adm_tbl_encabezado'>&nbsp;</td>
        </tr>

        <?php
        foreach ($prv_insumos as $prv_insumo):

            $estado = ($prv_insumo->getEstado()) ? 'habilitado' : 'deshabilitado';
            ?>

            <tr id="tr_prv_insumo_gestion_uno_<?php Gral::_echo($prv_insumo->getId()) ?>" class="uno" identificador="<?php Gral::_echo($prv_insumo->getId()) ?>">
            <?php include "prv_insumo_gestion_uno.php" ?>
            </tr>

            <tr id='tr_eliminar_<?php Gral::_echo($prv_insumo->getId()) ?>' class='uno tr_eliminar' identificador="<?php Gral::_echo($prv_insumo->getId()) ?>" >
                <td colspan='12' align='center' class='adm_tbl_lineas'><div id='div_eliminar_<?php Gral::_echo($prv_insumo->getId()) ?>'  class='div_eliminar warning'><?php Lang::_lang('Confirma la Eliminacion') ?> <br />
                        <br />
                        <div><input name='btn_elim_aceptar' type='button' id='btn_elim_aceptar' value='<?php Lang::_lang('Aceptar') ?>'  class='btn_mensaje_aceptar' />
                            <input name='btn_elim_cancelar' type='button' id='btn_elim_cancelar' value='<?php Lang::_lang('Cancelar') ?>'  class='btn_mensaje_cancelar' onclick='eliminar_conf(<?php Gral::_echo($prv_insumo->getId()) ?>, 0)'/>
                        </div>
                    </div>		</td>
                <td align='center'></td>
            </tr>

    <?php endforeach; ?>

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
            <td colspan='11' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>

    <?php
else:
    ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php endif; ?>


<script>
    setInit();
    setInitPrvInsumoGestion();
</script>