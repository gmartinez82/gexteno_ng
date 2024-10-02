// archivo js del modulo 'ins_insumo'
$(function ($) {
    setInitInsInsumoGestion();
});

function setInitInsInsumoGestion() {

    // barcode detection
    setBarcodeScannerDetection();

    // filtros
    setChangeFiltroTipoInsumo();
    setChangeFiltroEtiqueta();
    setChangeFiltroCategoria();
    setChangeFiltroMarca();
    setChangeFiltroMarcaInsumo();
    setChangeFiltroModelo();
    setChangeFiltroEstado();
    setChangeFiltroTipoListaPrecio();
    setChangeFiltroOrdenarPor();

    // buscador
    setKeyupBuscadorCodigoInterno();
    setClickBtnBuscadorCodigoInterno();
    setKeyupBuscadorAtributo();

    // acciones
    setClickInsInsumoGestionFicha();
    setClickInsInsumoGestionEnviarFichaTecnica();
    setClickInsInsumoGestionEnviarFichaTecnicaBtnEnviar();

    // ficha - vinculados
    setClickBtnRegistrarVinculado();
    setClickBtnEliminarVinculado();

    // ficha - similares
    setClickBtnRegistrarSimilar();
    setClickBtnEliminarSimilar();

    // ficha - costos
    setClickCostoAgregar();
    setClickCostoEditar();

    // ficha - proveedores
    setClickCostoReferencial();
    setClickCostoActualizar();

    // stock tabs
    setClickStockTabs();
    setKeyupStockAjuste();
    setClickEditarPuntosPanolCentral();
    setClickEditarPuntosPanolApoderado();

    // metodo que inicializa funcionalidades de carrito
    setInitCarrito();
}

function setBarcodeScannerDetection() {
    
    $(document).scannerDetection({
        timeBeforeScanTest: 300, // wait for the next character for upto 200ms
        avgTimeByChar: 100, // it's not a barcode if a character takes longer than 100ms
        minLength:4,
        ignoreIfFocusOn: '#txt_buscador',
        onComplete: function (barcode, qty) {
            $('#txt_buscador').val(barcode);
            setAdmBuscadorTop('ins_insumo_gestion');
        }
    });
}

function setClickStockTabs() {
    try {
        $(".tabs-stock").tabs();
    } catch (e) {
    }
}

