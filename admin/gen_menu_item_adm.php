<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gen_menu_item';
$db_nombre_pagina = 'gen_menu_item_adm';


$criterio = new Criterio(GenMenuItem::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenMenuItem::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GenMenuItem::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GenMenuItem::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$gen_menu_items = GenMenuItem::getGenMenuItemsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GenMenuItem') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="gen_menu_item">
              <?php include 'ajax/modulos/gen_menu_item/gen_menu_item_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="gen_menu_item">
              <?php //include 'ajax/modulos/gen_menu_item/gen_menu_item_datos.php' ?>
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
    refreshAdmAll('gen_menu_item', <?php echo $pagina_actual ?>);
</script>

