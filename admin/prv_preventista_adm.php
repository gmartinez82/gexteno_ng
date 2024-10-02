<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prv_preventista';
$db_nombre_pagina = 'prv_preventista_adm';


$criterio = new Criterio(PrvPreventista::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvPreventista::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PrvPreventista::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PrvPreventista::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$prv_preventistas = PrvPreventista::getPrvPreventistasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PrvPreventistas') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="prv_preventista">
              <?php include 'ajax/modulos/prv_preventista/prv_preventista_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="prv_preventista">
              <?php //include 'ajax/modulos/prv_preventista/prv_preventista_datos.php' ?>
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
    refreshAdmAll('prv_preventista', <?php echo $pagina_actual ?>);
</script>

