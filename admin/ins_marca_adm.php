<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_marca';
$db_nombre_pagina = 'ins_marca_adm';


$criterio = new Criterio(InsMarca::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsMarca::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(InsMarca::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = InsMarca::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ins_marcas = InsMarca::getInsMarcasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('InsMarcas') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ins_marca">
              <?php include 'ajax/modulos/ins_marca/ins_marca_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ins_marca">
              <?php //include 'ajax/modulos/ins_marca/ins_marca_datos.php' ?>
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
    refreshAdmAll('ins_marca', <?php echo $pagina_actual ?>);
</script>

