<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'alt_control_us_usuario';
$db_nombre_pagina = 'alt_control_us_usuario_adm';


$criterio = new Criterio(AltControlUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
AltControlUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(AltControlUsUsuario::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = AltControlUsUsuario::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$alt_control_us_usuarios = AltControlUsUsuario::getAltControlUsUsuariosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('AltControlUsUsuario') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="alt_control_us_usuario">
              <?php include 'ajax/modulos/alt_control_us_usuario/alt_control_us_usuario_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="alt_control_us_usuario">
              <?php //include 'ajax/modulos/alt_control_us_usuario/alt_control_us_usuario_datos.php' ?>
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
    refreshAdmAll('alt_control_us_usuario', <?php echo $pagina_actual ?>);
</script>

