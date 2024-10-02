<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pdi_comentario';
$db_nombre_pagina = 'pdi_comentario_adm';


$criterio = new Criterio(PdiComentario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdiComentario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PdiComentario::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PdiComentario::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pdi_comentarios = PdiComentario::getPdiComentariosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdiComentarios') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pdi_comentario">
              <?php include 'ajax/modulos/pdi_comentario/pdi_comentario_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pdi_comentario">
              <?php //include 'ajax/modulos/pdi_comentario/pdi_comentario_datos.php' ?>
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
    refreshAdmAll('pdi_comentario', <?php echo $pagina_actual ?>);
</script>

