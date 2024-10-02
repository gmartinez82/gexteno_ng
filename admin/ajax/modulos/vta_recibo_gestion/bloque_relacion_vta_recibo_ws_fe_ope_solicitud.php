
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ALTA_RELACION_WS_FE_OPE_SOLICITUD')){ ?>
	<div class='relacion ws_fe_ope_solicitud' clase='ws_fe_ope_solicitud' padre='vta_recibo' padre_clase='VtaRecibo' relacion='VtaReciboWsFeOpeSolicitud'>

	<div class='titulo'>
            <?php Lang::_lang('WsFeOpeSolicituds') ?>
            <?php 
            $cantidad_ws_fe_ope_solicituds = count($vta_recibo->getWsFeOpeSolicitudsXVtaReciboWsFeOpeSolicitud());
            echo ($cantidad_ws_fe_ope_solicituds > 0) ? '('.$cantidad_ws_fe_ope_solicituds.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='ws_fe_ope_solicitud_txt_buscar' id='ws_fe_ope_solicitud_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ALTA_RELACION_WS_FE_OPE_SOLICITUD_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ws_fe_ope_solicitud/ws_fe_ope_solicitud_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ws_fe_ope_solicitud', 'vta_recibo', <?php Gral::_echo($vta_recibo->getId()) ?>, 'VtaRecibo', 'vta_recibo_ws_fe_ope_solicitud')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('WsFeOpeSolicitud') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

