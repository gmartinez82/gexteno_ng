
	<?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_ALTA_RELACION_US_USUARIO')){ ?>
	<div class='relacion us_usuario' clase='us_usuario' padre='nov_novedad' padre_clase='NovNovedad' relacion='NovNovedadDestinatario'>

	<div class='titulo'>
            <?php Lang::_lang('UsUsuarios') ?>
            <?php 
            $cantidad_us_usuarios = count($nov_novedad->getUsUsuariosXNovNovedadDestinatario());
            echo ($cantidad_us_usuarios > 0) ? '('.$cantidad_us_usuarios.')' : '' ;
            ?>			 
	</div>

	<div class='buscador'>
            <input name='us_usuario_txt_buscar' id='us_usuario_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_ALTA_RELACION_US_USUARIO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/us_usuario/us_usuario_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'us_usuario', 'nov_novedad', <?php Gral::_echo($nov_novedad->getId()) ?>, 'NovNovedad', 'nov_novedad_destinatario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('UsUsuario') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

