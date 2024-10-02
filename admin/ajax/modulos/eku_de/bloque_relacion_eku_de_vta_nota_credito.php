
    <?php if(UsCredencial::getEsAcreditado('EKU_DE_ALTA_RELACION_VTA_NOTA_CREDITO')){ ?>
        <?php if($eku_de->getAltaMostrarBloqueRelacionEkuDeVtaNotaCredito()){ ?>
            <div class='relacion vta_nota_credito' clase='vta_nota_credito' padre='eku_de' padre_clase='EkuDe' relacion='EkuDeVtaNotaCredito'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaNotaCreditos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_vta_nota_creditos = $eku_de->getCantidadVtaNotaCreditosXEkuDeVtaNotaCredito();
                        echo ($cantidad_vta_nota_creditos > 0) ? '('.$cantidad_vta_nota_creditos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_eku_de_alta_relacion_eku_de_vta_nota_credito_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='vta_nota_credito_txt_buscar' id='vta_nota_credito_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_ALTA_RELACION_VTA_NOTA_CREDITO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_nota_credito/vta_nota_credito_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_nota_credito', 'eku_de', <?php Gral::_echo($eku_de->getId()) ?>, 'EkuDe', 'EkuDeVtaNotaCredito')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_nota_credito') ?>'>
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

