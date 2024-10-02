// archivo js del modulo 'ins_insumo'
$(function ($) {
    setInitInsInsumoPreciosGestion();
});

function setInitInsInsumoPreciosGestion() {

    // filtros
    setChangeFiltroIvaIncluido();
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

    // ficha
    setClickInsInsumoGestionFicha();

    // general
    setClickChkInsumoUno();
    setClickChkInsumosAll();

    // individuales
    setClickModificarCostoUno();
    setClickModificarPrecioPorcentajeIncrementoUno();
    setClickModificarPrecioPorcentajeDescuentoUno();
    setClickModificarPrecioCantidadMinimaVentaUno();
    setClickModificarPrecioImporteUno();

    // masivas importes
    setClickModificarImportes();
    setClickBtnModificarPrecioVenta();
    setClickBtnModificarPrecioCosto();
    setClickBtnModificarPrecioDescuento();

    // masivas categorias
    setClickVincularCategoria();
    setClickBtnVincularCategoriaGuardar();
    setClickBtnVincularEtiquetaGuardar();
    setClickBtnQuitarEtiquetaGuardar();

    setClickBtnHabilitarListaPrecio();
    setClickBtnDeshabilitarListaPrecio();

    // venta online
    setClickVonHabilitar();
    setClickVonDeshabilitar();
    setClickVonEditar();
    setClickVonEditarGuardar();
    setClickVonEditarEliminar();
    setClickVonDestacado();
    setClickVonNoDestacado();
}



// eventos del filtro
function setChangeFiltroIvaIncluido() {
    $('#cmb_filtro_iva_incluido').unbind();
    $('#cmb_filtro_iva_incluido').change(function () {
        setAdmBuscadorTop('ins_insumo_precios_gestion');
    });
}
function setChangeFiltroTipoInsumo() {
    $('#cmb_filtro_ins_tipo_insumo_id').unbind();
    $('#cmb_filtro_ins_tipo_insumo_id').change(function () {
        setAdmBuscadorTop('ins_insumo_precios_gestion');
    });
}
function setChangeFiltroProveedor() {
    $('#cmb_filtro_prv_proveedor_id').unbind();
    $('#cmb_filtro_prv_proveedor_id').change(function () {
        setAdmBuscadorTop('ins_insumo_precios_gestion');
    });
}
function setChangeFiltroEtiqueta() {
    $('#cmb_filtro_ins_etiqueta_id').unbind();
    $('#cmb_filtro_ins_etiqueta_id').change(function () {
        setAdmBuscadorTop('ins_insumo_precios_gestion');
    });
}
function setChangeFiltroCategoria() {
    $('#cmb_filtro_ins_categoria_id').unbind();
    $('#cmb_filtro_ins_categoria_id').change(function () {
        setAdmBuscadorTop('ins_insumo_precios_gestion');
    });
}
function setChangeFiltroMarcaInsumo() {
    $('#cmb_filtro_ins_marca_id').unbind();
    $('#cmb_filtro_ins_marca_id').change(function () {
        setAdmBuscadorTop('ins_insumo_precios_gestion');
    });
}
function setChangeFiltroVentaWeb() {
    $('#cmb_filtro_venta_web').unbind();
    $('#cmb_filtro_venta_web').change(function () {
        setAdmBuscadorTop('ins_insumo_precios_gestion');
    });
}
function setChangeFiltroPorcentajeIncremento() {
    $('#cmb_filtro_porcentaje_incremento').unbind();
    $('#cmb_filtro_porcentaje_incremento').change(function () {
        setAdmBuscadorTop('ins_insumo_precios_gestion');
    });
}
function setChangeFiltroImporteManual() {
    $('#cmb_filtro_importe_manual').unbind();
    $('#cmb_filtro_importe_manual').change(function () {
        setAdmBuscadorTop('ins_insumo_precios_gestion');
    });
}
function setChangeFiltroTipoListaPrecio() {
    $('#cmb_filtro_ins_tipo_lista_precio_id').unbind();
    $('#cmb_filtro_ins_tipo_lista_precio_id').change(function () {
        setAdmBuscadorTop('ins_insumo_precios_gestion');
    });
}
function setChangeFiltroOrdenarPor() {
    $('#cmb_filtro_ordenar_por').unbind();
    $('#cmb_filtro_ordenar_por').change(function () {
        setAdmBuscadorTop('ins_insumo_precios_gestion');
    });
}


