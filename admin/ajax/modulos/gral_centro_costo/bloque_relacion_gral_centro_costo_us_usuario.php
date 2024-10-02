
	<?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_ALTA_RELACION_US_USUARIO')){ ?>
	<div class='relacion us_usuario' clase='us_usuario' padre='gral_centro_costo' padre_clase='GralCentroCosto' relacion='GralCentroCostoUsUsuario'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('UsUsuarios') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_us_usuarios = $gral_centro_costo->getCantidadUsUsuariosXGralCentroCostoUsUsuario();
                echo ($cantidad_us_usuarios > 0) ? '('.$cantidad_us_usuarios.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_gral_centro_costo_alta_relacion_gral_centro_costo_us_usuario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='us_usuario_txt_buscar' id='us_usuario_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('GRAL_CENTRO_COSTO_ALTA_RELACION_US_USUARIO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/us_usuario/us_usuario_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'us_usuario', 'gral_centro_costo', <?php Gral::_echo($gral_centro_costo->getId()) ?>, 'GralCentroCosto', 'GralCentroCostoUsUsuario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('us_usuario') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

