<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once '_autoload.php';

$db_nombre_objeto = 'vta_recibo_archivo';
$db_nombre_pagina = 'vta_recibo_archivo_adm';

$id = Gral::getVars(2, 'id', 0);
$vta_recibo = VtaRecibo::getOxId($id);
if(!$vta_recibo){
	return;
}

$c = new Criterio();
$c->addTabla('vta_recibo_archivo');
$c->addOrden('orden', 'asc');
$c->setCriterios();
$archivos = $vta_recibo->getVtaReciboArchivos(null, $c);

$clase = "VtaRecibo";
$tabla = "vta_recibo";
$padre = $vta_recibo->getId();

?>
<?php include 'parciales/head.php' ?>

<script type='text/javascript' src='../js/JQuery/AjaxUpload.2.0.min.js'></script>

<link href='../css/admin/archivos.css' rel='stylesheet' type='text/css' />
<script type='text/javascript' src='../js/admin/archivos.js'></script>

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
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('VtaReciboArchivos') ?> </div>
          <div class='contenedor central'>

            <div class="archivos" padre="<?php Gral::_echo($padre) ?>" clase="<?php Gral::_echo($clase) ?>" tabla="<?php Gral::_echo($tabla) ?>">

                <div class="titulo">
                    <div class="label"><?php Lang::_lang('VtaRecibo') ?>:</div>
                    <div class="dato"><?php Gral::_echo($vta_recibo->getDescripcion()) ?></div>
                </div>
                <div class="botonera">
                    <div class="boton volver"><a href="<?php Gral::_echo(VtaRecibo::getInfoBtnVolver('url')) ?>"><?php Lang::_lang(VtaRecibo::getInfoBtnVolver('label')) ?></a></div>
                    <div class="boton editar"><a href="vta_recibo_alta.php?id=<?php Gral::_echo($vta_recibo->getId()) ?>"><?php Lang::_lang('Editar') ?> <strong><?php Gral::_echo($vta_recibo->getDescripcion()) ?></strong></a></div>
                </div>

                <?php include "ajax/modulos/vta_recibo_archivo/vta_recibo_archivo_masivo.php" ?>

                <div class="bloque-archivos">
                    <?php foreach($archivos as $archivo){ ?>
                    <div id="div_grupo_archivo_<?php Gral::_echo($archivo->getId()) ?>" class="uno" identificador="<?php Gral::_echo($archivo->getId()) ?>" >
                        <?php
                        include "ajax/modulos/vta_recibo_archivo/vta_recibo_archivo_uno.php";
                        ?>
                    </div>
                    <?php } ?>
                </div>

                <div class="nuevo" identificador="0" >
                    <div id="div_archivo_nuevo" class="archivo">
                        <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/icn_agregar_imagen.png" width="50">
                        <div class="loading" style="display:none;"><img src="imgs/loading.gif"></div>
                    </div>
                    <div class="descripcion">Agregar archivo</div>
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

