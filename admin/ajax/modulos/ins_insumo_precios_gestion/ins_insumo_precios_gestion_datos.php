
<?php //include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/ins_insumo.php' ?>

<?php if (count($ins_insumos) > 0) { ?>
<form id="form_cuerpo" name="form_cuerpo" method="post" action="">

    <table border='0' align='center' class='listado' id='listado_adm_ins_insumo_precios_gestion'>

        <tr>

            <th width='40' align='center' class='adm_tbl_encabezado'>
                <input type="checkbox" id="chk_insumo_id_all" name="chk_insumo_id_all" value="1">        
            </th>

            <th width='400' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Insumo') ?>
            </th>

            <th width='180' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Costo') ?>
            </th>
            
            <?php foreach($ins_tipo_lista_precios as $ins_tipo_lista_precio){ ?>
            <th width='300' align='center' class='adm_tbl_encabezado'>
                <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?> - INC <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeIncremento()) ?> % - DESC <?php Gral::_echo($ins_tipo_lista_precio->getPorcentajeDescuentoMaximo()) ?> %
            </th>
            <?php } ?>
            
        </tr>


        <?php
        foreach ($ins_insumos as $ins_insumo) {
            $estado = ($ins_insumo->getEstado()) ? 'habilitado' : 'deshabilitado';
            ?>

            <tr id="tr_ins_insumo_precios_gestion_uno_<?php Gral::_echo($ins_insumo->getId()) ?>" class="uno" identificador="<?php Gral::_echo($ins_insumo->getId()) ?>">
                <?php include "ins_insumo_precios_gestion_uno.php" ?>
            </tr>

        <?php } ?>

        <tr>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <?php foreach($ins_tipo_lista_precios as $ins_tipo_lista_precio){ ?>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <?php } ?>
        </tr>

        <tr>
            <td colspan='8' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>
</form>
<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


