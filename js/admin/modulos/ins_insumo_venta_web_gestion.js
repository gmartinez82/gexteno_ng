// archivo js del modulo 'ins_insumo'
$(function ($) {
    setInitInsInsumoVentaWebGestion();
});

function setInitInsInsumoVentaWebGestion() {

    // filtros
    setChangeFiltroTipoInsumo();
    setChangeFiltroProveedor();
    setChangeFiltroEtiqueta();
    setChangeFiltroCategoria();
    setChangeFiltroMarcaInsumo();
    setChangeFiltroVentaWeb();
    setChangeFiltroPorcentajeIncremento();
    setChangeFiltroImporteManual();
    setChangeFiltroTipoListaPrecio();
    setChangeFiltroOrdenarPor();

    // venta online
    setClickVonHabilitar();
    setClickVonDeshabilitar();
    setClickVonEditar();
    setClickVonEditarGuardar();
    setClickVonEditarEliminar();
    setClickVonDestacado();
    setClickVonNoDestacado();

    // mercadolibre
    setClickMLHabilitar();
    setClickMLDeshabilitar();
    setClickMLEditar();
    setClickMLEditarGuardar();
    setClickMLEditarDescripcionCantidadCaracteres();

    setClickMLEditarEliminar();
    setClickMLCategorizar();
    setClickMLCategorizarBuscarCategoria();
    setClickMLCategorizarSeleccionarCategoria();
    setClickMLCategorizarGuardar();
    setClickMLAtributos();
    setClickMLAtributosGuardar();
    setClickMLEnvio();
    setClickMLEnvioGuardar();
    setClickMLPublicar();
    setClickMLActualizar();
    setClickMLPausar();
    setClickMLReactivar();
    setClickMLDespublicar();

}



// eventos del filtro
function setChangeFiltroTipoInsumo() {
    $('#cmb_filtro_ins_tipo_insumo_id').unbind();
    $('#cmb_filtro_ins_tipo_insumo_id').change(function () {
        //setAdmBuscadorTop('ins_insumo_venta_web_gestion');
    });
}
function setChangeFiltroProveedor() {
    $('#cmb_filtro_prv_proveedor_id').unbind();
    $('#cmb_filtro_prv_proveedor_id').change(function () {
        //setAdmBuscadorTop('ins_insumo_venta_web_gestion');
    });
}
function setChangeFiltroEtiqueta() {
    $('#cmb_filtro_ins_etiqueta_id').unbind();
    $('#cmb_filtro_ins_etiqueta_id').change(function () {
        //setAdmBuscadorTop('ins_insumo_venta_web_gestion');
    });
}
function setChangeFiltroCategoria() {
    $('#cmb_filtro_ins_categoria_id').unbind();
    $('#cmb_filtro_ins_categoria_id').change(function () {
        //setAdmBuscadorTop('ins_insumo_venta_web_gestion');
    });
}
function setChangeFiltroMarcaInsumo() {
    $('#cmb_filtro_ins_marca_id').unbind();
    $('#cmb_filtro_ins_marca_id').change(function () {
        //setAdmBuscadorTop('ins_insumo_venta_web_gestion');
    });
}
function setChangeFiltroVentaWeb() {
    $('#cmb_filtro_venta_web').unbind();
    $('#cmb_filtro_venta_web').change(function () {
        //setAdmBuscadorTop('ins_insumo_venta_web_gestion');
    });
}
function setChangeFiltroPorcentajeIncremento() {
    $('#cmb_filtro_porcentaje_incremento').unbind();
    $('#cmb_filtro_porcentaje_incremento').change(function () {
        //setAdmBuscadorTop('ins_insumo_venta_web_gestion');
    });
}
function setChangeFiltroImporteManual() {
    $('#cmb_filtro_importe_manual').unbind();
    $('#cmb_filtro_importe_manual').change(function () {
        //setAdmBuscadorTop('ins_insumo_venta_web_gestion');
    });
}
function setChangeFiltroTipoListaPrecio() {
    $('#cmb_filtro_ins_tipo_lista_precio_id').unbind();
    $('#cmb_filtro_ins_tipo_lista_precio_id').change(function () {
        //setAdmBuscadorTop('ins_insumo_venta_web_gestion');
    });
}
function setChangeFiltroOrdenarPor() {
    $('#cmb_filtro_ordenar_por').unbind();
    $('#cmb_filtro_ordenar_por').change(function () {
        //setAdmBuscadorTop('ins_insumo_venta_web_gestion');
    });
}


