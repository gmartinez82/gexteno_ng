
    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_CLI_RUBRO')){ ?>
        <?php if($cli_cliente->getAltaMostrarBloqueRelacionCliClienteCliRubro()){ ?>
            <div class='relacion cli_rubro' clase='cli_rubro' padre='cli_cliente' padre_clase='CliCliente' relacion='CliClienteCliRubro'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('CliRubros') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_cli_rubros = $cli_cliente->getCantidadCliRubrosXCliClienteCliRubro();
                        echo ($cantidad_cli_rubros > 0) ? '('.$cantidad_cli_rubros.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_cli_cliente_alta_relacion_cli_cliente_cli_rubro_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='cli_rubro_txt_buscar' id='cli_rubro_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_CLI_RUBRO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_rubro/cli_rubro_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'cli_rubro', 'cli_cliente', <?php Gral::_echo($cli_cliente->getId()) ?>, 'CliCliente', 'CliClienteCliRubro')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('cli_rubro') ?>'>
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

