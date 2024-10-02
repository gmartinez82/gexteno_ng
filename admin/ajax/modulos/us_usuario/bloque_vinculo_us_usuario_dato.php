
<?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_VINCULO_US_USUARIO_DATO')){ ?>
<div class='vinculo us_usuario_dato' padre='us_usuario' hijo='us_usuario_dato' padre_id='<?php echo $us_usuario->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('UsUsuarioDatos') ?>
        <?php 
        $cantidad_us_usuario_datos = count($us_usuario->getUsUsuarioDatos());
        echo ($cantidad_us_usuario_datos > 0) ? '('.$cantidad_us_usuario_datos.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='us_usuario_dato_txt_buscar' id='us_usuario_dato_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_VINCULO_US_USUARIO_DATO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/us_usuario_dato/us_usuario_dato_alta.php?us_usuario_id=<?php Gral::_echo($us_usuario->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'us_usuario', 'us_usuario_dato', <?php Gral::_echo($us_usuario->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('UsUsuarioDato') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

