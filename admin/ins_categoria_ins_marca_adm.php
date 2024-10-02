<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_categoria_ins_marca';
$db_nombre_pagina = 'ins_categoria_ins_marca_adm';


$criterio = new Criterio(InsCategoriaInsMarca::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsCategoriaInsMarca::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(InsCategoriaInsMarca::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = InsCategoriaInsMarca::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ins_categoria_ins_marcas = InsCategoriaInsMarca::getInsCategoriaInsMarcasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('InsCategoriaInsMarcas') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ins_categoria_ins_marca">
              <?php include 'ajax/modulos/ins_categoria_ins_marca/ins_categoria_ins_marca_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ins_categoria_ins_marca">
              <?php //include 'ajax/modulos/ins_categoria_ins_marca/ins_categoria_ins_marca_datos.php' ?>
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
    refreshAdmAll('ins_categoria_ins_marca', <?php echo $pagina_actual ?>);
</script>

