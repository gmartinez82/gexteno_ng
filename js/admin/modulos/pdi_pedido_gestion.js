// archivo js del modulo 'pdi_pedido'
var tipo_imputacion = false;

$(function ($) {
    setInitPdiPedidos();
});

function setInitPdiPedidos() {

    // general
    setClickBtnAgregarPedido();
    setClickBtnCambiarTipoAsignacion();
    setClickBtnCambiarTipoAsignacionConfirmar();
    setChangeCmbPanol();
    setChangeInsumo();
    setChangeTxtCantidad();

    setClickBtnAgregarAjuste();
    setChangeCmbPanolAjuste();
    setChangeInsumoAjuste();
    setChangeTxtCantidadAjuste();

    setClickBtnAgregarEntregaOperario();
    setChangeCmbPanolEntregaOperario();
    setChangeInsumoEntregaOperario();
    setChangeTxtCantidadEntregaOperario();
    setChangeCmbCocheEntregaOperario();
    setChangeCmbOperarioEntregaOperario();
    setChangeCmbOrdenTrabajoEntregaOperario();
    setChangeCmbTareaResueltaEntregaOperario();

    setClickChkCochesVerTodos();

    // Agregar Entrega Operario SS - O y TR
    setClickAgregarEntregaOperarioNuevaOT();
    setClickVerModalFiltroOTs();
    SetClickBotonBuscadorOtSeleccionar();
    SetClickBotonBuscadorOtVincular();
    setClickAgregarEntregaOperarioNuevaTareaResuelta();
    setChangeBuscadorTareas();
    setClickAgregarEntregaOperarioNuevaTareaResueltaUnoTarea();
    setClickBtnConfirmarRegistroTareaResuelta();

    // Imputar Masivo
    setClickBtnAgregarImputarMasivo();
    setClickBtnAgregarImputarMasivoAgregarInsumo();
    setClickBtnAgregarImputarMasivoEditarInsumo();
    setClickBtnAgregarImputarMasivoEliminarInsumo();
    setClickBtnLimpiarImputarMasivo();
    setChangePanolImputarMasivo();
    setChangeCocheImputarMasivo();
    setChangeOperarioImputarMasivo();

    setClickImputarMasivoChkCochesVerTodos();
    setClickImputarMasivoChkOperariosVerTodos();

    setClickImputarMasivoNuevaOT();
    setClickImputarMasivoNuevaTareaResuelta();

    setClickBtnBuscadorInsumoAgregar();
    setClickBtnBuscadorVincularInsumoArbol();
    setChangeInsumoImputarMasivo();
    setChangeOtImputarMasivo();
    setChangeCantidadImputarMasivo();

    setClickImputarMasivoHistorialAsignado();
    setClickImputarMasivoRegistrar();

    // se agrega evento para generar Pde Pedido
    setClickBtnAgregarPedidoPde();

    setClickBloqueStockInsumosUnoPanol();
    setSubmitFormModalPdiPedido();

    setChangeTxtCantidadEntrega();
    setChangeTxtCantidadDespachar();
    setChangeTxtCantidadRecibir();

    // bloque ajustes, click en dbsuggest uno
    setClickBloqueInsumoIdentificadoUno();
    setClickBloqueInsumoIdentificadoSalienteUno();
    setClickBloqueInsumoIdentificadoDespacharUno();
    setClickBloqueInsumoIdentificadoRecibirUno();
    setClickBloqueInsumoIdentificadoEntregaOperarioUno();

    // filtros
    setChangePdiPedidoFiltroPanolOrigen();
    setChangePdiPedidoFiltroPanolDestino();
    setChangePdiPedidoFiltroCoche();
    setChangePdiPedidoFiltroCategoria();
    setChangePdiPedidoFiltroInsumo();
    setChangePdiPedidoFiltrosEstado();
    setChangePdiPedidoFiltrosActivo();
    setChangePdiPedidoFiltrosDestacado();
    setChangePdiPedidoFiltrosLeido();
    setChangePdiPedidoFiltrosRequiereAtencion();
    setChangePdiPedidoFiltrosTipoOrigen();

    // acciones
    setClickPdiPedidoFicha();
    setClickPdiPedidoRefresh();
    setClickDivPdiComentario();

    // acciones dbsuggest
    setClickPdiPedidoAceptar();
    setClickPdiPedidoRedirigir();
    setClickPdiPedidoDespachar();
    setClickPdiPedidoRecibir();
    setClickPdiPedidoRechazar();
    setClickPdiPedidoRechazarPorErroneo();
    setClickPdiPedidoEntregar();
    setClickPdiPedidoGenerarPde();
    setClickPdiPedidoCancelarConsumo();
    setClickBtnPdiComentarioAgregar();

    // dbsuggest masivo
    setClickChkTodos();
    setClickDbsugMasivoGenerarRemitoPDF();

    setKeypressBody();
    setKeypressEnterEnvios();
    setKeypressEnterAjustes();
    setKeypressEnterEntregaOperario();
}

function setKeypressBody() {
    /*

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
    });
    */
}

function setKeypressEnterEnvios() {
	return;

    $('.div_modal .pdi-agregar').focus();

    // se hace foco en cada de texto de busqueda al presionar una tecla
    $(".div_modal .pdi-agregar").keydown(function (e) {

        if (e.which != 13) {
            // excepcion para otras cajas
            var nodeName = e.target.nodeName;
            if (nodeName == 'INPUT' || nodeName == 'TEXTAREA' || nodeName == 'SELECT') {
                return true;
            }

            $("#pdi_pedido_dbsug_ins_insumo").focus();
        }

    });

    // se evita accion al presionar enter
    $(document).keypress(function (e) {
        //alert(e.which);
        if (e.which == 13) {
            return false;
        }
    });
}

function setKeypressEnterAjustes() {
	return;
    $('.div_modal .pdi-agregar-ajuste').focus();

    // se hace foco en cada de texto de busqueda al presionar una tecla
    $(".div_modal .pdi-agregar-ajuste").keydown(function (e) {

        if (e.which != 13) {
            // excepcion para otras cajas
            var nodeName = e.target.nodeName;
            if (nodeName == 'INPUT' || nodeName == 'TEXTAREA' || nodeName == 'SELECT') {
                return true;
            }

            $("#pdi_pedido_ajuste_dbsug_ins_insumo").focus();
        }

    });

    // se evita accion al presionar enter
    $(document).keypress(function (e) {
        //alert(e.which);
        if (e.which == 13) {
            return false;
        }
    });
}
function setKeypressEnterEntregaOperario() {
	return;
    $('.div_modal .pdi-entrega-operario').focus();

    // se hace foco en cada de texto de busqueda al presionar una tecla
    $(".div_modal .pdi-entrega-operario").keydown(function (e) {

        if (e.which != 13) {
            // excepcion para otras cajas
            var nodeName = e.target.nodeName;
            if (nodeName == 'INPUT' || nodeName == 'TEXTAREA' || nodeName == 'SELECT') {
                return true;
            }

            $("#pdi_pedido_entrega_dbsug_ins_insumo").focus();
        }

    });

    // se evita accion al presionar enter
    $(document).keypress(function (e) {
        //alert(e.which);
        if (e.which == 13) {
            return false;
        }
    });
}



// filtros
function setChangePdiPedidoFiltroPanolOrigen() {
    $('#cmb_filtro_pan_panol_origen').unbind();
    $('#cmb_filtro_pan_panol_origen').change(function () {
        setAdmBuscadorTop('pdi_pedido_gestion');        
    });
}
function setChangePdiPedidoFiltroPanolDestino() {
    $('#cmb_filtro_pan_panol_destino').unbind();
    $('#cmb_filtro_pan_panol_destino').change(function () {
        setAdmBuscadorTop('pdi_pedido_gestion');
    });
}
function setChangePdiPedidoFiltroCoche() {
    $('#cmb_filtro_veh_coche_id').unbind();
    $('#cmb_filtro_veh_coche_id').change(function () {
        setAdmBuscadorTop('pdi_pedido_gestion');
    });
}
function setChangePdiPedidoFiltroCategoria() {
    $('#cmb_filtro_ins_categoria_id').unbind();
    $('#cmb_filtro_ins_categoria_id').change(function () {

        // se actualiza combo de insumos
        var categoria_id = $(this).val();
        setInsumoCmbPorCategoria(categoria_id);

        setAdmBuscadorTop('pdi_pedido_gestion');
    });
}
function setChangePdiPedidoFiltroInsumo() {
    $('#cmb_filtro_ins_insumo_id').unbind();
    $('#cmb_filtro_ins_insumo_id').change(function () {
        setAdmBuscadorTop('pdi_pedido_gestion');
    });
}

function setChangePdiPedidoFiltrosEstado() {
    $('#cmb_filtro_pdi_estado_id').unbind();
    $('#cmb_filtro_pdi_estado_id').change(function () {
        setAdmBuscadorTop('pdi_pedido_gestion');
    });
}
function setChangePdiPedidoFiltrosActivo() {
    $('#cmb_filtro_activo').unbind();
    $('#cmb_filtro_activo').change(function () {
        setAdmBuscadorTop('pdi_pedido_gestion');
    });
}function setChangePdiPedidoFiltrosDestacado() {
    $('#cmb_filtro_destacado').unbind();
    $('#cmb_filtro_destacado').change(function () {
        setAdmBuscadorTop('pdi_pedido_gestion');
    });
}
function setChangePdiPedidoFiltrosLeido() {
    $('#cmb_filtro_leido').unbind();
    $('#cmb_filtro_leido').change(function () {
        setAdmBuscadorTop('pdi_pedido_gestion');
    });
}
function setChangePdiPedidoFiltrosRequiereAtencion() {
    $('#cmb_filtro_requiere_atencion').unbind();
    $('#cmb_filtro_requiere_atencion').change(function () {
        setAdmBuscadorTop('pdi_pedido_gestion');
    });
}
function setChangePdiPedidoFiltrosTipoOrigen() {
    $('#cmb_filtro_pdi_tipo_origen_id').unbind();
    $('#cmb_filtro_pdi_tipo_origen_id').change(function () {
        setAdmBuscadorTop('pdi_pedido_gestion');
    });
}

