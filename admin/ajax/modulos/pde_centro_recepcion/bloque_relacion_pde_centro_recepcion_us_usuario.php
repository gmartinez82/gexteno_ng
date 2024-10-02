
	<?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_ALTA_RELACION_US_USUARIO')){ ?>
	<div class='relacion us_usuario' clase='us_usuario' padre='pde_centro_recepcion' padre_clase='PdeCentroRecepcion' relacion='PdeCentroRecepcionUsUsuario'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('UsUsuarios') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_us_usuarios = $pde_centro_recepcion->getCantidadUsUsuariosXPdeCentroRecepcionUsUsuario();
                echo ($cantidad_us_usuarios > 0) ? '('.$cantidad_us_usuarios.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_pde_centro_recepcion_alta_relacion_pde_centro_recepcion_us_usuario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='us_usuario_txt_buscar' id='us_usuario_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_RECEPCION_ALTA_RELACION_US_USUARIO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/us_usuario/us_usuario_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'us_usuario', 'pde_centro_recepcion', <?php Gral::_echo($pde_centro_recepcion->getId()) ?>, 'PdeCentroRecepcion', 'PdeCentroRecepcionUsUsuario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('us_usuario') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

