<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'not_tipo_video';
$db_nombre_pagina = 'not_tipo_video_adm';


$criterio = new Criterio(NotTipoVideo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NotTipoVideo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(NotTipoVideo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = NotTipoVideo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$not_tipo_videos = NotTipoVideo::getNotTipoVideosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('NotTipoVideos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="not_tipo_video">
              <?php include 'ajax/modulos/not_tipo_video/not_tipo_video_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="not_tipo_video">
              <?php //include 'ajax/modulos/not_tipo_video/not_tipo_video_datos.php' ?>
          </div>

          <br />

        </div>

    </div>
    
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    
    <div class="div_modal"></div>
    <div class="div_modal_modal"></div>
    <div class="div_modal_modal_modal"></div>

</body>
</html>
<script type='text/javascript'>
    <?php Gral::_echo($mi_hash) ?>
    refreshAdmAll('not_tipo_video', <?php echo $pagina_actual ?>);
</script>