function setInsumoCmbPorCategoria(categoria_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/ins_insumo/get_json_ins_insumo_por_categoria.php",
        data: "categoria_id=" + categoria_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb_insumo = $('#cmb_filtro_ins_insumo_id');

            cmb_insumo.empty();
            cmb_insumo.append('<option value="">...</option>');
            for (var i = 0; i < len; i++) {
                cmb_insumo.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
            }

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setOperarioCmbPorPanol(panol_id, cmb) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/ope_operario/get_json_ope_operario_por_pan_panol.php",
        data: "panol_id=" + panol_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb_operario = cmb;

            cmb_operario.empty();
            cmb_operario.append('<option value="">...</option>');
            for (var i = 0; i < len; i++) {
                cmb_operario.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
            }

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}
function setOperarioCmbPorTodos(cmb) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/ope_operario/get_json_ope_operario.php",
        data: "",
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb_operario = cmb;

            cmb_operario.empty();
            cmb_operario.append('<option value="">...</option>');
            for (var i = 0; i < len; i++) {
                cmb_operario.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
            }

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}
function setCocheCmbPorPanol(panol_id, cmb) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/veh_coche/get_json_veh_coche_por_pan_panol.php",
        data: "panol_id=" + panol_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length;
            var cmb_operario = cmb;

            cmb_operario.empty();
            cmb_operario.append('<option value="">...</option>');
            for (var i = 0; i < len; i++) {
                cmb_operario.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
            }

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}
function setCocheCmbPorTodos(cmb) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/veh_coche/get_json_veh_coches.php",
        data: "",
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length
            var cmb_operario = cmb;

            cmb_operario.empty();
            cmb_operario.append('<option value="">...</option>');
            for (var i = 0; i < len; i++) {
                cmb_operario.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
            }

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}

function setInstanciaCmbPorInsumoIdentificado(insumo_identificado_id, cmb) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/ins_insumo_instancia/get_json_ins_insumo_instancia_por_ins_insumo_identificado.php",
        data: "insumo_identificado_id=" + insumo_identificado_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;
            var len = Object.keys(arr).length
            var cmb_insumo_instancia = cmb;

            cmb_insumo_instancia.empty();
            cmb_insumo_instancia.append('<option value="">...</option>');
            for (var i = 0; i < len; i++) {
                cmb_insumo_instancia.append('<option value="' + arr[i].id + '">' + arr[i].descripcion + '</option>');
            }

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error: "+ quepaso);
        }
    });
}




function setClickPdiPedidoRefresh() {
    $('#listado_adm_pdi_pedido .adm_botones_accion.refresh').unbind();
    $('#listado_adm_pdi_pedido .adm_botones_accion.refresh').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        refreshAdmUno('pdi_pedido_gestion', pedido_id);
    });
}


/*
 Agregar Pedido
 */
function setClickBtnAgregarPedido() {
    $('.botonera .agregar-pedido').unbind();
    $('.botonera .agregar-pedido').click(function () {
        verModalAgregarPedido();

        return false;
    });
}

function verModalAgregarPedido() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 650,
                modal: true,
                title: 'Nuevo Pedido Interno de Stock (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');
                    //refreshPdiPedidoDatos();

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('pdi_pedido_gestion', pagina);
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnCambiarTipoAsignacion() {
    $('.botonera .cambiar-tipo-asignacion').unbind();
    $('.botonera .cambiar-tipo-asignacion').click(function () {
        verModalPdiTipoAsignacion();
    });
}

