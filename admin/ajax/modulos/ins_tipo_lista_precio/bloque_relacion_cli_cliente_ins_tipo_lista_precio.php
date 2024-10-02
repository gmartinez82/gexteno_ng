
    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ALTA_RELACION_CLI_CLIENTE')){ ?>
        <?php if($ins_tipo_lista_precio->getAltaMostrarBloqueRelacionCliClienteInsTipoListaPrecio()){ ?>
            <div class='relacion cli_cliente' clase='cli_cliente' padre='ins_tipo_lista_precio' padre_clase='InsTipoListaPrecio' relacion='CliClienteInsTipoListaPrecio'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('CliClientes') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_cli_clientes = $ins_tipo_lista_precio->getCantidadCliClientesXCliClienteInsTipoListaPrecio();
                        echo ($cantidad_cli_clientes > 0) ? '('.$cantidad_cli_clientes.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_relacion_cli_cliente_ins_tipo_lista_precio_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='cli_cliente_txt_buscar' id='cli_cliente_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ALTA_RELACION_CLI_CLIENTE_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_cliente/cli_cliente_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'cli_cliente', 'ins_tipo_lista_precio', <?php Gral::_echo($ins_tipo_lista_precio->getId()) ?>, 'InsTipoListaPrecio', 'CliClienteInsTipoListaPrecio')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('cli_cliente') ?>'>
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

