
    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ALTA_RELACION_INS_INSUMO_BULTO')){ ?>
        <?php if($ins_tipo_lista_precio->getAltaMostrarBloqueRelacionInsInsumoBultoInsTipoListaPrecio()){ ?>
            <div class='relacion ins_insumo_bulto' clase='ins_insumo_bulto' padre='ins_tipo_lista_precio' padre_clase='InsTipoListaPrecio' relacion='InsInsumoBultoInsTipoListaPrecio'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('InsInsumoBultos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ins_insumo_bultos = $ins_tipo_lista_precio->getCantidadInsInsumoBultosXInsInsumoBultoInsTipoListaPrecio();
                        echo ($cantidad_ins_insumo_bultos > 0) ? '('.$cantidad_ins_insumo_bultos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_ins_tipo_lista_precio_alta_relacion_ins_insumo_bulto_ins_tipo_lista_precio_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ins_insumo_bulto_txt_buscar' id='ins_insumo_bulto_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ALTA_RELACION_INS_INSUMO_BULTO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_bulto/ins_insumo_bulto_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_insumo_bulto', 'ins_tipo_lista_precio', <?php Gral::_echo($ins_tipo_lista_precio->getId()) ?>, 'InsTipoListaPrecio', 'InsInsumoBultoInsTipoListaPrecio')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_insumo_bulto') ?>'>
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

