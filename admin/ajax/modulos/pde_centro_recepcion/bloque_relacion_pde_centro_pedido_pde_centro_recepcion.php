
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_ALTA_RELACION_PDE_CENTRO_PEDIDO')){ ?>
	<div class='relacion pde_centro_pedido' clase='pde_centro_pedido' padre='pde_centro_recepcion' padre_clase='PdeCentroRecepcion' relacion='PdeCentroPedidoPdeCentroRecepcion'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('PdeCentroPedidos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_pde_centro_pedidos = $pde_centro_recepcion->getCantidadPdeCentroPedidosXPdeCentroPedidoPdeCentroRecepcion();
                echo ($cantidad_pde_centro_pedidos > 0) ? '('.$cantidad_pde_centro_pedidos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_pde_centro_recepcion_alta_relacion_pde_centro_pedido_pde_centro_recepcion_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='pde_centro_pedido_txt_buscar' id='pde_centro_pedido_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_ALTA_RELACION_PDE_CENTRO_PEDIDO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_centro_pedido/pde_centro_pedido_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_centro_pedido', 'pde_centro_recepcion', <?php Gral::_echo($pde_centro_recepcion->getId()) ?>, 'PdeCentroRecepcion', 'PdeCentroPedidoPdeCentroRecepcion')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pde_centro_pedido') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

