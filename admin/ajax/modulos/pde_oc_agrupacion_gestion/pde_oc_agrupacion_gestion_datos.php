
<?php //include Gral::getPathAbs().'admin/parciales/buscadores/activos/pde_oc_agrupacion.php'        ?>

<?php if (count($pde_oc_agrupacions) > 0) { ?>

    <br />
    <table border='0' align='center' class='listado' id='listado_adm_pde_oc_agrupacion_gestion'>
        <tr>
            <td width='15' align='center' class='adm_tbl_encabezado'></td>

            <td width='110' align='center' class='adm_tbl_encabezado'>
                <a class="ordenar" href="?ord=1&c=id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Cod') ?><?php if ($criterio->getOrdenDato('campo') == 'id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>				
            </td>

            <td width='550' align='center' class='adm_tbl_encabezado'>
                <a class="ordenar" href="?ord=1&c=prv_proveedor_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('PrvProveedor') ?><?php if ($criterio->getOrdenDato('campo') == 'prv_proveedor_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>				
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <a class="ordenar" href="?ord=1&c=pde_estado.pde_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Tipo de Estado') ?><?php if ($criterio->getOrdenDato('campo') == 'pde_estado.pde_tipo_estado_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>				
            </td>

            <td width="100" align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Items') ?></td>
            <td width="100" align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Imp Estimado') ?></td>
            <td width="140" align='center' class='adm_tbl_encabezado'>&nbsp;</td>
        </tr>
        <?php
        foreach ($pde_oc_agrupacions as $pde_oc_agrupacion) {
            ?>
            <tr id="tr_pde_oc_agrupacion_gestion_uno_<?php echo $pde_oc_agrupacion->getId() ?>" class="uno" identificador="<?php echo $pde_oc_agrupacion->getId() ?>">
                <?php include "pde_oc_agrupacion_gestion_uno.php" ?>
            </tr>

            <?php
            // auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $pde_oc_agrupacion->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($pde_oc_agrupacion->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='12' align='center' class='adm_tbl_lineas'>


                    <div class="masinfo">
                        <?php
                        if (trim($id) == $pde_oc_agrupacion->getId()) {
                            include "pde_oc_agrupacion_adm_masinfo.php";
                        }
                        ?>
                    </div>		

                </td>
                <td align='center'></td>
            </tr>


        <?php } ?>
        <tr>
            <td colspan='12' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>

<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


