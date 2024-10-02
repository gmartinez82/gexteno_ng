<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pan_ubi_estante';
$db_nombre_pagina = 'pan_ubi_estante_adm';


$criterio = new Criterio(PanUbiEstante::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PanUbiEstante::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PanUbiEstante::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PanUbiEstante::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pan_ubi_estantes = PanUbiEstante::getPanUbiEstantesDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PanUbiEstantes') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pan_ubi_estante">
              <?php include 'ajax/modulos/pan_ubi_estante/pan_ubi_estante_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pan_ubi_estante">
              <?php //include 'ajax/modulos/pan_ubi_estante/pan_ubi_estante_datos.php' ?>
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
    refreshAdmAll('pan_ubi_estante', <?php echo $pagina_actual ?>);
</script>

