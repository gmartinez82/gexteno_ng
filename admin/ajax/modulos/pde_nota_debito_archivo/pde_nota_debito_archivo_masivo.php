<div id="container" class="masivo-bloque">
    <div id="filelist"></div>
    <div class="comentario">
    <strong>Subida Masiva:</strong> Elija los archivos que desea subir presionando "Seleccionar Archivos", y a continuacion presione "Subir Archivos" para levantar los archivos al servidor</div>
    <br />
    <a id="pickfiles" class="masivo-botones" href="javascript:;">Seleccionar Archivos</a> 
    <a id="uploadfiles" class="masivo-botones" href="javascript:;">Subir Archivos</a>
    <a id="refresh" class="masivo-botones" href="?id=<?php echo $pde_nota_debito->getId() ?>">Actualizar Pagina</a>
</div>

<script type="text/javascript">
// Custom example logic

function $up(id) {
    return document.getElementById(id);	
}


var uploader = new plupload.Uploader({
    runtimes : 'gears,html5,flash,silverlight,browserplus',
    browse_button : 'pickfiles',
    container: 'container',
    max_file_size : '10mb',
    url : 'ajax/archivos/upload_masivo.php?padre=<?php echo $pde_nota_debito->getId() ?>&clase=PdeNotaDebito',
    //resize : {width : 320, height : 240, quality : 90},
    flash_swf_url : '../../comps/plupload/js/plupload.flash.swf',
    silverlight_xap_url : '../../comps/plupload/js/plupload.silverlight.xap',
    filters : [
        {title : "Image files", extensions : "jpg,gif,png"},
        {title : "Zip files", extensions : "zip"},
        {title : "Otros files", extensions : "doc, docx, xls, xlsx, pdf, mp3"}
    ]
});

uploader.bind('Init', function(up, params) {
    //$up('filelist').innerHTML = "<div>Current runtime: " + params.runtime + "</div>";
});

uploader.bind('FilesAdded', function(up, files) {
    for (var i in files) {
        $up('filelist').innerHTML += '<div class="uno" id="' + files[i].id + '">' + files[i].name + ' (' + plupload.formatSize(files[i].size) + ') <b></b></div>';
    }
});

uploader.bind('UploadProgress', function(up, file) {
    $up(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
});

$up('uploadfiles').onclick = function() {
    uploader.start();
    return false;
};

uploader.init();
</script>

