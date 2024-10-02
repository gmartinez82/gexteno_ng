
	<?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_ALTA_RELACION_FND_CAJERO')){ ?>
	<div class='relacion fnd_cajero' clase='fnd_cajero' padre='gral_caja' padre_clase='GralCaja' relacion='FndCajeroGralCaja'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('FndCajeros') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_fnd_cajeros = $gral_caja->getCantidadFndCajerosXFndCajeroGralCaja();
                echo ($cantidad_fnd_cajeros > 0) ? '('.$cantidad_fnd_cajeros.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_gral_caja_alta_relacion_fnd_cajero_gral_caja_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='fnd_cajero_txt_buscar' id='fnd_cajero_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_ALTA_RELACION_FND_CAJERO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/fnd_cajero/fnd_cajero_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'fnd_cajero', 'gral_caja', <?php Gral::_echo($gral_caja->getId()) ?>, 'GralCaja', 'FndCajeroGralCaja')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('fnd_cajero') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

