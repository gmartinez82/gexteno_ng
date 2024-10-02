<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_param_condicion_anticipo';
$db_nombre_pagina = 'eku_param_condicion_anticipo_adm';


$criterio = new Criterio(EkuParamCondicionAnticipo::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamCondicionAnticipo::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(EkuParamCondicionAnticipo::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = EkuParamCondicionAnticipo::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$eku_param_condicion_anticipos = EkuParamCondicionAnticipo::getEkuParamCondicionAnticiposDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuParamCondicionAnticipos') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="eku_param_condicion_anticipo">
              <?php include 'ajax/modulos/eku_param_condicion_anticipo/eku_param_condicion_anticipo_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="eku_param_condicion_anticipo">
              <?php //include 'ajax/modulos/eku_param_condicion_anticipo/eku_param_condicion_anticipo_datos.php' ?>
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
    refreshAdmAll('eku_param_condicion_anticipo', <?php echo $pagina_actual ?>);
</script>

