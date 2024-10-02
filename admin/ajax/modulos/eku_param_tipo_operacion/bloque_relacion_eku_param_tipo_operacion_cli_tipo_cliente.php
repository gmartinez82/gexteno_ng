
    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_OPERACION_ALTA_RELACION_CLI_TIPO_CLIENTE')){ ?>
        <?php if($eku_param_tipo_operacion->getAltaMostrarBloqueRelacionEkuParamTipoOperacionCliTipoCliente()){ ?>
            <div class='relacion cli_tipo_cliente' clase='cli_tipo_cliente' padre='eku_param_tipo_operacion' padre_clase='EkuParamTipoOperacion' relacion='EkuParamTipoOperacionCliTipoCliente'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('CliTipoClientes') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_cli_tipo_clientes = $eku_param_tipo_operacion->getCantidadCliTipoClientesXEkuParamTipoOperacionCliTipoCliente();
                        echo ($cantidad_cli_tipo_clientes > 0) ? '('.$cantidad_cli_tipo_clientes.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_eku_param_tipo_operacion_alta_relacion_eku_param_tipo_operacion_cli_tipo_cliente_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='cli_tipo_cliente_txt_buscar' id='cli_tipo_cliente_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_OPERACION_ALTA_RELACION_CLI_TIPO_CLIENTE_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_tipo_cliente/cli_tipo_cliente_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'cli_tipo_cliente', 'eku_param_tipo_operacion', <?php Gral::_echo($eku_param_tipo_operacion->getId()) ?>, 'EkuParamTipoOperacion', 'EkuParamTipoOperacionCliTipoCliente')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('cli_tipo_cliente') ?>'>
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

