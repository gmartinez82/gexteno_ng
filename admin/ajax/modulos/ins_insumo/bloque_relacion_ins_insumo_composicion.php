
    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_INSUMO_COMPOSICION')){ ?>
        <?php if($ins_insumo->getAltaMostrarBloqueRelacionInsInsumoComposicion()){ ?>
            <div class='relacion ins_insumo_composicion' clase='ins_insumo_composicion' padre='ins_insumo' padre_clase='InsInsumo' relacion='InsInsumoComposicion'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('InsInsumoComposicions') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ins_insumo_composicions = $ins_insumo->getCantidadInsInsumosXInsInsumoComposicion();
                        echo ($cantidad_ins_insumo_composicions > 0) ? '('.$cantidad_ins_insumo_composicions.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_ins_insumo_alta_relacion_ins_insumo_composicion_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ins_insumo_composicion_txt_buscar' id='ins_insumo_composicion_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_INS_INSUMO_COMPOSICION_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo/ins_insumo_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_insumo', 'ins_insumo', <?php Gral::_echo($ins_insumo->getId()) ?>, 'InsInsumo', 'InsInsumoComposicion')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_insumo_composicion') ?>'>
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

