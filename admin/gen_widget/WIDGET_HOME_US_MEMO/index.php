<?php
include_once '_autoload.php';
$user = UsUsuario::autenticado();

$widget_key = 'widget_home_us_demo';
$widget_codigo = 'WIDGET_HOME_US_MEMO';
$widget_key_camelizado = Gral::setDbCamelizar($widget_key, '_');

$filtrar = Gral::getVars(2, 'filtrar', 0);
if ($filtrar) {
    // ---------------------------------------------------------------------
    // se recuperan filtros elegidos pro el usuario
    // ---------------------------------------------------------------------
    $desde = Gral::getVars(2, 'widget_us_memo_txt_desde', '');
    $hasta = Gral::getVars(2, 'widget_us_memo_txt_hasta', '');
    $widget_us_memo_cmb_us_memo_tipo_id = Gral::getVars(2, 'widget_us_memo_cmb_us_memo_tipo_id', -1);
    $widget_us_memo_cmb_us_memo_tipo_estado_activo = Gral::getVars(2, 'widget_us_memo_cmb_us_memo_tipo_estado_activo', -1);
    $widget_us_memo_txt_buscar = Gral::getVars(2, 'widget_us_memo_txt_buscar', '');
    $widget_us_memo_cmb_us_memo_us_usuario_id = Gral::getVars(2, 'widget_us_memo_cmb_us_memo_us_usuario_id', 0);


    $desde = Gral::getFechaToDb($desde);
    $hasta = Gral::getFechaToDb($hasta);
} else {
    // ---------------------------------------------------------------------
    // se determinan rango de fechas del reporte (por default)
    // ---------------------------------------------------------------------
    $desde = '2019-01-01';
    $hasta = '2019-01-31';
    $desde = Date::sumarDias(date('Y-m-d'), -180);
    $hasta = date('Y-m-d');
    // ---------------------------------------------------------------------

    $us_memo_tipo = UsMemoTipo::getOxCodigo(UsMemoTipoEstado::TIPO_EN_CURSO);

    $widget_us_memo_cmb_us_memo_tipo_id = -1;
    $widget_us_memo_cmb_us_memo_tipo_estado_activo = 1;
    $widget_us_memo_txt_buscar = '';
}


// ---------------------------------------------------------------------
// se obtienen las notas
// ---------------------------------------------------------------------
//$user = UsUsuario::getOxId(26);
$us_memos = UsMemo::getUsMemosDelUsuario($user, $desde, $hasta, $widget_us_memo_cmb_us_memo_tipo_id, $widget_us_memo_txt_buscar, $widget_us_memo_cmb_us_memo_tipo_estado_activo, $widget_us_memo_cmb_us_memo_us_usuario_id);
//Gral::prr($us_memos);

$us_memo_tipo_estados = UsMemoTipoEstado::getUsMemoTipoEstados(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));
?>
<link href='<?php echo Gral::getPath('path_http') ?>admin/gen_widget/<?php echo $widget_codigo ?>/css/widget.css?<?php echo date('dH') ?>' rel='stylesheet' type='text/css' />

<div class="buscador">
    <?php include "parts/buscador.php"; ?>
</div>

<div class="subtitulo">
    Notas del usuario registradas entre el <?php echo Gral::getFechaToWEB($desde) ?> y <?php echo Gral::getFechaToWEB($hasta) ?>.<br />
</div>

