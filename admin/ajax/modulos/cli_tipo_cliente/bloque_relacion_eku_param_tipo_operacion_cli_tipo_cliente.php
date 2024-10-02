
    <?php if(UsCredencial::getEsAcreditado('CLI_TIPO_CLIENTE_ALTA_RELACION_EKU_PARAM_TIPO_OPERACION')){ ?>
        <?php if($cli_tipo_cliente->getAltaMostrarBloqueRelacionEkuParamTipoOperacionCliTipoCliente()){ ?>
            <div class='relacion eku_param_tipo_operacion' clase='eku_param_tipo_operacion' padre='cli_tipo_cliente' padre_clase='CliTipoCliente' relacion='EkuParamTipoOperacionCliTipoCliente'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('EkuParamTipoOperacions') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_eku_param_tipo_operacions = $cli_tipo_cliente->getCantidadEkuParamTipoOperacionsXEkuParamTipoOperacionCliTipoCliente();
                        echo ($cantidad_eku_param_tipo_operacions > 0) ? '('.$cantidad_eku_param_tipo_operacions.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_cli_tipo_cliente_alta_relacion_eku_param_tipo_operacion_cli_tipo_cliente_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='eku_param_tipo_operacion_txt_buscar' id='eku_param_tipo_operacion_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('CLI_TIPO_CLIENTE_ALTA_RELACION_EKU_PARAM_TIPO_OPERACION_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_tipo_operacion/eku_param_tipo_operacion_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'eku_param_tipo_operacion', 'cli_tipo_cliente', <?php Gral::_echo($cli_tipo_cliente->getId()) ?>, 'CliTipoCliente', 'EkuParamTipoOperacionCliTipoCliente')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('eku_param_tipo_operacion') ?>'>
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

