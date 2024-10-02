// archivo js del modulo 'carrito'
$(function ($) {
    setInitCarrito();
});

function setInitCarrito() {

    // carrito de compras
    setClickAgregarInsumoACarrito();
    setClickAgregarInsumoACarritoBtnAgregar();

    // modal agregar
    setChangeCarritoDbsugCliCliente();
    setChangeCarritoCmbInsTipoListaPrecio();
    setChangeCarritoTxtCantidad();
    setChangeCarritoCmbInsInsumoBulto();

    // acciones basicas
    setClickCarritoBtnVer();
    setClickCarritoBtnVerPresupuestos();
    setClickCarritoBtnAbandonar();
    setClickCarritoBtnNuevoPresupuesto();
    setClickCarritoBtnVolverAlBuscador();

}

function setClickAgregarInsumoACarrito() {
    $('#listado_adm_ins_insumo_gestion .adm_botones_accion.agregar-carrito').unbind();
    $('#listado_adm_ins_insumo_gestion .adm_botones_accion.agregar-carrito').click(function (e) {
        var ins_insumo_id = $(this).parents('.uno').attr('identificador');
        var ins_tipo_lista_precio_id = $("#cmb_filtro_ins_tipo_lista_precio_id").val();
        verModalAgregarInsumoACarrito(ins_insumo_id, ins_tipo_lista_precio_id);
    });
    $('.grid-datos.ins-insumo-gestion .acciones .agregar-carrito').unbind();
    $('.grid-datos.ins-insumo-gestion .acciones .agregar-carrito').click(function () {
        var ins_insumo_id = $(this).parents('.uno').attr('identificador');
        var ins_tipo_lista_precio_id = $("#cmb_filtro_ins_tipo_lista_precio_id").val();
        verModalAgregarInsumoACarrito(ins_insumo_id, ins_tipo_lista_precio_id);
    });
}

function verModalAgregarInsumoACarrito(ins_insumo_id, ins_tipo_lista_precio_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/vta_presupuesto_carrito/modal_carrito_insumo_agregar.php",
        data: 'ins_insumo_id=' + ins_insumo_id + '&ins_tipo_lista_precio_id=' + ins_tipo_lista_precio_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Agregar a Carrito de Ventas',
                close: function () {
                    refreshBloqueCarritoTop();
                    refreshAdmUno('ins_insumo_gestion', ins_insumo_id);
                },
                create: function(){
                    //alert('create');
                },
                open: function(){
                    //alert('open');
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            
            // -------------------------------------------------------------------------
            // se elimina el div, si existiese
            // -------------------------------------------------------------------------
            $('.div_modal').remove();

            // -------------------------------------------------------------------------
            // se crea el div
            // -------------------------------------------------------------------------
            $('<div>', {
                id: '',
                class: 'div_modal',
                title: ''
            }).appendTo('body');            
            
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Agregar a Carrito de Ventas',
                close: function () {
                    refreshBloqueCarritoTop();
                    refreshAdmUno('ins_insumo_gestion', ins_insumo_id);
                },
                create: function(){
                    $('.div_modal').html(data);
                    //setCarritoInsTipoListaPrecioCmbPorCliCliente(0);
                },
                open: function(){
                },
                hide: 'fade',
            });

            setInitInsInsumoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickAgregarInsumoACarritoBtnAgregar() {
    $(".div_modal .datos.agregar-insumo-a-carrito #btn_agregar_insumo").unbind();
    $(".div_modal .datos.agregar-insumo-a-carrito #btn_agregar_insumo").click(function () {

        var ins_insumo_id = $(this).parents(".datos").attr("ins_insumo_id");
        var vta_presupuesto_id = $(this).parents(".datos").attr("vta_presupuesto_id");
        var ins_tipo_lista_precio_id = $(this).parents(".datos").attr("ins_tipo_lista_precio_id");
        var cli_cliente_id = $(this).parents(".datos").attr("cli_cliente_id");

        setInsInsumoAgregarInsumoACarritoBtnAgregar(ins_insumo_id, vta_presupuesto_id, ins_tipo_lista_precio_id, cli_cliente_id);
    });
}

