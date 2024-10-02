<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_oc_reclamo_destinatario';
$db_nombre_pagina = 'pde_oc_reclamo_destinatario_adm';


$criterio = new Criterio(PdeOcReclamoDestinatario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PdeOcReclamoDestinatario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PdeOcReclamoDestinatario::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PdeOcReclamoDestinatario::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$pde_oc_reclamo_destinatarios = PdeOcReclamoDestinatario::getPdeOcReclamoDestinatariosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeOcReclamoDestinatarios') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="pde_oc_reclamo_destinatario">
              <?php include 'ajax/modulos/pde_oc_reclamo_destinatario/pde_oc_reclamo_destinatario_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="pde_oc_reclamo_destinatario">
              <?php //include 'ajax/modulos/pde_oc_reclamo_destinatario/pde_oc_reclamo_destinatario_datos.php' ?>
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
    refreshAdmAll('pde_oc_reclamo_destinatario', <?php echo $pagina_actual ?>);
</script>

