
	<?php if(UsCredencial::getEsAcreditado('US_CREDENCIAL_ALTA_RELACION_US_GRUPO')){ ?>
	<div class='relacion us_grupo' clase='us_grupo' padre='us_credencial' padre_clase='UsCredencial' relacion='UsAgrupador'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('UsGrupos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_us_grupos = $us_credencial->getCantidadUsGruposXUsAgrupador();
                echo ($cantidad_us_grupos > 0) ? '('.$cantidad_us_grupos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_us_credencial_alta_relacion_us_agrupador_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='us_grupo_txt_buscar' id='us_grupo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('US_CREDENCIAL_ALTA_RELACION_US_GRUPO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/us_grupo/us_grupo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'us_grupo', 'us_credencial', <?php Gral::_echo($us_credencial->getId()) ?>, 'UsCredencial', 'UsAgrupador')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('us_grupo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