function setClickChkInsumoUno() {
    $('#listado_adm_ins_insumo_precios_gestion .checkbox input[type=checkbox]').unbind();
    $('#listado_adm_ins_insumo_precios_gestion .checkbox input[type=checkbox]').click(function (e) {
        if ($(this).is(':checked')) {
            $(this).parents('tr').addClass('sel');
        } else {
            $(this).parents('tr').removeClass('sel');
        }
    });
}

function setClickChkInsumosAll() {
    $('#listado_adm_ins_insumo_precios_gestion #chk_insumo_id_all').unbind();
    $('#listado_adm_ins_insumo_precios_gestion #chk_insumo_id_all').click(function (e) {
        if ($(this).is(':checked')) {
            $("input[type=checkbox]").attr('checked', true);
        } else {
            $("input[type=checkbox]").attr('checked', false);
        }
    });
}


function setClickModificarCostoUno() {
    $('#listado_adm_ins_insumo_precios_gestion .costo .txt_costo').unbind();
    $('#listado_adm_ins_insumo_precios_gestion .costo .txt_costo').keypress(function (e) {

        var txt_costo = $(this).val();
        var ins_insumo_id = $(this).parents('.uno').attr('identificador');
        var elem = $(this);

        if (e.which === 13) {

            setTimeout(function () {
                if (confirm('Desea modificar el costo?')) {
                    setInsInsumoCostoUno(elem, ins_insumo_id, txt_costo);
                }
            }, 100);
        }
    });
}
function setInsInsumoCostoUno(elem, ins_insumo_id, txt_costo) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/ins_insumo_precios_gestion/set_ins_insumo_precios_gestion_costo_uno.php",
        data: 'ins_insumo_id=' + ins_insumo_id + '&txt_costo=' + txt_costo,
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            refreshAdmUno('ins_insumo_precios_gestion', ins_insumo_id);

            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickModificarPrecioImporteUno() {
    $('#listado_adm_ins_insumo_precios_gestion .importes .txt_precio_importe').unbind();
    $('#listado_adm_ins_insumo_precios_gestion .importes .txt_precio_importe').keypress(function (e) {

        var txt_precio_importe = $(this).val();
        var ins_insumo_id = $(this).parents('.uno').attr('identificador');
        var ins_tipo_lista_id = $(this).parents('.uno-tipo-lista-precio').attr('tipo_lista_precio_id');
        var elem = $(this);

        if (e.which === 13) {
            setTimeout(function () {
                if (confirm('Desea modificar el importe de venta?')) {
                    setInsInsumoPrecioImporteUno(elem, ins_insumo_id, ins_tipo_lista_id, txt_precio_importe);
                }
            }, 100);
        }
    });
}
function setInsInsumoPrecioImporteUno(elem, ins_insumo_id, ins_tipo_lista_id, txt_precio_importe) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/ins_insumo_precios_gestion/set_ins_insumo_precios_gestion_precio_importe_uno.php",
        data: 'ins_insumo_id=' + ins_insumo_id + '&ins_tipo_lista_id=' + ins_tipo_lista_id + '&txt_precio_importe=' + txt_precio_importe,
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            refreshAdmUno('ins_insumo_precios_gestion', ins_insumo_id);

            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Incremento Uno */
