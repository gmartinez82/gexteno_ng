<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'eku_param_tipo_documento_asociado';
$db_nombre_pagina = 'eku_param_tipo_documento_asociado_adm';


$criterio = new Criterio(EkuParamTipoDocumentoAsociado::SES_CRITERIOS);
$criterio->addTrueInicialEnWhere();
EkuParamTipoDocumentoAsociado::setAplicarFiltrosDeAlcance($criterio);
$criterio->addTabla(EkuParamTipoDocumentoAsociado::GEN_TABLA);
$criterio->setCriteriosInicial();

$pagina_actual = EkuParamTipoDocumentoAsociado::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

//$eku_param_tipo_documento_asociados = EkuParamTipoDocumentoAsociado::getEkuParamTipoDocumentoAsociadosDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

    <div id='menu'><?php include 'parciales/menuh.php' ?></div>

    <div id='cuerpo'>
        <div class='adm_cuerpo_titulo'><?php Lang::_lang('EkuParamTipoDocumentoAsociados') ?> </div>
        <div class='contenedor central'>

          <div class="div_listado_buscador" modulo="eku_param_tipo_documento_asociado">
              <?php include 'ajax/modulos/eku_param_tipo_documento_asociado/eku_param_tipo_documento_asociado_buscador_top.php' ?>
          </div>

          <div class="div_listado_datos" modulo="eku_param_tipo_documento_asociado">
              <?php //include 'ajax/modulos/eku_param_tipo_documento_asociado/eku_param_tipo_documento_asociado_datos.php' ?>
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
    refreshAdmAll('eku_param_tipo_documento_asociado', <?php echo $pagina_actual ?>);
</script>

