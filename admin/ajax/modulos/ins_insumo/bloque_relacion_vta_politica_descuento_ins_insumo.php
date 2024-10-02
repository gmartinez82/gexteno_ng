
    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_VTA_POLITICA_DESCUENTO')){ ?>
        <?php if($ins_insumo->getAltaMostrarBloqueRelacionVtaPoliticaDescuentoInsInsumo()){ ?>
            <div class='relacion vta_politica_descuento' clase='vta_politica_descuento' padre='ins_insumo' padre_clase='InsInsumo' relacion='VtaPoliticaDescuentoInsInsumo'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaPoliticaDescuentos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_vta_politica_descuentos = $ins_insumo->getCantidadVtaPoliticaDescuentosXVtaPoliticaDescuentoInsInsumo();
                        echo ($cantidad_vta_politica_descuentos > 0) ? '('.$cantidad_vta_politica_descuentos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_ins_insumo_alta_relacion_vta_politica_descuento_ins_insumo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='vta_politica_descuento_txt_buscar' id='vta_politica_descuento_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_VTA_POLITICA_DESCUENTO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_politica_descuento/vta_politica_descuento_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_politica_descuento', 'ins_insumo', <?php Gral::_echo($ins_insumo->getId()) ?>, 'InsInsumo', 'VtaPoliticaDescuentoInsInsumo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_politica_descuento') ?>'>
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