function setKeyupStockAjuste(){
    var timeout;
    
    $('.txt_stock_cantidad').unbind();
    $('.txt_stock_cantidad').focus(function (e) {
         $(this).select();
    });    
    $('.txt_stock_cantidad').keypress(function (e) {
        var insumo_id = $(this).parents('.stock-en-panol').attr('ins_insumo_id');
        var ins_stock_resumen_id = $(this).parents('.stock-en-panol').attr('ins_stock_resumen_id');
        var cantidad = $(this).val();

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        if (e.keyCode === 13) {
            if(confirm('Desea realizar un ajuste de stock?')){
                setStockAjuste(insumo_id, ins_stock_resumen_id, cantidad);
            }else{
                refreshAdmUno('ins_insumo_gestion', insumo_id);                
            }
        }
    });    
}
function setStockAjuste(insumo_id, ins_stock_resumen_id, cantidad){
    
    $.ajax({
        type: 'POST',
        url: "ajax/modulos/ins_insumo_gestion/set_stock_ajuste.php",
        data: 'ins_stock_resumen_id=' + ins_stock_resumen_id + '&cantidad=' + cantidad,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            refreshAdmUno('ins_insumo_gestion', insumo_id);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}


// eventos del filtro
function setChangeFiltroTipoInsumo() {
    $('#cmb_filtro_ins_tipo_insumo_id').unbind();
    $('#cmb_filtro_ins_tipo_insumo_id').change(function () {
        setAdmBuscadorTop('ins_insumo_gestion');
    });
}

function setChangeFiltroEtiqueta() {
    $('#cmb_filtro_ins_etiqueta_id').unbind();
    $('#cmb_filtro_ins_etiqueta_id').change(function () {
        setAdmBuscadorTop('ins_insumo_gestion');
    });
}

function setChangeFiltroCategoria() {
    $('#cmb_filtro_ins_categoria_id').unbind();
    $('#cmb_filtro_ins_categoria_id').change(function () {
        setAdmBuscadorTop('ins_insumo_gestion');
    });
}

function setChangeFiltroMarca() {
    $('#cmb_filtro_veh_marca_id').unbind();
    $('#cmb_filtro_veh_marca_id').change(function () {
        setAdmBuscadorTop('ins_insumo_gestion');
    });
}

function setChangeFiltroMarcaInsumo() {
    $('#cmb_filtro_ins_marca_id').unbind();
    $('#cmb_filtro_ins_marca_id').change(function () {
        setAdmBuscadorTop('ins_insumo_gestion');
    });
}

function setChangeFiltroModelo() {
    $('#cmb_filtro_veh_modelo_id').unbind();
    $('#cmb_filtro_veh_modelo_id').change(function () {
        setAdmBuscadorTop('ins_insumo_gestion');
    });
}

function setChangeFiltroEstado() {
    $('#cmb_filtro_estado').unbind();
    $('#cmb_filtro_estado').change(function () {
        setAdmBuscadorTop('ins_insumo_gestion');
    });
}

function setChangeFiltroTipoListaPrecio() {
    $('#cmb_filtro_ins_tipo_lista_precio_id').unbind();
    $('#cmb_filtro_ins_tipo_lista_precio_id').change(function () {
        setAdmBuscadorTop('ins_insumo_gestion');
    });
}

function setChangeFiltroOrdenarPor() {
    $('#cmb_filtro_ordenar_por').unbind();
    $('#cmb_filtro_ordenar_por').change(function () {
        setAdmBuscadorTop('ins_insumo_gestion');
    });
}

/* Keyup Buscador codigo interno */
function setKeyupBuscadorCodigoInterno() {
    var timeout;

    $("#txt_buscador_codigo_interno").unbind();
    $("#txt_buscador_codigo_interno").keyup(function (e) {
        var txt_buscador = $(this).val();
        var modulo = $(this).parents('.div_listado_buscador').attr('modulo');

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        if (e.keyCode === 13) {
            if (txt_buscador.length >= 2) {
                timeout = setTimeout('setAdmBuscadorTop("' + modulo + '")', 500);
            } else if (txt_buscador.length == 0) {
                timeout = setTimeout('setAdmBuscadorTop("' + modulo + '")', 500);
            }
        }
    });
}

function setClickBtnBuscadorCodigoInterno() {
    $("#btn_buscador_codigo_interno").unbind();
    $("#btn_buscador_codigo_interno").click(function (e) {
        var modulo = $(this).parents('.div_listado_buscador').attr('modulo');
        setAdmBuscadorTop(modulo);
    });
}


/* Keyup Buscador atributo */
function setKeyupBuscadorAtributo() {
    var timeout;

    $("#txt_buscador_atributo").unbind();
    $("#txt_buscador_atributo").keyup(function (e) {
        var txt_buscador = $(this).val();
        var modulo = $(this).parents('.div_listado_buscador').attr('modulo');

        if (timeout) {
            clearTimeout(timeout);
            timeout = null;
        }

        if (e.keyCode === 13) {
            if (txt_buscador.length >= 2) {
                timeout = setTimeout('setAdmBuscadorTop("' + modulo + '")', 500);
            } else if (txt_buscador.length == 0) {
                timeout = setTimeout('setAdmBuscadorTop("' + modulo + '")', 500);
            }
        }
    });
}

/*
 Ver Ficha del Insumo
 */
function setClickInsInsumoGestionFicha() {
    $('#listado_adm_ins_insumo_gestion .adm_botones_accion.ver-ficha').unbind();
    $('#listado_adm_ins_insumo_gestion .adm_botones_accion.ver-ficha').click(function (e) {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        verModalFichaInsumo(insumo_id);
    });
    $('.grid-datos.ins-insumo-gestion .acciones .ver-ficha').unbind();
    $('.grid-datos.ins-insumo-gestion .acciones .ver-ficha').click(function () {
        var insumo_id = $(this).parents('.uno').attr('identificador');
        verModalFichaInsumo(insumo_id);
    });

}

function verModalFichaInsumo(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/modal_insumo_ficha.php",
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
                    refreshAdmUno('ins_insumo_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            refreshAdmUno('ins_insumo_gestion', insumo_id);

            $('.div_modal').html(data);
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

function setClickBtnRegistrarVinculado() {
    $(".vincular-nuevo-insumo #btn_vincular").unbind();
    $(".vincular-nuevo-insumo #btn_vincular").click(function () {
        var insumo_id = $(this).parents('.ficha-insumo').attr('insumo_id');
        var insumo_vinculado = $("#dbsug_ins_insumo_vinculado_id").val();

        setRegistrarVinculado(insumo_id, insumo_vinculado);
    });
}

function setRegistrarVinculado(insumo_id, insumo_vinculado) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/set_registrar_vinculado.php",
        data: 'insumo_id=' + insumo_id + '&insumo_vinculado=' + insumo_vinculado,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {

            refreshBloqueInsumosVinculados(insumo_id);

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

function setClickBtnEliminarVinculado() {
    $("#tbl_insumo_gestion_ficha_vinculados #btn_eliminar_vinculado").unbind();
    $("#tbl_insumo_gestion_ficha_vinculados #btn_eliminar_vinculado").click(function () {
        var insumo_id = $(this).parents('.ficha-insumo').attr('insumo_id');
        var insumo_vinculado = $(this).parents('.uno').attr('insumo_vinculado_id');

        setEliminarVinculado(insumo_id, insumo_vinculado);
    });
}

function setEliminarVinculado(insumo_id, insumo_vinculado) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/set_eliminar_vinculado.php",
        data: 'insumo_id=' + insumo_id + '&insumo_vinculado=' + insumo_vinculado,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {

            refreshBloqueInsumosVinculados(insumo_id);

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

function refreshBloqueInsumosVinculados(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/refresh_bloque_insumos_vinculados.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.insumos-vinculados').html(img_loading);
        },
        success: function (data) {

            $('.insumos-vinculados').html(data);

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

function setClickBtnRegistrarSimilar() {
    $(".similar-nuevo-insumo #btn_registrar_similar").unbind();
    $(".similar-nuevo-insumo #btn_registrar_similar").click(function () {
        var insumo_id = $(this).parents('.ficha-insumo').attr('insumo_id');
        var insumo_similar = $("#dbsug_ins_insumo_similar_id").val();

        setRegistrarSimilar(insumo_id, insumo_similar);
    });
}

function setRegistrarSimilar(insumo_id, insumo_similar) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/set_registrar_similar.php",
        data: 'insumo_id=' + insumo_id + '&insumo_similar=' + insumo_similar,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {

            refreshBloqueInsumosSimilares(insumo_id);

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

function setClickBtnEliminarSimilar() {
    $("#tbl_insumo_gestion_ficha_similares #btn_eliminar_similar").unbind();
    $("#tbl_insumo_gestion_ficha_similares #btn_eliminar_similar").click(function () {
        var insumo_id = $(this).parents('.ficha-insumo').attr('insumo_id');
        var insumo_similar = $(this).parents('.uno').attr('insumo_similar_id');

        setEliminarSimilar(insumo_id, insumo_similar);
    });
}

function setEliminarSimilar(insumo_id, insumo_similar) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/set_eliminar_similar.php",
        data: 'insumo_id=' + insumo_id + '&insumo_similar=' + insumo_similar,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {

            refreshBloqueInsumosSimilares(insumo_id);

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

function refreshBloqueInsumosSimilares(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/refresh_bloque_insumos_similares.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.insumos-similares').html(img_loading);
        },
        success: function (data) {

            $('.insumos-similares').html(data);

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

function setClickCostoAgregar() {
    $('#btn_costo_agregar').unbind();
    $('#btn_costo_agregar').click(function () {
        var insumo_id = $(this).parents('.ficha-insumo').attr('insumo_id');
        verModalCostoAgregar(insumo_id, 0);
    });
}

function setClickCostoEditar() {
    $('.div_modal #tab_costos .costos .editar').unbind();
    $('.div_modal #tab_costos .costos .editar').click(function () {
        var insumo_id = $(this).parents('.ficha-insumo').attr('insumo_id');
        var insumo_costo_id = $(this).parents('.uno').attr('insumo_costo_id');
        verModalCostoAgregar(insumo_id, insumo_costo_id);
    });
}

function verModalCostoAgregar(insumo_id, insumo_costo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/modal_costo_agregar.php",
        data: 'insumo_id=' + insumo_id + '&insumo_costo_id=' + insumo_costo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal_modal').html(img_loading);
            $('.div_modal_modal').dialog({
                width: '50%',
                height: 500,
                modal: true,
                title: '',
                close: function () {
                    //$('.div_modal').dialog('close');
                    refreshBloqueInsumoCostos(insumo_id);
                    refreshBloqueInsumoListasPrecios(insumo_id);
                }
            });
        },
        success: function (data) {
            $('.div_modal_modal').html(data);

            setInitInsInsumoGestion();

            setInit();
            setInitAccionesFormulario('div_modal_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshBloqueInsumoCostos(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/refresh_bloque_insumo_costos.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.div_modal .bloque-insumo-costos').html(data);
            setInitInsInsumoGestion();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function refreshBloqueInsumoListasPrecios(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/refresh_bloque_insumo_listas_precios.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.div_modal .bloque-insumo-listas-precios').html(data);
            setInitInsInsumoGestion();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickCostoReferencial() {
    $('.div_modal #tab_proveedores #tbl_insumo_gestion_ficha_proveedores .referencial').unbind();
    $('.div_modal #tab_proveedores #tbl_insumo_gestion_ficha_proveedores .referencial').click(function () {
        var prv_insumo_id = $(this).parents('.uno').attr('prv_insumo_id');
        var insumo_id = $(this).parents('.ficha-insumo').attr('insumo_id');

        setActualizarReferencial(insumo_id, prv_insumo_id);
    });
}
function setActualizarReferencial(insumo_id, prv_insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/set_actualizar_referencial.php",
        data: 'prv_insumo_id=' + prv_insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {

            refreshBloqueInsumoProveedores(insumo_id);

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

function setClickCostoActualizar() {
    $('.div_modal #tab_proveedores #tbl_insumo_gestion_ficha_proveedores .actualizar-costo').unbind();
    $('.div_modal #tab_proveedores #tbl_insumo_gestion_ficha_proveedores .actualizar-costo').click(function () {
        var prv_insumo_id = $(this).parents('.uno').attr('prv_insumo_id');
        var insumo_id = $(this).parents('.ficha-insumo').attr('insumo_id');

        if (confirm('Desea actualizar el costo del insumo a partir del costo del proveedor?')) {
            setActualizarCosto(insumo_id, prv_insumo_id);
        }
    });
}
function setActualizarCosto(insumo_id, prv_insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/set_actualizar_costo.php",
        data: 'prv_insumo_id=' + prv_insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {

            refreshBloqueInsumoCostos(insumo_id);
            refreshBloqueInsumoListasPrecios(insumo_id);
            refreshAdmUno('ins_insumo_gestion', insumo_id);

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

function refreshBloqueInsumoProveedores(insumo_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/refresh_bloque_insumo_proveedores.php",
        data: 'insumo_id=' + insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
        },
        success: function (data) {
            $('.div_modal .bloque-insumo-proveedores').html(data);
            setInitInsInsumoGestion();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Editar Puntos de Pedido Panol Apoderado
 */
function setClickEditarPuntosPanolCentral() {
    $('#listado_adm_ins_insumo_gestion .uno .stock-puntos.editar .puntos_panol_central').unbind();
    $('#listado_adm_ins_insumo_gestion .uno .stock-puntos.editar .puntos_panol_central').click(function (e) {
        var insumo_id = $(this).parents('.datos.stock-en-panol').attr('ins_insumo_id');
        var panol_id = $(this).parents('.datos.stock-en-panol').attr('pan_panol_id');
        var resumen_id = $(this).parents('.datos.stock-en-panol').attr('ins_stock_resumen_id');

        verModalPuntosPanolCentral(insumo_id, panol_id, resumen_id);
    });
}
function verModalPuntosPanolCentral(insumo_id, panol_id, resumen_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/modal_puntos_panol_central.php",
        data: 'insumo_id=' + insumo_id + '&panol_id=' + panol_id + '&resumen_id=' + resumen_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 800,
                height: 500,
                modal: true,
                title: 'Puntos de Pedido',
                close: function () {
                    refreshAdmUno('ins_insumo_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitInsInsumoGestion();
            setInit();

            setInitAccionesFormulario('div_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

/*
 Editar Puntos de Pedido Panol Apoderado
 */
function setClickEditarPuntosPanolApoderado() {
    $('#listado_adm_ins_insumo_gestion .uno .stock-puntos.editar .puntos_panol_apoderado').unbind();
    $('#listado_adm_ins_insumo_gestion .uno .stock-puntos.editar .puntos_panol_apoderado').click(function (e) {
        var insumo_id = $(this).parents('.datos.stock-en-panol').attr('ins_insumo_id');
        var panol_id = $(this).parents('.datos.stock-en-panol').attr('pan_panol_id');
        var resumen_id = $(this).parents('.datos.stock-en-panol').attr('ins_stock_resumen_id');

        verModalPuntosPanolApoderado(insumo_id, panol_id, resumen_id);
    });
}
function verModalPuntosPanolApoderado(insumo_id, panol_id, resumen_id) {
    $.ajax({
        type: 'GET',
        url: "ajax/modulos/ins_insumo_gestion/modal_puntos_panol_apoderado.php",
        data: 'insumo_id=' + insumo_id + '&panol_id=' + panol_id + '&resumen_id=' + resumen_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: 800,
                height: 500,
                modal: true,
                title: 'Puntos de Pedido',
                close: function () {
                    refreshAdmUno('ins_insumo_gestion', insumo_id);
                },
                hide: 'fade',
            });
        },
        success: function (data) {

            $('.div_modal').html(data);
            
            setInitInsInsumoGestion();
            setInit();

            setInitAccionesFormulario('div_modal', '');
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickInsInsumoGestionEnviarFichaTecnica() {
    $("#listado_adm_ins_insumo_gestion .adm_botones_accion.ins_insumo_gestion_enviar_ficha_tecnica").unbind();
    $("#listado_adm_ins_insumo_gestion .adm_botones_accion.ins_insumo_gestion_enviar_ficha_tecnica").click(function (e) {
        var ins_insumo_id = $(this).parents(".uno").attr("identificador");
        verModalInsInsumoGestionBotonEnviarFichaTecnica(ins_insumo_id);
    });
    $('.grid-datos.ins-insumo-gestion .acciones .ins_insumo_gestion_enviar_ficha_tecnica').unbind();
    $('.grid-datos.ins-insumo-gestion .acciones .ins_insumo_gestion_enviar_ficha_tecnica').click(function () {
        var ins_insumo_id = $(this).parents(".uno").attr("identificador");
        verModalInsInsumoGestionBotonEnviarFichaTecnica(ins_insumo_id);
    });

}

function verModalInsInsumoGestionBotonEnviarFichaTecnica(ins_insumo_id) {
    $.ajax({
        type: "GET",
        url: "ajax/modulos/ins_insumo_gestion/modal_ins_insumo_gestion_enviar_ficha_tecnica.php",
        data: 'ins_insumo_id=' + ins_insumo_id,
        dataType: "html",
        beforeSend: function (objeto) {
            $('.div_modal').html(img_loading);
            $('.div_modal').dialog({
                width: '85%',
                height: 600,
                modal: true,
                title: 'Ficha Tecnica del Insumo',
                close: function () {
                },
                hide: 'fade',
            });
        },
        success: function (data) {
            $('.div_modal').html(img_loading);
            $(".div_modal").html(data);

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

function setClickInsInsumoGestionEnviarFichaTecnicaBtnEnviar() {
    $(".div_modal .datos.enviar_ficha_tecnica #btn_enviar").unbind();
    $(".div_modal .datos.enviar_ficha_tecnica #btn_enviar").click(function (e) {
        var ins_insumo_id = $(this).parents(".datos").attr("ins_insumo_id");
        setInsInsumoGestionEnviarFichaTecnica(ins_insumo_id);
    });
}

function setInsInsumoGestionEnviarFichaTecnica(ins_insumo_id) {
    var form = $("#form_enviar_ficha_tecnica");

    $.ajax({
        type: "GET",
        url: "ajax/modulos/ins_insumo_gestion/set_ins_insumo_gestion_enviar_ficha_tecnica.php",
        data: form.serialize() + '&ins_insumo_id=' + ins_insumo_id,
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
