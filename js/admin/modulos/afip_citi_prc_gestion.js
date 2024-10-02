// archivo js del modulo 'afip_citi_prc'
$(function ($) {
    setInitAfipCitiPrc();
});


function setInitAfipCitiPrc() {
    setClickBtnAfipCitiModalGenerarPrcGestion();
    setClickBtnAfipCitiGenerarPrcGestion();

    setClickBtnAfipCitiModalReGenerarPrcGestion();
    setClickBtnAfipCitiReGenerarCabeceraPrcGestion();

    setClickBtnAfipCitiModalDescargarArchivosPrcGestion();
    setClickBtnAfipCitiDescargarArchivoPrcGestion();
}




function setClickBtnAfipCitiModalGenerarPrcGestion() {
    $('.div_listado_buscador .boton.afip-citi-modal_generar_prc_gestion').unbind();
    $('.div_listado_buscador .boton.afip-citi-modal_generar_prc_gestion').click(function (e) {
        verAfipCitiModalGenerarPrc();
    });
}


function verAfipCitiModalGenerarPrc() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/afip_citi_prc_gestion/modal_afip_citi_generar_prc.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '50%',
                height: 400,
                modal: true,
                title: 'Generar Proceso AFIP Citi',
                close: function () {
                    refreshAdmAll('afip_citi_prc_gestion', 1)
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitAfipCitiPrc();
            setInit();

            //setInitDbSuggest();
            //setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnAfipCitiGenerarPrcGestion()
{
    $(".div_modal .datos.modal-afip-citi-generar-prc .botonera #btn_afip_citi_generar_prc").unbind();
    $(".div_modal .datos.modal-afip-citi-generar-prc .botonera #btn_afip_citi_generar_prc").click(function (e)
    {
        //var vta_factura_id = $(this).parents(".datos").attr("vta_factura_id");
        setAfipCitiGenerarPrc();
    });
}

function setAfipCitiGenerarPrc() {
    var form = $("#form_afip_citi_generar_prc");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/afip_citi_prc_gestion/set_afip_citi_generar_prc.php",
        data: form.serialize(),
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".div_modal .botonera-loading").remove();
                $(".div_modal .botonera").show();

                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal").dialog("close");

                var pagina = $("#hdn_pag_actual").val();
                refreshAdmAll('afip_citi_prc_gestion', pagina);
            }

            setInitAfipCitiPrc();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickBtnAfipCitiModalReGenerarPrcGestion() {
    $("#listado_adm_afip_citi_prc_gestion .adm_botones_acciones .adm_botones_accion.modal-regenerar-cabecera").unbind();
    $("#listado_adm_afip_citi_prc_gestion .adm_botones_acciones .adm_botones_accion.modal-regenerar-cabecera").click(function (e) {
        var afip_citi_prc_id = $(this).parents('.uno').attr('identificador');
        verAfipCitiModalRegenerarCabeceraPrc(afip_citi_prc_id);
    });
}




function verAfipCitiModalRegenerarCabeceraPrc(afip_citi_prc_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/afip_citi_prc_gestion/modal_afip_citi_regenerar_cabecera_prc.php",
        data: 'afip_citi_prc_id=' + afip_citi_prc_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '50%',
                height: 400,
                modal: true,
                title: 'Regenerar Cabecera Proceso AFIP Citi',
                close: function () {
                    //refreshAdmAll('afip_citi_prc_gestion', 1)
                },
                hide: 'fade',
            });
        },
        success: function (data)
        {
            $('.div_modal').html(data);

            setInitAfipCitiPrc();
            setInit();
            //setInitDbSuggest();
            //setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



function setClickBtnAfipCitiReGenerarCabeceraPrcGestion() {
    $(".div_modal .datos.modal-afip-citi-regenerar-cabecera-prc .botonera #btn_afip_citi_regenerar_cabecera_prc").unbind();
    $(".div_modal .datos.modal-afip-citi-regenerar-cabecera-prc .botonera #btn_afip_citi_regenerar_cabecera_prc").click(function (e) {
        var afip_citi_prc_id = $(this).parents(".datos.modal-afip-citi-regenerar-cabecera-prc").attr("afip_citi_prc_id");
        setAfipCitiRegenerarCabeceraPrc(afip_citi_prc_id);
    });
}


function setAfipCitiRegenerarCabeceraPrc(afip_citi_prc_id)
{
    var form = $("#form_afip_citi_regenerar_cabecera_prc");

    $.ajax({
        type: "POST",
        url: "ajax/modulos/afip_citi_prc_gestion/set_afip_citi_regenerar_cabecera_prc.php",
        data: form.serialize() + "&afip_citi_prc_id=" + afip_citi_prc_id,
        dataType: "json",
        beforeSend: function (objeto)
        {
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... Demora un momento</div>');
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data)
        {
            var arr = data;
            if (arr["error"])
            {
                $(".div_modal .botonera-loading").remove();
                $(".div_modal .botonera").show();

                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else
            {
                $(".div_modal").dialog("close");

                var pagina = $("#hdn_pag_actual").val();
                refreshAdmAll('afip_citi_prc_gestion', pagina);
            }

            setInitAfipCitiPrc();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



function setClickBtnAfipCitiModalDescargarArchivosPrcGestion()
{
    $("#listado_adm_afip_citi_prc_gestion .adm_botones_acciones .adm_botones_accion.modal-descargar-archivos").unbind();
    $("#listado_adm_afip_citi_prc_gestion .adm_botones_acciones .adm_botones_accion.modal-descargar-archivos").click(function (e)
    {
        var afip_citi_prc_id = $(this).parents('.uno').attr('identificador');
        verAfipCitiModalDescargarArchivosPrc(afip_citi_prc_id);
    });
}



function verAfipCitiModalDescargarArchivosPrc(afip_citi_prc_id)
{
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/afip_citi_prc_gestion/modal_afip_citi_descargar_archivos_prc.php",
        data: 'afip_citi_prc_id=' + afip_citi_prc_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '85%',
                height: 500,
                modal: true,
                title: 'Regenerar Cabecera Proceso AFIP Citi',
                close: function () {
                    refreshAdmAll('afip_citi_prc_gestion', 1)
                },
                hide: 'fade',
            });
        },
        success: function (data)
        {
            $('.div_modal').html(data);
            setInitAfipCitiPrc();
            setInit();
            //setInitDbSuggest();
            //setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



function setClickBtnAfipCitiDescargarArchivoPrcGestion()
{
    $("#listado_afip_citi_cabecera_prc .adm_botones_acciones .adm_botones_accion.descargar-archivos").unbind();
    $("#listado_afip_citi_cabecera_prc .adm_botones_acciones .adm_botones_accion.descargar-archivos").click(function (e)
    {
        var afip_citi_cabecera_prc_id = $(this).parents('.uno').attr('identificador');
        setAfipCitiDescargarArchivoPrc(afip_citi_cabecera_prc_id);
    });
}


function setAfipCitiDescargarArchivoPrc(afip_citi_cabecera_prc_id)
{
    $.ajax({
        type: "POST",
        url: "ajax/modulos/afip_citi_prc_gestion/set_afip_citi_descargar_archivo_prc.php",
        data: "afip_citi_cabecera_prc_id=" + afip_citi_cabecera_prc_id,
        dataType: "html",
        beforeSend: function (objeto)
        {
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal .textbox").removeClass('input-error');
            $(".div_modal .label-error").html("");
        },
        success: function (data)
        {
            setInitAfipCitiPrc();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
