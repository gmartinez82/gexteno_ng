<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_insumo_imagen';
$db_nombre_pagina = 'ins_insumo_imagen_adm';

$id = Gral::getVars(2, 'id', 0);
$ins_insumo = InsInsumo::getOxId($id);
if(!$ins_insumo){
    return;
}

$c = new Criterio();
$c->add('estado', 1, Criterio::IGUAL);
$c->addTabla('ins_tipo_imagen');
$c->addOrden('orden', 'asc');
$c->setCriterios();
$ins_tipo_imagens = InsTipoImagen::getInsTipoImagens(null, $c);
    
$agrupacion_clase = "InsTipoImagen";
$agrupacion_tabla = "ins_tipo_imagen";

$clase = "InsInsumo";
$tabla = "ins_insumo";
$padre = $ins_insumo->getId();

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
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('InsInsumoImagens') ?> </div>
          <div class='contenedor central'>

                
            <div class="imagenes" padre="<?php Gral::_echo($padre) ?>" clase="<?php Gral::_echo($clase) ?>" tabla="<?php Gral::_echo($tabla) ?>"  agrupacion_clase="<?php Gral::_echo($agrupacion_clase) ?>" agrupacion_tabla="<?php Gral::_echo($agrupacion_tabla) ?>">
                
                <div class="titulo">
                    <div class="label"><?php Lang::_lang('InsInsumo') ?>:</div>
                    <div class="dato"><?php Gral::_echo($ins_insumo->getDescripcion()) ?></div>
                </div>
                <div class="botonera">
                    <div class="boton volver"><a href="<?php Gral::_echo(InsInsumo::getInfoBtnVolver('url')) ?>"><?php Lang::_lang(InsInsumo::getInfoBtnVolver('label')) ?></a></div>
                    <div class="boton editar"><a href="ins_insumo_alta.php?id=<?php Gral::_echo($ins_insumo->getId()) ?>"><?php Lang::_lang('Editar') ?> <strong><?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong></a></div>
                </div>

                
                <div class="imagenes-agrupaciones">
                    <?php 
                    foreach ($ins_tipo_imagens as $ins_tipo_imagen) { 
                        $c = new Criterio();
                        $c->add(InsInsumoImagen::GEN_ATTR_MIN_INS_TIPO_IMAGEN_ID, $ins_tipo_imagen->getId(), Criterio::IGUAL);
                        $c->addTabla('ins_insumo_imagen');
                        $c->addOrden('orden', 'asc');
                        $c->setCriterios();
                        $imagenes = $ins_insumo->getInsInsumoImagens(null, $c);

                        ?>
                        <div class="imagenes-agrupacion" identificador="<?php echo $ins_tipo_imagen->getId() ?>" codigo="<?php echo $ins_tipo_imagen->getCodigo() ?>">
                            <div class="imagenes-agrupacion-descripcion"><?php Lang::_lang('InsInsumoImagen') ?>: <?php echo $ins_tipo_imagen->getDescripcion() ?></div>
                            <div class="imagenes-agrupacion-observacion"><?php echo $ins_tipo_imagen->getObservacion() ?></div>

                            <br />

                            <?php include "ajax/modulos/ins_insumo_imagen/ins_insumo_imagen_masivo.php" ?>

                            <div class="imagenes-agrupacion-imagenes bloque-imagenes">
                                <?php foreach ($imagenes as $imagen) { ?>
                                    <div id="div_grupo_imagen_<?php Gral::_echo($imagen->getId()) ?>" class="uno" identificador="<?php Gral::_echo($imagen->getId()) ?>" >
                                        <?php
                                        include "ajax/modulos/ins_insumo_imagen/ins_insumo_imagen_uno.php";
                                        ?>
                                    </div>
                                <?php } ?>

                                <div class="nuevo" identificador="0" >
                                    <div id="div_imagen_nuevo_agrupado_<?php echo $ins_tipo_imagen->getId() ?>" class="imagen div_imagen_nuevo_agrupado">
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

