<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'xml_lenguaje_traduccion';
$db_nombre_pagina = 'xml_lenguaje_traduccion_adm';


$criterio = new Criterio(XmlLenguajeTraduccion::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
XmlLenguajeTraduccion::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(XmlLenguajeTraduccion::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = XmlLenguajeTraduccion::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$xml_lenguaje_traduccions = XmlLenguajeTraduccion::getXmlLenguajeTraduccionsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('XmlLenguajeTraduccion') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="xml_lenguaje_traduccion">
              <?php include 'ajax/modulos/xml_lenguaje_traduccion/xml_lenguaje_traduccion_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="xml_lenguaje_traduccion">
              <?php //include 'ajax/modulos/xml_lenguaje_traduccion/xml_lenguaje_traduccion_datos.php' ?>
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
    refreshAdmAll('xml_lenguaje_traduccion', <?php echo $pagina_actual ?>);
</script>

