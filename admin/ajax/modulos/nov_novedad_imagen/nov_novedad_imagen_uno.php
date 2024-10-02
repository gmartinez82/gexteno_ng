
<div id="div_imagen_<?php Gral::_echo($imagen->getId()) ?>" class='imagen'>
    <img src='<?php echo Gral::getPath('path_http') ?>archivos/imagenes/<?php Gral::_echo($tabla) ?>_imagen/<?php Gral::_echo($imagen->getArchivo()) ?>' border='0' width="250">
</div>
<div class="loading" style="display:none;"><img src="imgs/loading.gif"></div>

<?php if($imagen->getDescripcion() != ''){ ?>
<div class="descripcion"><a href="<?php echo Gral::getPath('path_http') ?>archivos/imagenes/<?php Gral::_echo($tabla) ?>_imagen/<?php Gral::_echo($imagen->getArchivo()) ?>" target="_blank"><?php Gral::_echo($imagen->getDescripcion()) ?></a></div>
<?php }else{ ?>
<div class="sin-valor"><?php Lang::_lang('Agregue una descripcion a la imagen') ?></div>
<?php } ?>

<?php 
if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/nov_novedad_imagen/nov_novedad_imagen_uno_masinfo.php")){
    include Gral::getPathAbs()."admin/ajax/modulos/nov_novedad_imagen/nov_novedad_imagen_uno_masinfo.php"; 
}
?>

<?php if($imagen->getObservacion() != ''){ ?>
<div class="observacion"><?php Gral::_echo($imagen->getObservacion()) ?></div>
<?php }else{ ?>
<div class="sin-valor"><?php Lang::_lang('Agregue una observacion a la imagen') ?></div>
<?php } ?>


<div class="acciones">

    <div class="accion boton modificar" title="Editar Datos de la Imagen"><img src="imgs/btn_modi.gif"></div>
    <div class="accion boton eliminar" title="Eliminar la Imagen"><img src="imgs/btn_elim.gif"></div>	
    <div class="accion boton estado" title="Activo/Inactivo"><img src="imgs/btn_estado_<?php Gral::_echo($imagen->getEstado()) ?>.gif"></div>
    
    <div class="accion boton ver" title="Ver Imagen">
        <a href="<?php echo Gral::getPath('path_http') ?>archivos/imagenes/<?php Gral::_echo($tabla) ?>_imagen/<?php Gral::_echo($imagen->getArchivo()) ?>" target="_blank">
            <img src="imgs/btn_album_imagenes.png" width="22" />
        </a>
    </div>

</div>

