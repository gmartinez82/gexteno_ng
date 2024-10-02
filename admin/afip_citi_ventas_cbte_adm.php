<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'afip_citi_ventas_cbte';
$db_nombre_pagina = 'afip_citi_ventas_cbte_adm';


$criterio = new Criterio(AfipCitiVentasCbte::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AfipCitiVentasCbte::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(AfipCitiVentasCbte::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = AfipCitiVentasCbte::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$afip_citi_ventas_cbtes = AfipCitiVentasCbte::getAfipCitiVentasCbtesDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('AfipCitiVentasCbtes') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="afip_citi_ventas_cbte">
              <?php include 'ajax/modulos/afip_citi_ventas_cbte/afip_citi_ventas_cbte_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="afip_citi_ventas_cbte">
              <?php //include 'ajax/modulos/afip_citi_ventas_cbte/afip_citi_ventas_cbte_datos.php' ?>
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
    refreshAdmAll('afip_citi_ventas_cbte', <?php echo $pagina_actual ?>);
</script>