function setClickModificarPrecioPorcentajeIncrementoUno() {
    $('#listado_adm_ins_insumo_precios_gestion .porcentajes .txt_precio_porcentaje').unbind();
    $('#listado_adm_ins_insumo_precios_gestion .porcentajes .txt_precio_porcentaje').keypress(function (e) {

        var txt_precio_porcentaje = $(this).val();
        var ins_insumo_id = $(this).parents('.uno').attr('identificador');
        var ins_tipo_lista_id = $(this).parents('.uno-tipo-lista-precio').attr('tipo_lista_precio_id');
        var elem = $(this);

        if (e.which === 13) {
            setTimeout(function () {
                if (confirm('Desea modificar el porcentaje de venta?')) {
                    setInsInsumoPrecioPorcentajeIncrementoUno(elem, ins_insumo_id, ins_tipo_lista_id, txt_precio_porcentaje);
                }
            }, 100);
        }
    });
}
function setInsInsumoPrecioPorcentajeIncrementoUno(elem, ins_insumo_id, ins_tipo_lista_id, txt_precio_porcentaje) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/ins_insumo_precios_gestion/set_ins_insumo_precios_gestion_precio_porcentaje_uno.php",
        data: 'ins_insumo_id=' + ins_insumo_id + '&ins_tipo_lista_id=' + ins_tipo_lista_id + '&txt_precio_porcentaje=' + txt_precio_porcentaje,
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            refreshAdmUno('ins_insumo_precios_gestion', ins_insumo_id);

            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Descuento Uno */
function setClickModificarPrecioPorcentajeDescuentoUno() {
    $('#listado_adm_ins_insumo_precios_gestion .porcentajes .txt_precio_porcentaje_descuento').unbind();
    $('#listado_adm_ins_insumo_precios_gestion .porcentajes .txt_precio_porcentaje_descuento').keypress(function (e) {

        var txt_precio_porcentaje_descuento = $(this).val();
        var ins_insumo_id = $(this).parents('.uno').attr('identificador');
        var ins_tipo_lista_id = $(this).parents('.uno-tipo-lista-precio').attr('tipo_lista_precio_id');
        var elem = $(this);

        if (e.which === 13) {
            setTimeout(function () {
                if (confirm('Desea modificar el porcentaje de descuento maximo?')) {
                    setInsInsumoPrecioPorcentajeDescuentoUno(elem, ins_insumo_id, ins_tipo_lista_id, txt_precio_porcentaje_descuento);
                }
            }, 100);
        }
    });
}
function setInsInsumoPrecioPorcentajeDescuentoUno(elem, ins_insumo_id, ins_tipo_lista_id, txt_precio_porcentaje_descuento) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/ins_insumo_precios_gestion/set_ins_insumo_precios_gestion_precio_porcentaje_descuento_uno.php",
        data: 'ins_insumo_id=' + ins_insumo_id + '&ins_tipo_lista_id=' + ins_tipo_lista_id + '&txt_precio_porcentaje_descuento=' + txt_precio_porcentaje_descuento,
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            refreshAdmUno('ins_insumo_precios_gestion', ins_insumo_id);

            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Cantidad Minima Venta */
function setClickModificarPrecioCantidadMinimaVentaUno(){
    $('#listado_adm_ins_insumo_precios_gestion .porcentajes .txt_cantidad_minima_venta').unbind();
    $('#listado_adm_ins_insumo_precios_gestion .porcentajes .txt_cantidad_minima_venta').keypress(function (e) {

        var txt_cantidad_minima_venta = $(this).val();
        var ins_insumo_id = $(this).parents('.uno').attr('identificador');
        var ins_tipo_lista_id = $(this).parents('.uno-tipo-lista-precio').attr('tipo_lista_precio_id');
        var elem = $(this);

        if (e.which === 13) {
            setTimeout(function () {
                if (confirm('Desea modificar la cantidad minima de venta?')) {
                    setInsInsumoPrecioCantidadMinimaVentaUno(elem, ins_insumo_id, ins_tipo_lista_id, txt_cantidad_minima_venta);
                }
            }, 100);
        }
    });
}
function setInsInsumoPrecioCantidadMinimaVentaUno(elem, ins_insumo_id, ins_tipo_lista_id, txt_cantidad_minima_venta) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/ins_insumo_precios_gestion/set_ins_insumo_precios_gestion_precio_cantidad_minima_venta_uno.php",
        data: 'ins_insumo_id=' + ins_insumo_id + '&ins_tipo_lista_id=' + ins_tipo_lista_id + '&txt_cantidad_minima_venta=' + txt_cantidad_minima_venta,
        dataType: "json",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            refreshAdmUno('ins_insumo_precios_gestion', ins_insumo_id);

            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Modificar Importe */
