
    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_PDE_PEDIDO')){ ?>
        <?php if($prv_proveedor->getAltaMostrarBloqueRelacionPdePedidoPrvProveedor()){ ?>
            <div class='relacion pde_pedido' clase='pde_pedido' padre='prv_proveedor' padre_clase='PrvProveedor' relacion='PdePedidoPrvProveedor'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('PdePedidos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_pde_pedidos = $prv_proveedor->getCantidadPdePedidosXPdePedidoPrvProveedor();
                        echo ($cantidad_pde_pedidos > 0) ? '('.$cantidad_pde_pedidos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_prv_proveedor_alta_relacion_pde_pedido_prv_proveedor_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='pde_pedido_txt_buscar' id='pde_pedido_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_PDE_PEDIDO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_pedido/pde_pedido_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_pedido', 'prv_proveedor', <?php Gral::_echo($prv_proveedor->getId()) ?>, 'PrvProveedor', 'PdePedidoPrvProveedor')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pde_pedido') ?>'>
                        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
                    </div>
                    <?php } ?>

                </div>

                <div class='datos'>
                    &nbsp;
                </div>

            </div>
        <?php } ?>
    <?php } ?>

