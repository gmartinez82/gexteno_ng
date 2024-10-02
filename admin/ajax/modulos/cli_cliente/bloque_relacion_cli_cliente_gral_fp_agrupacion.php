
    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GRAL_FP_AGRUPACION')){ ?>
        <?php if($cli_cliente->getAltaMostrarBloqueRelacionCliClienteGralFpAgrupacion()){ ?>
            <div class='relacion gral_fp_agrupacion' clase='gral_fp_agrupacion' padre='cli_cliente' padre_clase='CliCliente' relacion='CliClienteGralFpAgrupacion'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralFpAgrupacions') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_gral_fp_agrupacions = $cli_cliente->getCantidadGralFpAgrupacionsXCliClienteGralFpAgrupacion();
                        echo ($cantidad_gral_fp_agrupacions > 0) ? '('.$cantidad_gral_fp_agrupacions.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_cli_cliente_alta_relacion_cli_cliente_gral_fp_agrupacion_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='gral_fp_agrupacion_txt_buscar' id='gral_fp_agrupacion_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_GRAL_FP_AGRUPACION_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_fp_agrupacion/gral_fp_agrupacion_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_fp_agrupacion', 'cli_cliente', <?php Gral::_echo($cli_cliente->getId()) ?>, 'CliCliente', 'CliClienteGralFpAgrupacion')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_fp_agrupacion') ?>'>
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

