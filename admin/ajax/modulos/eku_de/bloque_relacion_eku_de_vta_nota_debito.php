
    <?php if(UsCredencial::getEsAcreditado('EKU_DE_ALTA_RELACION_VTA_NOTA_DEBITO')){ ?>
        <?php if($eku_de->getAltaMostrarBloqueRelacionEkuDeVtaNotaDebito()){ ?>
            <div class='relacion vta_nota_debito' clase='vta_nota_debito' padre='eku_de' padre_clase='EkuDe' relacion='EkuDeVtaNotaDebito'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaNotaDebitos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_vta_nota_debitos = $eku_de->getCantidadVtaNotaDebitosXEkuDeVtaNotaDebito();
                        echo ($cantidad_vta_nota_debitos > 0) ? '('.$cantidad_vta_nota_debitos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_eku_de_alta_relacion_eku_de_vta_nota_debito_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='vta_nota_debito_txt_buscar' id='vta_nota_debito_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('EKU_DE_ALTA_RELACION_VTA_NOTA_DEBITO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_nota_debito/vta_nota_debito_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_nota_debito', 'eku_de', <?php Gral::_echo($eku_de->getId()) ?>, 'EkuDe', 'EkuDeVtaNotaDebito')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_nota_debito') ?>'>
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

