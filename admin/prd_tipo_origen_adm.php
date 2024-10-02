<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'prd_tipo_origen';
$db_nombre_pagina = 'prd_tipo_origen_adm';


$criterio = new Criterio(PrdTipoOrigen::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PrdTipoOrigen::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PrdTipoOrigen::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PrdTipoOrigen::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$prd_tipo_origens = PrdTipoOrigen::getPrdTipoOrigensDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PrdTipoOrigens') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="prd_tipo_origen">
              <?php include 'ajax/modulos/prd_tipo_origen/prd_tipo_origen_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="prd_tipo_origen">
              <?php //include 'ajax/modulos/prd_tipo_origen/prd_tipo_origen_datos.php' ?>
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
    refreshAdmAll('prd_tipo_origen', <?php echo $pagina_actual ?>);
</script>

