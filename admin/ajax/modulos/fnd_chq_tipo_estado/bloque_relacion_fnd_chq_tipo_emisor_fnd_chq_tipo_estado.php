
	<?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_ESTADO_ALTA_RELACION_FND_CHQ_TIPO_EMISOR')){ ?>
	<div class='relacion fnd_chq_tipo_emisor' clase='fnd_chq_tipo_emisor' padre='fnd_chq_tipo_estado' padre_clase='FndChqTipoEstado' relacion='FndChqTipoEmisorFndChqTipoEstado'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('FndChqTipoEmisors') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_fnd_chq_tipo_emisors = $fnd_chq_tipo_estado->getCantidadFndChqTipoEmisorsXFndChqTipoEmisorFndChqTipoEstado();
                echo ($cantidad_fnd_chq_tipo_emisors > 0) ? '('.$cantidad_fnd_chq_tipo_emisors.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_fnd_chq_tipo_estado_alta_relacion_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='fnd_chq_tipo_emisor_txt_buscar' id='fnd_chq_tipo_emisor_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_ESTADO_ALTA_RELACION_FND_CHQ_TIPO_EMISOR_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/fnd_chq_tipo_emisor/fnd_chq_tipo_emisor_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'fnd_chq_tipo_emisor', 'fnd_chq_tipo_estado', <?php Gral::_echo($fnd_chq_tipo_estado->getId()) ?>, 'FndChqTipoEstado', 'FndChqTipoEmisorFndChqTipoEstado')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('fnd_chq_tipo_emisor') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

