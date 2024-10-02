
	<?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_ALTA_RELACION_GRAL_SUCURSAL')){ ?>
	<div class='relacion gral_sucursal' clase='gral_sucursal' padre='gral_caja' padre_clase='GralCaja' relacion='GralSucursalGralCaja'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralSucursals') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_gral_sucursals = $gral_caja->getCantidadGralSucursalsXGralSucursalGralCaja();
                echo ($cantidad_gral_sucursals > 0) ? '('.$cantidad_gral_sucursals.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_gral_caja_alta_relacion_gral_sucursal_gral_caja_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='gral_sucursal_txt_buscar' id='gral_sucursal_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_ALTA_RELACION_GRAL_SUCURSAL_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_sucursal/gral_sucursal_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_sucursal', 'gral_caja', <?php Gral::_echo($gral_caja->getId()) ?>, 'GralCaja', 'GralSucursalGralCaja')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_sucursal') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

