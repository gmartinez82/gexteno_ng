
    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_PDE_TIPO_NOTA_CREDITO')){ ?>
        <?php if($gral_condicion_iva->getAltaMostrarBloqueRelacionGralCondicionIvaPdeTipoNotaCredito()){ ?>
            <div class='relacion pde_tipo_nota_credito' clase='pde_tipo_nota_credito' padre='gral_condicion_iva' padre_clase='GralCondicionIva' relacion='GralCondicionIvaPdeTipoNotaCredito'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('PdeTipoNotaCreditos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_pde_tipo_nota_creditos = $gral_condicion_iva->getCantidadPdeTipoNotaCreditosXGralCondicionIvaPdeTipoNotaCredito();
                        echo ($cantidad_pde_tipo_nota_creditos > 0) ? '('.$cantidad_pde_tipo_nota_creditos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_condicion_iva_alta_relacion_gral_condicion_iva_pde_tipo_nota_credito_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='pde_tipo_nota_credito_txt_buscar' id='pde_tipo_nota_credito_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_PDE_TIPO_NOTA_CREDITO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_tipo_nota_credito/pde_tipo_nota_credito_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pde_tipo_nota_credito', 'gral_condicion_iva', <?php Gral::_echo($gral_condicion_iva->getId()) ?>, 'GralCondicionIva', 'GralCondicionIvaPdeTipoNotaCredito')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pde_tipo_nota_credito') ?>'>
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

