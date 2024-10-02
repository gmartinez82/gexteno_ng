<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'gen_arbol_tipo';
$db_nombre_pagina = 'gen_arbol_tipo_adm';


$criterio = new Criterio(GenArbolTipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
GenArbolTipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(GenArbolTipo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = GenArbolTipo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$gen_arbol_tipos = GenArbolTipo::getGenArbolTiposDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('GenArbolTipo') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="gen_arbol_tipo">
              <?php include 'ajax/modulos/gen_arbol_tipo/gen_arbol_tipo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="gen_arbol_tipo">
              <?php //include 'ajax/modulos/gen_arbol_tipo/gen_arbol_tipo_datos.php' ?>
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
    refreshAdmAll('gen_arbol_tipo', <?php echo $pagina_actual ?>);
</script>

