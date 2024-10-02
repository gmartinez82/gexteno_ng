// archivo js del modulo 'vta_presupuesto_conflicto'
$(function ($) {
    setInitVtaPresupuestoConflictoGestion();
});

function setInitVtaPresupuestoConflictoGestion() {
    setClickBtnActualizarImporte();
    setClickBtnActualizarImporteBtnGuardar();
    setClickBtnMantenerImporte();
    setClickBtnMantenerImporteBtnGuardar();
    
    setChangeCmbFiltroVtaPresupuestoCliCliente();
    setChangeCmbFiltroVtaPresupuestoVtaVendedor();
    setChangeCmbFiltroVtaPresupuestoCmbEstado();
}

function setChangeCmbFiltroVtaPresupuestoCliCliente() {
    $("#cmb_filtro_cli_cliente_id").unbind();
    $("#cmb_filtro_cli_cliente_id").change(function () {
        setAdmBuscadorTop("vta_presupuesto_conflicto_gestion");
    });
}
function setChangeCmbFiltroVtaPresupuestoVtaVendedor() {
    $("#cmb_filtro_vta_vendedor_id").unbind();
    $("#cmb_filtro_vta_vendedor_id").change(function () {
        setAdmBuscadorTop("vta_presupuesto_conflicto_gestion");
    });
}
function setChangeCmbFiltroVtaPresupuestoCmbEstado(){
    $(".col.vta_presupuesto_conflicto_estado .dato #cmb_filtro_vta_presupuesto_estado").unbind();
    $(".col.vta_presupuesto_conflicto_estado .dato #cmb_filtro_vta_presupuesto_estado").change(function (e){
        var cmb_filtro_vta_presupuesto_estado = $(this).find("option:selected").val();
        setFiltroCmbVtaPresupuestoConflictoEstado(cmb_filtro_vta_presupuesto_estado);
    });
}

function setFiltroCmbVtaPresupuestoConflictoEstado(cmb_filtro_vta_presupuesto_estado){
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_conflicto_gestion/set_vta_presupuesto_conflicto_gestion_buscador_top.php",
        data: "cmb_filtro_vta_presupuesto_estado=" + cmb_filtro_vta_presupuesto_estado,
        dataType: "html",
        beforeSend: function (objeto){
        },
        success: function (data){
            refreshAdmAll('vta_presupuesto_conflicto_gestion', 1);
            
            setInitVtaPresupuestoConflictoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnActualizarImporte(){
    $(".uno.vta_presupuesto_conflicto.actualizar").unbind();
    $(".uno.vta_presupuesto_conflicto.actualizar").click(function (e){
        var vta_presupuesto_conflicto_id = $(this).parents(".datos").attr("vta_presupuesto_conflicto_id");
        verModalActualizarImporte(vta_presupuesto_conflicto_id);
    });
}

function verModalActualizarImporte(vta_presupuesto_conflicto_id){
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_conflicto_gestion/modal_vta_presupuesto_conflicto_actualizar_importe.php",
        data: "vta_presupuesto_conflicto_id=" + vta_presupuesto_conflicto_id,
        dataType: "html",
        beforeSend: function (objeto){
            $(".div_modal").html(img_loading);
            $(".div_modal").dialog({
                width: 800,
                height: 400,
                modal: true,
                title: "Actualizar Importe",
                close: function () {
                    refreshAdmUno("vta_presupuesto_conflicto_gestion", vta_presupuesto_conflicto_id);
                },
                hide: "fade"
            });
        },
        success: function (data){
            $(".div_modal").html(data);
            setInitVtaPresupuestoConflictoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnActualizarImporteBtnGuardar(){
    $("#form_actualizar_importe .botonera #btn_guardar").unbind();
    $("#form_actualizar_importe .botonera #btn_guardar").click(function (e){
        var vta_presupuesto_conflicto_id = $(this).parents(".datos").attr("vta_presupuesto_conflicto_id");
        setBtnActualizarImporteBtnGuardar(vta_presupuesto_conflicto_id);
    });
}

function setBtnActualizarImporteBtnGuardar(vta_presupuesto_conflicto_id) {
    var form = $("#form_actualizar_importe");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_conflicto_gestion/set_vta_presupuesto_conflicto_actualizar_importe.php",
        data: form.serialize() + '&vta_presupuesto_conflicto_id=' + vta_presupuesto_conflicto_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal").dialog("close");
            }

            setInitVtaPresupuestoConflictoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnMantenerImporte(){
    $(".uno.vta_presupuesto_conflicto.mantener").unbind();
    $(".uno.vta_presupuesto_conflicto.mantener").click(function (e){
        var vta_presupuesto_conflicto_id = $(this).parents(".datos").attr("vta_presupuesto_conflicto_id");
        verModalMantenerImporte(vta_presupuesto_conflicto_id);
    });
}

function verModalMantenerImporte(vta_presupuesto_conflicto_id){
    $.ajax({
        type: "GET",
        url: "ajax/modulos/vta_presupuesto_conflicto_gestion/modal_vta_presupuesto_conflicto_mantener_importe.php",
        data: "vta_presupuesto_conflicto_id=" + vta_presupuesto_conflicto_id,
        dataType: "html",
        beforeSend: function (objeto){
            $(".div_modal").html(img_loading);
            $(".div_modal").dialog({
                width: 800,
                height: 400,
                modal: true,
                title: "Mantener Importe",
                close: function () {
                    refreshAdmUno("vta_presupuesto_conflicto_gestion", vta_presupuesto_conflicto_id);
                },
                hide: "fade"
            });
        },
        success: function (data){
            $(".div_modal").html(data);
            setInitVtaPresupuestoConflictoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}

function setClickBtnMantenerImporteBtnGuardar(){
    $("#form_mantener_importe .botonera #btn_guardar").unbind();
    $("#form_mantener_importe .botonera #btn_guardar").click(function (e){
        var vta_presupuesto_conflicto_id = $(this).parents(".datos").attr("vta_presupuesto_conflicto_id");
        setBtnMantenerImporteBtnGuardar(vta_presupuesto_conflicto_id);
    });
}

function setBtnMantenerImporteBtnGuardar(vta_presupuesto_conflicto_id) {
    var form = $("#form_mantener_importe");
    $.ajax({
        type: "POST",
        url: "ajax/modulos/vta_presupuesto_conflicto_gestion/set_vta_presupuesto_conflicto_mantener_importe.php",
        data: form.serialize() + '&vta_presupuesto_conflicto_id=' + vta_presupuesto_conflicto_id,
        dataType: "json",
        beforeSend: function (objeto) {
            $(".textbox").removeClass('input-error');
            $(".label-error").html("");
        },
        success: function (data) {
            var arr = data;

            if (arr["error"]) {
                $.each(arr, function (i, item) {
                    $("#" + i).addClass('input-error');
                    $("#" + i + "_error").html(arr[i]);
                });
            } else {
                $(".div_modal").dialog("close");
            }

            setInitVtaPresupuestoConflictoGestion();
            setInit();

            setInitDbSuggest();
            setInitDbSuggestBoton();
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}