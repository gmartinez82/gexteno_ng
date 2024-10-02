
	<?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_ALTA_RELACION_GRAL_DIA')){ ?>
	<div class='relacion gral_dia' clase='gral_dia' padre='gral_ruta' padre_clase='GralRuta' relacion='GralRutaGralDia'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralDias') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_gral_dias = $gral_ruta->getCantidadGralDiasXGralRutaGralDia();
                echo ($cantidad_gral_dias > 0) ? '('.$cantidad_gral_dias.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_gral_ruta_alta_relacion_gral_ruta_gral_dia_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='gral_dia_txt_buscar' id='gral_dia_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_ALTA_RELACION_GRAL_DIA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_dia/gral_dia_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_dia', 'gral_ruta', <?php Gral::_echo($gral_ruta->getId()) ?>, 'GralRuta', 'GralRutaGralDia')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_dia') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

