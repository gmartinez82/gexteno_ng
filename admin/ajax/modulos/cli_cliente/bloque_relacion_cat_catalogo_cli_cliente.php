
    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_CAT_CATALOGO')){ ?>
        <?php if($cli_cliente->getAltaMostrarBloqueRelacionCatCatalogoCliCliente()){ ?>
            <div class='relacion cat_catalogo' clase='cat_catalogo' padre='cli_cliente' padre_clase='CliCliente' relacion='CatCatalogoCliCliente'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('CatCatalogos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_cat_catalogos = $cli_cliente->getCantidadCatCatalogosXCatCatalogoCliCliente();
                        echo ($cantidad_cat_catalogos > 0) ? '('.$cantidad_cat_catalogos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_cli_cliente_alta_relacion_cat_catalogo_cli_cliente_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='cat_catalogo_txt_buscar' id='cat_catalogo_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_CAT_CATALOGO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/cat_catalogo/cat_catalogo_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'cat_catalogo', 'cli_cliente', <?php Gral::_echo($cli_cliente->getId()) ?>, 'CliCliente', 'CatCatalogoCliCliente')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('cat_catalogo') ?>'>
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

