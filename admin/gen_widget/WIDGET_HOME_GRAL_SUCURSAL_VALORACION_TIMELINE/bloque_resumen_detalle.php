<!------------------------------------------------------------------------------
// Tabla Resumen
------------------------------------------------------------------------------->
<table border="0" align="center">
    
    <!--------------------------------------------------------------------------
    -- Titulo
    --------------------------------------------------------------------------->
    <tr>
        <td class="adm_tbl_encabezado" align="center" colspan="4">
            <?php Gral::_echo('Resumen') ?>
        </td>
    </tr>
    
    <!--------------------------------------------------------------------------
    -- Cabeceras
    --------------------------------------------------------------------------->
    <tr>
        <td class="adm_tbl_encabezado" align="center" width="50">#</td>
        <td class="adm_tbl_encabezado" align="center" width="140">Sucursal</td>
        <td class="adm_tbl_encabezado" align="center" width="70">Cantidad</td>
        <td class="adm_tbl_encabezado" align="center" width="70">Promedio</td>
    </tr>
    
    <!--------------------------------------------------------------------------
    -- Cuerpo
    --------------------------------------------------------------------------->
    <?php
    foreach ($arr_resumens as $arr_resumen) {
    ?>
        <tr id="tr_<?php echo $widget_key ?>_tabla_datos_<?php echo $arr_resumen['cont'] ?>" class="tr_<?php echo $widget_key ?>_tabla_datos" descripcion="<?php Gral::_echo(substr($arr_resumen['descripcion'], 0, 100)) ?>">
            <td class="adm_tbl_lineas" align="center">
                <div class="contador">
                    <?php Gral::_echoInt($arr_resumen['cont']) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="left" title="<?php Gral::_echo($arr_resumen['descripcion']) ?>">
                <div class="descripcion">
                    <?php Gral::_echo($arr_resumen['descripcion']) ?>
                </div>
            </td>

            <td class="adm_tbl_lineas" align="center">
                <div class="cantidad">
                    <?php Gral::_echoInt($arr_resumen['cantidad']) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="cantidad">
                    <?php Gral::_echoFloat($arr_resumen['promedio']) ?>
                </div>
            </td>
        </tr>
    <?php } ?>
</table>