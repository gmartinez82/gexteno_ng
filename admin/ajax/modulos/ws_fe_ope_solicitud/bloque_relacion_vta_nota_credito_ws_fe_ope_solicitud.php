
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA_RELACION_VTA_NOTA_CREDITO')){ ?>
	<div class='relacion vta_nota_credito' clase='vta_nota_credito' padre='ws_fe_ope_solicitud' padre_clase='WsFeOpeSolicitud' relacion='VtaNotaCreditoWsFeOpeSolicitud'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaNotaCreditos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_nota_creditos = $ws_fe_ope_solicitud->getCantidadVtaNotaCreditosXVtaNotaCreditoWsFeOpeSolicitud();
                echo ($cantidad_vta_nota_creditos > 0) ? '('.$cantidad_vta_nota_creditos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_relacion_vta_nota_credito_ws_fe_ope_solicitud_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_nota_credito_txt_buscar' id='vta_nota_credito_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA_RELACION_VTA_NOTA_CREDITO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_nota_credito/vta_nota_credito_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_nota_credito', 'ws_fe_ope_solicitud', <?php Gral::_echo($ws_fe_ope_solicitud->getId()) ?>, 'WsFeOpeSolicitud', 'VtaNotaCreditoWsFeOpeSolicitud')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_nota_credito') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

