
<div class="titulo"><?php ($hay_diferencias_en_clientes) ? Lang::_lang('Datos a verificar') : Lang::_lang('Cliente Verificado'); ?></div>

<div class="bloque-cli-cliente-verificar">
    <table border="0" class="tabla-modal" id='listado_cli_cliente_verificar'>
        <tr>
            <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang('') ?></td>
            <td class="adm_tbl_encabezado" width="170" align='center'><?php Lang::_lang('Campo') ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Datos Cliente Tienda') ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Datos Cliente') ?></td>
        </tr>
        <?php
        $fila = 0;
        foreach ($arr_campos as $indice => $arr_campo)
        {
            $css_fila = ($arr_campo['diferencia'] ? 'adm_tbl_lineas destacado' : 'adm_tbl_lineas');
        ?>
            <tr>
                <td class="<?php echo $css_fila; ?>" align="center">
                    <div class="check">
                        <?php if($arr_campo['diferencia']): ?>
                        <input type='checkbox' id='chk_fila_<?php echo $fila; ?>' name='chk_fila[<?php echo $fila; ?>]' <?php echo $sel ?> value='<?php echo $fila; ?>' identificador='<?php echo $fila; ?>' />
                        <?php endif; ?>
                    </div>
                </td>

                <td class="<?php echo $css_fila; ?>" align="left">
                    <div class="">
                        <?php Gral::_echo($arr_campo['nombre']); ?>
                    </div>
                </td>

                <td class="<?php echo $css_fila; ?>" align="center">
                    <div class="">
                        <?php Gral::_echo($arr_campo['cli_cliente_tienda']); ?>
                    </div>
                </td>

                <td class="<?php echo $css_fila; ?>" align="center">
                    <div class="">
                        <?php Gral::_echo($arr_campo['cli_cliente']); ?>
                    </div>
                </td>
            </tr>
        <?php
        $fila++;
        }
        ?>
    </table>
    
    <?php if($hay_diferencias_en_clientes): ?>
        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_copiar_datos_a_cliente' name='btn_copiar_datos_a_cliente' type='button' gen-modal-file-post="ajax/modulos/cli_cliente_tienda_gestion/set_modal_verificar_cliente_copiar_datos_a_cliente.php?cli_cliente_tienda_id=<?php echo $cli_cliente_tienda_id; ?>&cli_cliente_id=<?php echo $cli_cliente_id; ?>&copiar_destino=cliente&arr_campos=<?php echo $arr_campos; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitCliClienteTiendaGestion(); refreshAdmUno('cli_cliente_tienda_gestion', <?php echo $cli_cliente_tienda_id; ?>);"><?php Lang::_lang('Copiar datos del Cliente Tienda al Cliente') ?> >> </button>
            <button class="boton gen-modal-btn-confirmar" id='btn_copiar_datos_a_cliente_tienda' name='btn_copiar_datos_a_cliente_tienda' type='button' gen-modal-file-post="ajax/modulos/cli_cliente_tienda_gestion/set_modal_verificar_cliente_copiar_datos_a_cliente.php?cli_cliente_tienda_id=<?php echo $cli_cliente_tienda_id; ?>&cli_cliente_id=<?php echo $cli_cliente_id; ?>&copiar_destino=cliente_tienda&arr_campos=<?php echo $arr_campos; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitCliClienteTiendaGestion(); refreshAdmUno('cli_cliente_tienda_gestion', <?php echo $cli_cliente_tienda_id; ?>);"> << <?php Lang::_lang('Copiar datos del Cliente al Cliente Tienda') ?></button>
        </div>
    <?php endif; ?>
</div>
<br />