function verModalPdiTipoAsignacion() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_tipo_asignacion.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 700,
                height: 550,
                modal: true,
                title: 'Cambiar Tipo de Asignacion de Insumos',
                close: function () {
                    $('.div_modal').dialog('close');
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnCambiarTipoAsignacionConfirmar() {
    $('.div_modal #listado_adm_pdi_asignacion .guardar').unbind();
    $('.div_modal #listado_adm_pdi_asignacion .guardar').click(function () {
        var panol_id = $(this).parents('.uno').attr('identificador');
        var tipo_asignacion_id = $('#cmb_pdi_tipo_asignacion_id_' + panol_id).val();

        setPanolNuevoPdiTipoAsignacion(panol_id, tipo_asignacion_id);
    });
}
function setPanolNuevoPdiTipoAsignacion(panol_id, tipo_asignacion_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/set_panol_nuevo_pdi_tipo_asignacion.php",
        data: 'panol_id=' + panol_id + '&tipo_asignacion_id=' + tipo_asignacion_id,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
        },
        success: function (data) {

            verModalPdiTipoAsignacion();

            //$('.div_modal').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeCmbPanol() {
    $('#pdi_pedido_cmb_pan_panol_origen').unbind();
    $('#pdi_pedido_cmb_pan_panol_origen').change(function () {
        var insumo = $('#pdi_pedido_dbsug_ins_insumo_id').val();
        var panol_origen_id = $('#pdi_pedido_cmb_pan_panol_origen').val();
        var cantidad = $('#pdi_pedido_txt_cantidad').val();
        refreshStockInsumos(insumo, panol_origen_id, cantidad);
    });
}

function setChangeInsumo() {
    $('#pdi_pedido_dbsug_ins_insumo_id').unbind();
    $('#pdi_pedido_dbsug_ins_insumo_id').change(function () {
        var insumo = $('#pdi_pedido_dbsug_ins_insumo_id').val();
        var panol_origen_id = $('#pdi_pedido_cmb_pan_panol_origen').val();
        var cantidad = $('#pdi_pedido_txt_cantidad').val();

        refreshStockInsumos(insumo, panol_origen_id, cantidad);
    });
}

function refreshStockInsumos(insumo, panol_origen_id, cantidad) {
    if (insumo == '')
        return;

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/refresh_stock_insumos.php",
        data: 'id=' + insumo + '&panol_origen_id=' + panol_origen_id + '&cantidad=' + cantidad,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_stock_insumos').html(img_loading);
            $('.div_stock_insumos').css("opacity", "0.4");
            $('.div_stock_insumos').append(html_loading_img_row_ajax);
        },
        success: function (data) {
            $('.div_stock_insumos').css("opacity", "1");
            $('.div_stock_insumos').html(data);

            setInitPdiPedidos();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeTxtCantidad() {
    $("#pdi_pedido_txt_cantidad").spinner({
        min: 1,
    });

    $(".pdi-agregar #pdi_pedido_txt_cantidad").spinner({
        min: 1,
        //max: 10,
        stop: function (event, ui) {
            var insumo = $('#pdi_pedido_dbsug_ins_insumo_id').val();
            var panol_origen_id = $('#pdi_pedido_cmb_pan_panol_origen').val();
            var cantidad = $('#pdi_pedido_txt_cantidad').val();
            //refreshStockInsumos(insumo, panol_origen_id, cantidad);
        }
    });
}


/*
 Agregar Ajuste
 */
function setClickBtnAgregarAjuste() {
    $('.botonera .agregar-ajuste').unbind();
    $('.botonera .agregar-ajuste').click(function () {
        verModalAgregarAjuste();

        return false;
    });
}

function verModalAgregarAjuste() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar_ajuste.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 650,
                modal: true,
                title: 'Ajuste Interno de Stock (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');
                    //refreshPdiPedidoDatos();

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('pdi_pedido_gestion', pagina);
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeCmbPanolAjuste() {
    $('#pdi_pedido_ajuste_cmb_pan_panol_origen').unbind();
    $('#pdi_pedido_ajuste_cmb_pan_panol_origen').change(function () {
        var insumo = $('#pdi_pedido_ajuste_dbsug_ins_insumo_id').val();
        var panol_origen_id = $('#pdi_pedido_ajuste_cmb_pan_panol_origen').val()
        refreshBloqueStock(insumo, panol_origen_id);
    });
}

function setChangeInsumoAjuste() {
    $('#pdi_pedido_ajuste_dbsug_ins_insumo_id').unbind();
    $('#pdi_pedido_ajuste_dbsug_ins_insumo_id').change(function () {

        var insumo = $('#pdi_pedido_ajuste_dbsug_ins_insumo_id').val();
        var panol_destino_id = null;
        var cantidad = $('#pdi_pedido_ajuste_txt_cantidad').val();
        refreshInsumosIdentificados(insumo, panol_destino_id, cantidad);

        var panol_origen_id = $('#pdi_pedido_ajuste_cmb_pan_panol_origen').val()
        refreshBloqueStock(insumo, panol_origen_id);
    });
}
function refreshInsumosIdentificados(insumo, panol_destino_id, cantidad) {
    /*
    return;
    
    if (insumo == '')
        return;

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/refresh_insumos_identificados.php",
        data: 'id=' + insumo + '&panol_destino_id=' + panol_destino_id + '&cantidad=' + cantidad,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_stock_insumos').html(img_loading);
            $('.div_insumos_identificados').css("opacity", "0.4");
            $('.div_insumos_identificados').append(html_loading_img_row_ajax);
        },
        success: function (data) {
            $('.div_insumos_identificados').css("opacity", "1");
            $('.div_insumos_identificados').html(data);

            setInitPdiPedidos();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
    */
}

function refreshInsumosIdentificadosDespachar(insumo, panol_destino_id, cantidad) {
    /*
    if (insumo == '')
        return;

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/refresh_insumos_identificados_despachar.php",
        data: 'id=' + insumo + '&panol_destino_id=' + panol_destino_id + '&cantidad=' + cantidad,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_stock_insumos').html(img_loading);
            $('.div_insumos_identificados').css("opacity", "0.4");
            $('.div_insumos_identificados').append(html_loading_img_row_ajax);
        },
        success: function (data) {
            $('.div_insumos_identificados').css("opacity", "1");
            $('.div_insumos_identificados').html(data);

            setInitPdiPedidos();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
    */
}

function refreshInsumosIdentificadosRecibir(insumo, panol_destino_id, cantidad) {
    /*
    if (insumo == '')
        return;

    var pedido_id = $('#hdn_id').val();
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/refresh_insumos_identificados_recibir.php",
        data: 'id=' + insumo + '&panol_destino_id=' + panol_destino_id + '&cantidad=' + cantidad + '&pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_stock_insumos').html(img_loading);
            $('.div_insumos_identificados').css("opacity", "0.4");
            $('.div_insumos_identificados').append(html_loading_img_row_ajax);
        },
        success: function (data) {
            $('.div_insumos_identificados').css("opacity", "1");
            $('.div_insumos_identificados').html(data);

            setInitPdiPedidos();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
    */
}

function refreshInsumosIdentificadosEntregaOperario(insumo, panol_id, cantidad) {
    /*
    if (insumo == '')
        return;

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/refresh_insumos_identificados_entrega_operario.php",
        data: 'id=' + insumo + '&panol_id=' + panol_id + '&cantidad=' + cantidad,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_stock_insumos').html(img_loading);
            $('.div_insumos_identificados').css("opacity", "0.4");
            $('.div_insumos_identificados').append(html_loading_img_row_ajax);
        },
        success: function (data) {
            $('.div_insumos_identificados').css("opacity", "1");
            $('.div_insumos_identificados').html(data);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
    */
}
function refreshInsumosIdentificadosSalientesDeCoche(insumo, coche_id, cantidad, tarea_resuelta_id) {
    /*
    if (insumo == '')
        return;

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/refresh_insumos_identificados_salientes_de_coche.php",
        data: 'id=' + insumo + '&veh_coche_id=' + coche_id + '&cantidad=' + cantidad + '&tarea_resuelta_id=' + tarea_resuelta_id,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_stock_insumos').html(img_loading);
            $('.div_insumos_identificados_salientes').css("opacity", "0.4");
            $('.div_insumos_identificados_salientes').append(html_loading_img_row_ajax);
        },
        success: function (data) {
            $('.div_insumos_identificados_salientes').css("opacity", "1");
            $('.div_insumos_identificados_salientes').html(data);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
    */
}



function refreshBloqueStock(insumo, panol_origen_id) {
    if (insumo == '')
        return;

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/refresh_bloque_stock_insumo.php",
        data: 'id=' + insumo + '&panol_origen_id=' + panol_origen_id,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_stock_insumos').html(img_loading);
            $('.bloque.stock').css("opacity", "0.4");
            $('.bloque.stock').append(html_loading_img_row_ajax);
        },
        success: function (data) {
            $('.bloque.stock').css("opacity", "1");
            $('.bloque.stock').html(data);

            setInitPdiPedidos();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshBloqueOtsDeOperario(operario_id, coche_id, ot_id, tarea_resuelta_id) {
    if (operario_id == '' || coche_id == '')
        return;

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/refresh_bloque_ots_operario.php",
        data: 'operario_id=' + operario_id + '&coche_id=' + coche_id + '&ot_id=' + ot_id + '&tarea_resuelta_id=' + tarea_resuelta_id,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_stock_insumos').html(img_loading);
            $('.div_bloque_ots_operario').css("opacity", "0.4");
            $('.div_bloque_ots_operario').append(html_loading_img_row_ajax);
        },
        success: function (data) {
            $('.div_bloque_ots_operario').css("opacity", "1");
            $('.div_bloque_ots_operario').html(data);

            setInitPdiPedidos();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Agregar Entrega a Operario sin solicitud
 */
function setClickBtnAgregarEntregaOperario() {
    $('.botonera .agregar-entrega-operario').unbind();
    $('.botonera .agregar-entrega-operario').click(function () {
        verModalAgregarEntregaOperario();

        return false;
    });
}

function verModalAgregarEntregaOperario() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar_entrega_operario.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Registro de Entrega a Operario',
                close: function () {
                    $('.div_modal').dialog('close');
                    //refreshPdiPedidoDatos();

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('pdi_pedido_gestion', pagina);
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setChangeCmbPanolEntregaOperario() {
    $('#pdi_pedido_entrega_cmb_pan_panol_origen_id').unbind();
    $('#pdi_pedido_entrega_cmb_pan_panol_origen_id').change(function () {
        var insumo = $('#pdi_pedido_entrega_dbsug_ins_insumo_id').val();
        var panol_id = $('#pdi_pedido_entrega_cmb_pan_panol_origen_id').val();
        var cantidad = $('#pdi_pedido_entrega_txt_cantidad').val();
        var tarea_resuelta_id = $('#pdi_pedido_entrega_cmb_tal_tarea_resuelta_id').val();
        var coche_id = $('#pdi_pedido_entrega_cmb_veh_coche_id').val();

        refreshInsumosIdentificadosEntregaOperario(insumo, panol_id, cantidad);
        refreshInsumosIdentificadosSalientesDeCoche(insumo, coche_id, cantidad, tarea_resuelta_id);
        refreshStockInsumos(insumo, panol_id, cantidad);
        refreshBloqueStock(insumo, panol_id);


        var cmb = $('#pdi_pedido_entrega_cmb_ope_operario_id');
        setOperarioCmbPorPanol(panol_id, cmb);

        var chk_coches_ver_todos = $("#chk_coches_ver_todos");
        var cmb = $('#pdi_pedido_entrega_cmb_veh_coche_id');

        if (!chk_coches_ver_todos.is(':checked')) {
            setCocheCmbPorPanol(panol_id, cmb);
        } else {
            setCocheCmbPorTodos(cmb);
        }
    });
}

function setChangeInsumoEntregaOperario() {
    $('#pdi_pedido_entrega_dbsug_ins_insumo_id').unbind();
    $('#pdi_pedido_entrega_dbsug_ins_insumo_id').change(function () {

        var insumo = $('#pdi_pedido_entrega_dbsug_ins_insumo_id').val();
        var panol_id = $('#pdi_pedido_entrega_cmb_pan_panol_origen_id').val();
        var cantidad = $('#pdi_pedido_entrega_txt_cantidad').val();
        var coche_id = $('#pdi_pedido_entrega_cmb_veh_coche_id').val();
        var tarea_resuelta_id = $('#pdi_pedido_entrega_cmb_tal_tarea_resuelta_id').val();

        refreshInsumosIdentificadosEntregaOperario(insumo, panol_id, cantidad);
        refreshInsumosIdentificadosSalientesDeCoche(insumo, coche_id, cantidad, tarea_resuelta_id);
        refreshBloqueStock(insumo, panol_id);
    });
}

function setChangeCmbCocheEntregaOperario() {
    $('#pdi_pedido_entrega_cmb_veh_coche_id').unbind();
    $('#pdi_pedido_entrega_cmb_veh_coche_id').change(function () {

        var ot_id = '';
        var operario_id = $('#pdi_pedido_entrega_cmb_ope_operario_id').val();
        var coche_id = $('#pdi_pedido_entrega_cmb_veh_coche_id').val();
        var tarea_resuelta_id = $('#pdi_pedido_entrega_cmb_tal_tarea_resuelta_id').val();
        refreshBloqueOtsDeOperario(operario_id, coche_id, ot_id, tarea_resuelta_id);

        var insumo = $('#pdi_pedido_entrega_dbsug_ins_insumo_id').val();
        var cantidad = $('#pdi_pedido_entrega_txt_cantidad').val();
        var tarea_resuelta_id = $('#pdi_pedido_entrega_cmb_tal_tarea_resuelta_id').val();
        refreshInsumosIdentificadosSalientesDeCoche(insumo, coche_id, cantidad, tarea_resuelta_id);

    });
}

function setChangeCmbOperarioEntregaOperario() {
    $('#pdi_pedido_entrega_cmb_ope_operario_id').unbind();
    $('#pdi_pedido_entrega_cmb_ope_operario_id').change(function () {

        var ot_id = '';
        var operario_id = $('#pdi_pedido_entrega_cmb_ope_operario_id').val();
        var coche_id = $('#pdi_pedido_entrega_cmb_veh_coche_id').val();
        var tarea_resuelta_id = $('#pdi_pedido_entrega_cmb_tal_tarea_resuelta_id').val();
        refreshBloqueOtsDeOperario(operario_id, coche_id, ot_id, tarea_resuelta_id);
    });
}

function setChangeCmbOrdenTrabajoEntregaOperario() {
    $('#pdi_pedido_entrega_cmb_tal_orden_trabajo_id').unbind();
    $('#pdi_pedido_entrega_cmb_tal_orden_trabajo_id').change(function () {

        var ot_id = $('#pdi_pedido_entrega_cmb_tal_orden_trabajo_id').val();
        var operario_id = $('#pdi_pedido_entrega_cmb_ope_operario_id').val();
        var coche_id = $('#pdi_pedido_entrega_cmb_veh_coche_id').val();
        var tarea_resuelta_id = $('#pdi_pedido_entrega_cmb_tal_tarea_resuelta_id').val();
        refreshBloqueOtsDeOperario(operario_id, coche_id, ot_id, tarea_resuelta_id);
    });
}

function setChangeCmbTareaResueltaEntregaOperario() {
    $('#pdi_pedido_entrega_cmb_tal_tarea_resuelta_id').unbind();
    $('#pdi_pedido_entrega_cmb_tal_tarea_resuelta_id').change(function () {

        var insumo = $('#pdi_pedido_entrega_dbsug_ins_insumo_id').val();
        var panol_id = $('#pdi_pedido_entrega_cmb_pan_panol_origen_id').val();
        var ot_id = $('#pdi_pedido_entrega_cmb_tal_orden_trabajo_id').val();
        var cantidad = $('#pdi_pedido_entrega_txt_cantidad').val();
        var operario_id = $('#pdi_pedido_entrega_cmb_ope_operario_id').val();
        var coche_id = $('#pdi_pedido_entrega_cmb_veh_coche_id').val();
        var tarea_resuelta_id = $('#pdi_pedido_entrega_cmb_tal_tarea_resuelta_id').val();
        refreshBloqueOtsDeOperario(operario_id, coche_id, ot_id, tarea_resuelta_id);
        refreshInsumosIdentificadosSalientesDeCoche(insumo, coche_id, cantidad, tarea_resuelta_id);
    });
}

function setClickChkCochesVerTodos() {
    $('#chk_coches_ver_todos').unbind();
    $('#chk_coches_ver_todos').change(function () {

        var panol_id = $('#pdi_pedido_entrega_cmb_pan_panol_origen_id').val();
        var chk_coches_ver_todos = $("#chk_coches_ver_todos");
        var cmb = $('#pdi_pedido_entrega_cmb_veh_coche_id');

        if (!chk_coches_ver_todos.is(':checked')) {
            setCocheCmbPorPanol(panol_id, cmb);
        } else {
            setCocheCmbPorTodos(cmb);
        }

    });
}
function setClickImputarMasivoChkCochesVerTodos() {
    $('#chk_imputar_masivo_coches_ver_todos').unbind();
    $('#chk_imputar_masivo_coches_ver_todos').change(function () {

        var panol_id = $('#pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id').val();
        var chk_coches_ver_todos = $("#chk_imputar_masivo_coches_ver_todos");
        var cmb = $('#pdi_pedido_imputar_masivo_cmb_veh_coche_id');

        if (!chk_coches_ver_todos.is(':checked')) {
            setCocheCmbPorPanol(panol_id, cmb);
        } else {
            setCocheCmbPorTodos(cmb);
        }

    });
}
function setClickImputarMasivoChkOperariosVerTodos() {
    $('#chk_imputar_masivo_operarios_ver_todos').unbind();
    $('#chk_imputar_masivo_operarios_ver_todos').change(function () {

        var panol_id = $('#pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id').val();
        var chk_operarios_ver_todos = $("#chk_imputar_masivo_operarios_ver_todos");
        var cmb = $('#pdi_pedido_imputar_masivo_cmb_ope_operario_id');

        if (!chk_operarios_ver_todos.is(':checked')) {
            setOperarioCmbPorPanol(panol_id, cmb);
        } else {
            setOperarioCmbPorTodos(cmb);
        }

    });

}

function setClickBtnAgregarImputarMasivo() {
    $('.botonera .agregar-imputacion-masiva').unbind();
    $('.botonera .agregar-imputacion-masiva').click(function () {
        verModalAgregarImputarMasivo();
    });
}

function verModalAgregarImputarMasivo() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar_imputar_masivo.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '95%',
                height: 650,
                modal: true,
                title: 'Registro de Imputacion Masiva en Coche',
                close: function () {
                    $('.div_modal').dialog('close');

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('pdi_pedido_gestion', pagina);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setClickBtnLimpiarImputarMasivo() {
    $('.botonera .boton.limpiar-insumos').unbind();
    $('.botonera .boton.limpiar-insumos').click(function () {
        setLimpiarImputarMasivo();
    });
}
function setLimpiarImputarMasivo() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/set_limpiar_imputar_masivo.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshImputarMasivoBloqueDetalle();

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setChangePanolImputarMasivo() {
    $('#pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id').unbind();
    $('#pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id').change(function () {

        refreshImputarMasivoBloqueDetalle();

        var panol_id = $(this).val();

        var cmb = $('#pdi_pedido_imputar_masivo_cmb_veh_coche_id');
        setCocheCmbPorPanol(panol_id, cmb);

        var cmb = $('#pdi_pedido_imputar_masivo_cmb_ope_operario_id');
        setOperarioCmbPorPanol(panol_id, cmb);

    });
}
function setChangeCocheImputarMasivo() {
    $('#pdi_pedido_imputar_masivo_cmb_veh_coche_id').unbind();
    $('#pdi_pedido_imputar_masivo_cmb_veh_coche_id').change(function () {

        refreshImputarMasivoBloqueDetalle();
    });
}
function setChangeOperarioImputarMasivo() {
    $('#pdi_pedido_imputar_masivo_cmb_ope_operario_id').unbind();
    $('#pdi_pedido_imputar_masivo_cmb_ope_operario_id').change(function () {

        refreshImputarMasivoBloqueDetalle();
    });
}

function refreshImputarMasivoBloqueDetalle() {
    var panol_id = $('#pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id').val();
    var coche_id = $('#pdi_pedido_imputar_masivo_cmb_veh_coche_id').val();
    var operario_id = $('#pdi_pedido_imputar_masivo_cmb_ope_operario_id').val();

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/refresh_imputar_masivo_bloque_detalle.php",
        data: 'panol_id=' + panol_id + '&coche_id=' + coche_id + '&operario_id=' + operario_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.pdi-imputar-masivo .detalle').html(img_loading);
        },
        success: function (data) {
            $('.pdi-imputar-masivo .detalle').html(data);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnAgregarImputarMasivoAgregarInsumo() {
    $('.div_modal #btn_lista_agregar').unbind();
    $('.div_modal #btn_lista_agregar').click(function () {
        verModalBuscadorInsumos(0);
    });
}
function verModalBuscadorInsumos(indice) {
    var panol_id = $('#pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id').val();
    var coche_id = $('#pdi_pedido_imputar_masivo_cmb_veh_coche_id').val();
    var operario_id = $('#pdi_pedido_imputar_masivo_cmb_ope_operario_id').val();

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_buscador_insumos.php",
        data: 'panol_id=' + panol_id + '&coche_id=' + coche_id + '&operario_id=' + operario_id + '&indice=' + indice,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '92%',
                height: 650,
                modal: true,
                title: 'Buscador de Insumos',
                close: function () {
                    $('.div_modal_modal').dialog('close');

                    var pagina = $("#hdn_pag_actual").val();
                    //refreshAdmAll('pdi_pedido_gestion', pagina);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setClickBtnAgregarImputarMasivoEditarInsumo() {
    $('.div_modal #tbl_imputar_masivo_detalle .accion.modificar').unbind();
    $('.div_modal #tbl_imputar_masivo_detalle .accion.modificar').click(function () {
        var indice = $(this).parents('.uno').attr('identificador');
        verModalBuscadorInsumos(indice);
    });
}
function setClickBtnAgregarImputarMasivoEliminarInsumo() {
    $('.div_modal #tbl_imputar_masivo_detalle .accion.eliminar').unbind();
    $('.div_modal #tbl_imputar_masivo_detalle .accion.eliminar').click(function () {
        var indice = $(this).parents('.uno').attr('identificador');
        setBuscadorInsumosEliminar(indice);
    });
}
function setBuscadorInsumosEliminar(indice) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/set_buscador_insumos_eliminar.php",
        data: 'indice=' + indice,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.bloque-tareas-resueltas .tareas-resueltas').html(img_loading);
        },
        success: function (data) {
            refreshImputarMasivoBloqueDetalle();

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickImputarMasivoNuevaOT() {
    $('.datos.buscador-insumo .boton.agregar-ot').unbind();
    $('.datos.buscador-insumo .boton.agregar-ot').click(function (e) {
        var coche_id = $('#pdi_pedido_imputar_masivo_cmb_veh_coche_id').val();
        var panol_id = $('#pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id').val();
        var operario_id = $('#pdi_pedido_imputar_masivo_cmb_ope_operario_id').val();

        if (confirm('Generar Nueva OT?')) {
            setImputarMasivoNuevaOt(coche_id, panol_id, operario_id);
        }
    });
}
function setImputarMasivoNuevaOt(coche_id, panol_id, operario_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/set_agregar_nueva_ot.php",
        data: 'coche_id=' + coche_id + '&panol_id=' + panol_id + '&operario_id=' + operario_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $('.bloque-ots_operario .boton.agregar-ot').html(img_loading);
        },
        success: function (data) {
            var ot_id = data;
            //refreshBloqueOtsDeOperario(operario_id, coche_id, ot_id);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setClickImputarMasivoNuevaTareaResuelta() {
    $('.datos.buscador-insumo .boton.agregar-tarea_resuelta').unbind();
    $('.datos.buscador-insumo .boton.agregar-tarea_resuelta').click(function (e) {
        var ot_id = $('#pdi_pedido_buscador_dbsug_tal_orden_trabajo_id').val();
        var coche_id = $('#pdi_pedido_imputar_masivo_cmb_veh_coche_id').val();
        var panol_id = $('#pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id').val();
        var operario_id = $('#pdi_pedido_imputar_masivo_cmb_ope_operario_id').val();

        tipo_imputacion = 'imputacion-masiva';
        verModalImputarMasivoNuevaTareaResuelta(ot_id, coche_id, operario_id, panol_id);
    });
}
function verModalImputarMasivoNuevaTareaResuelta(ot_id, coche_id, operario_id, panol_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar_tarea_resuelta.php",
        data: 'ot_id=' + ot_id + '&coche_id=' + coche_id + '&operario_id=' + operario_id + '&panol_id=' + panol_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal_modal').html(img_loading);
            $('.div_modal_modal_modal').dialog({
                width: '80%',
                height: 500,
                modal: true,
                title: 'Agregar Tarea Resuelta',
                close: function () {
                    $('.div_modal_modal_modal').dialog('close');
                    //refreshBloqueOtsDeOperario(operario_id, coche_id, ot_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal_modal_modal').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeInsumoImputarMasivo() {
    $('#pdi_pedido_buscador_dbsug_ins_insumo_id').unbind();
    $('#pdi_pedido_buscador_dbsug_ins_insumo_id').change(function () {

        refreshMasivoBloqueTareasResueltas();
        refreshMasivoBloqueStockInsumoMin();
    });
}
function setChangeOtImputarMasivo() {
    $('#pdi_pedido_buscador_dbsug_tal_orden_trabajo_id').unbind();
    $('#pdi_pedido_buscador_dbsug_tal_orden_trabajo_id').change(function () {

        refreshMasivoBloqueTareasResueltas();
    });
}
function setChangeCantidadImputarMasivo() {
    $('#pdi_pedido_buscador_txt_cantidad').unbind();
    $('#pdi_pedido_buscador_txt_cantidad').change(function () {

        refreshMasivoBloqueTareasResueltas();
    });
}

function refreshMasivoBloqueTareasResueltas() {
    var insumo_id = $('#pdi_pedido_buscador_dbsug_ins_insumo_id').val();
    var ot_id = $('#pdi_pedido_buscador_dbsug_tal_orden_trabajo_id').val();
    var cantidad = $('#pdi_pedido_buscador_txt_cantidad').val();
    var tarea_resuelta_id = $('#rad_tarea_resuelta_id').val();

    if (insumo_id == '' || ot_id == '')
        return;

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/refresh_bloque_tareas_resueltas.php",
        data: 'insumo_id=' + insumo_id + '&cantidad=' + cantidad + '&ot_id=' + ot_id + '&tarea_resuelta_id=' + tarea_resuelta_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.bloque-tareas-resueltas .tareas-resueltas').html(img_loading);
        },
        success: function (data) {
            $('.bloque-tareas-resueltas .tareas-resueltas').html(data);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function refreshMasivoBloqueStockInsumoMin() {
    var insumo_id = $('#pdi_pedido_buscador_dbsug_ins_insumo_id').val();
    var panol_id = $('#hdn_pan_panol_id').val();

    if (insumo_id == '' || panol_id == '')
        return;

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/refresh_bloque_stock_insumo_min.php",
        data: 'insumo_id=' + insumo_id + '&panol_id=' + panol_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.bloque-stock-panol-min').html(img_loading);
        },
        success: function (data) {
            $('.bloque-stock-panol-min').html(data);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnBuscadorInsumoAgregar() {
    $('#btn_seleccionar_insumo').unbind();
    $('#btn_seleccionar_insumo').click(function () {
        if (controlAgregarInsumoAListado()) {
            setAgregarInsumoAListado();
        }
    });
}

function setAgregarInsumoAListado() {
    var insumo_id = $('#pdi_pedido_buscador_dbsug_ins_insumo_id').val();
    var ot_id = $('#pdi_pedido_buscador_dbsug_tal_orden_trabajo_id').val();
    var cantidad = $('#pdi_pedido_buscador_txt_cantidad').val();
    var tarea_resuelta_id = $('#rad_tarea_resuelta_id:checked').val();
    var panol_id = $('#hdn_pan_panol_id').val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pdi_pedido_gestion/set_agregar_insumo_a_listado.php",
        data: 'insumo_id=' + insumo_id + '&cantidad=' + cantidad + '&ot_id=' + ot_id + '&tarea_resuelta_id=' + tarea_resuelta_id + '&panol_id=' + panol_id,
        dataType: "html",
        beforeSend: function (objeto) {
            //$('.div_moda_modal .botonera').html(img_loading);
        },
        success: function (data) {

            // se limpia la pantalla para la carga de otro insumo
            $("#pdi_pedido_buscador_dbsug_ins_insumo").val('');
            $("#pdi_pedido_buscador_dbsug_ins_insumo_id").val(null);
            $("#pdi_pedido_buscador_txt_cantidad").val(1);

            $("#rad_tarea_resuelta_id:checked").prop('checked', false);

            refreshMasivoBloqueStockInsumoMin();
            refreshImputarMasivoBloqueDetalle();

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function controlAgregarInsumoAListado() {
    var estado = false;

    var insumo_id = $('#pdi_pedido_buscador_dbsug_ins_insumo_id').val();
    var ot_id = $('#pdi_pedido_buscador_dbsug_tal_orden_trabajo_id').val();
    var cantidad = $('#pdi_pedido_buscador_txt_cantidad').val();
    var tarea_resuelta_id = $('#rad_tarea_resuelta_id:checked').val();
    var panol_id = $('#hdn_pan_panol_id').val();

    $.ajax({
        type: "GET",
        url: "ajax/modulos/pdi_pedido_gestion/control_agregar_insumo_a_listado.php",
        data: 'insumo_id=' + insumo_id + '&cantidad=' + cantidad + '&ot_id=' + ot_id + '&tarea_resuelta_id=' + tarea_resuelta_id + '&panol_id=' + panol_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            // se limpian todos los errores
            $(".insumo-identificado-label-error").html('');

            if (arr['error'] === true) {

                $.each(arr, function (index, value) {
                    $("." + index).html(value);
                });

                /*
                 $(".pdi_pedido_buscador_dbsug_ins_insumo_id_error").html(arr['pdi_pedido_buscador_dbsug_ins_insumo_id_error']);
                 $(".pdi_pedido_buscador_txt_cantidad_error").html(arr['pdi_pedido_buscador_txt_cantidad_error']);
                 $(".pdi_pedido_buscador_dbsug_tal_orden_trabajo_id_error").html(arr['pdi_pedido_buscador_dbsug_tal_orden_trabajo_id_error']);
                 $(".pdi_pedido_buscador_rad_tal_tarea_resuelta_id_error").html(arr['pdi_pedido_buscador_rad_tal_tarea_resuelta_id_error']);			
                 */

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

function setClickBtnBuscadorVincularInsumoArbol() {

    $('.div_modal_modal .uno.tarea_resuelta .boton.vincular').unbind();
    $('.div_modal_modal .uno.tarea_resuelta .boton.vincular').click(function () {
        var tarea_resuelta_id = $(this).parents('.uno').attr('tarea_resuelta_id');
        var insumo_id = $(this).parents('.uno').attr('insumo_id');

        setVincularInsumoArbol(tarea_resuelta_id, insumo_id);
    });

}
function setVincularInsumoArbol(tarea_resuelta_id, insumo_id) {
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pdi_pedido_gestion/set_vincular_insumo_arbol.php",
        data: 'tarea_resuelta_id=' + tarea_resuelta_id + '&insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            //$('.div_modal_modal').html(data);
            refreshBloqueTareasResueltasUno(tarea_resuelta_id, insumo_id)

        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshBloqueTareasResueltasUno(tarea_resuelta_id, insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/refresh_bloque_tareas_resueltas_uno.php",
        data: 'tarea_resuelta_id=' + tarea_resuelta_id + '&insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal #div_tarea_resuelta_' + tarea_resuelta_id).html(img_loading);
        },
        success: function (data) {
            $('.div_modal_modal #div_tarea_resuelta_' + tarea_resuelta_id).html(data);

            setInitPdiPedidos();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickImputarMasivoHistorialAsignado() {
    $('#tbl_imputar_masivo_detalle td .asignado').unbind();
    $('#tbl_imputar_masivo_detalle td .asignado').click(function () {

        var coche_id = $(this).attr('coche_id');
        var insumo_id = $(this).attr('insumo_id');

        verModalHistorialAsignado(coche_id, insumo_id);

        return false;
    });
}
function verModalHistorialAsignado(coche_id, insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_historial_asignado.php",
        data: 'coche_id=' + coche_id + '&insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '97%',
                height: 450,
                modal: true,
                title: 'Historial de Insumo Asignado',
                close: function () {
                    $('.div_modal_modal').dialog('close');

                    var pagina = $("#hdn_pag_actual").val();
                    //refreshAdmAll('pdi_pedido_gestion', pagina);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickImputarMasivoRegistrar() {
    $(".div_modal #btn_lista_imputar_masivo").unbind();
    $(".div_modal #btn_lista_imputar_masivo").click(function () {
        if (controlImputarMasivoRegistrar()) {
            setImputarMasivoRegistrar();
        }
    });
}
function setImputarMasivoRegistrar() {
    var panol_id = $('#pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id').val();
    var coche_id = $('#pdi_pedido_imputar_masivo_cmb_veh_coche_id').val();
    var operario_id = $('#pdi_pedido_imputar_masivo_cmb_ope_operario_id').val();

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/pdi_pedido_gestion/set_imputar_masivo_registrar.php",
        data: 'panol_id=' + panol_id + '&coche_id=' + coche_id + '&operario_id=' + operario_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal #btn_lista_imputar_masivo').parents('.botonera').html(img_loading);
        },
        success: function (data) {
            $('.div_modal').dialog('close');

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function controlImputarMasivoRegistrar() {
    var estado = false;

    var panol_id = $('#pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id').val();
    var coche_id = $('#pdi_pedido_imputar_masivo_cmb_veh_coche_id').val();
    var operario_id = $('#pdi_pedido_imputar_masivo_cmb_ope_operario_id').val();

    $.ajax({
        type: "GET",
        url: "ajax/modulos/pdi_pedido_gestion/control_imputar_masivo_registrar.php",
        data: 'panol_id=' + panol_id + '&coche_id=' + coche_id + '&operario_id=' + operario_id,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            // se limpian todos los errores
            $(".insumo-identificado-label-error").html('');

            if (arr['error'] === true) {

                $.each(arr, function (index, value) {
                    $("." + index).html(value);
                });

                /*  
                 $(".pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id_error").html(arr['pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id_error']);
                 $(".pdi_pedido_imputar_masivo_cmb_veh_coche_id_error").html(arr['pdi_pedido_imputar_masivo_cmb_veh_coche_id_error']);
                 $(".pdi_pedido_imputar_masivo_cmb_ope_operario_id_error").html(arr['pdi_pedido_imputar_masivo_cmb_ope_operario_id_error']);
                 */

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

/*
 Agregar Pedido PDE
 */
function setClickBtnAgregarPedidoPde() {
    $('.botonera .agregar-pedido-pde').unbind();
    $('.botonera .agregar-pedido-pde').click(function () {
        verModalAgregarPedidoPde();

        return false;
    });
}

function verModalAgregarPedidoPde() {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido_gestion/modal_pedido_agregar.php",
        data: '',
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 650,
                modal: true,
                title: 'Generar Pedido Externo (PDE)',
                close: function () {
                    $('.div_modal').dialog('close');
                    //refreshPdiPedidoDatos();

                    var pagina = $("#hdn_pag_actual").val();
                    refreshAdmAll('pdi_pedido_gestion', pagina);
                },
                hide: 'fade',
            });

        },
        success: function (data) {
            $('.div_modal').html(data);

            getFileCssPdePedido();
            getFileJsPdePedido();

            setInitPdePedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function getFileCssPdePedido() {
    $.ajax({
        url: "../css/admin/pde.css",
        success: function (data) {
            var css = "<style>" + data + "</style>";
            $("#form_div_modal").before(css);
        }
    });
}
function getFileJsPdePedido() {
    $.ajax({
        url: "../js/admin/modulos/pde_pedido.js",
        success: function (data) {
            var css = "<script>" + data + "</script>";
            $("#form_div_modal").before(css);
        }
    });
}



function setChangeTxtCantidadAjuste() {
    $("#pdi_pedido_ajuste_txt_cantidad").spinner({
        min: 1,
    });

    $(".pdi-agregar-ajuste #pdi_pedido_ajuste_txt_cantidad").spinner({
        min: 1,
        //max: 10,
        stop: function (event, ui) {
            var insumo = $('#pdi_pedido_ajuste_dbsug_ins_insumo_id').val();
            var panol_destino_id = null;
            var cantidad = $('#pdi_pedido_ajuste_txt_cantidad').val();
            refreshInsumosIdentificados(insumo, panol_destino_id, cantidad);
        }
    });
}

function setChangeTxtCantidadEntrega() {
    $("#pdi_pedido_txt_cantidad").spinner({
        min: 1,
    });

    $(".pdi-entrega #pdi_pedido_txt_cantidad").spinner({
        min: 1,
        //max: 10,
        stop: function (event, ui) {
            var insumo = $('#hdn_ins_insumo_id').val();
            var panol_destino_id = $('#hdn_pan_panol_id').val();
            var cantidad = $('#pdi_pedido_txt_cantidad').val();
            refreshInsumosIdentificados(insumo, panol_destino_id, cantidad);
        }
    });
}

function setChangeTxtCantidadEntregaOperario() {
    $("#pdi_pedido_entrega_txt_cantidad").spinner({
        min: 1,
    });

    $(".pdi-entrega-operario #pdi_pedido_entrega_txt_cantidad").spinner({
        min: 1,
        //max: 10,
        stop: function (event, ui) {
            var insumo = $('#pdi_pedido_entrega_dbsug_ins_insumo_id').val();
            var panol_id = $('#pdi_pedido_entrega_cmb_pan_panol_origen_id').val();
            var cantidad = $('#pdi_pedido_entrega_txt_cantidad').val();
            var coche_id = $('#pdi_pedido_entrega_cmb_veh_coche_id').val();
            var tarea_resuelta_id = $('#pdi_pedido_entrega_cmb_tal_tarea_resuelta_id').val();

            refreshInsumosIdentificadosEntregaOperario(insumo, panol_id, cantidad);
            refreshInsumosIdentificadosSalientesDeCoche(insumo, coche_id, cantidad, tarea_resuelta_id);
            refreshBloqueStock(insumo, panol_id);
        }
    });
}

function setChangeTxtCantidadDespachar() {
    $("#pdi_pedido_txt_cantidad").spinner({
        min: 1,
    });

    $(".pdi-despachar #pdi_pedido_txt_cantidad").spinner({
        min: 1,
        //max: 10,
        stop: function (event, ui) {
            var insumo = $('#hdn_ins_insumo_id').val();
            var panol_destino_id = $('#hdn_pan_panol_id').val();
            var cantidad = $('#pdi_pedido_txt_cantidad').val();

            refreshInsumosIdentificadosDespachar(insumo, panol_destino_id, cantidad);
        }
    });
}

function setChangeTxtCantidadRecibir() {
    $("#pdi_pedido_txt_cantidad").spinner({
        min: 1,
    });

    $(".pdi-recibir #pdi_pedido_txt_cantidad").spinner({
        min: 1,
        //max: 10,
        stop: function (event, ui) {
            var insumo = $('#hdn_ins_insumo_id').val();
            var panol_destino_id = $('#hdn_pan_panol_id').val();
            var cantidad = $('#pdi_pedido_txt_cantidad').val();

            refreshInsumosIdentificadosRecibir(insumo, panol_destino_id, cantidad);
        }
    });
}



function setClickBloqueStockInsumosUnoPanol() {
    $('.stock-insumo-panoles .uno-linea.seleccionable').unbind();
    $('.stock-insumo-panoles .uno-linea.seleccionable').click(function () {
        var panol_id = $(this).attr('panol_id');
        $(".pdi_pedido_rad_pan_panol_id_" + panol_id).attr('checked', 'checked');

        $('.uno-linea').removeClass('sel');
        $(this).addClass('sel');
    });
}


function setSubmitFormModalPdiPedido() {
    $('#form_pedido').unbind();
    $('#form_pedido').submit(function () {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "html",
            beforeSend: function (objeto) {
                $('.div_modal').html(img_loading);
            },
            success: function (data) {
                $('.div_modal').html(data);
                setInitPdiPedidos();
                setInit();

                setInitDbSuggest();
                setInitDbSuggestBoton();

                try {
                    // cerrar el modal automaticamente
                    var hdn_error = $("#hdn_error").val();
                    if (hdn_error == 0) {
                        // no hubo error
                        $('.div_modal').dialog('close');

                        var hdn_mensaje = $("#hdn_mensaje").val();
                        verDivMensaje('.div_listado_buscador', 'ok', hdn_mensaje, 2000);
                    }
                } catch (e) {
                }
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
        return false;
    });

    $("#form_buscador input[type=submit]").click(function () {
        $("#form_buscador input[type=submit]", $(this).parents("form")).removeAttr("clicked");
        $(this).attr("clicked", "true");
    });

}


/* Bloque Insumos Identificados */
function setClickBloqueInsumoIdentificadoUno() {
    $('.bloque-insumos-identificados .dbsuggest-id-hidden').unbind();
    $('.bloque-insumos-identificados .dbsuggest-id-hidden').change(function () {
        var ins_insumo_identificado_id = $(this).val();
        var cont = $(this).parents('.uno').attr('cont');
        getInsInsumoIdentificadoDatos(ins_insumo_identificado_id, cont);
    });
}
function getInsInsumoIdentificadoDatos(ins_insumo_identificado_id, cont) {
    if (ins_insumo_identificado_id == '')
        return;

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/get_ins_insumo_identificado_datos.php",
        data: 'ins_insumo_identificado_id=' + ins_insumo_identificado_id + '&cont=' + cont,
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
        },
        success: function (data) {

            var arr = data;

            var cont = arr['cont'];

            // cuando es ajuste
            $("#pdi_pedido_ajuste_txt_kilometraje_" + cont).val(arr['km']);
            $("#pdi_pedido_ajuste_cmb_ins_insumo_instancia_" + cont + "_id").val(arr['instancia_id']);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });

}

/* Bloque Insumos Identificados Saliente */
function setClickBloqueInsumoIdentificadoSalienteUno() {
    $('.bloque-insumos-identificados-saliente .dbsuggest-id-hidden').unbind();
    $('.bloque-insumos-identificados-saliente .dbsuggest-id-hidden').change(function () {
        var ins_insumo_identificado_id = $(this).val();
        var cont = $(this).parents('.uno').attr('cont');

        var cmb = $('#pdi_pedido_saliente_cmb_ins_insumo_instancia_' + cont + '_id');
        setInstanciaCmbPorInsumoIdentificado(ins_insumo_identificado_id, cmb);
        getInsInsumoIdentificadoSalienteDatos(ins_insumo_identificado_id, cont);
    });
}
function getInsInsumoIdentificadoSalienteDatos(ins_insumo_identificado_id, cont) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/get_ins_insumo_identificado_saliente_datos.php",
        data: 'ins_insumo_identificado_id=' + ins_insumo_identificado_id + '&cont=' + cont,
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
        },
        success: function (data) {

            var arr = data;

            var cont = arr['cont'];

            $("#pdi_pedido_saliente_txt_kilometraje_" + cont).val(arr['km']);
            $("#pdi_pedido_saliente_cmb_ins_insumo_instancia_" + cont + "_id").val(arr['instancia_id']);


            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });

}

/* Bloque Insumos Identificados Despachar */
function setClickBloqueInsumoIdentificadoDespacharUno() {
    $('.bloque-insumos-identificados.despachar .dbsuggest-id-hidden').unbind();
    $('.bloque-insumos-identificados.despachar .dbsuggest-id-hidden').change(function () {
        var ins_insumo_identificado_id = $(this).val();
        var cont = $(this).parents('.uno').attr('cont');
        getInsInsumoIdentificadoDatosDespachar(ins_insumo_identificado_id, cont);
    });
}
function getInsInsumoIdentificadoDatosDespachar(ins_insumo_identificado_id, cont) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/get_ins_insumo_identificado_datos_despachar.php",
        data: 'ins_insumo_identificado_id=' + ins_insumo_identificado_id + '&cont=' + cont,
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
        },
        success: function (data) {

            var arr = data;

            var cont = arr['cont'];

            // cuando es despacho
            $("#pdi_pedido_despachar_txt_kilometraje_" + cont).val(arr['km']);
            $("#pdi_pedido_despachar_cmb_ins_insumo_instancia_" + cont + "_id").val(arr['instancia_id']);


            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });

}

/* Bloque Insumos Identificados Recibir */
function setClickBloqueInsumoIdentificadoRecibirUno() {
    $('.bloque-insumos-identificados.recibir .dbsuggest-id-hidden').unbind();
    $('.bloque-insumos-identificados.recibir .dbsuggest-id-hidden').change(function () {
        var ins_insumo_identificado_id = $(this).val();
        var cont = $(this).parents('.uno').attr('cont');
        getInsInsumoIdentificadoDatosRecibir(ins_insumo_identificado_id, cont);
    });
}
function getInsInsumoIdentificadoDatosRecibir(ins_insumo_identificado_id, cont) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/get_ins_insumo_identificado_datos_recibir.php",
        data: 'ins_insumo_identificado_id=' + ins_insumo_identificado_id + '&cont=' + cont,
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
        },
        success: function (data) {

            var arr = data;

            var cont = arr['cont'];

            // cuando es despacho
            $("#pdi_pedido_recibir_txt_kilometraje_" + cont).val(arr['km']);
            $("#pdi_pedido_recibir_cmb_ins_insumo_instancia_" + cont + "_id").val(arr['instancia_id']);


            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });

}
/* Bloque Insumos Identificados Entrega Operario */
function setClickBloqueInsumoIdentificadoEntregaOperarioUno() {
    $('.bloque-insumos-identificados .dbsuggest-id-hidden').unbind();
    $('.bloque-insumos-identificados .dbsuggest-id-hidden').change(function () {
        var ins_insumo_identificado_id = $(this).val();
        var cont = $(this).parents('.uno').attr('cont');
        getInsInsumoIdentificadoDatos(ins_insumo_identificado_id, cont);
    });
}
function getInsInsumoIdentificadoDatos(ins_insumo_identificado_id, cont) {
    if (ins_insumo_identificado_id == '')
        return;

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/get_ins_insumo_identificado_datos.php",
        data: 'ins_insumo_identificado_id=' + ins_insumo_identificado_id + '&cont=' + cont,
        dataType: "json",
        beforeSend: function (objeto) {
            //$('.div_modal').html(img_loading);
        },
        success: function (data) {

            var arr = data;

            var cont = arr['cont'];

            // cuando es ajuste
            $("#pdi_pedido_entrega_txt_kilometraje_" + cont).val(arr['km']);
            $("#pdi_pedido_entrega_cmb_ins_insumo_instancia_" + cont + "_id").val(arr['instancia_id']);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });

}



/*
 Ver Ficha del Pedido
 */
function setClickPdiPedidoFicha() {
    $('#listado_adm_pdi_pedido .adm_botones_accion.pdi-ficha').unbind();
    $('#listado_adm_pdi_pedido .adm_botones_accion.pdi-ficha').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalFichaPedido(pedido_id);
    });
}

function verModalFichaPedido(pedido_id, numero_solapa)
{
    if (numero_solapa == "") {
        numero_solapa = 0;
    }

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_ficha.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 600,
                modal: true,
                title: 'Ficha del Pedido (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            refreshAdmUno('pdi_pedido_gestion', pedido_id);

            $('.div_modal').html(data);
            $(".tabs").tabs({active: numero_solapa});
            setInitPdiPedidos();
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
 * @creado_por Esteban Martinez
 * @creado 13/06/2017
 */
function setClickDivPdiComentario()
{
    $('.pdi_comentarios').unbind();
    $('.pdi_comentarios').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalFichaPedido(pedido_id, 1);
    });
}



/*
 Aceptar Pedido
 */
function setClickPdiPedidoAceptar() {
    $('.db_context .db_context_content .uno.aceptar').unbind();
    $('.db_context .db_context_content .uno.aceptar').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalAceptarPedido(pedido_id);
    });
}
function verModalAceptarPedido(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_aceptar.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 550,
                modal: true,
                title: 'Aceptar Pedido (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pdi_pedido_gestion', pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pdi_pedido_gestion', pedido_id);

            $('.div_modal').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/*
 Redirigir Pedido
 */
function setClickPdiPedidoRedirigir() {
    $('.db_context .db_context_content .uno.redirigir').unbind();
    $('.db_context .db_context_content .uno.redirigir').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalRedirigirPedido(pedido_id);
    });
}
function verModalRedirigirPedido(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_redirigir.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 650,
                modal: true,
                title: 'Redirigir Pedido (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pdi_pedido_gestion', pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pdi_pedido_gestion', pedido_id);

            $('.div_modal').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Despachar Pedido
 */
function setClickPdiPedidoDespachar() {
    $('.db_context .db_context_content .uno.despachar').unbind();
    $('.db_context .db_context_content .uno.despachar').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalDespacharPedido(pedido_id);
    });
}
function verModalDespacharPedido(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_despachar.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 550,
                modal: true,
                title: 'Despachar Pedido (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pdi_pedido_gestion', pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pdi_pedido_gestion', pedido_id);

            $('.div_modal').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Recibir Pedido
 */
function setClickPdiPedidoRecibir() {
    $('.db_context .db_context_content .uno.recibir').unbind();
    $('.db_context .db_context_content .uno.recibir').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalRecibirPedido(pedido_id);
    });
}
function verModalRecibirPedido(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_recibir.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 550,
                modal: true,
                title: 'Recibir Pedido (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pdi_pedido_gestion', pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pdi_pedido_gestion', pedido_id);

            $('.div_modal').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Rechazar Pedido
 */
function setClickPdiPedidoRechazar() {
    $('.db_context .db_context_content .uno.rechazar').unbind();
    $('.db_context .db_context_content .uno.rechazar').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalRechazarPedido(pedido_id);
    });
}
function verModalRechazarPedido(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_rechazar.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 450,
                modal: true,
                title: 'Rechazar Pedido (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pdi_pedido_gestion', pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pdi_pedido_gestion', pedido_id);
            $('.div_modal').html(data);
            setInitPdiPedidos();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}



function setClickPdiPedidoRechazarPorErroneo() {
    $('.db_context .db_context_content .uno.rechazar-por-erroneo').unbind();
    $('.db_context .db_context_content .uno.rechazar-por-erroneo').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalRechazarPedidoPorErroneo(pedido_id);
    });
}
function verModalRechazarPedidoPorErroneo(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_rechazar_por_erroneo.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 450,
                modal: true,
                title: 'Rechazar Pedido por Erroneo (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pdi_pedido_gestion', pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pdi_pedido_gestion', pedido_id);

            $('.div_modal').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/*
 Entregar Pedido
 */
function setClickPdiPedidoEntregar() {
    $('.db_context .db_context_content .uno.entregar').unbind();
    $('.db_context .db_context_content .uno.entregar').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalEntregarPedido(pedido_id);
    });
}
function verModalEntregarPedido(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_entregar.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 500,
                modal: true,
                title: 'Entregar Pedido a Operario (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pdi_pedido_gestion', pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pdi_pedido_gestion', pedido_id);

            $('.div_modal').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnPdiComentarioAgregar() {
    $('.db_context .db_context_content .uno.agregar-comentario').unbind();
    $('.db_context .db_context_content .uno.agregar-comentario').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalAgregarComentario(pedido_id);
    });
}
function verModalAgregarComentario(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar_comentario.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '80%',
                height: 450,
                modal: true,
                title: 'Agregar Comentario al Pedido (PDI)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pdi_pedido_gestion', pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pdi_pedido_gestion', pedido_id);
            $('.div_modal').html(data);
            setInitPdiPedidos();
            setInit();
            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


/*
 Generar Pedido PDE
 */
function setClickPdiPedidoGenerarPde() {
    $('.db_context .db_context_content .uno.generar-pde').unbind();
    $('.db_context .db_context_content .uno.generar-pde').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalGenerarPdePedido(pedido_id);
    });
}
function verModalGenerarPdePedido(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pde_pedido/modal_pedido_agregar.php",
        //data: 'pedido_id='+pedido_id,
        data: 'pdi_pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 550,
                modal: true,
                title: 'Generar Pedido a Proveedores (PDE)',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pdi_pedido_gestion', pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pdi_pedido_gestion', pedido_id);

            $('.div_modal').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Cancelar Consumo
 */
