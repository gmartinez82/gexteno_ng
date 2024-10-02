
	<?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_ALTA_RELACION_VTA_RECIBO')){ ?>
	<div class='relacion vta_recibo' clase='vta_recibo' padre='vta_tributo' padre_clase='VtaTributo' relacion='VtaReciboVtaTributo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaRecibos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_recibos = $vta_tributo->getCantidadVtaRecibosXVtaReciboVtaTributo();
                echo ($cantidad_vta_recibos > 0) ? '('.$cantidad_vta_recibos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_vta_tributo_alta_relacion_vta_recibo_vta_tributo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_recibo_txt_buscar' id='vta_recibo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_ALTA_RELACION_VTA_RECIBO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_recibo/vta_recibo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_recibo', 'vta_tributo', <?php Gral::_echo($vta_tributo->getId()) ?>, 'VtaTributo', 'VtaReciboVtaTributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_recibo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

