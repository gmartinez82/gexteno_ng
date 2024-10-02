<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_de_asch01_req';
$db_nombre_pagina = 'eku_de_asch01_req_adm';


$criterio = new Criterio(EkuDeAsch01Req::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuDeAsch01Req::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(EkuDeAsch01Req::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = EkuDeAsch01Req::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$eku_de_asch01_reqs = EkuDeAsch01Req::getEkuDeAsch01ReqsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuDeAsch01Reqs') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="eku_de_asch01_req">
              <?php include 'ajax/modulos/eku_de_asch01_req/eku_de_asch01_req_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="eku_de_asch01_req">
              <?php //include 'ajax/modulos/eku_de_asch01_req/eku_de_asch01_req_datos.php' ?>
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
    refreshAdmAll('eku_de_asch01_req', <?php echo $pagina_actual ?>);
</script>

