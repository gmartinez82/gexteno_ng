
<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA_VINCULO_NOT_VIDEO')){ ?>
<div class='vinculo not_video' padre='not_noticia' hijo='not_video' padre_id='<?php echo $not_noticia->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('NotVideos') ?>
        <?php 
        $cantidad_not_videos = count($not_noticia->getNotVideos());
        echo ($cantidad_not_videos > 0) ? '('.$cantidad_not_videos.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='not_video_txt_buscar' id='not_video_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA_VINCULO_NOT_VIDEO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/not_video/not_video_alta.php?not_noticia_id=<?php Gral::_echo($not_noticia->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'not_noticia', 'not_video', <?php Gral::_echo($not_noticia->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('NotVideo') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

