
<?php //include Gral::getPathAbs().'admin/parciales/buscadores/activos/pde_oc.php'      ?>

<?php if (count($pde_ocs) > 0) { ?>

    <br />
    <table border='0' align='center' class='listado' id='listado_adm_pde_oc_gestion'>
        <tr>
            <td width='15' align='center' class='adm_tbl_encabezado'></td>

            <td width='70' align='center' class='adm_tbl_encabezado'>
                <a class="ordenar" href="?ord=1&c=id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Cod') ?><?php if ($criterio->getOrdenDato('campo') == 'id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>				
            </td>

            <td width='320' align='center' class='adm_tbl_encabezado'>
                <a class="ordenar" href="?ord=1&c=ins_insumo_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('InsInsumo') ?><?php if ($criterio->getOrdenDato('campo') == 'ins_insumo_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>				
            </td>

            <td width='125' align='center' class='adm_tbl_encabezado'>
                <a class="ordenar" href="?ord=1&c=pde_tipo_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Estado') ?><?php if ($criterio->getOrdenDato('campo') == 'pde_estado.pde_tipo_estado_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>				
            </td>
            
            <td width='125' align='center' class='adm_tbl_encabezado'>
                <a class="ordenar" href="?ord=1&c=pde_tipo_estado_recepcion_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Estado RCP') ?><?php if ($criterio->getOrdenDato('campo') == 'pde_estado.pde_tipo_estado_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>				
            </td>

            <td width='125' align='center' class='adm_tbl_encabezado'>
                <a class="ordenar" href="?ord=1&c=pde_tipo_facturacion_estado_id&t=<?php Gral::_echo(($criterio->getOrdenDato('tipo') == 'asc') ? 'desc' : 'asc'); ?>"><?php Lang::_lang('Estado FAC') ?><?php if ($criterio->getOrdenDato('campo') == 'pde_estado.pde_tipo_estado_id') { ?><img src="imgs/ord_<?php Gral::_echo($criterio->getOrdenDato('tipo')) ?>.png" border='0'><?php } ?></a>				
            </td>
            
            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Importe') ?>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Cod Recepcion') ?>
            </td>

            <td width="160" align='center' class='adm_tbl_encabezado'>&nbsp;</td>
        </tr>
        <?php
        foreach ($pde_ocs as $pde_oc) {
            $pde_oc_agrupacion = $pde_oc->getPdeOcAgrupacion();

            $noleido = ($pde_oc->esPdeOcLeido()) ? '' : 'noleido';
            $destacado = ($pde_oc->esPdeOcDestacado()) ? 'destacado' : '';
            ?>
            <tr id="tr_pde_oc_gestion_uno_<?php echo $pde_oc->getId() ?>" class="uno" identificador="<?php echo $pde_oc->getId() ?>">
                <?php include "pde_oc_gestion_uno.php" ?>
            </tr>

            <?php
            // auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $pde_oc->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($pde_oc->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='12' align='center' class='adm_tbl_lineas'>


                    <div class="masinfo">
                        <?php
                        if (trim($id) == $pde_oc->getId()) {
                            include "pde_oc_adm_masinfo.php";
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


