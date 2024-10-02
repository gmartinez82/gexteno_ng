
    <form action="" method="POST" name="formu" id="formu">
        
        <?php include "prv_importacion_info_top.php" ?>

        <table class="display" id="tabla_tabs_3" importacion_id="<?php echo $prv_importacion->getId() ?>">
            <thead>
                <tr>
                    <th class="adm_tbl_encabezado t3_th_nro_fila">
                        <a class='ordenar' href="?ord=1&c=fila&t=<?php Gral::_echo(($ordenar_tipo == 'asc') ? 'desc' : 'asc'); ?>">
                            #
                            
                            <?php if(strpos($ordenar_campo, 'fila') !== false){ ?>
                            <img src="imgs/ord_<?php Gral::_echo($ordenar_tipo) ?>.png" border='0'>
                            <?php } ?>
                        </a>
                    </th>
                    <th class="adm_tbl_encabezado t3_th_nuevo">

                        <?php $checked = ($prv_importacion->getSeleccionarTodos()) ? 'checked="checked"' : '' ?>
                        <input type="checkbox" 
                               id="check_all_nuevo"
                               name="check_all_nuevo"
                               value="1" 
                               title="Seleccionar Todos"
                               <?php echo $checked ?>
                               />
                    </th>
                    <th class="adm_tbl_encabezado t3_th_id">&nbsp;</th>
                    <th class="adm_tbl_encabezado t3_th_cod_proveedor">
                        <a class='ordenar' href="?ord=1&c=codigo_proveedor&t=<?php Gral::_echo(($ordenar_tipo == 'asc') ? 'desc' : 'asc'); ?>">
                            Cod PRV
                            
                            <?php if(strpos($ordenar_campo, 'codigo_proveedor') !== false){ ?>
                            <img src="imgs/ord_<?php Gral::_echo($ordenar_tipo) ?>.png" border='0'>
                            <?php } ?>
                        </a>
                    </th>
                    <th class="adm_tbl_encabezado t3_th_insumo">
                        <a class='ordenar' href="?ord=1&c=descripcion&t=<?php Gral::_echo(($ordenar_tipo == 'asc') ? 'desc' : 'asc'); ?>">
                            Descripcion del Proveedor
                            
                            <?php if(strpos($ordenar_campo, 'descripcion') !== false){ ?>
                            <img src="imgs/ord_<?php Gral::_echo($ordenar_tipo) ?>.png" border='0'>
                            <?php } ?>
                        </a>
                    </th>
                    <th class="adm_tbl_encabezado t3_th_cod_marca">
                        Marca
                    </th>
                    <th class="adm_tbl_encabezado t3_th_cod_pieza">
                        OEM
                    </th>
                    <th class="adm_tbl_encabezado t3_th_nuevo_importe">
                        <a class='ordenar' href="?ord=1&c=importe&t=<?php Gral::_echo(($ordenar_tipo == 'asc') ? 'desc' : 'asc'); ?>">
                            Imp S/D
                            
                            <?php if(strpos($ordenar_campo, 'importe') !== false){ ?>
                            <img src="imgs/ord_<?php Gral::_echo($ordenar_tipo) ?>.png" border='0'>
                            <?php } ?>
                        </a>
                    </th>
                    <th class="adm_tbl_encabezado t3_th_nuevo_importe_neto">
                        <a class='ordenar' href="?ord=1&c=importe_neto&t=<?php Gral::_echo(($ordenar_tipo == 'asc') ? 'desc' : 'asc'); ?>">
                            Imp Neto
                            
                            <?php if(strpos($ordenar_campo, 'importe_neto') !== false){ ?>
                            <img src="imgs/ord_<?php Gral::_echo($ordenar_tipo) ?>.png" border='0'>
                            <?php } ?>
                        </a>
                    </th>
                    <th class="adm_tbl_encabezado t3_th_ultimo_importe">
                        <a class='ordenar' href="?ord=1&c=ultimo_importe&t=<?php Gral::_echo(($ordenar_tipo == 'asc') ? 'desc' : 'asc'); ?>">
                            Ult Imp
                            
                            <?php if(strpos($ordenar_campo, 'ultimo_importe') !== false){ ?>
                            <img src="imgs/ord_<?php Gral::_echo($ordenar_tipo) ?>.png" border='0'>
                            <?php } ?>
                        </a>                        
                    </th>
                    <th class="adm_tbl_encabezado t3_th_nuevo_incremento">
                        <a class='ordenar' href="?ord=1&c=incremento&t=<?php Gral::_echo(($ordenar_tipo == 'asc') ? 'desc' : 'asc'); ?>">
                            % Incr
                            
                            <?php if(strpos($ordenar_campo, 'incremento') !== false){ ?>
                            <img src="imgs/ord_<?php Gral::_echo($ordenar_tipo) ?>.png" border='0'>
                            <?php } ?>
                        </a>                        
                    </th>
                    <th class="adm_tbl_encabezado t3_th_insumo_importe">
                        <a class='ordenar' href="?ord=1&c=costo_actual&t=<?php Gral::_echo(($ordenar_tipo == 'asc') ? 'desc' : 'asc'); ?>">
                            Costo Act
                            
                            <?php if(strpos($ordenar_campo, 'costo_actual') !== false){ ?>
                            <img src="imgs/ord_<?php Gral::_echo($ordenar_tipo) ?>.png" border='0'>
                            <?php } ?>
                        </a>                        
                    </th>
                    <th class="adm_tbl_encabezado t3_th_insumo_incremento">
                        <a class='ordenar' href="?ord=1&c=variacion&t=<?php Gral::_echo(($ordenar_tipo == 'asc') ? 'desc' : 'asc'); ?>">
                            % Incr
                            
                            <?php if(strpos($ordenar_campo, 'variacion') !== false){ ?>
                            <img src="imgs/ord_<?php Gral::_echo($ordenar_tipo) ?>.png" border='0'>
                            <?php } ?>
                        </a>                        
                    </th>
                    <th class="adm_tbl_encabezado t3_th_insumo_accion">
                        <a class='ordenar' href="?ord=1&c=actualizar_costo&t=<?php Gral::_echo(($ordenar_tipo == 'asc') ? 'desc' : 'asc'); ?>">
                            Sel
                            
                            <?php if(strpos($ordenar_campo, 'actualizar_costo') !== false){ ?>
                            <img src="imgs/ord_<?php Gral::_echo($ordenar_tipo) ?>.png" border='0'>
                            <?php } ?>
                        </a>                        
                    </th>
                    <th class="adm_tbl_encabezado t3_th_cancelar">&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $ins_marcas = InsMarca::getInsMarcas();

                foreach ($arr_rows as $row => $arr_row) {
                    ?>
                    <tr id="tr_prv_insumo_<?php echo $row ?>" class="uno" identificador="<?php echo $row ?>">
                        <?php include "prv_insumo_uno.php"; ?>
                    </tr>
                <?php } ?>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan='17' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
                </tr> 
            </tfoot>
        </table>

        <div class="botonera botonera-siguiente">
            <div class="errores-paso"></div>

            <a class="boton" id="siguiente_tabs_4" href="#">Finalizar Proceso</a>
        </div>

    </form>
