
    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ALTA_RELACION_INS_INSUMO')){ ?>
        <?php if($ins_tipo_lista_precio->getAltaMostrarBloqueRelacionInsListaPrecio()){ ?>
            <div class='relacion ins_insumo' clase='ins_insumo' padre='ins_tipo_lista_precio' padre_clase='InsTipoListaPrecio' relacion='InsListaPrecio'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('InsInsumos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ins_insumos = $ins_tipo_lista_precio->getCantidadInsInsumosXInsListaPrecio();
                        echo ($cantidad_ins_insumos > 0) ? '('.$cantidad_ins_insumos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_relacion_ins_lista_precio_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ins_insumo_txt_buscar' id='ins_insumo_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ALTA_RELACION_INS_INSUMO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo/ins_insumo_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_insumo', 'ins_tipo_lista_precio', <?php Gral::_echo($ins_tipo_lista_precio->getId()) ?>, 'InsTipoListaPrecio', 'InsListaPrecio')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_insumo') ?>'>
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

