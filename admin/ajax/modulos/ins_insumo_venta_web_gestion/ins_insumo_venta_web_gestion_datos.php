
<?php //include Gral::getPathAbs() . 'admin/parciales/buscadores/activos/ins_insumo.php' ?>

<?php if (count($ins_insumos) > 0) { ?>
<form id="form_cuerpo" name="form_cuerpo" method="post" action="">

    <table border='0' align='center' class='listado' id='listado_adm_ins_insumo_venta_web_gestion'>

        <tr>

            <td align='center' class='' colspan="4">
                &nbsp;
            </td>
            
            <td align='center' class='adm_tbl_encabezado' colspan="2">
                <?php Lang::_lang('Tienda Online') ?>
            </td>

            <td align='center' class='adm_tbl_encabezado' colspan="5">
                <?php Lang::_lang('Tienda Mayorista') ?>
            </td>
                        
        </tr>
        
        <tr>

            <td width='40' align='center' class='adm_tbl_encabezado'>
                <input type="checkbox" id="chk_insumo_id_all" name="chk_insumo_id_all" value="1">        
            </td>
            
            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Foto') ?>
            </td>
            
            <td width='450' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Insumo') ?>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Info Web') ?>
            </td>
            
            <td width='80' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang(' Habilitar') ?>
            </td>
            
            <?php if($ins_tipo_lista_precio_venta_online){ ?>
            <td width='180' align='center' class='adm_tbl_encabezado'>
                <?php Gral::_echo($ins_tipo_lista_precio_venta_online->getDescripcion()) ?>
            </td>
            <?php } ?>

            <td width='80' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang(' Habilitar') ?>
            </td>
            
            <?php if($ins_tipo_lista_precio_mayorista){ ?>
            <td width='180' align='center' class='adm_tbl_encabezado'>
                <?php Gral::_echo($ins_tipo_lista_precio_mayorista->getDescripcion()) ?>
            </td>
            <?php } ?>
            
        </tr>


        <?php
        foreach ($ins_insumos as $ins_insumo) {
            $estado = ($ins_insumo->getEstado()) ? 'habilitado' : 'deshabilitado';
            ?>

            <tr id="tr_ins_insumo_venta_web_gestion_uno_<?php Gral::_echo($ins_insumo->getId()) ?>" class="uno" identificador="<?php Gral::_echo($ins_insumo->getId()) ?>">
                <?php include "ins_insumo_venta_web_gestion_uno.php" ?>
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
        </tr>

        <tr>
            <td colspan='15' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>
</form>
<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


