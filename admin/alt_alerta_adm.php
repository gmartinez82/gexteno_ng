<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'alt_alerta';
$db_nombre_pagina = 'alt_alerta_adm';


$criterio = new Criterio(AltAlerta::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AltAlerta::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(AltAlerta::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = AltAlerta::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$alt_alertas = AltAlerta::getAltAlertasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('AltAlerta') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="alt_alerta">
              <?php include 'ajax/modulos/alt_alerta/alt_alerta_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="alt_alerta">
              <?php //include 'ajax/modulos/alt_alerta/alt_alerta_datos.php' ?>
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
    refreshAdmAll('alt_alerta', <?php echo $pagina_actual ?>);
</script>

