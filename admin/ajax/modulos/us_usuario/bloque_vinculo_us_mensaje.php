
<?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_VINCULO_US_MENSAJE')){ ?>
<div class='vinculo us_mensaje' padre='us_usuario' hijo='us_mensaje' padre_id='<?php echo $us_usuario->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('UsMensajes') ?>
        <?php 
        $cantidad_us_mensajes = count($us_usuario->getUsMensajes());
        echo ($cantidad_us_mensajes > 0) ? '('.$cantidad_us_mensajes.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='us_mensaje_txt_buscar' id='us_mensaje_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_VINCULO_US_MENSAJE_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/us_mensaje/us_mensaje_alta.php?us_usuario_id=<?php Gral::_echo($us_usuario->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'us_usuario', 'us_mensaje', <?php Gral::_echo($us_usuario->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('UsMensaje') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

