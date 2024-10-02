<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_nota_credito_imagen';
$db_nombre_pagina = 'pde_nota_credito_imagen_adm';

$id = Gral::getVars(2, 'id', 0);
$pde_nota_credito = PdeNotaCredito::getOxId($id);
if(!$pde_nota_credito){
    return;
}

$c = new Criterio();
$c->addTabla('pde_nota_credito_imagen');
$c->addOrden('orden', 'asc');
$c->setCriterios();
$imagenes = $pde_nota_credito->getPdeNotaCreditoImagens(null, $c);

$clase = "PdeNotaCredito";
$tabla = "pde_nota_credito";
$padre = $pde_nota_credito->getId();

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
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeNotaCreditoImagens') ?> </div>
          <div class='contenedor central'>

                
            <div class="imagenes" padre="<?php Gral::_echo($padre) ?>" clase="<?php Gral::_echo($clase) ?>" tabla="<?php Gral::_echo($tabla) ?>">
                
                <div class="titulo">
                    <div class="label"><?php Lang::_lang('PdeNotaCredito') ?>:</div>
                    <div class="dato"><?php Gral::_echo($pde_nota_credito->getDescripcion()) ?></div>
                </div>
                <div class="botonera">
                    <div class="boton volver"><a href="<?php Gral::_echo(PdeNotaCredito::getInfoBtnVolver('url')) ?>"><?php Lang::_lang(PdeNotaCredito::getInfoBtnVolver('label')) ?></a></div>
                    <div class="boton editar"><a href="pde_nota_credito_alta.php?id=<?php Gral::_echo($pde_nota_credito->getId()) ?>"><?php Lang::_lang('Editar') ?> <strong><?php Gral::_echo($pde_nota_credito->getDescripcion()) ?></strong></a></div>
                </div>

                
                <?php include "ajax/modulos/pde_nota_credito_imagen/pde_nota_credito_imagen_masivo.php" ?>

                <div class="bloque-imagenes">
                    <?php foreach($imagenes as $imagen){ ?>
                        <div id="div_grupo_imagen_<?php Gral::_echo($imagen->getId()) ?>" class="uno" identificador="<?php Gral::_echo($imagen->getId()) ?>" >
                            <?php
                            include "ajax/modulos/pde_nota_credito_imagen/pde_nota_credito_imagen_uno.php";
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

