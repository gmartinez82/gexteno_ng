<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_nota_credito_pde_tributo';
$db_nombre_pagina = 'pde_nota_credito_pde_tributo_adm';


$criterio = new Criterio(PdeNotaCreditoPdeTributo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeNotaCreditoPdeTributo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PdeNotaCreditoPdeTributo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PdeNotaCreditoPdeTributo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pde_nota_credito_pde_tributos = PdeNotaCreditoPdeTributo::getPdeNotaCreditoPdeTributosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeNotaCreditoPdeTributo') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pde_nota_credito_pde_tributo">
              <?php include 'ajax/modulos/pde_nota_credito_pde_tributo/pde_nota_credito_pde_tributo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pde_nota_credito_pde_tributo">
              <?php //include 'ajax/modulos/pde_nota_credito_pde_tributo/pde_nota_credito_pde_tributo_datos.php' ?>
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
    refreshAdmAll('pde_nota_credito_pde_tributo', <?php echo $pagina_actual ?>);
</script>

