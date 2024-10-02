<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_c001_g_timb';
$db_nombre_pagina = 'eku_de_c001_g_timb_adm';


$criterio = new Criterio(EkuDeC001GTimb::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeC001GTimb::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(EkuDeC001GTimb::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = EkuDeC001GTimb::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$eku_de_c001_g_timbs = EkuDeC001GTimb::getEkuDeC001GTimbsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeC001GTimbs') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="eku_de_c001_g_timb">
              <?php include 'ajax/modulos/eku_de_c001_g_timb/eku_de_c001_g_timb_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="eku_de_c001_g_timb">
              <?php //include 'ajax/modulos/eku_de_c001_g_timb/eku_de_c001_g_timb_datos.php' ?>
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
    refreshAdmAll('eku_de_c001_g_timb', <?php echo $pagina_actual ?>);
</script>

