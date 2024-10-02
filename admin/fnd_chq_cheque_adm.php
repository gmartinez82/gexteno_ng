<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'fnd_chq_cheque';
$db_nombre_pagina = 'fnd_chq_cheque_adm';


$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
FndChqCheque::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(FndChqCheque::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = FndChqCheque::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$fnd_chq_cheques = FndChqCheque::getFndChqChequesDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('FndChqCheque') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="fnd_chq_cheque">
              <?php include 'ajax/modulos/fnd_chq_cheque/fnd_chq_cheque_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="fnd_chq_cheque">
              <?php //include 'ajax/modulos/fnd_chq_cheque/fnd_chq_cheque_datos.php' ?>
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
    refreshAdmAll('fnd_chq_cheque', <?php echo $pagina_actual ?>);
</script>

