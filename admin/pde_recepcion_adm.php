<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_recepcion';
$db_nombre_pagina = 'pde_recepcion_adm';


$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeRecepcion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PdeRecepcion::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PdeRecepcion::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pde_recepcions = PdeRecepcion::getPdeRecepcionsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeRecepcions') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pde_recepcion">
              <?php include 'ajax/modulos/pde_recepcion/pde_recepcion_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pde_recepcion">
              <?php //include 'ajax/modulos/pde_recepcion/pde_recepcion_datos.php' ?>
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
    refreshAdmAll('pde_recepcion', <?php echo $pagina_actual ?>);
</script>

