
    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ALTA_RELACION_CLI_CATEGORIA')){ ?>
        <?php if($gral_fp_forma_pago->getAltaMostrarBloqueRelacionCliCategoriaGralFpFormaPago()){ ?>
            <div class='relacion cli_categoria' clase='cli_categoria' padre='gral_fp_forma_pago' padre_clase='GralFpFormaPago' relacion='CliCategoriaGralFpFormaPago'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('CliCategorias') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_cli_categorias = $gral_fp_forma_pago->getCantidadCliCategoriasXCliCategoriaGralFpFormaPago();
                        echo ($cantidad_cli_categorias > 0) ? '('.$cantidad_cli_categorias.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_fp_forma_pago_alta_relacion_cli_categoria_gral_fp_forma_pago_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='cli_categoria_txt_buscar' id='cli_categoria_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ALTA_RELACION_CLI_CATEGORIA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_categoria/cli_categoria_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'cli_categoria', 'gral_fp_forma_pago', <?php Gral::_echo($gral_fp_forma_pago->getId()) ?>, 'GralFpFormaPago', 'CliCategoriaGralFpFormaPago')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('cli_categoria') ?>'>
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

