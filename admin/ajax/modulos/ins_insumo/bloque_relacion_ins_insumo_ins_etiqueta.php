
    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_ETIQUETA')){ ?>
        <?php if($ins_insumo->getAltaMostrarBloqueRelacionInsInsumoInsEtiqueta()){ ?>
            <div class='relacion ins_etiqueta' clase='ins_etiqueta' padre='ins_insumo' padre_clase='InsInsumo' relacion='InsInsumoInsEtiqueta'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('InsEtiquetas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ins_etiquetas = $ins_insumo->getCantidadInsEtiquetasXInsInsumoInsEtiqueta();
                        echo ($cantidad_ins_etiquetas > 0) ? '('.$cantidad_ins_etiquetas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_ins_insumo_alta_relacion_ins_insumo_ins_etiqueta_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ins_etiqueta_txt_buscar' id='ins_etiqueta_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_ETIQUETA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_etiqueta/ins_etiqueta_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_etiqueta', 'ins_insumo', <?php Gral::_echo($ins_insumo->getId()) ?>, 'InsInsumo', 'InsInsumoInsEtiqueta')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_etiqueta') ?>'>
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

