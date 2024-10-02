<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gral_moneda';
$db_nombre_pagina = 'gral_moneda_adm';


$criterio = new Criterio(GralMoneda::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GralMoneda::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GralMoneda::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GralMoneda::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$gral_monedas = GralMoneda::getGralMonedasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GralMonedas') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="gral_moneda">
              <?php include 'ajax/modulos/gral_moneda/gral_moneda_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="gral_moneda">
              <?php //include 'ajax/modulos/gral_moneda/gral_moneda_datos.php' ?>
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
    refreshAdmAll('gral_moneda', <?php echo $pagina_actual ?>);
</script>

