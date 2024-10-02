<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'cli_tipo_medio_digital';
$db_nombre_pagina = 'cli_tipo_medio_digital_adm';


$criterio = new Criterio(CliTipoMedioDigital::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
CliTipoMedioDigital::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(CliTipoMedioDigital::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = CliTipoMedioDigital::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$cli_tipo_medio_digitals = CliTipoMedioDigital::getCliTipoMedioDigitalsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('CliTipoMedioDigital') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="cli_tipo_medio_digital">
              <?php include 'ajax/modulos/cli_tipo_medio_digital/cli_tipo_medio_digital_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="cli_tipo_medio_digital">
              <?php //include 'ajax/modulos/cli_tipo_medio_digital/cli_tipo_medio_digital_datos.php' ?>
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
    refreshAdmAll('cli_tipo_medio_digital', <?php echo $pagina_actual ?>);
</script>

