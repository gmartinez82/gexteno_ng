<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'not_noticia';
$db_nombre_pagina = 'not_noticia_adm';


$criterio = new Criterio(NotNoticia::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NotNoticia::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(NotNoticia::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = NotNoticia::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$not_noticias = NotNoticia::getNotNoticiasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('NotNoticia') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="not_noticia">
              <?php include 'ajax/modulos/not_noticia/not_noticia_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="not_noticia">
              <?php //include 'ajax/modulos/not_noticia/not_noticia_datos.php' ?>
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
    refreshAdmAll('not_noticia', <?php echo $pagina_actual ?>);
</script>

