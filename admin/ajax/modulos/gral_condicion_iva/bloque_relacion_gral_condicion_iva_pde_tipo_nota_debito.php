
    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_PDE_TIPO_NOTA_DEBITO')){ ?>
        <?php if($gral_condicion_iva->getAltaMostrarBloqueRelacionGralCondicionIvaPdeTipoNotaDebito()){ ?>
            <div class='relacion pde_tipo_nota_debito' clase='pde_tipo_nota_debito' padre='gral_condicion_iva' padre_clase='GralCondicionIva' relacion='GralCondicionIvaPdeTipoNotaDebito'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('PdeTipoNotaDebitos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_pde_tipo_nota_debitos = $gral_condicion_iva->getCantidadPdeTipoNotaDebitosXGralCondicionIvaPdeTipoNotaDebito();
                        echo ($cantidad_pde_tipo_nota_debitos > 0) ? '('.$cantidad_pde_tipo_nota_debitos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_condicion_iva_alta_relacion_gral_condicion_iva_pde_tipo_nota_debito_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='pde_tipo_nota_debito_txt_buscar' id='pde_tipo_nota_debito_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_PDE_TIPO_NOTA_DEBITO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_tipo_nota_debito/pde_tipo_nota_debito_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_tipo_nota_debito', 'gral_condicion_iva', <?php Gral::_echo($gral_condicion_iva->getId()) ?>, 'GralCondicionIva', 'GralCondicionIvaPdeTipoNotaDebito')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pde_tipo_nota_debito') ?>'>
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

