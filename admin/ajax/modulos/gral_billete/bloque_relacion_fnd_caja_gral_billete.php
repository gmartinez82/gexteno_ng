
	<?php if(UsCredencial::getEsAcreditado('GRAL_BILLETE_ALTA_RELACION_FND_CAJA')){ ?>
	<div class='relacion fnd_caja' clase='fnd_caja' padre='gral_billete' padre_clase='GralBillete' relacion='FndCajaGralBillete'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('FndCajas') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_fnd_cajas = $gral_billete->getCantidadFndCajasXFndCajaGralBillete();
                echo ($cantidad_fnd_cajas > 0) ? '('.$cantidad_fnd_cajas.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_gral_billete_alta_relacion_fnd_caja_gral_billete_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='fnd_caja_txt_buscar' id='fnd_caja_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('GRAL_BILLETE_ALTA_RELACION_FND_CAJA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/fnd_caja/fnd_caja_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'fnd_caja', 'gral_billete', <?php Gral::_echo($gral_billete->getId()) ?>, 'GralBillete', 'FndCajaGralBillete')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('fnd_caja') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

