
	<?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_RELACION_GRAL_SUCURSAL')){ ?>
	<div class='relacion gral_sucursal' clase='gral_sucursal' padre='pan_panol' padre_clase='PanPanol' relacion='GralSucursalPanPanol'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralSucursals') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_gral_sucursals = $pan_panol->getCantidadGralSucursalsXGralSucursalPanPanol();
                echo ($cantidad_gral_sucursals > 0) ? '('.$cantidad_gral_sucursals.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_pan_panol_alta_relacion_gral_sucursal_pan_panol_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='gral_sucursal_txt_buscar' id='gral_sucursal_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PAN_PANOL_ALTA_RELACION_GRAL_SUCURSAL_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_sucursal/gral_sucursal_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_sucursal', 'pan_panol', <?php Gral::_echo($pan_panol->getId()) ?>, 'PanPanol', 'GralSucursalPanPanol')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_sucursal') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

