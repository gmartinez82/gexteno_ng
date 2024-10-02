<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'per_persona';
$db_nombre_pagina = 'per_persona_adm';


$criterio = new Criterio(PerPersona::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerPersona::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PerPersona::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PerPersona::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$per_personas = PerPersona::getPerPersonasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PerPersonas') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="per_persona">
              <?php include 'ajax/modulos/per_persona/per_persona_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="per_persona">
              <?php //include 'ajax/modulos/per_persona/per_persona_datos.php' ?>
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
    refreshAdmAll('per_persona', <?php echo $pagina_actual ?>);
</script>