/* VON habilitar */
function setClickVonHabilitar() {
    $('.von .accion.von-habilitar').unbind();
    $('.von .accion.von-habilitar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        var habilitar = 1;
        setVonHabilitar(insumo_id, habilitar);
    });
}
function setClickVonDeshabilitar() {
    $('.von .accion.von-deshabilitar').unbind();
    $('.von .accion.von-deshabilitar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        var habilitar = 0;
        setVonHabilitar(insumo_id, habilitar);
    });
}
function setVonHabilitar(insumo_id, habilitar) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_von_habilitar.php",
        data: "insumo_id=" + insumo_id + "&habilitar=" + habilitar,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

/* VON editar */
function setClickVonEditar() {
    $('.von .accion.von-editar').unbind();
    $('.von .accion.von-editar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        setVonEditar(insumo_id);
    });
}
function setVonEditar(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/modal_von_info_editar.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 800,
                height: 550,
                modal: true,
                title: 'Info Venta Online',
                close: function () {
                    refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setClickVonEditarGuardar() {
    $('.div_modal #btn_von_guardar').unbind();
    $('.div_modal #btn_von_guardar').click(function () {
        var insumo_id = $(this).parents('.datos').attr('insumo_id');
        var venta_web_info_id = $(this).parents('.datos').attr('venta_web_info_id');
        setVonEditarGuardar(insumo_id, venta_web_info_id);
    });
}
function setVonEditarGuardar(insumo_id, venta_web_info_id) {
    var form = $('#form_von_info');
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_von_info_editar_guardar.php",
        data: form.serialize() + '&insumo_id=' + insumo_id + '&venta_web_info_id=' + venta_web_info_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.div_modal').dialog('close');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickVonEditarEliminar() {
    $('.div_modal #btn_von_eliminar').unbind();
    $('.div_modal #btn_von_eliminar').click(function () {
        var insumo_id = $(this).parents('.datos').attr('insumo_id');
        var venta_web_info_id = $(this).parents('.datos').attr('venta_web_info_id');

        if (confirm('Eliminar Info Venta Web?')) {
            deleteVonEditarGuardar(insumo_id, venta_web_info_id);
        }
    });
}
function deleteVonEditarGuardar(insumo_id, venta_web_info_id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/del_von_info_editar_eliminar.php",
        data: 'insumo_id=' + insumo_id + '&venta_web_info_id=' + venta_web_info_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.div_modal').dialog('close');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* VON destacado */
function setClickVonDestacado() {
    $('.von .accion.von-destacar').unbind();
    $('.von .accion.von-destacar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        var destacado = 1;
        setVonDestacado(insumo_id, destacado);
    });
}
function setClickVonNoDestacado() {
    $('.von .accion.von-nodestacar').unbind();
    $('.von .accion.von-nodestacar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        var destacado = 0;
        setVonDestacado(insumo_id, destacado);
    });
}
function setVonDestacado(insumo_id, destacado) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_von_destacado.php",
        data: "insumo_id=" + insumo_id + "&destacado=" + destacado,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}


/* ML habilitar */
function setClickMLHabilitar() {
    $('.ml-acciones .accion.ml-habilitar').unbind();
    $('.ml-acciones .accion.ml-habilitar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        var habilitar = 1;
        setMLHabilitar(insumo_id, habilitar);
    });
}
function setClickMLDeshabilitar() {
    $('.ml-acciones .accion.ml-deshabilitar').unbind();
    $('.ml-acciones .accion.ml-deshabilitar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        var habilitar = 0;
        setMLHabilitar(insumo_id, habilitar);
    });
}
function setMLHabilitar(insumo_id, habilitar) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_ml_habilitar.php",
        data: "insumo_id=" + insumo_id + "&habilitar=" + habilitar,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

