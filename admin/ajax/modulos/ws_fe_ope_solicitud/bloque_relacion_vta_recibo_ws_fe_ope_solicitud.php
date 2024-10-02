
	<?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA_RELACION_VTA_RECIBO')){ ?>
	<div class='relacion vta_recibo' clase='vta_recibo' padre='ws_fe_ope_solicitud' padre_clase='WsFeOpeSolicitud' relacion='VtaReciboWsFeOpeSolicitud'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaRecibos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_recibos = $ws_fe_ope_solicitud->getCantidadVtaRecibosXVtaReciboWsFeOpeSolicitud();
                echo ($cantidad_vta_recibos > 0) ? '('.$cantidad_vta_recibos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ws_fe_ope_solicitud_alta_relacion_vta_recibo_ws_fe_ope_solicitud_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_recibo_txt_buscar' id='vta_recibo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_ALTA_RELACION_VTA_RECIBO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_recibo/vta_recibo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_recibo', 'ws_fe_ope_solicitud', <?php Gral::_echo($ws_fe_ope_solicitud->getId()) ?>, 'WsFeOpeSolicitud', 'VtaReciboWsFeOpeSolicitud')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_recibo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

