<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'us_usuario_auditoria';
$db_nombre_pagina = 'us_usuario_auditoria_adm';


$criterio = new Criterio(UsUsuarioAuditoria::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
UsUsuarioAuditoria::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(UsUsuarioAuditoria::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = UsUsuarioAuditoria::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$us_usuario_auditorias = UsUsuarioAuditoria::getUsUsuarioAuditoriasDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('UsUsuarioAuditorias') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="us_usuario_auditoria">
              <?php include 'ajax/modulos/us_usuario_auditoria/us_usuario_auditoria_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="us_usuario_auditoria">
              <?php //include 'ajax/modulos/us_usuario_auditoria/us_usuario_auditoria_datos.php' ?>
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
    refreshAdmAll('us_usuario_auditoria', <?php echo $pagina_actual ?>);
</script>

