
<?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA_VINCULO_NOT_RELACIONADA')){ ?>
<div class='vinculo not_relacionada' padre='not_noticia' hijo='not_relacionada' padre_id='<?php echo $not_noticia->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('NotRelacionadas') ?>
        <?php 
        $cantidad_not_relacionadas = count($not_noticia->getNotRelacionadas());
        echo ($cantidad_not_relacionadas > 0) ? '('.$cantidad_not_relacionadas.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='not_relacionada_txt_buscar' id='not_relacionada_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA_VINCULO_NOT_RELACIONADA_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/not_relacionada/not_relacionada_alta.php?not_noticia_id=<?php Gral::_echo($not_noticia->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'not_noticia', 'not_relacionada', <?php Gral::_echo($not_noticia->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('NotRelacionada') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

