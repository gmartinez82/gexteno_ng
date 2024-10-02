<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key = 'pde_recepcion_estadisticas_sucursal';
$widget_codigo = 'WIDGET_HOME_PDE_RECEPCION_ESTADISTICAS_SUCURSAL';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(Gral::VARS_GET, 'filtrar', 0);
if ($filtrar) {
    $txt_desde = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_desde', '');
    $txt_hasta = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_txt_hasta', '');
    $widget_cmb_pde_centro_recepcion_id = Gral::getVars(Gral::VARS_GET, 'widget_' . $widget_key . '_cmb_pde_centro_recepcion_id', 0);
    $widget_cmb_ins_categoria_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_ins_categoria_id', 0);
    $widget_cmb_ins_etiqueta_id = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_cmb_ins_etiqueta_id', 0);
    $widget_txt_texto = Gral::getVars(Gral::VARS_GET, 'widget_'.$widget_key.'_txt_texto', '');
    
    $txt_desde = Gral::getFechaToDb($txt_desde);
    $txt_hasta = Gral::getFechaToDb($txt_hasta);
} else {
    // ---------------------------------------------------------------------
    // se determinan rango de fechas del reporte (por default)
    // ---------------------------------------------------------------------
    $txt_desde = '2021-04-01';
    $txt_hasta = '2021-04-14';
    $txt_desde = date('Y-m-01'); // desde el primer dia del mes
    $txt_hasta = Date::sumarDias(date('Y-m-d'), 0);
    // si el dia del mes es menor a 3 se envia reporte del mes anterior
    if ((int) date('d') < 4) {
        $txt_desde = Date::getPrimeraFechaMesAnterior();
        $txt_hasta = Date::getUltimaFechaMesAnterior();
    }
    $txt_desde = Date::sumarDias(date('Y-m-d'), -1);
    $txt_hasta = date('Y-m-d');
    // ---------------------------------------------------------------------
    //$widget_cmb_pde_centro_recepcion_id = 1;
    $widget_txt_texto = '';
}

// ----------------------------------------------------------------------------
// Consulta PdeRecepcion
// ----------------------------------------------------------------------------
$criterio = new Criterio();
$criterio->addDistinct(true);

if ($txt_desde != '') {
    $criterio->add(PdeRecepcion::GEN_ATTR_CREADO, $txt_desde . ' 00:00:00', Criterio::MAYORIGUAL);
}
if ($txt_hasta != '') {
    $criterio->add(PdeRecepcion::GEN_ATTR_CREADO, $txt_hasta . ' 23:59:59', Criterio::MENORIGUAL);
}
if ($widget_cmb_pde_centro_recepcion_id != 0) {
    $criterio->add(PdeCentroRecepcion::GEN_ATTR_ID, $widget_cmb_pde_centro_recepcion_id, Criterio::IGUAL);
}
if ($widget_cmb_ins_categoria_id != 0) {
    $ins_categoria = InsCategoria::getOxId($widget_cmb_ins_categoria_id);
    $criterio->add(InsCategoria::GEN_ATTR_CODIGO, $ins_categoria->getCodigo(), Criterio::LIKE);
}
if ($widget_cmb_ins_etiqueta_id != 0) {
    $criterio->add(InsEtiqueta::GEN_ATTR_ID, $widget_cmb_ins_etiqueta_id, Criterio::IGUAL);
}
if($widget_txt_texto != ''){
    $criterio->add(InsInsumo::GEN_ATTR_DESCRIPCION, $widget_txt_texto, Criterio::LIKE);
}

$criterio->addTabla(PdeRecepcion::GEN_TABLA);
$criterio->addRealJoin(PdeCentroRecepcion::GEN_TABLA, PdeCentroRecepcion::GEN_ATTR_ID, PdeRecepcion::GEN_ATTR_PDE_CENTRO_RECEPCION_ID);
$criterio->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, PdeRecepcion::GEN_ATTR_INS_INSUMO_ID);
$criterio->addRealJoin(InsCategoria::GEN_TABLA, InsCategoria::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_CATEGORIA_ID);
if ($widget_cmb_ins_etiqueta_id != 0) {
    $criterio->addRealJoin(InsInsumoInsEtiqueta::GEN_TABLA, InsInsumoInsEtiqueta::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID);
    $criterio->addRealJoin(InsEtiqueta::GEN_TABLA, InsEtiqueta::GEN_ATTR_ID, InsInsumoInsEtiqueta::GEN_ATTR_INS_ETIQUETA_ID);
}
$criterio->addOrden(PdeRecepcion::GEN_ATTR_ID, Criterio::_DESC);
$criterio->setCriterios();
$pde_recepcions = PdeRecepcion::getPdeRecepcions(null, $criterio);
//Gral::prr($pde_recepcions);
//exit;

?>

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    <strong>Listado de recepciones de compras recibidas entre el <?php echo Gral::getFechaToWEB($txt_desde) ?> y <?php echo Gral::getFechaToWEB($txt_hasta) ?>.</strong>
</div>

<div class="datos">

    <div class="loading"></div>

    <?php if (count($pde_recepcions) > 0) { ?>
    
        <div class="bloque">
            <?php include "bloque_resumen_recepcions.php" ?>
        </div>

        <br />
        <br />
        <br />
    <?php } else { ?>
        <div style="font-size: 14px; font-weight: normal; color: #666666; text-align: left; padding: 20px 40px; background-color: #f4f4f4;">
            No hay datos registrados.
        </div>
    <?php } ?>

</div>


</div>
<script>

    $(function ($)
    {
        setInitWidget<?php echo $widget_key_camelizado ?>();
    });

    function setInitWidget<?php echo $widget_key_camelizado ?>()
    {
        setClick<?php echo $widget_key_camelizado ?>BtnBuscar();
    }

    function setClick<?php echo $widget_key_camelizado ?>BtnBuscar()
    {
        $("#widget_<?php echo $widget_key ?>_btn_buscar").unbind();
        $("#widget_<?php echo $widget_key ?>_btn_buscar").click(function ()
        {
            var elem = $(this);
            var form = $(this).parents('form');
            $.ajax(
                    {
                        type: 'GET',
                        url: "gen_widget/<?php echo $widget_codigo ?>/index.php",
                        data: form.serialize() + "&filtrar=1",
                        dataType: "html",
                        beforeSend: function (objeto) {
                            elem.parents('.cuerpo_widget .contenedor').find('.loading').html(img_loading);
                            elem.parents('.cuerpo_widget .contenedor').find('.canvas').hide();
                        },
                        success: function (data) {
                            elem.parents('.cuerpo_widget .contenedor').html(data);
                        },
                        error: function (objeto, quepaso, otroobj) {
                            //alert("errorx "+ objeto.status);
                        }
                    });
        });
    }
</script>
