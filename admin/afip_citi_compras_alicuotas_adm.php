<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'afip_citi_compras_alicuotas';
$db_nombre_pagina = 'afip_citi_compras_alicuotas_adm';


$criterio = new Criterio(AfipCitiComprasAlicuotas::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AfipCitiComprasAlicuotas::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(AfipCitiComprasAlicuotas::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = AfipCitiComprasAlicuotas::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$afip_citi_compras_alicuotass = AfipCitiComprasAlicuotas::getAfipCitiComprasAlicuotassDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('AfipCitiComprasAlicuotass') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="afip_citi_compras_alicuotas">
              <?php include 'ajax/modulos/afip_citi_compras_alicuotas/afip_citi_compras_alicuotas_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="afip_citi_compras_alicuotas">
              <?php //include 'ajax/modulos/afip_citi_compras_alicuotas/afip_citi_compras_alicuotas_datos.php' ?>
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
    refreshAdmAll('afip_citi_compras_alicuotas', <?php echo $pagina_actual ?>);
</script>

