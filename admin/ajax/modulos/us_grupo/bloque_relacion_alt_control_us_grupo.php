
	<?php if(UsCredencial::getEsAcreditado('US_GRUPO_ALTA_RELACION_ALT_CONTROL')){ ?>
	<div class='relacion alt_control' clase='alt_control' padre='us_grupo' padre_clase='UsGrupo' relacion='AltControlUsGrupo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('AltControls') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_alt_controls = $us_grupo->getCantidadAltControlsXAltControlUsGrupo();
                echo ($cantidad_alt_controls > 0) ? '('.$cantidad_alt_controls.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_us_grupo_alta_relacion_alt_control_us_grupo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='alt_control_txt_buscar' id='alt_control_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('US_GRUPO_ALTA_RELACION_ALT_CONTROL_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/alt_control/alt_control_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'alt_control', 'us_grupo', <?php Gral::_echo($us_grupo->getId()) ?>, 'UsGrupo', 'AltControlUsGrupo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('alt_control') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

