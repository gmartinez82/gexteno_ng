<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'sld_slider_imagen';
$db_nombre_pagina = 'sld_slider_imagen_adm';

$id = Gral::getVars(2, 'id', 0);
$sld_slider = SldSlider::getOxId($id);
if(!$sld_slider){
    return;
}

$c = new Criterio();
$c->add('estado', 1, Criterio::IGUAL);
$c->addTabla('sld_tipo_imagen');
$c->addOrden('orden', 'asc');
$c->setCriterios();
$sld_tipo_imagens = SldTipoImagen::getSldTipoImagens(null, $c);
    
$agrupacion_clase = "SldTipoImagen";
$agrupacion_tabla = "sld_tipo_imagen";

$clase = "SldSlider";
$tabla = "sld_slider";
$padre = $sld_slider->getId();

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
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('SldSliderImagens') ?> </div>
          <div class='contenedor central'>

                
            <div class="imagenes" padre="<?php Gral::_echo($padre) ?>" clase="<?php Gral::_echo($clase) ?>" tabla="<?php Gral::_echo($tabla) ?>"  agrupacion_clase="<?php Gral::_echo($agrupacion_clase) ?>" agrupacion_tabla="<?php Gral::_echo($agrupacion_tabla) ?>">
                
                <div class="titulo">
                    <div class="label"><?php Lang::_lang('SldSlider') ?>:</div>
                    <div class="dato"><?php Gral::_echo($sld_slider->getDescripcion()) ?></div>
                </div>
                <div class="botonera">
                    <div class="boton volver"><a href="<?php Gral::_echo(SldSlider::getInfoBtnVolver('url')) ?>"><?php Lang::_lang(SldSlider::getInfoBtnVolver('label')) ?></a></div>
                    <div class="boton editar"><a href="sld_slider_alta.php?id=<?php Gral::_echo($sld_slider->getId()) ?>"><?php Lang::_lang('Editar') ?> <strong><?php Gral::_echo($sld_slider->getDescripcion()) ?></strong></a></div>
                </div>

                
                <div class="imagenes-agrupaciones">
                    <?php 
                    foreach ($sld_tipo_imagens as $sld_tipo_imagen) { 
                        $c = new Criterio();
                        $c->add(SldSliderImagen::GEN_ATTR_MIN_SLD_TIPO_IMAGEN_ID, $sld_tipo_imagen->getId(), Criterio::IGUAL);
                        $c->addTabla('sld_slider_imagen');
                        $c->addOrden('orden', 'asc');
                        $c->setCriterios();
                        $imagenes = $sld_slider->getSldSliderImagens(null, $c);

                        ?>
                        <div class="imagenes-agrupacion" identificador="<?php echo $sld_tipo_imagen->getId() ?>" codigo="<?php echo $sld_tipo_imagen->getCodigo() ?>">
                            <div class="imagenes-agrupacion-descripcion"><?php Lang::_lang('SldSliderImagen') ?>: <?php echo $sld_tipo_imagen->getDescripcion() ?></div>
                            <div class="imagenes-agrupacion-observacion"><?php echo $sld_tipo_imagen->getObservacion() ?></div>

                            <br />

                            <?php include "ajax/modulos/sld_slider_imagen/sld_slider_imagen_masivo.php" ?>

                            <div class="imagenes-agrupacion-imagenes bloque-imagenes">
                                <?php foreach ($imagenes as $imagen) { ?>
                                    <div id="div_grupo_imagen_<?php Gral::_echo($imagen->getId()) ?>" class="uno" identificador="<?php Gral::_echo($imagen->getId()) ?>" >
                                        <?php
                                        include "ajax/modulos/sld_slider_imagen/sld_slider_imagen_uno.php";
                                        ?>
                                    </div>
                                <?php } ?>

                                <div class="nuevo" identificador="0" >
                                    <div id="div_imagen_nuevo_agrupado_<?php echo $sld_tipo_imagen->getId() ?>" class="imagen div_imagen_nuevo_agrupado">
                                        <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/icn_agregar_imagen.png" width="50">
                                        <div class="loading" style="display:none;"><img src="imgs/loading.gif"></div>
                                    </div>
                                    <div class="descripcion">Agregar Imagen</div>
                                </div>

                            </div>


                        </div>                        

                    <?php } ?>
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

