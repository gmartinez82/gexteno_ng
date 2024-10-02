
	<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA_RELACION_NOT_NOTICIA_RELACIONADA')){ ?>
	<div class='relacion not_noticia_relacionada' clase='not_noticia_relacionada' padre='not_noticia' padre_clase='NotNoticia' relacion='NotRelacionada'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('NotNoticiaRelacionadas') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_not_noticia_relacionadas = $not_noticia->getCantidadNotNoticiasXNotRelacionada();
                echo ($cantidad_not_noticia_relacionadas > 0) ? '('.$cantidad_not_noticia_relacionadas.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_not_noticia_alta_relacion_not_relacionada_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='not_noticia_relacionada_txt_buscar' id='not_noticia_relacionada_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA_RELACION_NOT_NOTICIA_RELACIONADA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/not_noticia/not_noticia_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'not_noticia', 'not_noticia', <?php Gral::_echo($not_noticia->getId()) ?>, 'NotNoticia', 'NotRelacionada')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('not_noticia_relacionada') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

