<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_categoria';
$db_nombre_pagina = 'ins_categoria_adm';


$criterio = new Criterio(InsCategoria::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsCategoria::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(InsCategoria::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = InsCategoria::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ins_categorias = InsCategoria::getInsCategoriasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('InsCategorias') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ins_categoria">
              <?php include 'ajax/modulos/ins_categoria/ins_categoria_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ins_categoria">
              <?php //include 'ajax/modulos/ins_categoria/ins_categoria_datos.php' ?>
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
    refreshAdmAll('ins_categoria', <?php echo $pagina_actual ?>);
</script>

