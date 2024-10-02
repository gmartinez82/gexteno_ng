
	<?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_INS_TIPO_LISTA_PRECIO')){ ?>
	<div class='relacion ins_tipo_lista_precio' clase='ins_tipo_lista_precio' padre='cli_cliente' padre_clase='CliCliente' relacion='CliClienteInsTipoListaPrecio'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('InsTipoListaPrecios') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_ins_tipo_lista_precios = $cli_cliente->getCantidadInsTipoListaPreciosXCliClienteInsTipoListaPrecio();
                echo ($cantidad_ins_tipo_lista_precios > 0) ? '('.$cantidad_ins_tipo_lista_precios.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_cli_cliente_alta_relacion_cli_cliente_ins_tipo_lista_precio_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='ins_tipo_lista_precio_txt_buscar' id='ins_tipo_lista_precio_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_INS_TIPO_LISTA_PRECIO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_tipo_lista_precio/ins_tipo_lista_precio_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_tipo_lista_precio', 'cli_cliente', <?php Gral::_echo($cli_cliente->getId()) ?>, 'CliCliente', 'CliClienteInsTipoListaPrecio')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_tipo_lista_precio') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

