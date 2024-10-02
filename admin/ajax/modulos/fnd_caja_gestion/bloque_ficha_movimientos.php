<div class='titulo'><?php Lang::_lang('Movimientos de Salida de la caja') ?> <?php Gral::_echo($fnd_caja->getDescripcion()); ?></div>

<table border='0' class='tabla-modal egresos'>
    <tr>
        <td class='adm_tbl_encabezado' width='50' align='center'>
            #
        </td>
        <td class='adm_tbl_encabezado' width='150' align='center'>
            Tipo
        </td>
        <td class='adm_tbl_encabezado' width='170' align='center'>
            Origen
        </td>
        <td class='adm_tbl_encabezado' width='170' align='center'>
            Destino
        </td>
        <td class='adm_tbl_encabezado' width='100' align='center'>
            Autorizado
        </td>
        <td class='adm_tbl_encabezado' width='100' align='center'>
            Autorizado El
        </td>
        <td class='adm_tbl_encabezado' width='100' align='center'>
            Autorizado Por
        </td>
        <td class='adm_tbl_encabezado' width='120' align='center'>
            Movimiento Estado
        </td>
        <td class='adm_tbl_encabezado' width='' align='center'>
            Acciones&nbsp;
        </td>
    </tr>
    
    <?php
    $cont = 0;
    
    foreach ($fnd_caja_movimientos_origen as $fnd_caja_movimiento_origen)
    {
        $fnd_caja_tipo_movimiento_descripcion        = '';
        $fnd_caja_movimiento_tipo_estado_descripcion = '';
        $fnd_caja_origen_descripcion                 = '';
        $fnd_caja_destino_descripcion                = '';
        $autorizado_el                               = '';
        $gral_si_no_descripcion                      = '';
        $us_usuario_descripcion                      = '';
        
        $cont++;
        
        $fnd_caja_movimiento_items = $fnd_caja_movimiento_origen->getFndCajaMovimientoItems();

        $fnd_caja_tipo_movimiento = $fnd_caja_movimiento_origen->getFndCajaTipoMovimiento();
        if($fnd_caja_tipo_movimiento){
            $fnd_caja_tipo_movimiento_descripcion = $fnd_caja_tipo_movimiento->getDescripcion();
        }
        
        $fnd_caja_movimiento_tipo_estado = $fnd_caja_movimiento_origen->getFndCajaMovimientoTipoEstado();
        if($fnd_caja_movimiento_tipo_estado){
            $fnd_caja_movimiento_tipo_estado_descripcion = $fnd_caja_movimiento_tipo_estado->getDescripcion();
            $fnd_caja_movimiento_tipo_estado_codigo      = $fnd_caja_movimiento_tipo_estado->getCodigo();
        }
        
        $fnd_caja_origen  = FndCaja::getOxId($fnd_caja_movimiento_origen->getFndCajaOrigen());
        if($fnd_caja_origen){
            $fnd_caja_origen_descripcion = $fnd_caja_origen->getDescripcion();
        }
        
        $fnd_caja_destino = FndCaja::getOxId($fnd_caja_movimiento_origen->getFndCajaDestino());
        if($fnd_caja_destino){
            $fnd_caja_destino_descripcion = $fnd_caja_destino->getDescripcion();         
        }
        
        if($fnd_caja_movimiento_origen->getAutorizadoEl() != '1900-01-01' || $fnd_caja_movimiento_origen->getAutorizadoEl() != '')
        {
            $autorizado_el = Gral::getFechaToWEB($fnd_caja_movimiento_origen->getAutorizadoEl());
        }
        
        $gral_si_no             = GralSiNo::getOxId($fnd_caja_movimiento_origen->getAutorizado());
        $gral_si_no_descripcion =  $gral_si_no->getDescripcion();
        $gral_si_no_id          = $gral_si_no->getId();
        
        $us_usuario = UsUsuario::getOxId($fnd_caja_movimiento_origen->getAutorizadoPor());
        if($us_usuario){
            $us_usuario_descripcion = $us_usuario->getDescripcion();
        }
        ?>
        <tr id='tr_fnd_caja_movimiento_uno_<?php echo $fnd_caja_movimiento_origen->getId(); ?>' class='uno' identificador='<?php echo $fnd_caja_movimiento_origen->getId(); ?>'>
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='movimiento'>
                    <?php Gral::_echo($fnd_caja_movimiento_origen->getId()); ?>
                </label>
            </td>
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='tipo-movimiento'>
                    <?php Gral::_echo($fnd_caja_tipo_movimiento_descripcion); ?>
                </label>
            </td>
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='caja-origen-descripcion'>
                    <?php Gral::_echo($fnd_caja_origen_descripcion); ?>
                </label>
            </td>
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='caja-destino-descripcion'>
                    <?php Gral::_echo($fnd_caja_destino_descripcion); ?>
                </label>
            </td>
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='autorizado'>
                    <?php if($fnd_caja_movimiento_origen->getAutorizadoEl() != '1900-01-01'):  ?>
                    <img src='imgs/btn_estado_<?php Gral::_echo($gral_si_no_id); ?>.gif' width='16' border='0' title='<?php Gral::_echo($gral_si_no_descripcion); ?> Autorizado'/>
                <?php endif; ?>
                </label>
            </td>
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='autorizado-el'>
                    <?php Gral::_echo($autorizado_el); ?>
                </label>
            </td>	
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='autorizado-por'>
                    <?php Gral::_echo($us_usuario_descripcion); ?>
                </label>
            </td>	
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='movimiento-tipo-estado'>
                    <img src="imgs/fnd_caja_movimiento_tipo_estado/<?php Gral::_echo($fnd_caja_movimiento_tipo_estado_codigo); ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($fnd_caja_movimiento_tipo_estado_descripcion); ?>
                </label>
            </td>
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <ul class='adm_botones_acciones_origen' fnd_caja_movimiento_id='<?php Gral::_echo($fnd_caja_movimiento_origen->getId()) ?>' fnd_caja_id='<?php Gral::_echo($fnd_caja_id); ?>' >
                    <?php if($fnd_caja_movimiento_tipo_estado->getActivo()): ?>
                    <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_FICHA_ANULAR_MOVIMIENTO')): ?>
                        <li class='adm_botones_accion anular_movimiento' movimiento_accion='<?php Gral::_echo(FndCajaMovimientoTipoEstado::TIPO_ANULADO); ?>'>
                            <img src='imgs/btn_elim.gif' width='16' border='0' title='Anular Movimiento'/>
                        </li>
                    <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </td>
        </tr>
        
        <tr>
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center' colspan='9'>
                
                <br />
                <div class='titulo'><?php Lang::_lang('Items del Movimiento'); ?></div>
                <table border='0' class='tabla-modal egresos-items'>
                    <tr>
                        <td class='adm_tbl_encabezado_gris' width='50' align='center'>
                            #
                        </td>
                        <td class='adm_tbl_encabezado_gris' width='450' align='center'>
                            Descripcion
                        </td>
                        <td class='adm_tbl_encabezado_gris' width='170' align='center'>
                            Importe
                        </td>
                        <td class='adm_tbl_encabezado_gris' width='170' align='center'>
                            Forma Pago
                        </td>
                        <td class='adm_tbl_encabezado_gris' width='100' align='center'>
                            Codigo
                        </td>
                    </tr>
                    <?php
                    foreach($fnd_caja_movimiento_items as $fnd_caja_movimiento_item):
                        $fnd_caja_movimiento_item_id          = $fnd_caja_movimiento_item->getId();
                        $fnd_caja_movimiento_item_descripcion = $fnd_caja_movimiento_item->getDescripcion();
                        $fnd_caja_movimiento_item_importe     = $fnd_caja_movimiento_item->getImporte();
                        $fnd_caja_movimiento_item_forma_pago  = $fnd_caja_movimiento_item->getGralFpFormaPago()->getDescripcion();
                        $fnd_caja_movimiento_item_codigo      = $fnd_caja_movimiento_item->getCodigo();

                    ?>
                    <tr id='tr_fnd_caja_movimiento_item_uno_<?php echo $fnd_caja_movimiento_item_id; ?>' class='uno' identificador='<?php echo $fnd_caja_movimiento_item_id; ?>'>
                        
                        <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                            <label class='movimiento-item-id'>
                                <?php Gral::_echo($fnd_caja_movimiento_item_id); ?>
                            </label>
                        </td>
                        <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                            <label class='movimiento-item-descripcion'>
                                <?php Gral::_echo($fnd_caja_movimiento_item_descripcion); ?>
                            </label>
                        </td>
                        <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                            <label class='movimiento-item-importe'>
                                <?php Gral::_echoImp($fnd_caja_movimiento_item_importe); ?>
                            </label>
                        </td>
                        <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                            <label class='movimiento-item-forma-pago'>
                                <?php Gral::_echo($fnd_caja_movimiento_item_forma_pago); ?>
                            </label>
                        </td>
                        <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                            <label class='movimiento-item-forma-codigo'>
                                <?php Gral::_echo($fnd_caja_movimiento_item_codigo); ?>
                            </label>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </table>
                <br />
                <br />
                
            </td>
        </tr>
    <?php
    }
    ?>
