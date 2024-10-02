<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'per_persona_us_usuario';
$db_nombre_pagina = 'per_persona_us_usuario_adm';


$criterio = new Criterio(PerPersonaUsUsuario::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
PerPersonaUsUsuario::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(PerPersonaUsUsuario::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = PerPersonaUsUsuario::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$per_persona_us_usuarios = PerPersonaUsUsuario::getPerPersonaUsUsuariosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('PerPersonaUsUsuario') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="per_persona_us_usuario">
              <?php include 'ajax/modulos/per_persona_us_usuario/per_persona_us_usuario_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="per_persona_us_usuario">
              <?php //include 'ajax/modulos/per_persona_us_usuario/per_persona_us_usuario_datos.php' ?>
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
    refreshAdmAll('per_persona_us_usuario', <?php echo $pagina_actual ?>);
</script>

