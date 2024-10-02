
<?php

$identificador = 1;

?>
<div id="container_<?php echo $identificador ?>" class="masivo-bloque">
    <div id="filelist_<?php echo $identificador ?>"></div>
    <div class="comentario">
    <strong>Imagenes Masivas:</strong> Elija las imagenes que desea subir presionando "Seleccionar Imagenes", y luego presione "Subir Imagenes" para levantarlas al servidor</div>
    <br />
    <a id="pickfiles_<?php echo $identificador ?>" class="masivo-botones" href="javascript:;">Seleccionar Imagenes</a> 
    <a id="uploadfiles_<?php echo $identificador ?>" class="masivo-botones" href="javascript:;">Subir Imagenes</a>
    <a id="refresh_<?php echo $identificador ?>" class="masivo-botones" href="?id=<?php echo $os_orden_servicio->getId() ?>">Actualizar Pagina</a>
</div>

<script type="text/javascript">
// Custom example logic

function $up(id) {
    return document.getElementById(id);	
}

var uploader_<?php echo $identificador ?> = new plupload.Uploader({
    runtimes : 'gears,html5,flash,silverlight,browserplus',
    browse_button : 'pickfiles_<?php echo $identificador ?>',
    container: 'container_<?php echo $identificador ?>',
    max_file_size : '10mb',
    
        url : 'ajax/imagenes/upload_masivo.php?padre=<?php echo $os_orden_servicio->getId() ?>&clase=OsOrdenServicio',
    
    //resize : {width : 320, height : 240, quality : 90},
    flash_swf_url : '../../comps/plupload/js/plupload.flash.swf',
    silverlight_xap_url : '../../comps/plupload/js/plupload.silverlight.xap',
    filters : [
        {title : "Image files", extensions : "jpg,gif,png"},
        {title : "Zip files", extensions : "zip"}
    ]
});

uploader_<?php echo $identificador ?>.bind('Init', function(up, params) {
    //$up('filelist').innerHTML = "<div>Current runtime: " + params.runtime + "</div>";
});

uploader_<?php echo $identificador ?>.bind('FilesAdded', function(up, files) {
    for (var i in files) {
        $up('filelist_<?php echo $identificador ?>').innerHTML += '<div class="uno" id="' + files[i].id + '">' + files[i].name + ' (' + plupload.formatSize(files[i].size) + ') <b></b></div>';
    }
});

uploader_<?php echo $identificador ?>.bind('UploadProgress', function(up, file) {
    $up(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
});

$up('uploadfiles_<?php echo $identificador ?>').onclick = function() {
    uploader_<?php echo $identificador ?>.start();
    return false;
};

uploader_<?php echo $identificador ?>.init();
</script>