</table>

</br>

<div class='titulo'><?php Lang::_lang('Movimientos de Entrada de la caja') ?> <?php Gral::_echo($fnd_caja->getDescripcion()); ?></div>
<table border='0' class='tabla-modal ingresos'>
    <tr>
        <td class='adm_tbl_encabezado' width='50' align='center'>
            #
        </td>

        <td class='adm_tbl_encabezado' width='150' align='center'>
            Tipo
        </td>

        <td class='adm_tbl_encabezado' width='170' align='center'>
            Origen
        </td>

        <td class='adm_tbl_encabezado' width='170' align='center'>
            Destino
        </td>

        <td class='adm_tbl_encabezado' width='100' align='center'>
            Autorizado
        </td>

        <td class='adm_tbl_encabezado' width='100' align='center'>
            Autorizado El
        </td>

        <td class='adm_tbl_encabezado' width='100' align='center'>
            Autorizado Por
        </td>

        <td class='adm_tbl_encabezado' width='120' align='center'>
            Movimiento Estado
        </td>

        <td class='adm_tbl_encabezado' width='' align='center'>
            Acciones&nbsp;
        </td>
    </tr>
    
    <?php
    $cont = 0;
    
    foreach ($fnd_caja_movimientos_destino as $fnd_caja_movimiento_destino)
    {
        $fnd_caja_tipo_movimiento_descripcion = '';
        $fnd_caja_movimiento_tipo_estado_descripcion = '';
        $fnd_caja_origen_descripcion = '';
        $fnd_caja_destino_descripcion = '';
        $autorizado_el = '';
        $gral_si_no_descripcion = '';
        $us_usuario_descripcion = '';
        
        $cont++;
        
        $fnd_caja_movimiento_items = $fnd_caja_movimiento_destino->getFndCajaMovimientoItems();

        $fnd_caja_tipo_movimiento = $fnd_caja_movimiento_destino->getFndCajaTipoMovimiento();
        if($fnd_caja_tipo_movimiento){
            $fnd_caja_tipo_movimiento_descripcion = $fnd_caja_tipo_movimiento->getDescripcion();
        }
        
        $fnd_caja_movimiento_tipo_estado = $fnd_caja_movimiento_destino->getFndCajaMovimientoTipoEstado();
        if($fnd_caja_movimiento_tipo_estado){
            $fnd_caja_movimiento_tipo_estado_descripcion = $fnd_caja_movimiento_tipo_estado->getDescripcion();
            $fnd_caja_movimiento_tipo_estado_codigo      = $fnd_caja_movimiento_tipo_estado->getCodigo();
        }
        
        $fnd_caja_origen = FndCaja::getOxId($fnd_caja_movimiento_destino->getFndCajaOrigen());
        if($fnd_caja_origen){
            $fnd_caja_origen_descripcion = $fnd_caja_origen->getDescripcion();
        }
        
        $fnd_caja_destino = FndCaja::getOxId($fnd_caja_movimiento_destino->getFndCajaDestino());
        if($fnd_caja_destino){
            $fnd_caja_destino_descripcion = $fnd_caja_destino->getDescripcion();         
        }
        
        if($fnd_caja_movimiento_destino->getAutorizadoEl() != '1900-01-01' || $fnd_caja_movimiento_destino->getAutorizadoEl() != '')
        {
            $autorizado_el = Gral::getFechaToWEB($fnd_caja_movimiento_destino->getAutorizadoEl());
        }
        
        $gral_si_no = GralSiNo::getOxId($fnd_caja_movimiento_destino->getAutorizado());
        $gral_si_no_descripcion =  $gral_si_no->getDescripcion();
        $gral_si_no_id          =  $gral_si_no->getId();
        $us_usuario = UsUsuario::getOxId($fnd_caja_movimiento_destino->getAutorizadoPor());
        if($us_usuario){
            $us_usuario_descripcion = $us_usuario->getDescripcion();
        }
        ?>
        <tr id='tr_fnd_caja_movimiento_uno_<?php echo $fnd_caja_movimiento_destino->getId(); ?>' class='uno' identificador='<?php echo $fnd_caja_movimiento_destino->getId(); ?>'>
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='movimiento'>
                    <?php Gral::_echo($fnd_caja_movimiento_destino->getId()); ?>
                </label>
            </td>
            
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='tipo-movimiento'>
                    <?php Gral::_echo($fnd_caja_tipo_movimiento_descripcion); ?>
                </label>
            </td>
            
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='caja-origen-descripcion'>
                    <?php Gral::_echo($fnd_caja_origen_descripcion); ?>
                </label>
            </td>
            
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='caja-destino-descripcion'>
                    <?php Gral::_echo($fnd_caja_destino_descripcion); ?>
                </label>
            </td>
            
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='autorizado'>
                    <?php if($fnd_caja_movimiento_destino->getAutorizadoEl() != '1900-01-01'):  ?>
                    <img src='imgs/btn_estado_<?php Gral::_echo($gral_si_no_id); ?>.gif' width='16' border='0' title='<?php Gral::_echo($gral_si_no_descripcion); ?> Autorizado'/>
                    <?php endif; ?>
                </label>
            </td>
            
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='autorizado-el'>
                    <?php Gral::_echo($autorizado_el); ?>
                </label>
            </td>   
            
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='autorizado-por'>
                    <?php Gral::_echo($us_usuario_descripcion); ?>
                </label>
            </td>
            
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <label class='movimiento-tipo-estado'>
                    <img src="imgs/fnd_caja_movimiento_tipo_estado/<?php Gral::_echo($fnd_caja_movimiento_tipo_estado_codigo); ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($fnd_caja_movimiento_tipo_estado_descripcion); ?>
                </label>
            </td>
            
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                <ul class='adm_botones_acciones_destino' fnd_caja_movimiento_id='<?php Gral::_echo($fnd_caja_movimiento_destino->getId()) ?>' fnd_caja_id='<?php Gral::_echo($fnd_caja_id); ?>' >
                    <?php //if($fnd_caja_movimiento_tipo_estado->getCodigo() == FndCajaMovimientoTipoEstado::TIPO_GENERADO ): ?>
                    <?php if($fnd_caja_movimiento_tipo_estado->getActivo()): ?>    
                    
                    <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_FICHA_APROBAR_MOVIMIENTO')): ?>
                        <li class='adm_botones_accion aprobar_movimiento' movimiento_accion='<?php Gral::_echo(FndCajaMovimientoTipoEstado::TIPO_APROBADO); ?>'>
                            <img src='imgs/btn_enviado.png' width='16' border='0' title='Aprobar Movimiento' />
                        </li>
                    <?php endif; ?>
                    
                    <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_FICHA_RECHAZAR_MOVIMIENTO')): ?>
                        <li class='adm_botones_accion rechazar_movimiento' movimiento_accion='<?php Gral::_echo(FndCajaMovimientoTipoEstado::TIPO_RECHAZADO); ?>'>
                            <img src='imgs/btn_publicado_0.png' width='16' border='0' title='Rechazar Movimiento'/>
                        </li>
                    <?php endif; ?>
                    
                    <?php endif; ?>
                </ul>
            </td>
        </tr>
        <tr>
            <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center' colspan='9'>
                <!--<div class='titulo'><?php Lang::_lang('Items del Movimiento'); ?></div>-->
                <table border='0' class='tabla-modal egresos-items'>
                    <tr>
                        <td class='adm_tbl_encabezado_gris' width='50' align='center'>
                            #
                        </td>
                        <td class='adm_tbl_encabezado_gris' width='450' align='center'>
                            Descripcion
                        </td>
                        <td class='adm_tbl_encabezado_gris' width='170' align='center'>
                            Importe
                        </td>
                        <td class='adm_tbl_encabezado_gris' width='170' align='center'>
                            Forma Pago
                        </td>
                        <td class='adm_tbl_encabezado_gris' width='100' align='center'>
                            Codigo
                        </td>
                    </tr>
                    <?php
                    foreach($fnd_caja_movimiento_items as $fnd_caja_movimiento_item):
                        $fnd_caja_movimiento_item_id          = $fnd_caja_movimiento_item->getId();
                        $fnd_caja_movimiento_item_descripcion = $fnd_caja_movimiento_item->getDescripcion();
                        $fnd_caja_movimiento_item_importe     = $fnd_caja_movimiento_item->getImporte();
                        $fnd_caja_movimiento_item_forma_pago  = $fnd_caja_movimiento_item->getGralFpFormaPago()->getDescripcion();
                        $fnd_caja_movimiento_item_codigo      = $fnd_caja_movimiento_item->getCodigo();

                    ?>
                    <tr id='tr_fnd_caja_movimiento_item_uno_<?php echo $fnd_caja_movimiento_item_id; ?>' class='uno' identificador='<?php echo $fnd_caja_movimiento_item_id; ?>'>
                        
                        <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                            <label class='movimiento-item-id'>
                                <?php Gral::_echo($fnd_caja_movimiento_item_id); ?>
                            </label>
                        </td>
                        <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                            <label class='movimiento-item-descripcion'>
                                <?php Gral::_echo($fnd_caja_movimiento_item_descripcion); ?>
                            </label>
                        </td>
                        <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                            <label class='movimiento-item-importe'>
                                <?php Gral::_echoImp($fnd_caja_movimiento_item_importe); ?>
                            </label>
                        </td>
                        <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                            <label class='movimiento-item-forma-pago'>
                                <?php Gral::_echo($fnd_caja_movimiento_item_forma_pago); ?>
                            </label>
                        </td>
                        <td class='adm_tbl_lineas <?php echo $css_bg ?>' align='center'>
                            <label class='movimiento-item-forma-codigo'>
                                <?php Gral::_echo($fnd_caja_movimiento_item_codigo); ?>
                            </label>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </table>
            </td>
        </tr>
    <?php
    }
    ?>
</table>