/* ML editar */
function setClickMLEditar() {
    $('.ml-acciones .accion.ml-editar').unbind();
    $('.ml-acciones .accion.ml-editar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        setMLEditar(insumo_id);
    });
}
function setMLEditar(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/modal_ml_info_editar.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 650,
                modal: true,
                title: 'Info Venta Mercado Libre',
                close: function () {
                    refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setClickMLEditarGuardar() {
    $('.div_modal #btn_ml_guardar').unbind();
    $('.div_modal #btn_ml_guardar').click(function () {
        var insumo_id = $(this).parents('.datos').attr('insumo_id');
        var venta_ml_info_id = $(this).parents('.datos').attr('venta_ml_info_id');
        setMLEditarGuardar(insumo_id, venta_ml_info_id);
    });
}
function setMLEditarGuardar(insumo_id, venta_ml_info_id) {
    var form = $('#form_ml_info');
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_ml_info_editar_guardar.php",
        data: form.serialize() + '&insumo_id=' + insumo_id + '&venta_ml_info_id=' + venta_ml_info_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $('.div_modal').dialog('close');
            }
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickMLEditarDescripcionCantidadCaracteres() {
    $('#txt_ml_descripcion').unbind();
    $('#txt_ml_descripcion').keyup(function () {
        var texto = $(this).val();
        var cantidad = texto.length;
        $('#txt_ml_descripcion_cantidad_caracteres').html(cantidad + ' caracteres');
    });
}

function setClickMLEditarEliminar() {
    $('.div_modal #btn_ml_eliminar').unbind();
    $('.div_modal #btn_ml_eliminar').click(function () {
        var insumo_id = $(this).parents('.datos').attr('insumo_id');
        var venta_ml_info_id = $(this).parents('.datos').attr('venta_ml_info_id');

        if (confirm('Eliminar Info Venta ML?')) {
            deleteMLEditarGuardar(insumo_id, venta_ml_info_id);
        }
    });
}
function deleteMLEditarGuardar(insumo_id, venta_ml_info_id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/del_ml_info_editar_eliminar.php",
        data: 'insumo_id=' + insumo_id + '&venta_ml_info_id=' + venta_ml_info_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.div_modal').dialog('close');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* ML Categorizar */
function setClickMLCategorizar() {
    $('.ml-acciones .accion.ml-categorizar').unbind();
    $('.ml-acciones .accion.ml-categorizar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        setMLCategorizar(insumo_id);
    });
}
function setMLCategorizar(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/modal_ml_info_categorizar.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 550,
                modal: true,
                title: 'Categorizar Producto para ML',
                close: function () {
                    refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
/* ML Categorizar Buscar Categoria */
function setClickMLCategorizarBuscarCategoria() {
    $('.div_modal #btn_ml_buscar_categorias').unbind();
    $('.div_modal #btn_ml_buscar_categorias').click(function () {
        var categoria = 0;
        var insumo_id = $(this).parents('.datos').attr('insumo_id');
        var venta_ml_info_id = $(this).parents('.datos').attr('venta_ml_info_id');
        var palabras_claves = $('#txt_categorizar_palabras_claves').val();
        setMLCategorizarBuscarCategoria(insumo_id, venta_ml_info_id, palabras_claves, categoria);
    });
}
/* ML Categorizar Seleccionar Categoria */
function setClickMLCategorizarSeleccionarCategoria() {
    $('.div_modal #cmb_ml_category_cod').unbind();
    $('.div_modal #cmb_ml_category_cod').change(function () {
        var categoria = $(this).val();
        var insumo_id = $(this).parents('.datos').attr('insumo_id');
        var venta_ml_info_id = $(this).parents('.datos').attr('venta_ml_info_id');
        var palabras_claves = $('#txt_categorizar_palabras_claves').val();
        setMLCategorizarBuscarCategoria(insumo_id, venta_ml_info_id, palabras_claves, categoria);
    });
}
function setMLCategorizarBuscarCategoria(insumo_id, venta_ml_info_id, palabras_claves, categoria) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/refresh_ml_info_categorizar_buscar_categoria.php",
        data: 'insumo_id=' + insumo_id + '&venta_ml_info_id=' + venta_ml_info_id + '&palabras_claves=' + palabras_claves + '&categoria=' + categoria,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.ml-categorias-propuestas').html(img_loading);
        },
        success: function (data) {

            $('.ml-categorias-propuestas').html(data);

            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setClickMLCategorizarGuardar() {
    $('.div_modal #btn_ml_categorizar').unbind();
    $('.div_modal #btn_ml_categorizar').click(function () {
        var insumo_id = $(this).parents('.datos').attr('insumo_id');
        var venta_ml_info_id = $(this).parents('.datos').attr('venta_ml_info_id');
        setMLCategorizarGuardar(insumo_id, venta_ml_info_id);
    });
}
function setMLCategorizarGuardar(insumo_id, venta_ml_info_id) {
    var form = $('#form_ml_categorizar');
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_ml_info_categorizar_guardar.php",
        data: form.serialize() + '&insumo_id=' + insumo_id + '&venta_ml_info_id=' + venta_ml_info_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".div_modal .botonera").hide();
            $(".div_modal .botonera").after('<div class="botonera-loading">' + img_loading + 'Procesando, aguarde por favor ... </div>');
            $(".div_modal .label-error").html("");
            $(".div_modal .input-error").removeClass('input-error');
            $(".div_modal .label-error-botonera").html("");
            $(".div_modal .label-error-botonera").hide();
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".div_modal .botonera-loading").remove();
                $(".div_modal .botonera").show();
                
                $(".botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $('.div_modal').dialog('close');
            }
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* ML Atributos */
function setClickMLAtributos() {
    $('.ml-acciones .accion.ml-atributos').unbind();
    $('.ml-acciones .accion.ml-atributos').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        setMLAtributos(insumo_id);
    });
}
function setMLAtributos(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/modal_ml_info_atributos.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 650,
                modal: true,
                title: 'Atributos de Producto para ML',
                close: function () {
                    refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setClickMLAtributosGuardar() {
    $('.div_modal #btn_ml_atributos').unbind();
    $('.div_modal #btn_ml_atributos').click(function () {
        var insumo_id = $(this).parents('.datos').attr('insumo_id');
        var venta_ml_info_id = $(this).parents('.datos').attr('venta_ml_info_id');
        setMLAtributosGuardar(insumo_id, venta_ml_info_id);
    });
}
function setMLAtributosGuardar(insumo_id, venta_ml_info_id) {
    var form = $('#form_ml_atributos');
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_ml_info_atributos_guardar.php",
        data: form.serialize() + '&insumo_id=' + insumo_id + '&venta_ml_info_id=' + venta_ml_info_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $('.div_modal').dialog('close');
            }
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* ML Envio */
function setClickMLEnvio() {
    $('.ml-acciones .accion.ml-envio').unbind();
    $('.ml-acciones .accion.ml-envio').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        setMLEnvio(insumo_id);
    });
}
function setMLEnvio(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/modal_ml_info_envio.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 650,
                modal: true,
                title: 'Envio para ML',
                close: function () {
                    refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setClickMLEnvioGuardar() {
    $('.div_modal #btn_ml_envio').unbind();
    $('.div_modal #btn_ml_envio').click(function () {
        var insumo_id = $(this).parents('.datos').attr('insumo_id');
        var venta_ml_info_id = $(this).parents('.datos').attr('venta_ml_info_id');
        setMLEnvioGuardar(insumo_id, venta_ml_info_id);
    });
}
function setMLEnvioGuardar(insumo_id, venta_ml_info_id) {
    var form = $('#form_ml_envio');
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_ml_info_envio_guardar.php",
        data: form.serialize() + '&insumo_id=' + insumo_id + '&venta_ml_info_id=' + venta_ml_info_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $(".botonera").show();
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $('.div_modal').dialog('close');
            }
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/* ML Publicar */
function setClickMLPublicar() {
    $('#listado_adm_ins_insumo_venta_web_gestion .boton.ml-publicar').unbind();
    $('#listado_adm_ins_insumo_venta_web_gestion .boton.ml-publicar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');

        if (confirm('Desea publicar en ML?')) {
            setMLPublicar(insumo_id);
        }
    });
}
function setMLPublicar(insumo_id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_ml_publicar.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 800,
                height: 550,
                modal: true,
                title: 'Publicando Producto en ML',
                close: function () {
                    refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* ML Actualizar */
function setClickMLActualizar() {
    $('#listado_adm_ins_insumo_venta_web_gestion .boton.ml-actualizar').unbind();
    $('#listado_adm_ins_insumo_venta_web_gestion .boton.ml-actualizar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');

        setMLActualizar(insumo_id);
    });
}
function setMLActualizar(insumo_id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_ml_actualizar.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 800,
                height: 550,
                modal: true,
                title: 'Actualizando Producto en ML',
                close: function () {
                    refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/* ML Pausar */
function setClickMLPausar() {
    $('#listado_adm_ins_insumo_venta_web_gestion .boton.ml-pausar').unbind();
    $('#listado_adm_ins_insumo_venta_web_gestion .boton.ml-pausar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');

        setMLPausar(insumo_id);
    });
}
function setMLPausar(insumo_id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_ml_pausar.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 800,
                height: 550,
                modal: true,
                title: 'Publicando Producto en ML',
                close: function () {
                    refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/* ML Reactivar */
function setClickMLReactivar() {
    $('#listado_adm_ins_insumo_venta_web_gestion .boton.ml-reactivar').unbind();
    $('#listado_adm_ins_insumo_venta_web_gestion .boton.ml-reactivar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');

        setMLReactivar(insumo_id);
    });
}
function setMLReactivar(insumo_id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_ml_reactivar.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 800,
                height: 550,
                modal: true,
                title: 'Publicando Producto en ML',
                close: function () {
                    refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* ML Despublicar */
function setClickMLDespublicar() {
    $('#listado_adm_ins_insumo_venta_web_gestion .boton.ml-despublicar').unbind();
    $('#listado_adm_ins_insumo_venta_web_gestion .boton.ml-despublicar').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');

        if (confirm('Desea eliminar de ML? ATENCION: Se ELIMINARA por completo en ML')) {
            setMLDespublicar(insumo_id);
        }
    });
}
function setMLDespublicar(insumo_id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_venta_web_gestion/set_ml_despublicar.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 800,
                height: 550,
                modal: true,
                title: 'Eliminando Producto de ML',
                close: function () {
                    refreshAdmUno('ins_insumo_venta_web_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);

            setInitInsInsumoVentaWebGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
