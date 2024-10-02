<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'not_noticia_leida';
$db_nombre_pagina = 'not_noticia_leida_adm';


$criterio = new Criterio(NotNoticiaLeida::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
NotNoticiaLeida::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(NotNoticiaLeida::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = NotNoticiaLeida::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$not_noticia_leidas = NotNoticiaLeida::getNotNoticiaLeidasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('NotNoticiaLeida') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="not_noticia_leida">
              <?php include 'ajax/modulos/not_noticia_leida/not_noticia_leida_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="not_noticia_leida">
              <?php //include 'ajax/modulos/not_noticia_leida/not_noticia_leida_datos.php' ?>
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
    refreshAdmAll('not_noticia_leida', <?php echo $pagina_actual ?>);
</script>