function setInsInsumoAgregarInsumoACarritoBtnAgregar(ins_insumo_id, vta_presupuesto_id, ins_tipo_lista_precio_id, cli_cliente_id) {

    var form = $("#form_agregar_insumo");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_carrito/set_carrito_insumo_agregar.php",
        data: form.serialize() + '&ins_insumo_id=' + ins_insumo_id + '&vta_presupuesto_id=' + vta_presupuesto_id + '&ins_tipo_lista_precio_id=' + ins_tipo_lista_precio_id + '&cli_cliente_id=' + cli_cliente_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".botonera").hide();
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
                $(".div_modal").dialog("close");
            }

            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshBloqueCarritoTop() {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_carrito/refresh_bloque_carrito.php",
        data: "",
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_bloque_carrito .bloque-carrito').css("opacity", "0.4");
            //$(".div_bloque_carrito .bloque-carrito").html(img_loading);
        },
        success: function (data) {
            $(".div_bloque_carrito").html(data);

            setInitCarrito();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setClickCarritoBtnAbandonar() {
    $(".div_bloque_carrito .bloque-carrito #btn_carrito_abandonar").unbind();
    $(".div_bloque_carrito .bloque-carrito #btn_carrito_abandonar").click(function () {
        if (confirm('Esta seguro que desea abandonar el presupuesto actual?')) {
            setCarritoBtnAbandonar();
        }
    });
}

function setCarritoBtnAbandonar() {

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_carrito/set_carrito_abandonar.php",
        data: "",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshBloqueCarritoTop();
            //location.href = 'index.php';
            location.href = 'ins_insumo_gestion.php';
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setClickCarritoBtnVer() {
    $(".div_bloque_carrito .bloque-carrito #btn_carrito_ver").unbind();
    $(".div_bloque_carrito .bloque-carrito #btn_carrito_ver").click(function () {
        var vta_presupuesto_id = $("#btn_carrito_ver").attr('vta_presupuesto_id');
        document.location.href = "vta_presupuesto_gestion_edicion.php?vta_presupuesto_id=" + vta_presupuesto_id;
    });
}

function setClickCarritoBtnVerPresupuestos() {
    $(".div_bloque_carrito .bloque-carrito #btn_carrito_ver_presupuestos").unbind();
    $(".div_bloque_carrito .bloque-carrito #btn_carrito_ver_presupuestos").click(function () {
        document.location.href = "vta_presupuesto_gestion.php";
    });
}

function setClickCarritoBtnVolverAlBuscador() {
    $(".div_bloque_carrito .bloque-carrito #btn_carrito_volver_buscador").unbind();
    $(".div_bloque_carrito .bloque-carrito #btn_carrito_volver_buscador").click(function () {
        document.location.href = "ins_insumo_gestion.php";
    });
}

function setClickCarritoBtnNuevoPresupuesto() {
    $(".div_bloque_carrito .bloque-carrito #btn_carrito_nuevo").unbind();
    $(".div_bloque_carrito .bloque-carrito #btn_carrito_nuevo").click(function () {
        if (confirm('Desea generar un nuevo presupuesto?')) {
            setCarritoBtnNuevoPresupuesto();
        }
    });
}

function setCarritoBtnNuevoPresupuesto() {
    // se envia el tipo de lista seleccionado en el filtro top.
    var ins_tipo_lista_precio_id = $("#cmb_filtro_ins_tipo_lista_precio_id").val();
//    alert(ins_tipo_lista_precio_id);return;

    if (ins_tipo_lista_precio_id == undefined) {
        ins_tipo_lista_precio_id = 0;
    }

    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_carrito/set_carrito_nuevo_presupuesto.php",
        data: "ins_tipo_lista_precio_id=" + ins_tipo_lista_precio_id,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            //refreshBloqueCarritoTop();
            document.location.href = "ins_insumo_gestion.php";
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setChangeCarritoDbsugCliCliente() {
    return; // no se actualiza lista de precio al cambiar el cliente
    var timeout;

    $('.datos.agregar-insumo-a-carrito #dbsug_cli_cliente_id').unbind();
    $('.datos.agregar-insumo-a-carrito #dbsug_cli_cliente_id').change(function () {

        var cli_cliente_id = $(this).val();

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        timeout = setTimeout(function () {
            setCarritoInsTipoListaPrecioCmbPorCliCliente(cli_cliente_id);
        }, 500);
    });
}
function setCarritoInsTipoListaPrecioCmbPorCliCliente(cli_cliente_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/ins_tipo_lista_precio/get_json_ins_tipo_lista_precio_por_cli_cliente.php",
        data: "cli_cliente_id=" + cli_cliente_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb_tipo_lista_precio = $('#cmb_ins_tipo_lista_precio_id');
            cmb_tipo_lista_precio.empty();
            if (len == 0) {
                cmb_tipo_lista_precio.append('<option value="">...</option>');
            } else {
                for (var i = 0; i < len; i++) {
                    cmb_tipo_lista_precio.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
                }
            }

            // se ejecuta trigger de change cmb lista de precio
            $('.datos.agregar-insumo-a-carrito #cmb_ins_tipo_lista_precio_id').trigger('change');            
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}


function setChangeCarritoCmbInsTipoListaPrecio() {
    $(".datos.agregar-insumo-a-carrito #cmb_ins_tipo_lista_precio_id").unbind();
    $(".datos.agregar-insumo-a-carrito #cmb_ins_tipo_lista_precio_id").change(function () {
        var ins_insumo_id = $(this).parents(".datos").attr("ins_insumo_id");
        var vta_presupuesto_id = $(this).parents(".datos").attr("vta_presupuesto_id");
        var ins_tipo_lista_precio_id = $(this).parents(".datos").attr("ins_tipo_lista_precio_id");
        var cli_cliente_id = $(this).parents(".datos").attr("cli_cliente_id");
        var ins_insumo_bulto_id = $(this).parents(".datos").attr("ins_insumo_bulto_id");

        refreshBloqueModalCarritoInsumoAgregarBultos(ins_insumo_id, ins_tipo_lista_precio_id);
        refreshBloqueModalCarritoInsumoAgregarImportes(ins_insumo_id, vta_presupuesto_id, ins_tipo_lista_precio_id, cli_cliente_id, ins_insumo_bulto_id);
    });
}

function setChangeCarritoTxtCantidad() {
    try {
        var timeout;

        $(".datos.agregar-insumo-a-carrito #txt_cantidad").unbind();
        $(".datos.agregar-insumo-a-carrito #txt_cantidad").keyup(function (e) {

            var ins_insumo_id = $(this).parents(".datos").attr("ins_insumo_id");
            var vta_presupuesto_id = $(this).parents(".datos").attr("vta_presupuesto_id");
            var ins_tipo_lista_precio_id = $(this).parents(".datos").attr("ins_tipo_lista_precio_id");
            var cli_cliente_id = $(this).parents(".datos").attr("cli_cliente_id");
            var ins_insumo_bulto_id = 0;
            if ($("#cmb_ins_insumo_bulto_id").length) {
                ins_insumo_bulto_id = $("#cmb_ins_insumo_bulto_id").val();
            }

            if (timeout) {
                clearTimeout(timeout);
                timeout = null;
            }
            timeout = setTimeout(function () {
                refreshBloqueModalCarritoInsumoAgregarImportes(ins_insumo_id, vta_presupuesto_id, ins_tipo_lista_precio_id, cli_cliente_id, ins_insumo_bulto_id);
            }, 700);
        });

        $(".datos.agregar-insumo-a-carrito #txt_cantidad").spinner({
            min: $(this).attr('min'),
            step: $(this).attr('step'),
            numberFormat: "n",
            spin: function (event, ui) {

                var ins_insumo_id = $(this).parents(".datos").attr("ins_insumo_id");
                var vta_presupuesto_id = $(this).parents(".datos").attr("vta_presupuesto_id");
                var ins_tipo_lista_precio_id = $(this).parents(".datos").attr("ins_tipo_lista_precio_id");
                var cli_cliente_id = $(this).parents(".datos").attr("cli_cliente_id");
                var ins_insumo_bulto_id = 0;
                if ($("#cmb_ins_insumo_bulto_id").length) {
                    ins_insumo_bulto_id = $("#cmb_ins_insumo_bulto_id").val();
                }

                if (timeout) {
                    clearTimeout(timeout);
                    timeout = null;
                }

                timeout = setTimeout(function () {
                    refreshBloqueModalCarritoInsumoAgregarImportes(ins_insumo_id, vta_presupuesto_id, ins_tipo_lista_precio_id, cli_cliente_id, ins_insumo_bulto_id);
                }, 500);
            }
        });
    } catch (e) {
        //alert("error: "+ e.message);
    }
}

function setChangeCarritoCmbInsInsumoBulto() {
    $(".datos.agregar-insumo-a-carrito #cmb_ins_insumo_bulto_id").unbind();
    $(".datos.agregar-insumo-a-carrito #cmb_ins_insumo_bulto_id").change(function () {
        var ins_insumo_id = $(this).parents(".datos").attr("ins_insumo_id");
        var vta_presupuesto_id = $(this).parents(".datos").attr("vta_presupuesto_id");
        var ins_tipo_lista_precio_id = $(this).parents(".datos").attr("ins_tipo_lista_precio_id");
        var cli_cliente_id = $(this).parents(".datos").attr("cli_cliente_id");
        var ins_insumo_bulto_id = 0;
        if ($("#cmb_ins_insumo_bulto_id").length) {
            ins_insumo_bulto_id = $("#cmb_ins_insumo_bulto_id").val();
        }

        refreshBloqueModalCarritoInsumoAgregarImportes(ins_insumo_id, vta_presupuesto_id, ins_tipo_lista_precio_id, cli_cliente_id, ins_insumo_bulto_id);
    });
}


function refreshBloqueModalCarritoInsumoAgregarImportes(ins_insumo_id, vta_presupuesto_id, ins_tipo_lista_precio_id, cli_cliente_id, ins_insumo_bulto_id) {
    var form = $("#form_agregar_insumo");

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_carrito/refresh_bloque_carrito_insumo_agregar_importes.php",
        data: form.serialize() + '&ins_insumo_id=' + ins_insumo_id + '&vta_presupuesto_id=' + vta_presupuesto_id + '&ins_tipo_lista_precio_id=' + ins_tipo_lista_precio_id + '&ins_insumo_bulto_id=' + ins_insumo_bulto_id,
        beforeSend: function (objeto) {
            $(".datos.agregar-insumo-a-carrito .bloque-carrito-importes").html(img_loading);
        },
        success: function (data) {
            $(".datos.agregar-insumo-a-carrito .bloque-carrito-importes").html(data);

            //setInitCarrito(); // causa error, posible conflicto con la reasignacion de evento con spinner
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });

}
function refreshBloqueModalCarritoInsumoAgregarBultos(ins_insumo_id, ins_tipo_lista_precio_id) {
    var form = $("#form_agregar_insumo");

    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_carrito/refresh_bloque_carrito_insumo_agregar_bultos.php",
        data: form.serialize() + '&ins_insumo_id=' + ins_insumo_id + '&ins_tipo_lista_precio_id=' + ins_tipo_lista_precio_id,
        beforeSend: function (objeto) {
            $(".datos.agregar-insumo-a-carrito .bloque-carrito-bultos").html(img_loading);
        },
        success: function (data) {
            $(".datos.agregar-insumo-a-carrito .bloque-carrito-bultos").html(data);

            //setInitCarrito(); // causa error, posible conflicto con la reasignacion de evento con spinner
            setChangeCarritoCmbInsInsumoBulto();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });

}
