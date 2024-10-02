
<div id="div_archivo_<?php Gral::_echo($archivo->getId()) ?>" class='archivo'>
    <img src='<?php echo Gral::getPath('path_http') ?>archivos/archivos/iconos/btn_<?php Gral::_echo($archivo->getTipo()) ?>.gif' border='0'>
</div>
<div class="loading" style="display:none;"><img src="imgs/loading.gif"></div>

<?php if($archivo->getDescripcion() != ''){ ?>
<div class="descripcion"><a href="<?php echo Gral::getPath('path_http') ?>archivos/archivos/pde_factura_archivo/<?php Gral::_echo($archivo->getArchivo()) ?>" target="_blank"><?php Gral::_echo($archivo->getDescripcion()) ?></a></div>
<?php }else{ ?>
<div class="sin-valor"><?php Lang::_lang('Agregue una descripcion al archivo') ?></div>
<?php } ?>

<?php 
if(file_exists(Gral::getPathAbs()."admin/ajax/modulos/pde_factura_archivo/pde_factura_archivo_uno_masinfo.php")){
    include Gral::getPathAbs()."admin/ajax/modulos/pde_factura_archivo/pde_factura_archivo_uno_masinfo.php"; 
}
?>

<?php if($archivo->getObservacion() != ''){ ?>
<div class="observacion"><?php Gral::_echo($archivo->getObservacion()) ?></div>
<?php }else{ ?>
<div class="sin-valor"><?php Lang::_lang('Agregue una observacion al archivo') ?></div>
<?php } ?>

<div class="acciones">

    <div class="accion boton modificar" title="Editar Datos del Archivo"><img src="imgs/btn_modi.gif"></div>
    <div class="accion boton eliminar" title="Eliminar el Archivo"><img src="imgs/btn_elim.gif"></div>	
    <div class="accion boton estado" title="Activo/Inactivo"><img src="imgs/btn_estado_<?php Gral::_echo($archivo->getEstado()) ?>.gif"></div>

    <div class="accion boton ver" title="Ver Archivo">
        <a href="<?php echo Gral::getPath('path_http') ?>archivos/archivos/pde_factura_archivo/<?php Gral::_echo($archivo->getArchivo()) ?>" target="_blank">
            <img src="imgs/btn_album_archivos.png" width="18" />
        </a>
    </div>

</div>

