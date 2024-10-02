<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'fnd_chq_cheque_gestion';
$db_nombre_pagina = 'fnd_chq_cheque_gestion';


$criterio = new Criterio(FndChqCheque::SES_CRITERIOS);
$criterio->addTabla('fnd_chq_cheque');
$criterio->setCriteriosInicial();


$pagina_actual = FndChqCheque::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

$fnd_chq_cheque_gestions = FndChqCheque::getFndChqChequesDesdeBackend($paginador, $criterio);
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

            <div class="div_listado_buscador" modulo="fnd_chq_cheque_gestion">
                <?php include 'ajax/modulos/fnd_chq_cheque_gestion/fnd_chq_cheque_gestion_buscador_top.php' ?>
            </div>

            <div class="div_listado_datos" modulo="fnd_chq_cheque_gestion">
                <?php //include 'ajax/modulos/fnd_chq_cheque_gestion/fnd_chq_cheque_gestion_datos.php' ?>
            </div>

            <br />

            </div>

    </div>
    <div id='pie'><?php include 'parciales/pie.php' ?></div>
    <div id="div_contextual"></div>
    <div class="div_modal"></div>

</body>
</html>
<script type='text/javascript'>
    <?php Gral::_echo($mi_hash) ?>
    refreshAdmAll('fnd_chq_cheque_gestion', <?php echo $pagina_actual ?>);
</script>

