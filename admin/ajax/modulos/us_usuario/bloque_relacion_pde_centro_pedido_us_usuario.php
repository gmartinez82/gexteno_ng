
    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PDE_CENTRO_PEDIDO')){ ?>
        <?php if($us_usuario->getAltaMostrarBloqueRelacionPdeCentroPedidoUsUsuario()){ ?>
            <div class='relacion pde_centro_pedido' clase='pde_centro_pedido' padre='us_usuario' padre_clase='UsUsuario' relacion='PdeCentroPedidoUsUsuario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('PdeCentroPedidos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_pde_centro_pedidos = $us_usuario->getCantidadPdeCentroPedidosXPdeCentroPedidoUsUsuario();
                        echo ($cantidad_pde_centro_pedidos > 0) ? '('.$cantidad_pde_centro_pedidos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_us_usuario_alta_relacion_pde_centro_pedido_us_usuario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='pde_centro_pedido_txt_buscar' id='pde_centro_pedido_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PDE_CENTRO_PEDIDO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_centro_pedido/pde_centro_pedido_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_centro_pedido', 'us_usuario', <?php Gral::_echo($us_usuario->getId()) ?>, 'UsUsuario', 'PdeCentroPedidoUsUsuario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pde_centro_pedido') ?>'>
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

