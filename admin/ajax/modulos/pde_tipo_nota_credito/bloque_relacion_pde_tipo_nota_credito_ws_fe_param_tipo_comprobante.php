
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_ALTA_RELACION_WS_FE_PARAM_TIPO_COMPROBANTE')){ ?>
	<div class='relacion ws_fe_param_tipo_comprobante' clase='ws_fe_param_tipo_comprobante' padre='pde_tipo_nota_credito' padre_clase='PdeTipoNotaCredito' relacion='PdeTipoNotaCreditoWsFeParamTipoComprobante'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('WsFeParamTipoComprobantes') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_ws_fe_param_tipo_comprobantes = $pde_tipo_nota_credito->getCantidadWsFeParamTipoComprobantesXPdeTipoNotaCreditoWsFeParamTipoComprobante();
                echo ($cantidad_ws_fe_param_tipo_comprobantes > 0) ? '('.$cantidad_ws_fe_param_tipo_comprobantes.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_pde_tipo_nota_credito_alta_relacion_pde_tipo_nota_credito_ws_fe_param_tipo_comprobante_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='ws_fe_param_tipo_comprobante_txt_buscar' id='ws_fe_param_tipo_comprobante_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_ALTA_RELACION_WS_FE_PARAM_TIPO_COMPROBANTE_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ws_fe_param_tipo_comprobante/ws_fe_param_tipo_comprobante_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ws_fe_param_tipo_comprobante', 'pde_tipo_nota_credito', <?php Gral::_echo($pde_tipo_nota_credito->getId()) ?>, 'PdeTipoNotaCredito', 'PdeTipoNotaCreditoWsFeParamTipoComprobante')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ws_fe_param_tipo_comprobante') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

