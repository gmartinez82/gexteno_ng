// archivo js del modulo 'ins_insumo_barcode_gestion'
$(function ($) {
    setInitInsumosBarcodeGestion();
});

function setInitInsumosBarcodeGestion() {
    setKeypressBody();

    setKeypressBarcode();
    setClickBarcodeVincular();

    setClickBarcodeInterno();
    setClickBarcodeInternoGenerarArchivo();
    setClickBarcodeInternoGenerarArchivoExec();
    setClickBarcodeInternoGenerarArchivoPDF();

    setClickBtnEditarDescripcionCorta();
    setClickBtnEditarDescripcionCortaGuardar();

}

function setKeypressBody() {
    // se hace foco en cada de texto de busqueda al presionar una tecla
    $("body").keydown(function (e) {

        // excepcion para otras cajas
        var name = $(e.target).attr('name');
        if (name == 'txt_buscador') {
            return true;
        }

        $("#txt_codigo_barra").focus();
    });

    // se evita accion al presionar enter
    $(document).keypress(function (e) {
        //alert(e.which);
        if (e.which == 13) {
            return false;
        }
        if (e.which == 106) {
            //return false;
        }
    });
}

function setKeypressBarcode() {
    $("#txt_codigo_barra").unbind();
    $("#txt_codigo_barra").keypress(function (e) {
        if (e.which == 13) {
            $("#txt_buscador").val($("#txt_codigo_barra").val());
            setAdmBuscadorTop('ins_insumo_barcode_gestion');

            $("#txt_codigo_barra").select();
        }
    });
}

/*
 Vincular Barcode
 */
function setClickBarcodeVincular() {
    $('#listado_adm_ins_insumo_barcode_gestion .adm_botones_accion .accion.vincular').unbind();
    $('#listado_adm_ins_insumo_barcode_gestion .adm_botones_accion .accion.vincular').click(function (e) {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        var barcode = $("#txt_codigo_barra").val();

        if (barcode != '') {
            if (confirm('¿Desea vincular el Codigo "' + barcode + '" al Insumo?')) {
                setBarcodeVincular(insumo_id, barcode);
            }
        } else {
            alert('No se encuentra cargado ningun codigo de barra');
        }
    });
}
function setBarcodeVincular(insumo_id, barcode) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_barcode_gestion/set_barcode_vincular.php",
        data: 'insumo_id=' + insumo_id + '&barcode=' + barcode,
        dataType: "html",
        beforeSend: function (objeto) {

        },
        success: function (data) {
            refreshAdmUno('ins_insumo_barcode_gestion', insumo_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Generar Codigo Barra Interno
 */
function setClickBarcodeInterno() {
    $('#listado_adm_ins_insumo_barcode_gestion .adm_botones_accion .accion.interno').unbind();
    $('#listado_adm_ins_insumo_barcode_gestion .adm_botones_accion .accion.interno').click(function (e) {
        var id = $(this).parents('.uno').attr('identificador');
        verModalBarcodeInterno(id);
    });
}
function verModalBarcodeInterno(id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_barcode_gestion/modal_barcode_interno.php",
        data: 'id=' + id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '85%',
                height: 550,
                modal: true,
                title: 'Generacion de Codigo Barra Interno',
                close: function () {
                    //$('.div_modal').dialog('close');					
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            setInitInsumosBarcodeGestion();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBarcodeInternoGenerarArchivo() {
    $('.div_modal .barcode-interno .boton.generar-archivo').unbind();
    $('.div_modal .barcode-interno .boton.generar-archivo').click(function (e) {
        var id = $(this).parents('.datos').attr('insumo_id');
        var cantidad = $("#txt_cantidad").val();

        //location.href = 'index.php?id=' + id;
        window.open(
                'ins_insumo_barcode_gestion_interno_generacion.php?id=' + id + '&cantidad=' + cantidad,
                '_blank' // <- This is what makes it open in a new window.
                );
    });
}

function setClickBarcodeInternoGenerarArchivoExec() {
    $('.div_modal .barcode-interno .boton.generar-archivo-exec').unbind();
    $('.div_modal .barcode-interno .boton.generar-archivo-exec').click(function (e) {
        var insumo_id = $(this).parents('.datos').attr('insumo_id');
        var cantidad = $("#txt_cantidad").val();
        var elem = $(this);

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/ins_insumo_barcode_gestion/set_etiqueta_exec.php",
            data: 'insumo_id=' + insumo_id + '&cantidad=' + cantidad,
            dataType: "html",
            beforeSend: function (objeto) {
                elem.hide();
            },
            success: function (data) {
                elem.show();
                refreshAdmUno('ins_insumo_barcode_gestion', insumo_id);
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    });
}

function setClickBarcodeInternoGenerarArchivoPDF() {
    $('.div_modal .barcode-interno .boton.generar-archivo-pdf').unbind();
    $('.div_modal .barcode-interno .boton.generar-archivo-pdf').click(function (e) {
        var id = $(this).parents('.datos').attr('insumo_id');
        var cantidad = $("#txt_cantidad").val();

        //location.href = 'index.php?id=' + id;
        window.open(
                'ins_insumo_barcode_gestion_interno_generacion_pdf.php?id=' + id + '&cantidad=' + cantidad,
                '_blank' // <- This is what makes it open in a new window.
                );
    });
}

/*
 * Editar Descripcion Corta
 * */
function setClickBtnEditarDescripcionCorta() {
    $('.btn_editar_descripcion_corta').unbind();
    $('.btn_editar_descripcion_corta').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        verModalEditarDescripcionCorta(insumo_id);
    });
}
function verModalEditarDescripcionCorta(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_barcode_gestion/modal_editar_descripcion_corta.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 750,
                height: 400,
                modal: true,
                title: 'Descripcion corta del insumo',
                close: function () {
                    refreshAdmUno('ins_insumo_barcode_gestion', insumo_id);
                }
            });
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitInsumosBarcodeGestion();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnEditarDescripcionCortaGuardar() {
    $('#btn_guardar_descripcion_corta').unbind();
    $('#btn_guardar_descripcion_corta').click(function () {

        if (controlEditarDescripcionCortaGuardar()) {
            setEditarDescripcionCortaGuardar();
        }
    });
}
function setEditarDescripcionCortaGuardar() {
    var form = $('#form_editar_descripcion_corta');

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_barcode_gestion/set_editar_descripcion_corta.php",
        data: form.serialize(),
        dataType: "html",
        beforeSend: function (objeto) {
            $('.botonera').html(img_loading);
        },
        success: function (data) {
            $('.div_modal').dialog('close');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function controlEditarDescripcionCortaGuardar() {
    var form = $('#form_editar_descripcion_corta');
    var estado = false;

    $.ajax({
        type: "POST",
        url: "ajax/modulos/ins_insumo_barcode_gestion/control_editar_descripcion_corta.php",
        data: form.serialize(),
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            // se limpian todos los errores
            $(".label-error").html('');

            if (arr['error'] === true) {

                $(".txt_coche_descripcion_corta_error").html(arr['txt_coche_descripcion_corta_error']);

                estado = false;
            } else {
                estado = true;
            }
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
    return estado;
}
