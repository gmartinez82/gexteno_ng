// archivo js del modulo 'fnd_chq_cheque'
$(function ($) {
    setInitFndChqChequeBuscador();
});

function setInitFndChqChequeBuscador() {

    // Cheque Buscador
    setClickFndChqChequeBuscadorSetChequeBtnGuardar();
    setClickFndChqChequeBuscadorBtnBuscadorBotonModalSetCheque();
    setClickFndChqChequeBuscadorBtnSeleccionarChequeModalSetCheque();
    setClickFndChqChequeBuscadorBtnLimpiarSeleccionChequeModalSetCheque();

    setChangeFndChqChequeBuscadorCmbFndChqTipoEmisorFndChqChequeEditar();
    setChangeFndChqChequeBuscadorCmbFndChqChequeraFndChqChequeEditar();

}


function setClickFndChqChequeBuscadorSetChequeBtnGuardar() {
    $(".div_modal_cheque_buscador #form_fnd_chq_cheque_buscador .datos .botonera .boton.btn_guardar").unbind();
    $(".div_modal_cheque_buscador #form_fnd_chq_cheque_buscador .datos .botonera .boton.btn_guardar").click(function (e) {
        setFndChqChequeBuscadorSetChequeBtnGuardar();
    });
}

function setFndChqChequeBuscadorSetChequeBtnGuardar()
{
    var form_set_cheque_info = $("#form_fnd_chq_cheque_buscador");
    var modulo = form_set_cheque_info.attr('modulo');
    var key = form_set_cheque_info.attr('key');
    var cheque_id = form_set_cheque_info.attr('cheque_id');
    var var_sesion_random = $(".datos.modificar-datos-cheque").attr('var_sesion_random');

    $.ajax({
        type: "POST",
        url: "ajax/modulos/fnd_chq_cheque_buscador/set_fnd_chq_cheque_buscador_set_cheque_info.php",
        data: form_set_cheque_info.serialize() + '&modulo=' + modulo + '&key=' + key + '&cheque_id=' + cheque_id + '&var_sesion_random=' + var_sesion_random,
        dataType: "json",
        beforeSend: function ()
        {
            $(".div_modal_cheque_buscador .botonera").hide();
            $(".div_modal_cheque_buscador .textbox").removeClass('input-error');
            $(".div_modal_cheque_buscador .label-error").html("");
        },
        success: function (data)
        {
            var arr = data;

            if (arr["error"]) {
                $(".div_modal_cheque_buscador .botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else
            {
                if (parseInt(key) !== 0) {
                    $("#txt_importe_unitario_" + key).val(arr["importe_cheque_formateado"]);
                    $("#txt_descripcion_" + key).val(arr["descripcion"]);
                    $("#txt_referencia_" + key).val(arr["numero_cheque"]);

                    $("#txt_vta_recibo_item_generico_importe_unitario_" + key).val(arr["importe_cheque_formateado"]);
                    $("#txt_vta_recibo_item_generico_importe_unitario_real_" + key).val(arr["importe_cheque_formateado"]);
                    $("#txt_vta_recibo_item_generico_descripcion_" + key).val(arr["descripcion"]);
                    $("#txt_vta_recibo_item_generico_referencia_" + key).val(arr["numero_cheque"]);
                } else {
                    $("#txt_importe").val(arr["importe_cheque_formateado"]);
                    $("#txt_descripcion").val(arr["descripcion"]);
                    $("#txt_codigo_referencia").val(arr["numero_cheque"]);
                }

                $(".div_modal_cheque_buscador").dialog("close");
            }

            setInitFndChqChequeBuscador();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (jqXHR, estado, error) {
        }
    });
}

function setClickFndChqChequeBuscadorBtnBuscadorBotonModalSetCheque() {
    $('.div_modal_cheque_buscador .buscador-cheque .txt_buscador_cheque_boton').unbind();
    $('.div_modal_cheque_buscador .buscador-cheque .txt_buscador_cheque_boton').click(function (e) {
        var cmb_fnd_chq_en_cartera = $('.div_modal_cheque_buscador #cmb_fnd_chq_en_cartera').val();
        var txt_buscador_cheque = $('.div_modal_cheque_buscador #txt_buscador_cheque').val();
        var txt_fecha_cobro_desde = $('.div_modal_cheque_buscador #txt_fecha_cobro_desde').val();
        var txt_fecha_cobro_hasta = $('.div_modal_cheque_buscador #txt_fecha_cobro_hasta').val();
        var txt_importe_desde = $('.div_modal_cheque_buscador #txt_importe_desde').val();
        var txt_importe_hasta = $('.div_modal_cheque_buscador #txt_importe_hasta').val();

        $.ajax({
            type: "POST",
            url: "ajax/modulos/fnd_chq_cheque_buscador/refresh_bloque_fnd_chq_cheque_buscador_cheques.php",
            data: 'en_cartera=' + cmb_fnd_chq_en_cartera + '&txt_buscador_cheque=' + txt_buscador_cheque + '&txt_fecha_cobro_desde=' + txt_fecha_cobro_desde + '&txt_fecha_cobro_hasta=' + txt_fecha_cobro_hasta + '&txt_importe_desde=' + txt_importe_desde + '&txt_importe_hasta=' + txt_importe_hasta,
            dataType: "html",
            beforeSend: function ()
            {
                $('.datos.modificar-datos-cheque .cheques-buscador').html(img_loading);
            },
            success: function (data)
            {
                $('.datos.modificar-datos-cheque .cheques-buscador').html(data);
                setInitFndChqChequeBuscador();
                setInit();
                setInitDbSuggest();
                setInitDbSuggestBoton();
            },
            error: function (jqXHR, estado, error) {}
        });
    });
}


function setClickFndChqChequeBuscadorBtnSeleccionarChequeModalSetCheque()
{
    $('.div_modal_cheque_buscador .buscador-cheque-botonera .cheque-boton-seleccionar.uno').unbind();
    $('.div_modal_cheque_buscador .buscador-cheque-botonera .cheque-boton-seleccionar.uno').click(function (e)
    {
        var key = $('#form_fnd_chq_cheque_buscador').attr('key');
        var cheque_id = $(this).parents('.cheque.uno').attr('fnd_chq_cheque_id');
        var en_cartera = $('.div_modal_cheque_buscador #cmb_fnd_chq_en_cartera').val();
        var txt_buscador_cheque = $('.div_modal_cheque_buscador #txt_buscador_cheque').val();
        var limpiar_cheque_seleccionado = 0;

        var modulo = $('#form_fnd_chq_cheque_buscador').attr('modulo');
        var var_sesion_random = $('#form_fnd_chq_cheque_buscador').attr('var_sesion_random');

        verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado);
    });
}


function setClickFndChqChequeBuscadorBtnLimpiarSeleccionChequeModalSetCheque()
{
    $('.div_modal_cheque_buscador #form_fnd_chq_cheque_buscador .datos .filtros .eliminar').unbind();
    $('.div_modal_cheque_buscador #form_fnd_chq_cheque_buscador .datos .filtros .eliminar').click(function (e)
    {
        var form_set_cheque_info = $("#form_fnd_chq_cheque_buscador");
        var key = form_set_cheque_info.attr('key');
        var cheque_id = form_set_cheque_info.attr('cheque_id');
        var en_cartera = '-1';
        var txt_buscador_cheque = '';
        var limpiar_cheque_seleccionado = 1;

        var modulo = $('#form_fnd_chq_cheque_buscador').attr('modulo');
        var var_sesion_random = $('#form_fnd_chq_cheque_buscador').attr('var_sesion_random');

        verModalFndChqChequeBuscadorSetCheque(modulo, var_sesion_random, key, cheque_id, en_cartera, txt_buscador_cheque, limpiar_cheque_seleccionado);
    });
}


function setChangeFndChqChequeBuscadorCmbFndChqTipoEmisorFndChqChequeEditar()
{
    $('.div_modal_cheque_buscador #cmb_fnd_chq_tipo_emisor_id').unbind();
    $('.div_modal_cheque_buscador #cmb_fnd_chq_tipo_emisor_id').change(function (e)
    {
        var cmb_fnd_chq_tipo_emisor_id = $(this).val();
        var cmb_fnd_chq_chequera_id = 0;
        refreshDivDatosFndChqChequeEditar(cmb_fnd_chq_tipo_emisor_id, cmb_fnd_chq_chequera_id);
    });
}


function refreshDivDatosFndChqChequeEditar(fnd_chq_tipo_emisor_id, fnd_chq_chequera_id)
{
    $.ajax({
        type: 'POST',
        url: 'ajax/modulos/fnd_chq_cheque_buscador/set_fnd_chq_cheque_buscador_fnd_chq_chequera.php',
        data: 'fnd_chq_tipo_emisor_id=' + fnd_chq_tipo_emisor_id + '&fnd_chq_chequera_id=' + fnd_chq_chequera_id,
        dataType: "json",
        beforeSend: function ()
        {
            $('.depende-chequera').removeAttr('readonly');
            $('.depende-chequera option:not(:selected)').prop('disabled', false);
        },
        success: function (data)
        {
            var arr = data;
            $.each(arr, function (i, item)
            {
                $('#' + i).val(arr[i]);
            });

            if (arr['tipo_emisor'] == 'PROPIO')
            {
                $('#form_fnd_chq_cheque_buscador .datos .par.chq-chequera-editar').show();

                $('.depende-chequera').attr('readonly', 'readonly');
                $('.depende-chequera option:not(:selected)').prop('disabled', true);
            } else
            {
                $('#form_fnd_chq_cheque_buscador .datos .par.chq-chequera-editar').hide();
                $('#cmb_fnd_chq_chequera_id').val(0);
            }

            setInitFndChqChequeBuscador();
            setInit();
        },
        error: function (jqXHR, estado, error)
        {
        }
    });
}


function setChangeFndChqChequeBuscadorCmbFndChqChequeraFndChqChequeEditar()
{
    $('.div_modal_cheque_buscador #cmb_fnd_chq_chequera_id').unbind();
    $('.div_modal_cheque_buscador #cmb_fnd_chq_chequera_id').change(function (e)
    {
        var cmb_fnd_chq_tipo_emisor_id = $('.div_modal_cheque_buscador #cmb_fnd_chq_tipo_emisor_id').val();
        var cmb_fnd_chq_chequera_id = $(this).val();

        refreshDivDatosFndChqChequeEditar(cmb_fnd_chq_tipo_emisor_id, cmb_fnd_chq_chequera_id);
    });
}