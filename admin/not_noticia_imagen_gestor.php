<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'not_noticia_imagen';
$db_nombre_pagina = 'not_noticia_imagen_adm';

$id = Gral::getVars(2, 'id', 0);
$not_noticia = NotNoticia::getOxId($id);
if(!$not_noticia){
    return;
}

$c = new Criterio();
$c->addTabla('not_noticia_imagen');
$c->addOrden('orden', 'asc');
$c->setCriterios();
$imagenes = $not_noticia->getNotNoticiaImagens(null, $c);

$clase = "NotNoticia";
$tabla = "not_noticia";
$padre = $not_noticia->getId();

?>
<?php include 'parciales/head.php' ?>

<script type='text/javascript' src='../js/JQuery/AjaxUpload.2.0.min.js'></script>

<link href='../css/admin/imagenes.css' rel='stylesheet' type='text/css' />
<script type='text/javascript' src='../js/admin/imagenes.js'></script>

<script type='text/javascript' src='<?php echo Gral::GetPath('path_http') ?>comps/plupload/js/plupload.js'></script>
<script type='text/javascript' src='<?php echo Gral::GetPath('path_http') ?>comps/plupload/js/plupload.gears.js'></script>
<script type='text/javascript' src='<?php echo Gral::GetPath('path_http') ?>comps/plupload/js/plupload.silverlight.js'></script>
<script type='text/javascript' src='<?php echo Gral::GetPath('path_http') ?>comps/plupload/js/plupload.flash.js'></script>
<script type='text/javascript' src='<?php echo Gral::GetPath('path_http') ?>comps/plupload/js/plupload.browserplus.js'></script>
<script type='text/javascript' src='<?php echo Gral::GetPath('path_http') ?>comps/plupload/js/plupload.html4.js'></script>
<script type='text/javascript' src='<?php echo Gral::GetPath('path_http') ?>comps/plupload/js/plupload.html5.js'></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>
    <form id='formu' name='formu' method='post' action=''>
    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('NotNoticiaImagen') ?> </div>
          <div class='contenedor central'>

                
            <div class="imagenes" padre="<?php Gral::_echo($padre) ?>" clase="<?php Gral::_echo($clase) ?>" tabla="<?php Gral::_echo($tabla) ?>">
                
                <div class="titulo">
                    <div class="label"><?php Lang::_lang('NotNoticia') ?>:</div>
                    <div class="dato"><?php Gral::_echo($not_noticia->getDescripcion()) ?></div>
                </div>
                <div class="botonera">
                    <div class="boton volver"><a href="<?php Gral::_echo(NotNoticia::getInfoBtnVolver('url')) ?>"><?php Lang::_lang(NotNoticia::getInfoBtnVolver('label')) ?></a></div>
                    <div class="boton editar"><a href="not_noticia_alta.php?id=<?php Gral::_echo($not_noticia->getId()) ?>"><?php Lang::_lang('Editar') ?> <strong><?php Gral::_echo($not_noticia->getDescripcion()) ?></strong></a></div>
                </div>

                
                <?php include "ajax/modulos/not_noticia_imagen/not_noticia_imagen_masivo.php" ?>

                <div class="bloque-imagenes">
                    <?php foreach($imagenes as $imagen){ ?>
                        <div id="div_grupo_imagen_<?php Gral::_echo($imagen->getId()) ?>" class="uno" identificador="<?php Gral::_echo($imagen->getId()) ?>" >
                            <?php
                            include "ajax/modulos/not_noticia_imagen/not_noticia_imagen_uno.php";
                            ?>
                        </div>
                    <?php } ?>
                    
                    <div class="nuevo" identificador="0" >
                        <div id="div_imagen_nuevo" class="imagen">
                            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/icn_agregar_imagen.png" width="50">
                            <div class="loading" style="display:none;"><img src="imgs/loading.gif"></div>
                        </div>
                        <div class="descripcion">Agregar Imagen</div>
                    </div>

                </div>
                

            </div>

        </div>

    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>

</form>
</body>
</html>