function setClickPdiPedidoCancelarConsumo() {
    $('.db_context .db_context_content .uno.cancelar-consumo').unbind();
    $('.db_context .db_context_content .uno.cancelar-consumo').click(function (e) {
        var pedido_id = $(this).parents('.uno').attr('identificador');
        verModalCancelarConsumo(pedido_id);
    });
}
function verModalCancelarConsumo(pedido_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_cancelar_consumo.php",
        data: 'pedido_id=' + pedido_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '90%',
                height: 550,
                modal: true,
                title: 'Cancelar Imputación de Insumo',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmUno('pdi_pedido_gestion', pedido_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {
            refreshAdmUno('pdi_pedido_gestion', pedido_id);

            $('.div_modal').html(data);
            //$('.div_modal').dialog('close');

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/* Dbsuggest Masivo Check Todos */
function setClickChkTodos() {
    $("#chk_pdi_pedidos").unbind();
    $("#chk_pdi_pedidos").click(function () {
        if ($(this).is(':checked')) {
            $(".chk_pdi_pedido_id").attr('checked', true);
        } else {
            $(".chk_pdi_pedido_id").attr('checked', false);
        }
    });
}

/* Dbsuggest Masivo Generar Remito PDF */
function setClickDbsugMasivoGenerarRemitoPDF() {
    $(".adm_botones_accion .db_context_content .uno.masivo.generar-remito").unbind();
    $(".adm_botones_accion .db_context_content .uno.masivo.generar-remito").click(function () {
        verModalMasivoGenerarRemitoPDF();
    });
}
function verModalMasivoGenerarRemitoPDF() {
    var form_datos = $("#form_datos");

    window.open("ajax/modulos/pdi_pedido_gestion/modal_pdf_remito.php?" + form_datos.serialize());
    return false;

    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_identificado_bandeja/modal_pdf_estado.php",
        data: form_datos.serialize(),
        dataType: 'text',
        contentType: 'application/pdf',
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 900,
                height: 600,
                modal: true,
                title: 'Estado de los Insumos',
                close: function () {
                    $('.div_modal').dialog('close');
                    refreshAdmAll('ins_insumo_identificado_bandeja', 1);
                }
            });
        },
        success: function (data) {
            $('.div_modal').html(data);

            setInitPdiPedidos();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


function setClickAgregarEntregaOperarioNuevaOT() {
    $('.bloque-ots_operario .boton.agregar-ot').unbind();
    $('.bloque-ots_operario .boton.agregar-ot').click(function (e) {
        var coche_id = $('#pdi_pedido_entrega_cmb_veh_coche_id').val();
        var panol_id = $('#pdi_pedido_entrega_cmb_pan_panol_origen_id').val();
        var operario_id = $('#pdi_pedido_entrega_cmb_ope_operario_id').val();

        setAgregarNuevaOt(coche_id, panol_id, operario_id);
    });
}
function setAgregarNuevaOt(coche_id, panol_id, operario_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/set_agregar_nueva_ot.php",
        data: 'coche_id=' + coche_id + '&panol_id=' + panol_id + '&operario_id=' + operario_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $('.bloque-ots_operario .boton.agregar-ot').html(img_loading);
        },
        success: function (data) {
            var ot_id = data;
            refreshBloqueOtsDeOperario(operario_id, coche_id, ot_id);

            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setClickVerModalFiltroOTs() {
    $('.bloque-ots_operario #btn_ot_buscar').unbind();
    $('.bloque-ots_operario #btn_ot_buscar').click(function (e) {
        var coche_id = $('#pdi_pedido_entrega_cmb_veh_coche_id').val();
        var panol_id = $('#pdi_pedido_entrega_cmb_pan_panol_origen_id').val();
        var operario_id = $('#pdi_pedido_entrega_cmb_ope_operario_id').val();

        verModalOtsBuscador(coche_id, panol_id, operario_id);
    });
}
function verModalOtsBuscador(coche_id, panol_id, operario_id) {
    var ot_id = $('#pdi_pedido_entrega_cmb_tal_orden_trabajo_id').val();

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_ot_buscador.php",
        data: 'ot_id=' + ot_id + '&coche_id=' + coche_id + '&operario_id=' + operario_id + '&panol_id=' + panol_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '70%',
                height: 450,
                modal: true,
                title: 'Buscar Orden de Trabajo',
                close: function () {
                    $('.div_modal_modal').dialog('close');
                    //refreshBloqueOtsDeOperario(operario_id, coche_id, ot_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal_modal').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();

            setKeyupFiltroOTBuscador();
            //verOtResultadosDeBusqueda('...');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function setKeyupFiltroOTBuscador() {
    var timeout;

    $("#txt_buscador_ot").unbind();
    $("#txt_buscador_ot").keyup(function (e) {
        var txt_buscador_ot = $(this).val();
        var palabra = txt_buscador_ot;

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }
        if (e.keyCode == 13) {
            if (txt_buscador_ot.length >= 2) {
                timeout = setTimeout('verOtResultadosDeBusqueda("' + palabra + '")', 500);
            } else if (txt_buscador_ot.length == 0) {
                timeout = setTimeout('verOtResultadosDeBusqueda("' + palabra + '")', 500);
            }
        }
    });
}

function verOtResultadosDeBusqueda(palabra) {
    var coche_id = $("#hdn_buscador_ot_coche_id").val();
    var operario_id = $("#hdn_buscador_ot_operario_id").val();
    var panol_id = $("#hdn_buscador_ot_panol_id").val();
    var chk_ver_todas_ots = 0;
    if ($("#chk_ver_todas_ots").is(':checked')) {
        var chk_ver_todas_ots = 1;
    }

    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/ver_ot_resultados_de_busqueda.php",
        data: 'palabra=' + palabra + '&coche_id=' + coche_id + '&operario_id=' + operario_id + '&panol_id=' + panol_id + "&chk_ver_todas_ots=" + chk_ver_todas_ots,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.buscador-ots .resultados').html(img_loading);
        },
        success: function (data) {

            $('.buscador-ots .resultados').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function  SetClickBotonBuscadorOtSeleccionar() {
    $('.div_modal_modal .buscador-ots .resultados .uno.ot .boton.seleccionar').unbind();
    $('.div_modal_modal .buscador-ots .resultados .uno.ot .boton.seleccionar').click(function () {
        var coche_id = $("#hdn_buscador_ot_coche_id").val();
        var operario_id = $("#hdn_buscador_ot_operario_id").val();
        var ot_id = $(this).parents('.uno.ot').attr('ot_id');

        $("#pdi_pedido_entrega_cmb_tal_orden_trabajo_id").val(ot_id);
        refreshBloqueOtsDeOperario(operario_id, coche_id, ot_id)

        $(".div_modal_modal").dialog('close');
    });
}
function  SetClickBotonBuscadorOtVincular() {
    $('.div_modal_modal .buscador-ots .resultados .uno.ot .boton.vincular').unbind();
    $('.div_modal_modal .buscador-ots .resultados .uno.ot .boton.vincular').click(function () {
        var coche_id = $("#hdn_buscador_ot_coche_id").val();
        var operario_id = $("#hdn_buscador_ot_operario_id").val();
        var ot_id = $(this).parents('.uno.ot').attr('ot_id');

        $.ajax({
            type: 'GET',
            url: "ajax/modulos/pdi_pedido_gestion/set_vincular_operario_a_ot.php",
            data: 'ot_id=' + ot_id + '&operario_id=' + operario_id,
            dataType: "html",
            beforeSend: function (objeto) {
                $('.buscador-ots .resultados').html(img_loading);
            },
            success: function (data) {

                $('.buscador-ots .resultados').html(data);
                setInitPdiPedidos();
                setInit();

                $("#pdi_pedido_entrega_cmb_tal_orden_trabajo_id").val(ot_id);
                refreshBloqueOtsDeOperario(operario_id, coche_id, ot_id)

                $(".div_modal_modal").dialog('close');

            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });

    });
}




function setClickAgregarEntregaOperarioNuevaTareaResuelta() {
    $('.bloque-ots_operario .boton.agregar-tarea_resuelta').unbind();
    $('.bloque-ots_operario .boton.agregar-tarea_resuelta').click(function (e) {
        var ot_id = $('#pdi_pedido_entrega_cmb_tal_orden_trabajo_id').val();
        var coche_id = $('#pdi_pedido_entrega_cmb_veh_coche_id').val();
        var panol_id = $('#pdi_pedido_entrega_cmb_pan_panol_origen_id').val();
        var operario_id = $('#pdi_pedido_entrega_cmb_ope_operario_id').val();

        tipo_imputacion = 'imputacion-individual';
        verModalAgregarNuevaTareaResuelta(ot_id, coche_id, operario_id, panol_id);
    });
}
function verModalAgregarNuevaTareaResuelta(ot_id, coche_id, operario_id, panol_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar_tarea_resuelta.php",
        data: 'ot_id=' + ot_id + '&coche_id=' + coche_id + '&operario_id=' + operario_id + '&panol_id=' + panol_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '80%',
                height: 500,
                modal: true,
                title: 'Agregar Tarea Resuelta',
                close: function () {
                    $('.div_modal_modal').dialog('close');
                    //refreshBloqueOtsDeOperario(operario_id, coche_id, ot_id);
                },
                hide: 'fade',
            });
            dbContextHideContent();
        },
        success: function (data) {

            $('.div_modal_modal').html(data);
            setInitPdiPedidos();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setChangeBuscadorTareas() {
    var timeout;
    var estado;
    var texto_tarea_base;

    // se quita el evento para despues reasignarse, es para evitar reasignacion
    $(".bloque-agregar-tarea-resuelta #txt_buscador_tarea").unbind();

    // se vuelve a asignar el evento
    $(".bloque-agregar-tarea-resuelta #txt_buscador_tarea").keyup(function (e) {
        estado = true;
        texto_tarea_base = $("#txt_buscador_tarea").val();

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        // controles
        if (texto_tarea_base.length < 3) {
            estado = false;
        }
        if (texto_tarea_base.length == 0) {
            estado = false;
        }
        if (e.keyCode != 13) {
            estado = false;
        }

        //alert(estado);
        if (estado) {
            timeout = setTimeout('refreshTareaBase("' + texto_tarea_base + '")', 1000);//refreshTareaBase(texto_tarea_base);
        }
    });
}
function refreshTareaBase(texto_tarea_base) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pdi_pedido_gestion/refresh_tarea_datos.php",
        data: "texto_tarea_base=" + texto_tarea_base,
        dataType: "html",
        beforeSend: function (objeto) {
            //$(".tareas .datos").hide();
            $('.bloque-agregar-tarea-resuelta .resultados').html(html_loading_img);
        },
        success: function (data) {
            //$(".tareas .datos").fadeIn();
            $(".bloque-agregar-tarea-resuelta .resultados").html(data);

            setInitPdiPedidos();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error "+ quepaso);
        }
    });
}
function setClickAgregarEntregaOperarioNuevaTareaResueltaUnoTarea() {
    $('.bloque-agregar-tarea-resuelta .resultados .uno').unbind();
    $('.bloque-agregar-tarea-resuelta .resultados .uno').click(function (e) {
        var tarea_id = $(this).attr('tarea_id');

        refreshBloqueTareaResueltaConfirmar(tarea_id);
    });
}
function refreshBloqueTareaResueltaConfirmar(tarea_id) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pdi_pedido_gestion/refresh_bloque_tarea_resuelta_confirmar.php",
        data: "tarea_id=" + tarea_id,
        dataType: "html",
        beforeSend: function (objeto) {
            //$(".tareas .datos").hide();
            $('.bloque-agregar-tarea-resuelta .col.datos .bloque_tarea_resuelta_confirmar_tarea').html(html_loading_img);
        },
        success: function (data) {
            //$(".tareas .datos").fadeIn();
            $(".bloque-agregar-tarea-resuelta .col.datos .bloque_tarea_resuelta_confirmar_tarea").html(data);

            setInitPdiPedidos();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error "+ quepaso);
        }
    });
}
function setClickBtnConfirmarRegistroTareaResuelta() {
    $('.bloque-agregar-tarea-resuelta #btn_registrar').unbind();
    $('.bloque-agregar-tarea-resuelta #btn_registrar').click(function (e) {
        var tarea_id = $('#hdn_tarea_id').val();
        var accion_id = $('#pdi_pedido_entrega_cmb_tal_tarea_accion_id').val();
        var ot_id = $('#hdn_ot_id').val();
        var coche_id = $('#hdn_coche_id').val();
        var panol_id = $('#hdn_panol_id').val();
        var operario_id = $('#hdn_operario_id').val();

        setRegistrarTareaResuelta(tarea_id, accion_id, ot_id, coche_id, panol_id, operario_id);
    });
}
function setRegistrarTareaResuelta(tarea_id, accion_id, ot_id, coche_id, panol_id, operario_id) {
    $.ajax({
        type: "POST",
        url: "ajax/modulos/pdi_pedido_gestion/set_registrar_tarea_resuelta.php",
        data: "tarea_id=" + tarea_id + "&accion_id=" + accion_id + "&ot_id=" + ot_id + "&coche_id=" + coche_id + "&panol_id=" + panol_id + "&operario_id=" + operario_id,
        dataType: "json",
        beforeSend: function (objeto) {
            //$(".tareas .datos").hide();
            $('.bloque-agregar-tarea-resuelta #btn_registrar').fadeOut();
            $('.bloque-agregar-tarea-resuelta .col.datos .bloque_tarea_resuelta_confirmar').html(html_loading_img);
        },
        success: function (data) {

            var tarea_resuelta_id = data;
            if (tipo_imputacion == 'imputacion-individual') {
                $('.div_modal_modal').dialog('close');
                refreshBloqueOtsDeOperario(operario_id, coche_id, ot_id, tarea_resuelta_id);
            }
            if (tipo_imputacion == 'imputacion-masiva') {
                $('.div_modal_modal_modal').dialog('close');
                refreshMasivoBloqueTareasResueltas();
            }


            setInitPdiPedidos();
            setInit();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("error "+ quepaso);
        }
    });
}

