
	<?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_ALTA_RELACION_FND_CHQ_TIPO_ESTADO')){ ?>
	<div class='relacion fnd_chq_tipo_estado' clase='fnd_chq_tipo_estado' padre='fnd_chq_tipo_emisor' padre_clase='FndChqTipoEmisor' relacion='FndChqTipoEmisorFndChqTipoEstado'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('FndChqTipoEstados') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_fnd_chq_tipo_estados = $fnd_chq_tipo_emisor->getCantidadFndChqTipoEstadosXFndChqTipoEmisorFndChqTipoEstado();
                echo ($cantidad_fnd_chq_tipo_estados > 0) ? '('.$cantidad_fnd_chq_tipo_estados.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_fnd_chq_tipo_emisor_alta_relacion_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='fnd_chq_tipo_estado_txt_buscar' id='fnd_chq_tipo_estado_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_ALTA_RELACION_FND_CHQ_TIPO_ESTADO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/fnd_chq_tipo_estado/fnd_chq_tipo_estado_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'fnd_chq_tipo_estado', 'fnd_chq_tipo_emisor', <?php Gral::_echo($fnd_chq_tipo_emisor->getId()) ?>, 'FndChqTipoEmisor', 'FndChqTipoEmisorFndChqTipoEstado')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('fnd_chq_tipo_estado') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