function setClickModificarImportes() {
    $('.div_listado_buscador .boton.modificar-importe').unbind();
    $('.div_listado_buscador .boton.modificar-importe').click(function (e) {
        verModalModificarImportes();
    });
}
function verModalModificarImportes() {
    var form = $("#form_cuerpo");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_precios_gestion/modal_modificar_importes.php",
        data: form.serialize(),
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Modificar Importes',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            //refreshAdmUno('ins_insumo_precios_gestion', insumo_id);
            //refreshAdmAll('ins_insumo_precios_gestion', 1);

            $('.div_modal').html(data);
            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnModificarPrecioVenta() {
    $(".div_modal .datos.modificar-importe .col.tipos-precios .uno.tipo-precio .botonera .boton.modificar-precio").unbind();
    $(".div_modal .datos.modificar-importe .col.tipos-precios .uno.tipo-precio .botonera .boton.modificar-precio").click(function () {
        var rad_aplicar_todos = $("input[name=rad_aplicar_todos]:checked").val();
        var tipo_lista_precio_id = $(this).parents('.uno.tipo-precio').attr('tipo_lista_precio_id');
        var porcentaje = $("#txt_porcentaje_" + tipo_lista_precio_id).val();
        var importe = $("#txt_importe_" + tipo_lista_precio_id).val();

        if (porcentaje == '' && importe == '') {
            alert('Debe ingresar un porcentaje o un importe');
            return;
        }
        if (confirm('Desea actualizar precio de venta?')) {
            setModificarPrecioVenta(rad_aplicar_todos, tipo_lista_precio_id, porcentaje, importe);
        }
    });
}
function setModificarPrecioVenta(rad_aplicar_todos, tipo_lista_precio_id, porcentaje, importe) {
    var form = $("#form_cuerpo");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_precios_gestion/set_modificar_precio_venta.php",
        data: form.serialize() + '&rad_aplicar_todos=' + rad_aplicar_todos + '&tipo_lista_precio_id=' + tipo_lista_precio_id + '&porcentaje=' + porcentaje + '&importe=' + importe,
        dataType: "html",
        beforeSend: function (objeto) {
            $(".div_modal .datos.modificar-importe .col.tipos-precios #div_tipo_lista_precio_id_" + tipo_lista_precio_id + " .tipos-precios-info .botonera").html(img_loading);
        },
        success: function (data) {

            $("#div_tipo_lista_precio_id_" + tipo_lista_precio_id + ' .botonera').hide();
            $("#div_tipo_lista_precio_id_" + tipo_lista_precio_id + ' .confirmacion').show();

            $("input:checked").each(function () {
                var insumo_id = $(this).val();
                //refreshAdmUno('ins_insumo_precios_gestion', insumo_id);

                refreshAdmUnoImporte(insumo_id, tipo_lista_precio_id);
            });


            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnModificarPrecioCosto() {
    $(".div_modal .datos.modificar-importe .col.tipos-precios .uno.tipo-precio .botonera .boton.modificar-costo").unbind();
    $(".div_modal .datos.modificar-importe .col.tipos-precios .uno.tipo-precio .botonera .boton.modificar-costo").click(function () {
        var rad_aplicar_todos = $("input[name=rad_aplicar_todos]:checked").val();
        var porcentaje = $("#txt_porcentaje_costo").val();
        var importe = $("#txt_importe_costo").val();
        var descripcion = $("#txt_descripcion_costo").val();
        var observacion = $("#txa_observacion_costo").val();

        if (porcentaje == '' && importe == '') {
            alert('Debe ingresar un porcentaje o un importe');
            return;
        }
        if (descripcion == '') {
            alert('Debe ingresar un motivo');
            return;
        }

        if (confirm('Desea actualizar costo de insumo?')) {
            setModificarPrecioCosto(rad_aplicar_todos, porcentaje, importe, descripcion, observacion);
        }
    });
}
function setModificarPrecioCosto(rad_aplicar_todos, porcentaje, importe, descripcion, observacion) {
    var form = $("#form_cuerpo");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_precios_gestion/set_modificar_costo.php",
        data: form.serialize() + '&rad_aplicar_todos=' + rad_aplicar_todos + '&porcentaje=' + porcentaje + '&importe=' + importe + '&descripcion=' + descripcion + '&observacion=' + observacion,
        dataType: "html",
        beforeSend: function (objeto) {
            $(".div_modal .datos.modificar-importe .col.tipos-precios .tipos-precios-info").html(img_loading);
        },
        success: function (data) {

            $("input:checked").each(function () {
                var insumo_id = $(this).val();
                refreshAdmUno('ins_insumo_precios_gestion', insumo_id);
            });

            $(".div_modal").dialog('close');

            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnModificarPrecioDescuento() {
    $(".div_modal .datos.modificar-importe .col.tipos-precios .uno.tipo-precio .botonera .boton.modificar-descuento").unbind();
    $(".div_modal .datos.modificar-importe .col.tipos-precios .uno.tipo-precio .botonera .boton.modificar-descuento").click(function () {
        var rad_aplicar_todos = $("input[name=rad_aplicar_todos]:checked").val();
        var tipo_lista_precio_id = $(this).parents('.uno.tipo-precio').attr('tipo_lista_precio_id');
        var porcentaje_descuento = $("#txt_porcentaje_descuento_" + tipo_lista_precio_id).val();

        if (porcentaje_descuento == '') {
            alert('Debe ingresar un porcentaje de descuento');
            return;
        }
        if (confirm('Desea actualizar descuento maximo?')) {
            setModificarPrecioDescuento(rad_aplicar_todos, tipo_lista_precio_id, porcentaje_descuento);
        }
    });
}
function setModificarPrecioDescuento(rad_aplicar_todos, tipo_lista_precio_id, porcentaje_descuento) {
    var form = $("#form_cuerpo");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_precios_gestion/set_modificar_descuento.php",
        data: form.serialize() + '&rad_aplicar_todos=' + rad_aplicar_todos + '&tipo_lista_precio_id=' + tipo_lista_precio_id + '&porcentaje_descuento=' + porcentaje_descuento,
        dataType: "html",
        beforeSend: function (objeto) {
            $(".div_modal .datos.modificar-importe .col.tipos-precios #div_tipo_lista_precio_id_" + tipo_lista_precio_id + " .tipos-precios-info .botonera").html(img_loading);
        },
        success: function (data) {

            $("#div_descuento_tipo_lista_precio_id_" + tipo_lista_precio_id + ' .botonera').hide();
            $("#div_descuento_tipo_lista_precio_id_" + tipo_lista_precio_id + ' .confirmacion').show();

            $("input:checked").each(function () {
                var insumo_id = $(this).val();
                //refreshAdmUno('ins_insumo_precios_gestion', insumo_id);

                refreshAdmUnoImporte(insumo_id, tipo_lista_precio_id);
            });


            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Vincular Categoria */
function setClickVincularCategoria() {
    $('.div_listado_buscador .boton.vincular-categoria').unbind();
    $('.div_listado_buscador .boton.vincular-categoria').click(function (e) {
        verModalVincularCategoria();
    });
}
function verModalVincularCategoria() {
    var form = $("#form_cuerpo");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_precios_gestion/modal_vincular_categoria.php",
        data: form.serialize(),
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 550,
                modal: true,
                title: 'Vincular Categoria',
                close: function () {

                },
                hide: 'fade',
            });
        },
        success: function (data) {
            //refreshAdmUno('ins_insumo_precios_gestion', insumo_id);
            //refreshAdmAll('ins_insumo_precios_gestion', 1);

            $('.div_modal').html(data);
            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnVincularCategoriaGuardar() {
    $(".div_modal .datos.modificar-importe .col.categoria .botonera #btn_vincular_categoria").unbind();
    $(".div_modal .datos.modificar-importe .col.categoria .botonera #btn_vincular_categoria").click(function () {
        var elem = $(this);
        var rad_aplicar_todos = $("input[name=rad_aplicar_todos]:checked").val();
        var categoria_id = $("#ins_categoria_id").val();

        if (categoria_id == '') {
            alert('Debe seleccionar una categoria');
            return;
        }
        if (confirm('Desea vincular la categoria a los productos seleccionados?')) {
            setVincularCategoria(rad_aplicar_todos, elem, categoria_id);
        }
    });
}
function setVincularCategoria(rad_aplicar_todos, elem, categoria_id) {
    var form = $("#form_cuerpo");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_precios_gestion/set_vincular_categoria.php",
        data: form.serialize() + '&rad_aplicar_todos=' + rad_aplicar_todos + '&categoria_id=' + categoria_id,
        dataType: "html",
        beforeSend: function (objeto) {
            elem.parents('.botonera').html(img_loading);
        },
        success: function (data) {

            $('.div_modal').dialog('close');

            //var pag = $('#hdn_pag_actual').val();
            //refreshAdmAll('ins_insumo_precios_gestion', pag);

            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnVincularEtiquetaGuardar() {
    $(".div_modal .datos.modificar-importe .col.categoria .botonera #btn_vincular_etiqueta").unbind();
    $(".div_modal .datos.modificar-importe .col.categoria .botonera #btn_vincular_etiqueta").click(function () {
        var elem = $(this);
        var rad_aplicar_todos = $("input[name=rad_aplicar_todos]:checked").val();
        var etiqueta_id = $("#ins_etiqueta_id").val();

        if (etiqueta_id == '') {
            alert('Debe seleccionar una etiqueta');
            return;
        }
        if (confirm('Desea vincular la etiqueta a los productos seleccionados?')) {
            setVincularEtiqueta(rad_aplicar_todos, elem, etiqueta_id);
        }
    });
}
function setVincularEtiqueta(rad_aplicar_todos, elem, etiqueta_id) {
    var form = $("#form_cuerpo");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_precios_gestion/set_vincular_etiqueta.php",
        data: form.serialize() + '&rad_aplicar_todos=' + rad_aplicar_todos + '&etiqueta_id=' + etiqueta_id,
        dataType: "html",
        beforeSend: function (objeto) {
            elem.parents('.botonera').html(img_loading);
        },
        success: function (data) {

            $('.div_modal').dialog('close');

            //var pag = $('#hdn_pag_actual').val();
            //refreshAdmAll('ins_insumo_precios_gestion', pag);

            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnQuitarEtiquetaGuardar() {
    $(".div_modal .datos.modificar-importe .col.categoria .botonera #btn_quitar_etiqueta").unbind();
    $(".div_modal .datos.modificar-importe .col.categoria .botonera #btn_quitar_etiqueta").click(function () {
        var rad_aplicar_todos = $("input[name=rad_aplicar_todos]:checked").val();
        var elem = $(this);
        var etiqueta_id = $("#ins_etiqueta_id").val();

        if (etiqueta_id == '') {
            alert('Debe seleccionar una etiqueta');
            return;
        }
        if (confirm('Desea quitar la etiqueta a los productos seleccionados?')) {
            setQuitarEtiqueta(rad_aplicar_todos, elem, etiqueta_id);
        }
    });
}
function setQuitarEtiqueta(rad_aplicar_todos, elem, etiqueta_id) {
    var form = $("#form_cuerpo");

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_precios_gestion/set_quitar_etiqueta.php",
        data: form.serialize() + '&rad_aplicar_todos=' + rad_aplicar_todos + '&etiqueta_id=' + etiqueta_id,
        dataType: "html",
        beforeSend: function (objeto) {
            elem.parents('.botonera').html(img_loading);
        },
        success: function (data) {

            $('.div_modal').dialog('close');

            //var pag = $('#hdn_pag_actual').val();
            //refreshAdmAll('ins_insumo_precios_gestion', pag);

            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



/* Refresh Uno Importe */
function refreshAdmUnoImporte(insumo_id, tipo_lista_precio_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_precios_gestion/refresh_ins_insumo_precios_gestion_uno_importe.php",
        data: 'insumo_id=' + insumo_id + '&tipo_lista_precio_id=' + tipo_lista_precio_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $("#td_lista_precio_" + insumo_id + "_" + tipo_lista_precio_id).css("opacity", "0.4");
            $("#td_lista_precio_" + insumo_id + "_" + tipo_lista_precio_id).html(img_loading);
        },
        success: function (data) {
            $("#td_lista_precio_" + insumo_id + "_" + tipo_lista_precio_id).css("opacity", "1");
            $("#td_lista_precio_" + insumo_id + "_" + tipo_lista_precio_id).html(data);

            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/**
 * 
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 16/03/2017
 */
function setClickBtnHabilitarListaPrecio()
{
    $(".accion.habilitar ").unbind();
    $(".accion.habilitar ").click(function ()
    {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        var tipo_lista_precio_id = $(this).parents('.uno-tipo-lista-precio').attr('tipo_lista_precio_id');
        var habilitar = 1;

        setHabilitarListaPrecio(insumo_id, tipo_lista_precio_id, habilitar);
        //setHabilitarListaPrecio(habilitar);
    });
}


/**
 * 
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 16/03/2017
 */
function setClickBtnDeshabilitarListaPrecio()
{
    $(".accion.deshabilitar ").unbind();
    $(".accion.deshabilitar ").click(function ()
    {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        var tipo_lista_precio_id = $(this).parents('.uno-tipo-lista-precio').attr('tipo_lista_precio_id');
        var habilitar = 0;

        setHabilitarListaPrecio(insumo_id, tipo_lista_precio_id, habilitar);
    });
}

/**
 * 
 * @param {type} insumo_id
 * @param {type} tipo_lista_precio_id
 * @param {type} habilitar
 * @returns {undefined}
 * @creado_por Esteban Martinez
 * @creado 16/03/2017
 */
function setHabilitarListaPrecio(insumo_id, tipo_lista_precio_id, habilitar)
{
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_precios_gestion/set_habilitar_lista_precio.php",
        data: 'ins_insumo_id=' + insumo_id + '&ins_tipo_lista_precio_id=' + tipo_lista_precio_id + '&habilitar=' + habilitar,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {

            refreshAdmUnoImporte(insumo_id, tipo_lista_precio_id);

            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
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
        url: "ajax/modulos/ins_insumo_precios_gestion/set_von_habilitar.php",
        data: "insumo_id=" + insumo_id + "&habilitar=" + habilitar,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmUno('ins_insumo_precios_gestion', insumo_id);

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
        url: "ajax/modulos/ins_insumo_precios_gestion/modal_von_info_editar.php",
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
                    refreshAdmUno('ins_insumo_precios_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            setInitInsInsumoPreciosGestion();
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
        url: "ajax/modulos/ins_insumo_precios_gestion/set_von_info_editar_guardar.php",
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
        url: "ajax/modulos/ins_insumo_precios_gestion/del_von_info_editar_eliminar.php",
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
        url: "ajax/modulos/ins_insumo_precios_gestion/set_von_destacado.php",
        data: "insumo_id=" + insumo_id + "&destacado=" + destacado,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmUno('ins_insumo_precios_gestion', insumo_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

/*
 Ver Ficha del Insumo
 */
function setClickInsInsumoGestionFicha() {
    $('#listado_adm_ins_insumo_precios_gestion .adm_botones_accion.ver-ficha').unbind();
    $('#listado_adm_ins_insumo_precios_gestion .adm_botones_accion.ver-ficha').click(function (e) {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        verModalFichaInsumo(insumo_id);
    });
}

function verModalFichaInsumo(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_precios_gestion/modal_insumo_ficha.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Ficha del Insumo',
                close: function () {
                    //refreshAdmUno('ins_insumo_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            //refreshAdmUno('ins_insumo_gestion', insumo_id);

            $('.div_modal').html(data);
            
            setTimeout(function(){
                $( "#tabs" ).tabs({ active: 2 });
                //$('a[href="#tabs_costos"]').click();
            }, 1000);
            
            setInitInsInsumoPreciosGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}