
	<?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_MODULO_ALTA_RELACION_GEN_WIDGET')){ ?>
	<div class='relacion gen_widget' clase='gen_widget' padre='gen_widget_modulo' padre_clase='GenWidgetModulo' relacion='GenWidgetGenWidgetModulo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('GenWidgets') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_gen_widgets = $gen_widget_modulo->getCantidadGenWidgetsXGenWidgetGenWidgetModulo();
                echo ($cantidad_gen_widgets > 0) ? '('.$cantidad_gen_widgets.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_gen_widget_modulo_alta_relacion_gen_widget_gen_widget_modulo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='gen_widget_txt_buscar' id='gen_widget_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('GEN_WIDGET_MODULO_ALTA_RELACION_GEN_WIDGET_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gen_widget/gen_widget_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gen_widget', 'gen_widget_modulo', <?php Gral::_echo($gen_widget_modulo->getId()) ?>, 'GenWidgetModulo', 'GenWidgetGenWidgetModulo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gen_widget') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

