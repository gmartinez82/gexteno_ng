<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prv_domicilio';
$db_nombre_pagina = 'prv_domicilio_adm';


$criterio = new Criterio(PrvDomicilio::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrvDomicilio::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PrvDomicilio::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PrvDomicilio::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$prv_domicilios = PrvDomicilio::getPrvDomiciliosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PrvDomicilio') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="prv_domicilio">
              <?php include 'ajax/modulos/prv_domicilio/prv_domicilio_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="prv_domicilio">
              <?php //include 'ajax/modulos/prv_domicilio/prv_domicilio_datos.php' ?>
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
    refreshAdmAll('prv_domicilio', <?php echo $pagina_actual ?>);
</script>