function controlDatosRegistrarEntregaOperario() {
    var formulario = $("#form_pedido").serialize();
    var estado = false;

    $.ajax({
        type: "GET",
        url: "ajax/modulos/pdi_pedido_gestion/control_registro_entrega_operario.php",
        data: formulario,
        dataType: "json",
        async: false,
        beforeSend: function (objeto) {
        },
        success: function (data) {
            var arr = data;

            // se limpian todos los errores
            $(".insumo-identificado-label-error").html('');

            if (arr['error'] === true) {

                $(".pdi_pedido_entrega_cmb_pan_panol_origen_id_error").html(arr['pdi_pedido_entrega_cmb_pan_panol_origen_id_error']);
                $(".pdi_pedido_entrega_dbsug_ins_insumo_id_error").html(arr['pdi_pedido_entrega_dbsug_ins_insumo_id_error']);
                $(".pdi_pedido_entrega_cmb_veh_coche_id_error").html(arr['pdi_pedido_entrega_cmb_veh_coche_id_error']);
                $(".pdi_pedido_entrega_cmb_ope_operario_id_error").html(arr['pdi_pedido_entrega_cmb_ope_operario_id_error']);
                $(".pdi_pedido_entrega_cmb_tal_orden_trabajo_id_error").html(arr['pdi_pedido_entrega_cmb_tal_orden_trabajo_id_error']);
                $(".pdi_pedido_entrega_cmb_tal_tarea_resuelta_id_error").html(arr['pdi_pedido_entrega_cmb_tal_tarea_resuelta_id_error']);
                $(".pdi_pedido_entrega_cantidad_stock_error").html(arr['pdi_pedido_entrega_cantidad_stock_error']);

                estado = false;
                $("#btn_guardar").val('Registrar Entrega a Operario');
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
