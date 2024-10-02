
    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ALTA_RELACION_CLI_SUBCATEGORIA')){ ?>
        <?php if($ins_tipo_lista_precio->getAltaMostrarBloqueRelacionCliSubcategoriaInsTipoListaPrecio()){ ?>
            <div class='relacion cli_subcategoria' clase='cli_subcategoria' padre='ins_tipo_lista_precio' padre_clase='InsTipoListaPrecio' relacion='CliSubcategoriaInsTipoListaPrecio'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('CliSubcategorias') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_cli_subcategorias = $ins_tipo_lista_precio->getCantidadCliSubcategoriasXCliSubcategoriaInsTipoListaPrecio();
                        echo ($cantidad_cli_subcategorias > 0) ? '('.$cantidad_cli_subcategorias.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_relacion_cli_subcategoria_ins_tipo_lista_precio_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='cli_subcategoria_txt_buscar' id='cli_subcategoria_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ALTA_RELACION_CLI_SUBCATEGORIA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_subcategoria/cli_subcategoria_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'cli_subcategoria', 'ins_tipo_lista_precio', <?php Gral::_echo($ins_tipo_lista_precio->getId()) ?>, 'InsTipoListaPrecio', 'CliSubcategoriaInsTipoListaPrecio')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('cli_subcategoria') ?>'>
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