<div class="resultados">

    <div class="us-memo-botonera">
        <button type="button" class="boton btn_agregar_us_memo" id="btn_agregar_us_memo" name="btn_agregar_us_memo">Agregar nueva Nota</button>
    </div>

    <?php if (count($us_memos) > 0) { ?>
        <div class="us-memos">
            <?php
            foreach ($us_memos as $us_memo) {
                $us_memo_tipo_estado = $us_memo->getUsMemoTipoEstado();
                ?>
                <div class="us-memo <?php echo($us_memo_tipo_estado->getCodigo()) ?>" identificador="<?php echo($us_memo->getId()) ?>">

                    <div class="us-memo-tipo-estado <?php echo($us_memo_tipo_estado->getCodigo()) ?>">
                        <?php Gral::_echo($us_memo_tipo_estado->getDescripcion()) ?>
                    </div>

                    <div class="us-memo-botonera">
                        <img class="boton-uno editar" title="Editar Nota" src="<?php echo Gral::getPath('path_http') ?>admin/imgs/btn_modi.gif" width="17">

                        <?php foreach ($us_memo_tipo_estados as $us_memo_tipo_estado) { ?>
                            <img class="boton-uno cambiar-estado estado-<?php echo $us_memo_tipo_estado->getCodigo() ?>" title="Cambiar a <?php echo $us_memo_tipo_estado->getDescripcion() ?>" src="<?php echo Gral::getPath('path_http') ?>admin/imgs/us_memo_tipo_estado/<?php echo $us_memo_tipo_estado->getCodigo() ?>.png" us_memo_tipo_estado_id="<?php echo $us_memo_tipo_estado->getId() ?>" us_memo_tipo_estado_codigo="<?php echo $us_memo_tipo_estado->getCodigo() ?>">                        
                        <?php } ?>

                    </div>

                    <div class="us-memo-creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWEB($us_memo->getCreado())) ?> - 
                        <?php Gral::_echo($us_memo->getCreadoPorDescripcion()) ?>
                    </div>

                    <div class="us-memo-descripcion">
                        <?php Gral::_echo($us_memo->getDescripcion()) ?>
                    </div>    

                    <div class="us-memo-observacion">
                        <span class="us-memo-tipo"><?php Gral::_echo($us_memo->getUsMemoTipo()->getDescripcion()) ?></span>
                        <?php Gral::_echo($us_memo->getObservacion()) ?>
                    </div>

                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="no-resultado">No tiene mensajes ni recordatorios de acuerdo al criterio de busqueda utilizado.</div>
    <?php } ?>

</div>

<script>

</script>                            



<script>
    $(function ($) {
        setInitWidgetUsMemo();
    });

    function setInitWidgetUsMemo() {
        // buscador
        setClickUsMemoBtnBuscar();

        // us memo
        setClickUsMemoAgregarNota();
        setClickUsMemoAgregarNotaConfirmar();
        setClickUsMemoEditarNota();

        setClickUsMemoCambiarEstado();
    }

    function setClickUsMemoBtnBuscar() {
        $("#widget_us_memo_btn_buscar").unbind();
        $("#widget_us_memo_btn_buscar").click(function () {
            var elem = $(this);
            var form = $(this).parents('form');
            $.ajax({
                type: 'GET',
                url: "gen_widget/WIDGET_HOME_US_MEMO/index.php",
                data: form.serialize() + "&filtrar=1",
                dataType: "html",
                beforeSend: function (objeto) {
                    //elem.parents('#cuerpo_widget_WIDGET_HOME_US_MEMO .contenedor').html(img_loading);
                },
                success: function (data) {
                    elem.parents('#cuerpo_widget_WIDGET_HOME_US_MEMO .contenedor').html(data);
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("errorx "+ objeto.status);
                }
            });
        });
    }

    function setClickUsMemoAgregarNota() {
        $('.btn_agregar_us_memo').unbind();
        $('.btn_agregar_us_memo').click(function () {
            var us_memo_id = 0;

            verModalUsMemoAgregarNota(us_memo_id);
        });
    }
    function verModalUsMemoAgregarNota(us_memo_id) {
        $.ajax({
            type: 'GET',
            url: "gen_widget/WIDGET_HOME_US_MEMO/ajax/modal_agregar_nota.php",
            data: 'us_memo_id=' + us_memo_id,
            dataType: "html",
            beforeSend: function (objeto) {
                $('.div_modal').html(img_loading);
                $('.div_modal').dialog({
                    width: '50%',
                    height: 500,
                    modal: true,
                    title: 'Agregar o Editar Nota',
                    close: function () {
                        $("#widget_us_memo_btn_buscar").trigger('click');
                    },
                    hide: 'fade',
                });
            },
            success: function (data) {

                $('.div_modal').html(data);

                setInitWidgetUsMemo();
            },
            error: function (objeto, quepaso, otroobj) {
            }
        });
    }

    function setClickUsMemoEditarNota() {
        $('.us-memos .boton-uno.editar').unbind();
        $('.us-memos .boton-uno.editar').click(function () {
            var us_memo_id = $(this).parents('.us-memo').attr('identificador');

            verModalUsMemoAgregarNota(us_memo_id);
        });
    }

    function setClickUsMemoAgregarNotaConfirmar() {
        $('#btn_registrar_us_memo').unbind();
        $('#btn_registrar_us_memo').click(function () {

            var us_memo_id = $(this).parents('.datos').attr('identificador');
            var form = $('#form_agregar_us_memo');

            $.ajax({
                type: 'POST',
                url: "gen_widget/WIDGET_HOME_US_MEMO/ajax/set_agregar_nota.php",
                data: form.serialize() + '&us_memo_id=' + us_memo_id,
                dataType: "json",
                beforeSend: function (objeto) {
                    $(this).hide();

                    $("input, select").removeClass('input-error');
                    $(".label-error").html('');
                },
                success: function (data) {
                    var arr = data;

                    if (arr["error"]) {
                        $(this).show();
                        $.each(arr, function (i, item) {
                            $("#" + i).addClass('input-error');
                            $("#" + i + "_error").html(arr[i]);
                        });
                    } else {
                        $('.div_modal').dialog('close');
                    }

                    setInitWidgetUsMemo();
                },
                error: function (objeto, quepaso, otroobj) {
                }
            });
        });
    }

    function setClickUsMemoCambiarEstado() {
        $('.us-memos .boton-uno.cambiar-estado').unbind();
        $('.us-memos .boton-uno.cambiar-estado').click(function () {
            var us_memo_id = $(this).parents('.us-memo').attr('identificador');
            var us_memo_tipo_estado_codigo = $(this).attr('us_memo_tipo_estado_codigo');

            setUsMemoCambiarEstado(us_memo_id, us_memo_tipo_estado_codigo);
        });
    }

    function setUsMemoCambiarEstado(us_memo_id, us_memo_tipo_estado_codigo) {
        $.ajax({
            type: 'POST',
            url: "gen_widget/WIDGET_HOME_US_MEMO/ajax/set_cambiar_estado.php",
            data: 'us_memo_id=' + us_memo_id + '&us_memo_tipo_estado_codigo=' + us_memo_tipo_estado_codigo,
            dataType: "json",
            beforeSend: function (objeto) {
                $(this).hide();

                $("input, select").removeClass('input-error');
                $(".label-error").html('');
            },
            success: function (data) {
                var arr = data;

                if (arr["error"]) {
                    $(this).show();
                    $.each(arr, function (i, item) {
                        $("#" + i).addClass('input-error');
                        $("#" + i + "_error").html(arr[i]);
                    });
                } else {
                    $("#widget_us_memo_btn_buscar").trigger('click');
                }

                setInitWidgetUsMemo();
            },
            error: function (objeto, quepaso, otroobj) {
            }
        });
    }


</script>