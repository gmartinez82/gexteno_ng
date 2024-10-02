
    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GRAL_ZONA')){ ?>
        <?php if($cli_cliente->getAltaMostrarBloqueRelacionGralZonaCliCliente()){ ?>
            <div class='relacion gral_zona' clase='gral_zona' padre='cli_cliente' padre_clase='CliCliente' relacion='GralZonaCliCliente'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralZonas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_gral_zonas = $cli_cliente->getCantidadGralZonasXGralZonaCliCliente();
                        echo ($cantidad_gral_zonas > 0) ? '('.$cantidad_gral_zonas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_cli_cliente_alta_relacion_gral_zona_cli_cliente_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='gral_zona_txt_buscar' id='gral_zona_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GRAL_ZONA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_zona/gral_zona_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_zona', 'cli_cliente', <?php Gral::_echo($cli_cliente->getId()) ?>, 'CliCliente', 'GralZonaCliCliente')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_zona') ?>'>
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

