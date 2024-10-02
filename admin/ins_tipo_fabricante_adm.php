<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'ins_tipo_fabricante';
$db_nombre_pagina = 'ins_tipo_fabricante_adm';


$criterio = new Criterio(InsTipoFabricante::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
InsTipoFabricante::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(InsTipoFabricante::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = InsTipoFabricante::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$ins_tipo_fabricantes = InsTipoFabricante::getInsTipoFabricantesDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('InsTipoFabricantes') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="ins_tipo_fabricante">
              <?php include 'ajax/modulos/ins_tipo_fabricante/ins_tipo_fabricante_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="ins_tipo_fabricante">
              <?php //include 'ajax/modulos/ins_tipo_fabricante/ins_tipo_fabricante_datos.php' ?>
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
    refreshAdmAll('ins_tipo_fabricante', <?php echo $pagina_actual ?>);
</script>

